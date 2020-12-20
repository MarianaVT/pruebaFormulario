<?php
	//conexion con la base de datos y el servidor
	$link = mysql_connect("bd4free.net", "mariana_sql", "1u2s3e4r") or die("alert('No se encuentra el servidor')");
	$db = mysql_select_db("formulario", $link) or die("alert('Error de Conexion?)");

	//obtenemos los valores del formulario
	$email = $_POST['emailUser'];
	$pass = $_POST['passUser'];

	//Obtiene la longitud de un string
	$req = (strlen($email)*strlen($pass)) or die("alert('No se han llenado todos los campos')");

	//
	$res = mysql_query("SELECT * FROM users WHERE EMAIL=:email AND PASSWORD=:pass", $link) or die("alert('Error al iniciar sesión, datos incorrectos')");
	$user = mysql_fetch_array($res);
?>