<?php
    class base{
        public function first(){
            echo "This is a first message";
            return $this;
        }
        public function second(){
            echo "This is a second message";
            return $this;
        }
        public function third(){
            echo "This is a third message";
        }
    }
    $test=new base;
    $test->first()->second()->third();

?>