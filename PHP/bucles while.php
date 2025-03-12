<?php
while (true) {
    echo "Introduzca un valor mayor a 10:\n";
    $a = intval(trim(fgets(STDIN)));  // Leer entrada del usuario

    if ($a > 10) {
        echo "Es correcto\n";
        break;  // Salir del bucle si el valor es correcto
    } else {
        echo "Es incorrecto, pruebe de nuevo\n";
        // No usar break aquí, para permitir que el bucle continúe
    }
}
?>