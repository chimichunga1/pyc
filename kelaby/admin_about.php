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
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<?php include("admin-header.php"); ?>
  <?php include("main-sidebar.php"); ?>

<div class="content-wrapper">


<div class="wrapper bgded overlay" style="background-color: #1c7aa8;" >
  <section class="hoc container clear" id="aboutpyc"> 
    <!-- ################################################################################################ -->
    <ul class="nospace group center">
      <li class="one_quarter first">
        <h6 class="heading font-x3" >Who is PYC?</h6>
      </li>
      <li class="one_quarter"><a class="block btmspace-10 fa fa-4x fa-group" href="admin_about.php#mission" style="color: white;"></a> </li>
      <li class="one_quarter"><a class="block btmspace-10 fa fa-4x fa-eye" href="admin_about.php#vision" style="color: white;"></a> </li>
      <li class="one_quarter"><a class="block btmspace-10 fa fa-4x fa-heart" href="admin_about.php#core_values" style="color: white;"></a></li>
    </ul>
    <!-- ################################################################################################ -->
  </section>
</div>

<section id="mission" class="wrapper" style="background-color: white; color: black;">
<br><br>
<div class="wrapper" style="background-color: white;">

<center><h1>Mission</h1></center>

<div class="row">
<div class="col-md-1">
</div>
<div class="col-md-5">
<input type="file" name="image">

</div>

<div class="col-md-5">
<textarea></textarea>
</div>
<div class="col-md-1">
</div>



</div>





</div>
<br><br>

</section>

<section id="vision" class="wrapper" style="background-color: white; color: black;">
<br><br>
<div class="wrapper" style="background-color: white;">

<center><h1>Vision</h1></center>

<div class="row">
<div class="col-md-1">
</div>
<div class="col-md-5">
<input type="file" name="image">

</div>

<div class="col-md-5">
<textarea></textarea>
</div>
<div class="col-md-1">
</div>



</div>





</div>
<br><br>

</section>

<section id="core_values" class="wrapper" style="background-color: white; color: black;">
<br><br>
<div class="wrapper" style="background-color: white;">

<center><h1>Core Values</h1></center>

<div class="row">
<div class="col-md-1">
</div>
<div class="col-md-5">
<input type="file" name="image">

</div>

<div class="col-md-5">
<textarea></textarea>
</div>
<div class="col-md-1">
</div>



</div>





</div>
<br><br>

</section>
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
