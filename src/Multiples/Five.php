<?php

namespace App\Multiples;

use App\Multiples\MultipleInterface;

class Five implements MultipleInterface
{
    public function isDivisible(int $number): bool
    {
        return !($number % 5);
    }

    public function getReplacer(): string
    {
        return 'IT';
    }
}
