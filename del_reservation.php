   <?php  
 //insert.php  
require_once('connect.php');


$delID=$_POST["delID"];





    $table2c = "DELETE FROM reserve_tbl  WHERE `r_id`='$delID'";

   $run_query2d = mysqli_query($c1,$table2c);

   echo"<script>window.location.href='admin_reservation.php';</script>";

   ?>  