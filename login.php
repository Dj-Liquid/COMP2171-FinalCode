<?php  


include_once 'project/login.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Page</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    .login-form {
      margin-top: 50px;
    }
    .form-control {
      border-radius: 0;
    }
    .btn {
      border-radius: 0;
    }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Logo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
    <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="login.php">Login</a>
      </li>
    </ul>
  </div>
</nav>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-4">
        <div class="login-form">
          <form action="" method="POST">
            <h2 class="text-center">Login</h2>
            <div class="form-group">
              <input type="email" name="email" class="form-control" placeholder="Email" required="required">
            </div>
            <div class="form-group">
              <input type="password" name="password" class="form-control" placeholder="Password" required="required">
            </div>
            <div class="form-group">
              <button type="submit" name="login" class="btn btn-primary btn-block">Log in</button>
            </div>
          </form>
          <?php
         if(isset($_POST['login'])){
            // Get the form data
            $email = $_POST['email'];
            $password = $_POST['password'];
          $login=new Login($email,$password);
            // Process the form data
 $login->GetLogin();
          }
          ?>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>