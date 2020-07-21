<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Core\Converter;

class ConverterTest extends TestCase
{
    public function testAge()
    {
        $age = new Converter();
        $this->assertEquals(
            26.106849315068494,
            $age->convertAge(9529)
        );
        $this->assertIsFloat($age->convertAge(9529));
    }

    public function testAge2()
    {
        $age = new Converter();

        $this->expectException('Exception');
        $age->convertAge(36442314244);
    }

}