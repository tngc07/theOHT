<?php
	
	
	include('includes/ewp.php');
	
	$del_art = $_GET['del_art'];
	
	$del_article = mysqli_query($con,"DELETE FROM blog WHERE blog_id=".$del_art."");
	
	$urlx = 'http://burntolearn.com/BLOG';
	echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$urlx.'">';
	
	?>