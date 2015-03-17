<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>TMnT - Resultat</title>
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
                <?php
                if(isset($_SESSION["searchResults"])){
                    echo $_SESSION["searchResults"];
                }else{
                    header("location:homepage.php");
                    exit();
                }
                
                ?>
            </section>
            <?php
            include('footer.html');
            ?>
        </div>
    </body>
</html>
