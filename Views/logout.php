<?php
require_once '../handler/Auth.php';

use handler\Auth;

$auth = new Auth();
$auth->logout();
header('Location: login.php');
exit();