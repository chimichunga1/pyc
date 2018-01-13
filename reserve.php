<?php
include ('connect.php');


$u_id=$_SESSION['u_id'];
$v_id=$_POST['v_id'];
$r_name=$_POST['r_name'];
$r_date=$_POST['r_date'];
(int)$t_id=$_POST['t_id'];

$row=mysqli_query($c1,'SELECT * From `reserve_tbl` WHERE `r_date`="'.$r_date.'" AND `t_id`="'.$t_id.'" ');

$search= mysqli_fetch_assoc($row);
       

  if (empty($search))


mysqli_query($c1,"INSERT INTO reserve_tbl (`u_id`,`v_id`,`r_name`,`r_date`,`t_id`) VALUES ('".$u_id."','".$v_id."','".$r_name."','".$r_date."','".$t_id."' )");

    

 echo"<script>window.location.href='index.php';</script>";	

else
{

echo "This Date is already reserved!";


 echo"<script>window.location.href='index.php';</script>";	
}
 ?>
