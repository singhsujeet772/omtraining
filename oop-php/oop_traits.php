<?php
    trait hello{
        public function sayhello(){
            echo "Hello Everyone";
        }
        public function sayhi(){
            echo "Hi Everyone";
        }
    }
    trait bye{
        public function saybye(){
            echo "Bye Everyone";
        }
    }
    class base{
        function __construct()
        {
            echo "Object created for class base";
        }
        use hello,bye;
    }
    $obj1=new base;
    $obj1->sayhi();
    $obj1->sayhello();
    $obj1->saybye();
?>