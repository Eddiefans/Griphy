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
<br><br>

<FORM ACTION="registro.php" METHOD="POST">
	<div class="campo_user" style=" width: 450px;background-color: #b3cccc; border: 3px solid #b3cccc">
		<div style="width: 100%; text-align: center; margin-bottom: 12px;" ><img class="user_img" src="registro.png" style="width: 100px;" alt="Image"/></div>
		<label class="h3" style="margin-top: 20px; color: #004d4d">Registrarse<label>
		<div style="width: 85%; height: 0; border: none; background-color: transparent; border-top: 2px solid #004d4d; margin: auto; align-self: center; margin-top: 20px;" ></div>
		<div style="width: 100%;  text-align: left; padding-left: 35px; padding-top: 30px;">
			<br><label class="parametro" style="color: #004d4d">Nombres:<label><br>
			<INPUT TYPE="text" id="nombres_text" name="nombres_text" SIZE=29 class="inputz" style="width: 80%;"><br>
			<label class="err" id="err_nombres" style="margin-left: 15px;">* Este campo es obligatorio</label><br>


			<br><label class="parametro" style="color: #004d4d">Apellidos:<label><br>
			<INPUT TYPE="text" id="apellidos_text" name="apellidos_text" SIZE=29 class="inputz" style="width: 80%;"><br>
			<label class="err" id="err_apell" style="margin-left: 15px;">* Este campo es obligatorio</label><br>


			<br><label class="parametro" style="color: #004d4d">Nombre de usuario:<label><br>
			<INPUT TYPE="text" id="username_text" name="username_text" SIZE=29 class="inputz" style="width: 80%;"><br>
			<label class="err" id="err_username" style="margin-left: 15px;">* Este campo es obligatorio</label>
			<label class="err" id="err_username_no" style="margin-left: 15px;">* Nombre de usuario no disponible</label><br>


			<br><label class="parametro" style="color: #004d4d">Correo electrónico:<label><br>
			<INPUT TYPE="text" id="correo_text" name="correo_text" SIZE=29 class="inputz" style="width: 80%;"><br>
			<label class="err" id="err_correo" style="margin-left: 15px;">* Este campo es obligatorio</label>
			<label class="err" id="err_correo_no" style="margin-left: 15px;">* Correo electrónico no válido</label><br>


			<br><label class="parametro" style="color: #004d4d">Contraseña:<label><br>
			<INPUT TYPE="password" id="contra_text" name="contra_text" SIZE=29 class="inputz" style="width: 80%;"><br>
			<label class="err" id="err_contra_1" style="margin-left: 15px;">* Este campo es obligatorio</label>
			<label class="err" id="err_contra_1_no" style="margin-left: 15px;">* Al menos 8 caracteres</label><br>


			<br><label class="parametro" style="color: #004d4d;"> Confirmar contraseña:<label><br>
			<INPUT TYPE="password" id="contra_text_co" name="contra_text_co" SIZE=29 class="inputz" style="width: 80%;"><br>
			<label class="err" id="err_contra_2" style="margin-left: 15px;">* Este campo es obligatorio</label>
			<label class="err" id="err_contra_co" style="margin-left: 15px;">* Las contraseñas no coinciden</label><br>
		</div>
	
		<button class="salir"><INPUT TYPE="submit" class="acept" value="Aceptar"></input></button>
	</div>
</form>
<script src="registro.js"></script>


<?php
	if(isset($_POST['nombres_text'])){
		$error = false;
		$nombres=$_POST['nombres_text'];
		$aux = $nombres . " ";
		$nombres = "";
		for($i=0; $i<str_word_count($_POST['nombres_text']); $i++){
			while(strpos($aux, " ")===0){
				$aux = substr($aux, 1);
			}
			$nombres = $nombres . substr($aux, 0, strpos($aux, " ")+1);
			$aux = substr($aux, strpos($aux, " ")+1);
		}
		$apellidos=$_POST['apellidos_text'];
		$aux = $apellidos . " ";
		$apellidos = "";
		for($i=0; $i<str_word_count($_POST['apellidos_text']); $i++){
			while(strpos($aux, " ")===0){
				$aux = substr($aux, 1);
			}
			$apellidos = $apellidos . substr($aux, 0, strpos($aux, " ")+1);
			$aux = substr($aux, strpos($aux, " ")+1);
		}
		$nombres = ucwords($nombres);
		$apellidos = ucwords($apellidos);
		$username=strtolower($_POST['username_text']);
		$correo=trim($_POST['correo_text']);
		$contra=$_POST['contra_text'];
		$contra_co=$_POST['contra_text_co'];
		if($nombres===""){
			$error = true;
			?><script type="text/javascript">$(document).ready(function(){
				document.getElementById('err_nombres').style.display = "block";
			})</script><?php
		}else{
			?><script type="text/javascript">$(document).ready(function(){
				$('#nombres_text').val("<?php echo $nombres ?>");
			})</script><?php
		}
		if($apellidos===""){
			$error = true;
			?><script type="text/javascript">$(document).ready(function(){
				document.getElementById('err_apell').style.display = "block";
			})</script><?php
		}else{
			?><script type="text/javascript">$(document).ready(function(){
				$('#apellidos_text').val("<?php echo $apellidos ?>");
			})</script><?php
		}
		if($username===""){
			$error = true;
			?><script type="text/javascript">$(document).ready(function(){
				document.getElementById('err_username').style.display = "block";
			})</script><?php
		}else{
			?><script type="text/javascript">$(document).ready(function(){
				$('#username_text').val("<?php echo $username ?>");
			})</script><?php
		}
		if($correo===""){
			$error = true;
			?><script type="text/javascript">$(document).ready(function(){
				document.getElementById('err_correo').style.display = "block";
			})</script><?php
		}else if (strpos($correo, "@")===false){
			?><script type="text/javascript">$(document).ready(function(){
				document.getElementById('err_correo_no').style.display = "block";
			})</script><?php
		}else{
			?><script type="text/javascript">$(document).ready(function(){
				$('#correo_text').val("<?php echo $correo ?>");
			})</script><?php
		}
		if($contra===""){
			$error = true;
			?><script type="text/javascript">$(document).ready(function(){
				document.getElementById('err_contra_1').style.display = "block";
			})</script><?php
			if($contra_co===""){
				?><script type="text/javascript">$(document).ready(function(){
					document.getElementById('err_contra_2').style.display = "block";
				})</script><?php
			}
		}else if (strlen($contra)<8){
			$error = true;
			?><script type="text/javascript">$(document).ready(function(){
				document.getElementById('err_contra_1_no').style.display = "block";
			})</script><?php
			if($contra_co===""){
				?><script type="text/javascript">$(document).ready(function(){
					document.getElementById('err_contra_2').style.display = "block";
				})</script><?php
			}
		}else{
			if($contra_co===""){
				$error = true;
				?><script type="text/javascript">$(document).ready(function(){
					document.getElementById('err_contra_2').style.display = "block";
				})</script><?php
			}else{
				if($contra===$contra_co){
					?><script type="text/javascript">$(document).ready(function(){
						$('#contra_text').val("<?php echo $contra ?>");
						$('#contra_text_co').val("<?php echo $contra_co ?>");
					})</script><?php
				}else{
					$error = true;
					?><script type="text/javascript">$(document).ready(function(){
						document.getElementById('err_contra_co').style.display = "block";
					})</script><?php
				}
			}
		}
		if($error==false){
			$contra = password_hash($contra, PASSWORD_DEFAULT);
			$query = "SELECT id_usuario FROM usuario WHERE username = '$username'" ;
			$resul = mysqli_query($conex, $query);
			if(empty($resul) || mysqli_num_rows($resul)===0){
				$_SESSION['sesion']=true;
				$query = "SELECT id_usuario FROM usuario ORDER BY id_usuario DESC LIMIT 1";
				$resul = mysqli_query($conex, $query);
				if (empty($resul) || mysqli_num_rows($resul)===0){
				    $id = 0;
				}else{
				    $usuarios_ids =mysqli_fetch_array($resul);
				    $id = $usuarios_ids[0]+1;
				}
				$query = "INSERT INTO usuario(id_usuario, nombres_user, apellidos_user, email, username, contrasena) VALUES ('$id', '$nombres','$apellidos','$correo','$username','$contra')";
				$resul = mysqli_query($conex, $query);
				$query = "SELECT id_usuario FROM usuario WHERE username = '$username'";
				$resul = mysqli_query($conex, $query);
				$usuario=mysqli_fetch_array($resul);
				$_SESSION['user']=$usuario[0];
				header("Location:usuario.php");
			}else{
				?><script type="text/javascript">$(document).ready(function(){
					document.getElementById('err_username_no').style.display = "block";
					$('#username_text').val("");
					$('#contra_text').val("");
					$('#contra_text_co').val("");
				})</script><?php
			}
		}
	}
?>
</body>
</html>


