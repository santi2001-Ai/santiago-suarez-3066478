<?php
// Parte 1: Operaciones con booleanos
$a = true;
$b = false;
echo ($a && $b) ? "true\n" : "false\n";

// Parte 2: Comparaciones con números
$a = 2;
$b = 3;
$c = 4;
$d = 10;

echo ($a == $b && $c < $d) ? "true\n" : "false\n";

// Parte 3: Uso de NOT en comparaciones
echo (!$a == $b && $c > $d) ? "true\n" : "false\n";
?>
