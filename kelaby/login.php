
<html>
<head>
<title>Admin | PYC</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<?php include("css.php"); ?>
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<?php session_start(); 
?>
<body id="top">


<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row">
  <div id="topbar" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="fl_left">
      <ul>
        <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
        <li><i class="fa fa-envelope-o"></i> info@PYC.com</li>
      </ul>
    </div>
    <div class="fl_right">
      <ul>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->





<div class="wrapper row3">

<div class="container">
<div class="col-md-3">
</div>
<div class="col-md-6">
<!-- Form login -->

 <form  role="form" action="login.php" method="post">
    <center><p><img class="img-fluid" src="images/logo.png" style="height: 200px;"><h1><a href="index.html">Parish Youth Council</a></h1></p>
          </center>


    <div class="md-form">
        <i class="fa fa-user prefix grey-text"></i>
        <input type="text" name="username" class="form-control">
        <label >Your username</label>
    </div>

    <div class="md-form">
        <i class="fa fa-lock prefix grey-text"></i>
        <input type="password" name="password" class="form-control">
        <label >Your password</label>
    </div>

    <div class="text-center">
        <button class="btn btn-default" type="submit" name="submit">Login</button>
    </div>
</form>



<?php

include ("config.connect.php");

if(isset($_POST['submit']))

{
$row=mysqli_query($c1,'SELECT * From `account_tbl` WHERE `username`="'.$_POST["username"].'" AND `password`="'.$_POST["password"].'" ');

$search= mysqli_fetch_assoc($row);


  if (!empty($search))
  {


  $_SESSION['fn']=$search['fullname'];

    echo " 
  <script>
  alert('".$search['fullname']." Login Successful');
  window.location.href='index_admin.php';

  </script>";  

  }
  else
  {
     echo " 
  <script>
  alert('Login Failed');
  window.location.href='index_admin.php';

  </script>";
  }
}


?>

<!-- Form login -->
</div>
</div>
</div>












<?php
include("afooter.php");
include("modals.php");
 ?>
</body>
</html>
