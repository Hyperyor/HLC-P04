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
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="assets/css/nav.css">

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
          <a class="nav-link" data-value="about" href="#">About</a>        </li>  
      <li class="nav-item">
          <a class="nav-link " data-value="portfolio"href="#">Portfolio</a>    
      </li>
      <li class="nav-item"> 
          <a class="nav-link " data-value="blog" href="#">Blog</a>         </li>   
      <li class="nav-item">  
        <a class="nav-link " data-value="team" href="#">         Team</a>       </li>  
      <li class="nav-item"> 
      <a class="nav-link " data-value="contact" href="#">Contact</a>       </li> 
      </ul> 
      </div>
    </nav>

    <header class="header">
      <div class="overlay"></div>
      <div class="container">
      <div class="description ">
        <h1>    Bienvenido a la práctica 4 de Jose Luis Bernal
          <p>   En esta web encontraras información sobre el Back-End y el Front-End, además 
                de conocer las diferencias entre Angular y Angular JS, en un entorno
                dinámico y responsive. 
          </p>
         
        </h1>  
        </div>
      </div>
    </header>

    <div class="about" id="about">
      <div class="container">
        <h1 class="text-center">Sobre el autor</h1>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12">
            <img src="assets/imagenes/autor.jpg" class="img-fluid">
            <span class="text-justify">Programador</span>
          </div>
          <div class="col-lg-8 col-md-8 col-sm-12 desc">
            
            <h3>José Luis Bernal Navarrete</h3>
            <p>
              Desarrollador de 23 años. Versado en lenguajes de programación 
              como C, C#, Java y python. </p>
            <p>
              Instruido en el desarrollo web con php y herramientas como 
              Bootstrap, jquery, json y angular js.</p>
            <p>
              Además, ha estudiado en profundidad el desarrollo y administración 
              de Bases de Datos con PL/SQL. </p>
            <p>
              Segundo ganador y nominado mundial en el NASA International Space 
              Apps Challenge de 2019, celebrado en Everis, Sevilla.
            </p>
          </div>
        </div>
      </div>
    </div>
    
    

    <script type="text/javascript" src='assets/js/main.js'></script>
  </body>
</html>