<?php

namespace Part1\Chapter07;

class Franc extends Money
{
    /**
     * @param  int $amount
     */
    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    /**
     * @param  int
     * @return Franc
     */
    public function times(int $multiplier): Franc
    {
        return new Franc($this->amount * $multiplier);
    }
}
