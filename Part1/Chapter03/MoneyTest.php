<?php

namespace Part1\Chapter03;

use PHPUnit\Framework\TestCase;

class MoneyTest extends TestCase
{
    /**
     *
     */
    public function testMultiplication()
    {
        $five = new Dollar(5);
        $product = $five->times(2);
        $this->assertSame(10, $product->amount);

        $product = $five->times(3);
        $this->assertSame(15, $product->amount);
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
