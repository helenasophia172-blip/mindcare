<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: index.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MindCare - Dashboard</title>
    <!-- Chamada do CSS Externo -->
    <link rel="stylesheet" href="style.css?v=8.0">
    <link rel="stylesheet" href="site.css">
</head>
<body>

    <header class="topo-site">
        <div class="logo-wrapper">
            <img src="img/logo.jpg" alt="MindCare" style="height: 40px;">
            <span class="logo-texto">MINDCARE</span>
        </div>
        <nav class="menu-topo">
            <a href="site.php">Início</a>
            <a href="sair.php" style="color: #ff4d4d; font-weight: bold; text-decoration: none; margin-left: 15px;">Sair</a>
        </nav>
    </header>

    <div class="dashboard-container">
        
        <aside class="menu-viva animar-entrada">
            <h4>Olá, <?php echo explode(' ', $_SESSION['login'])[0]; ?>! 🌿</h4>
            <nav>
                <ul>
                    <li><a href="#">Conteúdo VIP</a></li>
                    <li><a href="#">Meu Diário</a></li>
                    <li><a href="#">Perfil</a></li>
                    <li><a href="#">Sobre Remédios</a></li>
                    <li><a href="#">Profissionais</a></li>
                    <li><a href="#">Diagnósticos</a></li>
                    <li><a href="#">Psicoeducação</a></li>
                </ul>
            </nav>
        </aside>

        <main class="chat-viva animar-entrada" style="animation-delay: 0.2s;">
            <div id="chat-mensagens">
                <div class="bot-msg">
                    <strong>MindCare:</strong> Olá! Que bom ter você aqui. Como você se sente agora?
                </div>
            </div>

            <div class="chat-input-area">
                <input type="text" id="user-input" placeholder="Diga o que está no seu coração..." autocomplete="off">
                <button class="btn-enviar" onclick="enviarMensagem()">Enviar</button>
            </div>
            <div class="chat-footer">Sua conversa é privada e protegida.</div>
        </main>

    </div>

    <footer style="text-align: center; padding: 20px; color: #666;">
        <p>&copy; 2026 MindCare - Etec Padre Carlos Leôncio.</p>
    </footer>

    <script src="script-chat.js"></script>
</body>
</html>