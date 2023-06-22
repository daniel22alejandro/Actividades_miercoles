<?php
$numero= readline("Ingrese un numero\n");
    $resultado=(($numero%2!==0) and ($numero%3!==0) and ($numero%5!==0) and ($numero%7!==0))? "El numero SI es primo\n" : "el numero NO es primo\n";

    echo $resultado;
?>