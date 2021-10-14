<html>

<h1>Lista De Contactos</h1>

<table style="border:2px solid black;">
    <tr>
        <td style="width:10%;">Nombre</td>
        <td style="width:10%;">Apellido</td>
        <td style="width:10%;">Telefono Movil</td>
        <td style="width:10%;">Telefono Casa</td>
        <td style="width:10%;">Correo</td>
        <td style="width:10%;">Direccion</td>
        <td style="width:10%;">Ciudad</td>
    </tr>
	
</html>

<?php

$mysqli = new mysqli ("127.0.0.1:3306","root","1234","agenda");
	
	if ($mysqli->connect_errno) {
    echo "Falló la conexión con MySQL";
	}
	
$comando = "select * from contacto";
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
		   
	echo "<td style=\"width:5%;\" >" .
	$contenido ["direccion"] .
    "</td>";
		   
	echo "<td style=\"width:5%;\">" .
	$contenido ["ciudad"] .
    "</td>";
		
	echo "</tr>";
    }

echo "</table>";
?>

<html>
	<body>
	<p><a href="/agendaPHP/index.html" class="btn btn-success">Volver al inicio</a></p>
	</body>
</html>