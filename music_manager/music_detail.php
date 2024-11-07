<?php
include './src/data.php';
include './src/music_manager.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Page details</h1>
    <ul>
        <?php
        echo 'Bonjour ' . htmlspecialchars($_POST["prenom"]).PHP_EOL . htmlspecialchars($_POST["nom"]) .  '!';
        ?>
    </ul>
</body>

</html>