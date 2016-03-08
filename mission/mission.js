$(document).ready(function () {

    var puzzleA = document.getElementsByClassName('puzzle-a-listener');
    console.log(puzzleA);
    var aIndex = 1;

    var puzzleB = document.getElementsByClassName('puzzle-b-listener');
    var bIndex = 3;

    var puzzleC = document.getElementsByClassName('puzzle-c-listener');
    var cIndex = 2;

    for (var i = 0; i < puzzleA.length; i++) {
        
        puzzleA[i].addEventListener('click', function(event){

            aIndex ++;
            
            if(aIndex > 4) aIndex = 1
        
            document.getElementById('puzzle-a').src= "/resources/images/mission/a" + aIndex + ".jpg";

        });

    };

    for (var i = 0; i < puzzleB.length; i++) {

        puzzleB[i].addEventListener('click', function(){

            bIndex ++;
            
            if(bIndex > 4) bIndex = 1
        
            document.getElementById('puzzle-b').src= "/resources/images/mission/b" + bIndex + ".jpg";

        });

    };


    for (var i = 0; i < puzzleC.length; i++) {

        puzzleC[i].addEventListener('click', function(){

            cIndex ++;
            
            if(cIndex > 4) cIndex = 1
        
            document.getElementById('puzzle-c').src= "/resources/images/mission/c" + cIndex + ".jpg";
        
        }); 

    }
    

    var elms = document.getElementsByClassName('mission-create-header');

    var delay = 400;

    for(i = 0 ; i < elms.length ; i++){

        elm = elms[i].nextSibling;

        doSetTimeout(i, delay)

        delay += 500;
        
    }

    function doSetTimeout(i, delay) {
      
      setTimeout(function(){ 
         elms[i].nextSibling.style.opacity = 1;

    }, delay);
    
    }

});