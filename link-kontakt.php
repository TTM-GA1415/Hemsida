<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>TMNT - Kontaktsida</title>

        <link rel="stylesheet" href="reset.css">

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="kontakt.css">
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
                <div class="banner-kontakt">
                    <img src="http://placehold.it/1080x150">
                </div>
                <div class="section-kontakt">
                    <div class="bilder-kontakt">
                        <img src="http://placehold.it/200x600">
                    </div>
                    <div class="text-kontakt">
                        <div class="t-text-kontakt">
                            <div class="t-t-inuti-kontakt">
                                <div class="t-t-i-h4-kontakt font"><h4>Kontakt</h4></div>
                                <div class="t-t-i-p-kontakt font">
                                    Telefonnummer: 123456789<br /><br />
                                    Mailadress/e-mail: tmnt-klader@baproductions.com<br /><br />
                                    Ort: Linköping<br /><br />
                                    Postnummer: 582xx<br /><br />
                                    Adress: nerikloakvägen 13 C
                                </div>
                            </div>
                        </div>
                        <div class="t-bilder-kontakt">
                            <div class="t-b-h4-kontakt font"><h4>Skapare och ansvariga utgivare</h4></div>
                            <div class="t-b-bilder-kontakt">
                                <div class="t-b-bild bild1">
                                    <img src="http://placehold.it/150x150">
                                    <p><b>Martin Benno Klevbrand</b></p>
                                    <p>Front-side</p>
                                </div>
                                <div class="t-b-bild bild2">
                                    <img src="http://placehold.it/150x150">
                                    <p><b>Truls Warvsten</b></p>
                                    <p>Back-side</p>
                                </div>
                                <div class="t-b-bild bild3">
                                    <img src="http://placehold.it/150x150">
                                    <p><b>Theodor Årnfelt</b></p>
                                    <p>Front-side & design</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php
                include('footer.html');
            ?>
        </div>
    </body>
</html>
