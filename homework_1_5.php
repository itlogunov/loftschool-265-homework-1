<?php

$bmw = [
    'model' => 'X5',
    'speed' => 120,
    'doors' => 5,
    'year' => 2015,
];

$toyota = [
    'model' => 'avensis',
    'speed' => 130,
    'doors' => 5,
    'year' => 2016,
];

$opel = [
    'model' => 'astra',
    'speed' => 140,
    'doors' => 3,
    'year' => 2017,
];

$cars = [$bmw, $toyota, $opel];
foreach ($cars as $item) {
    echo 'CAR ' . $item['model'] . ' ' . $item['speed'] . ' ' . $item['doors'] . ' ' . $item['year'] . '<br>';
}
