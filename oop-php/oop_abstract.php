<?php
    abstract class parentclass{
        public $name;

        abstract protected function calc($a,$b);
    }
    class childClass extends parentclass{
        public function calc($a,$b){
            echo $a+$b;
        }
    }
    $obj=new childClass;
    $obj->calc(10,6);
?>