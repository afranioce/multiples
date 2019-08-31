<?php

declare(strict_types=1);

namespace App\Multiples;

interface MultipleInterface
{
    public function isMultiple(int $number): bool;
    public function getReplacer(): string;
}
