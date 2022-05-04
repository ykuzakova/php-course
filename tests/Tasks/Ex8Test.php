<?php

namespace MyApp\Tests\Tasks;

use PHPUnit\Framework\TestCase;

class Ex8Test extends TestCase
{
    /**
     * @dataProvider fizzBuzzProvider
     */
    public function testFizzBuzzGen(string $expected, int $begin, int $end): void
    {
        $ex8 = new \MyApp\Tasks\Ex8();

        self::assertEquals($expected, $ex8->fizzBuzzGen($begin, $end));
    }

    public function fizzBuzzProvider(): array
    {
        return [
            ['11 Fizz 13 14 FizzBuzz 16 17 Fizz 19 Buzz ', 11, 20],
            ['', 0, -10],
            ['1 ', 1, 1]
        ];
    }
}
