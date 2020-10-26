<?php
require_once 'Vehicle.php';
require_once 'car.php';

$mini = new Car('Black', 4, 'electric');


try {
    $mini->start();
} catch (Exception $e) {
    echo "C'est une exception : " . $e->getMessage() . '<br>';
    $mini->setParkBrake(false);
} finally {
    echo 'Ma voiture roule comme un donut';
}
$mini->start();