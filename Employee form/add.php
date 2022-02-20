<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body{
            background-image: url("images/bgimage.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
        .container{ 
            background-color: #ffbd17;
        }
        .addform{
            background-color: tomato;
            border-radius: 5px;
        }
    </style>
  </head>
  <body>
      <?php
        include "header.php";
      ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Enter Employee Records</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 addform">
                <form action="savedata.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="">Id Number</label>
                  <input type="text" name="sno" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="form-group">
                  <label for="">First name</label>
                  <input type="text" name="fname" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="form-group">
                  <label for="">Last name</label>
                  <input type="text" name="lname" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="form-group">
                  <label for="">Email</label>
                  <input type="email" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="form-group">
                  <label for="">Phone Number</label>
                  <input type="text" name="phone" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <label for="">Gender</label>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="radio1" name="gen" value="F" checked>
                    <label class="form-check-label" for="radio1">Female</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="radio2" name="gen" value="M">
                    <label class="form-check-label" for="radio2">Male</label>
                </div>
                <br><br>
                Select image to upload:
                <input type="file" name="fileToUpload" id="fileToUpload">
                <br><br>
                <br><br>
                <div class="form-group">
                  <label for="">About Yourself</label>
                  <textarea class="form-control" name="about" id="" rows="6"></textarea>
                </div>
                <div class="form-group">
                  <label for="">Address</label>
                  <textarea class="form-control" name="address" id="" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Country</label>
                    <?php
                        include "config.php";

                        $sql1="SELECT * from  bird_countries";
                        
                        $res1=mysqli_query($conn,$sql1)or die("query failed");
                        if(mysqli_num_rows($res1)>0){
                            echo '<select class="custom-select" name="country" id="Country">';
                            echo '<option selected>Select one</option>';
                            while($row1=mysqli_fetch_assoc($res1)){
                                echo "<option value='{$row1['id']}'>{$row1['name']}</option>";
                            }
                            echo '</select>';
                        }
                    ?>
                    <!-- <select class="custom-select" name="" id="Country">
                        <option selected>Select one</option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                    </select> -->
                </div>
                <div class="form-group">
                    <label for="">State</label>
                    <?php
                        /*include "config.php";

                        $sql2="SELECT * FROM `bird_states`";
                        //JOIN `bird_countries` ON `bird_states`.`countryId`=`bird_countries`.`id`";
                        
                        
                        $res2=mysqli_query($conn,$sql2)or die("query failed");
                        if(mysqli_num_rows($res2)>0){
                            echo '<select class="custom-select" name="" id="">';
                            echo '<option selected>Select one</option>';
                            while($row2=mysqli_fetch_assoc($res2)){
                                // if($row1['id']==$row2['countryId']){
                                //     $select="selected";
                                // }else{
                                //     $select="";
                                // }
                                echo "<option value='{$row2['id']}'>{$row2['statename']}</option>";
                            }
                            echo '</select>';
                        }*/
                    ?>
                    <select class="custom-select" name="state" id="State">
                        <!-- <option selected>Select one</option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option> -->
                    </select>
                </div>
                <div class="form-group">
                    <label for="">City</label>
                    <?php
                        /*include "config.php";

                        $sql3="SELECT * FROM `bird_cities`";
                              
                        $res3=mysqli_query($conn,$sql3)or die("query failed");
                        if(mysqli_num_rows($res3)>0){
                            echo '<select class="custom-select" name="" id="">';
                            echo '<option selected>Select one</option>';
                            while($row3=mysqli_fetch_assoc($res3)){
                                // if($row1['id']==$row2['countryId']){
                                //     $select="selected";
                                // }else{
                                //     $select="";
                                // }
                                echo "<option value='{$row3['id']}'>{$row3['cityName']}</option>";
                            }
                            echo '</select>';
                        }*/
                    ?>
                    <select class="custom-select" name="city" id="City">
                        <!-- <option selected>Select one</option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option> -->
                    </select>
                </div>
                <input type="submit" name="save" id="" value="Submit" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
    <?php
        include "footer.php";
    ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $("#Country").on("change",function(){
                var id = $(this).val();
                // alert(id);
                $.ajax({
                    url : "ajax.php",
                    type : "post",
                    data : {id:id},
                    success : function(data){
                        $("#State").html(data);
                    }
                })
            })
            $("#State").on("change",function(){
                var cid = $(this).val();
                // alert(cid);
                $.ajax({
                    url : "ajax.php",
                    type : "post",
                    data : {cid:cid},
                    success : function(data){
                        $("#City").html(data);
                    }
                })
            })
        })
    </script>
  </body>
</html>