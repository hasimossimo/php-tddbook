<?php

namespace Part1\Chapter07;

use PHPUnit\Framework\TestCase;

class MoneyTest extends TestCase
{
    /**
     *
     */
    public function testMultiplication()
    {
        $five = new Dollar(5);
        $this->assertEquals(new Dollar(10), $five->times(2));
        $this->assertEquals(new Dollar(15), $five->times(3));
    }

    /**
     *
     */
    public function testEquality()
    {
        $five = new Dollar(5);
        $this->assertTrue($five->equals(new Dollar(5)));
        $this->assertFalse($five->equals(new Dollar(6)));

        $five = new Franc(5);
        $this->assertTrue($five->equals(new Franc(5)));
        $this->assertFalse($five->equals(new Franc(6)));

        $dollar = new Dollar(5);
        $franc = new Franc(5);
        $this->assertFalse($dollar->equals($franc));
    }

    /**
     *
     */
    public function testFrancMultiplication()
    {
        $five = new Franc(5);
        $this->assertEquals(new Franc(10), $five->times(2));
        $this->assertEquals(new Franc(15), $five->times(3));
    }
}
