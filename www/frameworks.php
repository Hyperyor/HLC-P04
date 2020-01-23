<!DOCTYPE html>
<html ng-app="appFrameworks">
  <head>
    <title>Front-End y Back-End</title>
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
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.9/angular.min.js"></script>
    <script src="assets/js/jsonexterno.js"></script>

    <link rel="stylesheet" type="text/css" href="assets/css/nav.css">
    <link rel="stylesheet" type="text/css" href="assets/css/frameworks.css">
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

  </head>

  <body ng-controller="primerControlador">

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
          <a class="nav-link " data-value="blog" href="#">Blog</a>         </li>   
      <li class="nav-item">  
        <a class="nav-link " data-value="team" href="#">Team</a>       </li>  
      <li class="nav-item"> 
      <a class="nav-link " data-value="contact" href="#">Contact</a>       </li> 
      </ul> 
      </div>
    </nav>
    <section>
        <!-- --> 
        <br/>
        <!-- contenido --> 
        <div class="container">

            <!-- Title -->
            <h1 class="mt-4">Back-End y Front-End</h1>

            <!-- Author -->
            <p class="lead">
            por
            <a href="#">Jose Luis Bernal Navarrete</a>
            </p>

            <hr>

            <!-- Date/Time -->
            <p>23/01/2020</p>

            <hr>

            <!-- Preview Image -->
            <img class="img-fluid rounded" src="assets/imagenes/frontend-y-backend.png" alt="">

            <hr>

                <!-- Post Content -->
                <p class="lead">¿Cuál es la función de un frontend?, ¿cuál es la función de un backend?, ¿cuáles son las diferencias entre uno y otro?</p>

                <p>No podemos negar que la web forma parte de nuestro día a día, aunque va más allá de los diseños agradables y animaciones bonitas que despiertan nuestros sentidos, pues por detrás encontramos una serie de tecnologías que hacen que la magia sea posible y que para el ojo muggle pasan desapercibidas. Estas tecnologías, cual caballero de la noche, se encargan de que todo funcione correctamente para que el usuario no tenga ningún problema al mandar una petición, consulta u obtener datos. Estamos hablando de los lados frontend y backend que se unen para cumplir un mismo objetivo: buscar la satisfacción del usuario.</p>

                <h3>El Front-End</h3>

                <p>El Frontend se enfoca en el usuario, en todo con lo que podemos interactuar y lo que vemos mientras navegamos. Así como en una primera cita, nuestra web busca causar una buena impresión y agradar al usuario, para lo cual utiliza <a href="https://developer.mozilla.org/es/docs/Web/HTML">HTML</a>, <a href="https://developer.mozilla.org/es/docs/Web/CSS">CSS</a> y <a href="https://developer.mozilla.org/es/docs/Web/JavaScript">JAVASCRIPT</a>. Buena experiencia de usuario, inmersión y usabilidad, son algunos de los objetivos que busca un buen frontend y hoy en día existen una gran variedad de frameworks, preprocesadores y librerías que nos ayudarán en esta tarea. ¡Conocerlos y usarlos correctamente es el reto a cumplir! Para un frontend la creatividad es el recurso más valioso, ya que tendrá que tomar fuentes, colores, imágenes y todos lo recursos de los cuales disponga para crear sitios agradables que se vean bien en todos los dispositivos y resoluciones.</p>

                <h3>El Back-End</h3>

                <p>Por otro lado, tenemos el Backend enfocado en hacer que todo lo que está detrás de un sitio web funcione correctamente. Toma los datos, los procesa y los envía al usuario, además de encargarse de las consultas o peticiones a la Base de Datos, la conexión con el servidor, entre otras tareas que debe realizar en su día a día. Cuenta con una serie de lenguajes y herramientas que le ayudan a  cumplir con su trabajo como <a href="https://www.php.net/manual/es/intro-whatis.php">PHP</a>, Ruby, <a href="https://www.python.org/">Python</a>, JavaScript, SQL, MongoDb, MySQL, etc, estos son usados para crear sitios dinámicos. Como en muchos sitios la información se encuentra en constante cambio o actualización, una buena capacidad de respuesta y una velocidad óptima del sitio son responsabilidades que un backend debe de afrontar.</p>

                <blockquote class="blockquote">
                    <cite class="mb-0">Mientras el Front-End se encarga de dejar una página bonita y atractiva, el Back-End se encarga de que todo funcione correctamente por detrás.</cite>
                    <footer class="blockquote-footer">Jose Luis Bernal Navarrete
                    </footer>
                </blockquote>

                <p>Ya que entendimos las funciones de cada uno, podemos afirmar que ninguno de los dos lados es mejor o menos importante que el otro, pues se complementan con el fin de cumplir el mismo objetivo.</p>
                
                <h3>Los Frameworks</h3>

                <p>Con el objetivo de facilitar el trabajo de ambas partes surgen los <a href="https://www.orix.es/que-es-un-framework-y-para-que-se-utiliza">frameworks</a>, que no son ni más ni menos que un conjunto de módulos o librerías de software que dotan a los desarrolladores de herramientas muy poderosas y útiles.</p>
                            
                <h3>¿Qué Framework usar?</h3>

                <p>Debemos tener claro cuáles son las características y necesidades de nuestro proyecto para elegir que tecnología utilizar. Si con un framework sencillo tenemos bastante, no hay necesidad de usar uno más complicado, ya que lo único que vamos a conseguir es complicarnos la vida. Por otro lado, utilizar el mismo framework que te fue bien en otro proyecto, tal vez no sea la decisión correcta. </p>

                <p>A continuación se mostrará una lista de los frameworks más usados y famosos: </p>
            <hr>  
            <h2>Listado de Frameworks</h2>
        
            <div class="table-responsive">
                <table class="table table-hover table-dark">
                    <thead>
                        <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Lanzamiento</th>
                        <th scope="col">Compatibilidad</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat="obj in listaJson">
                            <th scope="row">{{obj.nombre}}</th>
                            <td>{{obj.tipo}}</td>
                            <td>{{obj.lanzamiento}}</td>
                            <td >
                                <ul ng-repeat="ele in obj.compatibilidad">
                                    <li>{{ele}}</li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="foot">
        <p class="m-0 text-center text-white">Copyright Jose Luis Bernal 2020</p>
        </div>
        <!-- /.container -->
    </footer>
    
    </body>
</html>