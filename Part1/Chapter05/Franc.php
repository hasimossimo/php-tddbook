<?php

namespace Part1\Chapter05;

class Franc
{
    /**
     * @var int
     */
    private $amount;

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

    /**
     * @param  Franc
     * @return bool
     */
    public function equals(object $object): bool
    {
        if ($object instanceof Franc) {
            return $this->amount === $object->amount;
        }

        return false;
    }
}
