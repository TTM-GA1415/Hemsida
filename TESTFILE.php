<?php
$array = array(1,2,3,4,5,6,7);

array_splice($array, 0, 1);

foreach($array as $part){
    echo $part;
}   