<?php
$conn = mysqli_connect("localhost", "root", "", "bdtcc");

$mostrar_formulario_nova_senha = false;
$nick_confirmado = "";

if (isset($_POST['verificar_nick'])) {
    $nick = mysqli_real_escape_string($conn, $_POST['apelido']);
    $sql = "SELECT * FROM usuarios WHERE apelido = '$nick'";
    $res = mysqli_query($conn, $sql);

    if (mysqli_num_rows($res) > 0) {
        $mostrar_formulario_nova_senha = true;
        $nick_confirmado = $nick;
    } else {
        echo "<script>alert('Usuário não encontrado!');</script>";
    }
}

if (isset($_POST['alterar_senha'])) {
    $nick = $_POST['nick_final'];
    $nova_senha = ($_POST['nova_senha']);
    
    $sql_update = "UPDATE usuarios SET senha = '$nova_senha' WHERE apelido = '$nick'";
    if (mysqli_query($conn, $sql_update)) {
        echo "<script>alert('Senha alterada com sucesso!'); window.location='login.html';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Recuperar Senha - MindCare</title>
    <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="login.css?v=3">
</head>
<body>

<header>
    <div class="logo"><img src="img/logo.jpg" alt="Logo MindCare" style="height: 50px;"></div>
    <nav>
        <ul>
            <li><a href="index.html">Início</a></li>
            <li><a href="login.html">Login</a></li>
        </ul>
    </nav>
</header>

<section class="login-container">
    <div class="login-box">
        <h2>Recuperar Senha</h2>

        <?php if (!$mostrar_formulario_nova_senha): ?>
            <p style="margin-bottom: 15px; font-size: 14px; color: #666;">Digite seu @nick para validar sua conta.</p>
            <form method="POST">
                <input type="text" name="apelido" placeholder="Seu @nick" required>
                <button type="submit" name="verificar_nick">Verificar Conta</button>
            </form>
        <?php else: ?>
            <p style="margin-bottom: 15px; font-size: 14px; color: #28a745; font-weight: bold;">Usuário validado!</p>
            <form method="POST">
                <input type="hidden" name="nick_final" value="<?php echo $nick_confirmado; ?>">
                <input type="password" name="nova_senha" placeholder="Digite a nova senha" required>
                <button type="submit" name="alterar_senha">Redefinir Senha</button>
            </form>
        <?php endif; ?>

        <div style="margin-top: 20px;">
            <a href="login.html" style="color: #7a4ba0; text-decoration: none; font-size: 13px;">Voltar ao Login</a>
        </div>
    </div>
</section>

</body>
</html>