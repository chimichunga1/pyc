
 <?php  
 //insert.php  
require_once('connect.php');


$srposted=$_SESSION['fn'];
$sr_ID=$_POST["editsr_ID"];


 $editsr=$_POST["editsr"];

 $editsrdate=$_POST["editsrdate"];
 $editsrcon=$_POST["editsrcon"];

 $tmp_name1 =$_FILES['editsrimg']['tmp_name'];





        $table2 = "select * from sunday_tbl where `s_id`='".$sr_ID."'";
        $run_query2b = mysqli_query($c1,$table2);         

 		$row = mysqli_fetch_assoc($run_query2b);

$sr1=$row['s_name'];
$sr2=$row['s_bg'];
$sr3=$row['s_con'];
$sr4=$row['s_date'];


if (empty($editsrcon))
{
	$editsrcon=$sr3;
}
if(empty($editsr))
{
	$editsr=$sr1;
}
if (empty($editsrdate))
{
	$editsrdate=$sr4;
}




if (!empty($tmp_name1))
{
	unlink($sr2);



		if ($_FILES['editsrimg']['size'] == 0)
		{
		 $image = "";
		}

		else

		{
				if($_FILES['editsrimg']['name'] = "image/jpeg")
				{


				    $filetype1 = ".jpeg";

				}
				elseif($_FILES['editsrimg']['name'] = "image/jpg")
				{

				    $filetype1 = ".jpg";
				}
				elseif($_FILES['editsrimg']['name'] = "image/png")
				{

				    $filetype1 = ".png";
				}
				else
				{
				        echo "<script>alert('Error!')</script>";
				       
   					echo"<script>window.location.href='admin_sreflect.php';</script>";
				}



				$_FILES['editsrimg']['name'] = "Pref ".$editsr.$row['s_id'].$filetype1;
				        $filename1 = $_FILES['editsrimg']['name'];

				        $tmp_name1 = $_FILES['editsrimg']['tmp_name'];
				        
				        $local_image = 'imahe/';
				        move_uploaded_file($tmp_name1,$local_image.$filename1);

				        $editsrimg = "imahe/".$_FILES['editsrimg']['name'];





		}
      
}

else
{
	$editsrimg=$sr2;
}







  $table2c = "UPDATE sunday_tbl SET `s_name`='".$editsr."',`s_bg`='".$editsrimg."',`s_con`='".$editsrcon."',`s_date`='".$editsrdate."',`s_posted`='".$srposted."' where `s_id`='".$sr_ID."'";


   $run_query2d = mysqli_query($c1,$table2c);
   echo"<script>window.location.href='admin_sreflect.php';</script>";	
 ?>  