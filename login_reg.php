<?php



?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Logga in - Registrera</title>
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="reset.css">
        <link rel="stylesheet" href="user_reg.css">
    </head>
    <body>
        <div id="wrapper">
            <?php
            include('header.html');
            ?>
            <section>
                <div class="user-ruta ur_ett">
                    <h2>Logga in</h2>
                    <form method="GET">
                        <p>Användarnamn:</p><input class="user_input" type="text" name="username_log">
                        <p>Lösenord:</p><input class="user_input" type="password" name="password_log">
                        <br>
                        <input class="knapp" type="submit" name="user_log" value="Logga in">
                     </form>
                </div>
                <div class="user-ruta ur_tva">
                    <h2>Registrera</h2>
                    <form method="GET">
                        <p>Användarnamn:</p><input class="user_input" type="text" name="username_reg">
                        <p>Lösenord:</p><input class="user_input" type="password" name="password_reg">
                        <p>Upprepa lösenord:</p><input class="user_input" type="password" name="passwordrepeat_reg">
                        <br>
                        <input class="knapp" type="submit" name="user_reg" value="Registrera">
                    </form>
                </div>
            </section>
        </div>
    </body>
</html>
