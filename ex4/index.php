<?php
/*Испытание 4: Реализуйте функцию addDigits(), которая принимает на вход неотрицательное целое число и возвращает другое число,
полученное из первого следующим преобразованием: Итеративно сложите все входящие в него цифры до тех пор пока, не останется одна цифра.
*/
    function addDigits($num)
    {
        $text = strval($num);
        $sum = 0;
        for($i = 0; $i < strlen($text); $i++) {
            $sum = $sum + $text[$i];
        }
        $text = strval($sum);
        if(strlen($text) === 1){
            return $sum;
        }

        return addDigits($sum);
    }


