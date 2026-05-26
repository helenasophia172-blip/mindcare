<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MindCare - Saúde Mental</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login.css">
<body>
    <div class="menu-acessibilidade">
        <button onclick="alterarFonte(1)" title="Aumentar Fonte">A+</button>
        <button onclick="alterarFonte(-1)" title="Diminuir Fonte">A-</button>
        <button onclick="toggleContraste()" title="Alto Contraste">◐</button>
    </div>

    <header class="topo-site fade-in">
        <div class="logo-wrapper">
            <img src="img/logo.jpg" alt="MindCare">
            <span class="logo-texto">MINDCARE</span>
        </div>
        <nav class="menu-topo">
            <a href="index.html">Início</a>
            <a href="sobre.html">Sobre Nós</a>
            <a href="apoio.html">Ajuda</a>
            <a href="login.html" class="login-destaque">Login</a>
        </nav>
    </header>

    <section class="banner-principal fade-in">
        <div class="banner-conteudo">
            <h1>Bem-vindo ao MindCare</h1>
            <p>Sua jornada para o bem-estar começa aqui.</p>
        </div>
    </section>

    <nav class="categorias-barra fade-in">
        <a href="saudemental.html">Saúde Mental</a>
        <a href="artigos.html">Artigos</a>
        <a href="dicas.html">Dicas</a>
        <a href="#">Bem-estar</a>
        <a href="apoio.html">Apoio</a>
    </nav>

    <main class="container-conteudo">
        <section class="grade-artigos">
            <div class="card-item fade-in-delay">
                <img src="img/cardansiedade.png" alt="Ansiedade">
                <div class="card-info">
                    <a href="homecardansiedade.html">Ansiedade: O Domínio do Agora</a>
                </div>
            </div>
            <div class="card-item fade-in-delay">
                <img src="img/cardsono.jpg" alt="Sono">
                <div class="card-info">
                    <p>A importância do sono para a saúde mental</p>
                </div>
            </div>
            <div class="card-item fade-in-delay">
                <img src="img/meditacao.jpg" alt="Meditação">
                <div class="card-info">
                    <p>Práticas de meditação para iniciantes</p>
                </div>
            </div>
         </div>
        </section>

        <section class="painel-destaque fade-in">
            <div class="conteudo-destaque">
                <h2>AQUI VOCÊ ESTÁ ACOLHIDO!</h2>
                <div class="linha-separadora"></div>
                <p>Na MINDCARE, você encontra o suporte necessário para cuidar de você.</p>
                <a href="apoio.html" class="btn-suporte">Quero Suporte</a>
            </div>
        </section>
    </main>

    <footer class="rodape-final">
        <p>&copy; 2026 MindCare - Etec Padre Carlos Leôncio da Silva</p>
    </footer>

    <a href="javascript:void(0)" class="botao-chatbot" title="Falar com Chatbot" onclick="verificarAcessoChat()">
    <span>💬</span>
</a>

<script>
    function verificarAcessoChat() {
        // Aqui você verifica sua lógica de login
        // Exemplo: checar se existe um token ou flag no localStorage
        const usuarioLogado = localStorage.getItem("logado"); 

        if (usuarioLogado === "true") {
            window.location.href = "bot.php";
        } else {
            alert("Você precisa estar logado para acessar o Chatbot.");
            window.location.href = "login.html";
        }
    }
    
    // Suas outras funções (alterarFonte, etc) continuam aqui...
</script>

    <script>
        let tamanhoFonte = 100;

        function alterarFonte(delta) {
            tamanhoFonte += (delta * 10);
            if (tamanhoFonte > 150) tamanhoFonte = 150;
            if (tamanhoFonte < 80) tamanhoFonte = 80;
            document.body.style.fontSize = tamanhoFonte + "%";
        }

        function toggleContraste() {
            document.body.classList.toggle("alto-contraste");
        }
    </script>

</body>
</html>