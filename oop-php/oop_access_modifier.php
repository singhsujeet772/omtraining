<?php

use Employee as GlobalEmployee;

class Employee{
        private $company_name;
        function __construct($cn)
        {
            $this->company_name=$cn;
            echo "<h1>$cn</h1>";
        }
        protected $name,$role,$salary;
        public $comments="This is a new company";

        function reviews(){
            echo $this->comments;
        } 
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
    $company_name=new Employee("HuTech manpower");
    $company_name->comments="This is a old company";
    $company_name->reviews();
    $obj1=new Manager("Ram",10000);
    $obj2=new Clerk("mahesh",10000);
    
?>