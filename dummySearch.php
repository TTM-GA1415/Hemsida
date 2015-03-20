<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>TMnT - Resultat</title>
        <link rel="stylesheet" href="reset.css">
        <link rel="stylesheet" href="search.css">
        <link rel="stylesheet" href="main.css">
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
<div id="searchContent">

            <div class='söktProdukt'>
                <img src='http://placehold.it/200x180'>
                <p>Namn:</p>
                
                <p>pris:</p>    
                <input type='number' name='antal' value='1'>
                <input type='submit' name='addToCart' value='Lägg till i kundvagn'>
            </div>
            <div class='söktProdukt'>
                <img src='http://placehold.it/200x180'>
                <p>Namn:kiss</p>
                
                <p>pris:</p>
                <input type='number' name='antal' value='1'>
                <input type='submit' name='addToCart' value='Lägg till i kundvagn'>
            </div>
            <div class='söktProdukt'>
                <img src='http://placehold.it/200x180'>
                <p>Namn:</p>
                
                <p>pris:</p>
                <input type='number' name='antal' value='1'>
                <input type='submit' name='addToCart' value='Lägg till i kundvagn'>
            </div>
    <div class='söktProdukt'>
                <img src='http://placehold.it/200x180'>
                <h4>tröja med ränder</h4>
                
                <p>pris:</p>    
                <input type='number' name='antal' value='1'>
                <input type='submit' name='addToCart' value='Lägg till i kundvagn'>
            </div>
            <div class='söktProdukt'>
                <img src='http://placehold.it/200x180'>
                <p>Namn:</p>
                
                <p>pris:</p>
                <input type='number' name='antal' value='1'>
                <input type='submit' name='addToCart' value='Lägg till i kundvagn'>
            </div>
            <div class='söktProdukt'>
                <img src='http://placehold.it/200x180'>
                <p>Namn:</p>
                
                <p>pris:</p>
                <input type='number' name='antal' value='1'>
                <input type='submit' name='addToCart' value='Lägg till i kundvagn'>
            </div>
</div>
            <?php
            include('footer.html');
            ?>
        </div>
    </body>
</html>
