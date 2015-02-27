<?php



 $bool = kollaUN("dor");
if($bool){
    echo "upptaget";
}else{
    echo "ledigt";
}

function kollaUN($username) {
    define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "ttm_db");
$dbh = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8', DB_USER, DB_PASSWORD);
    
    
    $sql = "SELECT * FROM users WHERE anv_namn=:username";
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(":username", $username);
    $stmt->execute();
    $user = $stmt->fetchAll();
    if (!empty($user)) {
        return $upptaget = true;
    } else {
        return $upptaget = false;
    }
}