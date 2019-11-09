<?php

declare(strict_types=1);

namespace Part1\Chapter13;

interface Expression
{
    /**
     * @param  string $to
     */
    public function reduce(string $to);
}
