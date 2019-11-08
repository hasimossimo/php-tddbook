<?php

declare(strict_types=1);

namespace Part1\Chapter09;

class Franc extends Money
{
    /**
     * @param  int $amount
     * @param  string $currency
     */
    public function __construct(int $amount, string $currency)
    {
        parent::__construct($amount, $currency);
    }

    /**
     * @param  int
     * @return Money
     */
    public function times(int $multiplier): Money
    {
        return Money::franc($this->amount * $multiplier);
    }
}
