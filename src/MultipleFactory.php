<?php

declare(strict_types=1);

namespace App;

class MultipleFactory
{
    /**
     * @var Multiples\MultipleInterface[]
     */
    private $multiples = [];

    public function __construct(iterable $multiples)
    {
        $this->multiples = $multiples;
    }

    public function replace(int $number): string
    {
        foreach ($this->multiples as $multiple) {
            if ($multiple->isMultiple($number)) {
                return $multiple->getReplacer();
            }
        }
        return (string)$number;
    }
}
