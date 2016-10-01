<?php include('includes/head.php');?>
   <body>
	   
<div class="off-canvas-wrap" data-offcanvas>
  <div class="inner-wrap">
    <nav class="tab-bar">
      <section class="left-small">
        <a class="left-off-canvas-toggle menu-icon" href="#"><span></span></a>
      </section>

      <section class="middle tab-bar-section">
        <h1 class="title" style="font-family:verdana; font-wieght:100;"><?php echo $siteName;?></h1>
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
    
    <div style="height:600px;">
<!-- 	    Main PAGE BANNER -->
<!-- 	 <img src="img/BurntoLearn_POSTER1.png" alt="BurntoLearn_POSTER1" width="" height="" /> -->
    </div>
    
   	
	    
           
	
 </section>

  <a class="exit-off-canvas"></a>

  </div>
</div>	
	
	
	<script src="js/foundation.min.js"></script>
	<script>
	  $(document).foundation();
	</script>
  </body>
</html>
