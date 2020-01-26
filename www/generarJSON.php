<?php

$server="172.21.0.2";
$user="root";
$pass="1234";
$bd="db";

//Creamos la conexión
$conexion = mysqli_connect($server, $user, $pass,$bd) 
or die("Ha sucedido un error inexperado en la conexion de la base de datos");

$consulta = $_GET['empresa'];

if($consulta == '')
{
	$sql = "SELECT * FROM juegos";

	mysqli_set_charset($conexion, "utf8"); //formato de datos utf8

	if(!$result = mysqli_query($conexion, $sql)) die();
}
else
{
	$query = "SELECT * from juegos where empresa = ?";

    $stmt = mysqli_prepare($conexion, $query) or die(mysqli_error($conexion));
    $stmt->bind_param('s', $consulta);
	$stmt->execute();
	$result = $stmt->get_result();
}

//generamos la consulta



$clientes = array(); //creamos un array

while($row = mysqli_fetch_array($result)) 
{ 
	$titulo=$row['titulo'];
	$lanzamiento=$row['lanzamiento'];
	$empresa=$row['empresa'];
	$portada=$row['portada'];
	
	$clientes[] = array('titulo'=> $titulo, 'lanzamiento'=> $lanzamiento, 'empresa'=> $empresa, 'portada'=> $portada);
}
	
//desconectamos la base de datos
$close = mysqli_close($conexion) 
or die("Ha sucedido un error inexperado en la desconexion de la base de datos");
  

//Creamos el JSON
//$clientes['clientes'] = $clientes;
$json_string = json_encode($clientes);
echo $json_string;

//Si queremos crear un archivo json, sería de esta forma:
/*
$file = 'clientes.json';
file_put_contents($file, $json_string);
*/
	

?>