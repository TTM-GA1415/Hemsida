<?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "ttm_db");
$dbh = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8', DB_USER, DB_PASSWORD);

$userlist = "";
$sql = "SELECT * FROM users WHERE anv_namn=:username AND pass=:password";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(":username", $tmp_username);
        $stmt->bindParam(":password", $tmp_password);
        $stmt->execute();
        $users = $stmt->fetchAll();





?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>admin</title>
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="reset.css">
        <link rel="stylesheet" href="admin.css">
    </head>
    <body>
        <div id="wrapper">
            <section>
                <?php
                include('header.html');
                include('registrera_produkt.php');
                
                ?> 
            </section>
        </div>
    </body>
</html>
