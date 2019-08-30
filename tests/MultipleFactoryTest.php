<?php

namespace App\Tests;

use App\MultipleFactory;
use App\Multiples\Five;
use App\Multiples\Three;
use App\Multiples\ThreeAndFive;
use PHPUnit\Framework\TestCase;

class MultipleFactoryTest extends TestCase
{
    public function testSholudBeDivisible()
    {
        $multiples = [
            new ThreeAndFive(),
            new Three(),
            new Five(),
        ];
        $factory = new MultipleFactory($multiples);

        $this->assertEquals('1', $factory->replace(1));
        $this->assertEquals('2', $factory->replace(2));
        $this->assertEquals('Linio', $factory->replace(3));
        $this->assertEquals('Linio', $factory->replace(9));
        $this->assertEquals('IT', $factory->replace(5));
        $this->assertEquals('IT', $factory->replace(10));
        $this->assertEquals('IT', $factory->replace(25));
        $this->assertEquals('Linianos', $factory->replace(15));
    }
}
