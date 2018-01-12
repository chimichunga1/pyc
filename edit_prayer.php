
 <?php  
 //insert.php  
require_once('connect.php');


$prayerposted=$_SESSION['fn'];



 $p_id=$_POST["p_id"];
 $editprayername=$_POST["editprayername"];
 $editprayercon=$_POST["editprayercon"];
 






        $table2 = "select * from prayer_tbl where `p_id`='".$p_id."'";
        $run_query2b = mysqli_query($c1,$table2);         

 		$row = mysqli_fetch_assoc($run_query2b);

$a1=$row['prayername'];
$a2=$row['prayercon'];



if (empty($editprayername))
{
	$editprayername=$a1;
}
if(empty($editprayercon))
{
	$editprayercon=$a2;
}



  $table2c = "UPDATE prayer_tbl SET `prayername`='".$editprayername."',`prayercon`='".$editprayercon."',`prayerposted`='".$prayerposted."' where `p_id`='".$p_id."'";


   $run_query2d = mysqli_query($c1,$table2c);
   

   echo"<script>window.location.href='admin_prayers.php';</script>";
 ?>  