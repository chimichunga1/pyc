
 <?php  
 //insert.php  
require_once('connect.php');


$newsposted=$_SESSION['fn'];
$news_ID=$_POST["editnews_ID"];


 $editnews=$_POST["editnews"];

 $editnewsdate=$_POST["editnewsdate"];
 $editnewscon=$_POST["editnewscon"];

 $tmp_name1 =$_FILES['editnewsimg']['tmp_name'];





        $table2 = "select * from news_tbl where `news_ID`='".$news_ID."'";
        $run_query2b = mysqli_query($c1,$table2);         

 		$row = mysqli_fetch_assoc($run_query2b);

$news1=$row['news'];
$news2=$row['newspic'];
$news3=$row['newscon'];
$news4=$row['newsdate'];


if (empty($editnewscon))
{
	$editnewscon=$news3;
}
if(empty($editnews))
{
	$editnews=$news1;
}
if (empty($editnewsdate))
{
	$editnewsdate=$news4;
}




if (!empty($tmp_name1))
{
	unlink($news2);



		if ($_FILES['editnewsimg']['size'] == 0)
		{
		 $image = "";
		}

		else

		{
				if($_FILES['editnewsimg']['name'] = "image/jpeg")
				{


				    $filetype1 = ".jpeg";

				}
				elseif($_FILES['editnewsimg']['name'] = "image/jpg")
				{

				    $filetype1 = ".jpg";
				}
				elseif($_FILES['editnewsimg']['name'] = "image/png")
				{

				    $filetype1 = ".png";
				}
				else
				{
				        echo "<script>alert('Error!')</script>";
				       
   					echo"<script>window.location.href='admin_news.php';</script>";
				}



				$_FILES['editnewsimg']['name'] = "P ".$editnews.$row['news_ID'].$filetype1;
				        $filename1 = $_FILES['editnewsimg']['name'];

				        $tmp_name1 = $_FILES['editnewsimg']['tmp_name'];
				        
				        $local_image = 'imahe/';
				        move_uploaded_file($tmp_name1,$local_image.$filename1);

				        $editnewsimg = "imahe/".$_FILES['editnewsimg']['name'];





		}
      
}

else
{
	$editnewsimg=$news2;
}







  $table2c = "UPDATE news_tbl SET `news`='".$editnews."',`newspic`='".$editnewsimg."',`newscon`='".$editnewscon."',`newsdate`='".$editnewsdate."',`newsposted`='".$newsposted."' where `news_ID`='".$news_ID."'";


   $run_query2d = mysqli_query($c1,$table2c);
   echo"<script>window.location.href='admin_news.php';</script>";	
 ?>  