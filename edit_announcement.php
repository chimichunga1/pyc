
 <?php  
 //insert.php  
require_once('connect.php');


$announceposted=$_SESSION['fn'];



 $edita_id=$_POST["edita_id"];
 $editannouncement=$_POST["editannouncement"];
 $editannouncementdate=$_POST["editannouncementdate"];
  $editannouncementtime=$_POST["editannouncementtime"];
 $editannouncementvenue=$_POST["editannouncementvenue"];
 $editannouncementorganizer=$_POST["editannouncementorganizer"];
$editannouncementcon=$_POST["editannouncementcon"];







        $table2 = "select * from announce_tbl where `a_id`='".$edita_id."'";
        $run_query2b = mysqli_query($c1,$table2);         

 		$row = mysqli_fetch_assoc($run_query2b);

$a1=$row['an_name'];
$a2=$row['an_by'];
$a3=$row['an_con'];
$a4=$row['an_venue'];
$a5=$row['an_time'];
$a6=$row['an_date'];



if (empty($editannouncement))
{
	$editannouncement=$a1;
}
if(empty($editannouncementdate))
{
	$editannouncementdate=$a6;
}
if (empty($editannouncementtime))
{
	$editannouncementtime=$a5;

}
if (!empty($editannouncementtime)) {
	
	$editannouncementtime= date('h:i A', strtotime($editannouncementtime));
}

if (empty($editannouncementvenue))
{
	$editannouncementvenue=$a4;
}

if (empty($editannouncementorganizer))
{
	$editannouncementorganizer=$a2;
}

if (empty($editannouncementcon))
{
	$editannouncementcon=$a3;
}

$e1=$editannouncement;
$e2=$editannouncementorganizer;
$e3=$editannouncementcon;
$e4=$editannouncementvenue;
$e5=$editannouncementtime;
$e6=$editannouncementdate;
$e7=$announceposted;



  $table2c = "UPDATE announce_tbl SET `an_name`='".$e1."',`an_by`='".$e2."',`an_con`='".$e3."',`an_venue`='".$e4."',`an_time`='".$e5."',`an_date`='".$e6."',`an_posted`='".$e7."' where `a_id`='".$edita_id."'";


   $run_query2d = mysqli_query($c1,$table2c);
   

   echo"<script>window.location.href='admin_announcements.php';</script>";
 ?>  