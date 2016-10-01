<?php include('../includes/ewp.php');
	
$sugg = $_POST['suggestions'];
$blogid = $_POST['el_id'];	

$query = mysqli_query($con, "INSERT INTO suggestions(blog_id,suggestion)VALUES('$blogid','$sugg')");


		
$url = 'http://burntolearn.com/BLOG/ARTICLE.php?artno='.$blogid.'';
		echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';

	

	
?>