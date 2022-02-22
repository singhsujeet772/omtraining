<?php
    class Employee{
        public $name,$role,$salary;
    }
    class Manager extends Employee{
        public $ta=1000,$phone=1000,$total_salary;
        function __construct($n="Enter a valid name",$s=0)
        {
            echo "<h2>Employee : Manager </h2>";
            $this->name=$n;
            $this->salary=$s;
            $this->role="Manager";

            $this->total_salary=$s+$this->ta+$this->phone;
            echo "Employee name is ".$n."<br>";
            echo "Employee role is ".$this->role."<br>";
            if($this->total_salary==2000){
                echo "Enter a valid salary"."<br>";
            }else{
                echo "Employee salary is ".$this->total_salary."<br>";
            }
        }
    }
    class Clerk extends Employee{
        public $ta=0,$phone=1000,$total_salary;
        function __construct($n="Enter a valid name",$s=0)
        {
            echo "<h2>Employee : Clerk </h2>";
            $this->name=$n;
            $this->salary=$s;
            $this->role="Clerk";

            $this->total_salary=$s+$this->ta+$this->phone;
            echo "Employee name is ".$n."<br>";
            echo "Employee role is ".$this->role."<br>";
            if($this->total_salary==2000){
                echo "Enter a valid salary"."<br>";
            }else{
                echo "Employee salary is ".$this->total_salary."<br>";
            }
        }
    }
    $obj1=new Manager("Ram",10000);
    $obj1=new Clerk("mahesh",10000);
?>