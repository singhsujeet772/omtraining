<?php
    include "state.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <h1 class="text-center">Employee Form</h1>
      <div class="container">
        <form action='<?php $_SERVER['PHP_SELF']; ?>' method="POST" enctype="multipart/form-data">
            <div class="form-group">
            <label for="">First Name</label>
                <input type="text" name="fname" id="" class="form-control" placeholder="First Name" aria-describedby="helpId">
            </div>
            <div class="form-group">
            <label for="">Last Name</label>
                <input type="text" name="lname" id="" class="form-control" placeholder="Last Name" aria-describedby="helpId">
            </div>
            <div class="form-group">
              <label for="">Email</label>
              <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelpId" placeholder="Email">
            </div>
            <label for="">Phone</label>
                <input type="text" name="phone" id="" class="form-control" placeholder="Phone Number" aria-describedby="helpId">
            </div>
            <div class="form-group container">
              <label for="">State</label>
              <select class="form-control" name="state" id="">
                <option selected disabled>Select State</option>
                  <?php
                    foreach($state as $s=>$value){
                        echo '<option>'.$value.'</option>';
                    }
                  ?>
                <option></option>
              </select>
            </div>
            <div class="form-group container">
              <label for="">City</label>
              <select class="form-control" name="city" id="">
                <option selected disabled>Select City</option>
                <?php
                    foreach($city as $c=>$value){
                        echo '<option>'.$value.'</option>';
                    }
                  ?>
              </select>
            </div>
            <div class="form-group container">
              <label for="">About Yourself</label>
              <textarea class="form-control" name="about" id="" rows="3"></textarea>
            </div>
            <div class="container">
            <input type="file" name="fileToUpload">
            <input type="submit" name="save" id="">
            </div>
        </form>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<?php
    
    if(isset($_POST['save'])){
        echo $fname=$_POST['fname'];
        echo "<br>";
        echo $lname=$_POST['lname'];
        echo "<br>";
        echo $email=$_POST['email'];
        echo "<br>";
        echo $phone=$_POST['phone'];
        echo "<br>";
        echo $state=$_POST['state'];
        echo "<br>";
        echo $city=$_POST['city'];
        echo "<br>";
        if(isset($_FILES['fileToUpload'])){
          echo "<pre>";
          print_r($_FILES['fileToUpload']);
          move_uploaded_file($_FILES['fileToUpload']['tmp_name'],"image/".$_FILES['fileToUpload']['name']);
        }
    }
?>
