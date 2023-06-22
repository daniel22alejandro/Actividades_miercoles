<!-- Escriba un algoritmo que le permita ingresar dos números enteros por el teclado,
posteriormente calcule la suma, la resta y la multiplicación de los dos números e
imprima los números leídos y los resultados de las tres operaciones. -->
<?PHP 
$num_1 = readline("primer numero\n");
$num_2 = readline("segundo numero\n");

$suma = ($num_1 + $num_2);
$resta = ($num_1 - $num_2);
$multiplica = ($num_1 * $num_2);
$divide = ($num_1 / $num_2);

echo "El resultado de la suma entre $num_1 y $num_2 es: $suma \n El resultado de la resta entre $num_1 y $num_2 es: $resta \n El resultado de la multipicación entre $num_1 y $num_2 es: $multiplica \n El resultado de la división entre $num_1 y $num_2 es: $divide";


?>