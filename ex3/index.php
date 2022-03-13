<?php
/*Испытание 3: Реализуйте функцию fib(), находящую положительные числа Фибоначчи. Аргументом функции является порядковый номер числа.
*/

    function fib($num)
{
        if($num <= 1) {
            return $num;
        }
        else {
            return fib($num - 1) + fib($num - 2);
        }
}

    $result = fib(10);
    print_r($result);
