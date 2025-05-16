<?php
session_start();
require_once 'database/database.php';
$pageTitle='Listes des appartements';
require_once 'insert2.php';
ob_start();
require_once 'layouts/reservations/chambre_html.php';
$pageContent=ob_get_clean();
require_once 'layouts/layout_html.php';