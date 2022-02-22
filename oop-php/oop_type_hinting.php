<?php
    // valid data types
    // int,float,string,bool,array,class/interface name,object

    function carModal(array $name){
        foreach($name as $value=>$key){
            echo $key.$value."<br>";
        }
    }
    $cars=["maruti"=>"suzuki","honda"=>"city","toyota"=>"fortuner",];
    carModal($cars);
    class hello{
        public function sayhello(){
            echo "Hello Everyone";
        }
    }
    class bye{
        public function saybye(){
            echo "Bye Everyone";
        }
    }
    function wow(hello $c){
        $c->sayhello();
    }
    $obj1=new hello;
    echo wow($obj1);

    class school{
        public function getnames(student $names){
            echo "<u>";
            foreach($names->Names()as $name){
                echo "<li>".$name."</li>";
            }
            echo "</u>";
        }
    }
    class student{
        public function Names(){
            return ["Ram","Gopal","Krisna"];
        }
    }
    $obj1=new school;
    $obj2=new student;

    $obj1->getnames($obj2);
?>