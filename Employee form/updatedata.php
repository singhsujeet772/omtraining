<?php
    include "config.php";

    $filename;
    if(isset($_FILES['fileToUpload'])){
        // echo "<pre>";
        // print_r($_FILES['fileToUpload']);
        $filename=$_FILES['fileToUpload']['name'];
        move_uploaded_file($_FILES['fileToUpload']['tmp_name'],"images/".$_FILES['fileToUpload']['name']);
      }

    $id=$_POST['id'];
    $sno=$_POST['sno'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $gender=$_POST['gen'];
    $about=$_POST['about'];
    $address=$_POST['address'];
    $country=$_POST['country'];
    $state=$_POST['state'];
    $city=$_POST['city'];

    $sql="UPDATE emp_details set sno=$sno, fname='$fname', lname='$lname', email='$email', phone='$phone', gender='$gender', profilepic='$filename', about='$about', address='$address', country=$country, state=$state, city=$city where eid=$id";

    if(mysqli_query($conn,$sql)){
        header("location:index.php");
    }else{
        echo "No inserted data";
    }


?>