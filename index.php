<?php

require_once __DIR__ . '/vendor/autoload.php';

$multiples = [
    new App\Multiples\ThreeAndFive(),
    new App\Multiples\Three(),
    new App\Multiples\Five(),
];

$factory = new App\MultipleFactory($multiples);
$printer = new App\PrinterBuilder($factory);

$printer->build();

print $printer->show('<br>');