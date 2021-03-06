<?php
/*Испытание 7: Реализуйте функцию isHappy, проверяющую является ли номер счастливым (номер — всегда строка).
Функция должна возвращать true, если билет счастливый, или false, если нет.
*/

function isHappy(string $str): bool
{
    $len = strlen($str);
    if ($len % 2 !== 0) {
        return false;
    }
    $sum1 = 0;
    $middle = $len / 2;
    for ($i = 0; $i < $middle; $i++) {
        $sum1 += (int)$str[$i];
    }
    $sum2 = 0;
    for ($i = $middle; $i < $len; $i++) {
        $sum2 += (int)$str[$i];
    }
    if ($sum1 === $sum2) {
        return true;
    }
    return false;
}

var_dump(isHappy('11211'));
var_dump(isHappy('385916'));
var_dump(isHappy('231002'));
var_dump(isHappy('1222'));
var_dump(isHappy('054702'));
var_dump(isHappy('00'));


