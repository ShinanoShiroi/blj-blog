<?php
$dbuser = "d041e_listuder";
$dbpass = "12345_Db!!!";

$dbConnection = new PDO("mysql:host=mysql2.webland.ch;dbname=d041e_listuder", $dbuser, $dbpass, [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
]);

$sqlQuery = $dbConnection->query("SELECT * FROM `blog_url`");
$urls = $sqlQuery->fetchAll();

// var_dump($urls);

echo '<h1>Blogs meiner BLJ-Kollegen</h1>';

foreach($urls as $url) {
    ?>
    <div class="links">
    <?php
    $link = '<a href="' . htmlspecialchars($url["blogUrl"] ). '" target="_blank">' . htmlspecialchars($url["blogAuthor"]) . '\'s Blog' . '</a>' . '<br>';

   echo $link;
   ?>
   </div>
   <?php
} 
?>