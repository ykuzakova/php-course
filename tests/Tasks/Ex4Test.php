<?php

namespace MyApp\Tests\Tasks;

use PHPUnit\Framework\TestCase;

class Ex4Test extends TestCase
{
    /**
     * @dataProvider addDigitsProvider
     */
    public function testAddDigits(int $num, int $expected): void
    {
        $ex4 = new \MyApp\Tasks\Ex4();

        self::assertEquals($expected, $ex4->addDigits($num));
    }

    public function addDigitsProvider(): array
    {
        return [
            [0, 0],
            [1, 1],
            [9, 9],
            [10, 1],
            [test]
        ];
    }
}
