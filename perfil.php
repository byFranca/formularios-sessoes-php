<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
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
            padding: 20px;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Perfil do Usuário</h1>
        
        <p><strong>Nome:</strong> <?php echo $_SESSION['nome']; ?></p>
        <p><strong>E-mail:</strong> <?php echo $_SESSION['email']; ?></p>
        
        <br>
        <a href="logout.php">Encerrar Sessão</a>
    </div>
</body>
</html>