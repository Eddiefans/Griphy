<?php
	session_start();
	ob_start();
	$_SESSION['sesion']=false;
	$_SESSION['user']=0;
	header('Location:usuario.php')
?>