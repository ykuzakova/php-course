<?php

require __DIR__ . '/vendor/autoload.php';
error_reporting(0);
$config = require __DIR__ . '/config.php';

$logger = \MyApp\Logger\LoggerFactory::getInstance($config)->createLogger();

(new \MyApp\Tasks\Ex2($logger))->isPowerOfThree(-10);
