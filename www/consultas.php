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
    <!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    --><script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" ></script> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/consultas.css">
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

    
    <section id = "contenido">

        <br/> 
        <br/>  
        <br/> 

        <h1 class="text-center">Consultas</h1>

        <form class="form-group">
            <div id="nombreEmpresa" class="row">
                <select class="col-sm">
                
                </select> 
            </div>
            <!--<textarea id="nombreEmpresa" class="form-control" rows="1" placeholder="Empresa"></textarea>-->
            <br/>
            <a id="botonEnviar" type="submit"  class="btn btn-success btn-md pull-right col-sm"  >Filtrar</a>
            <br/>
        </form> 

        <div class="table-responsive">
            <div id="tablajson">

                <table id="tablajson" class="table table-hover table-dark">
                    <thead>
                        
                    </thead>
                    <tbody>
                        <!--Aqui es donde se añaden los datos-->
                    </tbody>
                </table>
                </div>
        </div>

        <script type="text/javascript">

        
       $(document).ready(function(){
            var cont = 0;

            $("#botonEnviar").click(function() {

                var url="generarJSON.php?empresa=";

                var selection = $("#nombreEmpresa select option:selected").val();

                url = url + selection;
                
                $("#tablajson tbody").html("");
                $.getJSON(url,function(clientes){

                    if(cont == 0)
                    {
                        var cabecera = 
                        '<tr>'
                        +'<th scope="col">Titulo</th>'
                        +'<th scope="col">Empresa</th>'
                        +'<th scope="col">Lanzamiento</th>'
                        +'<th scope="col">Portada</th>'
                        +'</tr>';
                        $(cabecera).appendTo("#tablajson thead");
                        cont++;
                    }
                    

                    $.each(clientes, function(i,cliente){
                        var newRow =
                        "<tr>"
                        +"<td>"+cliente.titulo+"</td>"
                        +"<td>"+cliente.empresa+"</td>"
                        +"<td>"+cliente.lanzamiento+"</td>"
                        +"<td> <img src='"+cliente.portada+"' height= 100 width=70> </img></td>"
                        +"</tr>";
                        $(newRow).appendTo("#tablajson tbody");
                    });
                });
            });

            var url="cargarEmpresas.php";

            $("#nombreEmpresa select").html("");
            $.getJSON(url,function(emps){
                $.each(emps, function(i,emp){
                    var newRow =
                    "<option value='" + emp.nombre + "'>"+emp.nombre+"</option>";
                    $(newRow).appendTo("#nombreEmpresa select");
                });
            });
        });

        </script>

 
    </section>
    
    
    <!--<script type="text/javascript" src='assets/js/main.js'></script>-->
  </body>
</html>