let Nombre = 'Santiago';
let Edad = 23;
let Pais = 'Colombia';

if (Nombre === 'Santiago' && Edad === 23 && Pais === 'Colombia') {
    console.log(`Su nombre es ${Nombre}, tiene ${Edad} y es de ${Pais}`);
} else if (Nombre === 'Santiago' && Edad !== 23) {
    console.log('Su nombre es Santiago y no tiene 23 años');
} else if (Nombre !== 'Santiago' && Edad === 23) {
    console.log('Su nombre no es Santiago y tiene 23 años');
} else {
    console.log('No se llama Santiago ni tiene 23 años');
}
