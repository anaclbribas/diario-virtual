<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leitura • Meu Diário Virtual</title>
    <!-- Fontes do Google -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..700;1,400..700&family=Quicksand:wght@300;400;500&display=swap" rel="stylesheet">
    <!-- FontAwesome para ícones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="imagens/favicon.png">
</head>
<body>

    <!-- MENU DE NAVEGAÇÃO SUPERIOR -->
    <header class="navbar">
        <div class="logo">meu diário 🤍</div>
        <nav>
            <ul class="nav-links">
                <li><a href="index.php">home</a></li>
                <li><a href="index.php#textos">textos</a></li>
                <li><a href="index.php#musicas">músicas</a></li>
                <li><a href="index.php#livros">livros</a></li>
                <li><a href="index.php#poemas">poemas</a></li>
                <li><a href="index.php#fotografias">fotografias</a></li>
            </ul>
        </nav>
    </header>

    <!-- CONTEÚDO PRINCIPAL DO TEXTO -->
    <main class="text-reading-container">
        
        <!-- Botão para voltar à Home -->
        <div class="back-navigation">
            <a href="index.php" class="back-btn"><i class="fas fa-arrow-left"></i> voltar ao início</a>
        </div>

        <article class="reading-card">
            <!-- Informações do Texto -->
            <div class="reading-header">
                <span class="reading-date">12 de outubro de 2026</span>
                <h1 class="reading-title">Título do Teu Texto Aqui ☁️</h1>
                <span class="reading-category">notas & devaneios</span>
            </div>

            <!-- Corpo do Texto -->
            <div class="reading-content">
                <p>Escreve aqui o primeiro parágrafo do teu texto. Podes partilhar um pensamento sobre o dia, uma memória bonita que queiras guardar ou um desabavo poético...</p>
                
                <p>Este espaço foi desenhado com fontes serifadas e margens suaves para que a leitura seja extremamente confortável e acolhedora, como se estivesses a ler um livro com cheiro a papel velho.</p>
                
                <p>Sempre que quiseres publicar um texto novo, podes editar este ficheiro ou depois podemos evoluir para carregar os textos dinamicamente. ✨</p>
            </div>
        </article>

    </main>

    <!-- RODAPÉ DO DIÁRIO -->
    <footer class="site-footer">
        <div class="footer-content">
            <p class="footer-text">feito com o coração e pensamentos acelerados!</p>
            <div class="footer-links">
                <a href="#top" class="footer-link">voltar ao topo ↑</a>
            </div>
            <p class="footer-copy">© 2026 • todos os devaneios reservados</p>
        </div>
    </footer>

</body>
</html>