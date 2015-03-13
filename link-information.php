<?php
session_start();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>TMNT - Information</title>

        <link rel="stylesheet" href="reset.css">

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="information.css">
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
                <div class="banner-information">
                    <img src="http://placehold.it/1080x150">
                </div>
                <div class="bilder-information">
                    <img src="http://placehold.it/300x190">
                    <img class="imgs" src="http://placehold.it/300x190">
                    <img class="imgs" src="http://placehold.it/300x190">
                </div>
                <div class="text-information">
                    <div class="t-i-information omoss">
                        <h4>Om Oss</h4>
                        <div class="t-i-i-text">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur 
                                adipiscing elit. Vivamus suscipit urna 
                                sed nisl porttitor consectetur. Vestibulum 
                                aliquet justo leo, ac lacinia felis condimentum
                                quis. Suspendisse malesuada lorem vel ornare 
                                facilisis. Praesent ante nunc, dapibus vel 
                                finibus eu, maximus sit amet libero. 
                                Nunc laoreet ipsum erat. Proin vehicula 
                                justo id lacus dignissim vulputate. 
                                Maecenas non pulvinar dui, ut fermentum lectus.
                            </p>
                        </div>
                    </div>
                    <div class="t-i-information historia">
                        <h4>Historia</h4>
                        <div class="t-i-i-text">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur 
                                adipiscing elit. Vivamus suscipit urna 
                                sed nisl porttitor consectetur. Vestibulum 
                                aliquet justo leo, ac lacinia felis condimentum
                                quis. Suspendisse malesuada lorem vel ornare 
                                facilisis. Praesent ante nunc, dapibus vel 
                                finibus eu, maximus sit amet libero. 
                                Nunc laoreet ipsum erat. Proin vehicula 
                                justo id lacus dignissim vulputate. 
                                Maecenas non pulvinar dui, ut fermentum lectus.
                            </p>
                        </div>
                    </div>
                    <div class="t-i-information vision">
                        <h4>Framtid och vision</h4>
                        <div class="t-i-i-text">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur 
                                adipiscing elit. Vivamus suscipit urna 
                                sed nisl porttitor consectetur. Vestibulum 
                                aliquet justo leo, ac lacinia felis condimentum
                                quis. Suspendisse malesuada lorem vel ornare 
                                facilisis. Praesent ante nunc, dapibus vel 
                                finibus eu, maximus sit amet libero. 
                                Nunc laoreet ipsum erat. Proin vehicula 
                                justo id lacus dignissim vulputate. 
                                Maecenas non pulvinar dui, ut fermentum lectus.
                            </p>
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
