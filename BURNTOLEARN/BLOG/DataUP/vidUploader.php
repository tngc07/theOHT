<?php include('../includes/ewp.php');

$updater = $_POST['updateThis'];

$videos_ttl = $_POST['videos_ttl'];
$videos_iframe = $_POST['videos_iframe'];
$videos_order = $_POST['videos_order'];
$blog_id = $_POST['blog_id'];


if(empty($updater)){
$addvid = mysqli_query($con,"INSERT INTO videos(video_ttl,video_iframe,video_order,blog_id)VALUES('$videos_ttl','$videos_iframe','$videos_order',$blog_id)");
}elseif(!empty($updater)){

		  if(!empty($videos_ttl)){
		  $updateVTTL = mysqli_query($con, "
		  UPDATE videos 
		  SET video_ttl='".$videos_ttl."' 
		  WHERE video_id='".$updater."'");
		  }
		 
		  if(!empty($videos_iframe)){
		  $updateVIFR = mysqli_query($con, "
		  UPDATE videos 
		  SET video_iframe='".$videos_iframe."' 
		  WHERE video_id='".$updater."'");
	      }
		 
          if(!empty($videos_order)){
		  $updateVORD= mysqli_query($con, "UPDATE videos 
		  SET video_order='".$videos_order."' 
		  WHERE video_id='".$updater."'");
          }
	
	
}

$url = 'http://burntolearn.com/BLOG/xwriter.php?update=yes&article_id='.$blog_id.'';
		echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';


?>