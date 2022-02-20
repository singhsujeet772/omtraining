<?php
    
    include "config.php";

    $id=$_GET['did'];
    
    $sql="DELETE from emp_details where eid={$id}";

    if(mysqli_query($conn,$sql)){
        header("location:index.php");
    }else{
        echo "not deleted successfully";
    }

    mysqli_close($conn);
?>