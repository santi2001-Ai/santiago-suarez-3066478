<?php
// Solicitar valores al usuario
echo "Ingrese valor:\n";
$A = intval(trim(fgets(STDIN)));

echo "Ingrese valor:\n";
$B = intval(trim(fgets(STDIN)));

// Realizar operaciones
$suma = $A + $B;
echo "La suma de los números es: $suma\n";

$res = $A - $B;
echo "La resta de los números es: $res\n";

$multi = $A * $B;
echo "La multiplicación de los números es: $multi\n";

$div = $A / $B;
echo "La división de los números es: $div\n";

// Comparaciones
$igual = $A == $B;
echo "El número es igual: " . ($igual ? "Sí\n" : "No\n");

$mayor = $A > $B;
echo "El número menor es: " . ($mayor ? $B : $A) . "\n";
echo "El número mayor es: " . ($mayor ? $A : $B) . "\n";
?>