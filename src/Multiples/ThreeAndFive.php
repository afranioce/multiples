<?php

namespace App\Multiples;

use App\Multiples\MultipleInterface;

class ThreeAndFive implements MultipleInterface
{
    public function isMultiple(int $number): bool
    {
        return !($number % 5) && !($number % 3);
    }

    public function getReplacer(): string
    {
        return 'Linianos';
    }
}
