<?php
include 'database.php';

$sel = mysqli_query($conexion,"select * from comentarios");
$data = array();

while ($row = mysqli_fetch_array($sel)) {
 $data[] = array("coment"=>$row['palabra']);
}
echo json_encode($data);

?>