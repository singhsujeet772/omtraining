<?php
    class A{
        private $name,$age;

        public function __construct($n="No name",$a=0)
        {
            $this->name=$n;
            $this->age-$a;
            echo "Employee name is ".$n." and age is ".$a."<br>";
        }
    }

    $e1=new A("Mahesh",45);
    
?>