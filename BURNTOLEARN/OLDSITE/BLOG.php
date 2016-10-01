<?php include('includes/head.php');
?>

<body>
	   
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
   <section class="main-section">

<div id="SureDeleteMessage">
<div id="SureDelete" class="large-12 columns text-center">



</div>
</div>





<div class="row">
<br /><br />
<div class="large-12 columns" style="text-align:center; font-size:20px; letter-spacing:20px; font-family: 'Oswald', sans-serif; ">

	<span class="blogpgTitle">BurnToLearn | Tutorials</span>
</div>

<div class="large-12 columns">
	<hr />
</div>



<?php

	$bog_id = ''; 
	
	$query_articles = mysqli_query($con,"SELECT * FROM blog ORDER BY blog_ed");
	while($A = mysqli_fetch_array($query_articles)){
		
		echo '<a href="ARTICLE.php?artno='.$A['blog_id'].'">';
		echo '<div class="large-4 columns" style="font-family: \'Oswald\', sans-serif; font-weight: 400; margin-bottom:50px;">';

		echo '<img style="border-bottom:4px solid #f4f4f4; width:300px; height:100px;" src="img/articles_imgs/'.$A['blog_img1'].'" alt="" />';
		echo '</a>';
		echo '<hr / style="border:0px;">';
		echo '<span>'.$A['blog_title'].'</span>';
		
		$parrShow = $A['blog_content'];
		
		if (strlen($parrShow) > 10)
		$parrShow = substr($parrShow, 0, 7) . '...';
		
		echo '<p style="font-family: \'Roboto\', sans-serif;">'.$parrShow.'</p>';
		
		
	

		echo '<hr / style="border:0px;">';
		echo '<span style="font-size:12px;">Category : <i>'.$A['blog_cat'].'</i></span>';

		if(!empty($_SESSION['cur_login'])){
		
		echo '<div class="right">';
		echo '<a href="xwriter.php?update=yes&article_id='.$A['blog_id'].'" class="button tiny radius secondary"><i class="fa fa-pencil-square-o"></i></a>';
		
		$bog_id .=$A['blog_id'];
		
		echo '<a id="delPageClick_'.$A['blog_id'].'" class="button tiny radius"><i class="fa fa-trash fa-lg"></i></a>';
		
		
		echo '<script>';

		echo '$("#delPageClick_'.$A['blog_id'].'").click(function(){
		      
		      $("#SureDelete").html("<span>You are about to Delete : <br /><h1>'.$A['blog_title'].'</h1></span><hr /><a href=\"del_article.php?del_art='.$A['blog_id'].'\" class=\"button  alert radius large-6 columns tiny left\"><i class=\"fa fa-trash fa-lg\"> DELETE</i></a><a href=\"#\" id=\"cancelDel\" class=\"button tiny success radius large-6 columns right\"><i class=\"fa fa-trash fa-lg\">Cancel</i></a>");';	 
				  echo '$("#SureDeleteMessage").show()';
			  echo '});';
	
		
		echo '</script>';
		echo '</div>';
		
		}
			
		
			
		echo '</div>';
		
	};
	
?>

</div>




<script>

$("#cancelDel").click(function(){
$("#SureDeleteMessage").hide();	
});	
	
</script>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>