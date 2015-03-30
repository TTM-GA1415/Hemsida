<?php
session_start();
$_SESSION["searchResults"] = "";
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "ttm_db");
$dbh = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8', DB_USER, DB_PASSWORD);



$sql = "SELECT * FROM produktregister WHERE kön LIKE '%dam%'";
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
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>TMNT - Dam</title>

        <link rel="stylesheet" href="reset.css">

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="produkter.css">
        <link rel="stylesheet" href="produkter-dam.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <?php
            include('over_header.php');
            include('header.html');
        ?>
        <div id="wrapper">
            <section>
                <div class="banner-dam">
                    <img src="http://placehold.it/1080x150">
                </div>
                <div class="kategorier-meny">
                    <h4>Dam</h4>
                    <ul class="kategorier-dam">
                        <li><a href="?trojor">Tröjor</a></li>
                        <li><a href="#">Jackor</a></li>
                        <li><a href="#">Byxor</a></li>
                        <li><a href="#">Skor</a></li>
                        <li><a href="#">Mössor och Kepsar</a></li>
                        <li><a href="#">Accessoarer</a></li>
                    </ul>
                </div>
                <div class="produktalternativ"> 
                    <!--det här är det som ska append:as ut-->
                    <?php
                        echo $_SESSION["searchResults"];
                    ?>

                    <!--<div class="produkter"><img src="http://placehold.it/200x180"></div>
                    <div class="produkter"><img src="http://placehold.it/200x180"></div>
                    <div class="produkter"><img src="http://placehold.it/200x180"></div>-->
                 
                </div>
            </section>
        <?php
            include('footer.html');
        ?>    
        </div>
    </body>
</html>
