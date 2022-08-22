<?php
$bmw = [
    "model" => "X5",
    "speed" => 120,
    "doors" => 5,
    "year" => "2015",
];
$toyota = [
    "model" => "Camry",
    "speed" => 150,
    "doors" => 5,
    "year" => "2007",
];
$opel = [
    "model" => "Astra",
    "speed" => 180,
    "doors" => 3,
    "year" => "2011",
];
$cars = [
    'bmw' => $bmw,
    'toyota' => $toyota,
    'opel' => $opel,
];

foreach ($cars as $car => $value) {
    echo 'CAR ' . $car . "<br>" . implode(' ',$value) . "<br>";
}
