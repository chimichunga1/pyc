<?php 
include("connect.php");

if(isset($_POST["submit_add"]))


{


$username = $_POST["username"];
$password = $_POST["password"];
$fullname = $_POST["fullname"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$accessright = $_POST["accessright"];







  $xQx_insert = "INSERT INTO account_tbl ( username, password, fullname, email, phone, access, isDeleted) VALUES ('$username','$password','$fullname','$email','$phone','$accessright','0')";
  $query_insert=mysqli_query($c1,$xQx_insert);



    echo"<script>window.location.href='admin_accounts.php';</script>";



}






?>