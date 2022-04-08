<?php

/*Испытание 4: Реализуйте функцию addDigits(), которая принимает на вход неотрицательное целое число и возвращает другое
 число, полученное из первого следующим преобразованием: Итеративно сложите все входящие в него цифры до тех пор пока,
 не останется одна цифра.
*/
declare(strict_types=1);

namespace MyApp\Tasks;

class Ex4
{
    /**
     * @throws \Exception
     */
    public function addDigits(int $num): int
    {
        if ($num < 0) {
                throw new \Exception('Not a correct value');
        }
            $text = (string)$num;
            $sum = 0;
            $len = strlen($text);
        for ($i = 0; $i < $len; $i++) {
                $sum = $sum + (int)$text[$i];
        }
            $text = (string)$sum;
        if (strlen($text) === 1) {
                return $sum;
        }
        return addDigits($sum);
    }
}
