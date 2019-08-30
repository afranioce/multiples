<?php

namespace App\Multiples;

interface MultipleInterface
{
    public function isDivisible(int $number): bool;
    public function getReplacer(): string;
}
