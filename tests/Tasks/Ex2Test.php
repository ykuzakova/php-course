<?php

namespace MyApp\tests\Tasks;

use PHPUnit\Framework\TestCase;
use MyApp\Logger\FakeLogger;

class Ex2Test extends TestCase
{
    private FakeLogger $logger;

    public function setUp(): void
    {
        parent::setUp();
        $this->logger = new FakeLogger();
    }

    public function testIsPowerIfThreeErrorLog(): void
    {
        $ex2 = new \MyApp\Tasks\Ex2($this->logger);

        $ex2->isPowerOfThree(-10);
        self::assertEquals(
            'Value < 0',
            $this->logger->showMessages()
        );
    }
    /**
     * @dataProvider isPowerOfThreeProvider
     */
    public function testIsPowerOfThree(int $num, bool $expected): void
    {
        $ex2 = new \MyApp\Tasks\Ex2($this->logger);

        self::assertEquals($expected, $ex2->isPowerOfThree($num));
    }

    public function isPowerOfThreeProvider(): array
    {
        return [
            [3, true],
            [9, true],
            [10, false],
        ];
    }
}
