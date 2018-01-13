   <?php  
 //insert.php  
require_once('connect.php');


$delID=$_POST["delID"];





    $table2c = "UPDATE account_tbl SET isDeleted='1'  WHERE u_id='$delID'";

   $run_query2d = mysqli_query($c1,$table2c);

   echo"<script>window.location.href='admin_accounts.php';</script>";

   ?>  