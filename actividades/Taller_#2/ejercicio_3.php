<?php

// Solicitar al usuario que ingrese un número del 1 al 7
echo "Ingrese un número del 1 al 7: ";
$numero = readline();

// Comparar el número ingresado y mostrar el día de la semana correspondiente
switch ($numero) {
    case 1:
        echo "Lunes";
        break;
    case 2:
        echo "Martes";
        break;
    case 3:
        echo "Miércoles";
        break;
    case 4:
        echo "Jueves";
        break;
    case 5:
        echo "Viernes";
        break;
    case 6:
        echo "Sábado";
        break;
    case 7:
        echo "Domingo";
        break;
    default:
        echo "Número inválido";
        break;
}

?>
