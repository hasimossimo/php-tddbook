<?php

declare(strict_types=1);

namespace Part1\Chapter08;

abstract class Money
{
    /**
     * @var int
     */
    protected $amount;

    /**
     *
     */
    abstract public function times(int $multiplier);

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

    /**
     * @param  int $amount
     * @return Money
     */
    public static function dollar(int $amount): Money
    {
        return new Dollar($amount);
    }

    /**
     * @param  int $amount
     * @return Money
     */
    public static function franc(int $amount): Money
    {
        return new Franc($amount);
    }
}
