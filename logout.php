<?php
// Inicia a sessão
session_start();

// Destroi todos os dados da sessão
session_destroy();

// Redireciona o usuário para a página de login
header("Location: index.php");
exit;
?>