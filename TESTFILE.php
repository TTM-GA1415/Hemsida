<?php

define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "ttm_db");
$dbh = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8', DB_USER, DB_PASSWORD);

$userlist = "";
$sql = "SELECT * FROM users WHERE 1";
$stmt = $dbh->prepare($sql);
$stmt->execute();
$users = $stmt->fetchAll();
foreach ($user as $user) {
    echo $user . "<br>";
}
        
        
        
        
        $nyProd_form .= "<form method='GET'>";
        $nyProd_form .= "<p>Namn:</p><input type='text' name='namn' value='".$produkt["namn"]."'><br>";
        $nyProd_form .= "<p>Kön:</p><select name='sex'><br>";
        $nyProd_form .= "<option value='herr'>Herr</option>";
        $nyProd_form .= "<option value='dam'>Dam</option>";
        $nyProd_form .= "<option value='barn'>Barn</option>";
        $nyProd_form .= "</select>";
        $nyProd_form .= "<p>Pris:</p><input type='number' name='pris' value='".$produkt["pris"]."'><br>";
        $nyProd_form .= "<p>Storlek:</p><select name='storlek'><br>";
        $nyProd_form .= "<option value='XS'>XS</option>";
        $nyProd_form .= "<option value='S'>S</option>";
        $nyProd_form .= "<option value='M'>M</option>";
        $nyProd_form .= "<option value='L'>L</option>";
        $nyProd_form .= "<option value='XL'>XL</option>";
        $nyProd_form .= "</select>";
        $nyProd_form .= "<p>Beskrivning</p><input type='text' name='beskrivning' value='".$produkt["beskrivning"]."'><br>";
        $nyProd_form .= "<p>Färg</p><input type='text' name='färg' value='".$produkt["färg"]."'><br>";
        $nyProd_form .= "<input type='submit' name='addProdukt' value='Redigera'>";
        $nyProd_form .= "</form>";