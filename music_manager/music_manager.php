<?php
function debug(mixed $variable)
{
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
};


// Fonction pour afficher la liste des chansons
function displaySongs($songs)
{
    foreach ($songs as $song) {
        echo "<li>" . htmlspecialchars($song['title']) . " - " . htmlspecialchars($song['artist']) . " (" . htmlspecialchars($song['duration']) . " minutes)</li>";
    }
}

// Fonction pour filtrer les chansons par genre
function getSongsByGenre($songs, $genre)
{
    $filteredSongs = [];
    foreach ($songs as $song) {
        if ($song['genre'] === $genre) {
            $filteredSongs[] = $song;
        }
    }
    return $filteredSongs;
}



// Fonction pour calculer la durée totale des chansons
function getTotalDuration($songs)
{
    $totalDuration = 0;
    foreach ($songs as $song) {
        if (isset($song['duration'])) {
            $totalDuration += $song['duration'];
        }
    }
    return $totalDuration;
}

// Fonction pour obtenir une chanson par son ID
function getSongById($songs, $id)
{
    foreach ($songs as $song) {
        if ($song['id'] === $id) {
            return $song; // Retourne la chanson si l'ID correspond
        }
    }
    return null; // Retourne null si aucune chanson n'est trouvée avec cet ID
}
?>
?>