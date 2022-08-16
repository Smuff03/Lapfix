<?php

include 'includes/connection.php';
include 'php/session.php';



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointments</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <?php include 'includes/admin_nav.php' ?>

    <div class="request">
        <div class="container-fluid mt-5">
            <div class="table-responsive" >
              <table class="table">
                <thead>
                 
                  <tr>
                    <th scope="col">Client</th>
                    <th scope="col">Email</th>
                    <th scope="col">mobile</th>
                    <th scope="col">Appointment For</th>
                    <th scope="col">Appointment desc</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col">Add</th>
                  </tr>
                </thead>
                <tbody class>
                  <?php
                  $query = mysqli_query($con,"SELECT * FROM request");
                while($fetch = mysqli_fetch_array($query)){
                  ?>
                  <tr>
                  <td><?php echo $fetch['name'] ?></td>
                  <td><?php echo $fetch['email'] ?></td>
                  <td><?php echo $fetch['mob'] ?></td>
                  <td><?php echo $fetch['appointment-topic'] ?></td>
                  <td><?php echo $fetch['appointment-desc'] ?></td>
                  <td><?php echo $fetch['D'] ?></td>
                  <td><?php echo $fetch['time'] ?></td>
                  <td><button class="btn btn-success">Accept</button></td>
                </tr>  
                 <?php } ?>
                 
                </tbody>
              </table>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>