<?php

/*
Испытание 2: Реализуйте функцию isPowerOfThree() которая определяет, является ли переданное число натуральной степенью
тройки.
*/

declare(strict_types=1);

namespace MyApp\Tasks;

class Ex2
{
    public function isPowerOfThree(int $num): bool
    {
        for ($i = 0; $i < $num; $i++) {
            if (3 ** $i === $num) {
                return true;
            }
        }
        return false;
    }
}
