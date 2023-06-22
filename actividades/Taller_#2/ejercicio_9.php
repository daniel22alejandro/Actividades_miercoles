<?php
$nota= readline("Ingrese la nota:\n");

        if ($nota >= 90):
            echo"Sobresaliente\n";
        elseif ($nota >= 60):
            echo"Aprobado\n";
        else:
            echo "Reprobado\n";
        endif;
?>