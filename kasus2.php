<?php 
include "kasus2_class.php";

$host = "localhost";
$user = "root";
$pass = "root";
$dbname = "oop_1";

$db = new Database($host, $user, $pass, $dbname);
$db->connectivityMysql();
?>