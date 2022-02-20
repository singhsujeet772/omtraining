<?php
    class Employee{
        protected $name,$designation,$salary;

        public function __construct($n="No name",$d="Not designated",$s=0)
        {
            $this->name=$n;
            $this->designation=$d;
            $this->salary=$s;
            echo  "Employee name is ".$n."<br>";
            echo  "Employee designation is ".$d."<br>";
            echo  "Employee salary is ".$s."<br>";
            return $s;
        }
    }

    class Manager extends Employee{
        private $ttsalary,$hra=1000,$da=1000;
        
        public function totalSalary(){

            $this->ttsalary=$this->salary+$this->hra+$this->da;
            echo "Employee Total salary is ".$this->ttsalary."<br>";
        }
    }

    $emp1=new Manager("Anil kumar","Manager",10000);
    $emp1->totalSalary();
?>