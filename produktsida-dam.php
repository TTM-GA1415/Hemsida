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
                        <li><a href="#">Tröjor</a>
<!--                            <ul>
                                <li><a href="#">T-shirts</a></li>
                                <li><a href="#">Linnen</a></li>
                                <li><a href="#">Koftor</a></li>
                                <li><a href="#">Hoodies</a></li>
                                <li><a href="#">Sport-/träningströjor</a></li>
                            </ul>-->
                        </li>
                        <li><a href="#">Jackor</a>
<!--                            <ul>
                                <li><a href="#">Vinterjackor</a></li>
                                <li><a href="#">Vårjackor</a></li>
                                <li><a href="#">Regnjackor</a></li>
                                <li><a href="#">Skid-/Sportjackor</a></li>
                            </ul>-->
                        </li>
                        <li><a href="#">Byxor</a>
<!--                            <ul>
                                <li><a href="#">Jeans</a></li>
                                <li><a href="#">Chinos</a></li>
                                <li><a href="#">Mjukisbyxor</a></li>
                                <li><a href="#">Tränings-/Fritidsbyxor</a></li>
                            </ul>-->
                        </li>
                        <li><a href="#">Skor</a>
<!--                            <ul>
                                <li><a href="#">Lågskor</a></li>
                                <li><a href="#">Klackade skor</a></li>
                                <li><a href="#">träning-/löpskor</a></li>
                            </ul>-->
                        </li>
                        <li><a href="#">Mössor och Kepsar</a>
<!--                            <ul>
                                <li><a href="#">Kepsar</a></li>
                                <li><a href="#">Mössor</a></li>
                            </ul>-->
                        </li>
                        <li><a href="#">Accessoarer</a>
<!--                            <ul>
                                <li><a href="#">Klockor/Armbandsur</a></li>
                                <li><a href="#">Armband/Halsband</a></li>
                                <li><a href="#">Glasögon</a></li>
                            </ul>-->
                        </li>
                    </ul>
                </div>
                <div class="produktalternativ"> 
                    <!--det här är det som ska append:as ut-->
                    <div class="produkter"><img src="http://placehold.it/250x300"></div>
                    <div class="produkter"><img src="http://placehold.it/250x300"></div>
                    <div class="produkter"><img src="http://placehold.it/250x300"></div>
                 
                </div>
            </section>
        <?php
            include('footer.html');
        ?>    
        </div>
    </body>
</html>
