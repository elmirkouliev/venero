<?php  

$page = 'Collections'; 

if(isset($_REQUEST['id']) && file_exists($_REQUEST['id'].'.php')){
  
  $collection = strtoupper($_REQUEST['id']);

  if($collection == 'TBD')
    $script = '/collections/tbd.js';
  else if ($collection == 'SOM')
    $script = '/collections/som.js';

  $page = 'Collections &mdash; '.$collection;

}     

else header('Location: /');

include '../resources/structure/head.php'; //HTML, HEAD, BODY, Wrapper 

    include '../resources/structure/nav.php';   

    if(isset($collection)) include(strtolower($collection).'.php');

include '../resources/structure/close.php'; //Footer    

?>