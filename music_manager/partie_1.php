<?php
$user = [
    ["nom" => "John", "prenom" => "Doe"],
    ["nom" => "Jane", "prenom" => "Does"]
];
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
</body>
<h2>Formulaire</h2>
<form action="./pages/dashboard.php" method="post">
    <label for="nom">Nom:</label>
    <input type="text" id="nom" name="nom" required>

    <label for="prenom">Prénom:</label>
    <input type="text" id="prenom" name="prenom" required>

    <button type="submit">Envoyer</button>
</form>
<a href="./pages/dashboard.php">Vers ma page dashboard</a>
<ul>
    <?php
    for ($i = 0; $i < count($user); $i++) {
        echo "<li>Nom : " . $user[$i]["nom"] . "<br>";
        echo "Prénom : " . $user[$i]["prenom"] . "</li>";
    }
    ?>
</ul>

</html>