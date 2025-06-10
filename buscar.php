<!DOCTYPE html>
<html lang="pt-br">
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
// Dados das músicas
$musicas = [
['titulo' => 'Ainda Bem', 'artista' => 'Vanessa Da Mata'],
['titulo' => 'Saudade De Quem Eu Sou', 'artista' => 'Henrique & Juliano'],
['titulo' => 'Minha Vida', 'artista' => 'Rita Lee'],
['titulo' => 'Perfume', 'artista' => 'Belo'],
['titulo' => 'Pink Matter', 'artista' => 'Frank Ocean'],
['titulo' => 'Andressa', 'artista' => 'Delacruz'],
['titulo' => 'Minha Essência', 'artista' => 'Thiago Brado'],
['titulo' => 'Poesia Acústica 7', 'artista' => 'Chris / DK / Ducon / Kevin O Chris / MC Hariel / Negra Li / Vitão'],
['titulo' => 'O Inesperado', 'artista' => 'Jorge & Mateus'],
['titulo' => 'Salve', 'artista' => 'Frank Ocean'],
['titulo' => 'Se Ame Mais', 'artista' => 'Marília Mendonça'],
['titulo' => 'Todo Sol', 'artista' => 'Mateus & Kauan'],
['titulo' => 'Um Mês e Pouco', 'artista' => 'Zé Neto & Cristiano'],
['titulo' => 'Ô queiroz', 'artista' => 'Grupo Revelação'],
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