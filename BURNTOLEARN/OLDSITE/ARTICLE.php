<?php include('includes/head.php');
$artno = $_GET['artno'];
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
        <h1 class="title index_topbar">BurnToLearn.com</h1>
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
<div class="large-8 columns">

<div class="large-12 columns " >
<hr />
	<span><?php echo $M_ttl;?></span>
</div>

<div class="large-12 columns">
	<hr />
</div>

<div class="	content"></div>
<?php 
		
		echo '<div class="large-12 columns " style="font-family: \'Oswald\', sans-serif; font-weight: 400; ">';
		
	
		
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
		echo '<span style="font-size:12px;">Category : <i>'.$M_cat.'</i></span>';
		echo '</div>';	
		
	
	
?>

</div>

<div class="large-4 columns">
			
			<div class="large-12 columns" style=" text-align:left; font-size:30px; letter-spacing:5px; font-family: 'Oswald', sans-serif; ">
				<hr />
			<span><?php echo $M_cat; ?> </span>
			
			</div>
		
			<div class="large-12 columns"><hr /></div>
		
			<div class="large-12 columns">
			<?php
				
				$article = mysqli_query($con,'SELECT * FROM blog WHERE blog_id !='.$artno.'');
				while($A = mysqli_fetch_array($article)){
					
					$Cat = $A['blog_cat'];
					if($Cat == $M_cat){
					echo '<img src="img/articles_imgs/'.$A['blog_img1'].'">';
					echo '<span style="margin:10px 0px 0px 0px;">'.$A['blog_title'].'</span>';
					}
					
				}
				echo '<hr />';				
			?>	
			</div>
</div>


</div>



 </section>

  <a class="exit-off-canvas"></a>

  </div>
</div>	
	
	

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
        url: "http://burntolearn.com/ARTICLE.php?artno=<?php echo $artno;?>"
    });
</script>
  </body>
</html>