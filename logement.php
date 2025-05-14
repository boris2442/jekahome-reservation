<?php
session_start();
require 'database/database.php';
// Pour afficher la page






$pageTitle = 'Inscription';
ob_start();
require_once 'layouts/reservations/logement_html.php';
$pageContent = ob_get_clean();
require_once 'layouts/layout_html.php';



?>