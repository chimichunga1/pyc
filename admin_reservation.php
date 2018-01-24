<?php  include ('connect.php');?>
<!DOCTYPE html>
<html>
<head>  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | OLHRP</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<?php include("admin-head-links.php"); ?>


<link rel="stylesheet" href="DT/dt.css">
<style type="text/css">
  

/* The container */
.containerbtn {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* Hide the browser's default radio button */
.containerbtn input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
    border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.containerbtn:hover input ~ .checkmark {
    background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.containerbtn input:checked ~ .checkmark {
    background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the indicator (dot/circle) when checked */
.containerbtn input:checked ~ .checkmark:after {
    display: block;
}

/* Style the indicator (dot/circle) */
.containerbtn .checkmark:after {
  top: 9px;
  left: 9px;
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: white;
}

  
</style>
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">



    <!-- Material Design Bootstrap -->
    <link href="layout/styles/mdb.min.css" rel="stylesheet">

    <!-- Your custom styles (optional) -->
    <link href="layout/styles/style.css" rel="stylesheet">
        <link href="layout/styles/simple-sidebar.css" rel="stylesheet">

<script type="text/javascript">


$(document).ready(function(){
 

    $(".show-text").click(function(){
      $('#myModal').find(".lots-of-text").toggle();
        $('#myModal').modal('handleUpdate');
    });
});
</script>
        <style type="text/css">

#panel {
  
    display: none;
    margin-left: 20px;
    margin-right: 20px;

}
button 
{
  text-decoration: none !important;
}
label
{
  font-size:1em;
  margin-left: 20px;
}
img 
{
  width: 60px;
  height: 60px;
}
</style>





</head>


<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<?php include("admin-header.php"); ?>
  <?php include("main-sidebar.php"); ?>

<div class="content-wrapper">

<br><br>
<div class="wrapper" style="background-color: transparent;">

<center><b><a style="color:black; font-size:24px;">RESERVATIONS</a></b></center>
</div>
<br><br>
<div class="wrapper" style="background-color: white;">




<div class="col-md-12">

<table id="reserve" class="display" cellspacing="0" width="100%">
        <thead >
            <tr>
              <th>ID</th>
              <th>Reservee</th>
              <th>Name</th>
              <th>Venue</th>
              <th>Reservation Date</th>
              <th>Time</th>
              <th>Remarks</th>
            </tr>
        </thead>

        <tbody>
                   <?php 
   
    $fetch=mysqli_query($c1,'SELECT * From reserve_tbl'); 
    while($row=mysqli_fetch_assoc($fetch))
    {

  ?>
        <tr>
            <td scope="row" style="vertical-align: middle;"><?php echo $row['r_id']; ?></td>
            <?php   $fetchuid=mysqli_fetch_array(mysqli_query($c1,'SELECT * From account_tbl where `u_id`="'.$row['u_id'].'" ')); ?>


            <td style="color: black;background-color: white;vertical-align: middle;"><?php echo $fetchuid[3]; ?></td>



            <td style="color: black;background-color: white;vertical-align: middle;"><?php echo $row['r_name']; ?></td>
            <?php   $fetchvid=mysqli_fetch_array(mysqli_query($c1,'SELECT * From venue_tbl where `v_id`="'.$row['v_id'].'" ')); ?>


            <td style="color: black;background-color: white;vertical-align: middle;"><?php echo $fetchvid[1]; ?></td>
            <td style="color: black;background-color: white;vertical-align: middle;"><?php echo $row['r_date']; ?></td>

            <?php   $fetchtid=mysqli_fetch_array(mysqli_query($c1,'SELECT * From time_tbl where `t_id`="'.$row['t_id'].'" ')); ?>
            <td style="color: black;background-color: white;vertical-align: middle;"><?php echo $fetchtid[1]." - ".$fetchtid[2] ?></td>


            <?php    
      echo "<td style='color: black;background-color: white;vertical-align: middle;' >";
  
  $Mymodal="Mymodal".$row['u_id'];
$Yourmodal="Yourmodal".$row['u_id'];
    echo '<center>



     <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#'.$Mymodal.'" ><i class="glyphicon glyphicon-edit"></i></button>
     <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#'.$Yourmodal.'"><i class="glyphicon glyphicon-remove"></i></button></center>';




  echo "</td>";



echo
"
    
    <!-- Modal HTML -->
    <div id='".$Mymodal."' class='modal fade'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                    <h4 class='modal-title'>EDIT FORM </h4>
                </div>
                <div class='modal-body'>
        


 <form  role='form' action='edit_reservation.php' method='post' enctype='multipart/form-data'>
    <div class='form-group'>
      <input type='text' class='form-control' name='editr_id'   style='opacity:0;z-index:-9999;position:absolute;' value='".$row['r_id']."'>
      <label >Reservation Name:</label>
      <input type='text' class='form-control'  name='editreservation' placeholder='".$row['r_name']."' >
    </div>
";



echo "
  <div class='form-group'>
      <label >Date:</label>
      <input type='date' class='form-control'  name='editr_date' placeholder='".$row['r_date']."' >
    </div>

      <div class='form-group'>
  <label class='containerbtn'> SLOT 1 | 08:00 AM - 11:00 AM
  <input type='radio' name='t_id'  checked value='1' required>
  <span class='checkmark'></span>
</label>
<label class='containerbtn'>SLOT 2 | 12:00 PM - 03:00 PM
  <input type='radio' name='t_id' value='2' >
  <span class='checkmark'></span>
</label>
<label class='containerbtn'>SLOT 3 | 04:00 PM - 07:00 PM
  <input type='radio' name='t_id' value='3' >
  <span class='checkmark'></span>
</label>

    </div>




 



                </div>
                <div class='modal-footer'>
                    <button type='submit' name='submit_edit' class='btn btn-success'>Save</button>
                    <button type='button' class='btn btn-danger' data-dismiss='modal'>Close</button>
  </form>
                </div>
            </div>
        </div>
    </div>
";
//==========================================================================
  echo
"
    
    <!-- Modal HTML -->
    <div id='".$Yourmodal."' class='modal fade'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                    <h4 class='modal-title'>DELETE FORM </h4>
                </div>
                <div class='modal-body'>
                 
 <form  role='form' action='del_reservation.php' method='post' >
    <div class='form-group'>
      <input type='text' class='form-control'  name='delID'  style='opacity:0;display:none;' value='".$row['r_id']."'>
      <label ><center>Are you sure you want to delete '".$row['r_name']."' ?</center></label>
      
    </div>
                </div>
                <div class='modal-footer'>
                    <button type='submit' name='submit_delete'  class='btn btn-success'>Yes</button>
                    <button type='button' class='btn btn-danger' data-dismiss='modal'>No</button>
  </form>
                </div>
            </div>
        </div>
    </div>
";
  
  echo "</tr>";




  ?>
      <?php
       }

    ?>
      
        </tbody>
    </table>





  <!--Table-->

<!--Table-->
</div>
</div>


</div>




<?php include("admin-footer.php"); ?>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<?php include("admin-scripts.php"); ?>
<script src="DT/dt.js"></script>
<script src="DT/dt1.js"></script>
<script src="DT/dt2.js"></script>

<script>
$(document).ready(function(){
    $('#reserve').DataTable({
    

   });

    $("#addbtn").click(function(){
        $("#panel").slideToggle("slow");
    });


});
</script>
</body>
</html>
