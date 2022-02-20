<?php
    include "config.php";

    $filename;
    if(isset($_FILES['fileToUpload'])){
        // echo "<pre>";
        // print_r($_FILES['fileToUpload']);
        $filename=$_FILES['fileToUpload']['name'];
        move_uploaded_file($_FILES['fileToUpload']['tmp_name'],"images/".$_FILES['fileToUpload']['name']);
      }

    $sno=$_POST['sno'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $gen=$_POST['gen'];
    $about=$_POST['about'];
    $address=$_POST['address'];
    $country=$_POST['country'];
    $state=$_POST['state'];
    $city=$_POST['city'];

    $sql="INSERT into emp_details (sno,fname,lname,email,phone,gender,profilepic,about,address,country,state,city) values ({$sno},'{$fname}','{$lname}','{$email}','{$phone}','{$gen}','{$filename}','{$about}','{$address}',{$country},{$state},{$city})";
    

    if(mysqli_query($conn,$sql)){
        header("location:index.php");
    }else{
        echo "No inserted data";
    }


?>