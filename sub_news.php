

 <?php  
 //insert.php  
require_once('connect.php');

$newsposted=$_SESSION['fn'];
$news=$_POST["newsname"];

$newscon=$_POST["newscon"];

$tmp_name1 =$_FILES['newsimg']['tmp_name'];

$newsdate=$_POST["newsdate"];







        $table2 = "select MAX(news_ID) from news_tbl";
            $run_query2b = mysqli_query($c1,$table2);         

 		$row = mysqli_fetch_row($run_query2b);
   $IMGID = "P ".$news.$row[0];


if ($_FILES['newsimg']['size'] == 0)
{
 $image = "";
}

else

{
		if($_FILES['newsimg']['name'] = "image/jpeg")
		{


		    $filetype1 = ".jpeg";

		}
		elseif($_FILES['newsimg']['name'] = "image/jpg")
		{

		    $filetype1 = ".jpg";
		}
		elseif($_FILES['newsimg']['name'] = "image/png")
		{

		    $filetype1 = ".png";
		}
		else
		{
		        echo "<script>alert('Error!')</script>";
		     
    		    echo"<script>window.location.href='admin_news.php';</script>";	
		}



		$_FILES['newsimg']['name'] = $IMGID.$filetype1;
		        $filename1 = $_FILES['newsimg']['name'];

		        $tmp_name1 = $_FILES['newsimg']['tmp_name'];
		        
		        $local_image = 'imahe/';
		        move_uploaded_file($tmp_name1,$local_image.$filename1);
		        $newsimg = "imahe/".$_FILES['newsimg']['name'];




}
      



  $table2c = "INSERT INTO news_tbl (`news`,`newsposted`,`newscon`,`newspic`,`newsdate`) VALUES ('".$news."','".$newsposted."','".$newscon."','".$newsimg."','".$newsdate."')";
   $run_query2d = mysqli_query($c1,$table2c);
   
       echo"<script>window.location.href='admin_news.php';</script>";	
 ?>  