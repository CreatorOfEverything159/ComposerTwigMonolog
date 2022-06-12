<?php

use Monolog\Handler\StreamHandler;
use Monolog\Logger;

class InfoLogger
{
    private string $path;
    private string $name;
    private Logger $logger;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->path = join(DIRECTORY_SEPARATOR, [dirname(__DIR__), "logs", "logs.log"]);
        $this->logger = new Logger($this->name);
        $this->logger->pushHandler(new StreamHandler($this->path, Logger::INFO));
    }

    public function activate()
    {
        $this->logger->info('Пользователь перешел на страницу ' . $this->name . ' в ' . date('H:i:s d/m/Y'));
    }

    public function writeLogs() {
        echo '<pre>';
        if (is_file($this->path)) {
            foreach (array_reverse(file($this->path)) as $log) {
                echo $log;
            }
        } else {
            echo 'Пусто';
        }

        echo '<pre>';
    }
}