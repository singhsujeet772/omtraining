<?php

    require "first.php";
    require "second.php";

    function wow(){
        echo "wow from first page<br>";
    }
    use test\command\version as test;
    
    $obj=new pro\product;
    $obj1=new test\product;

    $obj->wow();