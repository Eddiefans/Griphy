<?php session_start(); ob_start();?>

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
		<a href="referencias.php">Mis Referencias</a>
		<a href="../index.php">Generar</a>
		<a class="activo" href="resultado.php" style="pointer-events: none; cursor: default;">Referencia Generada</a>
	</div>
	<div class="campo_ref" id="bloque_ref" name="bloque_ref" style="margin-top: 200px;">
		<h2>Referencia generada:</h2> 	
		<div class="ref">
			<i style="font-family: Candara; " id="refe"><?php echo $_SESSION['ref_texto'] ?> </i>
		</div>
		<div style="width: 76%; margin-left: 50px; margin-bottom: 55px;" class="añadido" id="añadido">
			<img src="anadido.png" alt="Image"/>
			<label class="h1" style="color:#f5f5f5; margin-left: 0px; float: left; text-align: center; padding: 0px 55px; padding-left: 10px;">Referencia guardada</label>
		</div>
		<div style="width: 76%; margin-left: 50px; margin-bottom: 55px;" class="añadido" id="noañadido">
			<label class="h1" style="color:#f5f5f5; margin-left: 0px; float: left; text-align: center; padding: 0px 55px; padding-left: 20px;">Referencia no guardada</label>
		</div>
	</div>
	<div style="margin: auto; width: 640px; margin-top: 20px;">
		<span style="float: left;"><button class="lin_gene"><a href="../index.php" style="float: left;" ><  Generar referencia</a></button></span>	
		<span style="float: right;"><button class="lin_gene"><a href="referencias.php" style="float: right;">Mis Referencias   ></a></button></span>
	</div>


<?php
	if(isset($_SESSION['sesion'])){
		if($_SESSION['sesion'] == true){
			?><script type="text/javascript">
				$(document).ready(function(){
					document.getElementById('añadido').style.display = "block";
					document.getElementById('noañadido').style.display = "none";
				})
			</script><?php
		}else{
			?><script type="text/javascript">
				$(document).ready(function(){
					document.getElementById('añadido').style.display = "none";
					document.getElementById('noañadido').style.display = "block";
				})
			</script><?php
		}
	}else{
		?><script type="text/javascript">
			$(document).ready(function(){
				document.getElementById('añadido').style.display = "none";
				document.getElementById('noañadido').style.display = "block";
			})
		</script><?php
	}
?>

</body>
</html>