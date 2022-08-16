<?php

include 'php/session.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">    
</head>
<body>
    <?php include 'includes/nav.php' ?>
            <div class="container mt-5">
                <h3>Requests</h3>

                <div class="table-responsive mt-5" >
                  <table class="table">
                    <thead>
                     
                      <tr>
                        <th scope="col">Client</th>
                        <th scope="col">Email</th>
                        <th scope="col">mobile</th>
                        <th scope="col">Appointment For</th>
                        <th scope="col">Appointment desc</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Price</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Add</th>
                      </tr>
                    </thead>
                    <tbody class>
                      <?php
                      include 'includes/connection.php';
                      $query = mysqli_query($con,"SELECT * FROM request WHERE id = '$rows2['id']'");
                    while($fetch = mysqli_fetch_array($query)){
                      ?>
                      <tr>
                      <td><?php echo $fetch['name'] ?></td>
                      <td><?php echo $fetch['email'] ?></td>
                      <td><?php echo $fetch['mob'] ?></td>
                      <td><?php echo $fetch['appointment-topic'] ?></td>
                      <td><?php echo $fetch['appointment-desc'] ?></td>
                      <td><?php echo $fetch['brand'] ?></td>
                      <td><?php echo $fetch['price'] ?></td>
                      <td><?php echo $fetch['D'] ?></td>
                      <td><?php echo $fetch['time'] ?></td>
                      <td>
                        <form action="admin_home.php" method="post">
                          <input type="hidden" value=<?php echo $rows1["id"]?> name="userid" id="">
                          <input type="hidden" value="<?php echo $fetch['id'] ?>" name="reqid" id="">
                          <input type="hidden" value="Active" name="status">
                          <button class="btn btn-success" type="submit" name="accepbtn">Accept</button>
                        </form>
                    
                    </td>
                    </tr>  
                     <?php } ?>
                     
                    </tbody>
                  </table>
            </div>


              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
            </div>

            
</body>
</html>