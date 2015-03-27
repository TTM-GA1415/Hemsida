<?php
    session_start();
    function reduceAmount($amount){
        
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Kundvagn</title>
        <link rel="stylesheet" href="reset.css">
        <link rel="stylesheet" href="kundvagn.css">
        
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="main.css">
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
                <?php
                if(isset($_SESSION["kundvagn"])){
                $kundvagn = "";
                $summa = 0;
                
                $kundvagn .= "<div class='cart'>";
                foreach($_SESSION["kundvagn"] as $produkt){
                    
                    $kundvagn .= "<div class='cartProduct'>";
                    $kundvagn .= "<h4>".$produkt["namn"]. "</h4>" . "<br>";
                    $kundvagn .= "Pris: " . $produkt["pris"] . ":-" . "<br>";
                    $kundvagn .= "Antal: " . $produkt["antal"] . "<br>";
                    $summa += $produkt["pris"] * $produkt["antal"];
                    $kundvagn .= "<form method='GET'>";
                    $kundvagn .= "<input type='number' name='antal' value='1'>";
                    $kundvagn .= "<input type='submit' name='reduceAmount' value='Minska antal'>";
                    $kundvagn .= "</form>";
                    $kundvagn .= "<form mehtod='GET'>";
                    $kundvagn .= "<input type='submit' name='delete' value='Ta bort'>";
                    $kundvagn .= "</form>";
                    $kundvagn .= "</div>";
                }
                $kundvagn .= "Totalt: " . $summa . " SEK<br>";
                $kundvagn .= "</div>";
                
                echo $kundvagn;
                echo "<a href='payment.php'>Checka ut</a>";
                }else{
                    echo "Din kundvagn är tom.";
                }
                ?>
                
            </section>



            <?php
            include('footer.html');
            ?>    
        </div>
    </body>
</html>
