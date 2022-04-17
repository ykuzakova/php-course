<?php

namespace MyApp\Tests\Tasks;

use PHPUnit\Framework\TestCase;

class Ex7Test extends TestCase
{
    /**
     * @dataProvider isHappyWrongProvider
     * @throws \Exception
     */
    public function testIsHappyException(string $str, string $exception): void
    {
        $ex7 = new \MyApp\Tasks\Ex7();

        //$this->expectErrorMessage('wrong value!!!');
        $this->expectException($exception);
        $ex7->isHappy($str);
    }

    public function isHappyWrongProvider(): array
    {
        return [
            ['', \Exception::class]
        ];
    }

    /**
     * @dataProvider isHappyProvider
     * @throws \Exception
     */
    public function testIsHappy(bool $expected, string $str): void
    {
        $ex7 = new \MyApp\Tasks\Ex7();

        self::assertEquals($expected, $ex7->isHappy($str));
    }

    public function isHappyProvider(): array
    {
        return [
            [true, '101101'],
            [false, '000111'],
            [false, '10'],
            [true, '00'],
            [false, '0']
        ];
    }
}
