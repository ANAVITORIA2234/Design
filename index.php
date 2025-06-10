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
    <div>
    <div class="nav-item active">Início</div>

    <a href="buscar.php">
    <div class="nav-item">Buscar</div>
</a>

    <a href="bibilioteca.php">
    <div class="nav-item">Sua Biblioteca</div>
    </a>
</div>
</aside>

<main class="main">
    <h2 class="main-header">Recomendados</h2>

    <div class="music-list">
    <?php
// Array de músicas
$musicas = [
    [
        "titulo" => "Ainda Bem",
        "artista" => "Vanessa da Mata",
        "arquivo" => "musicas/aindabem.mp3",
        "thumb" => "images/aindabem.png",
    ],
    [
        "titulo" => "Saudade De Quem Eu Sou",
        "artista" => "Henrique & Juliano",
        "arquivo" => "musicas/henrique.mp3",
        "thumb" => "images/henrique.png",
    ],
    [
        "titulo" => "Minha Vida",
        "artista" => "Rita Lee",
        "arquivo" => "musicas/minhavida.mp3",
        "thumb" => "images/minhavida.png",
    ],
    [
        "titulo" => "Perfume",
        "artista" => "Belo",
        "arquivo" => "musicas/belo.mp3",
        "thumb" => "images/belo.png",
    ],
    [
        "titulo" => "Pink Matter",
        "artista" => "Frank Ocean",
        "arquivo" => "musicas/pink.mp3",
        "thumb" => "images/pink.png",
    ],
    [
        "titulo" => "Andressa",
        "artista" => "Delacruz",
        "arquivo" => "musicas/andressa.mp3",
        "thumb" => "images/andressa.png",
    ],
    [
        "titulo" => "Minha Essência",
        "artista" => "Thiago Brado",
        "arquivo" => "musicas/minha_essencia.mp3",
        "thumb" => "images/essencia.png",
    ],
    [
        "titulo" => "Poesia Acústica 7",
        "artista" => "Chris / DK / Ducon / Kevin O Chris / MC Hariel / Negra Li / Vitão",
        "arquivo" => "musicas/poesia_acustica7.mp3",
        "thumb" => "images/poesia.png",
    ],
    [
        "titulo" => "O Inesperado",
        "artista" => "Jorge & Mateus",
        "arquivo" => "musicas/o_inesperado.mp3",
        "thumb" => "images/inesperado.png",
    ],
    [
        "titulo" => "Salve",
        "artista" => "dy Rock / Mano Brown",
        "arquivo" => "musicas/salve.mp3",
        "thumb" => "images/salve.png",
    ],
    [
        "titulo" => "Se Ame Mais",
        "artista" => "Marília Mendonça",
        "arquivo" => "musicas/se_ame_mais.mp3",
        "thumb" => "images/ame.png",
    ],
    [
        "titulo" => "Todo Sol",
        "artista" => "Mateus & Kauan",
        "arquivo" => "musicas/todo_sol.mp3",
        "thumb" => "images/sol.png",
    ],
    [
        "titulo" => "Ô Queiroz",
        "artista" => "Grupo Revelação",
        "arquivo" => "musicas/o_queiroz.mp3",
        "thumb" => "images/queiroz.png",
    ],
    [
        "titulo" => "Um Mês e Pouco",
        "artista" => "Zé Neto & Cristiano",
        "arquivo" => "musicas/um_mes_e_pouco.mp3",
        "thumb" => "images/mes.png",
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






