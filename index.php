<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Diário Virtual</title>
    <!-- Fontes do Google -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..700;1,400..700&family=Quicksand:wght@300;400;500&display=swap" rel="stylesheet">
    <!-- FontAwesome para os ícones das redes sociais -->
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
                <li><a href="lista-textos.php">textos</a></li>
                <li><a href="#musicas">músicas</a></li>
                <li><a href="#livros">livros</a></li>
                <li><a href="#poemas">poemas</a></li>
                <li><a href="#fotografias">fotografias</a></li>
            </ul>
        </nav>
    </header>

    <!-- SECÇÃO DO PERFIL -->
    <main class="profile-container">
        
        <!-- Capa / Banner do Perfil -->
        <div class="profile-banner">
            <div class="banner-overlay"></div>
        </div>

        <div class="profile-content">
            <!-- Foto de Perfil Redonda -->
            <div class="profile-avatar-wrapper">
                <img src="imagens/foto_perfil.jpg" alt="Foto de Perfil" class="profile-avatar">
            </div>

            <!-- Informações do Perfil -->
            <div class="profile-info">
                <h1 class="profile-name">aninha 🌸</h1>
                <p class="profile-bio">um cantinho aconchegante na internet para guardar memórias, pensamentos, poesias e pedacinhos de mim. ✨</p>


                <!-- Bloco de Estatísticas -->
                <div class="profile-stats">
                    <span>💌 12 posts</span>
                    <span>🎧 tocando agora</span>
                    <span>🕊️ em paz</span>
                </div>

                <!-- RETÂNGULO: Redes Sociais -->
                <div class="profile-socials">
                    <a href="https://www.instagram.com/anaribas.s/" target="_blank" class="social-icon" title="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://x.com/ninhaclb" target="_blank" class="social-icon" title="Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://www.tiktok.com/@ninhab.s?lang=pt-BR" target="_blank" class="social-icon" title="TikTok">
                        <i class="fab fa-tiktok"></i>
                    </a>
                    <a href="https://br.pinterest.com/anaclbribass/" target="_blank" class="social-icon" title="Pinterest">
                        <i class="fab fa-pinterest-p"></i>
                    </a>
                </div>

                <br>

                <!-- ESPAÇO PARA CITAÇÃO DE LIVRO -->
                <div class="book-quote">
                    <i class="fas fa-quote-left quote-icon"></i>
                    <p class="quote-text">"O senhor tem que aprender a ser mais generoso. O amor frustrado não é desculpa para o egoísmo."</p>
                    <span class="quote-author">— O Fazedor de Velhos</span>
                </div>

            </div>
        </div>

    </main>

    <!-- CORPO DO SITE: Bloco Estilo Revista/Editorial (Inspirado na referência) -->
    <section class="editorial-section">
        <div class="editorial-frame">
            <!-- Podes colocar aqui a imagem que quiseres, ex: flores ou uma foto estética -->
            <img src="imagens/banner2.jpg" alt="Destaque do Diário" class="editorial-image">
        </div>
    </section>

    <!-- SECÇÃO DE BOARDS / COLEÇÕES -->
    <section class="boards-section">
        <div class="boards-header">
            <h3 class="boards-title">notas & devaneios ☁️</h3>
            <a href="lista-textos.php" class="boards-subtitle">explorar coleções →</a>
        </div>

        <div class="boards-grid">
            <!-- Card 1 -->
            <a href="textos/te-procuro.php" class="board-card">
                <img src="imagens/te-procuro.jpg" alt="Te Procuro" class="board-img">
                <div class="board-info">
                    <span class="board-name">Te Procuro</span>
                </div>
            </a>

            <!-- Card 2 -->
            <a href="textos/ainda-espero-por-voce.php" class="board-card">
                <img src="imagens/ainda-espero-por-voce.jpg" alt="Ainda Espero Por Você" class="board-img">
                <div class="board-info">
                    <span class="board-name">Ainda Espero Por Você</span>
                </div>
            </a>

            <!-- Card 3 -->
            <a href="textos/quando-eramos-nos.php" class="board-card">
                <img src="imagens/quando-eramos-nos.jpg" alt="Quando Éramos Nós" class="board-img">
                <div class="board-info">
                    <span class="board-name">Quando Éramos Nós</span>
                </div>
            </a>

            <!-- Card 4 -->
            <a href="#" class="board-card">
                <img src="imagens/board4.jpg" alt="Estudos" class="board-img">
                <div class="board-info">
                    <span class="board-name">estudos</span>
                </div>
            </a>

            <!-- Card 5 -->
            <a href="#" class="board-card">
                <img src="imagens/board5.jpg" alt="Moda e Estilo" class="board-img">
                <div class="board-info">
                    <span class="board-name">moda & estilo</span>
                </div>
            </a>

            <!-- Card 6 -->
            <a href="#" class="board-card">
                <img src="imagens/board6.jpg" alt="Aleatório" class="board-img">
                <div class="board-info">
                    <span class="board-name">aleatório 🐾</span>
                </div>
            </a>

            <!-- Card 7 -->
            <a href="#" class="board-card">
                <img src="imagens/board7.jpg" alt="Inspiração" class="board-img">
                <div class="board-info">
                    <span class="board-name">inspiração</span>
                </div>
            </a>
        </div>
    </section>

    <!-- SECÇÃO DA TRILHA SONORA -->
    <section class="soundtrack-section">
        <div class="soundtrack-header">
            <h3 class="soundtrack-title">trilha sonora 🎧</h3>
            <span class="soundtrack-subtitle">breve eu...</span>
        </div>

        <div class="soundtrack-grid">
            <!-- Música 1 -->
            <a href="https://open.spotify.com/intl-pt/track/2Yk0HvfTaijA47aM0Fj88u?si=6cb30f93993d4f24" target="_blank" class="music-card">
                <img src="imagens/musica1.jpg" alt="Capa da Música" class="music-img">
                <div class="music-info">
                    <span class="music-name">Metamorfose Ambulante</span>
                    <span class="music-artist">Raul Seixas</span>
                </div>
            </a>

            <!-- Música 2 -->
            <a href="https://open.spotify.com/intl-pt/track/2Ktn7Hg3jocizpfzYJKLty?si=092fb0d1934b453b" target="_blank" class="music-card">
                <img src="imagens/musica2.jpg" alt="Capa da Música" class="music-img">
                <div class="music-info">
                    <span class="music-name">Malandragem</span>
                    <span class="music-artist">Cássia Eller</span>
                </div>
            </a>

            <!-- Música 3 -->
            <a href="https://open.spotify.com/intl-pt/track/1qD6F4egXG4T8niy2nBi8U?si=c1b4d153f54349c6" target="_blank" class="music-card">
                <img src="imagens/musica3.jpg" alt="Capa da Música" class="music-img">
                <div class="music-info">
                    <span class="music-name">Maluco Beleza</span>
                    <span class="music-artist">Raul Seixas</span>
                </div>
            </a>
        </div>
    </section>

    <!-- SECÇÃO DE POEMAS COM CARROSSEL -->
    <section class="poems-section" id="poemas">
        <div class="poems-header">
            <h3 class="poems-title">poemas à mesa 📖</h3>
            <div class="poem-nav-controls">
                <button class="poem-btn" onclick="prevPoem()">‹</button>
                <span class="poem-counter" id="poemCounter">1 / 2</span>
                <button class="poem-btn" onclick="nextPoem()">›</button>
            </div>
        </div>

        <div class="poems-carousel-container">
            <!-- Poema 1 -->
            <article class="poem-card active-poem">
                <h4 class="poem-name">Traduzir-se</h4>
                <span class="poem-author">Ferreira Gullar</span>
                <div class="poem-text-grid">
                    <div class="poem-column">
                        <p>Uma parte de mim<br>
                        é todo mundo:<br>
                        outra parte é ninguém:<br>
                        fundo sem fundo.<br><br>

                        Uma parte de mim<br>
                        é multidão:<br>
                        outra parte estranheza<br>
                        e solidão.<br><br>

                        Uma parte de mim<br>
                        pesa, pondera:<br>
                        outra parte delira.<br><br>

                        Uma parte de mim<br>
                        almoça e janta:<br>
                        outra parte<br>
                        se espanta.<br>
                    </div>
                    <div class="poem-column">
                        <p>Uma parte de mim<br>
                        é permanente:<br>
                        outra parte<br>
                        se sabe de repente.<br><br>

                        Uma parte de mim<br>
                        é só vertigem:<br>
                        outra parte,<br>
                        linguagem.<br><br>

                        Traduzir uma parte<br>
                        na outra parte<br>
                        – que é uma questão<br>
                        de vida ou morte –<br>
                        será arte?</p>
                    </div>
                </div>
            </article>

            <!-- Poema 2 -->
            <article class="poem-card">
                <h4 class="poem-name">Estou cansado, é claro</h4>
                <span class="poem-author">Álvaro de Campos</span>
                <div class="poem-text-grid">
                    <div class="poem-column">
                        <p>Estou cansado, é claro,<br>
                        Estou cansado, é claro,<br>
                        Porque, a certa altura, a gente tem que estar cansado.<br>
                        De que estou cansado, não sei:<br>
                        De nada me serviria sabê-lo,<br>
                        Pois o cansaço fica na mesma.<br>
                        A ferida dói como dói<br>
                        E não em função da causa que a produziu.<br>
                        Sim, estou cansado,<br>
                        E um pouco sorridente<br>
                        De o cansaço ser só isto —</p>
                    </div>
                    <div class="poem-column">
                        <p>Uma vontade de sono no corpo,<br>
                        Um desejo de não pensar na alma,<br>
                        E por cima de tudo uma transparência lúcida<br>
                        Do entendimento retrospectivo...<br><br>
                        E a luxúria única de não ter já esperanças?<br>
                        Sou inteligente: eis tudo.<br>
                        Tenho visto muito e entendido muito o que tenho visto,<br>
                        E há um certo prazer até no cansaço que isto me dá,<br>
                        Que afinal a cabeça sempre serve para qualquer coisa.</p>
                    </div>
                </div>
            </article>
        </div>
    </section>

    <!-- SCRIPT PARA TROCAR OS POEMAS -->
    <script>
        let currentPoemIndex = 0;
        const poems = document.querySelectorAll('.poem-card');
        const counter = document.getElementById('poemCounter');

        function showPoem(index) {
            poems.forEach((poem, i) => {
                poem.classList.remove('active-poem');
                if (i === index) {
                    poem.classList.add('active-poem');
                }
            });
            counter.innerText = `${index + 1} / ${poems.length}`;
        }

        function nextPoem() {
            currentPoemIndex = (currentPoemIndex + 1) % poems.length;
            showPoem(currentPoemIndex);
        }

        function prevPoem() {
            currentPoemIndex = (currentPoemIndex - 1 + poems.length) % poems.length;
            showPoem(currentPoemIndex);
        }
    </script>

    <!-- CORPO DO SITE: Bloco Estilo Revista/Editorial (Inspirado na referência) -->
    <section class="editorial-section">
        <div class="editorial-frame">
            <!-- Podes colocar aqui a imagem que quiseres, ex: flores ou uma foto estética -->
            <img src="imagens/banner3.jpg" alt="Destaque do Diário" class="editorial-image">
        </div>
    </section>

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