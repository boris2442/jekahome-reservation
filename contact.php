<?php
// Démarrage de la session
session_start();
// Inclusion de la base de données
require_once 'database/database.php';

if (isset($_POST['contact'])) {
    $errors = [];

    // Vérification de la session utilisateur
    if (!isset($_SESSION['users']['id'])) {
        $errors['user'] = "Vous devez être connecté pour envoyer un message.";
    }

    // Validation du message
    if (empty($_POST['message']) || strlen($_POST['message']) < 3 || strlen($_POST['message']) > 400) {
        $errors['message'] = "Le message doit contenir entre 3 et 400 caractères.";
    }

    // INSERT INTO------------------------------------------
    if (empty($errors)) {
        $query = "INSERT INTO contacts(utilisateur_id, message) VALUES(?, ?)";
        $req = $db->prepare($query);
        $req->execute([$_SESSION['users']['id'], $_POST['message']]);

        // Redirection vers la page d'accueil
        header("Location: logement.php");
        exit();
    } else {
        // Affichage des erreurs
        foreach ($errors as $error) {
            echo '<div style="background:red; text-align:center; color:white; padding:2px 8px; font-size:25px;">'
                . htmlspecialchars($error) .
                '</div>';
        }
    }
}

$pageTitle = "Contact";
ob_start();
// Inclusion de la page de contact
require_once 'layouts/contact/contact_html.php';
// Récupération du contenu du tampon dans la page de sortie
$pageContent = ob_get_clean();
// Inclusion du layout de la page de sortie
require_once 'layouts/layout_html.php';