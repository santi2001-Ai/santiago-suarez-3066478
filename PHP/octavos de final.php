<?php
// Lista de partidos
$partidos = [
    ["Paises Bajos", "Corea del Sur"],
    ["Senegal", "Portugal"],
    ["Inglaterra", "Suiza"],
    ["USA", "Brazil"],
    ["Argentina", "Croacia"],
    ["Polonia", "Marruecos"],
    ["Francia", "España"],
    ["Australia", "Japon"]
];

// Arreglo para almacenar los resultados
$resultados = [];

// Arreglo para almacenar los equipos que pasan a la siguiente ronda
$equipos_pasan = [];

// Iterar sobre cada partido
foreach ($partidos as $indice => $partido) {
    $equipo1 = $partido[0];  // Primer equipo
    $equipo2 = $partido[1];  // Segundo equipo
    $resultado = rand(0, 2);  // Generar un resultado aleatorio (0, 1 o 2)

    // Almacenar el resultado en el arreglo
    $resultados[$indice] = $resultado;

    // Imprimir el resultado del partido
    if ($resultado == 2) {
        echo "$equipo1 gana contra $equipo2\n";
        $equipos_pasan[] = $equipo1;  // El equipo1 pasa a la siguiente ronda
    } elseif ($resultado == 1) {
        echo "Empate entre $equipo1 y $equipo2\n";
        // En este caso, no se agrega ningún equipo a la siguiente ronda
    } else {
        echo "$equipo1 pierde contra $equipo2\n";
        $equipos_pasan[] = $equipo2;  // El equipo2 pasa a la siguiente ronda
    }
}

// Imprimir todos los resultados
echo "\nResultados finales:\n";
print_r($resultados);

// Imprimir los equipos que pasan a la siguiente ronda
echo "\nEquipos que pasan a la siguiente ronda:\n";
foreach ($equipos_pasan as $equipo) {
    echo "$equipo\n";
}
?>