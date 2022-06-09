<?php

namespace MyApp\Logger;

abstract class AbstractLogger implements LoggerInterface
{
    abstract public function log(string $msg): void;

    public function info(string $msg): void
    {
        $this->log('[INFO] ' . $msg);
    }

    public function err(string $msg): void
    {
        $this->log('[ERR] ' . $msg);
    }

    public function warn(string $msg): void
    {
        $this->log('[WARN] ' . $msg);
    }
}
