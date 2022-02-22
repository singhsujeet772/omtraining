<?php
// require "first.php";
    function __autoload($class){
        require $class.".php";
    }
    $obj=new first;
    $obj1=new second;

?>