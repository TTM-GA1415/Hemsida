<?php
//definera databasuppgifter
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "ttm_db");
$dbh = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8', DB_USER, DB_PASSWORD);
if (!isset($_SESSION["inloggad"])) {
    if (isset($_GET["anv_namn"]) and isset($_GET["pass"])) {
        //Skapar temporära variabler för användarnamn och lösenord
        $tmp_username = filter_input(INPUT_GET, 'anv_namn', FILTER_SANITIZE_SPECIAL_CHARS);
        $tmp_password = filter_input(INPUT_GET, 'pass', FILTER_SANITIZE_SPECIAL_CHARS);
        //Matcher både användarnamn och lösenord någon del i databasen, skickas värden tillbaks till $users variabeln
        $sql = "SELECT * FROM users WHERE anv_namn=:username AND pass=:password";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(":username", $tmp_username);
        $stmt->bindParam(":password", $tmp_password);
        $stmt->execute();
        $users = $stmt->fetchAll();
        //Finns det något i $users skapas sessionen "inloggad"
        if (!empty($users)) {
            $_SESSION["inloggad"] = array();
            //Sätter sessionens plats 0 till användarnamnet man loggat in med
            $_SESSION["inloggad"]["username"] = $tmp_username;
            $_SESSION["inloggad"]["password"] = $tmp_password;
        if($users[0]["admin"] == "1"){
                $_SESSION["inloggad"]["admin"] = true;
            }else{
                $_SESSION["inloggad"]["admin"] = false;
            }
            
        }else{
            echo "Wrong username or password!";
        }
    }
}

if(!isset($_SESSION["inloggad"])){
echo "<form method='GET'>";
echo "<input type='text' name='anv_namn'>";
echo "<input type='password' name='pass'>";
echo "<input type='submit' name='log_in' value='Logga in'>";
echo "</form>";
}

if(isset($_SESSION["inloggad"])){
    if($_SESSION["inloggad"]["admin"]){
     echo "adminstuffshizzlemanizzledrizzlefizzle. <br>";   
     
     echo "Inloggad som " . $_SESSION["inloggad"]["username"] . "<br>";
    echo "<form method='GET'>";
    echo "<input type='submit' name='logga_ut' value='Logga ut'>";
    echo "</form>";
    }else{
    echo "Inloggad som " . $_SESSION["inloggad"]["username"] . "<br>";
    echo "<form method='GET'>";
    echo "<input type='submit' name='logga_ut' value='Logga ut'>";
    echo "</form>";
    }
}
if(isset($_GET["logga_ut"])){
    session_destroy();
    header("Location:?");
    exit();
}
