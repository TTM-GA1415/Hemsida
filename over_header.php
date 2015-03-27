<!DOCTYPE html>
<?php
    $loginForm = "";
    
    if(!isset($_SESSION["inloggad"])){
        $loginForm .= "<form action='login.php' method='POST'>";
        $loginForm .= "<input type='text' name='anv_namn' class='infoga username' placeholder='Username'>";
        $loginForm .= "<input type='password' name='pass' class='infoga password' placeholder='Password'>";
        $loginForm .= "<input type='submit' name='log_in' class='button-over-header' Value='Logga in'>";
        $loginForm .= "</form>";
    }else{
        
        
        $loginForm .= "<form action='login.php' method='POST'>";
        $loginForm .= "<input type='Submit' name='logga_ut' class='loggaut' Value='Logga ut'>";
        $loginForm .= "</form>";
        $loginForm .= "<div class='text'><p class='anvandare'>Inloggad som " . $_SESSION["inloggad"]["username"] . "</p></div>";
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="over_header.css">
    </head>
    <body>
        
        <div id="over_header_wrapper">
            <div id="telefonnummer"><p>Telefonnummer: 013-245678</p></div>
        <div id="cart"><a href="kundvagn.php"><img src="bilder/kundvagn/kundvagn_minskad.png"></a> </div>
        
        
        <?php
            echo $loginForm;
        ?>
        </div>
        
        
    </body>
</html>
