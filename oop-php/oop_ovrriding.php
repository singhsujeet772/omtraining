<?php
    class Base{
        public $name="Parent";

        public function calc($a,$b)
        {
            return $a*$b;
        }
    }
    class child extends Base{
        public $name="Child";

        public function calc($a,$b)
        {
            return $a+$b;
        }
    }
    $obj1=new Base(10,5);
    echo $obj1->name;
    echo $obj1->calc(10,5);
    $obj2=new Child(140,5);
    echo $obj2->name;
    echo $obj2->calc(20,40);
?>