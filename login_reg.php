<?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "ttm_db");

$dbh = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8', DB_USER, DB_PASSWORD);

if (isset($_POST["user_reg"])) {
    $tmp_username = filter_input(INPUT_POST, 'username_reg', FILTER_SANITIZE_SPECIAL_CHARS);
    $tmp_password = filter_input(INPUT_POST, 'password_reg', FILTER_SANITIZE_SPECIAL_CHARS);
    $tmp_passwordrepeat = filter_input(INPUT_POST, 'passwordrepeat_reg', FILTER_SANITIZE_SPECIAL_CHARS);

    $upptaget = kollaUN($tmp_username);
    if (!$upptaget) {
        if ($tmp_password == $tmp_passwordrepeat) {
            $sql = "INSERT INTO users (anv_namn, pass, admin) VALUES (:username, :password, '0')";
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(":username", $tmp_username);
            $stmt->bindParam(":password", $tmp_password);
            $stmt->execute();
        } else {
            echo "<script>window.alert('Dina lösenord matchade inte.');</script>";
        }
    } else {
        echo "<script>window.alert('Användarnamnet är upptaget.');</script>";
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
        <link rel="stylesheet" href="reset.css">


        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="main.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>

        <link rel="stylesheet" href="user_reg.css">
        <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <?php
        include('header.html');
        ?>
        <div id="wrapper">
            <section>
                <div class="user-ruta ur_ett">
                    <h2>Logga in</h2>
                    <form method="POST">
                        <p>Användarnamn:</p><input class="user_input" type="text" name="anv_namn" required>
                        <p>Lösenord:</p><input class="user_input" type="password" name="pass" required>
                        <br>
                        <input class="knapp" type="submit" name="log_in" value="Logga in">
                    </form>
                </div>
                <div class="user-ruta ur_tva">
                    <h2>Registrera</h2>
                    <form method="POST">
                        <p>Användarnamn:</p><input class="user_input" type="text" name="username_reg" required>
                        <p>Lösenord:</p><input class="user_input" type="password" name="password_reg" required>
                        <p>Upprepa lösenord:</p><input class="user_input" type="password" name="passwordrepeat_reg" required>
                        <br>
                        <input class="knapp" type="submit" name="user_reg" value="Registrera">
                    </form>
                </div>
            </section>
            <?php
            include('footer.html');
            ?>
        </div>
    </body>
</html>
