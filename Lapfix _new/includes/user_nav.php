<nav class="navbar navbar-expand-lg navigation">
        <div class="container">
          <a class="navbar-brand" href="home.php">LAPFIX</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="home.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="service.php">Our Service</a>
              </li>
              <li class="nav-item">
                <a class="nav-link">Contact</a>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <?php echo $rows1['email']; ?>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="nav-link" href="yourRequest.php">Your requests</a></li>
                  <li><a class="nav-link" href="php/logout.php">Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>