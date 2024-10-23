<?php
require_once '../services/Conexion.php';
require_once '../services/UsuarioDAO.php';
require_once '../handler/Auth.php';

use handler\Auth;
use services\Conexion;
use services\UsuarioDAO;

$auth = new Auth();
if (!$auth->isAuthenticated()) {
    header('Location: login.php');
    exit();
}

$conexion = new Conexion();
$usuarioDAO = new UsuarioDAO($conexion);
$usuarios = $usuarioDAO->readAll();

include '../views/lista_usuarios.php';