
    <nav class="navbar navbar-expand-lg navigation">
        <div class="container">
          <a class="navbar-brand" href="index.php" style="font-size: 30px; font-family: cursive ;">Lapfix</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href='service.php'>Our Service</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href='contact.php'>Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn btn-dark text-white" data-bs-toggle="modal" data-bs-target="#signin">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      
      <!-- Register Modal -->
<div class="modal fade signup" id="signup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header signup_header">
          <h5 class="modal-title" id="exampleModalLabel">SIGN UP</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="signup">
            <form action="php/register.php" method="POST">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Name</label>
                  <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="nameHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                  <select name="category">
                    <option>Choose Category</option>
                    <option>Admin</option>
                    <option>User</option>
                  </select>
                </div>
                <div class="mb-3">
                    <p>Already Registered ? <a href="#" data-bs-toggle="modal" data-bs-target="#signin">Login</a></p>
                </div>
                <button type="submit" class="btn btn-warning" style="float: right;">SIGN UP</button>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
  <!-- Login Modal -->
  <div class="modal fade signup" id="signin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header signin_header">
          <h5 class="modal-title" id="exampleModalLabel">SIGN IN</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="signup">
            <form action="php/login.php" method="POST">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <p>Not a Member ? <a href="#" data-bs-toggle="modal" data-bs-target="#signup">Register</a></p>
                </div>
                <button type="submit" class="btn btn-warning" style="float: right;">LOG IN</button>
              </form>   
          </div>
        </div>
      </div>
    </div>
  </div>