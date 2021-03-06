<?php
session_start();
$_SESSION["searchResults"] = "";
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "ttm_db");
$dbh = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8', DB_USER, DB_PASSWORD);

$tmpSök = filter_input(INPUT_POST, 'sök', FILTER_SANITIZE_SPECIAL_CHARS);

$sql = "SELECT * FROM produktregister WHERE taggar LIKE '%" . $tmpSök . "%'";
$stmt = $dbh->prepare($sql);
$stmt->bindParam(":search", $tmpSök);
$stmt->execute();
$produkter = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (!empty($produkter)) {
    foreach ($produkter as $produkt) {
        $_SESSION["searchResults"] .= "<div class='produkter'>";
        $_SESSION["searchResults"] .= "<img src='http://placehold.it/205x180'>";
        $_SESSION["searchResults"] .= "<h4>" . $produkt["namn"] . "</h4>";
//        $produkt .= "<p>" . $produkt["kön"] . "</p>";
        $_SESSION["searchResults"] .= "<p id='p'> Pris: " . $produkt["pris"] . " :-</p>";
        $_SESSION["searchResults"] .= "<div class='beskrivning'><p>" . $produkt["beskrivning"] . "</p></div>";
//        $produkt .= "<p>Storlek</p>" . $produkt["storlek"] . "</p>";
//        $produkt .= "<p>Beskrivning: <br>" . $produkt["beskrivning"] . "</p>";
//        $produkt .= "<p>Färg: " . $produkt["färg"] . "</p>";
        $_SESSION["searchResults"] .= "<form method='POST' action='addToCart.php'>";
        $_SESSION["searchResults"] .= "<input type='hidden' name='id' value='" . $produkt["id"] . "'>";
        $_SESSION["searchResults"] .= "<input type='number' class='antal' name='antal' value='1'>";
        $_SESSION["searchResults"] .= "<input type='submit' name='addToCart' class='add' value='Lägg till i kundvagn'>";
        $_SESSION["searchResults"] .= "</form>";
        $_SESSION["searchResults"] .= "</div>";
    }
}else{
    $_SESSION["searchResults"] .= "<p>Inga träffar.</p>";
}
header("location:searchResults.php");
exit();
?>