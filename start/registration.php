<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Online Web</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
  <!-- Dark Mode -->
  <script src="js/dark-mode-switch.min.js" defer></script>  
  <link rel="icon" type="image/x-icon" href="../favicon/favicon.ico">

</head>

<body class="py-5 my-5">
  <?php
      require('db.php');
      // When form submitted, insert values into the database.
      if (isset($_REQUEST['username'])) {
          // removes backslashes
          $username = stripslashes($_REQUEST['username']);
          //escapes special characters in a string
          $username = mysqli_real_escape_string($con, $username);
          $email    = stripslashes($_REQUEST['email']);
          $email    = mysqli_real_escape_string($con, $email);
          $password = stripslashes($_REQUEST['password']);
          $password = mysqli_real_escape_string($con, $password);
          $create_datetime = date("Y-m-d H:i:s");
          $query    = "INSERT into `users` (username, password, email, create_datetime)
                      VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
          $result   = mysqli_query($con, $query);
          if ($result) {
              echo "<div class='form'>
                    <h3>You are registered successfully.</h3><br/>
                    <p class='link'>Click here to <a href='login.php'>Login</a></p>
                    </div>";
          } else {
              echo "<div class='form'>
                    <h3>Required fields are missing.</h3><br/>
                    <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                    </div>";
          }
      } else {
  ?>
  <form action="" method="post" autocomplete="on" class="d-flex flex-column align-items-center justify-content-center my-5" style="height: 350px" >
    <h2 class="mt-5 mb-4">Register</h2>
    <div class="mb-3">
      <label for="Name" class="form-label">Username</label>
      <input type="text" name="username" class="form-control" placeholder="Username" required/>
    </div>
    <div class="mb-3">
      <label for="Email" class="form-label">Email</label>
      <input type="email" name="email" class="form-control" placeholder="Email" required/>
    </div>
    <div class="mb-3">
      <label for="Password" class="form-label">Password</label>
      <input type="password" name="password" class="form-control" placeholder="Password" minlength="8" required/>
    </div>
    <div class="mb-3">
      <label for="RePassword" class="form-label">Re Enter Password</label>
      <input type="password" name="confirmpassword" id="confirmpassword" class="form-control" placeholder="Re Enter Password" minlength="8" required/>
    </div>
    <p class="mb-3 fs-6">
      <a href="login.php  " class="pe-auto">Click here</a> to Login.
    </p>
    <div class="custom-control custom-switch">
      <input type="checkbox" class="custom-control-input" id="darkSwitch">
      <label class="custom-control-label fs-6 mb-4" for="darkSwitch">Dark Mode</label>
  </div>
    <button type="submit" name="submit" class="btn btn-outline-primary">
      Create Account
    </button>
  </form>
  <?php
    }
  ?>
</body>

</html>