<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Générateur de Mot de Passe</title>
</head>

<body>
    <h1>Générateur de Mot de Passe</h1>
    <a href="./vues/verif.php">Vers la vérification de mdp</a>
    <form method="POST" action="./index.php">
        <label for="length">Longueur du mot de passe :</label>
        <input type="number" id="length" name="length" value="12" min="4" required>

        <p>Types de caractères à inclure :</p>
        <input type="checkbox" name="characters[]" value="upper" checked> Majuscules<br>
        <input type="checkbox" name="characters[]" value="lower" checked> Minuscules<br>
        <input type="checkbox" name="characters[]" value="numbers" checked> Chiffres<br>
        <input type="checkbox" name="characters[]" value="special" checked> Caractères spéciaux<br>

        <button type="submit">Générer</button>
    </form>

    <?php
    // Inclure la classe PasswordGenerator
    require_once __DIR__ . '/vendor/autoload.php';

    use Enzo\Dev\PasswordGenerator;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Récupération de la longueur et des caractères sélectionnés
        $length = isset($_POST['length']) ? (int)$_POST['length'] : 12;
        $characterTypes = isset($_POST['characters']) ? $_POST['characters'] : [];

        // Vérification que l'utilisateur a sélectionné au moins un type de caractère

        try {
            // Génération du mot de passe avec les options choisies
            $password = PasswordGenerator::generatePassword($length, $characterTypes);
            echo "<p>Mot de passe généré : <strong>$password</strong></p>";
        } catch (Exception $e) {
            echo "<p style='color:red;'>Erreur : " . $e->getMessage() . "</p>";
        }
    }
    ?>
</body>

</html>