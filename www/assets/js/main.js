$(document).ready(function(){
    $('.header').height($(window).height());
   
    $(".description a").click(function(){
        $("body,html").animate({
            scrollTop:$("#" + $(this).data('value')).offset().top
        },1000)
     
    })
   
   })