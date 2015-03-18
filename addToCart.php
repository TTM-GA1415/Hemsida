<?php

session_start();

define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "ttm_db");
$dbh = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8', DB_USER, DB_PASSWORD);

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
(int) $antal = filter_input(INPUT_GET, 'antal', FILTER_SANITIZE_SPECIAL_CHARS);

$sql = "SELECT * FROM produktregister WHERE id=" . $id;
$stmt = $dbh->prepare($sql);
$stmt->bindParam(":search", $tmpSök);
$stmt->execute();
$produkter = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (!isset($_SESSION["kundvagn"])) {
    $produkter[0]["antal"] = $antal;
    $_SESSION["kundvagn"] = array();
    $_SESSION["kundvagn"][] = $produkter[0];
}else{
    $exists = false;
    foreach($_SESSION["kundvagn"] as $kundvagnPlats){
        if($kundvagnPlats["id"] == $id){
            $exists = true;
            break;
        }else{
            $exists = false;
        }
    }
     if($exists){
         increaseCart($produkter, $antal, $id);
         header("location:kundvagn.php");
         exit();
     }else{
         addToCart($produkter, $antal);
         header("location:kundvagn.php");
         exit();
     }
}

function addToCart(array $produkt, $antal) {
    $produkt[0]["antal"] = $antal;
    $_SESSION["kundvagn"][] = $produkt[0];
}

function increaseCart(array $produkt, $antal, $id) {
    $counter = 0;
    foreach ($_SESSION["kundvagn"] as $compare) {
        if (!$compare["id"] == $id) {
            $counter++;
        } else {
            $_SESSION["kundvagn"][$counter]["antal"] += $antal;
        }
    }
   
}

