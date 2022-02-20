<?php
    $n=5;
    for($i=1;$i<=5;$i++){

        for($j=1;$j<=$i;$j++){
            echo "*";
        }
        echo "<br>";

    }

    echo "<hr>";

    for($i=1;$i<=5;$i++){

        for($j=5;$j>=$i;$j--){
            echo "*";
        }
        echo "<br>";

    }

    echo "<hr>";

    for($i=1;$i<=5;$i++){

        for($j=1;$j<=$i;$j++){
            echo "*";
        }
        echo "<br>";

    }
    for($i=1;$i<=5;$i++){

        for($j=4;$j>=$i;$j--){
            echo "*";
        }
        echo "<br>";

    }

    echo "<hr>";

    $numbers = 5;
    for ($i = 0; $i <= 5; $i++) {
     
    for ($k = 0; $k < $numbers; $k++) {
        echo "&nbsp;";
    }
    for ($j = 0; $j < 2 * $i - 1; $j++) {
        echo "*";
    }
     
    $numbers--;
        echo "<br/>";
    }

    for($i=1;$i<=5;$i++){
        for($j=4;$j>=$i;$j--){
            echo " ";
        }
        for($k=1;$k<=$i;$k++){
            echo " *";
        } 
        echo "<br>";
    }
    for($i=1;$i<=5;$i++){
        for($j=5;$j>=$i;$j--){
            echo " ";
        }
        for($k=1;$k<=$i;$k++){
            echo " *";
        }
        echo "<br>";
    }
    for($i=1;$i<=4;$i++){
        for($j=4;$j>=$i;$j--){
            if($j>$i){
                echo " ";
            }else{
                echo "*";
            }
        }
        echo "<br>";
    }
?>