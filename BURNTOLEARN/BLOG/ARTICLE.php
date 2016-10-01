<?php include('includes/head.php');
$artno = $_GET['artno'];
$vttl = $_GET['vttl'];
?>

<body>
	
	<script>
	$(function(){
	$("body").floatingShare();
	});

	</script>
	   
<div class="off-canvas-wrap" data-offcanvas>
  <div class="inner-wrap">
    <nav class="tab-bar">
      <section class="left-small">
        <a class="left-off-canvas-toggle menu-icon" href="#"><span></span></a>
      </section>

      <section class="middle tab-bar-section">
        <h1 class="title index_topbar"><?php echo $siteName;?></h1>
      </section>

      <section class="right-small">
        <a class="right-off-canvas-toggle menu-icon" href="#"><span></span></a>
      </section>
    </nav>
	
	<?php 
	include('includes/left-off-canvas.php');	
	include('includes/right-off-canvas.php');	
	?>
   <section class="main-section ">
	
	<?php 

$M_img = '';
$M_ttl = '';
$M_cnt1 = '';
$M_cnt2 = '';
$M_cnt3 = '';
$M_cnt4 = '';
$M_cnt5 = '';
$M_cnt6 = '';
$M_cnt7 = '';
$M_cnt8 = '';
$M_cnt9 = '';
$M_cnt10 = '';
$M_cat = '';

$article = mysqli_query($con,'SELECT * FROM blog WHERE blog_id='.$artno.'');
while($A = mysqli_fetch_array($article)){
	
	$M_img .= $A['blog_img1'];
	$M_ttl .= $A['blog_title'];
	$M_cnt1 .= $A['blog_par_1'];
	$M_cnt2 .= $A['blog_par_2'];
	$M_cnt3 .= $A['blog_par_3'];
	$M_cnt4 .= $A['blog_par_4'];
	$M_cnt5 .= $A['blog_par_5'];
	$M_cnt6 .= $A['blog_par_6'];
	$M_cnt7 .= $A['blog_par_7'];
	$M_cnt8 .= $A['blog_par_8'];
	$M_cnt9 .= $A['blog_par_9'];
	$M_cnt10 .= $A['blog_par_10'];
	$M_cat .= $A['blog_cat'];	
	
}

?>
<div class="row" style="text-align:center;">
<div class="large-12 columns">
<img class="large-12 columns" src="img/articles_imgs/<?php echo $M_img;?>" alt="" width="" height="" />
</div>
</div>


<div class="row articles_page ">
<div class="large-12 columns">

<div class="large-12 columns">

<hr />

	</div>



<div class="content"></div>
	
	<div id="VideoList" class="large-2 small-2 columns">	
	<span class="large-12 small-12 columns MainArtTTL" style="margin:0px; padding:0px;">Videos</span>
	<hr />
	
	<ul class="no-bullet vidlist" style="margin:0px; padding:0px;">
	
	<?php 
		
	$getvidttls =  mysqli_query($con,"SELECT * FROM videos WHERE blog_id='".$artno."' GROUP BY video_order");
	
	while($gvt = mysqli_fetch_array($getvidttls)){
	
	echo '<a href="http://burntolearn.com/BLOG/ARTICLE.php?artno='.$artno.'&vttl='.$gvt['video_ttl'].'"><li class="button secondary">'.$gvt['video_ttl'].'</li></a>';
		
	}	
		
	?>
		
	</ul>	
	
	</div>


	<div id="videoSec" class="large-7 small-7 columns">	
	<span class="large-6 small-6 columns MainArtTTL" style="margin:0px; padding:0px;">Video Tutorials</span>

	<hr />
	
	<?php 
	
	if(!empty($vttl)){	
	$getvidifrm =  mysqli_query($con,"SELECT * FROM videos WHERE blog_id='".$artno."' AND video_ttl='".$vttl."'");
	}elseif(empty($vttl)){
	$getvidifrm =  mysqli_query($con,"SELECT * FROM videos WHERE blog_id='".$artno."' AND video_order='1' ");	
	}
	while($gvi = mysqli_fetch_array($getvidifrm)){
	
	echo $gvi['video_iframe'];
	echo '<hr />';
	
	//<!-- STARS START -->
	
	echo '<div id="ratearea">';
	
	echo '<div class="rating" >';
    
    echo '<span id="starfive">☆</span>
    	  <span id="starfour">☆</span>
    	  <span id="starthree">☆</span>
    	  <span id="startwo">☆</span>
    	  <span id="starone">☆</span>';
    
    echo '<input type="hidden" id="element_id" value="'.$artno.'">';
	
	echo '</div>';
	
	
	
	echo '</div>';
	
	
	
	//<!-- STARS END -->

	
	
	echo '<hr />';	
	}	
		
	?>
	
	
<!-- 	<iframe width="100%" height="315" src="https://www.youtube.com/embed/videoseries?list=PLoIow4Oqn_Gr5TfLyuOLO-XbpzUpuHs4M" frameborder="0" allowfullscreen></iframe> -->
	
	</div>

<!-- End Video Section -->

<?php 
		
		echo '<div class="large-3  small-3 columns MainArtContent" >';
		echo '<span class="large-3 small-3 columns MainArtTTL" style="margin:0px; padding:0px;">'.$M_ttl.'</span>';
	echo '<hr/>';
		
		echo '<p style="font-family: \'Roboto\', sans-serif;">'.$M_cnt1.'</p>';
		echo '<p style="font-family: \'Roboto\', sans-serif;">'.$M_cnt2.'</p>';
		echo '<p style="font-family: \'Roboto\', sans-serif;">'.$M_cnt3.'</p>';
		echo '<p style="font-family: \'Roboto\', sans-serif;">'.$M_cnt4.'</p>';
		echo '<p style="font-family: \'Roboto\', sans-serif;">'.$M_cnt5.'</p>';
		echo '<p style="font-family: \'Roboto\', sans-serif;">'.$M_cnt6.'</p>';
		echo '<p style="font-family: \'Roboto\', sans-serif;">'.$M_cnt7.'</p>';
		echo '<p style="font-family: \'Roboto\', sans-serif;">'.$M_cnt8.'</p>';
		echo '<p style="font-family: \'Roboto\', sans-serif;">'.$M_cnt9.'</p>';
		echo '<p style="font-family: \'Roboto\', sans-serif;">'.$M_cnt10.'</p>';
		echo '<hr />';
		//echo '<span style="font-size:12px;">Category : <i>'.$M_cat.'</i></span>';
		
		echo '</div>';	
		
	
	
?>
<!-- End Product Overview -->

</div>
</div>
<div class="row">
<div class="large-12 columns">
			
			<div class="large-12 columns">
				<hr />
			<span class="simart"><?php echo $M_cat; ?> </span>
			
			</div>
		
			<div class="large-12 columns"><hr /></div>
		
			<div class="large-3 columns">
			<?php
				
				$article = mysqli_query($con,'SELECT * FROM blog WHERE blog_id !='.$artno.'');
				while($A = mysqli_fetch_array($article)){
					
					$Cat = $A['blog_cat'];
					if($Cat == $M_cat){
					echo '<img src="img/articles_imgs/'.$A['blog_img1'].'">';
					echo '<span>'.$A['blog_title'].'</span>';
					}
					
				}
								
			?>	

			</div>
<?php
	
	
	
?>
</div>


</div>
<div class="row">
	<?php
	if(!empty($_SESSION['cur_login'])){		
	echo '<div class="large-12 columns">';
	echo '<span class="large-12 columns"><a href="xwriter.php?update=yes&article_id='.$artno.'" class="button tiny radius secondary"><i class="fa fa-pencil-square-o"></i></a></span>';
	echo '</div>';
	}
	?>
	</div>


 </section>

  <a class="exit-off-canvas"></a>

  </div>
</div>



	<!-- STARS START -->
	
	
	
		
	
	<!-- STARS END -->
	
    <script src="js/zajax.js"></script>
    
	<script src="js/foundation.min.js"></script>
	<script>
	  $(document).foundation();
	</script>
	
	<script type="text/javascript" src="js/jquery.floating-social-share.js"></script>
<script>
    $(".content").floatingSocialShare({
        buttons: ["facebook", "twitter", "google-plus", "linkedin", "pinterest"],
        text: "share with: ",
        place: "content-left",
        url: "<?php echo $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>"
    });
</script>
  </body>
</html>