<?php
// Creación de un arreglo asociativo (similar a un diccionario en Python)
$coche = [
    'marca' => 'Chana',
    'color' => 'blanco',
    'modelo' => 'sedan',
    'placa' => 'DAD190'
];

// Imprimir el valor de 'color'
echo $coche['color'] . "\n";

// Cambiar el valor de 'color'
$coche['color'] = 'Negro';
echo $coche['color'] . "\n";

// Imprimir el valor de 'marca'
echo $coche['marca'] . "\n";

// Cambiar el valor de 'marca'
$coche['marca'] = 'Renault';
echo $coche['marca'] . "\n";

// Imprimir todo el arreglo
print_r($coche);
?>