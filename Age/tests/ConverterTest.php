<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Core\Converter;

class CalculatorTest extends TestCase
{
    public function testAge()
    {
        $age = new Converter();
        $this->assertEquals(
            27,
            $age->convertAge(9529)
        );
        $this->assertIsFloat($age->convertAge(9529));
    }

    public function testAge2()
    {
        $age = new Converter();

        $this->expectException('Exception');
        $age->convertAge(36500);
    }

}