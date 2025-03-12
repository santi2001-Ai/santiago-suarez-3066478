<?php
// Parte 1: Imprimir una lista de nombres
$nombres = ['Santiago', 'Hans', 'Jhon', 'Juan Pablo \n\n'];
foreach ($nombres as $nombre) {
    echo $nombre . "\n";
}

// Parte 2: Trabajar con arreglos asociativos (similares a diccionarios en Python)
$Personas = [];  // Arreglo vacío

// Crear arreglos asociativos para cada persona
$a = ['nombre' => 'Santiago', 'Edad' => 23];
$b = ['nombre' => 'Hans', 'Edad' => 27];
$c = ['nombre' => 'Jhon', 'Edad' => 41];
$d = ['nombre' => 'Juan Pablo', 'Edad' => 23];

// Agregar cada persona al arreglo $Personas
array_push($Personas, $a);
array_push($Personas, $b);
array_push($Personas, $c);
array_push($Personas, $d);

// Recorrer el arreglo de personas e imprimir sus datos
foreach ($Personas as $persona) {
    echo $persona['nombre'] . " " . $persona['Edad'] . "\n";
}
?>