<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title> Spotify - Buscar</title>
    <link rel="stylesheet" href="styles/all.css" />
    <link rel="stylesheet" href="styles/style.css" />
</head>
<body>

<div class="container buscar-container">
    <aside class="sidebar buscar-sidebar">
        <h1>Spotify</h1>
        <!-- Sem links para index ou biblioteca -->
    </aside>

    <main class="main buscar-main">
        <h2 class="main-header">Buscar</h2>

        <form method="GET" action="buscar.php" class="search-form">
            <input 
                type="text" 
                name="q" 
                placeholder="Buscar músicas, artistas, álbuns..." 
                value="<?php echo isset($_GET['q']) ? htmlspecialchars($_GET['q']) : ''; ?>"
                autocomplete="off"
            />
            <button type="submit">🔍</button>
        </form>

        <?php
        // Exemplo de dados para busca simples — na prática, consultaria DB
        $musicas = [
            ['titulo' => 'Imagine', 'artista' => 'John Lennon'],
            ['titulo' => 'Billie Jean', 'artista' => 'Michael Jackson'],
            ['titulo' => 'Shape of You', 'artista' => 'Ed Sheeran'],
            ['titulo' => 'Blinding Lights', 'artista' => 'The Weeknd'],
            ['titulo' => 'Stay', 'artista' => 'The Kid LAROI & Justin Bieber'],
        ];

        if (isset($_GET['q']) && trim($_GET['q']) !== '') {
            $q = strtolower(trim($_GET['q']));
            echo "<h3>Resultados para '<em>" . htmlspecialchars($q) . "</em>'</h3>";
            echo "<ul class='search-results'>";
            $achou = false;
            foreach ($musicas as $musica) {
                if (strpos(strtolower($musica['titulo']), $q) !== false || strpos(strtolower($musica['artista']), $q) !== false) {
                    echo "<li><strong>" . htmlspecialchars($musica['titulo']) . "</strong> — " . htmlspecialchars($musica['artista']) . "</li>";
                    $achou = true;
                }
            }
            if (!$achou) {
                echo "<li>Nenhum resultado encontrado.</li>";
            }
            echo "</ul>";
        }
        ?>

    </main>
</div>

</body>
</html>
