<?php
session_start();

$pageTitle='Listes des appartements';
ob_start();
require_once 'layouts/reservations/studio_html.php';
$pageContent=ob_get_clean();
require_once 'layouts/layout_html.php';