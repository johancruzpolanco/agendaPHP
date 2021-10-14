<?php

$mysqli = new mysqli ("127.0.0.1:3306","root","1234","agenda");
	
	if ($mysqli->connect_errno) {
    echo "Falló la conexión con MySQL";

	}
		
	if(isset($_POST["submit"]) && !empty($_POST["submit"])) {
		$correo = $_POST["Correo"];
		
		if ($correo){
			echo " <h1> Contactos Encontrados: </h1>
			<table style=\"border:2px solid black;\">
			<tr>
			<td style=\"width:5%;\">Nombre</td>
			<td style=\"width:5%;\">Apellido</td>
			<td style=\"width:5%;\">Telefono Movil</td>
			<td style=\"width:5%;\">Telefono Casa</td>
			<td style=\"width:5%;\">Correo</td>
			<td style=\"width:5%;\" >Direccion</td>
			<td style=\"width:5%;\" >Ciudad</td>
			</tr>";
		
		$comando = "select * from contacto where correo = '$correo'";
		$resultado = $mysqli->query($comando);

    while($contenido = $resultado->fetch_array() )
    {
		 
        echo "<tr>" .
        "<td style=\"width:5%;\">" . $contenido ["nombre"] .
        "</td>";

       
        echo "<td style=\"width:5%;\">" . 
		$contenido ["apellido"] .
        "</td>";
		
		echo "<td style=\"width:5%;\">" .
		$contenido ["telefonoMovil"] .
        "</td>";
		   
		echo "<td style=\"width:5%;\">" .
		$contenido ["telefonoCasa"] .
        "</td>";

		echo "<td style=\"width:5%;\">" .
		$contenido ["correo"] .
        "</td>";
		   
		echo "<td style=\"width:5%;\">" .
		$contenido ["direccion"] .
        "</td>";
		   
		echo "<td style=\"width:5%;\">" .
		$contenido ["ciudad"] .
        "</td>";
		
		echo "</tr>";
    }

echo "</table>";
	}
		

	}

?>

<html>
	<head>
	<h1>Buscar por correo</h1>
	</head>
	<body>
		<form method="POST">
    <div>
        <input type="text" name="Correo" placeholder="Correo" />
    </div>

    <br>
		<input type="submit" name="submit" value="Buscar">
		</form>
		<p><a href="/agendaPHP/index.html" class="btn btn-success">Volver al inicio</a></p>
	</body>
</html>