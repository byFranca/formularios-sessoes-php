<?php
session_start();

$_SESSION['nome'] = $_POST['nome'];
$_SESSION['email'] = $_POST['email'];

header("Location: perfil.php");
?>