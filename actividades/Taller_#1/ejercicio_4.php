<!-- Una empresa está realizando un aumento del 15% al sueldo base de sus
trabajadores, escriba un algoritmo que solicite el nombre de un trabajador y su sueldo
base, a continuación, el algoritmo debe calcular el aumento y el valor final a pagar al
trabajador. -->
<?php 
$nom = readline("Ingrese nombre del empleado");
$suel = readline("Ingrese su sueldo");

$aumento = ($suel*0.15)* + $suel;

echo "Hola, señor $nom, su sueldo base es de $suel, con e aumento del 15% su salario quedo en $aumento";


?>