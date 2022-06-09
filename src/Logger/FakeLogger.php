<?php

namespace MyApp\Logger;

class FakeLogger implements LoggerInterface
{
    public string $message;

    public function showMessages(): string
    {
        return $this->message;
    }

    public function info(string $msg): void
    {
    }

    public function err(string $msg): void
    {
        $this->message = $msg;
    }

    public function warn(string $msg): void
    {
    }

    public function log(string $msg): void
    {
    }
}
