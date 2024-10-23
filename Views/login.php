<?php
require_once '../services/Conexion.php';
require_once '../services/UsuarioDAO.php';
require_once '../handler/Auth.php';

use handler\Auth;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $auth = new Auth();
    if ($auth->login($_POST['email'], $_POST['password'])) {
        header('Location: lista_usuarios.php');
        exit();
    } else {
        $error = "Credenciales incorrectas";
    }
}

include '../views/login_form.php';