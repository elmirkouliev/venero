$(document).ready(function () {


    $('#header_logo').delay(500).transition({y : '40', opacity : 1},1500,function(){

        $('#som img:eq(0)').transition({y : '-40', opacity : 1},1400).attr('src','/resources/images/som.gif');


    });

    $(".icon-venero",'#header').hover(function(e) {

        $(this).hoverFlow(e.type, { color: "#ca2413" });

        }, function(e) {

        $(this).hoverFlow(e.type, { color: "#000" });

    });

    $('.icon-venero','#header').click(function(){

        $('html,body').filter(':not(:animated)').animate({
        
          scrollTop:$('#info').offset().top
        
        }, 2000);

        $(this).transition({opacity : 0});

    });

    $('.social_li').hover(function(e) {

        var color = $(this).attr('id');
        
        $(this).hoverFlow(e.type, { color: color });

      }, function(e) {

        $(this).hoverFlow(e.type, { color: "#333" });

    });

    $('#preview div').hover(function(e) {

        var color = $(this).attr('id');

        $(this).hoverFlow(e.type, { backgroundColor: color });

        }, function(e) {

        $(this).hoverFlow(e.type, { backgroundColor: "#FFF" });

    });
    
});