<?php
session_start();
require_once 'database/database.php';
$errors = [];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!isset($_POST['email']) || empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'email non valiide';
    }
    if (empty($_POST['password']) || !isset($_POST['password'])) {
        $errors['password'] = 'password obligatoire';
    }

    if (empty($errors)) {
        $sql = "SELECT * FROM `utilisateurs` WHERE email=?";
        $requete = $db->prepare($sql);
        $requete->execute([$_POST['email']]);
        $user = $requete->fetch(PDO::FETCH_ASSOC);
        if ($user && password_verify($_POST['password'], $user['password'])) {
            $_SESSION['users'] = [
                "id" => $user['id'],
                "email" => $user['email'],
                "roles" => $user['roles']
            ];
            if ($_SESSION['users']['roles'] === 'admin') {
                header('location:admin.php');
                // exit();
            } else {
                header('location:logement.php');
            }
        } else {
            $errors['login'] = "Identifiants incorrects";
        }
    }
}
if (!empty($errors)) {
    foreach ($errors as $error) {
        echo '<div style="background:red; text-align:center; color:white; padding:2px 8px; font-size:25px;">'
            . htmlspecialchars($error) .
            '</div>';
    }
}

// Pour afficher la page
$pageTitle = 'connexion';
ob_start();
require_once 'layouts/login-logout/connexion_html.php';
$pageContent = ob_get_clean();
require_once 'layouts/layout_html.php';
