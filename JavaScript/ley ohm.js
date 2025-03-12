// Solicitar datos al usuario
let voltaje = parseFloat(prompt("Ingrese el valor del voltaje del circuito:"));
let resistencia = parseFloat(prompt("Ingrese el valor de la resistencia del circuito:"));

// Calcular la intensidad (amperaje)
let intensidad = voltaje / resistencia;

// Mostrar el resultado en la consola
console.log(`Al conectar un resistor de R ${resistencia} ohm a una fuente de V ${voltaje} voltios, circulará una corriente de ${intensidad.toFixed(2)} amperios.`);
