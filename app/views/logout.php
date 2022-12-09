<?php
require_once './app/controllers/ItemsControllers.php';
require_once './app/controllers/UsersControllers.php';
$noNavbar1 = "";
require_once './app/views/includes/header.php';

session_start(); // Star The Session

session_unset(); // Unset The Data

session_destroy(); // Destroy The Session

header('Location: login');

exit();
