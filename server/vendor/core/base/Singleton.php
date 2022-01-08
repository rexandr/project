<?php

namespace vendor\core\base;

class Singleton
{
    private static $singletons = [];

    protected function __construct(){}

    protected function __clone(){}

    protected function __wakeup(){}

    public static function getSingleton($filePath = '')
    {
        $subclass = static::class;

        if (!isset(self::$singletons[$subclass]))
        {
            self::$singletons[$subclass] = new static($filePath);
        }
        echo '<pre>';
        print_r(self::$singletons);
        echo '</pre>';
        return self::$singletons[$subclass];
    }
}