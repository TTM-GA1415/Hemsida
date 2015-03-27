<?php
session_start();
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "ttm_db");
$dbh = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8', DB_USER, DB_PASSWORD);

if (isset($_POST["regAdmin"])) {
    $tmpUN = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $tmpPW = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
    $tmpPWR = filter_input(INPUT_POST, 'password_repeat', FILTER_SANITIZE_SPECIAL_CHARS);
    $tmpAdmin = 1;

    if ($tmpPW == $tmpPWR) {
        $sql = 'INSERT INTO users (anv_namn, pass, admin) VALUES (:un, :pw, :admin)';
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(":un", $tmpUN);
        $stmt->bindParam(":pw", $tmpPW);
        $stmt->bindParam(":admin", $tmpAdmin);
        $stmt->execute();
        header("Location:admin.php");
        exit();
    } else {
        header("location:admin.php?error");
        exit();
    }
} else {
    
}
?>