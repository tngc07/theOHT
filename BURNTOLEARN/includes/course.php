	<?php
	
	include('includes/ewp.php');	
	$queryCourses = mysqli_query($con,"SELECT * FROM Courses");
	while($c = mysqli_fetch_array($queryCourses)){	
	?>
	<li data-orbit-slide="title_<?php echo $c['course_id'];?>">	
	<div class="row">
	<div class="large-12 columns">
	    <div class="large-8 columns" style="border:1px solid #ddd; ">
	    	
	    	<div class="large-12 columns">
		    <br/>
		    <h2><?php echo $c['title'];?></h2>	
		    	
		    <img src="<?php  echo $c['image'];?>">
		    <br/>
		    </div>
		     
		    <hr />
		    <div class="large-12 columns">
		    <p><?php echo  $c['parr'];?></p>

			<a class="button" href="http://burntolearn.com/BLOG/ARTICLE.php?artno=<?php echo $c['vidPG'];?>">View Course</a>
		    </div>
		    
	    </div>
	    
	    <div class="large-4 columns" style="background:#dddddd; height:400px;">
	     
	     <div class="large-12 columns">
		     <br/>
		    <h3>Course Details</h3>
		    <hr />
		    <table>
  <thead>
    <tr>
     <th width="200">COURSE</th>
      <th width="100">COST</th>
    </tr>
  </thead>
  <tbody>
	  
    <tr>
	  <td>10 Min</td>
      <td>$25</td>
    </tr>
    
    <tr>
    <td>30 Min</td>
    <td>$50</td>
    </tr>
    
    <tr>
    <td>1 Hour</td>
    <td>$80</td>
   	</tr>
	    
	<tr>   
    <td>2 Hour</td>
    <td>$150</td>
	</tr>    
    
  </tbody>
</table>


		    
		 </div>
	    <hr />
	     <div  class="large-12 columns">
		    <button data-reveal-id="emailerto">SignUp</button>
		 </div>
		 </div>
		 
	    
	    
    </div>
    
    </div>
</li>
<?php
}
?>
