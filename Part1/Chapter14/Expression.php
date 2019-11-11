<?php

declare(strict_types=1);

namespace Part1\Chapter14;

interface Expression
{
    /**
     * @param  Bank $bank
     * @param  string $to
     */
    public function reduce(Bank $bank, string $to);
}
