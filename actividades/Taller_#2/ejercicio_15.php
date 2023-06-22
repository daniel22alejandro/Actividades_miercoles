<?php
$monto = readline("Ingrese el total\n"); 

        if ($monto >= 1000):
            $total =($monto * 0.9);
            echo "El total a pagarcon un 10% de descuento es $total \n"; 

        elseif ($monto >= 500):
            $total =($monto * 0.95);
            echo "El total a pagarcon un 5% de descuento es $total \n"; 

        else:
            echo "El total a pagar es $monto \n";

        endif;    
?>