$(document).ready(function () {

    var i = 0;

    var images = document.getElementById('banner').getElementsByTagName('img');

    for (var i = 0; i < images.length; i++) {
        images[i].src = '/resources/images/home/'+ (i + 1) + '.jpg';
    };

    $('#banner').transition({opacity : 1},500, function(){


        // type("\"A Youthful Exploration of the Arts\"");

    });

    clearInterval(window.imgInterval);

    imageInt();

    window.imgInterval = setInterval(imageInt, 4000);

    function imageInt(){

        if(i < 0) i = 5;

        if(i == 0){
            $('#banner img').eq(i).addClass('active');
            $('#banner img').css({opacity : 1});
            $('#banner img').eq(i).transition({opacity : 0} , 1500,function(){
                 $(this).removeClass('active');
                 $('#banner img').eq(0).css({opacity : 1});
            });
        }
        else
            $('#banner img').eq(i).transition({opacity : 0} , 1500); 
        
        i--;

    }

    var running = false;

    document.getElementById('home-up').addEventListener('click', function(){

        clearInterval(window.imgInterval);

        if(running) return false;

        running = true;

        if(i < 0) i = 5;

        if(i == 0){

            $('#banner img').eq(i).addClass('active');
            $('#banner img').css({opacity : 1});
            $('#banner img').eq(i).transition({opacity : 0} , 1500,function(){
                 $(this).removeClass('active');
                 $('#banner img').eq(0).css({opacity : 1});
                 running = false;
            });
        }
        else{
            console.log(i);
            $('#banner img').eq(i).transition({opacity : 0} , 1500, function(){
                running = false;
            }); 

        }
        
        i--;
        
    });

});


function type(title){
  
    header = document.getElementById("tagline");
    
    for (var i = 0; i < title.length; i ++ ){

        header.innerHTML += '<span id="' + i + '">' + title.charAt(i) + '</span>';
    }

    tags = header.getElementsByTagName('span');

    e = 40;

    for (var i = 0; i < tags.length; ++i) {
        (function(i) {
            setTimeout(function() {             
                tags[i].style.opacity = 1;
            }, e);
        })(i);
        e +=50;
    }

}