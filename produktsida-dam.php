<?php
session_start();
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
                        <li><a href="#">Tröjor</a></li>
                        <li><a href="#">Jackor</a></li>
                        <li><a href="#">Byxor</a></li>
                        <li><a href="#">Skor</a></li>
                        <li><a href="#">Mössor och Kepsar</a></li>
                        <li><a href="#">Accessoarer</a></li>
                    </ul>
                </div>
                <div class="produktalternativ"> 
                    <!--det här är det som ska append:as ut-->
                    <div class="produkter"><img src="http://placehold.it/200x180"></div>
                    <div class="produkter"><img src="http://placehold.it/200x180"></div>
                    <div class="produkter"><img src="http://placehold.it/200x180"></div>
                 
                </div>
            </section>
        <?php
            include('footer.html');
        ?>    
        </div>
    </body>
</html>
