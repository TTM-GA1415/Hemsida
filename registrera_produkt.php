<?php
$dbh = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8', DB_USER, DB_PASSWORD);

$nyProd_form = "";
$prodList_ul = "";
if (isset($_GET["redProdukt"])) {
    $prodList_ul = redigeraProduktList();
}
if (isset($_GET["redigera_produkt"])) {
    $nyProd_form = redigeraProduktForm();
}
if (isset($_GET["nyProdukt"])) {
    $nyProd_form = skapaProduktForm();
}
if (isset($_GET["addProdukt"])) {
    skapaProduktDB();
}
if (isset($_GET["updateProdukt"])) {
    redigeraProduktDB();
}
if (isset($_GET["deleteProdukt"])){
    raderaProdukt();
}
//Funktioner för mindre kladd
function skapaProduktForm() {
    $form = "";
    $form .= "<form method='GET'>";
    $form .= "<p>Namn:</p><input type='text' name='namn'><br>";
    $form .= "<p>Kön:</p><select name='sex'><br>";
    $form .= "<option value='herr'>Herr</option>";
    $form .= "<option value='dam'>Dam</option>";
    $form .= "<option value='barn'>Barn</option>";
    $form .= "</select>";
    $form .= "<p>Pris:</p><input type='number' name='pris'><br>";
    $form .= "<p>Storlek:</p><select name='storlek'><br>";
    $form .= "<option value='XS'>XS</option>";
    $form .= "<option value='S'>S</option>";
    $form .= "<option value='M'>M</option>";
    $form .= "<option value='L'>L</option>";
    $form .= "<option value='XL'>XL</option>";
    $form .= "</select>";
    $form .= "<p>Beskrivning</p><input type='text' name='beskrivning'><br>";
    $form .= "<p>Färg</p><input type='text' name='färg'><br>";
    $form .= "<p>Taggar</p><input type='text' name='taggar'><br>";
    $form .= "<input type='submit' name='addProdukt' value='Lägg till'>";
    $form .= "</form>";
    return $form;
}

function skapaProduktDB() {
    $dbh = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8', DB_USER, DB_PASSWORD);
    
    $tmpNamn = filter_input(INPUT_GET, 'namn', FILTER_SANITIZE_SPECIAL_CHARS);
    $tmpSex = filter_input(INPUT_GET, 'sex', FILTER_SANITIZE_SPECIAL_CHARS);
    $tmpPris = filter_input(INPUT_GET, 'pris', FILTER_SANITIZE_SPECIAL_CHARS);
    $tmpStorlek = filter_input(INPUT_GET, 'storlek', FILTER_SANITIZE_SPECIAL_CHARS);
    $tmpBeskrivning = filter_input(INPUT_GET, 'beskrivning', FILTER_SANITIZE_SPECIAL_CHARS);
    $tmpFarg = filter_input(INPUT_GET, 'färg', FILTER_SANITIZE_SPECIAL_CHARS);
    $tmpTaggar = filter_input(INPUT_GET, 'taggar', FILTER_SANITIZE_SPECIAL_CHARS);

    $sql = 'INSERT INTO produktregister (namn, kön, pris, storlek, beskrivning, färg, taggar) VALUES (:prod_namn, :prod_sex, :prod_pris, :prod_storlek, :prod_beskrivning, :prod_farg, :prod_taggar)';
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(":prod_namn", $tmpNamn);
    $stmt->bindParam(":prod_sex", $tmpSex);
    $stmt->bindParam(":prod_pris", $tmpPris);
    $stmt->bindParam(":prod_storlek", $tmpStorlek);
    $stmt->bindParam(":prod_beskrivning", $tmpBeskrivning);
    $stmt->bindParam(":prod_farg", $tmpFarg);
    $stmt->bindParam(":prod_taggar", $tmpTaggar);
    $stmt->execute();
}

function redigeraProduktList() {
    $form = "";

    $dbh = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8', DB_USER, DB_PASSWORD);
    $sql = "SELECT * FROM produktregister WHERE 1";
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $produkter = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $form .= "<ul>";
    foreach ($produkter as $produkt) {
        $form .= "<ul class='adminForm'>";
        $form .= "<li><p>Namn</p>" . $produkt["namn"] . "</li>";
        $form .= "<li><p>Kön</p>" . $produkt["kön"] . "</li>";
        $form .= "<li><p>Pris</p>" . $produkt["pris"] . "</li>";
        $form .= "<li><p>Storlek</p>" . $produkt["storlek"] . "</li>";
        $form .= "<li><p>Beskrivning</p>" . $produkt["beskrivning"] . "</li>";
        $form .= "<li><p>Färg</p>" . $produkt["färg"] . "</li>";
        $form .= "<li><p>Taggar</p>" . $produkt["taggar"] . "</li>";
        $form .= "<form method='GET'>";
        $form .= "<input type='hidden' name='id' value='" . $produkt["id"] . "'>";
        $form .= "<input type='submit' name='redigera_produkt' value='Redigera'>";
        $form .= "<input type='submit' name='deleteProdukt' value='Radera'>";
        $form .= "</form>";
        $form .= "</ul>";
    }
    $form .= "</ul>";
    return $form;
}

function redigeraProduktForm() {
    $dbh = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8', DB_USER, DB_PASSWORD);
    $form = "";

    $sql = "SELECT * FROM produktregister WHERE id='" . $_GET["id"] . "'";
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $produkter = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $form .= "<form method='GET'>";
    $form .= "<p>Namn:</p><input type='text' name='namn' value='" . $produkter[0]["namn"] . "'><br>";
    $form .= "<p>Kön:</p><select name='sex'><br>";
    $form .= "<option value='herr'>Herr</option>";
    $form .= "<option value='dam'>Dam</option>";
    $form .= "<option value='barn'>Barn</option>";
    $form .= "</select>";
    $form .= "<p>Pris:</p><input type='number' name='pris' value='" . $produkter[0]["pris"] . "'><br>";
    $form .= "<p>Storlek:</p><select name='storlek'><br>";
    $form .= "<option value='XS'>XS</option>";
    $form .= "<option value='S'>S</option>";
    $form .= "<option value='M'>M</option>";
    $form .= "<option value='L'>L</option>";
    $form .= "<option value='XL'>XL</option>";
    $form .= "</select>";
    $form .= "<p>Beskrivning</p><input type='text' name='beskrivning' value='" . $produkter[0]["beskrivning"] . "'><br>";
    $form .= "<p>Färg</p><input type='text' name='färg' value='" . $produkter[0]["färg"] . "'><br>";
    $form .= "<p>Taggar</p><input type='text' name='taggar' value='" . $produkter[0]["taggar"] . "'><br>";
    $form .= "<input type='hidden' name='id' value='" . $_GET["id"] . "'>";
    $form .= "<input type='submit' name='updateProdukt' value='Redigera'>";   
    $form .= "</form>";
    return $form;
}

function redigeraProduktDB(){
    $dbh = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8', DB_USER, DB_PASSWORD);
    
    $tmpNamn = filter_input(INPUT_GET, 'namn', FILTER_SANITIZE_SPECIAL_CHARS);
    $tmpSex = filter_input(INPUT_GET, 'sex', FILTER_SANITIZE_SPECIAL_CHARS);
    $tmpPris = filter_input(INPUT_GET, 'pris', FILTER_SANITIZE_SPECIAL_CHARS);
    $tmpStorlek = filter_input(INPUT_GET, 'storlek', FILTER_SANITIZE_SPECIAL_CHARS);
    $tmpBeskrivning = filter_input(INPUT_GET, 'beskrivning', FILTER_SANITIZE_SPECIAL_CHARS);
    $tmpFarg = filter_input(INPUT_GET, 'färg', FILTER_SANITIZE_SPECIAL_CHARS);
    $tmpTaggar = filter_input(INPUT_GET, 'taggar', FILTER_SANITIZE_SPECIAL_CHARS);
    
    $sql = 'UPDATE produktregister SET namn=:prod_namn, kön=:prod_sex, pris=:prod_pris, storlek=:prod_storlek, beskrivning=:prod_beskrivning, färg=:prod_farg, taggar=:prod_taggar WHERE id="' . $_GET["id"] . '"';
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(":prod_namn", $tmpNamn);
    $stmt->bindParam(":prod_sex", $tmpSex);
    $stmt->bindParam(":prod_pris", $tmpPris);
    $stmt->bindParam(":prod_storlek", $tmpStorlek);
    $stmt->bindParam(":prod_beskrivning", $tmpBeskrivning);
    $stmt->bindParam(":prod_farg", $tmpFarg);
    $stmt->bindParam(":prod_taggar", $tmpTaggar);
    $stmt->execute();
    header('Location:?');
    exit;
}

function raderaProdukt(){
    $dbh = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8', DB_USER, DB_PASSWORD);
    
    $tmpID = $_GET["id"];
    
    $sql = "DELETE FROM produktregister WHERE id=:id";
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(":id", $tmpID);
    $stmt->execute();
    header('Location:?');
    exit;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo $nyProd_form;
        echo $prodList_ul;
        ?>
    </body>
</html>
