let Figura = prompt('Seleccione la figura para calcular su área: \n\n 1 para rombo\n\n 2 para rectángulo \n\n 3 para cuadrado \n\n 4 para trapecio \n\n: ');
const Pi = 3.1416;
const constante = 2;
let Area;

switch (Figura) {
    case '1':
        let Dmayor = parseFloat(prompt('Ingrese el valor de la diagonal mayor: '));
        let Dmenor = parseFloat(prompt('Ingrese el valor de la diagonal menor: '));
        Area = (Dmayor * Dmenor) / constante; // Corrección en la fórmula
        console.log('El área del rombo es: ', Area);
        break;

    case '2':
        let Largo = parseFloat(prompt('Ingrese el valor del largo del rectángulo: '));
        let Ancho = parseFloat(prompt('Ingrese el valor del ancho del rectángulo: '));
        Area = Largo * Ancho;
        console.log('El área del rectángulo es: ', Area);
        break;

    case '3':
        let Lado = parseFloat(prompt('Ingrese el valor del lado del cuadrado: '));
        Area = Lado * Lado;
        console.log('El área del cuadrado es: ', Area);
        break;

    case '4':
        let Bmayor = parseFloat(prompt('Ingrese el valor de la base mayor: '));
        let Bmenor = parseFloat(prompt('Ingrese el valor de la base menor: '));
        let H = parseFloat(prompt('Ingrese la altura del trapecio: '));
        Area = ((Bmayor + Bmenor) * H) / 2;
        console.log('El área del trapecio es: ', Area);
        break;

    default:
        console.log('Opción no válida');
}
