<?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "ttm_db");
$dbh = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8', DB_USER, DB_PASSWORD);

$nyProd_form = "";

if(isset($_GET["nyProdukt"])){
    $nyProd_form .= "<form method='GET'>";
    $nyProd_form .= "<p>Namn:</p><input type='text' name='namn'><br>";
    $nyProd_form .= "<p>Kön:</p><select name='sex'><br>";
    $nyProd_form .= "<option value='herr'>Herr</option>";
    $nyProd_form .= "<option value='dam'>Dam</option>";
    $nyProd_form .= "<option value='barn'>Barn</option>";
    $nyProd_form .= "</select>";
    $nyProd_form .= "<p>Pris:</p><input type='number' name='pris'><br>";
    $nyProd_form .= "<p>Storlek:</p><select name='storlek'><br>";
    $nyProd_form .= "<option value='XS'>XS</option>";
    $nyProd_form .= "<option value='S'>S</option>";
    $nyProd_form .= "<option value='M'>M</option>";
    $nyProd_form .= "<option value='L'>L</option>";
    $nyProd_form .= "<option value='XL'>XL</option>";
    $nyProd_form .= "</select>";
    $nyProd_form .= "<p>Beskrivning</p><input type='text' name='beskrivning'><br>";
    $nyProd_form .= "<p>Färg</p><input type='text' name='färg'><br>";
    $nyProd_form .= "<input type='submit' name='addProdukt' value='Lägg till'>";
    $nyProd_form .= "</form>";
}
if(isset($_GET["addProdukt"])){    
    $tmpNamn = filter_input(INPUT_GET, 'namn', FILTER_SANITIZE_SPECIAL_CHARS);
    $tmpSex = filter_input(INPUT_GET, 'sex', FILTER_SANITIZE_SPECIAL_CHARS);
    $tmpPris = filter_input(INPUT_GET, 'pris', FILTER_SANITIZE_SPECIAL_CHARS);
    $tmpStorlek = filter_input(INPUT_GET, 'storlek', FILTER_SANITIZE_SPECIAL_CHARS);
    $tmpBeskrivning = filter_input(INPUT_GET, 'beskrivning', FILTER_SANITIZE_SPECIAL_CHARS);
    $tmpFarg = filter_input(INPUT_GET, 'färg', FILTER_SANITIZE_SPECIAL_CHARS);
  
    $sql = 'INSERT INTO produktregister (namn, kön, pris, storlek, beskrivning, färg) VALUES (:prod_namn, :prod_sex, :prod_pris, :prod_storlek, :prod_beskrivning, :prod_farg)';
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(":prod_namn", $tmpNamn);
    $stmt->bindParam(":prod_sex", $tmpSex);
    $stmt->bindParam(":prod_pris", $tmpPris);
    $stmt->bindParam(":prod_storlek", $tmpStorlek);
    $stmt->bindParam(":prod_beskrivning", $tmpBeskrivning);
    $stmt->bindParam(":prod_farg", $tmpFarg);
    $stmt->execute();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a href="admin.php?nyProdukt">Lägg till ny produkt</a>
        <?php
        echo $nyProd_form;
        ?>
    </body>
</html>
