<?php

declare(strict_types=1);

namespace Part1\Chapter10;

class Dollar extends Money
{
    /**
     * @param  int $amount
     * @param  string $currency
     */
    public function __construct(int $amount, string $currency)
    {
        parent::__construct($amount, $currency);
    }
}
