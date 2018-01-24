

 <?php  
 //insert.php  
require_once('connect.php');

$srposted=$_SESSION['fn'];
$sr=$_POST["srname"];

$srcon=$_POST["srcon"];

$tmp_name1 =$_FILES['srimg']['tmp_name'];

$srdate=$_POST["srdate"];







        $table2 = "select MAX(s_id) from sunday_tbl";
            $run_query2b = mysqli_query($c1,$table2);         

 		$row = mysqli_fetch_row($run_query2b);
   $IMGID = "Pref ".$sr.$row[0];


if ($_FILES['srimg']['size'] == 0)
{
 $image = "";
}

else

{
		if($_FILES['srimg']['name'] = "image/jpeg")
		{


		    $filetype1 = ".jpeg";

		}
		elseif($_FILES['srimg']['name'] = "image/jpg")
		{

		    $filetype1 = ".jpg";
		}
		elseif($_FILES['srimg']['name'] = "image/png")
		{

		    $filetype1 = ".png";
		}
		else
		{
		        echo "<script>alert('Error!')</script>";
		     
    		    echo"<script>window.location.href='admin_sreflect.php';</script>";	
		}



		$_FILES['srimg']['name'] = $IMGID.$filetype1;
		        $filename1 = $_FILES['srimg']['name'];

		        $tmp_name1 = $_FILES['srimg']['tmp_name'];
		        
		        $local_image = 'imahe/';
		        move_uploaded_file($tmp_name1,$local_image.$filename1);
		        $srimg = "imahe/".$_FILES['srimg']['name'];




}
      



  $table2c = "INSERT INTO sunday_tbl (`s_name`,`s_posted`,`s_con`,`s_bg`,`s_date`) VALUES ('".$sr."','".$srposted."','".$srcon."','".$srimg."','".$srdate."')";
   $run_query2d = mysqli_query($c1,$table2c);
   
       echo"<script>window.location.href='admin_sreflect.php';</script>";	
 ?>  