<?php

	$link = mysql_connect("132.248.159.197:3306", "info6", "1nf06") or die("<h2>No se encuentra el servidor</h2>");
	$db = mysql_select_db("INFORMATICA", $link) or die("<h2>Error de Conexion</h2>");

	$nombre = $_POST['nombre'];
	$detalle = $_POST['detalle'];
	$email = $_POST['email'];

	$query = mysql_query("INSERT INTO contacto VALUES('NULL', '$email', '$detalle', '$nombre')", $link);

	if(!$query) {
		echo "Error al guardar la cotizacion".mysql_error();

	}
	else{
		echo'
		<script>
			alert("Gracias por contactarnos");
			location.href="index.php";
		</script>
		'
		;
	}

	//if(!$query)
	//	echo "Failed".mysql_error();
//	else
//		echo "Exito!";

?>
