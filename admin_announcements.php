<!DOCTYPE html>
<html>
<head>  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | PYC</title>
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

</head>

<?php session_start();?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<?php include("admin-header.php"); ?>
  <?php include("main-sidebar.php"); ?>

<div class="content-wrapper">

<br><br>
<div class="wrapper" style="background-color: transparent;">

<button class="btn btn-success">Add Announcement</button>

</div>
<br><br>
<div class="wrapper" style="background-color: white;">



<div class="col-md-12">

  <!--Table-->
<table class="table">

    <!--Table head-->
    <thead class="blue-grey lighten-4">
        <tr>
            <th>#</th>
            <th>Date</th>
            <th>Posted By</th>
            <th>Title</th>
            <th>Announcements</th>
            <th>Actions</th>
       
        </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td style="color: black;">00/00/00</td>
            <td style="color: black;">Mark</td>
            <td style="color: black;">Title1</td>
            <td style="color: black;">Announcement1</td>
              <td style="color: black; "><button class="btn btn-primary"><a class="fa fa-edit" style="color:white;"></a> </button> <button class="btn btn-danger"><a class="fa fa-close" style="color:white;"></a> </button> </td>    

        </tr>
        <tr>
            <th scope="row">2</th>
            <td style="color: black;">00/00/00</td>
  <td style="color: black;">Mark</td>
            <td style="color: black;">Title2</td>
            <td style="color: black;">Announcement1</td>
             <td style="color: black; "><button class="btn btn-primary"><a class="fa fa-edit" style="color:white;"></a> </button> <button class="btn btn-danger"><a class="fa fa-close" style="color:white;"></a> </button></td>         
        </tr>
        <tr>
            <th scope="row">3</th>
            <td style="color: black;">00/00/00</td>
            <td style="color: black;">Mark</td>
            <td style="color: black;">Title3</td>
            <td style="color: black;">Announcement1</td>
              <td style="color: black; "><button class="btn btn-primary"><a class="fa fa-edit" style="color:white;"></a> </button> <button class="btn btn-danger"><a class="fa fa-close" style="color:white;"></a> </button></td>   

        </tr>
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
</body>
</html>
