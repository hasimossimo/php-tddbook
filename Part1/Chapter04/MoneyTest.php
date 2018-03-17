<?php

namespace Part1\Chapter04;

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
    }
}
