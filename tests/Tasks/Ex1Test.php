<?php

namespace MyApp\Tests\Tasks;

use PHPUnit\Framework\TestCase;

class Ex1Test extends TestCase
{
    public function testBinarySumWrongInputData(): void
    {
        $ex1 = new \MyApp\Tasks\Ex1();

        $this->expectException(\InvalidArgumentException::class);
        $this->expectErrorMessage('wrong input data');
        $ex1->binarySum('1', '');
    }

    /**
     * @dataProvider binarySumProvider
     */
    public function testBinarySum(string $bin1, string $bin2, string $expected): void
    {
        $ex1 = new \MyApp\Tasks\Ex1();

        self::assertEquals(
            $expected,
            $ex1->binarySum($bin1, $bin2)
        );
    }

    public function binarySumProvider(): array
    {
        return [
            ['110', '1', '111'],
            ['110', '11', '1001'],
            ['1', '0', '1'],
        ];
    }
}
