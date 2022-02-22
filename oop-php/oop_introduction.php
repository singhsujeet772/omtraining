<?php
    class calculation{
        public $a,$b,$c;
        function sum(){
            $this->c=$this->a+$this->b;
            return $this->c;
        }
        function sub(){
            $this->c=$this->a-$this->b;
            return $this->c;
        }
    }
    $obj1=new calculation;
    $obj1->a=20;
    $obj1->b=10;

    $obj2=new calculation;
    $obj2->a=45;
    $obj2->b=20;

    echo $obj1->sum()."<br>";
    echo $obj2->sub();
?>