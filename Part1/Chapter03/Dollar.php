<?php

namespace Part1\Chapter03;

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
     * @return Dollar
     */
    public function times(int $multiplier): Dollar
    {
        return new Dollar($this->amount * $multiplier);
    }

    /**
     * @param  Dollar
     * @return bool
     */
    public function equals(object $object): bool
    {
        if ($object instanceof Dollar) {
            return $this->amount === $object->amount;
        }

        return false;
    }
}
