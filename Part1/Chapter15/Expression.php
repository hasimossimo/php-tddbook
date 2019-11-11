<?php

declare(strict_types=1);

namespace Part1\Chapter15;

interface Expression
{
    /**
     * @param  Expression $addend
     */
    public function plus(Expression $addend);

    /**
     * @param  Bank $bank
     * @param  string $to
     * @return Money
     */
    public function reduce(Bank $bank, string $to): Money;
}
