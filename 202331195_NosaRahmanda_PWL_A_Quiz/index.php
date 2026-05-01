<?php
// Tanpa tanda '/' di awal biar jalurnya relatif ke folder project lu
require_once 'controllers/ProfileController.php';

$app = new ProfileController();
$app->index();
?>