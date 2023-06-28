<?php
error_reporting(E_ALL);
include_once 'function.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include '_dbconnect.php';
  $username = get_inputs("username");
  $email = get_inputs("email");
  $password = get_inputs("password");

  /* if(empty($username)){
    header("Location:login.php?error=Username is required!");
    exit();
  }
  else if(empty($email)){
    header("Location:login.php?error=Email is required!");
    exit();
  }
  else if(empty($password)){
    header("Location:login.php?error=Password is required!");
    exit();
  }*/


  $sql = "select * from employee where username='$username' && email='$email' ";
  $result = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($result);
  if ($num == 1) {
    while ($row = mysqli_fetch_assoc($result)) {
      if (password_verify($password, $row['password'])) {
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;
        $_SESSION['username'] = $username;
        header("location: welcome.php");
      }
    }
  } else { ?>
    <script>
      alert("Oops! Something went wrong. Please try again.");
    </script>
  <?php }
} ?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>login</title>
  <link rel="stylesheet" href="css/login.css">

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="JS/sweetalert.min.js"></script>
  <style type="text/css">
    body {
      background-image: url('image/login3.jpg');
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }

    @media screen and (max-width: 766px) {
      body {
        background-image: url('mobile.jpg');
        width: 100%;
        background-repeat: no-repeat;
        background-size: auto;

      }

    }
  </style>
</head>

<body>

  <?php require 'nav.php'; ?>
  <div class="container">
    <h1 class="text-center my-4" id="login"><u><b>Login Here</b></u></h1>
    <form name="form" action="/contact_jquery/login.php" class="form" id="form" method="post">
      <div class="form-group col-md-4">
        <?php
        if (isset($_GET['error'])) { ?>
          <p class="error">
            <?php echo $_GET['error']; ?>
          </p>
        <?php } ?>
      </div>

      <div class="form-group col-md-4">

        USERNAME <strong id="star">*</strong> <B><span style="color:red" id="unameErr"></span></B><input type="text"
          class="form-control" id="uname" name="username" value="<?php if (isset($_POST['username']))
            echo ($_POST['username']) ?>" placeholder="Enter username">
        </div>

        <div class="form-group col-md-4">
          EMAIL ADDRESS <strong id="star">*</strong> <B><span style="color:red" id="emailErr"></span></B><input
            class="form-control" id="email" name="email" value="<?php if (isset($_POST['email']))
            echo ($_POST['email']) ?>" aria-describedby="emailHelp" placeholder="Enter email address">
        </div>

        <div class="form-group col-md-4">
          PASSWORD <strong id="star">*</strong> <B><span style="color:red" id="passwordErr"></span></B><input
            type="password" class="form-control" id="password" name="password" value="<?php if (isset($_POST['password']))
            echo ($_POST['password']) ?>" placeholder="* * * * * * * *">
        </div>



        <div class=" form-group col-md-5">
          <input class=" form-control-check-input me-2" type="checkbox" value="" name="checkbox" id="form2Example3cg"
            required />
          <label class="form-check-label" for="form2Example3g">
            remember me
          </label>
        </div>

        <input type="submit" id="btn" value="log in" class=" btn-primary col-md-4 ">
        <p class="text-center text-muted my-2 " id="swtich">Don't have an account yet? <b><u><a href="/contact_jquery/signup.php">sign
                up</u></a></b></p>
      </form>
    </div>
    <footer class="footer">
      <div class="footer-col">
        <p>Author : Jayanta pal<br>
          <a href="mailto:gmail.com">Paljayanta18@gmail.com</a>
        </p>
      </div>

    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"></script>
  </body>

  </html>