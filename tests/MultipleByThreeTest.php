<?php

namespace App\Tests;

use App\Multiples\Three;
use PHPUnit\Framework\TestCase;

class MultipleByThreeTest extends TestCase
{
    protected $multiple;

    protected function setUp(): void
    {
        $this->multiple = new Three();
    }

    public function testSholudBeDivisibleByThree()
    {
        $this->assertTrue($this->multiple->isMultiple(3));
        $this->assertEquals('Linio', $this->multiple->getReplacer());
    }

    public function testNotSholudBeDivisibleByThree()
    {
        $this->assertFalse($this->multiple->isMultiple(5));
    }
}
