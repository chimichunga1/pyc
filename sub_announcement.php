

 <?php  
 //insert.php  

require_once('connect.php');
$announceposted=$_SESSION['fn'];



$announcementname=$_POST["announcementname"];
$announcementdate=$_POST["announcementdate"];
$announcementtime=$_POST["announcementtime"];


 
$announcementtime= date('h:i A', strtotime($announcementtime));
$announcementvenue=$_POST["announcementvenue"];
$announcementcon=$_POST["announcementcon"];
$announcementorganizer=$_POST["announcementorganizer"];






  $table2c = "INSERT INTO announce_tbl (`an_name`,`an_by`,`an_con`,`an_venue`,`an_time`,`an_date`,`an_posted`) VALUES ('".$announcementname."','".$announcementorganizer."','".$announcementcon."','".$announcementvenue."','".$announcementtime."','".$announcementdate."','".$announceposted."') ";
   $run_query2d = mysqli_query($c1,$table2c);
   
        echo"<script>window.location.href='admin_announcements.php';</script>";
 ?>  