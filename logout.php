<?php
session_start();
session_destroy();

echo "<h2>Sessão encerrada!</h2>";
echo "<br><a href='index.php'>Voltar ao Formulário</a>";
?>