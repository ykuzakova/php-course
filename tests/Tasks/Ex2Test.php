<?php

namespace MyApp\Tests\Tasks;

use PHPUnit\Framework\TestCase;

class Ex2Test extends TestCase
{
    /**
     * @dataProvider isPowerOfThreeProvider
     */
    public function testIsPowerOfThree(int $num, int $expected): void
    {
        $ex2 = new MyApp\Tasks\Ex2();

        self::assertEquals($expected, $ex2->isPowerOfThree($num));
    }

    public function isPowerOfThreeProvider(): array
    {
        return [
            [3, 1],
            [9, 1],
            [10, 0],
        ];
    }
}
