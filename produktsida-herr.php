<?php
session_start();
$_SESSION["searchResults"] = "";
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "ttm_db");
$dbh = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8', DB_USER, DB_PASSWORD);


if (!isset($_GET["view"])) {
    $sql = "SELECT * FROM produktregister WHERE kön LIKE '%herr%'";
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(":search", $tmpSök);
    $stmt->execute();
    $produkter = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (!empty($produkter)) {
        foreach ($produkter as $produkt) {
            $_SESSION["searchResults"] .= "<div class='produkter'>";
            $_SESSION["searchResults"] .= "<img src='http://placehold.it/205x180'>";
            $_SESSION["searchResults"] .= "<h4>" . $produkt["namn"] . "</h4>";
            $_SESSION["searchResults"] .= "<p id='p'> Pris: " . $produkt["pris"] . " :-</p>";
            $_SESSION["searchResults"] .= "<div class='beskrivning'><p>" . $produkt["beskrivning"] . "</p></div>";
            $_SESSION["searchResults"] .= "<form method='POST' action='addToCart.php'>";
            $_SESSION["searchResults"] .= "<input type='hidden' name='id' value='" . $produkt["id"] . "'>";
            $_SESSION["searchResults"] .= "<input type='number' class='antal' name='antal' value='1'>";
            $_SESSION["searchResults"] .= "<input type='submit' name='addToCart' class='add' value='Lägg till i kundvagn'>";
            $_SESSION["searchResults"] .= "</form>";
            $_SESSION["searchResults"] .= "</div>";
        }
    } else {
        $_SESSION["searchResults"] .= "<p>Inga produkter.</p>";
    }
} else {
    if ($_GET["produkt"] == "trojor") {
        $products = getProducts("tröja");

        if (!empty($products)) {
            foreach ($products as $product) {
                $_SESSION["searchResults"] .= "<div class='produkter'>";
                $_SESSION["searchResults"] .= "<img src='http://placehold.it/205x180'>";
                $_SESSION["searchResults"] .= "<h4>" . $product["namn"] . "</h4>";
                $_SESSION["searchResults"] .= "<p id='p'> Pris: " . $product["pris"] . " :-</p>";
                $_SESSION["searchResults"] .= "<div class='beskrivning'><p>" . $product["beskrivning"] . "</p></div>";
                $_SESSION["searchResults"] .= "<form method='POST' action='addToCart.php'>";
                $_SESSION["searchResults"] .= "<input type='hidden' name='id' value='" . $product["id"] . "'>";
                $_SESSION["searchResults"] .= "<input type='number' class='antal' name='antal' value='1'>";
                $_SESSION["searchResults"] .= "<input type='submit' name='addToCart' class='add' value='Lägg till i kundvagn'>";
                $_SESSION["searchResults"] .= "</form>";
                $_SESSION["searchResults"] .= "</div>";
            }
        } else {
            $_SESSION["searchResults"] .= "<p>Inga produkter.</p>";
        }
    }
    if ($_GET["produkt"] == "jackor") {
        $products = getProducts("jacka");

        if (!empty($products)) {
            foreach ($products as $product) {
                $_SESSION["searchResults"] .= "<div class='produkter'>";
                $_SESSION["searchResults"] .= "<img src='http://placehold.it/205x180'>";
                $_SESSION["searchResults"] .= "<h4>" . $product["namn"] . "</h4>";
                $_SESSION["searchResults"] .= "<p id='p'> Pris: " . $product["pris"] . " :-</p>";
                $_SESSION["searchResults"] .= "<div class='beskrivning'><p>" . $product["beskrivning"] . "</p></div>";
                $_SESSION["searchResults"] .= "<form method='POST' action='addToCart.php'>";
                $_SESSION["searchResults"] .= "<input type='hidden' name='id' value='" . $product["id"] . "'>";
                $_SESSION["searchResults"] .= "<input type='number' class='antal' name='antal' value='1'>";
                $_SESSION["searchResults"] .= "<input type='submit' name='addToCart' class='add' value='Lägg till i kundvagn'>";
                $_SESSION["searchResults"] .= "</form>";
                $_SESSION["searchResults"] .= "</div>";
            }
        } else {
            $_SESSION["searchResults"] .= "<p>Inga produkter.</p>";
        }
    }
    if ($_GET["produkt"] == "byxor") {
        $products = getProducts("byxor");

        if (!empty($products)) {
            foreach ($products as $product) {
                $_SESSION["searchResults"] .= "<div class='produkter'>";
                $_SESSION["searchResults"] .= "<img src='http://placehold.it/205x180'>";
                $_SESSION["searchResults"] .= "<h4>" . $product["namn"] . "</h4>";
                $_SESSION["searchResults"] .= "<p id='p'> Pris: " . $product["pris"] . " :-</p>";
                $_SESSION["searchResults"] .= "<div class='beskrivning'><p>" . $product["beskrivning"] . "</p></div>";
                $_SESSION["searchResults"] .= "<form method='POST' action='addToCart.php'>";
                $_SESSION["searchResults"] .= "<input type='hidden' name='id' value='" . $product["id"] . "'>";
                $_SESSION["searchResults"] .= "<input type='number' class='antal' name='antal' value='1'>";
                $_SESSION["searchResults"] .= "<input type='submit' name='addToCart' class='add' value='Lägg till i kundvagn'>";
                $_SESSION["searchResults"] .= "</form>";
                $_SESSION["searchResults"] .= "</div>";
            }
        } else {
            $_SESSION["searchResults"] .= "<p>Inga produkter.</p>";
        }
    }
    if ($_GET["produkt"] == "skor") {
        $products = getProducts("sko");

        if (!empty($products)) {
            foreach ($products as $product) {
                $_SESSION["searchResults"] .= "<div class='produkter'>";
                $_SESSION["searchResults"] .= "<img src='http://placehold.it/205x180'>";
                $_SESSION["searchResults"] .= "<h4>" . $product["namn"] . "</h4>";
                $_SESSION["searchResults"] .= "<p id='p'> Pris: " . $product["pris"] . " :-</p>";
                $_SESSION["searchResults"] .= "<div class='beskrivning'><p>" . $product["beskrivning"] . "</p></div>";
                $_SESSION["searchResults"] .= "<form method='POST' action='addToCart.php'>";
                $_SESSION["searchResults"] .= "<input type='hidden' name='id' value='" . $product["id"] . "'>";
                $_SESSION["searchResults"] .= "<input type='number' class='antal' name='antal' value='1'>";
                $_SESSION["searchResults"] .= "<input type='submit' name='addToCart' class='add' value='Lägg till i kundvagn'>";
                $_SESSION["searchResults"] .= "</form>";
                $_SESSION["searchResults"] .= "</div>";
            }
        } else {
            $_SESSION["searchResults"] .= "<p>Inga produkter.</p>";
        }
    }
    if ($_GET["produkt"] == "hats") {
        $products = getProducts("hatt");

        if (!empty($products)) {
            foreach ($products as $product) {
                $_SESSION["searchResults"] .= "<div class='produkter'>";
                $_SESSION["searchResults"] .= "<img src='http://placehold.it/205x180'>";
                $_SESSION["searchResults"] .= "<h4>" . $product["namn"] . "</h4>";
                $_SESSION["searchResults"] .= "<p id='p'> Pris: " . $product["pris"] . " :-</p>";
                $_SESSION["searchResults"] .= "<div class='beskrivning'><p>" . $product["beskrivning"] . "</p></div>";
                $_SESSION["searchResults"] .= "<form method='POST' action='addToCart.php'>";
                $_SESSION["searchResults"] .= "<input type='hidden' name='id' value='" . $product["id"] . "'>";
                $_SESSION["searchResults"] .= "<input type='number' class='antal' name='antal' value='1'>";
                $_SESSION["searchResults"] .= "<input type='submit' name='addToCart' class='add' value='Lägg till i kundvagn'>";
                $_SESSION["searchResults"] .= "</form>";
                $_SESSION["searchResults"] .= "</div>";
            }
        } else {
            $_SESSION["searchResults"] .= "<p>Inga produkter.</p>";
        }
    }
    if ($_GET["produkt"] == "accessoarer") {
        $products = getProducts("accessoar");

        if (!empty($products)) {
            foreach ($products as $product) {
                $_SESSION["searchResults"] .= "<div class='produkter'>";
                $_SESSION["searchResults"] .= "<img src='http://placehold.it/205x180'>";
                $_SESSION["searchResults"] .= "<h4>" . $product["namn"] . "</h4>";
                $_SESSION["searchResults"] .= "<p id='p'> Pris: " . $product["pris"] . " :-</p>";
                $_SESSION["searchResults"] .= "<div class='beskrivning'><p>" . $product["beskrivning"] . "</p></div>";
                $_SESSION["searchResults"] .= "<form method='POST' action='addToCart.php'>";
                $_SESSION["searchResults"] .= "<input type='hidden' name='id' value='" . $product["id"] . "'>";
                $_SESSION["searchResults"] .= "<input type='number' class='antal' name='antal' value='1'>";
                $_SESSION["searchResults"] .= "<input type='submit' name='addToCart' class='add' value='Lägg till i kundvagn'>";
                $_SESSION["searchResults"] .= "</form>";
                $_SESSION["searchResults"] .= "</div>";
            }
        } else {
            $_SESSION["searchResults"] .= "<p>Inga produkter.</p>";
        }
    }
}

function getProducts($productWord) {
    $dbh = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8', DB_USER, DB_PASSWORD);
    $sql = "SELECT * FROM produktregister WHERE taggar LIKE '%" . $productWord . "%' AND kön='herr'";
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $products;
    
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>TMNT - Herr</title>

        <link rel="stylesheet" href="reset.css">

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="produkter.css">
        <link rel="stylesheet" href="produkter-herr.css">
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
                <div class="banner-herr">
                    <img src="http://placehold.it/1080x150">
                </div>
                <div class="kategorier-meny">
                    <h4>Dam</h4>
                    <ul class="kategorier-herr">
                        <li><a href="?produkt=trojor&view=true">Tröjor</a></li>
                        <li><a href="?produkt=jackor&view=true">Jackor</a></li>
                        <li><a href="?produkt=byxor&view=true">Byxor</a></li>
                        <li><a href="?produkt=skor&view=true">Skor</a></li>
                        <li><a href="?produkt=hats&view=true">Mössor och Kepsar</a></li>
                        <li><a href="?produkt=accessoarer&view=true">Accessoarer</a></li>
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
