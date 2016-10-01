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
        <h1 class="title" style="font-family: 'Raleway', sans-serif; font-size:14px; letter-spacing:10px;"><?php echo $siteName;?></h1>
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
<!-- 	<img src="img/addarticleBanner.png" alt="addarticleBanner" width="" height="" /> -->
	
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
		<hr />
		<h4 class="text-left VideosTtl">Videos</h4>
		<div class="large-10 columns" style="margin:0px; padding:0px; height:600px;">
		
		<div id="newVidForm_btn" class="large-2 columns" style="margin:0px; padding:0px 0px 0px 0px;">
		
		<label><h3 class="large-12 small-12 button tiny radius chgbtn"><span class="blogEditorLables">NEW Video</span></h3></label>
		</div>
		
		<div id="UpdateVidForm_btn" class="large-2 columns" style="margin:0px; padding:0px 0px 0px 0px;">
		<label><h3 class="large-12 small-12 button tiny radius chgVidUPDATEbtn"><span class="blogEditorLables">UPDATE</span></h3></label>
		
		
		</div>
		
		<div class="large-10 coolumns"><hr /></div>
		
		<div id="newVidForm" class="large-10" style="margin:0px; padding:0px 10px 0px 0px; display:none;">
		
		
	
		<form action="DataUP/vidUploader.php" method="POST">
			
			<input type="hidden" name="blog_id" value="<?php echo $artno;?>">
			
			<div class="large-3 columns" style="margin:0px; padding:0px 5px 0px 0px;">
			<input type="text" name="videos_ttl" placeholder="Video Title">
			</div>
			
			<div class="large-7 columns" style="margin:0px; padding:0px 5px 0px 0px;">
			<input  type="text" name="videos_iframe" placeholder="iframe">
			</div>
			
			<div class="large-2 columns" style="margin:0px; padding:0px;">
			<input type="text" name="videos_order" placeholder="Order No.">
			</div>
			
			<button class="large-2 small-2 columns button tiny chgbtn left">UPLOAD</button>
		
		</form>	
		
		
		
		</div>
		
		<div id="UpdateVidForm" class="large-10" style="margin:0px 0px 0px 0px; padding:0px 0px 0px 0px;">
		
		 
	
		
			<?php
				
			
			$queryVids = mysqli_query($con, "SELECT * FROM videos WHERE blog_id='".$artno."'");
			while($v = mysqli_fetch_array($queryVids)){
				
			echo '<form action="DataUP/vidUploader.php" method="POST">
';	
			echo '<div class="large-3 columns" style="margin:0px; padding:0px 5px 0px 0px;">
			<textarea rows="5" class="radius" type="text" name="videos_ttl">'.$v['video_ttl'].'</textarea>';
			echo '</div>';
			
			echo '<div class="large-5  columns" style="margin:0px; padding:0px 5px 0px 0px;">
			<textarea rows="5" class="radius" name="videos_iframe" > '.$v['video_iframe'].'</textarea>
			</div>';
			
		echo '<input type="hidden" name="updateThis" value="'.$v['video_id'].'">';
				
			
		echo '<div class="row">
    
		    <div class="large-4 columns" style="margin:0px; padding:0px 10px 0px 0px;">
			      <div class="row collapse postfix-radius">
				        <div class="small-8 columns">';
				        
				        if(!empty($v['video_order'])){
				         echo  '<select name="videos_order" value="'.$v['video_order'].'">
				         <optgroup  label="Current Position">
				         <option>'.$v['video_order'].'</option>';
				         echo'</optgroup>';
				         $orno = 1;
				         $ordno = 1;
				         echo '<optgroup  label="Change Order">';
				         while($ordno < 16){
					     echo '<option value="'.$orno++.'">'.$ordno++.'</option>';    
				         }
				         echo'</optgroup>';
				         echo'</select>';
				        }
				        echo'</div>
				        <div class="small-4 columns">
				        <input type="hidden" name="blog_id" value="'.$artno.'">
				          <button class="button postfix">Upload</button>
				        </div>
			      </div>
		    </div>
		</div>';
			
			
			echo '</form>';	
				
			}	
			
				
			?>
			
		
	
		
		
			
		</div>
		
		<hr />
		
		<?php echo '<a href="'.$phpMYAD.'" class="button">PhpMyAdmin</a>'; ?>

</div>
	<script>
	$('#newVidForm_btn').click(function(){
	$('#newVidForm').show();	
	$('#UpdateVidForm').hide();		
	});	
	
	$('#UpdateVidForm_btn').click(function(){
	$('#UpdateVidForm').show();	
	$('#newVidForm').hide();	
	});	
	
	</script>
		

		
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



