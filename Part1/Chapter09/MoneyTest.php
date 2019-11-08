<?php

namespace Part1\Chapter09;

use PHPUnit\Framework\TestCase;

class MoneyTest extends TestCase
{
    /**
     *
     */
    public function testMultiplication()
    {
        $five = Money::dollar(5);
        $this->assertEquals(Money::dollar(10), $five->times(2));
        $this->assertEquals(Money::dollar(15), $five->times(3));
    }

    /**
     *
     */
    public function testEquality()
    {
        $five = Money::dollar(5);
        $this->assertTrue($five->equals(Money::dollar(5)));
        $this->assertFalse($five->equals(Money::dollar(6)));

        $five = Money::franc(5);
        $this->assertTrue($five->equals(Money::franc(5)));
        $this->assertFalse($five->equals(Money::franc(6)));

        $dollar = Money::dollar(5);
        $franc = Money::franc(5);
        $this->assertFalse($dollar->equals($franc));
    }

    /**
     *
     */
    public function testFrancMultiplication()
    {
        $five = Money::franc(5);
        $this->assertEquals(Money::franc(10), $five->times(2));
        $this->assertEquals(Money::franc(15), $five->times(3));
    }

    /**
     *
     */
    public function testCurrency()
    {
        $this->assertEquals('USD', Money::dollar(1)->currency());
        $this->assertEquals('CHF', Money::franc(1)->currency());
    }
}
