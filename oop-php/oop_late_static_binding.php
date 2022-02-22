<?php
    class base{
        public static $name="Yahoo";
        public static function show(){
            echo self::$name;
            echo static::$name;
        }
    }
    class child extends base{
        public static $name="Baba";
    }
    child::show();
?>