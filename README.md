# 📜 Générateur de Mots de Passe Sécurisé en PHP

Ce projet est une application PHP simple permettant de générer des mots de passe sécurisés de longueur personnalisée et de vérifier leur niveau de sécurité. Elle est conçue avec une interface utilisateur basique pour rendre la génération et la vérification de mots de passe facilement accessibles.

## 🚀 Fonctionnalités

- **Génération de mots de passe** : Choisissez la longueur souhaitée pour générer un mot de passe (valeur par défaut de 12 caractères).
- **Vérification de la force du mot de passe** : Vérifiez si un mot de passe respecte les critères de complexité.
- **Interface utilisateur** : Deux formulaires séparés permettent de générer et de vérifier des mots de passe via une interface simple.

## 📂 Structure du projet

- **`index.php`** : Interface principale pour générer des mots de passe en spécifiant leur longueur.
- **`vues/verif.php`** : Interface pour vérifier si un mot de passe respecte les critères de sécurité.
- **`PasswordGenerator.php`** : Classe PHP contenant les méthodes pour générer un mot de passe et vérifier sa force.
- **`vendor/`** : Contient les dépendances installées via Composer.
- **`.gitignore`** : Fichier pour ignorer les fichiers/dossiers sensibles ou non nécessaires au dépôt Git (dépendances, fichiers temporaires, etc.).

## ⚙️ Installation

1. **Cloner le dépôt** :

    ```bash
    git clone https://github.com/EnzoAngel1/PasswordGenerator.git
    cd nom-du-repo
    ```

2. **Installer les dépendances avec Composer** :

    ```bash
    composer install
    ```

3. **Démarrer un serveur local PHP** :

    ```bash
    php -S localhost:8000
    ```

4. **Accéder à l’application** :
   Ouvrez votre navigateur et allez à `http://localhost:8000` pour utiliser le générateur de mots de passe.

## 📝 Utilisation

1. **Générer un mot de passe** :
   - Allez sur la page d’accueil (`index.php`).
   - Choisissez la longueur du mot de passe.
   - Cliquez sur "Générer" pour afficher le mot de passe.

2. **Vérifier la force d’un mot de passe** :
   - Cliquez sur le lien "verif" pour accéder à la page de vérification (`verif.php`).
   - Entrez le mot de passe que vous souhaitez vérifier.
   - Cliquez sur "Vérifier" pour voir si le mot de passe est "fort" ou non.

## 📌 Technologies Utilisées

- **PHP** : Langage utilisé pour la logique de génération et de vérification des mots de passe.
- **Composer** : Gestionnaire de dépendances pour PHP, utilisé ici pour l'inclusion de bibliothèques nécessaires.

## 🛠️ Améliorations possibles

- **Personnalisation des critères de complexité** : Ajouter des options pour définir les exigences (par exemple, nombre minimum de caractères spéciaux).
- **Journalisation** : Enregistrer les tentatives de génération et de vérification pour le suivi.
- **Interface utilisateur** : Ajouter du CSS pour améliorer l’apparence de l’application.

## 📄 Licence

Ce projet est sous licence MIT. Consultez le fichier [LICENSE](LICENSE) pour plus de détails.
