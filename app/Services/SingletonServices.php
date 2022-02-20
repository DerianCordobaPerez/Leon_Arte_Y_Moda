<?php

namespace App\Services;

trait SingletonServices
{
    protected function __construct() {}
    protected function __clone() {}
    protected function __wakeup() {}

    protected static mixed $instance = null;

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new static();
        }

        return self::$instance;
    }
}
