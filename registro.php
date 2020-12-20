<?php
	function registrar() {
		//conexion con la base de datos y el servidor
		$link = mysql_connect("db4free.net", "mariana_sql", "1u2s3e4r") or die("<h2>No se encuentra el servidor</h2>");
		$db = mysql_select_db("prueba_sql", $link) or die("<h2>Error de Conexion</h2>");

		//obtenemos los valores del formulario
		$email = $_POST['emailUser'];
		$pass = $_POST['pass'];
		$nombre = $_POST['nombreUser'];
		$apellidoP = $_POST['apellidoPuser'];
		$apellidoM = $_POST['apellidoMuser'];
		$edad = $_POST['edad'];

		//ingresamos la informacion a la base de datos
		mysql_query("INSERT INTO users VALUES(,'$email','$pass','$nombre','$apellidoP','$apellidoM',$edad)", $link) or die("<h2>Error Guardando los datos</h2>");
		echo'
			<script>
				alert("Registro Exitoso");
				location.href="index.html";
			</script>
		'
	}
?>