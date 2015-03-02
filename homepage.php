 
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>TTM - Hem</title>
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="reset.css">

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="main.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
        
            <?php
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
                    <img class="img-under-specific" src="bilder/350x380/201243170_62bdbe70-d074-4bd5-84cd-5bb2f993362b.jpg">
                    <img class="img-under-specific" src="bilder/350x380/loltröjan.jpg">
                    <img class="img-under-specific img-under-undan" src="bilder/350x380/tröja-och-skjorta.jpg">
                </div>
            </section>
            <footer>
                <div class="footer-placering">
                    <div class="oppettider">
                        <h5>Öppettider i lokaler:</h5>
                        <table>
                            <tr>    
                                <td>Mån-/Torsdag</td>
                                <td>09:00 - 18:00</td>
                            </tr>
                            <tr>
                                <td>Fredag</td>
                                <td>09:00 - 16:00</td>
                            </tr>
                            <tr>
                                <td>Lördag</td>
                                <td>10:00 - 16:00</td>
                            </tr>
                            <tr>
                                <td>Söndag</td>
                                <td>12:00 - 16:00</td>
                            </tr>
                        </table>
                    </div>
                    <div class="hjalp">
                        <p>Hjälp:</p>
                        <a href="">Kundservice</a>
                        <a href="">Hitta butik</a>
                        <a href="">FAQ</a>
                    </div>
                    <div class="footer-mid">
                        <p>Accepterade betalmedel:</p>
                        <img src="http://skin.cdn.impericon.com/skin/frontend/icmaa-responsive/impericon/images/logos/payment/footer-paypal.png">
                        <img src="http://skin.cdn.impericon.com/skin/frontend/icmaa-responsive/impericon/images/logos/payment/footer-visa.png">
                        <img src="http://skin.cdn.impericon.com/skin/frontend/icmaa-responsive/impericon/images/logos/payment/footer-mastercard.png">
                    </div>
                    <div class="footer-right">
                        <p>Följ oss på sociala medier: </p>
                        <a href="#"><img src="http://skin.cdn.impericon.com/skin/frontend/icmaa-responsive/impericon/images/icons/footer-social-facebook.png"></a>
                        <a href="#"><img src="http://skin.cdn.impericon.com/skin/frontend/icmaa-responsive/impericon/images/icons/footer-social-twitter.png"></a>
                        <a href="#"><img src="http://skin.cdn.impericon.com/skin/frontend/icmaa-responsive/impericon/images/icons/footer-social-gplus.png"></a>
                    </div>
                </div>    
                <!--                <div class="footer-left">
                                    <ul>
                                        <li><a href="#">Jobba hos oss</a></li>
                                        <li><a href="#">FAQ</a></li>
                                    </ul>
                                </div>-->

            </footer>
        </div>    
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
