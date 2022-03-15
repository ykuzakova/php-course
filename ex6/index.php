<?php
/*Испытание 6: Создайте функцию isPerfect, которая принимает число и возвращает true, если оно совершенное, и false — в ином случае.
*/
function isPerfect(int $num): bool
{
    $sum = 0;
    for ($i = 1; $i < $num; $i++) {
        if ($num % $i === 0) {
            $sum += $i;
        }
    }
    if ($num === $sum) {
        return true;
    }
    return false;
}
var_dump(isPerfect(28));
