<?php
$host = "sql113.infinityfree.com";
$user = "if0_42018792";
$password = "KS250625";
$database = "if0_42018792_mindcare"; // 
$con = mysqli_connect($host, $user, $password, $database);

if (!$con) {
    die("Erro na conexão: " . mysqli_connect_error());
}

echo "Conexão realizada com sucesso!";
?>