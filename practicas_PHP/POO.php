<?php
// 11. POO Básica
echo " 11. POO Básica <br>";

class Persona
{
    // Atributos
    private $nombre;
    private $edad;

    // Constructor
    public function __construct($nombre, $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    // Método
    public function saludar()
    {
        return "Hola, soy {$this->nombre}";
    }
}

// 12. Constantes de Clase y Autocarga
echo "\n--- 12. Constantes de Clase ---\n";

class Config
{
    const VERSION = "1.0";
    const APP_NAME = "Mi Aplicación";
}

// Autocarga (en un archivo real)
// spl_autoload_register(function ($clase) {
//     include $clase . '.php';
// });

// 13. Constructores y Destructores
echo "\n--- 13. Constructores y Destructores ---\n";

class Conexion
{
    public function __construct()
    {
        echo "Conexión iniciada\n";
    }

    public function __destruct()
    {
        echo "Conexión cerrada\n";
    }
}

// 14. Visibilidad
echo "\n--- 14. Visibilidad ---\n";

class Usuario
{
    private $password;    // Solo accesible dentro de la clase
    protected $email;     // Accesible en la clase y sus herederas
    public $nombre;       // Accesible desde cualquier lugar
}

// 15. Herencia, Abstracción e Interfaces
echo "\n--- 15. Herencia y Abstracción ---\n";

// Clase abstracta
abstract class Animal
{
    abstract public function hacerSonido();
}

// Interfaz
interface Nadador
{
    public function nadar();
}

// Implementación
class Perro extends Animal implements Nadador
{
    public function hacerSonido()
    {
        return "Guau!";
    }

    public function nadar()
    {
        return "El perro está nadando";
    }
}

// 16. Características PHP 8
echo "\n--- 16. Características PHP 8 ---\n";

// Constructor promotion
class Punto
{
    public function __construct(
        public float $x = 0.0,
        public float $y = 0.0,
    )
    {
    }
}

// Match expression
$status = 200;
$mensaje = match ($status) {
    200 => "OK",
    404 => "No encontrado",
    default => "Error desconocido",
};

// Nullsafe operator
//$usuario?->direccion?->ciudad;

// Named arguments
$punto = new Punto(y: 100, x: 200);