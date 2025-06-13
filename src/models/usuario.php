<?php
namespace App\Models;

class Usuario {
    public $id;
    public $nombre;
    public $email;
    public $password;

    public function __construct($data = []) {
        $this->id = $data['id'] ?? null;
        $this->nombre = $data['nombre'] ?? '';
        $this->email = $data['email'] ?? '';
        $this->password = $data['password'] ?? '';
    }

    // Método para validar usuario en la BD con ejemplo simulado
    public static function validarUsuario($email, $password) {
        // Simulación de usuario prueba
        $usuarioEjemplo = new Usuario([
            'id' => 1,
            'nombre' => 'Admin',
            'email' => 'admin@ecoviviendas.com',
            'password' => password_hash('admin123', PASSWORD_DEFAULT)
        ]);

        // Validar email y password
        if ($email === $usuarioEjemplo->email && password_verify($password, $usuarioEjemplo->password)) {
            return $usuarioEjemplo;
        }

        return false;
    }
}