<?php

require_once "Car.php";

$taxi = new car ("yellow", 5, "fuel");


try {
    $taxi->start();
} catch (Exception $e) {
    $taxi->setParkBrake();
} finally {
    echo "Ma voiture roule comme un donut";
}

var_dump($taxi);
echo $taxi->start();