<?php

namespace MyApp\Tests\Tasks;

use PHPUnit\Framework\TestCase;

class Ex3Test extends TestCase
{
    public function testBinarySumWrongInputDta(): void
    {
        $ex3 = new \MyApp\Tasks\Ex3();

        $this->expectException(\UnexpectedValueException::class);
        $this->expectErrorMessage('Wrong input');
        $ex3->fib(-1);
    }
    /**
     * @dataProvider fibProvider
     */
    public function testFib(int $num, int $expected): void
    {
        $ex3 = new \MyApp\Tasks\Ex3();

        self::assertEquals($expected, $ex3->fib($num));
    }

    public function fibProvider(): array
    {
        return [
            [5, 5],
            [8, 21],
            [10, 55]
        ];
    }
}
