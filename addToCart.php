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
            echo "true" . "<br>";
            break;
        }else{
            $exists = false;
            echo "false" . "<br>";
        }
    }
     if($exists){
         increaseCart($produkter, $antal, $id);
     }else{
         addToCart($produkter, $antal);
     }
}

function addToCart(array $produkt, $antal) {
    $produkt[0]["antal"] = $antal;
    $_SESSION["kundvagn"][] = $produkt[0];
    echo "Produkten " . $produkt[0]["namn"] . " har lagts till i din kundvagn.";
}

function increaseCart(array $produkt, $antal, $id) {
    $counter = 0;
    foreach ($_SESSION["kundvagn"] as $compare) {
        if (!$compare["id"] == $id) {
            $counter++;
            echo $counter;
        } else {
            $_SESSION["kundvagn"][$counter]["antal"] += $antal;
            echo "Antal " . $_SESSION["kundvagn"][$counter]["namn"] . " har ökats med " . $antal . "<br>";
            var_dump($_SESSION["kundvagn"][$counter]) . "<br>";
        }
    }
   
}

