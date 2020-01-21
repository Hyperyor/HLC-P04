<?php
    require('database.php');
    $data = json_decode(file_get_contents("php://input"));
    $com = mysqli_real_escape_string($con, $data->Comentairio);
    $query = mysqli_query($con, "insert into comentarios (palabra) values ('$com')") or die ('Unable to execute query. '. mysqli_error($con));