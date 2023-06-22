<?php

// Solicitar al usuario que ingrese su edad
echo "Ingrese su edad: ";
$edad = readline();

// Verificar la edad y tomar decisiones basadas en ella
if ($edad >= 18) {
    echo "¿Tiene licencia de conducir? (sí/no): ";
    $respuesta = readline();

    if ($respuesta === "sí") {
        echo "Puedes conducir.";
    } elseif ($respuesta === "no") {
        echo "Debes obtener una licencia de conducir primero.";
    } else {
        echo "Respuesta inválida.";
    }
} else {
    echo "No puedes conducir.";
}

?>
