   <?php  
 //insert.php  
require_once('connect.php');


$delID=$_POST["delID"];





    $table2c = "DELETE FROM announce_tbl  WHERE `a_id`='$delID'";

   $run_query2d = mysqli_query($c1,$table2c);

   echo"<script>window.location.href='admin_announcements.php';</script>";

   ?>  