<?php
require_once 'database/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];

    // Nettoyage des données
    function clean_input($data)
    {
        return htmlspecialchars(trim($data));
    }

    // Pseudo
    if (empty($_POST['name']) || strlen($_POST['name']) > 25 || strlen($_POST['name']) < 3) {
        $errors['name'] = 'Le pseudo doit contenir entre 3 et 25 caractères.';
    } else {
        $name = clean_input($_POST['name']);
    }

    // Email
    if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Email invalide';
    } else {
        $email = clean_input($_POST['email']);
        $sql = "SELECT * FROM utilisateurs WHERE email = ?";
        $requete = $db->prepare($sql);
        $requete->execute([$email]);

        if ($requete->fetch()) {
            $errors['email'] = "Cet email est déjà utilisé";
        }
    }

    // Mot de passe
    if (empty($_POST['password'])) {
        $errors['password'] = "Vous devez entrer un mot de passe.";
    } elseif ($_POST['password'] !== $_POST['confirm_password']) {
        $errors['password'] = "Les mots de passe ne correspondent pas.";
    } else {
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    }

    // S'il n'y a pas d'erreurs, on insère dans la BDD
    if (empty($errors)) {
        $sql = "INSERT INTO utilisateurs (name, email, password) VALUES (:name, :email, :password)";
        $requete = $db->prepare($sql);
        $requete->bindValue(':name', $name);
        $requete->bindValue(':email', $email);
        $requete->bindValue(':password', $password);
        $requete->execute();
?>
        <script>
            alert("bous avez été inscrit avec success")
        </script>
<?php
        header('Location: connexion.php');
        exit();
    }
}

// Pour afficher la page
$pageTitle = 'Inscription';
ob_start();
require_once 'layouts/login-logout/inscription_html.php';
$pageContent = ob_get_clean();
require_once 'layouts/layout_html.php';
