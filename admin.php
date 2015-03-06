<?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "ttm_db");
$dbh = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8', DB_USER, DB_PASSWORD);

$userlist = "";
$admins = "";
$sql = "SELECT * FROM users WHERE anv_namn=:username AND pass=:password";
$stmt = $dbh->prepare($sql);
$stmt->bindParam(":username", $tmp_username);
$stmt->bindParam(":password", $tmp_password);
$stmt->execute();
$users = $stmt->fetchAll();

if(isset($_GET["error"])){
    echo "<script>";
    include("adminreg_fel.js");
    echo "</script>";
}
if(isset($_GET["visaAdmin"])){
    $dbh = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8', DB_USER, DB_PASSWORD);
    $sql = "SELECT * FROM users WHERE admin=1";
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    $admins .= "<ul>";
    foreach($users as $user){
        $admins .= "<ul>";
        $admins .= "<p>Användarnamn:</p>";
        $admins .= "<li>" . $user["anv_namn"] . "</li>"; 
        $admins .= "</ul>";
    }
    $admins .= "</ul>";
    $admins .= "<a href='admin.php'>Göm lista</a>";
}else{
    $admins .= "<a href='admin.php?visaAdmin'>Visa administratörer</a>";
}
    
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
        <?php
        include('header.html');
        ?>
        <div id="wrapper">
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
                    <form action="createAdmin.php" method="GET">
                        <p>Användarnamn</p><input type="text" name="username" placeholder="Användarnamn" required>
                        <p>Lösenord</p><input type="password" name="password" placeholder="Lösenord" required>
                        <p>Upprepa lösenord</p><input type="password" name="password_repeat" placeholder="Upprepa lösenord" required>
                        <br>
                        <input type="submit" name="regAdmin" value="Skapa admin">
                    </form>
                    <?php
                    echo $admins;
                    ?>
                </div>
            </section>
            <?php
            include('footer.html');
            ?>
        </div>
    </body>
</html>
