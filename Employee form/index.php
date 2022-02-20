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
      <?php
        include "header.php";
      ?>
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="text-center text-secondary">Employees List</h1>
                  <br><br>
                <?php
                    include "config.php";

$sql="SELECT * FROM emp_details
JOIN
bird_countries
ON emp_details.country = bird_countries.id
JOIN
bird_states
ON emp_details.state = bird_states.id
JOIN
bird_cities
ON emp_details.city = bird_cities.id";
                    $res=mysqli_query($conn,$sql)or die('query failed');
                    if(mysqli_num_rows($res)>0){
                ?>
                  <table class="table">
                      <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Gender</th>
                            <th>Profile picture</th>
                            <th>About</th>
                            <th>Address</th>
                            <th>Country</th>
                            <th>State</th>
                            <th>City</th>
                            </tr>
                      </thead>
                      <tbody>
                        <?php while($row=mysqli_fetch_assoc($res)){ ?>
                        <tr>
                            <td><?php echo $row['sno']; ?></td>
                            <td><?php echo $row['fname']." ".$row['lname']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                            <td><?php echo $row['gender']; ?></td>
                            <td><img src='images/<?php echo $row['profilepic']; ?>' alt="profile-pictures" height="100px" width="100px"></td>
                            <td><?php 
                                $about = $row['about'];
                                echo substr($about,0,10);
                                ?>...</td>
                            <td><?php 
                                $about = $row['address'];
                                echo substr($about,0,10);
                                ?>...</td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['statename']; ?></td>
                            <td><?php echo $row['cityName']; ?></td>
                            <td><a class="badge badge-primary" href="edit.php?eid=<?php echo $row['eid']; ?>">Edit</a> | <a class="badge badge-danger" href="delete.php?did=<?php echo $row['eid']; ?>">Delete</a></td>
                        </tr>
                        <?php  } ?>
                      </tbody>
                  </table>
                  <?php  } ?>
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
  </body>
</html>