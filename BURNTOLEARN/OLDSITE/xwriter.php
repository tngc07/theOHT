<?php include('includes/head.php');

$update = $_GET['update'];	
$artno = $_GET['article_id'];	
	
?>
<body>
	
	<div class="off-canvas-wrap" data-offcanvas>
  <div class="inner-wrap">
    <nav class="tab-bar">
      <section class="left-small">
        <a class="left-off-canvas-toggle menu-icon" href="#"><span></span></a>
      </section>

      <section class="middle tab-bar-section">
        <h1 class="title" style="font-family: 'Raleway', sans-serif; font-size:14px; letter-spacing:10px;">BurnToLearn</h1>
      </section>

      <section class="right-small">
        <a class="right-off-canvas-toggle menu-icon" href="#"><span></span></a>
      </section>
    </nav>
	
	<?php 
	include('includes/left-off-canvas.php');	
	include('includes/right-off-canvas.php');	
	?>
    <section class="main-section">
	    
<?php 	if(empty($_SESSION['cur_login'])){
	echo '<div class="row" style="height:600px;">';
	echo '<div class="large-12 columns" style="text-align:center;">
	<span class="large-12 columns">
	<br />
	
	<hr />
	</span>	
	<a class="right-off-canvas-toggle button radius" href="#"><span>Login</span></a>

	</div>';
		echo '</div>';
}elseif(!empty($_SESSION['cur_login'])){
	

	
?>

<div class="row">

	<div class="large-12 columns">		
	<div class="large-12 columns" style="text-align:center;">
	<span class="large-12 columns">
	<br />
	<img src="img/addarticleBanner.png" alt="addarticleBanner" width="" height="" />
	<hr />
	</span>	
	
	</div>
	

	<hr / style="border:10px solid #fff;">
	<form action="DataUP/blogUP2DB.php" method="POST" enctype="multipart/form-data"> 
	  
		  <?php
		
		  if(empty($update)){
		  include('includes/articleCreate.php');	  
		  }elseif($update == 'yes'){
		  include('includes/articleUPDATE.php');  
		  }	  
			  
		  ?>
		  
		  
		  
		</form>
		
		
		
		

		
	</div>
	<?php } ?>
	
	<a class="exit-off-canvas"></a>

  </div>
</div>	
</section>	
	 
	<script src="js/vendor/jquery.js"></script>
	<script src="js/foundation.min.js"></script>
	<script>
	  $(document).foundation();
	</script>
	  
	  
	  


	  
  </body>
</html>



