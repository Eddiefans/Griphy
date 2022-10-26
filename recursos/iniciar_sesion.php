<?php
	session_start();
	ob_start();
	include("conex.php");
?>

<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<script src="jquery_tool.js"></script>
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>



<div class="logo">
	<img src="logo_griphy.png" alt="Image"/>
</div>

<div class="barra">
	<a href="usuario.php">Usuario</a>
	<a href="referencias.php">Mis Referencias</a>
	<a href="../index.php">Generar</a>
</div>
<br><br><br><br><br><br>
<br><br><br>

<FORM ACTION="iniciar_sesion.php" METHOD="POST">
	<div class="campo_user" style="background-color: #b3cccc; border: 3px solid #b3cccc">
		<div style="width: 100%; text-align: center; margin-bottom: 12px;" ><img class="user_img" src="iniciar.png" alt="Image"/></div>
		<label class="h3" style="margin-top: 20px; color: #004d4d">Iniciar sesión<label>
		<div style="width: 85%; height: 0; border: none; background-color: transparent; border-top: 2px solid #004d4d; margin: auto; align-self: center; margin-top: 20px;" ></div>
		<div style="width: 100%;  text-align: left; padding-left: 35px; padding-top: 30px;">
			<label class="parametro" style="color: #004d4d">Nombre de usuario:<label><br>
			<INPUT TYPE="text" id="username_text" name="username_text" SIZE=29 class="inputz" ><br>
			<label class="err" id="err_username" style="margin-left: 15px;">* Este campo es obligatorio</label><br>


			<label class="parametro" style="color: #004d4d">Contraseña:<label><br>
			<INPUT TYPE="password" id="contra_text" name="contra_text" SIZE=29 class="inputz" ><br>
			<label class="err" id="err_contra" style="margin-left: 15px;">* Este campo es obligatorio</label>
			<label class="err" id="err_datos" style="margin-left: 15px;">* Los datos no coinciden</label><br>
		</div>
	
		<button class="salir"><INPUT TYPE="submit" class="acept" value="Aceptar"></input></button>
	</div>
</form>
<script src="iniciar_sesion.js"></script>

<?php
	if(isset($_POST['username_text'])){
		$error = false;
		$username=strtolower($_POST['username_text']);
		$contra=$_POST['contra_text'];

		if($username===""){
			$error = true;
			
			?><script type="text/javascript">$(document).ready(function(){
				document.getElementById('err_username').style.display = "block";
				$('#contra_text').val("");
			})</script><?php
		}else{
			?><script type="text/javascript">$(document).ready(function(){
				$('#username_text').val("<?php echo $username ?>");
			})</script><?php
		}
		if($contra===""){
			$error = true;
			?><script type="text/javascript">$(document).ready(function(){
				document.getElementById('err_contra').style.display = "block";
			})</script><?php
		}
		if($error===false){
			$query = "SELECT contrasena FROM usuario WHERE username = '$username'" ;
			$resul = mysqli_query($conex, $query);
			if(!empty($resul) && mysqli_num_rows($resul)===1){
				if(password_verify($contra, mysqli_fetch_array($resul)[0])){
					$query = "SELECT id_usuario FROM usuario WHERE username = '$username'" ;
					$resul = mysqli_query($conex, $query);
					$_SESSION['sesion']=true;
					$resul=mysqli_fetch_array($resul);
					$_SESSION['user']=$resul[0];
					header('Location:usuario.php');
				}else{
					?><script type="text/javascript">$(document).ready(function(){
						document.getElementById('err_datos').style.display = "block";
						$('#contra_text').val("");
						$('#username_text').val("");
					})</script><?php
				}
			}else{
				?><script type="text/javascript">$(document).ready(function(){
					document.getElementById('err_datos').style.display = "block";
					$('#contra_text').val("");
					$('#username_text').val("");
				})</script><?php
			}
		}
	}
?>

</body>
</html>