<?php
session_start();
$pageTitle="about ";
ob_start();
require_once 'layouts/reservations/about_html.php';
$pageContent=ob_get_clean();
require_once 'layouts/layout_html.php';
