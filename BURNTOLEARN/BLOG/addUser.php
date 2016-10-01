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