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

        $printer->build(15);

        $this->assertEquals(['1', '2', 'Linio', '4', 'IT', 'Linio', '7', '8', 'Linio', 'IT', '11', 'Linio', '13', '14', 'Linianos'], $printer->getReplacedNumbers());
    }
}