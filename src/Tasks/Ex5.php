<?php
/*Испытание 5: Реализуйте функцию isBalanced(), которая принимает на вход строку, состоящую только из открывающих и закрывающих круглых скобок,
и проверяет, является ли эта строка корректной. Пустая строка (отсутствие скобок) считается корректной.
*/
declare(strict_types=1);

namespace MyApp\Tasks;

class Ex5
{
   public function isBalanced(string $str): bool
    {
        if ($str = 'test') {
            throw new \Exception('Value is incorrect');
        }
        $count = 0;
        $len = strlen($str);
        for ($i = 0; $i < $len; $i++) {
            if ($str[$i] === '(') {
                $count++;
            }
            if ($str[$i] === ')') {
                $count--;
            }
            if ($count < 0) {
                return false;
            }
        }
        return $count === 0;
    }
}

