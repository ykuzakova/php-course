<?php

namespace MyApp\Tests\Tasks;

use PHPUnit\Framework\TestCase;

class Ex6Test extends TestCase
{
    /**
     * @dataProvider isPerfectWrongProvider
     */
    public function testIsPerfectException(int $num, string $exception): void
    {
        $ex6 = new \MyApp\Tasks\Ex6();
        $this->expectException($exception);
        $ex6->isPerfect($num);
    }

    public function isPerfectWrongProvider(): array
    {
        return [
            [-1, \Exception::class],
        ];
    }

    /**
     * @dataProvider isPerfectProvider
     */
    public function testIsPerfect(bool $expected, int $num): void
    {
        $ex6 = new \MyApp\Tasks\Ex6();

        self::assertEquals($expected, $ex6->isPerfect($num));
    }

    public function isPerfectProvider(): array
    {
        return [
            [true, 6],
            [true, 496],
            [true, 8128],
            [false, 3],
            [false, 0],
        ];
    }
}
