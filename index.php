<!DOCTYPE html>
<html lang="en">
<head>

<title>Our Lady of the Holy Rosary Parish</title>
<meta name="description" content="">
<meta name="author" content="">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/font-awesome.min.css">


<!-- Main css -->
<link rel="stylesheet" href="css/style1.css">
<link rel="stylesheet" href="css/w3w.css">
<!-- Google Font -->
<link href='https://fonts.googleapis.com/css?family=Poppins:400,500,600' rel='stylesheet' type='text/css'>

<style type="text/css">
	.section1 #myVideo {
position: relative;

 	min-width: 100%; 
    min-height:100%;
 

    opacity: 0.5;
}

  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
  		min-width: 100%;

  	
  		height: 550px;
      margin: auto;
  }

</style>
</head>

<body data-spy="scroll" data-offset="50" data-target=".navbar-collapse">

<!-- =========================
     LOGIN      
============================== -->
<div class="w3w-container">


  <div id="id01" class="w3w-modal" style="background-color: rgba(0,0,0,0.9);position: fixed;z-index: 99999;">
    <div class="w3w-modal-content w3w-card-4 w3w-animate-zoom" style="max-width:60%;" >

      <div class="row" style="margin:0px;background-color: #2196F3; color:white;">
        <span onclick="document.getElementById('id01').style.display='none'" class="w3w-button w3w-xlarge w3w-hover-red w3w-display-topright" title="Close Modal">&times;</span>
        <div class="col-md-4"><img src="images/logo.png" style="width:80%;opacity: 0.8;" ></div>

        <div class="col-md-8">
        
        	<br>
        	<br>
        	<br><center><h1 >Our Lady of the Holy Rosary Parish</h1></center></div>


      </div>

      <form class="w3w-container" action="index.php" method="post">
        <div class="w3w-section">
          <label><b>Username</b></label>
          <input class="w3w-input w3w-border w3w-margin-bottom" type="text" placeholder="Enter Username" name="username" required>
          <label><b>Password</b></label>
          <input class="w3w-input w3w-border" type="password" placeholder="Enter Password" name="password" required>
          <button class="w3w-button w3w-block w3w-blue w3w-section w3w-padding" name="submit" type="submit">Login</button>
  
        </div>
      </form>

   

    </div>
  </div>
</div>


<?php

include ("connect.php");

if(isset($_POST['submit']))

{
$row=mysqli_query($c1,'SELECT * From `account_tbl` WHERE `username`="'.$_POST["username"].'" AND `password`="'.$_POST["password"].'" ');

$search= mysqli_fetch_assoc($row);


  if (!empty($search))
  {


  $_SESSION['fn']=$search['fullname'];

    echo " 
  <script>
  alert('".$search['fullname']." Login Successful');
  window.location.href='index_admin.php';

  </script>";  

  }
  else
  {
     echo " 
  <script>
  alert('Login Failed');


  </script>";
  }
}


?>

            

<!-- =========================
     PRE LOADER       
============================== -->
<div class="preloader">

	<div class="sk-rotating-plane"></div>

</div>


<!-- =========================
     NAVIGATION LINKS     
============================== -->


<div class="navbar navbar-fixed-top custom-navbar" role="navigation">
	<div class="container">

		<!-- navbar header -->
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<a href="#" class="navbar-brand">OLHRP</a>
		</div>

		<div class="collapse navbar-collapse">


						<?php 

						$navigation=array("HOME","NEWS","ANNOUNCEMENTS","PRAYERS","RESERVATIONS","WHAT IS OLHRP");


						echo '<ul class="nav navbar-nav navbar-right">';
						for ($i=0; $i < count($navigation); $i++) { 
						echo "<li><a href='#".$navigation[$i]."' class='smoothScroll'>".$navigation[$i]."</a></li>";
						}
						echo '</ul>';

						?>
			
		
		</div>

	</div>
</div>
<!-- =========================
    1 SECTION   
============================== -->

<?php echo '<section id="'.$navigation[0].'" class="parallax-section section1">';?>
<video autoplay  loop id="myVideo" height="85%"  >
  <source src="video/v1.mp4" type="video/mp4">

</video>	
<!-- <div class="embed-responsive embed-responsive-16by9" style="position:absolute; z-index:10;">
  <iframe class="embed-responsive-item" src="video/v1.mp4" allowfullscreen></iframe>
</div> -->
	<div class="container">
		<div class="row">

			<div class="col-md-12 col-sm-12" style="position:absolute;left:0;">
				<h1 class="wow bounceIn" data-wow-delay="5s">Our Lady of the Holy Rosary Parish</h1>
	
				<a  onclick="document.getElementById('id01').style.display='block'" class="btn btn-lg btn-default smoothScroll wow fadeInUp hidden-xs" data-wow-delay="5.3s">SIGN IN</a>
				<a href="#register" class="btn btn-lg btn-danger smoothScroll wow fadeInUp" data-wow-delay="5.3s">REGISTER NOW</a>
			</div>


		</div>
	</div>
</section>


<!-- =========================
    SUNDAY SECTION   
============================== -->
<div style="padding:0 5%;">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>

    </ol>
    	<div class="col-md-12 col-sm-12 wow bounceIn" >
				<div class="section-title">
					<br>
					<center><h2>SUNDAY REFLECTION</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. </p>
				</div>
		</div>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="images/speakers-img1.jpg" alt="Chania">
        <div class="carousel-caption">
          <h2>Chania</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>

     
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    </a>
  </div>

</div>

<!-- =========================
    z2 SECTION   
============================== -->
<?php echo '<section id="'.$navigation[1].'" class="parallax-section sectionA2">';?>
	<div class="container">
		<div class="row">

			<!-- Section title
			================================================== -->
			<div class="wow bounceIn col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 text-center">
				<div class="section-title">
					<h2>NEWS</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. </p>
				</div>
			</div>

			
<?php 

date_default_timezone_set('Asia/Manila');

$timerangestart=date("Y-m-d"); 
$timerangeend=date('Y-m-d', strtotime($timerangestart. '+ 7 day'));




$qnews=mysqli_query($c1,"SELECT * FROM news_tbl WHERE  `newsdate` BETWEEN '".$timerangestart."' AND '".$timerangeend."' ");

while ($rownews=mysqli_fetch_array($qnews)) 
{


$str=$rownews[3] ;
$modalnewsid=$rownews[0];


		echo '<div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="0.9s">
				<img src="'.$rownews[4].'" class="img-responsive" >
				<center><h4>'.$rownews[1].'</h4>';




$postnews=substr($str, 0, 100);

 echo "<p>".$postnews.". . .</p>";
 echo '<a data-toggle="modal" data-target="#'.$modalnewsid.'" class="btn btn-info">Read More . . .</a></center>
 ';



				


echo '<br><br></div>';

echo "<!-- Modal HTML -->
    <div id='".$modalnewsid."' class='modal fade'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                    <h4 class='modal-title'>News </h4>
                </div>
                <div class='modal-body'>
                 


<h1>".$rownews[1]."</h1>
<p>".$rownews[3]."</p>


                </div>
                <div class='modal-footer'>
                   
                    <button type='button' class='btn btn-danger' data-dismiss='modal'>Close</button>

                </div>
            </div>
        </div>
    </div>
";		
			
	


}


?>
		 
		


		



	</div>
	</div>


</section>












<!-- =========================
    PROGRAM SECTION   
============================== -->
<?php echo '<section id="'.$navigation[2].'" class="parallax-section section5" >';?>
	<div class="container">
		<div class="row">

			<div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="0.6s">
				<div class="section-title">
					<h2>ANNOUNCEMENT</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. </p>
				</div>
			</div>

			<div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="0.9s">
				<!-- Nav tabs -->
				<?php

				date_default_timezone_set("Asia/manila");
		
				
				?>
				<ul class="nav nav-tabs" role="tablist">

					<li class="active"><a href="#1day" aria-controls="1day" role="tab" data-toggle="tab">TODAY</a></li>
					<li><a href="#2day" aria-controls="2day" role="tab" data-toggle="tab"><?php echo date("m / j / Y", strtotime('+ 1 day'));?></a></li>
					<li><a href="#3day" aria-controls="3day" role="tab" data-toggle="tab"><?php echo date("m / j / Y", strtotime('+ 2 day'));?></a></li>
					<li><a href="#4day" aria-controls="4day" role="tab" data-toggle="tab"><?php echo date("m / j / Y", strtotime('+ 3 day'));?></a></li>
					<li><a href="#5day" aria-controls="5day" role="tab" data-toggle="tab"><?php echo date("m / j / Y", strtotime('+ 4 day'));?></a></li>
					<li><a href="#6day" aria-controls="6day" role="tab" data-toggle="tab"><?php echo date("m / j / Y", strtotime('+ 5 day'));?></a></li>
					<li><a href="#7day" aria-controls="7day" role="tab" data-toggle="tab"><?php echo date("m / j / Y", strtotime('+ 6 day'));?></a></li>

				</ul>
				<!-- tab panes -->
				<div class="tab-content">


<?php 

$day1=date("Y-m-d"); 
$day2=date('Y-m-d', strtotime($day1. '+ 2 day'));
$day3=date('Y-m-d', strtotime($day1. '+ 3 day'));
$day4=date('Y-m-d', strtotime($day1. '+ 4 day'));
$day5=date('Y-m-d', strtotime($day1. '+ 5 day'));
$day6=date('Y-m-d', strtotime($day1. '+ 6 day'));


?>

					<div role="tabpanel" class="tab-pane active" id="1day">
				

<?php 

$qday1=mysqli_query($c1,"SELECT * FROM `announce_tbl` WHERE `an_date`='".$day1."' ");


while ($rday1=mysqli_fetch_array($qday1))
{

echo '	<div class="col-md-12 col-sm-12">
							<h6>
								<span><i class="fa fa-clock-o"></i>'.$rday1[5].'</span> 
								<span><i class="fa fa-map-marker"></i>'.$rday1[4].'</span>
							</h6>
							<h3>'.$rday1[1].'</h3>
							<h4>By '.$rday1[2].'</h4>
							<p>'.$rday1[3].'</p>
						</div>

						
						<div class="program-divider col-md-12 col-sm-12"></div>';

}

?>

					

						



					</div>

					<div role="tabpanel" class="tab-pane " id="2day">
	
					
<?php 

$qday2=mysqli_query($c1,"SELECT * FROM `announce_tbl` WHERE `an_date`='".$day2."' ");


while ($rday2=mysqli_fetch_array($qday2))
{

echo '	<div class="col-md-12 col-sm-12">
							<h6>
								<span><i class="fa fa-clock-o"></i>'.$rday2[5].'</span> 
								<span><i class="fa fa-map-marker"></i>'.$rday2[4].'</span>
							</h6>
							<h3>'.$rday2[1].'</h3>
							<h4>By '.$rday2[2].'</h4>
							<p>'.$rday2[3].'</p>
						</div>

						
						<div class="program-divider col-md-12 col-sm-12"></div>';

}

?>

					</div>

					<div role="tabpanel" class="tab-pane " id="3day">
						

						<?php 

$qday3=mysqli_query($c1,"SELECT * FROM `announce_tbl` WHERE `an_date`='".$day3."' ");


while ($rday3=mysqli_fetch_array($qday3))
{

echo '	<div class="col-md-12 col-sm-12">
							<h6>
								<span><i class="fa fa-clock-o"></i>'.$rday3[5].'</span> 
								<span><i class="fa fa-map-marker"></i>'.$rday3[4].'</span>
							</h6>
							<h3>'.$rday3[1].'</h3>
							<h4>By '.$rday3[2].'</h4>
							<p>'.$rday3[3].'</p>
						</div>

						
						<div class="program-divider col-md-12 col-sm-12"></div>';

}

?>
						
					</div>

					<div role="tabpanel" class="tab-pane " id="4day">
						
<?php 

$qday4=mysqli_query($c1,"SELECT * FROM `announce_tbl` WHERE `an_date`='".$day4."' ");


while ($rday4=mysqli_fetch_array($qday4))
{

echo '	<div class="col-md-12 col-sm-12">
							<h6>
								<span><i class="fa fa-clock-o"></i>'.$rday4[5].'</span> 
								<span><i class="fa fa-map-marker"></i>'.$rday4[4].'</span>
							</h6>
							<h3>'.$rday4[1].'</h3>
							<h4>By '.$rday4[2].'</h4>
							<p>'.$rday4[3].'</p>
						</div>

						
						<div class="program-divider col-md-12 col-sm-12"></div>';

}

?>

					</div>

					<div role="tabpanel" class="tab-pane " id="5day">
						
<?php 

$qday5=mysqli_query($c1,"SELECT * FROM `announce_tbl` WHERE `an_date`='".$day5."' ");


while ($rday5=mysqli_fetch_array($qday5))
{

echo '	<div class="col-md-12 col-sm-12">
							<h6>
								<span><i class="fa fa-clock-o"></i>'.$rday5[5].'</span> 
								<span><i class="fa fa-map-marker"></i>'.$rday5[4].'</span>
							</h6>
							<h3>'.$rday5[1].'</h3>
							<h4>By '.$rday5[2].'</h4>
							<p>'.$rday5[3].'</p>
						</div>

						
						<div class="program-divider col-md-12 col-sm-12"></div>';

}

?>

					</div>

					<div role="tabpanel" class="tab-pane " id="6day">
						

<?php 

$qday6=mysqli_query($c1,"SELECT * FROM `announce_tbl` WHERE `an_date`='".$day6."' ");


while ($rday6=mysqli_fetch_array($qday6))
{

echo '	<div class="col-md-12 col-sm-12">
							<h6>
								<span><i class="fa fa-clock-o"></i>'.$rday6[5].'</span> 
								<span><i class="fa fa-map-marker"></i>'.$rday6[4].'</span>
							</h6>
							<h3>'.$rday6[1].'</h3>
							<h4>By '.$rday6[2].'</h4>
							<p>'.$rday6[3].'</p>
						</div>

						
						<div class="program-divider col-md-12 col-sm-12"></div>';

}

?>

						
					</div>

					



					

				</div>

		</div>
	</div>
</section>

<!-- =========================
    SPONSORS SECTION   
============================== -->
<?php echo '<section id="'.$navigation[3].'" class="parallax-section section5" >';?>
	<div class="container">
		<div class="row">

			<div class="wow bounceIn col-md-12 col-sm-12">
				<div class="section-title">
					<h2>PRAYERS</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. </p>
				</div>
			</div>
<br>
<br>
<br>
<?php $qprayer=mysqli_query($c1,"SELECT * FROM prayer_tbl");
	 while ($row=mysqli_fetch_array($qprayer)) {

$modalprayerid="prayer".$row[0];
	 
?>




			<div class="wow fadeInUp col-md-4 col-sm-6 col-xs-6" data-wow-delay="0.3s">
				<br>
				<?php echo '<DIV data-toggle="modal" data-target="#'.$modalprayerid.'" style="padding:20px;border:3px solid #46b8da;"><SPAN style="font-size:2em;color:#46b8da;"><b>'.$row[1].' </b></SPAN></DIV>
				';?>

				<br>
			</div>




	

<?php	
echo "
<!-- Modal HTML -->
    <div id='".$modalprayerid."' class='modal fade'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                    <h4 class='modal-title'>PRAYERS </h4>
                </div>
                <div class='modal-body'>
                 


<h1>".$row[1]."</h1>
<p>".$row[2]."</p>


                </div>
                <div class='modal-footer'>
                   
                    <button type='button' class='btn btn-danger' data-dismiss='modal'>Close</button>

                </div>
            </div>
        </div>
    </div>
";




 }
?>

			
<br>
<br>
<br>
		</div>
	</div>
</section>






<!-- =========================
   REGISTER SECTION   
============================== -->
<section id="register" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="wow fadeInUp col-md-7 col-sm-7" data-wow-delay="0.6s">
				<h2>Register Here</h2>
				<h3>Nunc eu nibh vel augue mollis tincidunt id efficitur tortor. Sed pulvinar est sit amet tellus iaculis hendrerit.</h3>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet consectetuer diam nonummy.</p>
			</div>

			<div class="wow fadeInUp col-md-5 col-sm-5" data-wow-delay="1s">
				<form action="#" method="post">
					<input name="username" type="text" class="form-control" id="username" placeholder="Username">
					<input name="password" type="text" class="form-control" id="password" placeholder="Password">
					<input name="firstname" type="text" class="form-control" id="firstname" placeholder="First Name">
					<input name="lastname" type="text" class="form-control" id="lastname" placeholder="Last Name">
					<input name="phone" type="telephone" class="form-control" id="phone" placeholder="Phone Number">
					<input name="email" type="email" class="form-control" id="email" placeholder="Email Address">
					<div class="col-md-offset-6 col-md-6 col-sm-offset-1 col-sm-10">
						<input name="submit" type="submit" class="form-control" id="submit" value="REGISTER">
					</div>
				</form>
			</div>

			<div class="col-md-1"></div>

		</div>
	</div>
</section>
<!-- =========================
   A2 SECTION   
============================== -->
<?php echo '<section id="'.$navigation[4].'" class="parallax-section sectionA2">';?>
	<div class="container">
		<div class="row">


			<div class="wow bounceIn col-md-12 col-sm-12">
				<div class="section-title">
					<CENTER><h2>RESERVATIONS</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. </p>
						</CENTER>
				</div>
			</div>
		
					
			<div class="wow fadeInUp col-md-4 col-sm-6" data-wow-delay="0.9s">
				<img src="images/overview-img.jpg" class="img-responsive" alt="Overview">
					<CENTER><h3>PARISH</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. </p>

						<a class="btn btn-info">RESERVE</a></CENTER>
						<BR>
			</div>
			<div class="wow fadeInUp col-md-4 col-sm-6" data-wow-delay="0.9s">
				<img src="images/overview-img.jpg" class="img-responsive" alt="Overview">
					<CENTER><h3>PARISH HALL</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. </p>

						<a class="btn btn-info">RESERVE</a></CENTER>
						<BR>


			</div>


			<div class="wow fadeInUp col-md-4 col-sm-6" data-wow-delay="0.9s">
				<img src="images/overview-img.jpg" class="img-responsive" alt="Overview">
					<CENTER><h3>KITCHEN</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. </p>
						<a class="btn btn-info">RESERVE</a></CENTER>
						<BR>
			</div>
				<div class="wow fadeInUp col-md-2 " data-wow-delay="0.9s">
				</div>
			<div class="wow fadeInUp col-md-4 col-sm-6" data-wow-delay="0.9s">
				<img src="images/overview-img.jpg" class="img-responsive" alt="Overview">
					<CENTER><h3>YOUTH CENTER</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. </p>
						<a class="btn btn-info">RESERVE</a></CENTER>
						<BR>
			</div>
	<div class="wow fadeInUp col-sm-3 " data-wow-delay="0.9s">
				</div>
			<div class="wow fadeInUp col-md-4 col-sm-6" data-wow-delay="0.9s">
				<img src="images/overview-img.jpg" class="img-responsive" alt="Overview">
					<CENTER><h3>FORMATION HALL</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. </p>
						<a class="btn btn-info">RESERVE</a></CENTER>
			</div>
			<div class="wow fadeInUp col-md-2 " data-wow-delay="0.9s">
				</div>
			
			
		</div>
	</div>
</section>



<!-- =========================
    VENUE SECTION   
============================== -->
<section id="venue" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="wow fadeInLeft col-md-offset-1 col-md-5 col-sm-8" data-wow-delay="0.9s">
				<h2>OLHRP</h2>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat.</p>
				<h4>Our Lady of the Holy Rosary Parish</h4>
  				<h4>street</h4>
  				<h4>country,zip</h4>
				<h4>Tel: 010-020-0120</h4>		
			</div>

		</div>
	</div>
</section>



<!-- =========================
    CONTACT SECTION   
============================== -->
<section id="contact" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="wow fadeInUp col-md-offset-1 col-md-5 col-sm-6" data-wow-delay="0.6s">
				<div class="contact_des">
					<h3>OLHRP</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				
				</div>
			</div>

			<div class="wow fadeInUp col-md-5 col-sm-6" data-wow-delay="0.9s">
				<div class="contact_detail">
					<div class="section-title">
						<h2>Keep in touch</h2>
					</div>
					<form action="#" method="post">
						<input name="name" type="text" class="form-control" id="name" placeholder="Name">
					  	<input name="email" type="email" class="form-control" id="email" placeholder="Email">
					  	<textarea name="message" rows="5" class="form-control" id="message" placeholder="Message"></textarea>
						<div class="col-md-6 col-sm-10">
							<input name="submit" type="submit" class="form-control" id="submit" value="SEND">
						</div>
					</form>
				</div>
			</div>

		</div>
	</div>
</section>

<!-- =========================
   6 SECTION   
============================== -->
<?php echo '<section id="'.$navigation[5].'" class="parallax-section section6 section5" >';?>
	<br>
	<BR><br>
	<BR>
	<div class="container">
		<div class="row">

<?php $qmvc=mysqli_query($c1,"SELECT * FROM about_tbl WHERE abt_id='1'");
$rowmvc=mysqli_fetch_array($qmvc);
?>

			<div class="wow fadeInLeft col-md-4 col-sm-4" data-wow-delay="0.3s">
				<i class="fa fa-group"></i>
				<h3>MISSION</h3>
				<p><?php echo $rowmvc[1];?></p>
			</div>

			<div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="0.6s">
				<i class="fa fa-eye"></i>
				<h3>VISION</h3>
				<p><?php echo $rowmvc[2];?></p>
			</div>

			<div class="wow fadeInRight col-md-4 col-sm-4" data-wow-delay="0.9s">
				<i class="fa fa-heart"></i>
				<h3>CORE VALUES</h3>
			<p><?php echo $rowmvc[3];?></p>
			</div>


		</div>



	</div>
</section>
<!-- =========================
    FOOTER SECTION   
============================== -->
<footer>
	<div class="container">
		<div class="row">

			<div class="col-md-12 col-sm-12">
				<p class="wow fadeInUp" data-wow-delay="0.6s">Copyright &copy; 2018 Our Lady of the Holy Rosary Parish</p>

				<ul class="social-icon">
					<li><a href="#" class="fa fa-facebook wow fadeInUp" data-wow-delay="1s"></a></li>
					<li><a href="#" class="fa fa-twitter wow fadeInUp" data-wow-delay="1.3s"></a></li>
					<li><a href="#" class="fa fa-dribbble wow fadeInUp" data-wow-delay="1.6s"></a></li>
					<li><a href="#" class="fa fa-behance wow fadeInUp" data-wow-delay="1.9s"></a></li>
					<li><a href="#" class="fa fa-google-plus wow fadeInUp" data-wow-delay="2s"></a></li>
				</ul>

			</div>
			
		</div>
	</div>
</footer>


<!-- Back top -->
<a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>


<!-- =========================
     SCRIPTS   
============================== -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.parallax.js"></script>

<script src="js/smoothscroll.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>
<script type="text/javascript">
	// Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });
</script>
</body>
</html>