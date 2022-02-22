<?php
    trait hello{
        public function sayhello(){
            echo "Hello everyone from trait hello<br>";
        }
    }
    trait bye{
        public function sayhello(){
            echo "Hello everyone from trait bye<br>";
        }
    }
    class base{
        use  hello{
            hello::sayhello as public;
        }
        public function sayhello(){
            echo "Hello everyone from base class<br>";
        }    
    }
    class child extends base{
        use hello,bye{
            hello::sayhello insteadOf bye;
        }
    }

    $obj1=new child;
    $obj1->sayhello();

    $obj2=new base;
    $obj2->sayhello();
?>
