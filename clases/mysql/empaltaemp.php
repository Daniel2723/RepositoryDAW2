<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Alta Departamentos HTML</title>
</head>
<body>
    
	<form action="empaltadpto.php" method="REQUEST">
	<p>Nombre Departamento<input type='text' name='nombreDep'><br>
		<p><input type="submit" value="Alta Departamento" name="altaDep"></p>
	</form>

	
</body>
</html>

<h1>Listado empleados departamento </h1>
<?php

/* Conexión BD */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'rootroot');
define('DB_DATABASE', 'empleadosnn');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   
   if (!$db) {
		die("Error conexión: " . mysqli_connect_error());
	}

/* Se muestra el formulario la primera vez */
if (!isset($_POST) || empty($_POST)) { 

	/*Función que obtiene los departamentos de la empresa*/
	$departamentos = obtenerDepartamentos($db);
	
    /* Se inicializa la lista valores*/
	echo '<form action="" method="post">';
?>
	<div>
	<label for="departamento">Departamentos:</label>
	<select name="departamento">
		<?php foreach($departamentos as $departamento) : ?>
			<option> <?php echo $departamento ?> </option>
		<?php endforeach; ?>
	</select>
	</div>
	</BR>
<?php
	echo '<div><input type="submit" value="Mostrar Departamentos"></div>
	</form>';
} else { 
    
    null;
	
}
?>

<?php
// Funciones utilizadas en el programa

// Obtengo todos los departamentos para mostrarlos en la lista de valores
function obtenerDepartamentos($db) {
	$departamentos = array();
	
	$sql = "SELECT cod_dpto,nombre_dpto FROM departamento";
	
	$resultado = mysqli_query($db, $sql);
	if ($resultado) {
		while ($row = mysqli_fetch_assoc($resultado)) {
			$departamentos[] = $row['nombre_dpto'];
		}
	}
	return $departamentos;
}


	

