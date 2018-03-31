<?php

namespace Part1\Chapter07;

class Money
{
    /**
     * @var int
     */
    protected $amount;

    /**
     * @param  Money
     * @return bool
     */
    public function equals(object $money): bool
    {
        if ($money instanceof Money) {
            return $this->amount === $money->amount
                && get_class($this) === get_class($money);
        }

        return false;
    }
}
