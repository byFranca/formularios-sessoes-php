<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Formulário - Grupo B4</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
        }
        form {
            background: #f4f4f4;
            padding: 20px;
            border-radius: 8px;
        }
        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
        }
        button {
            background: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Formulário HTML</h1>
    
    <form action="processa.php" method="post">
        Nome: <input type="text" name="nome"><br><br>
        E-mail: <input type="email" name="email"><br><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>