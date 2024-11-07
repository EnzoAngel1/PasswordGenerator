<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Configuration de la langue du document et de l'encodage des caractères pour le HTML -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Titre de la page affiché dans l'onglet du navigateur -->
    <title>Générateur de mots de passe</title>
</head>

<body>
    <!-- Lien pour accéder à la page de vérification de mots de passe -->
    <a href="./vues/verif.php">verif</a>

    <!-- Titre principal de la page -->
    <h1>Générer Votre mot de passe :</h1>

    <!-- Formulaire permettant à l'utilisateur de générer un mot de passe en spécifiant sa longueur -->
    <form action="./index.php" method="post">
        <!-- Etiquette pour le champ de longueur du mot de passe -->
        <label for="length">Longueur du mot de passe :</label>
        <!-- Champ numérique pour spécifier la longueur, avec une valeur par défaut de 12, 
             et une limite de saisie obligatoire définie par "required" -->
        <input type="number" id="length" name="length" value="12" required>
        <!-- Bouton pour soumettre le formulaire et générer le mot de passe -->
        <button type="submit">Générer</button>
    </form>

    <?php
    // Inclusion du fichier autoload de Composer pour charger automatiquement les classes nécessaires
    require_once __DIR__ . '/vendor/autoload.php';

    // Import de la classe PasswordGenerator depuis l'espace de noms Enzo\Dev
    use Enzo\Dev\PasswordGenerator;

    // Vérifie si le champ "length" est défini dans $_POST pour confirmer que le formulaire a été soumis
    if (isset($_POST['length'])) {
        try {
            // Appelle la fonction generatePassword de la classe PasswordGenerator,
            // en utilisant la valeur fournie dans le champ "length" pour définir la longueur du mot de passe
            $Password = PasswordGenerator::generatePassword($_POST['length']);

            // Affiche le mot de passe généré à l'utilisateur
            echo $Password;
        } catch (\Exception $e) {
            // En cas d'erreur dans la génération du mot de passe, affiche le message d'erreur
            echo $e->getMessage();
        }

    }
    ?>
</body>
</html>