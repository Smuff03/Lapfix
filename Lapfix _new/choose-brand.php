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
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://kit.fontawesome.com/bb27095618.js" crossorigin="anonymous"></script>

</head>
<body>

<?php
  include 'includes/nav.php';
?>


    <div class="container mt-5">

        <div class="dropdown" style="text-align: center">
         <!-- <p class="text-center"> -->
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            Choose Brand
          </button> 
         
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
          <li><a class="dropdown-item active" href="?id=1" >HP</a></li>
                  <li><a class="dropdown-item" href="?id=2">Dell</a></li>
                  <li><a class="dropdown-item" href="?id=3">Asus</a></li>
          </ul>
          
        <!-- </p> -->
        </div>
        </div>
        
        <div class="container">
          <div class="row">
          <?php
                  $id = $_GET["id"];
          
                   $array1 = array( "Chromebook" , "OMEN by HP" ,"Pavilion " , "Envy" );
                   $array2 = array( "Dell1" , "Dell2" , "Dell3" , "Dell4"   );
                   $array3 = array( "Asus1" , "Asus2" ,"Asus3" ,"Asus4" ,"Asus5" ,"Asus6" );
                    
                   if ( $id == "1") {
                    foreach( $array1 as $value ) {
                      echo "  <div class='col-sm-3 laptop_view mt-5 mb-5'>
                      <div class='card'>
                        <div class='card-body'>
                          <h5 class='card-title'>$value</h5>
                          <img src='https://images.unsplash.com/photo-1588872657578-7efd1f1555ed?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8bGFwdG9wc3xlbnwwfHwwfHw%3D&w=1000&q=80' class='img-thumbnail' alt='abc'/>
                          <p class='card-text'>With supporting text below as a natural lead-in to additional content.</p>
                          <a href='repair.php?p=$value' class='btn btn-primary laptop_view_btn'>Make Request</a>
                        </div>
                      </div>
                    </div>";
                   }
                   } elseif ( $id == "2") {
                    foreach( $array2 as $value ) {
                      echo "  <div class='col-sm-3 laptop_view mt-5 mb-5'>
                      <div class='card'>
                        <div class='card-body'>
                          <h5 class='card-title'>$value</h5>
                          <img src='https://images.unsplash.com/photo-1588872657578-7efd1f1555ed?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8bGFwdG9wc3xlbnwwfHwwfHw%3D&w=1000&q=80' class='img-thumbnail' alt='abc'/>
                          <p class='card-text'>With supporting text below as a natural lead-in to additional content.</p>
                          <a href='repair.php?p=$value' class='btn btn-primary laptop_view_btn'>Make Request</a>
                        </div>
                      </div>
                    </div>";
                   }
                  } elseif ( $id == "3") {
                    foreach( $array3 as $value ) {
                      echo " <div class='col-sm-3 laptop_view mt-5 mb-5'>
                      <div class='card'>
                        <div class='card-body'>
                          <h5 class='card-title'>$value</h5>
                          <img src='https://images.unsplash.com/photo-1588872657578-7efd1f1555ed?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8bGFwdG9wc3xlbnwwfHwwfHw%3D&w=1000&q=80' class='img-thumbnail' alt='abc'/>
                          <p class='card-text'>With supporting text below as a natural lead-in to additional content.</p>
                          <a href='repair.php?p=$value' class='btn btn-primary laptop_view_btn'>Make Request</a>
                        </div>
                      </div>
                    </div>";
                   }
                  }
                   
          ?>
        

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


</body>
</html>