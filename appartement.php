<?php
session_start();
require_once 'database/database.php';
require_once 'insert2.php';
$pageTitle='Listes des appartements';
ob_start();
require_once 'layouts/reservations/appartement_html.php';
$pageContent=ob_get_clean();
require_once 'layouts/layout_html.php';