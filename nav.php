<?php
session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
  $loggedin = true;

}
else{
  $loggedin=false;
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script>
    function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
<style>
  body{
    overflow-x: hidden;
  }
.topnav {
  background-color: #333;
  overflow: hidden;
  padding: 5px ;
  display: flex;
  
}
.rightNav{
  width: 79%;
  text-align: right;
  padding-top: 10px;
}
#search{
  padding: 5px;
  font-size: 17px;
  border: 2px solid gray;
  border-radius: 9px;
}
.btn3-sm{
  
  padding: 5px 10px;
  background: none;
  color: white;
  cursor: pointer;
  
  border-radius: 9px;
}
/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 16px;
  font-family: 'Ubuntu';
  
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
  padding: 17px;
}

/* Add an active class to highlight the current page */
.topnav a.active {
  background-color: #04AA6D;
  color: white;
  padding: 17px;

}
@media screen and (max-width: 766px) {
  .topnav {
    width: 168%;
  }
  
}
@media screen and (max-width: 480px) {
  .topnav {
    width: 237%;
  }
  .rightNav{
    width: 100%;
    margin: 0% 1%;
  }
}
@media screen and (max-width: 623px) {
  .topnav {
    width: 235%;
  }
  
}

/* Hide the link that should open and close the topnav on small screens */
.topnav .icon {
  display: none;
}
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

/* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens (display the links vertically instead of horizontally) */
@media screen and (max-width: 360px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive a.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}

</style>
</head>

<body>
<div class="topnav" id="myTopnav">
  <a href="/contact_jquery/welcome.php" class="active"><b>@JP_HERE</b></a>
  <a href="/contact_jquery/welcome.php"><b>HOME</b></a>
  <?php  
  if(!$loggedin){ ?>
  <a href="/contact_jquery/signup.php"><b>SIGNUP</b></a>
  <a href="/contact_jquery/login.php"><b>LOGIN</b></a>
  <?php  } ?>
  
  <?php if($loggedin){
  ?>
  <a href="/contact_jquery/logout.php"><b>LOG OUT</b></a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
  <?php } ?>
  <div class="rightNav">
    <input type="text" name="search" id="search" placeholder=" search...">
    <button class="btn3 btn3-sm"> Search</button>
  </div>
  
</div>
    
</body>
</html>