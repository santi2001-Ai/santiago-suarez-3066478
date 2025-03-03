// 1️ Contador con bucle while
let contador = 0;  // Inicializamos la variable contador en 0

while (contador < 30) {  // Mientras contador sea menor a 30, ejecutamos el bucle
    contador += 1;  // Aumentamos el valor de contador en 1 en cada iteración
    console.log('Iteración', contador);  // Mostramos en consola la iteración actual
}

// 2️ Solicitar un número mayor a 10 con while y if-else
while (true) {  // Bucle infinito hasta que el usuario ingrese un valor válido
    let a = parseInt(prompt('Introduzca un valor mayor a 10:'));  // Solicitamos un número al usuario
    
    if (isNaN(a)) {  // Verificamos si la entrada no es un número
        console.log('Por favor, ingrese un número válido.');
        continue;  // Si no es un número, se vuelve a pedir el input
    }

    if (a > 10) {  // Si el número ingresado es mayor a 10
        console.log('Es correcto');  // Mensaje de éxito
        break;  // Salimos del bucle porque la condición se ha cumplido
    } else {  
        console.log('Es incorrecto, pruebe de nuevo');  // Mensaje de error
        break;  // Finaliza el programa si el usuario ingresa un número menor o igual a 10
    }
} 