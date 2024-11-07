<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Application Musique</title>
</head>

<body>
    <h1>Liste des Chansons</h1>
    <ul>

        <?php
        // Supposons que $songs est défini et contient un tableau de chansons
        include './src/music_manager.php';
        include './src/data.php';

        // Affichage de toutes les chansons
        if (isset($songs)) {
            displaySongs($songs);
        } else {
            echo "<li>Aucune chanson disponible.</li>";
        }
        ?>
    </ul>

    <h2>Chansons de genre Rap</h2>
    <ul>
        <a href="?genre=rap">Rap</a> |
        <a href="?genre=pop">Pop</a> |
        <a href="?genre=rock">Rock</a> |
        <a href="?genre=Tous">Tous</a>
        <?php

        if (isset($_GET['genre']) && $_GET['genre'] != 'Tous') {
            $genre = $_GET['genre'];
            $filteredSongs = getSongsByGenre($songs, $genre);
        } else {
            $filteredSongs = $songs;
        }

        foreach ($filteredSongs as $song) {
            echo "<li>" . htmlspecialchars($song['title']) . " - " . htmlspecialchars($song['artist']) . " (" . htmlspecialchars($song['genre']) . ", " . htmlspecialchars($song['duration']) . " minutes)</li>";
        }
        ?>
    </ul>

    <h3>Durée Totale des Chansons :
        <?php
        // Calcul et affichage de la durée totale des chansons
        $totalDuration = getTotalDuration($songs);
        echo htmlspecialchars($totalDuration);
        ?> minutes
    </h3>

</body>

</html>