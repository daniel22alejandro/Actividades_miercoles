<?php
$letra = readline("Ingresa una letra:\n ");
 $resul = match($letra){
    "a"=>"es una vocal",
    "e"=>"es una vocal",
    "i"=>"es una vocal",
    "o"=>"es una vocal",
    "u"=>"es una vocal",
    default =>"Es una consonante"
 };
 echo $resul;
?>