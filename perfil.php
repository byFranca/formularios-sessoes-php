<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header('Location: index.php');
    exit;
}

$user = $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil - Grupo B4</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            max-width: 500px; 
            margin: 50px auto; 
            padding: 20px; 
            background: #f9f9f9; 
        }
        .card { 
            background: white; 
            padding: 30px; 
            border-radius: 10px; 
            box-shadow: 0 0 10px rgba(0,0,0,0.1); 
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Perfil do Usuário</h1>
        <p><strong>Nome:</strong> <?= htmlspecialchars($user['nome']) ?></p>
        <p><strong>Email:</strong> <?= htmlspecialchars($user['email']) ?></p>
        
        <p>Esses dados estão armazenados na sessão.</p>
        <br>
        <a href="logout.php">Encerrar Sessão (Logout)</a>
    </div>
</body>
</html>