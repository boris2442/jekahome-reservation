<?php
session_start();
require 'database/database.php';
// Pour afficher la page
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SESSION['users']['id'])) {
    $user_id = $_SESSION['users']['id'];
    if (!empty($_POST['user_id'])) {
        $sql = "INSERT INTO utilisateur_logement (`utilisateur_id`, `date_reservation`) VALUES(:utilisateur_id, NOW())";
        $requete = $db->prepare($sql);
        $requete->bindParam(':utilisateur_id', $user_id);
        if ($requete->execute()) {
            header('location:logement.php');
            exit();
          
        } else {
?>
            <script>
                alert('une erreur est produite veuilez ressayez plus tard');
            </script>
<?php
        }
    }
} else {
    // header('location:connexion.php');
    // exit();
}





$pageTitle = 'Inscription';
ob_start();
require_once 'layouts/reservations/logement_html.php';
$pageContent = ob_get_clean();
require_once 'layouts/layout_html.php';



?>