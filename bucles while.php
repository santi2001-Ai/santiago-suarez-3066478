while (true) {
    echo "introduzca un valor mayor a 10\n";
    $a = intval(trim(fgets(STDIN)));  // Leer entrada del usuario
    if ($a > 10) {
        echo "Es correcto\n";
    } else {
        echo "Es incorrecto, pruebe de nuevo\n";
        break;
    }
}