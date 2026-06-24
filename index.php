<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            padding: 10px; 
            margin: 8px 0; 
            width: 100%; 
            box-sizing: border-box; 
        }
        button { 
            background: #4CAF50; 
            color: white; 
            padding: 12px 20px; 
            border: none; 
            border-radius: 4px; 
            cursor: pointer; 
            font-size: 16px; 
        }
    </style>
</head>
<body>
    <h1>Formulário HTML + Sessões</h1>
    <p>Preencha seus dados:</p>
    
    <form action="processa.php" method="post">
        Nome: <input type="text" name="nome" required><br><br>
        E-mail: <input type="email" name="email" required><br><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>