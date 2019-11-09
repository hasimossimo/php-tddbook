<?php

namespace Part1\Chapter12;

class Bank
{
    /**
     * @param  Expression $source
     * @param  string $to
     * @return Money
     */
    public function reduce(Expression $source, string $to): Money
    {
        return Money::dollar(10);
    }
}
