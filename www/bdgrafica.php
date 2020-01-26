<?php

    require 'database.php';

    $records = $conexion->query('SELECT * FROM empresas');

    

    

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Inicio</title>
    <meta charset="UTF-8" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bdgrafica.css">
    <link rel="stylesheet" type="text/css" href="assets/css/nav.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

  </head>

  <body>

    <!-- navbar -->  
    <nav class="navbar navbar-expand-lg fixed-top ">  
      <a class="navbar-brand" href="indice.php" >Inicio</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">  
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarSupportedContent">     <ul class="navbar-nav mr-4">
      <li class="nav-item">
          <a class="nav-link" data-value="angular" href="angular.php">Angular vs AngularJS</a>        </li>  
      <li class="nav-item">
          <a class="nav-link " data-value="feybe"href="frameworks.php">Front-End y Back-End</a>    
      </li>
      <li class="nav-item"> 
        <a class="nav-link " data-value="galeria" href="bdgrafica.php">Galeria</a>         </li>    
      <li class="nav-item">  
        <a class="nav-link " data-value="consultas" href="consultas.php">Consultas</a>       </li> 
      </ul> 
      </div>
    </nav>

    
    


    <!-- Team section -->

            
    <?php    
        while($row = $records->fetch_assoc()) {

            $nombre = $row["nombre"];
            

            echo ' <section class="team">
            <article class="container"> <h1 class="text-center">'. $nombre .'</h1> <div class="row"> ';

            $recordsJuegos = $conexion->query('SELECT * FROM juegos');
            while($juegos = $recordsJuegos->fetch_assoc()) {
            
                $empresa = $juegos["empresa"];
                $titulo =  $juegos["titulo"];
                $fec =  $juegos["lanzamiento"];
                $foto =  $juegos["portada"];

                if($empresa == $nombre)
                {
                    echo ' <div class="col-lg-3 col-md-3 col-sm-12 item">
                    <img src="'. $foto .'" class="img-fluid" alt="'. $titulo .'">
                    <div class="des">
                    '. $titulo .'
                    </div>
                    <span class="text-muted">' . $fec . '</span>
                    </div>';
                }
                
            }

            
            
            echo '</div></article> </section>';

            echo '<br/>';

        }
    ?>

        
    
    
    
    
  </body>
</html>