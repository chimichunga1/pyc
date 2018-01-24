
<!DOCTYPE html>
<html>
<head>
  <title>OLHRP | RESERVE</title>
  <script src="sm/sm2/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" type="text/css" href="sm/sm2/dist/sweetalert2.css">
</head>
<body>



<?php 
include("connect.php");

$event_id = $_SESSION["event_id"];
$u_id=$_SESSION['u_id'];
(int)$t_id=$_POST['t_id'];
$r_date=$_POST['r_date'];

/*echo $event_id;
echo "<br>";
echo $u_id;
echo "<br>";
echo $t_id;
echo "<br>";
echo $r_date;

*/


  $xQx_select = "SELECT * FROM reserve_tbl WHERE event_id = '$event_id' AND r_date = '$r_date' AND t_id = '$t_id' ";
  $row=mysqli_query($c1,$xQx_select);
  
$search= mysqli_fetch_assoc($row);


  if (empty($search))
{

  $xQx_insert = "INSERT INTO reserve_tbl ( u_id, event_id, r_date, t_id, isDeleted) VALUES ( '$u_id', '$event_id', '$r_date', '$t_id', '0')";
  $query_insert=mysqli_query($c1,$xQx_insert);


    
?>



 <script>

swal({

  title: 'RESERVED',
  type:'success',
    text: 'Date Reserved!'

}).then(result => {
  if (result.value) {
 
window.location.href='index.php';

  } else {

  }
})


 </script>
 <?php
}
else
{
?>



 <script>

swal({

  title: 'RESERVED',
    type:'error',
    text: 'This date is already reserved!'

}).then(result => {
  if (result.value) {
 
window.location.href='index.php';

  } else {

  }
})


 </script>  
 <?php
}
 ?>


</body>
</html>
