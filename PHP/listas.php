<?php
// Parte 1: Acceder a un elemento de la lista por su índice
$Lista = ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'viernes', 'sabado'];
echo $Lista[4] . "\n";  // Traerá el dato según posición en la lista comenzando en cero

// Parte 2: Imprimir la lista completa
$Lista = ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'viernes', 'sabado'];
print_r($Lista);  // Traerá la lista completa de datos

// Parte 3: Obtener una porción de la lista
$Lista = ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'viernes', 'sabado'];
$sublista = array_slice($Lista, 0, 3);  // Traerá una porción de la lista
print_r($sublista);

// Parte 4: Lista con sublista y acceso a elementos
$Lista = ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'viernes', 'sabado', 1, 2, 3, ['Santiago', 0.2, 2.25, true]];
$sublista1 = array_slice($Lista, 0, 4);  // Porción de la lista principal
$sublista2 = array_slice($Lista[9], 0, 3);  // Porción de la sublista
print_r($sublista1);
print_r($sublista2);
?>