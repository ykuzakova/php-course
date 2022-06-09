<?php

namespace MyApp\Logger;

class StdoutLogger extends AbstractLogger
{
    public function log(string $msg): void
    {
        echo $msg, PHP_EOL;
    }
}
