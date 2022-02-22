<?php
    class base{
        function __construct()
        {
            echo "constructor<br>";
        }
        function hello(){
            echo "hello<br>";
        }
        function __destruct()
        {
            echo "destructor<br>";
        }
    }
    $obj=new base;
    $obj->hello();

?>