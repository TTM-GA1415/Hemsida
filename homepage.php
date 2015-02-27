 
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
    </head>
    <body>
        <div id="wrapper">
            <?php
            include('header.html');
            ?>
            <section>
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="http://placehold.it/1080x400" alt="...">
                            <div class="carousel-caption">
                                Bild 1
                            </div>
                        </div>
                        <div class="item">
                            <img src="http://placehold.it/1080x400" alt="...">
                            <div class="carousel-caption">
                                Bild 2
                            </div>
                        </div>
                        <div class="item">
                            <img src="http://placehold.it/1080x400" alt="...">
                            <div class="carousel-caption">
                                Bild 3
                            </div>
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                
                <div class="img-under">
                    <img class="img-under-specific" src="http://placehold.it/350x380">
                    <img class="img-under-specific" src="http://placehold.it/350x380">
                    <img class="img-under-specific img-under-undan" src="http://placehold.it/350x380">
                </div>
            </section>
            <footer>
                <div class="footer-left">
                    <ul>
                        <li><a href="#">Sociala medier</a></li>
                        <li><a href="#">Öppettider</a></li>
                        <li><a href="#">Jobba hos oss</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
                <div class="footer-mid">
                    <a href="http://skin.cdn.impericon.com/skin/frontend/icmaa-responsive/impericon/images/logos/payment/footer-paypal.png"
                </div>
                <div class="footer-right"></div>
                
            </footer>
        </div>    
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
