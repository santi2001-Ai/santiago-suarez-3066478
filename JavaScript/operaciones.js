// Solicitar valores al usuario
let A = parseFloat(prompt("Ingrese valor:"));
let B = parseFloat(prompt("Ingrese valor:"));

// Realizar operaciones matemáticas
let suma = A + B;
let resta = A - B;
let multiplicacion = A * B;
let division = A / B;

// Comparaciones
let igual = A === B;
let mayor = A > B;

// Mostrar resultados en la consola
console.log("La suma de los números es:", suma);
console.log("La resta de los números es:", resta);
console.log("La multiplicación de los números es:", multiplicacion);
console.log("La división de los números es:", division);
console.log("Los números son iguales:", igual);

// Determinar el menor y mayor
if (A > B) {
    console.log("El número menor es:", B);
    console.log("El número mayor es:", A);
} else if (A < B) {
    console.log("El número menor es:", A);
    console.log("El número mayor es:", B);
} else {
    console.log("Ambos números son iguales.");
}
