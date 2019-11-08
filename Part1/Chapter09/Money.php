<?php

declare(strict_types=1);

namespace Part1\Chapter09;

abstract class Money
{
    /**
     * @var int
     */
    protected $amount;

    /**
     * @var string
     */
    protected $currency;

    /**
     * @param  int $amount
     * @param  string $currency
     */
    public function __construct(int $amount, string $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    /**
     *
     */
    abstract public function times(int $multiplier): Money;

    /**
     * @return string
     */
    public function currency(): string
    {
        return $this->currency;
    }

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
        return new Dollar($amount, 'USD');
    }

    /**
     * @param  int $amount
     * @return Money
     */
    public static function franc(int $amount): Money
    {
        return new Franc($amount, 'CHF');
    }
}
