<?php

$mysqli = new mysqli ("127.0.0.1:3306","root","1234","agenda");
	
	if ($mysqli->connect_errno) {
    echo "Falló la conexión con MySQL";
	}
	
		if(isset($_POST["submit"]) && !empty($_POST["submit"])) {
		$nombre = $_POST["nombre"];
		$apellido = $_POST["apellido"];
		$telefonoMovil = $_POST["telefonoMovil"];
		$telefonoCasa = $_POST["telefonoCasa"];
		$correo = $_POST["correo"];
		$direccion = $_POST["direccion"];
		$ciudad = $_POST["Ciudad"];
		
		$mysqli->query("insert into contacto(nombre,apellido,telefonoMovil,telefonoCasa,correo,direccion,ciudad) values( ('$nombre'), ('$apellido'), ('$telefonoMovil'),('$telefonoCasa'),('$correo'), ('$direccion'),('$ciudad'))"); 
	}

?>

<html>
	<head>
	<h1>Agregar Contacto</h1>
	</head>
	<body>
		<form method="POST">
    <div>
        <input type="text" name="nombre" placeholder="Nombre" />
    </div>
    <br>
    <div>
        <input type="text" name="apellido" placeholder="Apellido" />
    </div>
    <br>
    <div>
        <input type="text" name="telefonoMovil" placeholder="Telefono Movil" />
    </div>
    <br>
    <div>
        <input type="text" name="telefonoCasa" placeholder="Telefono Casa" />
    </div>
    <br>
    <div>
        <input type="text" name="correo" placeholder="Correo Electronico" />
    </div>
    <br>
    <div>
        <input type="text" name="direccion" placeholder="Direccion" />
    </div>
    <br>
    <div>
        <label for="Ciudad">Seleccione la ciudad: </label>
        <select id="Ciudad" name="Ciudad">
            <option value="Tenares">Tenares</option>
            <option value="Salcedo">Salcedo</option>
            <option value="San Francisco">San Francisco</option>
			<option value="San Francisco">Moca</option>
			<option value="San Francisco">Santiago</option>

        </select>
    </div>
    <br>
			<input type="submit" name="submit" value="Agregar Contacto">
		</form>
		<p><a href="/agendaPHP/index.html" class="btn btn-success">Volver al inicio</a></p>
	</body>
</html>