<!DOCTYPE html>
<?php
    $loginForm = "";
    
    if(!isset($_SESSION["inloggad"])){
        $loginForm .= "<form action='login.php' method='GET'>";
        $loginForm .= "<input type='text' name='anv_namn' placeholder='Username'>";
        $loginForm .= "<input type='password' name='pass' placeholder='Password'>";
        $loginForm .= "<input type='submit' name='log_in' Value='Logga in'>";
        $loginForm .= "</form>";
    }else{
        $loginForm .= "<form action='login.php' method='GET'>";
        $loginForm .= "<input type='Submit' name='logga_ut' Value='Logga ut'>";
        $loginForm .= "</form>";
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
        <p>Telefonnummer: 123456789</p>
        <div id="cart"><a href="#"><img src="http://placehold.it/25x25"></a> </div>
        
        
        <?php
            echo $loginForm;
        ?>
            
       
        
        </div>
        
        
    </body>
</html>
