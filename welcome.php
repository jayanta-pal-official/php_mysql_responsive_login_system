<?php
require 'nav.php';
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
  header("location: login.php");
  exit;
}
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
  <title>welcome
    <?php echo $_SESSION['username'] ?>!
  </title>
  <link rel="stylesheet" href="css/welcome.css">

</head>

<body>
  <style>
    .container{
  margin-top: 2%;
}
footer .footer-col {
    text-align: center;
    padding: 1px;
    background-color: black;
    color: white;
   margin-top: 20%;
  }
  footer p {
    margin-top: 10px;
  }
    

    @media  screen and (max-width: 480px) {
      footer .footer-col{
        
        margin-top: 150%;
      }
      footer .footer-col{
        width: 202%;
        margin-top: 170%;
      }
      .container{
        margin: 0px 55%;
        width: 100%;
        margin-top: 10%;
      }
    }
    @media  screen and (max-width: 764px) {
      footer .footer-col{
        
       .container{
        width: 100%;
       }
      }
    }
    
  </style>
  
  <div class="container my-10">
    <div class="alert alert-success" role="alert">
      <h4 class="alert-heading">welcome -
        <?php echo $_SESSION['username'] ?>!
      </h4>
      <p>Welcome to <b>@JP_here</b>. You are logged in as
        <?php echo $_SESSION['username'] ?>!
      </p>
      <hr>
      <p class="mb-0">Whenever you need to logout <b><a href="/contact_jquery/logout.php">using this link.</a></b></p>
    </div>
    <hr></br>
    <hr>


    <input type="button" id="btn2" value="load data"></br>
    <div id="data">
      <h3>fatch data from database</h3>
    </div>
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
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></scrip >
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
          integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
          crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <script src="JS/ajax.js"></script>
  <script src="JS/jquery-3.6.4.min.js"></script>
  
</body>

</html>