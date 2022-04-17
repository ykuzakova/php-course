<?php

/*Испытание 7: Реализуйте функцию isHappy, проверяющую является ли номер счастливым (номер — всегда строка).
Функция должна возвращать true, если билет счастливый, или false, если нет.
*/
declare(strict_types=1);

namespace MyApp\Tasks;

class Ex7
{
    /**
     * @throws \Exception
     */
    public function isHappy(string $str): bool
    {
        $len = strlen($str);
        if ($len % 2 !== 0 || $len === 0) {
            throw new \Exception('wrong value!!!');
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
}
