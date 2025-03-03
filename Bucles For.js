// Lista de nombres
let nombres = ['Santiago', 'Hans', 'Jhon', 'Juan Pablo \n\n'];

nombres.forEach(nombre => {
    console.log(nombre);
});

// Lista de diccionarios (objetos en JavaScript)
let Personas = [
    { nombre: 'Santiago', Edad: 28 },
    { nombre: 'Hans', Edad: 27 },
    { nombre: 'Jhon', Edad: 41 },
    { nombre: 'Juan Pablo', Edad: 23 }
];

// Imprimir nombre y edad de cada persona
Personas.forEach(persona => {
    console.log(persona.nombre, persona.Edad);
});
