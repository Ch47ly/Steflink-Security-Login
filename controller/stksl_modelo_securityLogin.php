<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
include '../model/class_security_login.php';
session_start();
$usuario = new SecurityLogin($mail=$_REQUEST['mail']);
$usuario->Login();
?>
