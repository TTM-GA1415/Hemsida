<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>TMNT - Hem</title>
        <link rel="stylesheet" href="reset.css">

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
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="slider carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="bilder/1080x400/kläder-på-galgar.jpg" alt="...">
                            <div class="carousel-caption">
                                Bild 1
                            </div>
                        </div>
                        <div class="item">
                            <img src="bilder/1080x400/klader.jpg" alt="...">
                            <div class="carousel-caption">
                                Bild 2
                            </div>
                        </div>
                        <div class="item">
                            <img src="bilder/1080x400/TOwiRK8.jpg" alt="...">
                            <div class="carousel-caption">
                                Bild 3
                            </div>
                        </div>
                    </div>

                    <!-- Controls -->
                    <div id="bergansning">
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                        </div>
                </div>

                <div class="img-under">
                    <div class="img-under-class">
                        <a href="#"><img class="img-under-specific" src="bilder/350x380/201243170_62bdbe70-d074-4bd5-84cd-5bb2f993362b.jpg"></a>
                        <div class="hover-display">
                            <div class="homepage-h5"><h5>Just nu!</h5></div>
                            <div class="homepage-p"><p>Extrapris på alla byxor</p></div>
                        </div>
                    </div>
                    <div class="img-under-class">
                        <a href="#"><img class="img-under-specific" src="bilder/350x380/loltröjan.jpg"></a>
                        <div class="hover-display">
                            <div class="homepage-h5"><h5>Prisvärt</h5></div>
                            <div class="homepage-p"><p>Kolla in nya prudukter</p></div>
                        </div>
                    </div>
                    <div class="img-under-class">
                       <a href="#"><img class="img-under-specific img-under-undan" src="bilder/350x380/tröja-och-skjorta.jpg"></a>
                        <div class="hover-display">
                            <div class="homepage-h5"><h5>Nyligen anlänt</h5></div>
                            <div class="homepage-p"><p>Snygga tröjor för hela slanten</p></div>
                        </div>
                    </div>
                </div>
            </section>
            <?php
                include('footer.html');
            ?>
        </div>    
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
