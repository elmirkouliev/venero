<?php

function createSocialButton($data_icon,$link,$color){
    
    echo '<a href="'.$link.'">';
        
        echo '<li>';
        
            echo '<span class="icon-'.$data_icon.' social_li" id="'.$color.'" aria-hidden="true"></span>';
        
        echo '</li>';
    
    echo '</a>';

}

?>

<div id="header" class="page">

    <div id="som">

        <p id="header_logo">VENERO</p>

        <img src="/resources/images/som.gif" >

    </div> 

    <span class="icon-venero" aria-hidden="true"></span>

</div>

<div id="info">

    <span id="info_logo" class="icon-venero" aria-hidden="true"></span>

    <p>Venero translates to the root, source, or place where something springs into being. My intentions with this company is to transfigure it into something that will reach out and help those who need it. Something that people can feel a connection to. The focus of all of my designs are themed behind ideas of human equality, peace, injustice, self-expression, and appreciation. However, Venero will not only reflect these themes in its clothing, but it will be an active bond that will bridge people together to live by these ideas. It will unify and promote brothers/sisters of different age, skin color, religion, and social status to build each other and heal one another.</p>

    <ul>
       <?php
        createSocialButton('mail','mailto:veneroclothing@gmail.com','#ca2413');
        createSocialButton('twitter','https://twitter.com/Andrew_Tsuei','#55ACEE');
        createSocialButton('instagram','http://instagram.com/andrewrsway','#517fa4');
        createSocialButton('facebook','https://www.facebook.com/veneroclothing','#3b5998');
       ?>  
    </ul>

</div>
