<?php

declare(strict_types=1);

namespace App;

class PrinterBuilder
{
    /**
     * @var MultipleFactory
     */
    private $multipleFactory;
    private $replacedNumbers = [];

    public function __construct(MultipleFactory $multipleFactory)
    {
        $this->multipleFactory = $multipleFactory;
    }

    public function build(int $to = 100, int $from = 1): void
    {
        $numbers = range($from, $to);
        $this->replacedNumbers = $this->processRange($numbers);
    }

    public function show($glue = PHP_EOL): string
    {
        return implode($glue, $this->replacedNumbers);
    }

    private function processRange(array $range): array
    {
        return array_map(
            function ($number) {
                return $this->multipleFactory->replace($number);
            },
            $range
        );
    }
}
