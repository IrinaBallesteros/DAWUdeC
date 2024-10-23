<?php
namespace handler;

use services\UsuarioDAO;
use services\Conexion;

class Auth {
    private $usuarioDAO;

    public function __construct() {
        $conexion = new Conexion();
        $this->usuarioDAO = new UsuarioDAO($conexion);
    }

    public function login($email, $password) {
        $usuario = $this->usuarioDAO->findByEmail($email);
        if ($usuario && password_verify($password, $usuario['password'])) {
            session_start();
            $_SESSION['usuario'] = $usuario;
            return true;
        }
        return false;
    }

    public function logout() {
        session_start();
        session_unset();
        session_destroy();
    }

    public function isAuthenticated() {
        session_start();
        return isset($_SESSION['usuario']);
    }
}