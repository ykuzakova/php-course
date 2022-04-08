<?php

/*
Испытание 1: Реализуйте функцию binarySum, которая принимает на вход два бинарных числа
(в виде строк) и возвращает их сумму. Результат (вычисленная сумма) также
должен быть бинарным числом в виде строки.
*/

declare(strict_types=1);

namespace MyApp\Tasks;

class Ex1
{
    public function binarySum(string $bin1, string $bin2): string
    {
        if ('' === $bin1 || '' === $bin2) {
            throw new \InvalidArgumentException('wrong input data');
        }
        return decbin(bindec($bin1) + bindec($bin2));
    }
}
