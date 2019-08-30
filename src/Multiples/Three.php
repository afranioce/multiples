<?php

namespace App\Multiples;

use App\Multiples\MultipleInterface;

class Three implements MultipleInterface
{
    public function isDivisible(int $number): bool
    {
        return !($number % 3);
    }

    public function getReplacer(): string
    {
        return 'Linio';
    }
}
