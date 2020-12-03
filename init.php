<?php
$dbuser = "d041e_daleo";
$dbpass = "12345_Db!!!";

$dbConnection = new PDO("mysql:host=mysql2.webland.ch;dbname=d041e_daleo", $dbuser, $dbpass, [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
]);


$sqlQuery = $dbConnection->query("SELECT * FROM `posts`");
$urls = $sqlQuery->fetchAll();
?>

