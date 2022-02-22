<?php
    class base{
        public static $name="sujeet";
        static function show($m){
            echo $m;
        }
        public function __construct($n)
        {
            self::$name=$n;
            echo $n;
        }
    }
    class child extends base{
        function __construct($c)
        {
            parent::$name=$c;
            echo $c;
        }
    }
    echo base::$name;
    base::show("Vijay");
    $obj1=new base("Ram");

    $obj2=new child("yahoo baba");

?>