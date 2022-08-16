<?php
include 'php/session.php';
if(isset($_POST['accepbtn'])){
  $userid = $_POST['userid'];
  $reqid = $_POST['reqid'];
  $status = $_POST['status'];
  $qry = mysqli_query($con, "UPDATE request SET appoint_assign_to = '$userid', status = '$status' WHERE id = '$reqid'");
  if($qry){
    echo "<script>alert('Request Added to account')</script>";
  }
  else{
    echo "<script>alert('Request Not Accepted')</script>";

  }
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <style>
        * {
            box-sizing: border-box
        }

        body {
            font-family: "Lato", sans-serif;
        }

        /* Style the buttons inside the tab */
        .tab button {
            display: block;
            background-color: inherit;
            color: black;
            padding: 22px 16px;
            width: 100%;
            border: none;
            outline: none;
            text-align: left;
            cursor: pointer;
            transition: 0.3s;
            font-size: 17px;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            background-color: #ddd;
        }

        /* Create an active/current "tab button" class */
        .tab button.active {
            background-color: #ccc;
        }

        .sub-tab {
            background: linear-gradient(#ffc905, #fee071);
            text-align: center;
            padding: 10px;
            border-radius: 5px;
        }

        .sub-tab p {
            margin-bottom: 0px;
        }

        .contain {
  /* background-color: #eee; */
  max-width: 1170px;
  margin-left: auto;
  margin-right: auto;
  padding: 1em;
}

/* div.form {
  background-color: #eee;
} */
.contact-wrapper {
  margin: auto 0;
}

.submit-btn {
  float: left;
}
.reset-btn {
  float: right;
}

.form-headline:after {
  content: "";
  display: block;
  width: 10%;
  padding-top: 10px;
  border-bottom: 3px solid #000;
}

.highlight-text {
  color: #000;
}

.hightlight-contact-info {
  font-weight: 700;
  font-size: 22px;
  line-height: 1.5;
}

.highlight-text-grey {
  font-weight: 500;
}

.email-info {
    margin-top: 20px;
}

::-webkit-input-placeholder { /* Chrome */
  font-family: 'Roboto', sans-serif;
}

.required-input {
  color: black;
}
@media (min-width: 600px) {
  .contain {
    padding: 0;
  }
}

h3,
ul {
  margin: 0;
}

h3 {
  margin-bottom: 1rem;
}

.form-input:focus,
textarea:focus{
  outline: 1.5px solid #000;
}

.form-input,
textarea {
  width: 100%;
  border: 1px solid #bdbdbd;
  border-radius: 5px;
}

.wrapper > * {
  padding: 1em;
}
@media (min-width: 700px) {
  .wrapper {
    display: grid;
    grid-template-columns: 2fr 1fr;
  }
  .wrapper > * {
    padding: 2em 2em;
  }
}

ul {
  list-style: none;
  padding: 0;
}

.contacts {
  color: #212d31;
}

.form {
  background: #fff;
}

form {
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-gap: 20px;
}
form label {
  display: block;
}
form p {
  margin: 0;
}

.full-width {
  grid-column: 1 / 3;
}

button,
.submit-btn,
.form-input,
textarea {
  padding: 1em;
}

.reset-btn, .submit-btn {
  background: transparent;
  border: 1px solid #000;
  color: #000;
  border-radius: 15px;
  padding: 5px 20px;
  text-transform: uppercase;
}
.reset-btn:hover, .submit-btn:hover,
.reset-btn:focus , .submit-btn:focus{
  background: #000;
  outline: 0;
  color: #eee;
}
.error {
  color: #000;
}

.logout{
    color: black;
    text-decoration: none;
}

.logout:hover{
    color: black;
}
    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <h1>LAPFIX</h1>
            </div>
            <div class="col-lg-6">
                <p style="text-align: right; padding: 20px;"><a href="php/logout.php" class="logout">Logout</a></p>
            </div>
        </div>
    </div>

    <div class="row" style="width: 100%;">
        <div class="col-lg-2">
            <div class="tab">
                <button class="tablinks" onclick="openCity(event, 'Dashboard')" id="defaultOpen">Dashboard</button>
                <button class="tablinks" onclick="openCity(event, 'Appointments')">Appointments</button>
                <button class="tablinks" onclick="openCity(event, 'Requests')">Requests</button>
                <button class="tablinks" onclick="openCity(event, 'About')">About Lapfix</button>
                <button class="tablinks" onclick="openCity(event, 'Contact')">Contact</button>
            </div>
        </div>
        <div class="col-lg-10">
        
            <div id="Dashboard" class="tabcontent">
            
                <h3>Dashboard</h3>
                <br>
                <div class="row" style="width: 100%;">
                    <div class="col-lg-4">
                    <?php
                  include 'includes/connection.php';
                  $appointment = mysqli_query($con,"SELECT * FROM request WHERE status = 'Active' AND appoint_assign_to = '".$rows1['id']."'  ");
                  $num = mysqli_num_rows($appointment);
                  ?>
                        <div class="sub-tab">
                            <h3>Requests</h3>
                            <p><?php echo $num ?></p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                    <?php
                  include 'includes/connection.php';
                  $requests = mysqli_query($con,"SELECT * FROM request");
                  $num = mysqli_num_rows($requests);
                  ?>
                        <div class="sub-tab">
                            <h3>Appointments</h3>
                            <p><?php echo $num ?></p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                    <?php
                  include 'includes/connection.php';
                  $customers = mysqli_query($con,"SELECT * FROM register WHERE category = 'User'");
                  $num = mysqli_num_rows($customers);
                  ?>
                        <div class="sub-tab">
                            <h3>Customers</h3>
                            <p><?php echo $num ?></p>
                        </div>
                    </div>
                </div>

                <div class="row" style="width: 100%;">
                    <div class="col-lg-6">
                        <div id="piechart"></div>
                    </div>
                    <div class="col-lg-6 mt-5">
                        <h3>Profile</h3>
                        <p style="text-align: justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id, alias? Totam at velit praesentium in sapiente, assumenda, inventore, veritatis impedit harum quibusdam rem ea commodi laudantium. Voluptas tempora libero fuga! Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, nobis illo? Molestias, vel? Labore doloremque possimus fuga quisquam numquam quibusdam adipisci aut, necessitatibus, officia quia alias iusto ducimus sint esse!</p>
                    </div>
                </div>
            </div>

            <div id="Appointments" class="tabcontent">
                <h3>Appointments</h3>
                <div class="table-responsive" >
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
                  $query = mysqli_query($con,"SELECT * FROM request WHERE status = 'Active' AND appoint_assign_to = '".$rows1['id']."'  ");
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
                      <input type="hidden" value="Repaired" name="status">
                      <button class="btn btn-success" type="submit" name="done">DONE</button>
                    </form>
                
                </td>
                </tr>  
                 <?php } ?>
                 
                </tbody>
              </table>
            </div>
    
            </div>

            <div id="Requests" class="tabcontent">
                <h3>Requests</h3>

            <div class="table-responsive" >
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
                  $query = mysqli_query($con,"SELECT * FROM request WHERE status = 'Not Active'");
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
    
                
            </div>

            <div id="About" class="tabcontent">
                <h3>About Lapfix</h3>
                <p style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id tempora veritatis inventore, impedit eligendi sed ab temporibus dolore iure nulla possimus, voluptate distinctio asperiores, quo perferendis illum veniam minus fugit? Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis consequuntur quam sequi dolorum culpa accusamus quasi, provident asperiores magnam, iure beatae omnis ab ad praesentium. Aperiam libero inventore obcaecati veritatis.</p>
                <br>
                <h3>We Provide</h3>
                <p style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id tempora veritatis inventore, impedit eligendi sed ab temporibus dolore iure nulla possimus, voluptate distinctio asperiores, quo perferendis illum veniam minus fugit? Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis consequuntur quam sequi dolorum culpa accusamus quasi, provident asperiores magnam, iure beatae omnis ab ad praesentium. Aperiam libero inventore obcaecati veritatis.</p>
                <br>
                <h3>Our Mission</h3>
                <p style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id tempora veritatis inventore, impedit eligendi sed ab temporibus dolore iure nulla possimus, voluptate distinctio asperiores, quo perferendis illum veniam minus fugit? Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis consequuntur quam sequi dolorum culpa accusamus quasi, provident asperiores magnam, iure beatae omnis ab ad praesentium. Aperiam libero inventore obcaecati veritatis.</p>
            </div>

            <div id="Contact" class="tabcontent">
                <!-- <h3>Contact</h3> -->
                <div class="contain">

                    <div class="wrapper">
                  
                      <div class="form">
                        <h4 class="form-headline">GET IN TOUCH</h4>
                        <form id="submit-form" action="">
                          <p>
                            <input id="name" class="form-input" type="text" placeholder="Your Name*">
                            <small class="name-error"></small>
                          </p>
                          <p>
                            <input id="email" class="form-input" type="email" placeholder="Your Email*">
                            <small class="name-error"></small>
                          </p>
                          <p class="full-width">
                            <input id="company-name" class="form-input" type="text" placeholder="Company Name*" required>
                            <small></small>
                          </p>
                          <p class="full-width">
                            <textarea  minlength="20" id="message" cols="30" rows="3" placeholder="Your Message*" required></textarea>
                            <small></small>
                          </p>
                          <p class="full-width">
                            <input type="checkbox" id="checkbox" name="checkbox" checked> Yes, I would like to receive communications by call / email about Company's services.
                          </p>
                          <p class="full-width">
                            <input type="submit" class="submit-btn" value="Submit" onclick="checkValidations()">
                            <button class="reset-btn" onclick="reset()">Reset</button>
                          </p>
                        </form>
                      </div>
                  
                      <div class="contacts contact-wrapper">
                  
                        <ul>
                          <li>We've driven online revenues of over <span class="highlight-text-grey">$2
                              billion</span> for our clients. Ready to know
                            how we can help you?</li>
                          <span class="hightlight-contact-info">
                            <li class="email-info"><i class="fa fa-envelope" aria-hidden="true"></i> info@demo.com</li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i> <span class="highlight-text">+91 11 1111 2900</span></li>
                          </span>
                        </ul>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>



    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['Requests', 2],
  ['Appointments', 2],
  ['Completed', 4],
  ['Earning', 2]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'My Average Day', 'width':550, 'height':350};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>

<script>
    const nameEl = document.querySelector("#name");
const emailEl = document.querySelector("#email");
const companyNameEl = document.querySelector("#company-name");
const messageEl = document.querySelector("#message");

const form = document.querySelector("#submit-form");

function checkValidations() {
  let letters = /^[a-zA-Z\s]*$/;
  const name = nameEl.value.trim();
  const email = emailEl.value.trim();
  const companyName = companyNameEl.value.trim();
  const message = messageEl.value.trim();
  if (name === "") {
     document.querySelector(".name-error").classList.add("error");
      document.querySelector(".name-error").innerText =
        "Please fill out this field!";
  } else {
    if (!letters.test(name)) {
      document.querySelector(".name-error").classList.add("error");
      document.querySelector(".name-error").innerText =
        "Please enter only characters!";
    } else {
      
    }
  }
  if (email === "") {
     document.querySelector(".name-error").classList.add("error");
      document.querySelector(".name-error").innerText =
        "Please fill out this field!";
  } else {
    if (!letters.test(name)) {
      document.querySelector(".name-error").classList.add("error");
      document.querySelector(".name-error").innerText =
        "Please enter only characters!";
    } else {
      
    }
  }
}

function reset() {
  nameEl = "";
  emailEl = "";
  companyNameEl = "";
  messageEl = "";
  document.querySelector(".name-error").innerText = "";
}

</script>
</body>

</html>