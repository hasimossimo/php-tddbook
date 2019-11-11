<?php

declare(strict_types=1);

namespace Part1\Chapter16;

class Pair
{
    /**
     * @var string
     */
    private $from;

    /**
     * @var string
     */
    private $to;

    /**
     * @param  string $from
     * @param  string $to
     */
    public function __construct(string $from, string $to)
    {
        $this->from = $from;
        $this->to = $to;
    }

    /**
     * @param  object $object
     * @return bool
     */
    public function equals(object $pair): bool
    {
        if (!$pair instanceof Pair) {
            return false;
        }

        return $this->from === $pair->from() && $this->to === $pair->to();
    }

    /**
     * @return int
     */
    public function hashCode(): int
    {
        return 0;
    }

    /**
     * @return string
     */
    public function from(): string
    {
        return $this->from;
    }

    /**
     * @return string
     */
    public function to(): string
    {
        return $this->to;
    }
}
