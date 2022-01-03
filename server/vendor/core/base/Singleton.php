<?php

namespace vendor\core\base;

class Singleton
{
//    private static $singles = [];
//
//    protected function __construct() {}
//    protected function __clone() {}
//    protected function __wakeup() {}
//
//    public static function getSingleton()
//    {
//        $subClass = static::class;
//        if (!isset(self::$singles[$subClass]))
//        {
//            self::$singles[$subClass] = new static();
//        }
//        echo '<pre>';
//        print_r(self::$singles);
//        echo '</pre>';
//        echo '<pre>';
//        print_r('subclass'.$subClass);
//        echo '</pre>';
//
//
//        return self::$singles[$subClass];
//    }


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