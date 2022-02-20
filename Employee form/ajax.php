<?php
    include "config.php";

    if(isset($_POST['id'])){
        $id=$_POST['id'];

        $sql="SELECT * from  bird_states where countryId=$id";
        $res=mysqli_query($conn,$sql)or die('query failed');
        while($row=mysqli_fetch_assoc($res)){
            $id=$row['id'];
            $state=$row['statename'];
            echo "<option value='$id'>$state</option>";
        }
    }
    // include "config.php";

    if(isset($_POST['cid'])){
        $cid=$_POST['cid'];

        $sql="SELECT * from  bird_cities where state_id=$cid";
        $res=mysqli_query($conn,$sql)or die('query failed');
        while($row=mysqli_fetch_assoc($res)){
            $cid=$row['id'];
            $city=$row['cityName'];
            echo "<option value='$cid'>$city</option>";
        }
    }
    
?>