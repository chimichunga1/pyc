   <?php  
 //insert.php  
require_once('connect.php');


$delID=$_POST["delID"];



        $table2 = "select * from sunday_tbl where `s_id`='".$delID."'";
        $run_query2b = mysqli_query($c1,$table2);         

 		$row = mysqli_fetch_assoc($run_query2b);


$news1=$row['s_bg'];

	unlink($news1);

    $table2c = "DELETE FROM sunday_tbl  WHERE `s_id`='$delID'";

   $run_query2d = mysqli_query($c1,$table2c);

   echo"<script>window.location.href='admin_sreflect.php';</script>";	
   

   ?>  