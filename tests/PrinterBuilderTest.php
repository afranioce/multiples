<?php

namespace App\Tests;

use App\MultipleFactory;
use App\Multiples\Five;
use App\Multiples\Three;
use App\Multiples\ThreeAndFive;
use App\PrinterBuilder;
use PHPUnit\Framework\TestCase;

class PrintBuilderTest extends TestCase
{
    public function testSholudBePrint()
    {
        $multiples = [
            new ThreeAndFive(),
            new Three(),
            new Five(),
        ];
        $factory = new MultipleFactory($multiples);
        $printer = new PrinterBuilder($factory);

        $printer->build();
        echo $printer->show();
    }
}