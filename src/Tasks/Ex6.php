<?php
/*Испытание 6: Создайте функцию isPerfect, которая принимает число и возвращает true, если оно совершенное, и false — в ином случае.
*/
declare(strict_types=1);

namespace MyApp\Tasks;

class Ex6
{
    public function isPerfect(int $num): bool
    {
        if ($num < 0) {
            throw new \UnexpectedValueException('Wrong input');
        }
        $sum = 0;
        for ($i = 1; $i < $num; $i++) {
            if ($num % $i === 0) {
                $sum += $i;
            }
        }
        return $num === $sum && $sum !== 0;

    }
}

