<?php

namespace App\Multiples;

interface MultipleInterface
{
    public function isMultiple(int $number): bool;
    public function getReplacer(): string;
}
