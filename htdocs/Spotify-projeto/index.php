<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPOTIFY-PROJETO</title>
    <link rel="stylesheet" href="styles/all.css">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>


<div class="container">
    <aside class="sidebar">
        <h1>Spotify</h1>
        <div class="nav-item active">Início</div>

        <a href="buscar.php">
        <div class="nav-item">Buscar</div>
</a>

        <a href="bibilioteca.php">
        <div class="nav-item">Sua Biblioteca</div>
        </a>
    </aside>

    <main class="main">
        <h2 class="main-header">Recomendados</h2>

        <div class="music-list">
            <?php
            $musicas = [
                [
                    "titulo" => "Ainda Bem",
                    "artista" => "Vanessa da Mata",
                    "arquivo" => "musicas/aindabem.mp3",
                    "thumb" => "images/aindabem.png"
                ],
                [
                    "titulo" => "Saudade De Quem Eu Sou",
                    "artista" => "Henrique & Juliano",
                    "arquivo" => "musicas/henrique.mp3",
                    "thumb" => "images/henrique.png"
                ],
                [
                    "titulo" => "Minha Vida",
                    "artista" => "Rita Lee",
                    "arquivo" => "musicas/minhavida.mp3",
                    "thumb" => "images/minhavida.png"
                ],
                [
                    "titulo" => "Perfume",
                    "artista" => "Belo",
                    "arquivo" => "musicas/belo.mp3",
                    "thumb" => "images/belo.png"
                ],
                [
                    "titulo" => "Pink Matter",
                    "artista" => "Frank Ocean",
                    "arquivo" => "musicas/pink.mp3",
                    "thumb" => "images/pink.png"
                ]
            ];

            foreach ($musicas as $index => $musica) {
                echo '<div class="music-card" data-src="'.$musica['arquivo'].'" data-thumb="'.$musica['thumb'].'" data-title="'.$musica['titulo'].'" data-artist="'.$musica['artista'].'">';
                echo '<img class="music-thumb" src="'.$musica['thumb'].'" alt="'.$musica['titulo'].'">';
                echo '<div class="music-info">';
                echo '<div class="music-title">' . $musica['titulo'] . '</div>';
                echo '<div class="music-artist">' . $musica['artista'] . '</div>';
                echo '</div></div>';
            }
            ?>
        </div>
    </main>
</div>

<div class="player-bar">
    <div class="player-info">
        <img src="images/belo.png" alt="" class="player-thumb" id="player-thumb" />
        <div class="player-details">
            <div class="player-title" id="player-title">Perfume </div>
            <div class="Belo" id="player-artist"></div>
        </div>
    </div>

    <div class="player-controls">
        <button class="btn" id="btn-play-pause" title="Play/Pause">▶️</button>
        <button class="btn" id="btn-stop" title="Parar">⏹️</button>
    </div>
</div>

<audio id="audio-player" src="" preload="auto"></audio>

<script src="script.js"></script>


<aside class="sidebar">
    <!-- seus links/menu aqui -->
    <?php include 'logo.php'; ?>
</aside>



</body>
</html>
