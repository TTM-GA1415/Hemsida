<?php

define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "ttm_db");
$dbh = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8', DB_USER, DB_PASSWORD);

$userlist = "";
$sql = "SELECT * FROM users WHERE 1";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $users = $stmt->fetchAll();
        foreach($user as $user){
            echo $user . "<br>";
        }