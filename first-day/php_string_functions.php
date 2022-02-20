<?php
    //addslashes and addcslashes

    //addcslashes returns backslashes in front of specified strings
    //addslashes function returns a string with backslash in front of specified characters

    $str = "Welcome to my humble Homepage!";
    echo "<br>";
    echo addcslashes($str,"A...Z")."<br>";
    echo addcslashes($str,"a...z")."<br>";
    echo addcslashes($str,"a...g")."<br>";

    $str = addslashes('What does "yolo" mean?');
    echo($str);
    echo "<br>";

    //chr

    //show ascii value

    for($i=0;$i<=100;$i++){
        echo $i." = ".chr($i)."<br>";
    }

?>