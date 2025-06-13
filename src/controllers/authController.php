<?php
namespace App\Controllers;

use App\Models\Usuario;

class AuthController {
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';

            $usuario = Usuario::validarUsuario($email, $password);

            if ($usuario) {
                session_start();
                $_SESSION['usuario'] = $usuario;
                header('Location: /admin/dashboard.php');
                exit;
            } else {
                $error = 'Email o contraseña incorrectos';
            }
        }
        require_once __DIR__ . '/../views/login.php';
    }

    public function logout() {
        session_start();
        session_destroy();
        header('Location: /login.php');
        exit;
    }
}