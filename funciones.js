// Multiplicar elementos de dos listas (arrays)
let a = [1, 2, 3, 4, 5];
let b = [6, 7, 8, 9, 10];
let c = [];

for (let i = 0; i < a.length; i++) {
    c.push(a[i] * b[i]);
}
console.log(c);

// Funciones

// Definición y llamada de función
function mostrarTexto() {
    console.log('Hola');
}
mostrarTexto();

// Función que multiplica dos valores definidos dentro de ella
function multiplicar() {
    let a = 5;
    let b = 8;
    console.log(a * b);
}
multiplicar();

// Variables globales accesibles dentro de la función
let x = 5;
let y = 8;
function multiplicarGlobal() {
    console.log(x * y);
}
multiplicarGlobal();

// Función con `return`
function multiplicarYRetornar() {
    let a = 5;
    let b = 8;
    return a * b;
}
let resultado = multiplicarYRetornar();
console.log(resultado + 5);

// Función que retorna un valor booleano
function validarDato() {
    if (x === 5) {
        return true;
    } else {
        return false;
    }
}

let dato = validarDato();
console.log(dato);
