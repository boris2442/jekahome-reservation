<?php
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
}
