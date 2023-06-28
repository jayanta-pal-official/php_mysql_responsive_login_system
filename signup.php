<?php

//$wall_paper = "background.jpg";
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>sign up</title>
  <link rel="stylesheet" href="css/regester.css">
  <script type="text/javascript" src="JS/jquery-3.6.4.min.js"></script>
  <script src="JS/form.js"></script>
  <script src="JS/sweetalert.min.js"></script>
  <style type="text/css">
body {
background-image: url('background.jpg');
background-position: center;
background-repeat: no-repeat;
background-size: cover;
}
@media screen and (max-width: 766px) {
  body{
  background-image: url('mobile.jpg');
  width: 100%;
  background-repeat: no-repeat;
  background-size:auto;
  
  }

}
</style>
</head>

<body >
<?php require 'nav.php'; ?>


  
  <div class="container">
    <h1 class="text-center my-3" id="regester"><u><b>Regester Here</b></u></h1>
  </div>



  <form name="form" action="/contact_jquery/signup.php" class="form" id="form" method="post" enctype="multipart/form-data">
    <div class="form-group col-md-4">
      FIRST NAME <strong id="star">*</strong> <input type="text" class="form-control" id="fname" value="<?php if (isset($_POST['firstname']))
        echo ($_POST['firstname']) ?>" name="firstname" value="" placeholder="Enter first name">
      </div>

      <div class="form-group col-md-4">
        LAST NAME <strong id="star">*</strong> </span></B><input type="text" class="form-control" id="lname"
          name="lastname" value="<?php if (isset($_POST['lastname']))
        echo ($_POST['lastname']) ?>" placeholder="Enter last name">
      </div>

      <div class="form-group col-md-4">
        USERNAME <strong id="star">*</strong> <input type="text" class="form-control" id="uname" name="username" value="<?php if (isset($_POST['username']))
        echo ($_POST['username']) ?>" placeholder="Enter username">
      </div>

      <div class="form-group col-md-4">
        EMAIL ADDRESS <strong id="star">*</strong><input class="form-control" id="email" name="email" value="<?php if (isset($_POST['email']))
        echo ($_POST['email']) ?>" aria-describedby="emailHelp" placeholder="Enter email address">
      </div>

      <div class="form-group col-md-4">
        PHONE NUMBER <strong id="star">*</strong><input type="number" class="form-control" id="phone" name="phone_number"
          value="<?php if (isset($_POST['phone_number']))
        echo ($_POST['phone_number']) ?>" placeholder="Enter phone number">
      </div>

      <div class="form-group col-md-4">
        PASSWORD <strong id="star">*</strong><input type="password" class="form-control" id="password" name="password"
          value="<?php if (isset($_POST['password']))
        echo ($_POST['password']) ?>" placeholder="**********">
      </div>

      <div class="form-group col-md-4">
        CONFIRM PASSWORD <strong id="star">*</strong> <input type="text" class="form-control" id="cpassword"
          name="cpassword" value="<?php if (isset($_POST['cpassword']))
        echo ($_POST['cpassword']) ?>" placeholder="Make sure to type same password">
      </div>
      <div class="gen form-group col-md-4">
        <label>GENDER : </label><strong id="star"> *</strong></br>
        <div class="form-check form-check-inline">

          <input name="gender" class="form-check-input" type="radio" value="male">
          <label class="form-check-label">male</label>&nbsp;

          <input name="gender" class="form-check-input" type="radio" value="female">
          <label class="form-check-label">female</label>&nbsp;

          <input name="gender" class="form-check-input" type="radio" value="other">
          <label class="form-check-label">other</label>

        </div>

      </div>

      <div class="form-group col-md-4">
      <label >Select Image File:</label ><strong id="star"> *</strong>
    
      <input type="file" class="form-control" id="file" name="file" Required>
      </div>

      <div class=" form-group col-md-5">
        <input class=" form-control-check-input me-2" type="checkbox" value="" name="checkbox" id="form2Example3cg"/>
        <label class="form-check-label" for="form2Example3g">
          I agree all statements in <u>Terms of service</u >
        </label>
      </div>

      <input type="submit" id="btn" value="sign up" class=" btn-primary col-md-4 ">
      <p class="text-center text-muted my-2 " id="swtich">Have already an account? <b><u><a href="/contact_jquery/login.php">Log
              in</u></a></b></p>
    </form>


    </div>
  <footer class="footer">
    <div class="footer-col">
    <p>Author : Jayanta pal<br>
  <a href="mailto:gmail.com">Paljayanta18@gmail.com</a></p>
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

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
      integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>



  </body>

  </html>
  <?php
      include_once 'function.php';
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include '_dbconnect.php';
        $firstname = "";
        $lastname = "";
        $username = "";
        $email = "";
        $phone_number = "";
        $password = "";
        $cpassword = "";
        $gender = "";

        $firstname = get_inputs("firstname");
        $lastname = get_inputs("lastname");
        $username = get_inputs("username");
        $email = get_inputs("email");
        $phone_number = get_inputs("phone_number");
        $password = get_inputs("password");
        $cpassword = get_inputs("cpassword");
        $gender = get_inputs("gender");
        $showAlert = false;
        $hash = password_hash($password, PASSWORD_BCRYPT);

        $files = $_FILES['file'];
//print_r($files);
$filename=$files['name'];
$fileerror=$files['error'];
$filetemp=$files['tmp_name'];
$fileext=explode('.',$filename);
$filechack=strtolower(end($fileext));
$fileextstored=array('png','jpg','jpeg');

if(in_array($filechack,$fileextstored)){
  $destinationfile='image/'.$filename;
  move_uploaded_file($filetemp,$destinationfile);

  $data1 = "SELECT email FROM employee WHERE email = '$email'";
$results = $conn->query($data1);
if ($results->num_rows > 0) { ?>
  // Email already exists in the database
  <script>
    alert("Email already exists.");
  </script>
<?php } 
else{
  $sql = "INSERT INTO `employee` ( `firstname`, `lastname`, `username`, `email`, `phone_number`, `password`, `gender`, `image`, `date`)
  VALUES ( '$firstname', '$lastname', '$username', '$email', '$phone_number', '$hash', '$gender',' $destinationfile', current_timestamp());";
      
$result = mysqli_query($conn, $sql);
if(($result) == 1){?>
  <script>
      swal({
        title: "Successfully Submitted",
        text: "",
        icon: "success",
        button: "ok",
      });
    </script>
    <?php
 }

else{ ?>
 <script>
      swal({
        title: "Error!",
        text: "please chack input data",
        icon: "error",
        button: "ok",
      });

    </script>
  
<?php }
}

}  else{ ?>
  <script>
    alert("Seleted file are not a image");
  </script>
<?php }     
  
      }
      ?>