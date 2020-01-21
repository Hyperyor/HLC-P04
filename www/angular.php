<!DOCTYPE html>
<html>
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
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script>

    <link rel="stylesheet" type="text/css" href="assets/css/nav.css">
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

  </head>

  <body ng-app="myapp">

    <!-- navbar -->  
    <nav class="navbar navbar-expand-lg fixed-top ">  
      <a class="navbar-brand" href="indice.php" >Inicio</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">  
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarSupportedContent">     <ul class="navbar-nav mr-4">
      <li class="nav-item">
          <a class="nav-link" data-value="about" href="angular.php">Angular vs AngularJS</a>        </li>  
      <li class="nav-item">
          <a class="nav-link " data-value="portfolio"href="#">FE y BE</a>    
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

    <br/>
    <br/>
    <br/>

    <div class="container">
        <div class="form-group">
            <h2>Deja un comentario</h2>
            <form ng-controller="userCtrl">
                <textarea class="form-control" rows="5" ng-model="cmtName" placeholder="Tu comentario"></textarea>
                <br/>
                <button class="btn btn-success btn-md pull-right" ng-click='btn_post();'>Enviar</button>
                <br/>
                <hr/>
                <h3>Comentarios</h3>
                <ul class="list-group">
                    <li class="list-group-item" ng-repeat="cmt in comments"> {{ cmt }}
                        
                        <!--<button id="delete"type="button" ng-click="post_cmt($home)" class="btn btn-danger btn-md pull-right" aria-label="Right Align">
                        Delete
                        </button>-->
                    </li>
                </ul>
            </form> 
        </div>
    </div>
    
    <script>
    var fetch = angular.module('myapp', []);
    
    fetch.controller('userCtrl', ['$scope', '$http', function ($scope, $http) {
     /*$http({
      method: 'get',
      url: 'listar.php'
     }).then(function successCallback(response) {
      // Store response data
      $scope.comments = response.data;
     }); {{ cmt.coment }}*/
     $scope.comments = [];
     $scope.btn_post = function() {
        if ($scope.cmtName != '') {
            $scope.comments.push($scope.cmtName);
            $scope.cmtName = "";
        }
    $scope.post_cmt = function($home) {
        $scope.comments.splice($home, 1);
        }
    }
    }]);
    
    </script>
    
    <!--<script type="text/javascript" src='assets/js/comments.js'></script>-->
    
    </body>
</html>