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

<div class="wrapper" style="margin:10px; width:98%;">
<button id="addbtn" type='button'  style="width:99%;" class="btn btn-success">Add Accounts +</button>



<div id="panel">

 
  <form  role="form" action="sub_accounts.php" method="post"  enctype="multipart/form-data">
    <div class="form-group">
      <label >  Username:</label>
      <input type="text" class="form-control btn btn-success" name="username" required>
    </div>
    <div class="form-group">
      <label >  Password:</label>
      <input type="text" class="form-control btn btn-success"  name="password" required>
    </div>
    <div class="form-group">
      <label >  Full Name:</label>
      <input type="text" class="form-control btn btn-success"  name="fullname" required>
    </div>
     <div class="form-group">
      <label >  E-mail:</label>
      <input type="text" class="form-control btn btn-success"  name="email" required>
    </div>
      <div class="form-group">
      <label >  Phone:</label>
      <input type="text" class="form-control btn btn-success"  name="phone" required>
    </div>

      <div class="form-group">
      <label >  Access Right</label>
      <input type="number" class="form-control btn btn-success"  name="accessright" min="1" max="2" required>
    </div>

  

 <input type="submit" style="float:right" name="submit_add" id="submit" class="btn btn-success" value="Submit" />  

  </form>




<!-- ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
  </div>
</div>


</div>
<br><br>
<div class="wrapper" style="background-color: white;">



<div class="col-md-12">

  <!--Table-->
<table class="table">

    <!--Table head-->
    <thead class="blue-grey lighten-4">
        <tr>
            <th>User ID</th>
            <th>Username</th>
            <th>Password</th>
            <th>Fullname</th>
            <th>E-mail</th>
            <th>Phone</th>
            <th>Access Right</th>
            <th>Remarks</th>
  
        </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody>
    <?php 
   
    $fetch=mysqli_query($c1,'SELECT * From account_tbl WHERE isDeleted=0 '); 
    while($row=mysqli_fetch_assoc($fetch))
    {

  ?>
        <tr>
            <th scope="row" style="vertical-align: middle;"><?php echo $row['u_id']; ?></th>
            <th style="color: black;background-color: white;vertical-align: middle;"><?php echo $row['username']; ?></th>
            <th style="color: black;background-color: white;vertical-align: middle;"><?php echo $row['password']; ?></th>
            <th style="color: black;background-color: white;vertical-align: middle;"><?php echo $row['fullname']; ?></th>
            <th style="color: black;background-color: white;vertical-align: middle;"><?php echo $row['email']; ?></th>
            <th style="color: black;background-color: white;vertical-align: middle;"><?php echo $row['phone']; ?></th>
            <th style="color: black;background-color: white;vertical-align: middle;"><?php echo $row['access']; ?></th>

            <?php    
      echo "<th style='color: black;background-color: white;vertical-align: middle;' >";
  
  $Mymodal="Mymodal".$row['u_id'];
$Yourmodal="Yourmodal".$row['u_id'];


 //<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#'.$Mymodal.'" ><i class="glyphicon glyphicon-edit"></i></button>
    echo '<center>



    
     <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#'.$Yourmodal.'"><i class="glyphicon glyphicon-remove"></i></button></center>';




  echo "</td>";



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
                 
 <form  role='form' action='del_accounts.php' method='post' >
    <div class='form-group'>
      <input type='text' class='form-control'  name='delID'  style='opacity:0;display:none;' value='".$row['u_id']."'>
      <label ><center>Are you sure you want to delete '".$row['username']."' ?</center></label>
      
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
    <!--Table body-->
</table>
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
<script>
$(document).ready(function(){

    $("#addbtn").click(function(){
        $("#panel").slideToggle("slow");
    });


});
</script>
</body>
</html>
