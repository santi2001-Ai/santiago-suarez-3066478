<?php
// Parte 1: Condición simple
$a = 2;
if ($a == 2) {
    echo "a vale 2\n";
} else {
    echo "a es diferente de 2\n";
}

// Parte 2: Concatenar condiciones
$Nombre = 'Santiago';
$Edad = 23;
$Pais = 'Colombia';

if ($Nombre == 'Santiago' && $Edad == 23 && $Pais == 'Colombia') {
    echo "Su nombre es $Nombre, tiene $Edad y es de $Pais\n";
} elseif ($Nombre == 'Santiago' && !($Edad == 23)) {
    echo "Su nombre es Santiago y no tiene 23 años\n";
} elseif ($Nombre != 'Santiago' && $Edad == 23) {
    echo "Su nombre no es Santiago y tiene 23 años\n";
} else {
    echo "No se llama Santiago ni tiene 23 años\n";
}
?>