<?php
 /* $nota = intval((readline("Ingrese numero de su nota: " )));

 $r = match(true){
    $nota <= 100 , "Excelente",
    $nota >= 80, " rerere Melo",
    $nota >= 70, "rere melo",
    $nota >= 60, "re melo",
    $nota >= 50, "melo",
    $nota >= 40, "masomenos melo",
    $nota >= 30, "no tan melo",
    $nota >= 20, "no melo",
    $nota >= 10, "nada melo",
    $nota >= 0, "cagada papi", 
    default => "no hay nada pa",
 };
 echo $r; */

$nota = intval((readline("Ingrese numero de su nota: ")));

$r = match (true) {
    $nota <= 100 && $nota >=90 =>  "Excelente",
    $nota >= 80 && $nota <=89=>" rerere Melo",
    $nota >= 70 && $nota <=79=> "rere melo",
    $nota >= 60 && $nota <=69=> "re melo",
    $nota >= 50 && $nota <=59=> "melo",
    $nota >= 40 && $nota <=49=> "masomenos melo",
    $nota >= 30 && $nota <=39=> "no tan melo",
    $nota >= 20 && $nota <=29=> "no melo",
    $nota >= 10 && $nota <=19=> "nada melo",
    $nota >= 0 && $nota <=9=> "cagada papi",
    default => "no hay nada pa"
};
echo $r;
 ?>