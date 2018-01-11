<!DOCTYPE html>
<html>
<head>  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | PYC</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<?php include("admin-head-links.php"); ?>
</head>

<?php session_start();?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<?php include("admin-header.php"); ?>
  <?php include("main-sidebar.php"); ?>

<div class="content-wrapper">

<div class="container" style="background-color: transparent;">

<div class="col-md-12">
<br>

<h1><center>Basic Prayers</center></h1>
<h3><center><button class="btn btn-primary">Add a Basic Prayer</button> </center></h3>



  <center><!--Table-->
<table class="table">

    <!--Table head-->
    <thead class="blue-grey lighten-4">
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Actions</th>
       
        </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td style="color: black;">Our Father</td>
              <td style="color: black; "> <button class="btn btn-success"><a class="fa fa-eye" style="color:white;"></a> </button>  <button class="btn btn-primary"><a class="fa fa-edit" style="color:white;"></a> </button> <button class="btn btn-danger"><a class="fa fa-close" style="color:white;"></a> </button></td>    

        </tr>

    </tbody>
    <!--Table body-->
</table>
<!--Table--></center>


</div>



</div>




<div class="container" style="background-color: transparent;">

<div class="col-md-12">
<br>

<h1><center>Routine Prayers</center></h1>
<h3><center><button class="btn btn-primary">Add a Routine Prayer</button> </center></h3>



  <center><!--Table-->
<table class="table">

    <!--Table head-->
    <thead class="blue-grey lighten-4">
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Actions</th>
       
        </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td style="color: black;">Morning Prayer</td>
              <td style="color: black; "> <button class="btn btn-success"><a class="fa fa-eye" style="color:white;"></a> </button>  <button class="btn btn-primary"><a class="fa fa-edit" style="color:white;"></a> </button> <button class="btn btn-danger"><a class="fa fa-close" style="color:white;"></a> </button></td>    

        </tr>

    </tbody>
    <!--Table body-->
</table>
<!--Table--></center>


</div>



</div>





<div class="container" style="background-color: transparent;">

<div class="col-md-12">
<br>

<h1><center>Rosary</center></h1>
<h3><center><button class="btn btn-primary">Add a Rosary Prayer</button> </center></h3>



  <center><!--Table-->
<table class="table">

    <!--Table head-->
    <thead class="blue-grey lighten-4">
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Actions</th>
       
        </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td style="color: black;">Rosary</td>
              <td style="color: black; "> <button class="btn btn-success"><a class="fa fa-eye" style="color:white;"></a> </button>  <button class="btn btn-primary"><a class="fa fa-edit" style="color:white;"></a> </button> <button class="btn btn-danger"><a class="fa fa-close" style="color:white;"></a> </button></td>    

        </tr>

    </tbody>
    <!--Table body-->
</table>
<!--Table--></center>


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
</body>
</html>
