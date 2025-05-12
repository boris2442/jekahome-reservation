<?php
 require_once'database/database.php';
 $pageTitle='Home page';
 ob_start();
 require_once 'layouts/reservations/index_html.php';
 $pageContent=ob_get_clean();
 require_once 'layouts/layout_html.php';



