<?php
/*
Испытание 1: Реализуйте функцию binarySum, которая принимает на вход два бинарных числа
(в виде строк) и возвращает их сумму. Результат (вычисленная сумма) также
должен быть бинарным числом в виде строки.
*/
function binarySum(string $bin1, string $bin2): string
{
    $num1 = bindec($bin1);
    $num2 = bindec($bin2);
    $summa = $num1 + $num2;
    return decbin($summa);
}

$result = binarySum('1101', '101');
print_r($result);


