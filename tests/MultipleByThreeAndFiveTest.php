<?php

namespace App\Tests;

use App\Multiples\ThreeAndFive;
use PHPUnit\Framework\TestCase;

class MultipleByThreeAndFiveTest extends TestCase
{
    protected $multiple;

    protected function setUp(): void
    {
        $this->multiple = new ThreeAndFive();
    }

    public function testNotSholudBeDivisibleByThreeAndFive()
    {
        $this->assertTrue($this->multiple->isMultiple(15));
        $this->assertEquals('Linianos', $this->multiple->getReplacer());
    }

    public function testSholudBeDivisibleByThreeAndFive()
    {
        $this->assertFalse($this->multiple->isMultiple(5));
        $this->assertFalse($this->multiple->isMultiple(3));
    }
}