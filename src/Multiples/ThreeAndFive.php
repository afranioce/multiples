<?php

namespace App\Multiples;

use App\Multiples\MultipleInterface;

class ThreeAndFive implements MultipleInterface
{
    public function isDivisible(int $number): bool
    {
        return !($number % 5) && !($number % 3);
    }

    public function getReplacer(): string
    {
        return 'Linianos';
    }
}
