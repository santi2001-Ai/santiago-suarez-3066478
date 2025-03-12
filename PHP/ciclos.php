<?php
// Solicitar el primer valor
echo "Ingrese el primer valor:\n";
$A = intval(trim(fgets(STDIN)));  // Captura el primer número

// Solicitar el segundo valor
echo "Ingrese el segundo valor:\n";
$C = intval(trim(fgets(STDIN)));  // Captura el exponente

// Calcular la potencia
$valor = $A ** $C;

// Mostrar el resultado
echo "La potencia de $A sobre $C es: $valor\n";
?>
