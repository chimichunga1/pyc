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

<style type="text/css">
  ::-webkit-scrollbar { 
    display: none; 
}
</style>



</head>


<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<?php include("admin-header.php"); ?>
  <?php include("main-sidebar.php"); ?>

<div class="content-wrapper" style="background-color: #222;"  >
<br>

<div class="wrapper" style="background-color: #222;">


<form method="post" action="admin_about.php">
<?php 
;

$row=mysqli_fetch_array(mysqli_query($c1,"SELECT * FROM `about_tbl` WHERE `abt_id`='1'"));
;?>

<div style=" width:98%";>
       <div class="row">

        <div class="col-md-2" style=" text-align: center;">
          <br>
          <br>
          <br>
          <i style="  color: #66ccff;
  font-size: 80px;" class="fa fa-group"></i>
        </div>
        <div class="col-md-10">
          <div class="callout callout-info">
          <h4>MISSION</h4>

        <?php echo "<textarea style='resize:none;' class='form-control' name='a1' rows='3'  >".$row[1]."</textarea> ";?>
        </div>
        </div>
         

       </div>

        <div class="row">

        <div class="col-md-2" style=" text-align: center;">
          <br>
          <br>
          <br>
          <i style="  color: #66ccff;
  font-size: 80px;" class="fa fa-eye"></i>
        </div>
        <div class="col-md-10">
          <div class="callout callout-info">
          <h4>VISION</h4>

        <?php echo "<textarea style='resize:none;' class='form-control' name='a2' rows='3'  >".$row[2]."</textarea> ";?>
        </div>
        </div>
         

       </div>
        <div class="row">

        <div class="col-md-2" style=" text-align: center;">
          <br>
          <br>
          <br>
          <i style="  color: #66ccff;
  font-size: 80px;" class="fa fa-heart"></i>
        </div>
        <div class="col-md-10">
          <div class="callout callout-info">
          <h4>CORE VALUES</h4>

        <?php echo "<textarea style='resize:none;' class='form-control' name='a3' rows='3'  >".$row[3]."</textarea> ";?>
        </div>
        </div>
         
<button type="submit" name="submit" class="btn btn-success pull-right">SAVE CHANGES</button>

</form>
       </div>



</div>
</div>


</div>
<?php 

if(isset($_POST['submit']))
{
  mysqli_query($c1,"UPDATE about_tbl SET `mission`='".$_POST['a1']."',`vision`='".$_POST['a2']."',`corevalues`='".$_POST['a3']."' WHERE `abt_id`='1' ");
  echo"<script>window.location.href='admin_about.php';</script>";
}

else
{

}
?>



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
