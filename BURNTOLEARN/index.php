<?php include('includes/head.php');?>
   
   <body>
	   
<div class="off-canvas-wrap fixed" data-offcanvas>
  <div class="inner-wrap">
    <nav class="tab-bar">
      <section class="left-small">
        <a class="left-off-canvas-toggle menu-icon" href="#"><span></span></a>
      </section>

      <section class="middle tab-bar-section">
        <h1 class="title">BURN TO LEARN</h1>
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


	
	<div class="large-12 columns text-center" style="width:100%;">
		<span style="font-size:6rem;">GET COACHING HERE</span>
		<hr />
		<form> 
			<div class="row">
			    <div class="large-6 columns">
			      <div class="row collapse">
			        
			        <div class="small-10 columns">
						<select id="choosecourse">
							<?php
								
	$queryCoursesTitles = mysqli_query($con,"SELECT * FROM Courses");
	while($c = mysqli_fetch_array($queryCoursesTitles)){
						    echo '<option value="title_'.$c['course_id'].'">'.$c['title'].'</option>';
						    }
							?>
						</select>
						
						
					</div>
					
			        <div class="small-2 columns">
			          <a class="button postfix" id="chooseXcourse">Go</a>
			          
			        </div>
			        <div id='clickergoehere'>
				   
				    </div>    
			       
			      </div>
			    </div>
			  </div>
		</form>

		<hr />

	</div>
	

<!-- SLIDER -->
<div class="row">
	<div class="large-12"> 
		<ul class="example-orbit" data-orbit>
		  
		   
		  
		   <?php
		   include('includes/course.php');		   
		   ?>
		   </ul>
	</div>
</div>

			<form>					
<textarea name="parr" id="editor1"></textarea>
      </form>
<br />
<br />
<br />
<br />
<br />  

<!-- ********** EMAIL FORM ********* -->		
<div id="emailerto" class="reveal-modal small" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
  <h3 id="modalTitle">Contact me for Pricing details:</h3>
			  <form method="post" action="email.php">
			  <fieldset style="border-color: blue;">
			  	<legend>Please fill out your info:</legend>
			  Name *: <input name="name" id="name" type="text" />
			  Email *: <input name="email" id="email" type="text" />
			  Phone: <input name="phone" id="phone" type="tel" />
				</fieldset>
			  Message:<br />
			  <textarea name="message" id="message" rows="8" cols="30"></textarea><br />
			
			  </form>
			  		
			  <a class="button round" id="emailertoGO">SEND FORM</a>
			<a id="getemailresults" data-reveal-id="emailresults" class="radius button">Modal in a modal&hellip;</a>

  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
  
 
  
</div>
<!-- END OF EMAIL FORM -->

  
  
  <!-- Triggers the modals -->


<!-- Reveal Modals begin -->
<div id="emailresults" class="reveal-modal" data-reveal aria-labelledby="firstModalTitle" aria-hidden="true" role="dialog" >
  <div  style="margin:0px; padding:0px;" class="text-center">
    <img src="img/burntolearn_logo_official.png" alt="burntolearn_logo_official" width="200px" height="" />
	<div id="testemail" style="font-family:verdana; color:#ccc; font-size:75px;">   
  	   
  	</div>
  	
  	<hr />
  	   

	  	   
  	   <br />
  	
  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>


<!-- Reveal Modals end -->




	
 </section>

  <a class="exit-off-canvas"></a>

  </div>
</div>	
	
	
	 <script src="js/vendor/jquery.js"></script>
	<script src="js/foundation.min.js"></script>
	<script>
	  $(document).foundation();
	</script>
  </body>
</html>
<script type="text/javascript" src="js/ajax.js"></script>


	<script src="ckeditor/ckeditor.js"></script>
    <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>


							<script>
							
								$('#chooseXcourse').click(function(){
									
									var course = $('select#choosecourse option:selected').val();
									
									$('#clickergoehere').html("<a id="+course+" data-orbit-link="+course+" class=\"small button\">"+course+"</a>").hide();
									
									$('a#'+course+'').click();
									
							
								});
								
								
							

							</script>
							
							
								
<!--
						<script src="BLOG/js/tinyMCE/jquery.tinymce.min.js"></script>
						    <script src="BLOG/js/tinyMCE/tinymce.min.js"></script>
							<script type="text/javascript">
							  tinymce.init({
							    selector: '#editorsec'
							  });
						  	</script>
-->

