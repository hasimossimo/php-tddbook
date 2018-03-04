<?php

namespace Part1\Chapter01;

class Dollar
{
    /**
     * @var int
     */
    public $amount;

    /**
     * @param  int $amount
     */
    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    /**
     * @param  int
     * @return void
     */
    public function times(int $multiplier): void
    {
        $this->amount *= $multiplier;
    }
}
