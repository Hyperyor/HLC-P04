$(document).ready(function(){
            
    var url="generarJSON.php?empresa=";
    $("#tablajson tbody").html("");
    $.getJSON(url,function(clientes){
    $.each(clientes, function(i,cliente){
    var newRow =
    "<tr>"
    +"<td>"+cliente.titulo+"</td>"
    +"<td>"+cliente.empresa+"</td>"
    +"<td>"+cliente.lanzamiento+"</td>"
    +"</tr>";
    $(newRow).appendTo("#tablajson tbody");
    });
    });
    });