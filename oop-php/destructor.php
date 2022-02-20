<?php
    class A{
        private $name,$age;

        public function __construct($n="No name",$a=0)
        {
            echo "constructor called";
            $this->name=$n;
            $this->age-$a;
            echo "Employee name is ".$n." and age is ".$a."<br>";
        }

        public function __destruct()
        {
            echo "Destructor is called";
        }
    }
    $a=new A();
        
?>