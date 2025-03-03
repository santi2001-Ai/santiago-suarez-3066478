<?php
// Solicitar al usuario que seleccione una figura
echo "Seleccione la figura a calcular su área:\n\n";
echo "1 para rombo\n";
echo "2 para rectangulo\n";
echo "3 para cuadrado\n";
echo "4 para trapecio\n";
$Figura = trim(fgets(STDIN));

// Definir constantes
$Pi = 3.1416;
$const = 2;

// Usar switch para manejar las opciones
switch ($Figura) {
    case '1': // Rombo
        echo "Ingresa el valor de la diagonal mayor:\n";
        $Dmayor = intval(trim(fgets(STDIN)));
        echo "Ingresa el valor de la diagonal menor:\n";
        $Dmenor = intval(trim(fgets(STDIN)));
        $Area = ($Dmayor * $Dmenor) / $const;
        echo "El área del rombo es: $Area\n";
        break;

    case '2': // Rectángulo
        echo "Ingresa el valor del largo del rectangulo:\n";
        $Largo = intval(trim(fgets(STDIN)));
        echo "Ingresa el valor del ancho del rectangulo:\n";
        $Ancho = intval(trim(fgets(STDIN)));
        $Area = $Largo * $Ancho;
        echo "El área del rectangulo es: $Area\n";
        break;

    case '3': // Cuadrado
        echo "Ingresa el valor del lado del cuadrado:\n";
        $Lado = intval(trim(fgets(STDIN)));
        $Area = $Lado * $Lado;
        echo "El área del cuadrado es: $Area\n";
        break;

    case '4': // Trapecio
        echo "Ingresa el valor de la base mayor:\n";
        $Bmayor = intval(trim(fgets(STDIN)));
        echo "Ingresa el valor de la base menor:\n";
        $Bmenor = intval(trim(fgets(STDIN)));
        echo "Ingrese la altura del trapecio:\n";
        $H = intval(trim(fgets(STDIN)));
        $Area = (($Bmayor + $Bmenor) * $H) / 2;
        echo "El área del trapecio es: $Area\n";
        break;

    default:
        echo "Opción no válida.\n";
        break;
}
?>