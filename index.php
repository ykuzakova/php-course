<?php

namespace MyApp\Tasks;

require_once 'src/Tasks/Ex1.php';
require_once 'src/Tasks/Ex3.php';
require_once 'src/Tasks/Ex4.php';
require_once 'src/Tasks/Ex5.php';
require_once 'src/Tasks/Ex6.php';
require_once 'src/Tasks/Ex7.php';
require_once 'src/Tasks/Ex8.php';

//$ex1 = new \MyApp\Tasks\Ex1();
//
//try {
//    echo $ex1->binarySum('0', '111');
//} catch (\InvalidArgumentException $e) {
//    echo $e->getMessage();
//}

//$ex3 = new \MyApp\Tasks\Ex3();
//echo $ex3->fib(-1);
//try {
//    echo $ex3->fib('-3');
//} catch (\InvalidArgumentException $e) {
//    echo $e->getMessage();
//}
//
//$ex4 = new \MyApp\Tasks\Ex4();
//try {
//    echo $ex4->addDigits('125');
//} catch (\Exception $e) {
//    echo $e->getMessage();
//}
//
//$ex5 = new \MyApp\Tasks\Ex5();
//echo $ex5->isBalanced('test');
//try {
//    echo $ex5->isBalanced('()()()');
//} catch (\Exception $e) {
//    echo $e->getMessage();
//}
//
//$ex6 = new \MyApp\Tasks\Ex6();
//echo $ex6->isPerfect('28');
//
//$ex7 = new \MyApp\Tasks\Ex7();
//echo $ex7->isHappy('11211');
//
$ex8 = new \MyApp\Tasks\Ex8();
echo $ex8->fizzBuzz(10, 15);

//exit;
