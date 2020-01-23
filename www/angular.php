<!DOCTYPE html>
<html ng-app="APP">
  <head>
    <title>Angular vs AngularJS</title>
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
    <script src="assets/js/angular-local-storage.min.js"></script>
    <script src="assets/js/comentarios.js"></script>

    <link rel="stylesheet" type="text/css" href="assets/css/nav.css">
    <link rel="stylesheet" type="text/css" href="assets/css/angular.css">
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

  </head>

  <body >

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
    <!-- --> 
    <section>
        <br/>
        <!-- contenido --> 
        <div class="container">

            <!-- Title -->
            <h1 class="mt-4">Angular vs AngularJS</h1>

            <!-- Author -->
            <p class="lead">
            por
            <a href="#">Jose Luis Bernal Navarrete</a>
            </p>

            <hr>

            <!-- Date/Time -->
            <p>22/01/2020</p>

            <hr>

            <!-- Preview Image -->
            <img class="img-fluid rounded" src="assets/imagenes/avsajs.jpg" alt="">

            <hr>

                <!-- Post Content -->
                <p class="lead">Antes de nada debes tener claro que, a pesar de compartir el nombre, AngularJS y Angular no tienen nada que ver. El mal llamado Angular no es una nueva versión de AngularJS (también denominado Angular 1.x). Es un nuevo framework, escrito desde cero y con conceptos y formas de trabajar completamente distintos.</p>

                <p>Angular utiliza un sistema de inyección de dependencias jerárquico impulsando su rendimiento de forma brutal. También implementa la detección de cambios basados en árboles unidireccionales, que también incrementa el rendimiento. Según algunos datos oficiales, Angular puede llegar a ser 5 veces más rápido que <mark>AngularJS</mark>.</p>

                <p>A continuación vamos a mostrar las mayores diferencias entre ambos frameworks.</p>

                <ul>
                    <li>Angular está orientado a teléfonos inteligentes (smartphones). AngularJS no se hizo para soportar teléfonos inteligentes (smartphones). Los soporta mediante bibliotecas adicionales pero no se hizo pensando en  eso. En cambio Angular desde el principio se creó para que tuviera un buen rendimiento en los teléfonos inteligentes (smartphones).</li>
                    <li>Angular usa TypeScript, mientras que AngularJS usa JavaScript. TypeScript es un superconjunto de JavaScript, en otras palabras es un JavaScript muy mejorado.</li>
                    <li>En Angular se usan componentes web, en AngularJS se usan controladores. Los componentes web son un conjunto de características que se añaden a las especificaciones HTML y DOM. La intención es que sean reutilizables en las aplicaciones web.</li>
                    <li>La sintaxis de las directivas estructurales ha cambiado. Por ejemplo, en Angular se usa *ngFor y en AngularJS se usa ng-repeat.</li>
                    <li>Angular usa directamente el DOM. Las siglas DOM significan Document Object Model. Se trata de un conjunto de objetos para representar documentos HTML, XHTML, y XML, un modelo estándar sobre cómo pueden combinarse dichos objetos, y una interfaz estándar para acceder a ellos y manipularlos. A través del DOM, los programas pueden acceder y modificar el contenido, la estructura y el estilo de los documentos HTML y XML, que es para lo que se diseñó el DOM principalmente. En AngularJS se usan directivas para acceder al DOM, en Angular ya es algo directo.</li>
                </ul>
                
                <blockquote class="blockquote">
                <cite class="mb-0">Angular es un nuevo framework, escrito desde cero y con conceptos y formas de trabajar completamente distintos.</cite>
                <footer class="blockquote-footer">Jose Luis Bernal Navarrete
                    
                </footer>
                </blockquote>

                <p>Como vemos, aunque siempre hay cosas en común, AngularJS y Angular son muy diferentes tanto en lo que se refiere a la forma de trabajar como a los conceptos que subyacen a ambas tecnologías.</p>

                <p>En los puntos anteriores solo hemos tocado la superficie, pero esperamos que te haya ayudado a ver la manera tan distinta de trabajar que tienen ambas plataformas JavaScript.</p>

                <p>Por eso no se puede hablar de una nueva versión, sino de un nuevo framework, que es necesario aprender prácticamente desde cero.</p>

            <hr>    
        </div>
    </section>

    <section>  
    <br/>
    <br/>
    <br/>
    <br/>

        <div class="container">
            <div class="form-group">
                <h2>Deja un comentario</h2>
                <form ng-controller="todoControl" ng-submit="addAct()">
                    <textarea class="form-control" rows="1" ng-model="nuevaAct.usuario" placeholder="Tu usuario"></textarea>
                    <textarea class="form-control" rows="5" ng-model="nuevaAct.descripcion" placeholder="Tu comentario"></textarea>
                    <br/>
                    <button type="submit"  class="btn btn-success btn-md pull-right">Enviar</button>
                    <br/>
                    <hr/>
                    <h3>Comentarios</h3>
                    <div class="row">
                        
                        <div class="col-sm">
                            <ul class="list-group">
                                <li class="list-group-item" ng-repeat="cmt in todo"> <strong>{{ cmt.usuario}}</strong> {{ cmt.descripcion }}
                                    
                                </li>
                            </ul>
                        </div>

                        <div class="col-sm">
                            <button ng-click="todo=[]" class="btn btn-danger btn-md pull-right">Borrar todos los datos</button>
                        </div>
                    </div>
                </form> 
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