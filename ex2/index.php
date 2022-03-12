<?php
/*
Испытание 2: Реализуйте функцию isPowerOfThree() которая определяет, является ли переданное число натуральной степенью тройки.
*/

function isPowerOfThree($num): bool
{
    for($i = 0; $i < $num; $i++) {
            if(3 ** ($i) == $num) {
                return true;
            }
    }
    return false;
}

$result = isPowerOfThree(27);
print_r($result);
