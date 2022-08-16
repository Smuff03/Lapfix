
<nav class="navbar navbar-expand-lg navigation"style="background-color: #ffc905;" style="color: black;")>
        <div class="container">
          <a class="navbar-brand" href="#">LAPFIX</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="admin_home.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="service.php">Our Service</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <?php echo $rows1['name']; ?>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="nav-link" href="yourRequest.php">Appointments</a></li>
                <li><a class="nav-link" href="admin_requests.php">Requests</a></li>
                  <li><a class="nav-link" href="php/logout.php">Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>