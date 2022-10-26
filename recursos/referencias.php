<?php
	session_start();
	ob_start();
	$usuario =  $_SESSION['user'];
	include("conex.php");
	$use="generador";
	$pass="generador_griphy";
?>


<!DOCTYPE html>
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
	<a class="activo" href="referencias.php">Mis Referencias</a>
	<a href="../index.php">Generar</a>
</div>
<br><br><br><br><br><br>
<div id="user_error" style="display: none;">
	<label class="h3" style="margin-left: 60px;">Mis Referencias<label>
	<div class="oops_error" id="oops_error">
		<img src="non-user.png" alt="Image"/>
		<span style="float: right; width: 57%; height: 100%; ">
			<label class="h1">Oops...</label><br>
			<label class="h2">No has iniciado sesión</label><br><br><br>
			<div style="margin: auto; width: 250px; margin-top: 60px;">
				<span><button class="lin_user"><a href="iniciar_sesion.php">Iniciar sesión</a></button></span>
				<br><br>
				<span><button class="lin_user"><a class="al" href="registro.php" style="padding-right: 28px; padding-left: 28px;">Registrarse</a></button></span>
			</div>
		</span>
	</div>
</div>
<div id="campo_ref" style="text-align: center">
	
	<form ACTION="referencias.php" METHOD="POST">
		<label class="h3" style="font-size: 25px; letter-spacing: 4px;">Mis Referencias</label><br><br>
		<div id="vacio"><br><br><br><br><br><br><br><br><br><br><br><label class="h2" style="color: #00b3b3; margin-right: 0px;">No tienes referencias guardadas</label><br><br><br><br><br> <span><button class="lin_gen" style="background-color: #008080; padding: 15px; border-radius: 10px;"><a href="../index.php" style="color: white;">Generar referencia</a></button></span></div>
		



<?php
	if(isset($_SESSION['sesion'])){
		if($_SESSION['sesion'] == true){
			?><script type="text/javascript">
				$(document).ready(function(){
					document.getElementById('user_error').style.display = "none";
					document.getElementById('campo_ref').style.display = "block";
					document.getElementById('vacio').style.display = "none";
					document.getElementById('subm').style.display = "block";
					document.getElementById('err_sele').style.display = "none";
				})
			</script><?php
			$query = "SELECT num_refs FROM usuario WHERE id_usuario = '$usuario'";
			if(mysqli_fetch_array(mysqli_query($conex, $query))[0]==0){
				?><script type="text/javascript">
				$(document).ready(function(){
				document.getElementById('vacio').style.display = "block";
				document.getElementById('subm').style.display = "none";
				document.getElementById('err_sele').style.display = "none";
				})</script><?php
			}else{
				$query = "SELECT ref_texto FROM referencia WHERE id_usuario = '$usuario'";
				$resul = mysqli_query($conex, $query);
				$long = mysqli_num_rows($resul);
				for($i=0; $i< $long; $i++){
					$referencias = mysqli_fetch_array($resul);?>
					<div style="text-align: left; width: 770px; margin: auto">
					<INPUT TYPE="checkbox" NAME="eliminar[]" VALUE="<?php echo $referencias[0] ?>" style="float: left; margin-top: 25px;"/>
					<div class="re" style="text-align: left; width: 600px; ">
					<label class="h6" id="refe"><?php echo $referencias[0]; ?> </label>
					</div></div><?php
				}
			}	
		}else{
			?><script type="text/javascript">
				$(document).ready(function(){
					document.getElementById('user_error').style.display = "block";
					document.getElementById('campo_ref').style.display = "none";
					document.getElementById('vacio').style.display = "none";
					document.getElementById('subm').style.display = "none";
					document.getElementById('err_sele').style.display = "none";
				})
			</script><?php
		}
	}else{
		?><script type="text/javascript">
			$(document).ready(function(){
				document.getElementById('user_error').style.display = "block";
				document.getElementById('campo_ref').style.display = "none";
				document.getElementById('vacio').style.display = "none";
				document.getElementById('subm').style.display = "none";
				document.getElementById('err_sele').style.display = "none";
			})
		</script><?php
	}
?>

<label class="err" id="err_sele" style="margin-left: 0px;">* Selecciona la referencia</label>
<div class="subm" id="subm">
	<INPUT class="gri" name="subm" TYPE="submit" style="width: 300px; padding:10px;" VALUE="Borrar referencias seleccionadas" />
</div>
</form>

<div>


<script src="referencias_script.js"></script>


<?php
	if(isset($_POST['subm'])){
		if(isset($_POST['eliminar'])){
			foreach($_POST['eliminar'] as $borrar){
				$query = "CALL eliminar_ref('$borrar')";
				$resul = mysqli_query($conex, $query);
			}
			header("Location:referencias.php");
		}else{
			?><script type="text/javascript">
				$(document).ready(function(){
					document.getElementById('err_sele').style.display = "block";
				})
			</script><?php
		}
	}
?>
</body>
</html>