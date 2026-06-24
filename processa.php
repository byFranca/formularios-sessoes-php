<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['usuario'] = [
        'nome'  => $_POST['nome'] ?? '',
        'email' => $_POST['email'] ?? ''
    ];
    
    header('Location: perfil.php');
    exit;
} else {
    header('Location: index.php');
}
?>