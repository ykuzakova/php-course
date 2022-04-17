<?php

namespace MyApp\Tests\Tasks;

use PHPUnit\Framework\TestCase;

class Ex5Test extends TestCase
{
    /**
     * @dataProvider isBalancedProvider
     */
    public function testIsBalanced(bool $expected, string $str): void
    {
        $ex5 = new \MyApp\Tasks\Ex5();

        self::assertEquals($expected, $ex5->isBalanced($str));
    }

    public function isBalancedProvider(): array
    {
        return [
            [true, '(())'],
            [true, '()'],
            [false, '((())'],
            [false, '(()))'],
            [true, ''],
            [false, '))(('],
        ];
    }
}
