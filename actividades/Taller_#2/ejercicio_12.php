<?php
$dia = intval(readline("Ingrese un numero de 1 a 7:\n ")) ;  
$r=match($dia){
    1=>"Lunes",
    2=>"Martes",
    3=>"Miercoles",
    4=>"Jueves",
    5=>"Viernes",
    6=>"Sabado",
    7=>"Domingo",
    default=>"Numero Invalido"
};
echo $r;