<?php

namespace Part1\Chapter12;

use PHPUnit\Framework\TestCase;

class MoneyTest extends TestCase
{
    /**
     *
     */
    public function testMultiplication()
    {
        $five = Money::dollar(5);
        $this->assertTrue(Money::dollar(10)->equals($five->times(2)));
        $this->assertTrue(Money::dollar(15)->equals($five->times(3)));
    }

    /**
     *
     */
    public function testEquality()
    {
        $five = Money::dollar(5);
        $this->assertTrue($five->equals(Money::dollar(5)));
        $this->assertFalse($five->equals(Money::dollar(6)));

        $dollar = Money::dollar(5);
        $franc = Money::franc(5);
        $this->assertFalse($dollar->equals($franc));
    }

    /**
     *
     */
    public function testCurrency()
    {
        $this->assertEquals('USD', Money::dollar(1)->currency());
        $this->assertEquals('CHF', Money::franc(1)->currency());
    }

    /**
     *
     */
    public function testSimpleAddition()
    {
        $five = Money::dollar(5);
        $sum = $five->plus($five);

        $bank = new Bank();
        $reduced = $bank->reduce($sum, 'USD');

        $this->assertTrue(Money::dollar(10)->equals($reduced));
    }
}
