// 1️ Clase Usuario
class Usuario {
    constructor(nombre, pin, saldo) {
        this.nombre = nombre;
        this.pin = pin;
        this.saldo = saldo;
    }
}

// 2️ Clase Banco
class Banco {
    constructor(usuarios = []) {
        this.usuarios = usuarios;
    }

    // Método para autenticar usuario
    autenticar(nombre, pin) {
        for (let usuario of this.usuarios) {
            if (usuario.nombre === nombre) {
                if (usuario.pin === pin) {
                    console.log('Estas Logeado');
                    return true;
                } else {
                    console.log('Pin o nombre incorrecto');
                    return false;
                }
            }
        }
        console.log('El usuario no existe');
        return false;
    }

    // Método para retirar dinero
    sacarDinero(nombre, monto) {
        for (let usuario of this.usuarios) {
            if (usuario.nombre === nombre) {
                if (usuario.saldo < monto) {
                    console.log('Saldo insuficiente');
                    return;
                } else {
                    usuario.saldo -= monto;
                    console.log(`El saldo disponible es: ${usuario.saldo}`);
                    return;
                }
            }
        }
    }
}

// 3️ Crear usuarios
let ana = new Usuario('Ana', 9872, 450);
let pablo = new Usuario('Pablo', 5555, 200);
let rodrigo = new Usuario('Rodrigo', 2222, 900);

// 4️ Crear banco con usuarios
let banco = new Banco([ana, pablo, rodrigo]);

// 5️ Simulación del cajero automático
while (true) {
    console.log('Bienvenido al Banco, por favor, identifíquese.');
    let nombre = prompt('Introduzca el nombre:');
    let pin = parseInt(prompt('Introduzca el pin:'));

    if (banco.autenticar(nombre, pin)) {
        while (true) {
            let opcion = prompt('Por favor, elija una opción:\n1. Sacar dinero\n2. Terminar sesión.');

            if (opcion === '1') {
                let monto = parseInt(prompt('Introduce cantidad a sacar:'));
                banco.sacarDinero(nombre, monto);
            } else if (opcion === '2') {
                console.log('Saliendo del sistema.');
                break;
            } else {
                console.log('Opción incorrecta. Por favor, introduzca otra opción.');
            }
        }
    } else {
        console.log('Usuario no autenticado. Por favor, introduzca nombre y pin correctos.');
    }
}
