<?php
    //array_combine

    //the array_combine() function creates an array by one array keys and other array values

    $fname=array("Peter","Ben","Joe");
    $age=array("35","37","43");

    print_r(array_combine($fname,$age));
    echo "<br>";

    //array_merge and array_merge_recursive()

    //Both functions two or more array but array_merge_recursive maintains the key value of same name

    $a1=array("red","green");
    $a2=array("blue","yellow");

    print_r(array_merge($a1,$a2));
    echo "<br>";

    $a1=array("a"=>"red","b"=>"green");
    $a2=array("c"=>"blue","b"=>"yellow");

    print_r(array_merge($a1,$a2));
    echo "<br>";

    //array_merge_recursive example
    $a1=array("a"=>"red","b"=>"green");
    $a2=array("c"=>"blue","b"=>"yellow");

    print_r(array_merge_recursive($a1,$a2));
    echo "<br>";

    //array_shift() and array_unshift()

    //To remove or add in start of an array

    $a=array("a"=>"red","b"=>"green","c"=>"blue");
    // print_r(array_shift($a));

    $b=array_shift($a);

    print_r($b);
    echo "<br>";
    print_r($a);
    echo "<br>";

    $a=array("a"=>"red","b"=>"green");
    array_unshift($a,"Orange","Purple");
    print_r($a);
    echo "<br>";

    //array_map()

    //This function sends every value of an array to user defined function and gives value according to user made function

    function myFunction($v){
        return ($v*$v);
    }

    $a=array(1,2,3,4,5);
    print_r(array_map("myFunction",$a));
    echo "<br>";

    function mapFunction($v){
        if($v==="Dog"){
            return "Tiger";
        }
        return $v;
    }

    $a=array("Horse","Dog","Cat");
    print_r(array_map("mapFunction",$a));
    echo "<br>";

    //array_pop() and array_push()

    //These functions remove and add values in the last of ansarray

    $a=array("red","green","blue");
    array_pop($a);
    print_r($a);
    echo "<br>";

    $a=array("red","green");
    array_push($a,"Orange","Purple");
    print_r($a);

?>