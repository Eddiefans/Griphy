<?php
	session_start();
?>
<?php
	ob_start();
	include("recursos/conex.php");
	$use = "griphyor_generador";
	$pass = "generador_griphy";
	$conex = mysqli_connect($server, $use, $pass, $db);
?>

<HTML>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<script src="recursos/jquery_tool.js"></script>	
	<link rel="stylesheet" type="text/css" href="recursos/estilos.css">
</head>
<BODY>




<div class="logo">
	<img src="recursos/logo_griphy.png" alt="Image"/>
</div>

<div class="barra">
	<a href="recursos/usuario.php">Usuario</a>
	<a href="recursos/referencias.php">Mis Referencias</a>
	<a class="activo" href="index.php">Generar</a>
</div>




<FORM ACTION="index.php" METHOD="POST">






	<div class="campo1">
		<h1>Título *</h1> <INPUT TYPE="text" id="titulo_text" name="titulo_text" SIZE="40" class="inputx" style="margin-bottom: 0px;">
		<br><label class="err" id="err_titulo" style="margin-left: 17px; " >* Este campo es obligatorio<br></label>
		<br>
		<h1 style="margin-top: 10px;">URL *</h1> <INPUT TYPE="text" id="url_text" name="url_text" SIZE="40" class="inputx" style="margin-bottom: 0px;">
		<br><label class="err" id="err_url" style="margin-left: 17px;">* Este campo es obligatorio</label>
	</div>



	<div class="campos">

		<label class="h2">Autor *</label> 
		<INPUT TYPE="checkbox" name="autor_desco_check" id="autor_desco_check" class="switch_1">
		<label class="desco">Desconocido</label>


		<div id = "autor_div" style="margin-top: 30px;">

			<div id = "nombres_div">
				<label class="h1">Nombres:</label>
				<INPUT TYPE="text" id="nombres_text" name="nombres_text" SIZE=29 class="inputy" style="margin-bottom: 0px;">
				<br>
				<label class="err" id="err_nombres">* Este campo es obligatorio<br></label>
				<br>
				<label class="h1" style="margin-top: 0px; margin-right: 8px;">Apellido:</label>
				<INPUT TYPE="text" id="apellido_text" name="apellido_text" SIZE=29 class="inputy" style="margin-bottom: 0px;">
				<br><label class="err" id="err_apellido">* Este campo es obligatorio</label>
			</div>

			<div id = "orga_div">
				<label class="h1">Organización:</label>
				<INPUT TYPE="text" id="orga_text" name="orga_text" SIZE=29 class="inputs" style="margin-bottom: 0px;">
				<br><label class="err" id="err_orga" style="margin-left: 130px;">* Este campo es obligatorio</label>
			</div>

			<div class="wrap">
				<div class="checkbox">
					<input type="checkbox" name="autor_orga_check" id="autor_orga_check" >
					<label for="autor_orga_check">Organización</label>
				</div>
			</div>

		</div>

	</div>


	<div id = "autor_div_2" class="campos">
		<div style="margin-bottom: 35px;">
			<label class="h2" style="margin-right: 545px;">Autor 2 *</label> <span><button type="button" id= autor_borrar_bt_2 class="borrar_bt"><img src="recursos/borrar.png" class="borrar_img"/></button></span>
		</div>
		<div id = "nombres_div_2">
			<label class="h1">Nombres:</label>
			<INPUT TYPE="text" id="nombres_text_2" name="nombres_text_2" SIZE=29 class="inputy" style="margin-bottom: 0px;">
			<br><label class="err" id="err_nombres_2">* Este campo es obligatorio<br></label><br>
			<label class="h1" style="margin-top: 0px; margin-right: 8px;">Apellido:</label>
			<INPUT TYPE="text" id="apellido_text_2" name="apellido_text_2" SIZE=29 class="inputy" style="margin-bottom: 0px;">
			<label class="err" id="err_apellido_2">* Este campo es obligatorio</label>
		</div>

		<div id = "orga_div_2">
			<label class="h1">Organización:</label>
			<INPUT TYPE="text" id="orga_text_2" name="orga_text_2" SIZE=29 class="inputs" style="margin-bottom: 0px;">
			<br><label class="err" id="err_orga_2" style="margin-left: 130px;">* Este campo es obligatorio</label>
		</div>

		<div class="wrap">
			<div class="checkbox">
				<input type="checkbox" name="autor_orga_check_2" id="autor_orga_check_2">
				<label for="autor_orga_check_2">Organización</label>
			</div>
		</div>

	</div>



	<div id = "autor_div_3" class="campos" style="margin-bottom: 15px;">
		<div style="margin-bottom: 35px;">
			<label class="h2" style="margin-right: 545px;">Autor 3 *</label> <button type="button" id= autor_borrar_bt_3 class="borrar_bt"><img src="recursos/borrar.png" class="borrar_img"/></button>
		</div>
		<div id = "nombres_div_3">
			<label class="h1">Nombres:</label>
			<INPUT TYPE="text" id="nombres_text_3" name="nombres_text_3" SIZE=29 class="inputy" style="margin-bottom: 0px;">
			<br><label class="err" id="err_nombres_3">* Este campo es obligatorio<br></label><br>
			<label class="h1" style="margin-top: 0px; margin-right: 8px;">Apellido:</label>
			<INPUT TYPE="text" id="apellido_text_3" name="apellido_text_3" SIZE=29 class="inputy" style="margin-bottom: 0px;">
			<br><label class="err" id="err_apellido_3">* Este campo es obligatorio</label>
		</div>

		<div id = "orga_div_3">
			<label class="h1">Organización:</label>
			<INPUT TYPE="text" id="orga_text_3" name="orga_text_3" SIZE=29 class="inputs" style="margin-bottom: 0px;">
			<br><label class="err" id="err_orga_3" style="margin-left: 130px;">* Este campo es obligatorio</label>
			<BR>
		</div>

		<div class="wrap">
			<div class="checkbox">
				<input type="checkbox" name="autor_orga_check_3" id="autor_orga_check_3">
				<label for="autor_orga_check_3">Organización</label>
			</div>
		</div>

	</div>


  

	<div style="text-align: center;">
		<span><button type="button" id="agre_autor_bt" class="añadir">+</button></span>
	</div>
	<div id="etal_autor_div" style="text-align: center;">
		  	<div class="wrap">
				<div class="checkbox">
					<input type="checkbox" name="etal_autor_check" id="etal_autor_check">
					<label for="etal_autor_check">Mencionar varios autores</label>
				</div>
			</div>
	</div>















	<div class="campos" style="margin-top: 70px; margin-bottom: 0px">

		<label class="h1">Fecha de publicación</label>
		<input type="checkbox" class="switch_1" id="fecha_desco_check" name="fecha_desco_check">
		<label class="desco">Desconocido</label>
		<BR>    
		<BR>
		<div id="fecha_publi_div">
			<INPUT TYPE="text" id="dia_publi_text" name="dia_publi_text" SIZE="8" placeholder ="dia" class="fechas_campo">
			<INPUT TYPE="text" id="mes_publi_text" name="mes_publi_text" SIZE="8" placeholder ="mes" class="fechas_campo">
			<INPUT TYPE="text" id="año_publi_text" name="año_publi_text" SIZE="8" placeholder ="año *" class="fechas_campo">
			<br><label class="err" id="err_publi" style="margin-left: 15px;">* Fecha errónea</label><label class="err" id="err_publin" style="margin-left: 480px;">* Campo obligatorio</label>
		</div>

	</div>

		

		

	<div id="fecha_consul_div" class="campos" style="margin-top: 50px">
		<label class="h1">Fecha de consulta *</label>
		<BUTTON type="button" id="hoy_bt" class="hoyb">HOY</BUTTON>
		<BR>
		<INPUT TYPE="text" id="dia_consul_text" name="dia_consul_text" SIZE="8" placeholder ="dia" class="fechas_campo">
		<INPUT TYPE="text" id="mes_consul_text" name="mes_consul_text" SIZE="8" placeholder ="mes" class="fechas_campo">
		<INPUT TYPE="text" id="año_consul_text" name="año_consul_text" SIZE="8" placeholder ="año" class="fechas_campo">
		<BR>
		<br><label class="err" id="err_consul" style="margin-left: 15px;">* Fecha errónea</label><label class="err" id="err_consuln" style="margin-left: 15px;">* Estos campos son obligatorios</label>
	</div>


	<input type="text" name="aut" id="aut"/>
	






<div class="subm">
	<INPUT class="gri" TYPE="submit" VALUE="ACEPTAR">
</div>



</FORM>

<script src="recursos/griphy_sc.js"></script>


<?php
	if(isset($_POST['titulo_text'])){
		$erro= false;
		$titulo = $_POST['titulo_text'];
		$url =$_POST['url_text'];
		$nombres = array($_POST['nombres_text'], $_POST['nombres_text_2'], $_POST['nombres_text_3']);
		$apellido = array($_POST['apellido_text'], $_POST['apellido_text_2'], $_POST['apellido_text_3']);
		$orga = array($_POST['orga_text'], $_POST['orga_text_2'], $_POST['orga_text_3']);
		$publi = array($_POST['dia_publi_text'], $_POST['mes_publi_text'], $_POST['año_publi_text']);
		$consul = array($_POST['dia_consul_text'], $_POST['mes_consul_text'], $_POST['año_consul_text']);
		if(isset($_POST['autor_orga_check'])){
			$orga_ck = true;
		}else{
			$orga_ck = false;
		}
		if(isset($_POST['autor_orga_check_2'])){
			$orga_ck_2 = true;
		}else{
			$orga_ck_2 = false;
		}
		if(isset($_POST['autor_orga_check_3'])){
			$orga_ck_3 = true;
		}else{
			$orga_ck_3 = false;
		}

		if($titulo === ""){
			$erro=true;
			?><script type="text/javascript">$(document).ready(function(){
				document.getElementById('err_titulo').style.display = "block";
			});</script><?php
		}else{
			?><script type="text/javascript">$(document).ready(function(){
				$('#titulo_text').val("<?php echo $titulo ?>");
			});</script><?php
		}

		if($url === ""){
			$erro=true;
			?><script type="text/javascript">$(document).ready(function(){
					document.getElementById('err_url').style.display = "block";

			});</script><?php
		}else{
			?><script type="text/javascript">$(document).ready(function(){
				$('#url_text').val("<?php echo $url ?>");
			});</script><?php
		}
		if(!isset($_POST['autor_desco_check'])){
			?><script type="text/javascript">$(document).ready(function(){
				$('#aut').val("<?php echo $_POST['aut']; ?>");
			});</script><?php

			if($_POST['aut']>1){
				if($orga_ck_2 == false){
					?><script type="text/javascript">$(document).ready(function(){
					document.getElementById('nombres_div_2').style.display = "block";
					document.getElementById('orga_div_2').style.display = "none" ;
					document.getElementById('autor_div_2').style.display = "block" ;
					document.getElementById('autor_desco_check').disabled = true;
					$('#autor_orga_check_2').prop('checked', false);
					});</script><?php
					if($nombres[1] === ""){
						$erro=true;
						?><script type="text/javascript">$(document).ready(function(){
								document.getElementById('err_nombres_2').style.display = "block";

						});</script><?php
					}else{
						?><script type="text/javascript">$(document).ready(function(){
							$('#nombres_text_2').val("<?php echo $nombres[1] ?>");
						});</script><?php
					}

					if($apellido[1] === ""){
						$erro=true;
						?><script type="text/javascript">$(document).ready(function(){
								document.getElementById('err_apellido_2').style.display = "block";

						});</script><?php
					}else{
						?><script type="text/javascript">$(document).ready(function(){
							$('#apellido_text_2').val("<?php echo $apellido[1] ?>");
						});</script><?php
					}
				}else{
					if($orga[1] === ""){
						$erro=true;
						?><script type="text/javascript">$(document).ready(function(){
								document.getElementById('err_orga_2').style.display = "block";

						});</script><?php
					}else{
						?><script type="text/javascript">$(document).ready(function(){
							$('#orga_text_2').val("<?php echo $orga[1] ?>");
						});</script><?php
					}
					?><script type="text/javascript">$(document).ready(function(){
					document.getElementById('nombres_div_2').style.display = "none";
					document.getElementById('orga_div_2').style.display = "block" ;
					document.getElementById('autor_div_2').style.display = "block" ;
					document.getElementById('autor_desco_check').disabled = true;
					$('#autor_orga_check_2').prop('checked', true);
					});</script><?php
				}
			}
			if ($_POST['aut']==3) {
				if($orga_ck_3 == false){

					if($nombres[2] === ""){
						$erro=true;
						?><script type="text/javascript">$(document).ready(function(){
								document.getElementById('err_nombres_3').style.display = "block";

						});</script><?php
					}else{
						?><script type="text/javascript">$(document).ready(function(){
							$('#nombres_text_3').val("<?php echo $nombres[2] ?>");
						});</script><?php
					}

					if($apellido[2] === ""){
						$erro=true;
						?><script type="text/javascript">$(document).ready(function(){
								document.getElementById('err_apellido_3').style.display = "block";

						});</script><?php
					}else{
						?><script type="text/javascript">$(document).ready(function(){
							$('#apellido_text_3').val("<?php echo $apellido[2] ?>");
						});</script><?php
					}
					?><script type="text/javascript">$(document).ready(function(){
					document.getElementById('nombres_div_3').style.display = "block";
					document.getElementById('orga_div_3').style.display = "none" ;
					document.getElementById('autor_div_3').style.display = "block" ;
					document.getElementById('autor_desco_check').disabled = true;
					$('#autor_orga_check_3').prop('checked', false);
					document.getElementById('etal_autor_div').style.display = "block";
					document.getElementById('agre_autor_bt').disabled = true;
					document.getElementById('autor_borrar_bt_2').disabled = true;
					});</script><?php
				}else{
					if($orga[2] === ""){
						$erro=true;
						?><script type="text/javascript">$(document).ready(function(){
								document.getElementById('err_orga_3').style.display = "block";

						});</script><?php
					}else{
						?><script type="text/javascript">$(document).ready(function(){
							$('#orga_text_3').val("<?php echo $orga[2] ?>");
						});</script><?php
					}
					?><script type="text/javascript">$(document).ready(function(){
					document.getElementById('nombres_div_3').style.display = "none" ;
					document.getElementById('orga_div_3').style.display = "block" ;
					document.getElementById('autor_div_3').style.display = "block" ;
					document.getElementById('autor_desco_check').disabled = true;
					$('#autor_orga_check_3').prop('checked', true);
					document.getElementById('etal_autor_div').style.display = "block";
					document.getElementById('agre_autor_bt').disabled = true;
					document.getElementById('autor_borrar_bt_2').disabled = true;
					});</script><?php
				}
			}
			if($orga_ck == false){
				if($nombres[0] === ""){
					$erro=true;
					?><script type="text/javascript">$(document).ready(function(){
							document.getElementById('err_nombres').style.display = "block";

					});</script><?php
				}else{
					?><script type="text/javascript">$(document).ready(function(){
						$('#nombres_text').val("<?php echo $nombres[0] ?>");
					});</script><?php
				}

				if($apellido[0] === ""){
					$erro=true;
					?><script type="text/javascript">$(document).ready(function(){
							document.getElementById('err_apellido').style.display = "block";

					});</script><?php
				}else{
					?><script type="text/javascript">$(document).ready(function(){
						$('#apellido_text').val("<?php echo $apellido[0] ?>");
					});</script><?php
				}
			}else{
				
				if($orga[0] === ""){
					$erro=true;
					?><script type="text/javascript">$(document).ready(function(){
							document.getElementById('err_orga').style.display = "block";

					});</script><?php
				}else{
					?><script type="text/javascript">$(document).ready(function(){
						$('#orga_text').val("<?php echo $orga[0] ?>");
					});</script><?php
				}
				?><script type="text/javascript">$(document).ready(function(){
				document.getElementById('nombres_div').style.display = "none" ;
				document.getElementById('orga_div').style.display = "block" ;
				$('#autor_orga_check').prop('checked', true);
				});</script><?php
			}
		}else{
			?><script type="text/javascript">$(document).ready(function(){
			document.getElementById('autor_div').style.display = "none" ;
			$('#autor_desco_check').prop('checked', true);
			});</script><?php
		}
		if(isset($_POST['etal_autor_check'])){
			?><script type="text/javascript">$(document).ready(function(){
			$('#etal_autor_check').prop('checked', true);
			});</script><?php
		}

		$año = (int)date("Y");
		$mes = (int)date("m");
		$dia = (int)date("d");

		if(!isset($_POST['fecha_desco_check'])){
			$publi[0] = str_replace (' ', '', $publi[0]);
			$publi[1] = str_replace (' ', '', $publi[1]);
			$publi[2] = str_replace (' ', '', $publi[2]);

			if(!ctype_digit($publi[0]) && $publi[0]!=""){
				$erro=true;
				error_fecha("");
			}else if(!ctype_digit($publi[1]) && $publi[1]!=""){
				$erro=true;
				error_fecha("");
			}else if(!ctype_digit($publi[2])){
				if($publi[2]==""){
					$erro=true;
					error_fecha("n");
				}else{
					$erro=true;
					error_fecha("");
				}
			}else if($publi[1]==""){
				if(($publi[2]>-1 && $publi[2]<($año+1)) && ($publi[0]=="" || ($publi[0]>0 && $publi[0]<32))){
					?><script type="text/javascript">$(document).ready(function(){
						$('#dia_publi_text').val("<?php echo $publi[0] ?>");
						$('#mes_publi_text').val("<?php echo $publi[1] ?>");
						$('#año_publi_text').val("<?php echo $publi[2] ?>");
					});</script><?php
				}else{
					$erro=true;
					error_fecha("");
				}
			}else{
				if($publi[0]!=""){
					if(($publi[2]>-1 && $publi[2]<$año && $publi[1]>0 && $publi[1]<13 && $publi[0]>0 && $publi[0]<32)|| ($publi[2]==$año && $publi[1]>0 && $publi[1]<$mes && $publi[0]>0 && $publi[0]<32) || ($publi[2]==$año && $publi[1]==$mes && $publi[0]>0 && $publi[0]<($dia+1))){
						?><script type="text/javascript">$(document).ready(function(){
							$('#dia_publi_text').val("<?php echo $publi[0] ?>");
							$('#mes_publi_text').val("<?php echo $publi[1] ?>");
							$('#año_publi_text').val("<?php echo $publi[2] ?>");
						});</script><?php
					}else{
						$erro=true;
						error_fecha("");
					}
				}else{
					if(($publi[2]>-1 && $publi[2]<$año && $publi[1]>0 && $publi[1]<13)|| ($publi[2]==$año && $publi[1]>0 && $publi[1]<($mes+1))){
						?><script type="text/javascript">$(document).ready(function(){
							$('#dia_publi_text').val("<?php echo $publi[0] ?>");
							$('#mes_publi_text').val("<?php echo $publi[1] ?>");
							$('#año_publi_text').val("<?php echo $publi[2] ?>");
						});</script><?php
					}else{
						$erro=true;
						error_fecha("");
					}
				}
			}
		}else{
			?><script type="text/javascript">$(document).ready(function(){
				document.getElementById('fecha_publi_div').style.display = "none" ;
				$('#fecha_desco_check').prop('checked', true);
			});</script><?php
		}

		$consul[0] = str_replace (' ', '', $consul[0]);
		$consul[1] = str_replace (' ', '', $consul[1]);
		$consul[2] = str_replace (' ', '', $consul[2]);

		if(!ctype_digit($consul[0])){
			$erro=true;
			if($consul[0]==""){
				error_fechan("n");
			}else{
				error_fechan("");
			}
		}else if(!ctype_digit($consul[1])){
			$erro=true;
			if($consul[1]==""){
				error_fechan("n");
			}else{
				error_fechan("");
			}
		}else if(!ctype_digit($consul[2])){
			$erro=true;
			if($consul[2]==""){
				error_fechan("n");
			}else{
				error_fechan("");
			}
		}else{
			if(($consul[2]>-1 && $consul[2]<$año && $consul[1]>0 && $consul[1]<13 && $consul[0]>0 && $consul[0]<32)|| ($consul[2]==$año && $consul[1]>0 && $consul[1]<$mes && $consul[0]>0 && $consul[0]<32) || ($consul[2]==$año && $consul[1]==$mes && $consul[0]>0 && $consul[0]<($dia+1))){
				?><script type="text/javascript">$(document).ready(function(){
					$('#dia_consul_text').val("<?php echo $consul[0] ?>");
					$('#mes_consul_text').val("<?php echo $consul[1] ?>");
					$('#año_consul_text').val("<?php echo $consul[2] ?>");
				});</script><?php
			}else{
				$erro=true;
				error_fechan("");
			}
		}
		if($erro===false){
			$ref_texto = "";
			if(!isset($_POST['autor_desco_check'])){
				if($orga_ck == false){
					$nombres_autor = trim($nombres[0]);
					$aux = $nombres_autor;
					$apellido_autor = trim($apellido[0]);
					$apellido_autor = ucwords($apellido_autor);
					$autor_texto = $apellido_autor . ",";
					for($i=0; $i<str_word_count($nombres_autor); $i++){
						$autor_texto = $autor_texto . " " . strtoupper(substr($aux, 0, 1)) . ".";
						$aux = substr($aux, strpos($aux, " ")+1);
						while(strpos($aux, " ")===0){
							$aux = substr($aux, 1);
						}
					}
				}else{
					$autor_texto = trim($orga[0]);
					$nombres_autor = null;
					$apellido_autor = null;
				}
				if($_POST['aut']>1){
					if($orga_ck_2 == false){
						$nombres_autor_2 = trim($nombres[1]);
						$aux = $nombres_autor_2;
						$apellido_autor_2 = trim($apellido[1]);
						$apellido_autor_2 = ucwords($apellido_autor_2);
						$autor_texto_2 = $apellido_autor_2 . ",";
						for($i=0; $i<str_word_count($nombres_autor_2); $i++){
							$autor_texto_2 = $autor_texto_2 . " " . strtoupper(substr($aux, 0, 1)) . ".";
							$aux = substr($aux, strpos($aux, " ")+1);
							while(strpos($aux, " ")===0){
								$aux = substr($aux, 1);
							}
						}
					}else{
						$autor_texto_2 = trim($orga[1]);
						$nombres_autor_2 = null;
						$apellido_autor_2 = null;
					}
					if($_POST['aut']==3){
						if($orga_ck_2 == false){
							$nombres_autor_3 = trim($nombres[2]);
							$aux = $nombres_autor_3;
							$apellido_autor_3 = trim($apellido[2]);
							$apellido_autor_3 = ucwords($apellido_autor_3);
							$autor_texto_3 = $apellido_autor_3 . ",";
							for($i=0; $i<str_word_count($nombres_autor_3); $i++){
								$autor_texto_3 = $autor_texto_3 . " " . strtoupper(substr($aux, 0, 1)) . ".";
								$aux = substr($aux, strpos($aux, " ")+1);
								while(strpos($aux, " ")===0){
									$aux = substr($aux, 1);
								}
							}
						}else{
							$autor_texto_3 = trim($orga[2]);
							$nombres_autor_3 = null;
							$apellido_autor_3 = null;
						}
						
						$ref_texto = $autor_texto . ", " . $autor_texto_2 . " & " . $autor_texto_3;
						if(isset($_POST['etal_autor_check'])){
							$ref_texto = $ref_texto . ", ET AL. ";
						}else{
							if($orga_ck_3 == true){
								$ref_texto = $ref_texto . ".";
							}
							$ref_texto = $ref_texto . " ";
						}
					}else{
						$ref_texto = $autor_texto . " & " . $autor_texto_2;
						if($orga_ck_2 == true){
							$ref_texto = $ref_texto . ".";
						}
						$ref_texto = $ref_texto . " ";
					}
				}else{
					$ref_texto = $autor_texto;
					if($orga_ck == true){
						$ref_texto = $ref_texto . ".";
					}
					$ref_texto = $ref_texto . " ";
				}
			}else{
				$autor_texto = null;
				$nombres_autor = null;
				$apellido_autor = null;
				$titulo_texto = ucfirst(trim($titulo));
				$ref_texto = $titulo_texto . ". ";
			}
			if(isset($_POST['fecha_desco_check'])){
				$dia_publi = null;
				$mes_publi = null;
				$año_publi = null;
				$ref_texto = $ref_texto . "(s. f.). ";
			}else{
				$año_publi = (int)$publi[2];
				if($publi[1]!=""){
					$ref_texto = $ref_texto . "(" . $publi[2] . ", ";
					$mes_publi = (int)$publi[1];
					switch ($publi[1]) {
						case '1': $ref_texto = $ref_texto . "enero"; break;
						case '2': $ref_texto = $ref_texto . "febrero"; break;
						case '3': $ref_texto = $ref_texto . "marzo"; break;
						case '4': $ref_texto = $ref_texto . "abril"; break;
						case '5': $ref_texto = $ref_texto . "mayo"; break;
						case '6': $ref_texto = $ref_texto . "junio"; break;
						case '7': $ref_texto = $ref_texto . "julio"; break;
						case '8': $ref_texto = $ref_texto . "agosto"; break;
						case '9': $ref_texto = $ref_texto . "septiembre"; break;
						case '10': $ref_texto = $ref_texto . "octubre"; break;
						case '11': $ref_texto = $ref_texto . "noviembre"; break;
						case '12': $ref_texto = $ref_texto . "diciembre"; break;
					}
					if($publi[0]==""){
						$dia_publi = null;
						$ref_texto = $ref_texto . "). ";
					}else{
						$dia_publi = (int)$publi[0];
						$ref_texto = $ref_texto . " " . $publi[0] . "). ";
					}
				}else{
					$mes_publi = null;
					if($publi[0]==""){
						$dia_publi = null;
					}else{
						$dia_publi = (int)$publi[0];
					}
					$ref_texto = $ref_texto . "(" . $publi[2] . "). ";
				}
			}
			if(!isset($_POST['autor_desco_check'])){
				$titulo_texto = ucfirst(trim($titulo));
				$ref_texto = $ref_texto . $titulo_texto . ". ";
			}	
			$dia_consul = (int)$consul[0];
			$mes_consul = (int)$consul[1];
			$año_consul = (int)$consul[2];
			$ref_texto = $ref_texto . "Recuperado " . $consul[0] . " de ";
			switch ($consul[1]) {
				case '1': $ref_texto = $ref_texto . "Enero"; break;
				case '2': $ref_texto = $ref_texto . "Febrero"; break;
				case '3': $ref_texto = $ref_texto . "Marzo"; break;
				case '4': $ref_texto = $ref_texto . "Abril"; break;
				case '5': $ref_texto = $ref_texto . "Mayo"; break;
				case '6': $ref_texto = $ref_texto . "Junio"; break;
				case '7': $ref_texto = $ref_texto . "Julio"; break;
				case '8': $ref_texto = $ref_texto . "Agosto"; break;
				case '9': $ref_texto = $ref_texto . "Septiembre"; break;
				case '10': $ref_texto = $ref_texto . "Octubre"; break;
				case '11': $ref_texto = $ref_texto . "Noviembre"; break;
				case '12': $ref_texto = $ref_texto . "Diciembre"; break;
			}
			$ref_texto = $ref_texto . " de " . $consul[2] . ", de ";
			$url = strtolower(trim($url));
			$ref_texto = $ref_texto . $url;
			
			if(isset($_SESSION['sesion'])){
				if($_SESSION['sesion'] == true){
					$usuario = $_SESSION['user'];
					$query = "SELECT id_titulo FROM titulo WHERE titulo_texto = '$titulo_texto'";
					$resul = mysqli_query($conex, $query);
					if(empty($resul) || mysqli_num_rows($resul)===0){
						$query = "INSERT INTO titulo(titulo_texto) VALUES ('$titulo_texto')";
						$resul = mysqli_query($conex, $query);
						$query = "SELECT id_titulo FROM titulo WHERE titulo_texto = '$titulo_texto'";
						$resul = mysqli_query($conex, $query);
					}
					$id_titulo = mysqli_fetch_array($resul)[0];
					if(isset($_POST['autor_desco_check'])){
						$query = "SELECT id_autor FROM autor WHERE Desconocido = 1";
						$resul = mysqli_query($conex, $query);
						if(empty($resul) || mysqli_num_rows($resul)===0){
							$query = "INSERT INTO autor(desconocido) VALUES (1)";
							$resul = mysqli_query($conex, $query);
							$query = "SELECT id_autor FROM autor WHERE Desconocido = 1";
							$resul = mysqli_query($conex, $query);
						}
						$id_autor = mysqli_fetch_array($resul)[0];
					}else{
						$query = "INSERT INTO autor(desconocido) VALUES (0)";
						$resul = mysqli_query($conex, $query);
						$query = "SELECT id_autor FROM autor";
						$resul = mysqli_query($conex, $query);
						$nu= mysqli_num_rows($resul);
						for($i=0; $i<$nu; $i++){
							$fila = mysqli_fetch_array($resul);
							$id_autor = $fila[0];
						}
						if($orga_ck == false){
							$query = "SELECT id_escri FROM escritor WHERE nombres_escri = '$nombres_autor' AND apellido_escri = '$apellido_autor'";
							$resul = mysqli_query($conex, $query);
							if(empty($resul) || mysqli_num_rows($resul)===0){
								$query = "INSERT INTO escritor(nombres_escri, apellido_escri) VALUES ('$nombres_autor', '$apellido_autor')";
								$resul = mysqli_query($conex, $query);
								$query = "SELECT id_escri FROM escritor WHERE nombres_escri = '$nombres_autor' AND apellido_escri = '$apellido_autor'";
								$resul = mysqli_query($conex, $query);
							}
							$id_escri= mysqli_fetch_array($resul)[0];
							$query = "SELECT id_escri_varios FROM escritor_varios WHERE id_autor = '$id_autor' AND id_escri = '$id_escri'";
							$resul = mysqli_query($conex, $query);
							if(empty($resul) || mysqli_num_rows($resul)===0){
								$query = "INSERT INTO escritor_varios(id_escri, id_autor) VALUES ('$id_escri', '$id_autor')";
								$resul = mysqli_query($conex, $query);
							}
						}else{
							$query = "SELECT id_orga FROM organizacion WHERE orga_texto = '$autor_texto'";
							$resul = mysqli_query($conex, $query);
							if(empty($resul) || mysqli_num_rows($resul)===0){
								$query = "INSERT INTO organizacion(orga_texto) VALUES ('$autor_texto')";
								$resul = mysqli_query($conex, $query);
								$query = "SELECT id_orga FROM organizacion WHERE orga_texto = '$autor_texto'";
								$resul = mysqli_query($conex, $query);
							}
							$id_orga= mysqli_fetch_array($resul)[0];
							$query = "SELECT id_orga_varios FROM orga_varios WHERE id_autor = '$id_autor' AND id_orga = '$id_orga'";
							$resul = mysqli_query($conex, $query);
							if(empty($resul) || mysqli_num_rows($resul)===0){
								$query = "INSERT INTO orga_varios(id_orga, id_autor) VALUES ('$id_orga', '$id_autor')";
								$resul = mysqli_query($conex, $query);
							}
						}
						if($_POST['aut']>1){
							if($orga_ck_2 == false){
								$query = "SELECT id_escri FROM escritor WHERE nombres_escri = '$nombres_autor_2' AND apellido_escri = '$apellido_autor_2'";
								$resul = mysqli_query($conex, $query);
								if(empty($resul) || mysqli_num_rows($resul)===0){
									$query = "INSERT INTO escritor(nombres_escri, apellido_escri) VALUES ('$nombres_autor_2', '$apellido_autor_2')";
									$resul = mysqli_query($conex, $query);
									$query = "SELECT id_escri FROM escritor WHERE nombres_escri = '$nombres_autor_2' AND apellido_escri = '$apellido_autor_2'";
									$resul = mysqli_query($conex, $query);
								}
								$id_escri= mysqli_fetch_array($resul)[0];
								$query = "SELECT id_escri_varios FROM escritor_varios WHERE id_autor = '$id_autor' AND id_escri = '$id_escri'";
								$resul = mysqli_query($conex, $query);
								if(empty($resul) || mysqli_num_rows($resul)===0){
									$query = "INSERT INTO escritor_varios(id_escri, id_autor) VALUES ('$id_escri', '$id_autor')";
									$resul = mysqli_query($conex, $query);
								}
							}else{
								$query = "SELECT id_orga FROM organizacion WHERE orga_texto = '$autor_texto_2'";
								$resul = mysqli_query($conex, $query);
								if(empty($resul) || mysqli_num_rows($resul)===0){
									$query = "INSERT INTO organizacion(orga_texto) VALUES ('$autor_texto_2')";
									$resul = mysqli_query($conex, $query);
									$query = "SELECT id_orga FROM organizacion WHERE orga_texto = '$autor_texto_2'";
									$resul = mysqli_query($conex, $query);
								}
								$id_orga= mysqli_fetch_array($resul)[0];
								$query = "SELECT id_orga_varios FROM orga_varios WHERE id_autor = '$id_autor' AND id_orga = '$id_orga'";
								$resul = mysqli_query($conex, $query);
								if(empty($resul) || mysqli_num_rows($resul)===0){
									$query = "INSERT INTO orga_varios(id_orga, id_autor) VALUES ('$id_orga', '$id_autor')";
									$resul = mysqli_query($conex, $query);
								}
							}
							if($_POST['aut']==3){
								if($orga_ck_2 == false){
									$query = "SELECT id_escri FROM escritor WHERE nombres_escri = '$nombres_autor_3' AND apellido_escri = '$apellido_autor_3'";
									$resul = mysqli_query($conex, $query);
									if(empty($resul) || mysqli_num_rows($resul)===0){
										$query = "INSERT INTO escritor(nombres_escri, apellido_escri) VALUES ('$nombres_autor_3', '$apellido_autor_3')";
										$resul = mysqli_query($conex, $query);
										$query = "SELECT id_escri FROM escritor WHERE nombres_escri = '$nombres_autor_3' AND apellido_escri = '$apellido_autor_3'";
										$resul = mysqli_query($conex, $query);
									}
									$id_escri= mysqli_fetch_array($resul)[0];
									$query = "SELECT id_escri_varios FROM escritor_varios WHERE id_autor = '$id_autor' AND id_escri = '$id_escri'";
									$resul = mysqli_query($conex, $query);
									if(empty($resul) || mysqli_num_rows($resul)===0){
										$query = "INSERT INTO escritor_varios(id_escri, id_autor) VALUES ('$id_escri', '$id_autor')";
										$resul = mysqli_query($conex, $query);
									}
								}else{
									$query = "SELECT id_orga FROM organizacion WHERE orga_texto = '$autor_texto_3'";
									$resul = mysqli_query($conex, $query);
									if(empty($resul) || mysqli_num_rows($resul)===0){
										$query = "INSERT INTO organizacion(orga_texto) VALUES ('$autor_texto_3')";
										$resul = mysqli_query($conex, $query);
										$query = "SELECT id_orga FROM organizacion WHERE orga_texto = '$autor_texto_3'";
										$resul = mysqli_query($conex, $query);
									}
									$id_orga= mysqli_fetch_array($resul)[0];
									$query = "SELECT id_orga_varios FROM orga_varios WHERE id_autor = '$id_autor' AND id_orga = '$id_orga'";
									$resul = mysqli_query($conex, $query);
									if(empty($resul) || mysqli_num_rows($resul)===0){
										$query = "INSERT INTO orga_varios(id_orga, id_autor) VALUES ('$id_orga', '$id_autor')";
										$resul = mysqli_query($conex, $query);
									}
								}
							}
						}
					}
					if(isset($_POST['fecha_desco_check'])){
						$query = "SELECT id_pagina FROM pagina WHERE dia_publi is null AND mes_publi is null AND anio_publi is null AND url = '$url' AND id_titulo = '$id_titulo'";
						$resul = mysqli_query($conex, $query);
						if(empty($resul) || mysqli_num_rows($resul)===0){
							$query = "INSERT INTO pagina(url, id_titulo) VALUES ('$url', '$id_titulo')";
							$resul = mysqli_query($conex, $query);
							$query = "SELECT id_pagina FROM pagina WHERE dia_publi is null AND mes_publi is null AND anio_publi is null AND url = '$url' AND id_titulo = '$id_titulo'";
							$resul = mysqli_query($conex, $query);
						}
						$id_pagina = mysqli_fetch_array($resul)[0];
					}else{
						if($dia_publi==null){
							if($mes_publi==null){
								$query = "SELECT id_pagina FROM pagina WHERE dia_publi is null AND mes_publi is null AND anio_publi = $año_publi AND url = '$url' AND id_titulo = '$id_titulo'";
								$resul = mysqli_query($conex, $query);
								if(empty($resul) || mysqli_num_rows($resul)===0){
									$query = "INSERT INTO pagina(url, anio_publi, id_titulo) VALUES ('$url', $año_publi, '$id_titulo')";
									$resul = mysqli_query($conex, $query);
									$query = "SELECT id_pagina FROM pagina WHERE dia_publi is null AND mes_publi is null AND anio_publi = $año_publi AND url = '$url' AND id_titulo = '$id_titulo'";
									$resul = mysqli_query($conex, $query);
								}
								$id_pagina = mysqli_fetch_array($resul)[0];
							}else{
								$query = "SELECT id_pagina FROM pagina WHERE dia_publi is null AND mes_publi = $mes_publi AND anio_publi = $año_publi AND url = '$url' AND id_titulo = '$id_titulo'";
								$resul = mysqli_query($conex, $query);
								if(empty($resul) || mysqli_num_rows($resul)===0){
									$query = "INSERT INTO pagina(url, mes_publi, anio_publi, id_titulo) VALUES ('$url', $mes_publi, $año_publi, '$id_titulo')";
									$resul = mysqli_query($conex, $query);
									$query = "SELECT id_pagina FROM pagina WHERE dia_publi is null AND mes_publi = $mes_publi AND anio_publi = $año_publi AND url = '$url' AND id_titulo = '$id_titulo'";
									$resul = mysqli_query($conex, $query);
								}
								$id_pagina = mysqli_fetch_array($resul)[0];
							}
						}else{
							if($mes_publi==null){
								$query = "SELECT id_pagina FROM pagina WHERE dia_publi = $dia_publi AND mes_publi is null AND anio_publi = $año_publi AND url = '$url' AND id_titulo = '$id_titulo'";
								$resul = mysqli_query($conex, $query);
								if(empty($resul) || mysqli_num_rows($resul)===0){
									$query = "INSERT INTO pagina(url, dia_publi, anio_publi, id_titulo) VALUES ('$url', $dia_publi, $año_publi, '$id_titulo')";
									$resul = mysqli_query($conex, $query);
									$query = "SELECT id_pagina FROM pagina WHERE dia_publi = $dia_publi AND mes_publi is null AND anio_publi = $año_publi AND url = '$url' AND id_titulo = '$id_titulo'";
									$resul = mysqli_query($conex, $query);
								}
								$id_pagina = mysqli_fetch_array($resul)[0];
							}else{
								$query = "SELECT id_pagina FROM pagina WHERE dia_publi = $dia_publi AND mes_publi = $mes_publi AND anio_publi = $año_publi AND url = '$url' AND id_titulo = '$id_titulo'";
								$resul = mysqli_query($conex, $query);
								if(empty($resul) || mysqli_num_rows($resul)===0){
									$query = "INSERT INTO pagina(url, dia_publi, mes_publi, anio_publi, id_titulo) VALUES ('$url', $dia_publi, $mes_publi, $año_publi, '$id_titulo')";
									$resul = mysqli_query($conex, $query);
									$query = "SELECT id_pagina FROM pagina WHERE dia_publi = $dia_publi AND mes_publi = $mes_publi AND anio_publi = $año_publi AND url = '$url' AND id_titulo = '$id_titulo'";
									$resul = mysqli_query($conex, $query);
								}
								$id_pagina = mysqli_fetch_array($resul)[0];
							}
						}
					}

					$num_igual=0;
					$igual=false;
					$query = "SELECT id_autor FROM referencia";
					$resul = mysqli_query($conex, $query);
					if(!empty($resul) && mysqli_num_rows($resul)>0){
						$aux = $resul;
						$autor_igual =  mysqli_fetch_array($aux);
						$num_autores = mysqli_num_rows($resul);
						for($i=0; $i<$num_autores; $i++){
							$query = "SELECT desconocido FROM autor WHERE id_autor = '$autor_igual[0]'";
							$resul = mysqli_fetch_array(mysqli_query($conex, $query))[0];
							if($resul==0){

								$query = "SELECT id_escri FROM escritor_varios WHERE id_autor = '$autor_igual[0]'";
								$resul = mysqli_query($conex, $query);
								$autores_escri = mysqli_fetch_array($resul);
								$size_autores_escri = mysqli_num_rows($resul);
								$query = "SELECT id_escri FROM escritor_varios WHERE id_autor = '$id_autor'";
								$resul = mysqli_query($conex, $query);
								$autores_escri_actual = mysqli_fetch_array($resul);
								$size_autores_escri_actual = mysqli_num_rows($resul);
								if($size_autores_escri==$size_autores_escri_actual){
									if($size_autores_escri!=0){
										for($j=0; $j<$size_autores_escri; $j++){
											for($k=0; $k<$size_autores_escri; $k++){
												if($autores_escri_actual[$j]==$autores_escri[$k]){
													$igual = true;
													break;
												}else{
													$igual = false;
												}
											}
										}
										if($igual == true){
											for($j=0; $j<$size_autores_escri; $j++){
												for($k=0; $k<$size_autores_escri; $k++){
													if($autores_escri_actual[$k]==$autores_escri[$j]){
														$igual = true;
														break;
													}else{
														$igual = false;
													}
												}
											}
										}
									}else{
										$igual = true;
									}
									if($igual == true){
										$query = "SELECT id_orga FROM orga_varios WHERE id_autor = '$autor_igual[0]'";
										$resul = mysqli_query($conex, $query);
										$autores_orga = mysqli_fetch_array($resul);
										$size_autores_orga = mysqli_num_rows($resul);
										$query = "SELECT id_orga FROM orga_varios WHERE id_autor = '$id_autor'";
										$resul = mysqli_query($conex, $query);
										$autores_orga_actual = mysqli_fetch_array($resul);
										$size_autores_orga_actual = mysqli_num_rows($resul);
										if($size_autores_orga==$size_autores_orga_actual){
											if($size_autores_orga!=0){
												for($j=0; $j<$size_autores_orga; $j++){
													for($k=0; $k<$size_autores_orga; $k++){
														if($autores_orga_actual[$j]==$autores_orga[$k]){
															$igual = true;
															break;
														}else{
															$igual = false;
														}
													}
												}
												if($igual == true){
													for($j=0; $j<$size_autores_orga; $j++){
														for($k=0; $k<$size_autores_orga; $k++){
															if($autores_orga_actual[$k]==$autores_orga[$j]){
																$igual = true;
																break;
															}else{
																$igual = false;
															}
														}
													}
												}
											}else{
												$igual = true;
											}
										}else{
											$igual=false;
										}
									}
								}	
							}
							if($igual==true){

								$num_igual=$autor_igual[0];
								$query = "DELETE FROM escritor_varios WHERE escritor_varios.id_autor = '$id_autor'";
								$resul = mysqli_query($conex, $query);
								$query = "DELETE FROM orga_varios WHERE orga_varios.id_autor = '$id_autor'";
								$resul = mysqli_query($conex, $query);
								$query = "DELETE FROM autor WHERE autor.id_autor = '$id_autor'";
								$resul = mysqli_query($conex, $query);
								$id_autor = $num_igual;
								break;
							}
							$autor_igual =  mysqli_fetch_array($aux);
						}
					}
					$query = "SELECT id_autor FROM referencia WHERE dia_consul = $dia_consul AND mes_consul = $mes_consul AND anio_consul = $año_consul AND ref_texto = '$ref_texto' AND id_usuario = '$usuario' AND id_pagina = '$id_pagina' AND id_autor = '$id_autor'";
					$resul = mysqli_query($conex, $query);
					if(empty($resul) || mysqli_num_rows($resul)===0){
						$query = "INSERT INTO referencia(dia_consul, mes_consul, anio_consul, ref_texto, id_usuario, id_pagina, id_autor) VALUES ($dia_consul, $mes_consul, $año_consul, '$ref_texto', '$usuario', '$id_pagina', '$id_autor')";
						$resul = mysqli_query($conex, $query);
					}
				}
			}
			$_SESSION['ref_texto'] = $ref_texto;
			header('Location:recursos/resultado.php');
		}
	}





	function error_fecha($er){
		if($er == "n"){
			?><script type="text/javascript">$(document).ready(function(){
			document.getElementById('err_publin').style.display = "block";
			});</script><?php
		}else{
			?><script type="text/javascript">$(document).ready(function(){
			document.getElementById('err_publi').style.display = "block";
			});</script><?php
		}
	}
	function error_fechan($er){
		
		if($er == "n"){
			?><script type="text/javascript">$(document).ready(function(){
			document.getElementById('err_consuln').style.display = "block";
			});</script><?php
		}else{
			?><script type="text/javascript">$(document).ready(function(){
			document.getElementById('err_consul').style.display = "block";
			});</script><?php
		}
	}


?>


</BODY>
</HTML>