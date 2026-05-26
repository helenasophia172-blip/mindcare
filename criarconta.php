<?php
// 1. CONEXÃO COM O BANCO DE DADOS
$conn = mysqli_connect("localhost", "root", "", "bdtcc");

if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}

// 2. LÓGICA DE CADASTRO (MANTIDA)
if(isset($_POST['submit'])){
    
    $nome_real = mysqli_real_escape_string($conn, $_POST['nome']); 
    $nick = mysqli_real_escape_string($conn, $_POST['apelido']);   
    $senha_pura = mysqli_real_escape_string($conn, $_POST['senha']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    // VERIFICAÇÃO: O Nick já existe?
    $sql_check = "SELECT apelido FROM usuarios WHERE apelido = '$nick'";
    $res_check = mysqli_query($conn, $sql_check);

    if(mysqli_num_rows($res_check) > 0){
        echo "<script>alert('Este nick já está em uso. Escolha outro!');</script>";
    } else {
        // INSERÇÃO: Salva no banco
        $sql = "INSERT INTO usuarios (nome, apelido, senha, email) VALUES ('$nome_real', '$nick', '$senha_pura', '$email')";
        
        if(mysqli_query($conn, $sql)){
            echo "<script>alert('Conta criada com sucesso!'); window.location='login.html';</script>";
        } else {
            echo "<script>alert('Erro ao cadastrar: " . mysqli_error($conn) . "');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Conta - MindCare</title>
    <link rel="stylesheet" href="login.css?v=3">
</head>
<body class="pagina-login">

    <header class="topo-site">
        <div class="logo-box">
            <img src="img/logo.jpg" alt="Logo MindCare">
            <span class="nome-marca">MINDCARE</span>
        </div>
        <nav class="navegacao">
            <a href="index.html">Início</a>
            <a href="sobre.html">Sobre</a>
            <a href="ajuda.html">Ajuda</a>
            <a href="login.html">Login</a>
        </nav>
    </header>

    <main class="container-central">
        <div class="caixa-login">
            <h2>Criar Conta</h2>
            
            <form method="POST">
                <input type="text" name="nome" placeholder="Nome Completo" required>
                <input type="text" name="apelido" placeholder="Usuário (Ex: @sophiasla)" required>
                <input type="password" name="senha" placeholder="Crie uma senha" required>
                <input type="email" name="email" placeholder="E-Mail" required>
                <button type="submit" name="submit">Cadastrar</button>
            </form>

            <p class="criar">Já tem conta? <a href="login.html">Entrar</a></p>
        </div>
    </main>

</body>
</html>