<?php

use childClass as GlobalChildClass;

interface parent1{
        function add($a,$b);
    }
    interface parent2{
        function sub($a,$b);
    }
    class childclass implements parent1, parent2{
        public function add($a,$b){
            echo $a+$b."<br>";
        }
        public function sub($a,$b){
            echo $a-$b."<br>";
        }
    }
    $obj1=new childclass;
    $obj1->add(10,15);
    $obj1->sub(20,15);
?>
