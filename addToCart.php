<?php
session_start();

define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "ttm_db");
$dbh = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8', DB_USER, DB_PASSWORD);

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
(int) $antal = filter_input(INPUT_GET, 'antal', FILTER_SANITIZE_SPECIAL_CHARS);

$sql = "SELECT * FROM produktregister WHERE id=".$id;
$stmt = $dbh->prepare($sql);
$stmt->bindParam(":search", $tmpSök);
$stmt->execute();
$produkter = $stmt->fetchAll(PDO::FETCH_ASSOC);

if(!isset($_SESSION["kundvagn"])){
    
}







//if(!isset($_SESSION["kundvagn"])){
    $produkter[0][] = $antal;
    $_SESSION["kundvagn"] = array();
    $_SESSION["kundvagn"][] = $produkter[0];
    var_dump($_SESSION["kundvagn"]);
    echo "<br>";
//}
    //FÖR OM ANTAL INTE EXISTERAR
function addToCart(array $produkt, $antal){
    $produkt[0][] = $antal;
    $_SESSION["kundvagn"][] = $produkt[0];
}    

function increaseCart(array $produkt, $antal, $id){
    if($_SESSION["kundvagn"][]["id"] == $id){
        
    }
}