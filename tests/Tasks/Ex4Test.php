<?php

namespace MyApp\Tests\Tasks;

use PHPUnit\Framework\TestCase;

class Ex4Test extends TestCase
{
    /**
     * @throws \Exception
     */
    public function testAddDigitsException(): void
    {
        $ex4 = new \MyApp\Tasks\Ex4();

        $this->expectException(\Exception::class);
        $this->expectErrorMessage('Not a correct value');
        $ex4->addDigits(-1);
    }

    /**
     * @dataProvider AddDigitsProvider
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
            [10, 1]
        ];
    }
}
