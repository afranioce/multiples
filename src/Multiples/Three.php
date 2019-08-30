<?php

namespace App\Multiples;

use App\Multiples\MultipleInterface;

class Three implements MultipleInterface
{
    public function isMultiple(int $number): bool
    {
        return !($number % 3);
    }

    public function getReplacer(): string
    {
        return 'Linio';
    }
}
