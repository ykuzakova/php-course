<?php

/*Испытание 8: Реализуйте функцию fizzBuzz(), которая выводит на экран числа в диапазоне от $begin до $end. При этом:

Если число делится без остатка на 3, то вместо него выводится слово Fizz
Если число делится без остатка на 5, то вместо него выводится слово Buzz
Если число делится без остатка и на 3, и на 5, то вместо числа выводится слово FizzBuzz
В остальных случаях выводится само число
*/
declare(strict_types=1);

namespace MyApp\Tasks;

class Ex8
{
    public function fizzBuzz(int $begin, int $end): void
    {
        print_r($this->fizzBuzzGen($begin, $end));
    }

    public function fizzBuzzGen(int $begin, int $end): string
    {
        if ($begin > $end) {
            return '';
        }
        $result = '';

        for ($i = $begin; $i <= $end; $i++) {
            if (($i % 3 === 0) && ($i % 5 === 0)) {
                $result .= "FizzBuzz ";
            } elseif ($i % 3 === 0) {
                $result .= "Fizz ";
            } elseif ($i % 5 === 0) {
                $result .= "Buzz ";
            } else {
                $result .= "{$i} ";
            }
        }
        return $result;
    }
}
