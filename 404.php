<?php    
       
$page = '404';

ob_start();	

include 'resources/structure/head.php'; //HTML, HEAD, BODY, Wrapper 

?>

<div> 

  <div class="page" id="fourofour">

      <h2>Sorry, but this page doesn't exist</h2>

      <h2>Click here to go back home.</h2>

      <a href="/"><span class="icon-venero hoverRed" data-return="#000" aria-hidden="true"></span></a>

  </div>
    
<?php

include 'resources/structure/close.php'; //Document Close  

ob_flush();  

?>