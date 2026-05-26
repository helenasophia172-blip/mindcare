<?php
session_start();
// Conexão direta para não ter erro de arquivo faltando
include "dbconexao.php";

if (!$con) {
    die("Falha na conexão: " . mysqli_connect_error());
}

// Recebe os dados do formulário (names: login e senha)
$login = mysqli_real_escape_string($con, $_POST['login']);
$senha = mysqli_real_escape_string($con, $_POST['senha']);

// Busca no banco comparando TEXTO PURO
$sql = "SELECT * FROM usuarios WHERE apelido = '$login' AND senha = '$senha'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // Se encontrou, inicia a sessão
    $_SESSION['login'] = $login;
    header("location: site.php");
} else {
    // Se não encontrou, volta para o login com alerta
    echo "<script>alert('Usuário ou Senha incorretos!'); window.location='login.html';</script>";
}

mysqli_close($con);
?>