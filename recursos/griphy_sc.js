$(document).ready(function(){
	document.getElementById('orga_div').style.display = "none" ;
	document.getElementById('orga_div_2').style.display = "none" ;
	document.getElementById('orga_div_3').style.display = "none" ;
	document.getElementById('autor_div_3').style.display = "none" ;
	document.getElementById('autor_div_2').style.display = "none" ;
	document.getElementById('etal_autor_div').style.display = "none" ;
	document.getElementById('err_titulo').style.display = "none";
	document.getElementById('err_url').style.display = "none";
	document.getElementById('err_nombres').style.display = "none";
	document.getElementById('err_apellido').style.display = "none";
	document.getElementById('err_orga').style.display = "none";
	document.getElementById('err_nombres_2').style.display = "none";
	document.getElementById('err_apellido_2').style.display = "none";
	document.getElementById('err_orga_2').style.display = "none";
	document.getElementById('err_nombres_3').style.display = "none";
	document.getElementById('err_apellido_3').style.display = "none";
	document.getElementById('err_orga_3').style.display = "none";
	document.getElementById('err_publi').style.display = "none";
	document.getElementById('err_publin').style.display = "none";
	document.getElementById('err_consul').style.display = "none";
	document.getElementById('err_consuln').style.display = "none";
	document.getElementById('aut').style.display = "none";
	$('#aut').val("1");




	$('#autor_desco_check').click(function(){
		if($('#autor_desco_check').is(':checked')){
			$('#nombres_text').val("");
			$('#apellido_text').val("");
			$('#orga_text').val("");
			document.getElementById('autor_div').style.display = "none" ;
			document.getElementById('agre_autor_bt').disabled = true;
			document.getElementById('err_nombres').style.display = "none";
			document.getElementById('err_apellido').style.display = "none";
			document.getElementById('err_orga').style.display = "none";
		}else{
			document.getElementById('autor_div').style.display = "block" ;
			document.getElementById('agre_autor_bt').disabled = false;
		}
	})


	$('#autor_orga_check').click(function(){
		if($('#autor_orga_check').is(':checked')){
			$('#nombres_text').val("");
			$('#apellido_text').val("");
			document.getElementById('nombres_div').style.display = "none" ;
			document.getElementById('orga_div').style.display = "block" ;
		}else{
			$('#orga_text').val("");
			document.getElementById('nombres_div').style.display = "block" ;
			document.getElementById('orga_div').style.display = "none" ;
		}
	})


	$('#autor_orga_check_2').click(function(){
		if($('#autor_orga_check_2').is(':checked')){
			$('#nombres_text_2').val("");
			$('#apellido_text_2').val("");
			document.getElementById('nombres_div_2').style.display = "none" ;
			document.getElementById('orga_div_2').style.display = "block" ;
		}else{
			$('#orga_text_2').val("");
			document.getElementById('nombres_div_2').style.display = "block" ;
			document.getElementById('orga_div_2').style.display = "none" ;
		}
	})


	$('#autor_orga_check_3').click(function(){
		if($('#autor_orga_check_3').is(':checked')){
			$('#nombres_text_3').val("");
			$('#apellido_text_3').val("");
			document.getElementById('nombres_div_3').style.display = "none" ;
			document.getElementById('orga_div_3').style.display = "block" ;
		}else{
			$('#orga_text_3').val("");
			document.getElementById('nombres_div_3').style.display = "block" ;
			document.getElementById('orga_div_3').style.display = "none" ;
		}
	})


	$('#agre_autor_bt').click(function(){
		if(document.getElementById('autor_div_2').style.display == "block"){
			document.getElementById('autor_borrar_bt_2').disabled = true;
			document.getElementById('agre_autor_bt').disabled = true;
			document.getElementById('autor_div_3').style.display = "block" ;
			document.getElementById('etal_autor_div').style.display = "block" ;
			$('#aut').val("3");
		}else{
			document.getElementById('autor_div_2').style.display = "block" ;
			document.getElementById('autor_desco_check').disabled = true;
			$('#aut').val("2");
		}
	})


	$('#autor_borrar_bt_2').click(function(){
		$('#nombres_text_2').val("");
		$('#apellido_text_2').val("");
		$('#orga_text_2').val("");
		$('#autor_orga_check_2').prop('checked', false);
		document.getElementById('nombres_div_2').style.display = "block" ;
		document.getElementById('orga_div_2').style.display = "none" ;
		document.getElementById('autor_desco_check').disabled = false;
		document.getElementById('autor_div_2').style.display = "none" ;
		document.getElementById('err_nombres_2').style.display = "none";
		document.getElementById('err_apellido_2').style.display = "none";
		document.getElementById('err_orga_2').style.display = "none";
		$('#aut').val("1");
	})


	$('#autor_borrar_bt_3').click(function(){
		$('#nombres_text_3').val("");
		$('#apellido_text_3').val("");
		$('#orga_text_3').val("");
		$('#autor_orga_check_3').prop('checked', false);
		document.getElementById('nombres_div_3').style.display = "block" ;
		document.getElementById('orga_div_3').style.display = "none" ;
		document.getElementById('autor_borrar_bt_2').disabled = false;
		document.getElementById('agre_autor_bt').disabled = false;
		document.getElementById('autor_div_3').style.display = "none" ;
		document.getElementById('etal_autor_div').style.display = "none" ;
		document.getElementById('err_nombres_3').style.display = "none";
		document.getElementById('err_apellido_3').style.display = "none";
		document.getElementById('err_orga_3').style.display = "none";
		$('#etal_autor_check').prop('checked', false);
		$('#aut').val("2");
	})


	$('#fecha_desco_check').click(function(){
		if($('#fecha_desco_check').is(':checked')){
			$('#año_publi_text').val("");
			$('#mes_publi_text').val("");
			$('#dia_publi_text').val("");
			document.getElementById('fecha_publi_div').style.display = "none" ;
			document.getElementById('err_publin').style.display = "none";
		}else{
			document.getElementById('fecha_publi_div').style.display = "block" ;
		}
	})

	$('#hoy_bt').click(function(){
		hoy = new Date();
		var dia = hoy.getDate();
		var mes = hoy.getMonth()+1;
		var año = hoy.getFullYear();
		if(dia<10) dia='0'+dia;
		if(mes<10) mes='0'+mes;
		$('#año_consul_text').val(año);
		$('#mes_consul_text').val(mes);
		$('#dia_consul_text').val(dia);
	})
})