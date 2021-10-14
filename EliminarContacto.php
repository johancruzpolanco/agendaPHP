<?php

$mysqli = new mysqli ("127.0.0.1:3306","root","1234","agenda");


	
	if ($mysqli->connect_errno) {
    echo "Falló la conexión con MySQL";

	}
		if(isset($_POST["submit"]) && !empty($_POST["submit"])) {
		$correo = $_POST["Correo"];
		
	if ($correo){
		
		$mysqli->query("delete from contacto where correo = '$correo'");
		echo "<br>Contacto Eliminado<br>";
	}
	}

?>

<html>
	<head>
	<h1>Eliminar Contacto</h1>
	<h3>Ingrese el correo del contacto que desea eliminar</h3>
	</head>
	<body>
		<form method="POST">
    <div>
        <input type="text" name="Correo" placeholder="Correo" />
    </div>

    <br>
		<input type="submit" name="submit" value="Eliminar Contacto">
		</form>
		<p><a href="/agendaPHP/index.html" class="btn btn-success">Volver al inicio</a></p>
	</body>
</html>