<?php 
include "php/session.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laptop Repairing</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
    
<?php
  include 'includes/nav.php';
?>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  <html lang="en">
<head>
<script type="text/javascript" src="https://github.com/rubyeffect/easy_fill/tree/master/lib/easy_fill-0.0.1.min.js"></script>
  <title>Reach Me</title>
  <link rel="stylesheet" type="text/css" href="appointment.css" />
</head>

<body>
  <div id="container form_cont">
    <!--This is a division tag for body container-->

    <div id="body_header">
      <!--This is a division tag for body header-->
      <h1>Appointment Request Form</h1>
      <?php
        $brand = $_GET["p"];
      echo "<p>Make your appointments more easier for $brand</p>";
        ?>
    </div>
    <form action="php/request.php" method="post">
      <fieldset>
        <legend><span class="number">1</span>Your basic details</legend>
        <label for="name">Name*:</label>
        <input type="text" id="name" name="name" placeholder="Atchyut (only first names)" required pattern="[a-zA-Z0-9]+">

        <label for="mail">Email*:</label>
        <input type="email" id="mail" name="email" placeholder="abc@xyz.com" required>

        <label for="tel">Contact Num:</label>
        <input type="tel" id="tel" placeholder="Include country code" name="mob">
        <label for="tel">Model Name:</label>
        <input type="tel" id="tel" placeholder="" name="brand">
        <label for="skype_name">Purchase year:</label>
        <input type="text" id="skype_name" name="year" placeholder="@atchyutn" pattern="[a-zA-Z0-9]+">


      </fieldset>

      <fieldset>
        <legend><span class="number">2</span>Appointment Details</legend>
        <label for="appointment_for">Appointment for*:</label>
        <select id="appointment_for" name="appointment-topic" required >
          <option value="">Select service</option>
          <option value="Hardware">Hardware</option>
          <option value="Software">Software</option>
          <option value="Unknown">Unknown</option>
          <option value="System Check">System Check </option>
          <option value="Update">Update</option>
 
        </select>
        <div class="mt-3">
          <input type="text" class="form-control" readonly name="price" value="₹ 00.00" id="price">
        </div>
        <label for="appointment_description">Appointment Description:</label>
        <textarea id="appointment_description" name="appointment-desc" placeholder="I wish to get an appointment to skype for resolving a software problem."></textarea>
        <br>
        <label for="date">Date*:</label>
        <input type="date" name="ate" value="" required></input>
        <br>
        <label for="time">Time*:</label>
        <input type="time" name="time" value="" required></input>
        <br>
        <input type="hidden" name="brand" value="<?php echo $brand ?>" required></input>
        
      </fieldset>
      <button type="submit">Request For Appointment</button>
    </form>
  </div>
</body>

</html>



</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<script>
  $("#appointment_for").change(function(){
    if($(this).val() == "Hardware"){
      $("#price").val("₹ 5000");
    }
    else if($(this).val() == "Software"){
      $("#price").val("₹ 10000");
    }
    else if($(this).val() == "Unknown"){
      $("#price").val("₹ 1000");
    }
    else if($(this).val() == "Hardware"){
      $("#price").val("₹ 5000");
    }
    else if($(this).val() == "System Check"){
      $("#price").val("₹ 2000");
    }
    else if($(this).val() == "Update"){
      $("#price").val("₹ 6000");
    }
  })
</script>

  </body>
</html>