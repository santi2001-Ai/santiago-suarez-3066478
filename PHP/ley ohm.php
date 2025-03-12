<?php
// Solicitar el valor del voltaje
echo "Ingrese el valor del voltaje del circuito:\n";
$Voltaje = intval(trim(fgets(STDIN)));

// Solicitar el valor de la resistencia
echo "Ingrese el valor de la resistencia del circuito:\n";
$Resistencia = intval(trim(fgets(STDIN)));

// Calcular la intensidad (amperaje)
$Intensidad = $Voltaje / $Resistencia;

// Mostrar el resultado
echo "Al conectar un resistor de R $Resistencia ohm a una fuente de V $Voltaje voltage circulará una corriente de $Intensidad amperios\n";
?>