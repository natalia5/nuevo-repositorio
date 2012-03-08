<?php 
   class A{ 
   function hola(){ 
   echo "hola gente"; 
   } 
  } 

  class B extends A{ 
    function hola(){ 
    echo "hola class B"; 
  } 
 } 

    $obj = new B(); 
    $obj->hola(); 
?>
