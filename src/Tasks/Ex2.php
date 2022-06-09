<?php

/*
Испытание 2: Реализуйте функцию isPowerOfThree() которая определяет, является ли переданное число натуральной степенью
тройки.
*/

namespace MyApp\Tasks;

use MyApp\Logger\LoggerInterface;

class Ex2
{
    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function isPowerOfThree(int $num): bool
    {
        if ($num < 0) {
            $this->logger->err('Value < 0');
            return false;
        }

        for ($i = 0; $i < $num; $i++) {
            if (3 ** $i === $num) {
                return true;
            }
        }
        return false;
    }
}
