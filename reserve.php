<?php
include ('connect.php');


$u_id=$_SESSION['id'];
$v_id=$_POST['v_id'];
$r_name=$_POST['r_name'];
$r_date=$_POST['r_date'];
$t_id=$_POST['t_id'];


mysqli_query($c1,"INSERT INTO reserve_tbl (`u_id`,`v_id`,`r_name`,`r_date`,`t_id`) VALUES ('".$u_id."','".$v_id."','".$r_name."','".$r_date."','".$t_id."' )");


 echo"<script>window.location.href='index.php';</script>";	


 ?>
