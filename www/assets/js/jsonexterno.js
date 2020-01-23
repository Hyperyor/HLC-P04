/*var app=angular.module("primeraAPP",[]);
app.controller("primerControlador",function($scope){

    $scope.nombre="Javier";
    $scope.nuevoComentario={};
    $scope.comentarios=[
        {
            comentario: "Buen tutorial",
            usuario: "Javier"
        },

        {

            comentario: "No me ha gustado",
            usuario: "Juan"
        }

    ];

    $scope.ponerCom=function(){
        console.log("hhhh");
        $scope.comentarios.push($scope.nuevoComentario);
        $scope.nuevoComentario={};
    }
});*/

//Dependencias
//peticion get y peticion post
var app=angular.module("appFrameworks",[]);
app.controller("primerControlador",["$scope", "$http",function(escope, http){

    escope.listaJson=[];
    

    http.get("https://my-json-server.typicode.com/Hyperyor/datosjson/db")
    .then(function(response){//el parametro recibido es lo que retorna el servidor
        
        console.log(response.data.frameworks);
        escope.listaJson=response.data.frameworks;

    });
    
    escope.nuevoLista={};
}]);
 /*   escope.AnadirPost=function()
    {
        var peticion=http.post("https://my-json-server.typicode.com/javiGeno/front_back/db", 
        {
            title: escope.nuevoLista.title,
            body: escope.nuevoLista.body,
            userId: 1
            //lo que recibirá el servidor lo guarda desde el html(sincronizado)
        }
        
        );

        peticion.then(function(response){//el parametro recibido es lo que retorna el servidor
            
            console.log(response.data);
            escope.listaJson.push(response.data);//
            escope.nuevoLista={};
            
        }, function(error)
        { 
            console.log(error);
        })
    }

}]);*/


