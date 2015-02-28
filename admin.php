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
        
        
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="main.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        
        <link rel="stylesheet" href="admin.css">
    </head>
    <body>
        <div id="wrapper">
<?php
include('header.html');
?>
            <section>
                <h1>Admin</h1>
                <div class="produktregister article">
                    <h2>Produkthantering</h2>
                    <a href="admin.php?nyProdukt">Lägg till ny produkt</a>
                    <a href="admin.php?redProdukt">Redigera produkt</a>
            <?php
            include('registrera_produkt.php');
            ?> 
                </div>
                <div class="user_admin article">
                <h2>Användarhantering</h2>
                
                </div>
            </section>
        </div>
    </body>
</html>
