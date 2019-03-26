<?php
//Creando los parametros para la conexion con la base de datos
define('LOCALHOST', 'localhost');
define('USERBD', 'root');
define('PASSWORD', '');
define('DBNOMBRE', 'reportesgraficos');

$coneccion = new PDO('mysql:host='.LOCALHOST.';dbname='.DBNOMBRE.';',USERBD, PASSWORD);

$titulo = filter_input(INPUT_GET, 'term', FILTER_SANITIZE_STRING);

//SQL para selecionar os registros
$resultado_titulo = "SELECT Nombre FROM articulos WHERE Nombre LIKE '%".$titulo."%' ORDER BY Nombre ASC LIMIT 7";

//Seleciona os registros
$resultado_contenido = $coneccion->prepare($resultado_titulo);
$resultado_contenido->execute();

while($registros = $resultado_contenido->fetch(PDO::FETCH_ASSOC)){
    $data[] = $registros['Nombre'];
}

echo json_encode($data);
?>