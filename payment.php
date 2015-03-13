<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="payment.css">
        <title></title>
    </head>
    <body>
        <div id="content"> 
            <form>
                <div class="cardselect"><img src="http://placehold.it/100x70"><input type="radio" name="card" value="mastercard"></div>
                <div class="cardselect"><img src="http://placehold.it/100x70"><input type="radio" name="card" value="visa"></div>
                <div class="cardselect"><img src="http://placehold.it/100x70"><input type="radio" name="card" value="paypal"></div>
            </form>
            <p>Kortnummer</p>
            <input type="text" name="card_number" value="Nummer">
            <p>Namn</p>
            <input type="text" name="card_holder" value="Namn">
            <p>Utgångsdatum</p>
            <input type="text" name="exp_date_m" value="Månad">
            <p>/</p>
            <input type="text" name="expdate_date_y" value="År">
            <p>CCV</p>
            <input type="text" name="ccv" value="">
            <form>
                
                
            </form>
            
            
            
        </div>
<?php ?>
    </body>
</html>
