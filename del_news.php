   <?php  
 //insert.php  
require_once('connect.php');


$delID=$_POST["delID"];



        $table2 = "select * from news_tbl where `news_ID`='".$delID."'";
        $run_query2b = mysqli_query($c1,$table2);         

 		$row = mysqli_fetch_assoc($run_query2b);


$news1=$row['newspic'];

	unlink($news1);

    $table2c = "DELETE FROM news_tbl  WHERE `news_ID`='$delID'";

   $run_query2d = mysqli_query($c1,$table2c);

   echo"<script>window.location.href='admin_news.php';</script>";	
   

   ?>  