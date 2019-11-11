<?php

declare(strict_types=1);

namespace Part1\Chapter14;

class Money implements Expression
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
    public function times(int $multiplier): Money
    {
        return new Money($this->amount * $multiplier, $this->currency);
    }

    /**
     * @return int
     */
    public function amount(): int
    {
        return $this->amount;
    }

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
                && $this->currency() === $money->currency();
        }

        return false;
    }

    /**
     * @param  Money $addend
     * @return Sum
     */
    public function plus(Money $addend): Sum
    {
        return new Sum($this, $addend);
    }

    /**
     * @param  Bank $bank
     * @param  string $to
     * @return Money
     */
    public function reduce(Bank $bank, string $to): Money
    {
        $rate = $bank->rate($this->currency, $to);
        return new Money($this->amount / $rate, $to);
    }

    /**
     * @param  int $amount
     * @return Money
     */
    public static function dollar(int $amount): Money
    {
        return new Money($amount, 'USD');
    }

    /**
     * @param  int $amount
     * @return Money
     */
    public static function franc(int $amount): Money
    {
        return new Money($amount, 'CHF');
    }
}
