<?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "ttm_db");
$dbh = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8', DB_USER, DB_PASSWORD);

if (isset($_GET["user_reg"])) {
    $tmp_username = filter_input(INPUT_GET, 'username_reg', FILTER_SANITIZE_SPECIAL_CHARS);
    $tmp_password = filter_input(INPUT_GET, 'password_reg', FILTER_SANITIZE_SPECIAL_CHARS);
    $tmp_passwordrepeat = filter_input(INPUT_GET, 'passwordrepeat_reg', FILTER_SANITIZE_SPECIAL_CHARS);

    $upptaget = kollaUN($tmp_username);
    if (!$upptaget) {
        if ($tmp_password == $tmp_passwordrepeat) {
            $sql = "INSERT INTO users (anv_namn, pass, admin) VALUES (:username, :password, '0')";
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(":username", $tmp_username);
            $stmt->bindParam(":password", $tmp_password);
            $stmt->execute();
            
            
        } else {
            echo "Lösenorden matchar inte!";
        }
    }else{
        echo "Användarnamnet är upptaget!";
    }
}
include 'login.php';

function kollaUN($username) {
    $dbh = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8', DB_USER, DB_PASSWORD);

    $sql = "SELECT * FROM users WHERE anv_namn=:username";
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(":username", $username);
    $stmt->execute();
    $user = $stmt->fetchAll();
    if (!empty($user)) {
        return $upptaget = true;
    } else {
        return $upptaget = false;
    }
}
?>






<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Logga in - Registrera</title>
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="reset.css">
        <link rel="stylesheet" href="user_reg.css">
    </head>
    <body>
        <div id="wrapper">
            <?php
            include('header.html');
            ?>
            <section>
                <div class="user-ruta ur_ett">
                    <h2>Logga in</h2>
                    <form method="GET">
                        <p>Användarnamn:</p><input class="user_input" type="text" name="anv_namn" required>
                        <p>Lösenord:</p><input class="user_input" type="password" name="pass" required>
                        <br>
                        <input class="knapp" type="submit" name="log_in" value="Logga in">
                    </form>
                </div>
                <div class="user-ruta ur_tva">
                    <h2>Registrera</h2>
                    <form method="GET">
                        <p>Användarnamn:</p><input class="user_input" type="text" name="username_reg" required>
                        <p>Lösenord:</p><input class="user_input" type="password" name="password_reg" required>
                        <p>Upprepa lösenord:</p><input class="user_input" type="password" name="passwordrepeat_reg" required>
                        <br>
                        <input class="knapp" type="submit" name="user_reg" value="Registrera">
                    </form>
                </div>
            </section>
        </div>
    </body>
</html>
