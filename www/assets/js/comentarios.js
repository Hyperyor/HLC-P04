var app=angular.module("primeraAPP",[]);
var app=angular.module("APP", ["LocalStorageModule"]);

app.controller("todoControl", function($scope, localStorageService){

    if(localStorageService.get("clave-todo"))//el parametro pasado es la clave que identificara a la lista
    {
        
        $scope.todo=localStorageService.get("clave-todo");
    }
    else
    {
        $scope.todo=[];
    }

    $scope.$watchCollection("todo", function(newValue, oldValue){

        localStorageService.set('clave-todo', $scope.todo);

    });

    $scope.addAct=function(){
        
        if($scope.nuevaAct['usuario'] == undefined )
        {
            $scope.nuevaAct['usuario'] = '';
        }
        else
        {
            
            $scope.nuevaAct['usuario'] = $scope.nuevaAct['usuario'] + " dice: ";
            $scope.todo.push($scope.nuevaAct);
            $scope.nuevaAct={};
            localStorageService.set("clave-todo", $scope.todo);

        }
        
    }

    $scope.clean=function(){

        $scope.todo=[];
        localStorageService.set("clave-todo", $scope.todo);
    }


});
