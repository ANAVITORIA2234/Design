<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Mini Spotify - Sua Biblioteca</title>
    <link rel="stylesheet" href="styles/style.css" />
    <link rel="stylesheet" href="styles/all.css" />
</head>
<body>

<div class="container biblioteca-container">
    <aside class="sidebar biblioteca-sidebar">
        <h1>Spotify</h1>
        <!-- Sem links para index ou buscar -->
    </aside>

    <main class="main biblioteca-main">
        <h2 class="main-header">Sua Biblioteca</h2>

        <?php
        $playlists = [
            ['nome' => 'Top Brasil', 'img' => 'images/top.png'],
            ['nome' => 'Hits 2024', 'img' => 'images/melhores.png'],
            ['nome' => 'Rock Clássico', 'img' => 'images/rock.png'],
            ['nome' => 'Indie Vibes', 'img' => 'images/vibes.png'],
        ];

        $artistas = [
            ['nome' => 'Anitta', 'img' => 'artistas/anita.png'],
            ['nome' => 'Coldplay', 'img' => 'artistas/coldplay.png'],
            ['nome' => 'Adele', 'img' => 'artistas/adele.png'],
            ['nome' => 'The Weeknd', 'img' => 'artistas/the_weeknd.png'],
        ];

        $albuns = [
            ['nome' => 'Divide', 'img' => 'albuns/divide.png'],
            ['nome' => 'After Hours', 'img' => 'albuns/after.png'],
            ['nome' => '25', 'img' => 'albuns/25.png'],
            ['nome' => 'Tropicana', 'img' => 'albuns/tropicana.png'],
        ];

        function exibirSecao($titulo, $itens) {
            echo "<section class='section-library'>";
            echo "<h3>$titulo</h3>";
            echo "<div class='card-list'>";
            foreach ($itens as $item) {
                echo "<div class='card'>";
                echo "<img src='{$item['img']}' alt='{$item['nome']}' />";
                echo "<div class='card-name'>{$item['nome']}</div>";
                echo "</div>";
            }
            echo "</div>";
            echo "</section>";
        }

        exibirSecao("Playlists", $playlists);
        exibirSecao("Artistas", $artistas);
        exibirSecao("Álbuns", $albuns);
        ?>

    </main>
</div>

</body>
</html>
