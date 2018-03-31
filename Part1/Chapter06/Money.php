<?php

namespace Part1\Chapter06;

class Money
{
    /**
     * @var int
     */
    protected $amount;

    /**
     * @param  Franc
     * @return bool
     */
    public function equals(object $object): bool
    {
        if ($object instanceof Money) {
            return $this->amount === $object->amount;
        }

        return false;
    }
}
