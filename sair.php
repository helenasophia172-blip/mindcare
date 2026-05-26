<?php
session_start();

// Limpa a variável de login que criamos no ope.php
unset($_SESSION['login']);

// Destrói a sessão completamente para garantir
session_destroy();

// Redireciona para a página inicial ou de login
header('location:index.html');
exit();
?>