<?php
	session_start(); 
	ob_start();
	include("conex.php");
	if(isset($_SESSION['sesion'])){
		$usuario = $_SESSION['user'];
	}
	if(!isset($_SESSION['modificado'])){
		$_SESSION['modificado']= "none";
	}
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
	<a class="activo" href="usuario.php">Usuario</a>
	<a href="referencias.php">Mis Referencias</a>
	<a href="../index.php">Generar</a>
</div>
<br><br><br><br><br><br>

<div name="user_error" id="user_error" style="display: none;">
	<label class="h3" style="margin-left: 60px;">Usuario<label>
	<div class="oops_error" name="oops_error" id="oops_error">
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

<div class="mod" id="mod" style="display: <?php echo $_SESSION['modificado']; $_SESSION['modificado']="none"?>">
	<img src="mod.png" alt="Image"/>
	<label class="h1" style="color:#008080; margin-left: 0px; float: left; text-align: center; padding: 7px 55px; padding-left: 10px; padding-right: 0px; font-size: 20px; font-weight: bold;">Datos modificados</label>
</div>

<br>
<div name="campo_user" id="campo_user" style="text-align: center;">
<form ACTION="usuario.php" METHOD="POST">
	<div  class="campo_user" style="margin-bottom: 80px;">
		<div style="width: 100%; text-align: center; margin-bottom: 12px;" ><img class="user_img" src="usere.png" alt="Image"/></div>
		<label class="h3" style="margin-top: 20px;" >Usuario<label>
		<div style="width: 85%; height: 0; border: none; background-color: transparent; border-top: 2px solid #008080; margin: auto; align-self: center; margin-top: 20px;" ></div>
		<div style="width: 90%;  text-align: left; padding-left: 35px; padding-top: 30px;">
			<label class="parametro" >Nombre:<label><br>
			<label class="valo" ><?php if(isset($_SESSION['sesion'])){ echo mysqli_fetch_array(mysqli_query($conex, "SELECT nombres_user FROM usuario WHERE id_usuario = '$usuario'" ))[0] . " " . mysqli_fetch_array(mysqli_query($conex, "SELECT apellidos_user FROM usuario WHERE id_usuario = '$usuario'" ))[0]; } ?><label><br><br><br>
			<label class="parametro" >Nombre de usuario:<label><br>
			<label class="valo" ><?php if(isset($_SESSION['sesion'])) echo mysqli_fetch_array(mysqli_query($conex, "SELECT username FROM usuario WHERE id_usuario = '$usuario'" ))[0] ?><label><br><br><br>
			<label class="parametro" >Correo:<label><br>
			<label class="valo" ><?php if(isset($_SESSION['sesion'])) echo mysqli_fetch_array(mysqli_query($conex, "SELECT email FROM usuario WHERE id_usuario = '$usuario'" ))[0] ?><label><br><br>
		</div>
		<button class="salir" style="margin-top: 15px;"><INPUT TYPE="submit" class="acept" value="Modificar" name="modificar"></input></button>
	</div>
	<button class="salir" style="margin-top: 0px; padding-top: 0px;"><a href="salir.php">Salir</a></button>
</form>
</div>


<div style="width: 800px; margin: auto;" name="modificar_div" id="modificar_div">
	<span style="float: left;"><div class="campo_user" style="width: 300px;">
		<form ACTION="usuario.php" METHOD="POST">
		<div style="width: 100%; text-align: center; margin-bottom: 12px;" ></div>
		<label class="h3" style="margin-top: 20px;" >Cambiar datos<label>
		<div style="width: 85%; height: 0; border: none; background-color: transparent; border-top: 2px solid #008080; margin: auto; align-self: center; margin-top: 30px;" ></div>
		<div style="width: 90%;  text-align: left; padding-left: 35px; padding-top: 30px;">
			<label class="parametro" >Nombres:<label><br>
			<INPUT TYPE="text" id="nombres" name="nombres" class="inputz" style="margin-top: 0px; " value="<?php if(isset($_SESSION['sesion'])){ echo mysqli_fetch_array(mysqli_query($conex, "SELECT nombres_user FROM usuario WHERE id_usuario = '$usuario'" ))[0]; } ?>"><br><br>
			<label class="parametro" >Apellidos:<label><br>
			<INPUT TYPE="text" id="apellidos" name="apellidos" class="inputz" style="margin-top: 0px; " value="<?php if(isset($_SESSION['sesion'])){ echo mysqli_fetch_array(mysqli_query($conex, "SELECT apellidos_user FROM usuario WHERE id_usuario = '$usuario'" ))[0]; } ?>"><br><br>
			<label class="parametro" >Nombre de usuario:<label><br>
			<INPUT TYPE="text" id="username" name="username" class="inputz" style="margin-top: 0px; " value="<?php if(isset($_SESSION['sesion'])) echo mysqli_fetch_array(mysqli_query($conex, "SELECT username FROM usuario WHERE id_usuario = '$usuario'" ))[0] ?>"><br>
			<label class="err" id="err_username_no" style="margin-left: 15px;">* Nombre de usuario no disponible</label><br>
			<label class="parametro" >Correo:<label><br>
			<INPUT TYPE="text" style="margin-top: 0px; " id="correo" name="correo" class="inputz" value="<?php if(isset($_SESSION['sesion'])) echo mysqli_fetch_array(mysqli_query($conex, "SELECT email FROM usuario WHERE id_usuario = '$usuario'" ))[0] ?>"><br>
			<label class="err" id="err_correo_no" style="margin-left: 15px;">* Correo electrónico no válido</label><br>
			<label class="err" id="err_vacios_datos" style="margin-left: 5px;">* Los campos son obligatorios</label>
			
		</div>
		<button class="salir"><INPUT TYPE="submit" class="acept" value="Aceptar" name="datos"></input></button>
		</form>
	</div></span>
	<span style="float: right;"><div class="campo_user" style="width: 300px;">
		<form ACTION="usuario.php" METHOD="POST">
		<div style="width: 100%; text-align: center; margin-bottom: 5px;" ></div>
		<label class="h3" style="margin-top: 20px;" >Cambiar<label><br>
		<label class="h3" style="margin-top: 20px;" >contraseña<label>
		<div style="width: 85%; height: 0; border: none; background-color: transparent; border-top: 2px solid #008080; margin: auto; align-self: center; margin-top: 20px; " ></div>
		<div style="width: 90%;  text-align: left; padding-left: 35px; padding-top: 30px;">
			<label class="parametro" >Contraseña actual:<label><br>
			<INPUT TYPE="password" id="contra" name="contra" class="inputz" style="margin-top: 0px; " >
			<label class="err" id="err_dife" style="margin-left: 5px;">* Contraseña errónea</label><br><br>
			<label class="parametro" >Contraseña nueva:<label><br>
			<INPUT TYPE="password" id="contra_nueva" name="contra_nueva" class="inputz" style="margin-top: 0px; " >
			<label class="err" id="err_contra_1_no" style="margin-left: 15px;">* Al menos 8 caracteres</label><br><br>
			<label class="parametro" >Confirmar contraseña:<label><br>
			<INPUT TYPE="password" id="confirmar" name="confirmar" class="inputz" style="margin-top: 0px; margin-bottom: 7px;" ><br>
			<label class="err" id="err" style="margin-left: 5px;">* No coinciden las contraseñas</label>
			<label class="err" id="err_vacios" style="margin-left: 5px;">* Los campos son obligatorios</label>
			
			
			<div style="width: 100%; text-align: center; margin-bottom: 10px;" ></div>
		</div>
		<button class="salir" ><INPUT TYPE="submit" class="acept" value="Aceptar" name="cambiar"></input></button>
		</form>
	</div></span>
</div>


<script src="usuario_script.js"></script>


<?php
	$_SESSION['modificado'] = "none";
	?><script type="text/javascript">
		$(document).ready(function(){
			document.getElementById('err_dife').style.display = "none";
			document.getElementById('err_vacios').style.display = "none";
			document.getElementById('err').style.display = "none";
			document.getElementById('err_vacios_datos').style.display = "none";
			document.getElementById('err_username_no').style.display = "none";
			document.getElementById('err_correo_no').style.display = "none";
			document.getElementById('err_contra_1_no').style.display = "none";
		})
	</script><?php
	if(isset($_SESSION['sesion'])){
		if($_SESSION['sesion'] == true){
			?><script type="text/javascript">
				$(document).ready(function(){
					document.getElementById('user_error').style.display = "none";
					document.getElementById('campo_user').style.display = "block";
					document.getElementById('modificar_div').style.display = "none";
				})
			</script><?php
			if(isset($_POST['modificar'])){
				?><script type="text/javascript">
					$(document).ready(function(){
						document.getElementById('user_error').style.display = "none";
						document.getElementById('campo_user').style.display = "none";
						document.getElementById('modificar_div').style.display = "block";
					})
				</script><?php
			}else if(isset($_POST['datos'])){
				?><script type="text/javascript">
					$(document).ready(function(){
						document.getElementById('user_error').style.display = "none";
						document.getElementById('campo_user').style.display = "none";
						document.getElementById('modificar_div').style.display = "block";
					})
				</script><?php
				$nombres = $_POST['nombres'];
				$apellidos = $_POST['apellidos'];
				$username = $_POST['username'];
				$correo = $_POST['correo'];
				$query = "SELECT id_usuario FROM usuario WHERE username = '$username' AND id_usuario != '$usuario'";
				$resul = mysqli_query($conex, $query);
				if($nombres=="" || $apellidos=="" || $username=="" || $correo==""){
					?><script type="text/javascript">$(document).ready(function(){
						document.getElementById('err_vacios_datos').style.display = "block";
					})</script><?php
				}else if(!empty($resul) && mysqli_num_rows($resul)>0){
					?><script type="text/javascript">$(document).ready(function(){
						document.getElementById('err_username_no').style.display = "block";
					})</script><?php
				}else if (strpos($correo, "@")===false){
					?><script type="text/javascript">$(document).ready(function(){
						document.getElementById('err_correo_no').style.display = "block";
					})</script><?php
				}else {
					$query = "UPDATE usuario SET nombres_user = '$nombres', apellidos_user = '$apellidos', email = '$correo', username = '$username' WHERE usuario.id_usuario = '$usuario'";
					$resul = mysqli_query($conex, $query);
					$_SESSION['modificado'] = "block";
					header("Location:usuario.php");
				}
			}else if(isset($_POST['cambiar'])){
				?><script type="text/javascript">
					$(document).ready(function(){
						document.getElementById('user_error').style.display = "none";
						document.getElementById('campo_user').style.display = "none";
						document.getElementById('modificar_div').style.display = "block";
					})
				</script><?php
				$contra = $_POST['contra'];
				$nueva = $_POST['contra_nueva'];
				$confirmar = $_POST['confirmar'];
				if($confirmar=="" || $contra=="" || $nueva==""){
					?><script type="text/javascript">
						$(document).ready(function(){
							document.getElementById('err_vacios').style.display = "block";
						})
					</script><?php
				}else{
					$query = "SELECT contrasena FROM usuario WHERE id_usuario = '$usuario'";
					
					$resul = mysqli_query($conex, $query);
					if(!empty($resul) && mysqli_num_rows($resul)===1 && password_verify($contra, mysqli_fetch_array($resul)[0])){
						if (strlen($nueva)<8){
							?><script type="text/javascript">
								$(document).ready(function(){
									document.getElementById('err_contra_1_no').style.display = "block";
								})
							</script><?php
						}else{
							if($nueva == $confirmar){
								$contras = password_hash($nueva, PASSWORD_DEFAULT);
								$query = "UPDATE usuario SET contrasena = '$contras' WHERE usuario.id_usuario = '$usuario'";
								$resul = mysqli_query($conex, $query);
								$_SESSION['modificado'] = "block";
								header("Location:usuario.php");
							}else{
								?><script type="text/javascript">
									$(document).ready(function(){
										document.getElementById('err').style.display = "block";
									})
								</script><?php
							}
						}
					}else{
						?><script type="text/javascript">
							$(document).ready(function(){
								document.getElementById('err_dife').style.display = "block";
							})
						</script><?php
					}
				}
			}
		}else{
			?><script type="text/javascript">
				$(document).ready(function(){
					document.getElementById('user_error').style.display = "block";
					document.getElementById('campo_user').style.display = "none";
					document.getElementById('modificar_div').style.display = "none";
				})
			</script><?php
		}
	}else{
		?><script type="text/javascript">
			$(document).ready(function(){
				document.getElementById('user_error').style.display = "block";
				document.getElementById('campo_user').style.display = "none";
				document.getElementById('modificar_div').style.display = "none";
			})
		</script><?php
	}
?>

</body>
</html>





