<?php
class Usuario {
    public $nombre;
    public $pin;
    public $saldo;

    public function __construct($nombre, $pin, $saldo) {
        $this->nombre = $nombre;
        $this->pin = $pin;
        $this->saldo = $saldo;
    }
}

class Banco {
    public $usuarios;

    public function __construct($usuarios = []) {
        $this->usuarios = $usuarios;
    }

    public function autenticar($nombre, $pin) {
        foreach ($this->usuarios as $usuario) {
            if ($usuario->nombre == $nombre) {
                if ($usuario->pin == $pin) {
                    echo "Estas Logeado\n";
                    return true;
                } else {
                    echo "Pin o nombre incorrecto\n";
                    return false;
                }
            }
        }
        echo "El usuario no existe\n";
        return false;
    }

    public function sacar_dinero($nombre, $saldo) {
        foreach ($this->usuarios as $usuario) {
            if ($usuario->nombre == $nombre) {
                if ($usuario->saldo < $saldo) {
                    echo "Saldo insuficiente\n";
                    break;
                } elseif ($usuario->saldo >= $saldo) {
                    $usuario->saldo -= $saldo;
                    echo "El saldo disponible es " . $usuario->saldo . "\n";
                }
            }
        }
    }
}

// Crear usuarios
$ana = new Usuario('Ana', 9872, 450);
$pablo = new Usuario('Pablo', 5555, 200);
$rodrigo = new Usuario('Rodrigo', 2222, 900);

// Crear banco con usuarios
$banco = new Banco([$ana, $pablo, $rodrigo]);

// Menú principal
while (true) {
    echo "Bienvenido al Banco, por favor, identifiquese.\n";
    echo "Introduzca el nombre.\n";
    $nombre = trim(fgets(STDIN));
    echo "Introduzca el pin\n";
    $pin = intval(trim(fgets(STDIN)));

    if ($banco->autenticar($nombre, $pin)) {
        while (true) {
            echo "Por favor, elija una de estas opciones:\n 1. Sacar dinero\n 2. Terminar sesion.\n";
            $opcion = trim(fgets(STDIN));

            if ($opcion == '1') {
                echo "Introduce cantidad a sacar.\n";
                $saldo = intval(trim(fgets(STDIN)));
                $banco->sacar_dinero($nombre, $saldo);
            
            } elseif ($opcion == '2') {
                echo "Saliendo del sistema.\n";
                break;
            } else {
                echo "Opcion incorrecta. Por favor, introduzca otra opcion.\n";
            }
        }
    } else {
        echo "Usuario no autenticado. Por favor, Introduzca nombre y pin correctos.\n";
    }
}
?>