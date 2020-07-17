<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Core\Calculator;

class CalculatorTest extends TestCase
{
    public function testSum()
    {
        $calc = new Calculator();

        $this->assertEquals(
            15,
            $calc->sumArray([1, 2, 3, 4, 5])
        );
        $this->assertIsInt($calc->sumArray([1, 2, 3, 4, 5]));
    }

    public function testMul()
    {
        $calc = new Calculator();

        $this->assertEquals(
            6,
            $calc->sumArray([1, 2, 3])
        );
        $this->assertIsInt($calc->sumArray([1, 2, 3]));
    }

    public function testMulArray()
    {
        $calc = new Calculator();

        $this->assertEquals(
            15,
            $calc->mulArrayInt([2, 3], 3)
        );
        $this->assertIsInt($calc->mulArrayInt([2, 3], 3));
    }


}