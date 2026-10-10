<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas & Devaneios • Meu Diário Virtual</title>
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
                <li><a href="textos.php">textos</a></li>
                <li><a href="index.php#musicas">músicas</a></li>
                <li><a href="index.php#livros">livros</a></li>
                <li><a href="index.php#poemas">poemas</a></li>
                <li><a href="index.php#fotografias">fotografias</a></li>
            </ul>
        </nav>
    </header>

    <!-- CONTEÚDO PRINCIPAL: LISTA DE TEXTOS POR CATEGORIA -->
    <main class="library-container">

        <!-- Botão para voltar à Home -->
        <div class="back-navigation">
            <a href="index.php" class="back-btn"><i class="fas fa-arrow-left"></i> voltar ao início</a>
        </div>
        
        <div class="library-header">
            <h1 class="library-title">notas & devaneios ☁️</h1>
            <p class="library-subtitle">escolhe uma página para folhear e mergulhar nos pensamentos...</p>
        </div>

        <!-- CATEGORIA 1: MEMÓRIAS & AFETOS -->
        <section class="category-section">
            <h2 class="category-title">💌 memórias & afetos</h2>
            
            <div class="articles-grid">
                <!-- Artigo 1 -->
                <a href="textos/te-procuro.php" class="article-card">
                    <div class="article-img-wrapper">
                        <img src="imagens/te-procuro.jpg" alt="Capa do Texto" class="article-img">
                    </div>
                    <div class="article-info">
                        <span class="article-code">08/02/2026</span>
                        <span class="article-name">Te procuro</span>
                    </div>
                </a>

                <!-- Artigo 2 -->
                <a href="textos/ainda-espero-por-voce.php" class="article-card">
                    <div class="article-img-wrapper">
                        <img src="imagens/ainda-espero-por-voce.jpg" alt="Capa do Texto" class="article-img">
                    </div>
                    <div class="article-info">
                        <span class="article-code">13/02/2026</span>
                        <span class="article-name">Ainda espero por você</span>
                    </div>
                </a>

                <!-- Artigo 3 -->
                <a href="textos/quando-eramos-nos.php" class="article-card">
                    <div class="article-img-wrapper">
                        <img src="imagens/quando-eramos-nos.jpg" alt="Capa do Texto" class="article-img">
                    </div>
                    <div class="article-info">
                        <span class="article-code">13/02/2026</span>
                        <span class="article-name">Quando Éramos Nós</span>
                    </div>
                </a>
            </div>
        </section>

        <!-- CATEGORIA 2: MEMÓRIAS & AFETOS -->
        <section class="category-section">
            <h2 class="category-title">💌 memórias & afetos</h2>
            
            <div class="articles-grid">
                <!-- Artigo 3 -->
                <a href="texto.php" class="article-card">
                    <div class="article-img-wrapper">
                        <img src="imagens/board3.jpg" alt="Capa do Texto" class="article-img">
                    </div>
                    <div class="article-info">
                        <span class="article-code">GEED-4011</span>
                        <span class="article-name">tardes de outono e café morno</span>
                    </div>
                </a>

                <!-- Artigo 4 -->
                <a href="texto.php" class="article-card">
                    <div class="article-img-wrapper">
                        <img src="imagens/board4.jpg" alt="Capa do Texto" class="article-img">
                    </div>
                    <div class="article-info">
                        <span class="article-code">GEED-4012</span>
                        <span class="article-name">sobre guardar silêncios</span>
                    </div>
                </a>
            </div>
        </section>

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