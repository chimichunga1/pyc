<?php

include ("config.connect.php");

  


$row=mysqli_query($c1,'SELECT * From `account_tbl` WHERE `username`="'.$_POST["username"].'" AND `password`="'.$_POST["password"].'" ');

$search= mysqli_fetch_assoc($row);


if (!empty($search))
{
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
alert('Login Failed ! Wrong username or password !!!');
window.location.href='login.php';

</script>";  
}
?>