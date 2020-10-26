<?php

require_once 'Car.php';

$vroum = new Car('blue',5, "flatulences");

try{
    $vroum->start ();
} catch(Exception $e){
    var_dump ($e);
    $vroum->setParkBrake (false);
} finally{
    echo "Ma voiture roule comme un donut";
}