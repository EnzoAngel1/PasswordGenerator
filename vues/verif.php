<?php
// Charge le fichier autoload de Composer pour inclure automatiquement les classes nécessaires
require_once __DIR__ . '/../vendor/autoload.php';

// Utilise l'espace de nommage pour accéder à la classe PasswordGenerator
use Enzo\Dev\PasswordGenerator;

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Configuration de l'encodage et de la vue pour le HTML -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vérification de mots de passe</title>
</head>

<body>
    <!-- Lien pour retourner à la page de génération de mot de passe -->
    <a href="../index.php">Générateur</a>

    <h1>Vérification du mot de passe :</h1>

    <!-- Formulaire pour vérifier si un mot de passe est "fort" (strong) -->
    <form action="../vues/verif.php" method="post">
        <label for="mdp">Vérifier si le mot de passe est fort :</label>
        <!-- Champ texte pour entrer le mot de passe à vérifier -->
        <input type="text" id="mdp" name="mdp" required>
        <!-- Bouton de soumission du formulaire pour lancer la vérification -->
        <button name="verifie" type="submit">Vérifier</button>
    </form>

    <?php
    // Vérifie si le bouton de vérification a été cliqué
    if (isset($_POST['mdp'])) {
        // Récupère le mot de passe saisi dans le formulaire
        $Password = $_POST['mdp'];

        // Utilise la méthode isStrongPassword pour vérifier si le mot de passe est fort
        $strong = PasswordGenerator::isStrongPassword($Password);

        // Affiche le résultat : "oui" si le mot de passe est fort, sinon "non"
        echo "Le mot de passe est fort ? " . ($strong ? "oui" : "non") . PHP_EOL;
    }
    ?>
</body>

</html>
