

 <?php  
 //insert.php  

require_once('connect.php');
$prayerposted=$_SESSION['fn'];
$prayername=$_POST["prayername"];
$prayercon=$_POST["prayercon"];





  $table2c = "INSERT INTO prayer_tbl (`prayername`,`prayercon`,`prayerposted`) VALUES ('".$prayername."','".$prayercon."','".$prayerposted."') ";
   $run_query2d = mysqli_query($c1,$table2c);
   
        echo"<script>window.location.href='admin_prayers.php';</script>";
 ?>  