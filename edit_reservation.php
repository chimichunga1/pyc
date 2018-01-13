<?php 

include_once("connect.php");

 $editr_id=$_POST["editr_id"];

$r_name = $_POST["editreservation"];
$edit_date = $_POST["editr_date"];
(int)$time = $_POST["t_id"];


















$row=mysqli_query($c1,'SELECT * From `reserve_tbl` WHERE `r_date`="'.$edit_date.'" AND `t_id`="'.$time.'" ');
$search= mysqli_fetch_assoc($row);


  if (empty($search))

{


ECHO $r_name;
echo "----";
echo $edit_date;
echo "-----";
echo $time;


	
    $table2c = "UPDATE reserve_tbl SET r_name = '$r_name' AND r_date = '$edit_date' AND t_id = '$time' WHERE r_id = '$editr_id'";

   $run_query2d = mysqli_query($c1,$table2c);


    
/*
 echo"<script>window.location.href='admin_reservation.php';</script>";	*/
}
else
{

echo "This Date is already reserved!";

/*
 echo"<script>window.location.href='admin_reservation.php';</script>";	*/
}




?>