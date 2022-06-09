<?php

namespace MyApp\Logger;

class FileLogger extends AbstractLogger
{
    private string $filename;

    public function __construct(string $filename)
    {
        $this->filename = $filename;
    }

    public function log(string $msg): void
    {
        file_put_contents($this->filename, $msg . PHP_EOL, FILE_APPEND);
    }
}

