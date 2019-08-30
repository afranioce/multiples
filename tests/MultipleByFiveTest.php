<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Multiples\Five;

class MultipleByFiveTest extends TestCase
{
    protected $multiple;

    protected function setUp(): void
    {
        $this->multiple = new Five();
    }

    public function testSholudBeDivisibleByFive()
    {
        $this->assertTrue($this->multiple->isDivisible(5));
        $this->assertEquals('IT', $this->multiple->getReplacer());
    }

    public function testNotSholudBeDivisibleByFive()
    {
        $this->assertFalse($this->multiple->isDivisible(3));
    }
}
