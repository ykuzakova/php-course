<?php
/*Испытание 3: Реализуйте функцию fib(), находящую положительные числа Фибоначчи. Аргументом функции является порядковый номер числа.
*/

//declare(strict_types=1);

namespace MyApp\Tasks;

class Ex3
{
    public function fib(int $num):int
    {
        if ($num < 0) {
            throw new \UnexpectedValueException('Wrong input');
        }
        if ($num <= 1) {
            return $num;
        } else {
            return $this->fib($num - 1) + $this->fib($num - 2);
        }

    }
}

