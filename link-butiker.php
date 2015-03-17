<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>TMNT - Butiker</title>

        <link rel="stylesheet" href="reset.css">

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="butiker.css">
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
                <div class="banner-butiker">
                    <img src="http://placehold.it/1080x150">
                </div>
                <div class="bilder-butiker">
                    <img src="http://placehold.it/300x600">
                </div>
                <div class="text-butiker">
                    <div class="t-b-h4">
                        <h4>Butiker</h4>
                    </div>
                    <div class="t-b-text">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur 
                            adipiscing elit. Sed eu sagittis velit. 
                            Vestibulum ut interdum elit. Sed arcu eros, 
                            congue sed ipsum ac, pellentesque rutrum neque. 
                            Phasellus pharetra dapibus purus, eu interdum 
                            augue volutpat sed. Praesent semper nibh vitae 
                            quam ultrices vulputate. Suspendisse bibendum 
                            rhoncus eleifend. Proin at ex urna. Etiam 
                            vestibulum tristique quam, vitae dictum nisi 
                            malesuada vel. Suspendisse potenti. Vivamus in 
                            arcu non nibh bibendum volutpat non id tellus. 
                            Vestibulum imperdiet nisl massa, vel pulvinar elit 
                            egestas sit amet. Nam eleifend pellentesque eros 
                            sagittis blandit. Sed diam ex, sollicitudin 
                            consectetur consectetur vel, ullamcorper ut massa. 
                            Vivamus semper, est quis ultricies tincidunt, 
                            ante orci condimentum tellus, ut tincidunt dui 
                            lacus non dolor.
                            <br /><br />
                            Nunc tortor ligula, tempus eget tincidunt at, 
                            mollis sit amet nunc. Fusce sollicitudin dolor 
                            ullamcorper, maximus leo sit amet, hendrerit 
                            felis. Donec dictum ultricies elit nec ornare. 
                            Sed non convallis velit. Fusce at maximus nisl. 
                            Suspendisse ac diam ut dolor semper tempor sit 
                            amet sit amet mi. In ut tortor eget urna eleifend 
                            auctor.
                        </p>
                    </div>
                </div>
            </section>
            <?php
            include('footer.html');
            ?>
        </div>
    </body>
</html>
