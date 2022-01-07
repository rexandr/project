<?php

namespace vendor\core\base;

class Singleton
{
    private static $singletons = [];

    protected function __construct(){}

    protected function __clone(){}

    protected function __wakeup(){}

    public static function getSingleton()
    {
        $subclass = static::class;

        if (!isset(self::$singletons[$subclass]))
        {
            self::$singletons[$subclass] = new static;
        }
        
        return self::$singletons[$subclass];
    }
}