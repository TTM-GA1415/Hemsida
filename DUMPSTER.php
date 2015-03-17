<?php

session_start();

//foreach($_SESSION as $del){
//    var_dump($del) . "<br>";
//}
foreach($_SESSION["kundvagn"] as $del){
    var_dump($del);
}