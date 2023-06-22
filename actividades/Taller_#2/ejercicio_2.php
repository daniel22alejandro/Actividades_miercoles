<?php

// Solicitar al usuario que ingrese su nombre
echo "Ingrese su nombre: ";
$nombre = readline();

// Comparar el nombre ingresado con "Juan"
if ($nombre === "Juan") {
    echo "¡Hola Juan!";
} else {
    echo "Lo siento, no te conozco.";
}

?>
