<?php

session_start();
//definera databasuppgifter
$dbServer = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "ttm_db";
$dbh = new PDO('mysql:dbname=' . $dbName . ';host=' . $dbServer . ';charset=utf8', $dbUser, $dbPassword);

if (isset($_GET["logga_ut"])) {
    session_destroy();
    header("Location:index.php");
    exit();
}

if (!isset($_SESSION["inloggad"])) {
    if (isset($_GET["anv_namn"]) and isset($_GET["pass"])) {
        //Skapar temporära variabler för användarnamn och lösenord
        $tmp_username = filter_input(INPUT_GET, 'anv_namn', FILTER_SANITIZE_SPECIAL_CHARS);
        $tmp_password = filter_input(INPUT_GET, 'pass', FILTER_SANITIZE_SPECIAL_CHARS);
        //Matcher både användarnamn och lösenord någon del i databasen, skickas värden tillbaks till $users variabeln
        $sql = "SELECT * FROM users WHERE anv_namn=:username AND pass=:password";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(":username", $tmp_username);
        $stmt->bindParam(":password", $tmp_password);
        $stmt->execute();
        $users = $stmt->fetchAll();
        //Finns det något i $users skapas sessionen "inloggad"
        if (!empty($users)) {
            $_SESSION["inloggad"] = array();
            //Sätter sessionens plats 0 till användarnamnet man loggat in med
            $_SESSION["inloggad"]["username"] = $tmp_username;
            $_SESSION["inloggad"]["password"] = $tmp_password;
            if ($users[0]["admin"] == "1") {
                $_SESSION["inloggad"]["admin"] = true;
            } else {
                $_SESSION["inloggad"]["admin"] = false;
            }
        } else {
            echo "Wrong username or password!";
        }
    }
}


if (isset($_SESSION["inloggad"])) {
    if ($_SESSION["inloggad"]["admin"]) {
        header("Location:admin.php");
        exit();
    } else {
        header("Location:index.php");
        exit();
    }
}
