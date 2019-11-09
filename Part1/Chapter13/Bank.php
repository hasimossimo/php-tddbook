<?php

declare(strict_types=1);

namespace Part1\Chapter13;

class Bank
{
    /**
     * @param  Expression $source
     * @param  string $to
     * @return Money
     */
    public function reduce(Expression $source, string $to): Money
    {
        return $source->reduce($to);
    }
}
