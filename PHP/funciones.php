<?php
// Parte 1: Multiplicación de elementos de dos arreglos
$a = [1, 2, 3, 4, 5];
$b = [6, 7, 8, 9, 10];
$c = [];

for ($contador = 0; $contador < count($a); $contador++) {
    $c[] = $a[$contador] * $b[$contador];
}
print_r($c);

// Parte 2: Funciones

// Definición y llamada
function mostrar_texto() {
    echo "hola\n";
}
mostrar_texto();

function multiplicar() {
    $a = 5;
    $b = 8;
    echo $a * $b . "\n";
}
multiplicar();

// Ámbito de las variables
function multiplicar_ambito() {
    global $a, $b;  // Acceder a variables globales
    echo $a * $b . "\n";
}
$a = 5;
$b = 8;
multiplicar_ambito();

// Funciones con return
function multiplicar_return() {
    $a = 5;
    $b = 8;
    return $a * $b;
}
$Resultado = multiplicar_return();
echo $Resultado + 5 . "\n";

// Devolver cualquier tipo de dato
function validar_dato() {
    global $a;  // Acceder a la variable global $a
    if ($a == 5) {
        return true;
    } else {
        return false;
    }
}
$a = 5;
$dato = validar_dato();
echo $dato ? "true\n" : "false\n";
?>