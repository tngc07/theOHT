<div class="row">
	<div class="large-6 columns" style="padding:0px; margin:0px;">
		  
		  <div class="large-12 small-12 columns" >
		      <label><h3 class=" large-12 small-12 button tiny secondary"><span class="blogEditorLables">Change Main Image</span></h3>
		      <img style="border:2px solid #ccc;"src="img/articles_imgs/<?php echo $M_img; ?>"></h3>
		        <input type="file" name="artIMG"/>
		      </label>
		    </div>
		   
		
	</div>    
		
	<div class="large-6 small-12 columns" style="padding:0px; margin:0px;">
		    <div class="large-6 columns">
		      <label><h3 class=" large-12 small-12 button tiny chgbtn"><span class="blogEditorLables">Title</span></h3>
		        <input type="text" name="artTTL" placeholder="Title" value="<?php echo $M_ttl; ?>" />
		      </label>
		    </div>
		    
		    
		  
		   
		   <div class="large-6 small-12 columns">
		     <label><h3 class="large-12 small-12 button tiny chgbtn"><span class="blogEditorLables">Change Category</span></h3>

		        <select id="choosecat" name="artCAT">
		          <option value="<?php echo $M_cat; ?>"><?php echo $M_cat; ?></option>
		          <?php 
			      
			      $queryCats = mysqli_query($con,'SELECT blog_cat FROM blog GROUP BY blog_cat');    
			      
			      while($c = mysqli_fetch_array($queryCats)){
				      echo '<option value="'.$c['blog_cat'].'">'.$c['blog_cat'].'</option>';
			      }
			          
		          ?>
		          
		        </select>
		      </label>
		      
		       <input type="text" name="NewCat" placeholder="Add New Category">
		      
		    </div>
		  
		  
		    <div class="large-6 small-12 columns">
		      <label><h3 class="large-12 small-12 button tiny chgbtn"><span class="blogEditorLables">Writer</span></h3>
		        <select name="artWTR">
		        
		          <option value="<?php echo $M_wtr;?>"><?php echo $M_wtr;?></option>
		          <?php 
			         
			     $query = mysqli_query($con, "SELECT * FROM writers");
			     while($wtr = mysqli_fetch_array($query)){
				    echo '<option value="'.$wtr['writer_fn'].' '.$wtr['writer_ln'].'">'.$wtr['writer_fn'].' '.$wtr['writer_ln'].'</option>';    
			     }   
			         
		         ?>
		          
		          
		        
		        </select>
		      </label>
		    </div>
</div>		    
</div>
		  
<hr />
		
		 	  <div class="row">
		    <div class="large-9 columns">
			    
			  <textarea name="artCONTENT_1" id="editorsec"><?php echo $M_cnt1;?></textarea>
			  
			    
			    
<!--
		      <label><h3><span class="parrTitle">Paragraph 1</span></h3>
		        <textarea rows="5" name="artCONTENT_1"></textarea>
		      </label>

			  <hr />
		      <label><h3><span class="parrTitle">Paragraph 2</span></h3>
		        <textarea rows="5" name="artCONTENT_2"></textarea>
		      </label>
		      <label><h3><span class="parrTitle">Paragraph 3</span></h3>
		        <textarea rows="5" name="artCONTENT_3"></textarea>
		      </label>
		      <label><h3><span class="parrTitle">Paragraph 4</span></h3>
		        <textarea rows="5" name="artCONTENT_4"></textarea>
		      </label>
		      <label><h3><span class="parrTitle">Paragraph 5</span></h3>
		        <textarea rows="5" name="artCONTENT_5"></textarea>
		      </label>
		      <label><h3><span class="parrTitle">Paragraph 6</span></h3>
		        <textarea rows="5" name="artCONTENT_6"></textarea>
		      </label>
		      <label><h3><span class="parrTitle">Paragraph 7</span></h3>
		        <textarea rows="5" name="artCONTENT_7"></textarea>
		      </label>
		      <label><h3><span class="parrTitle">Paragraph 8</span></h3>
		        <textarea rows="5" name="artCONTENT_8"></textarea>
		      </label>
		      <label><h3><span class="parrTitle">Paragraph 9</span></h3>
		        <textarea rows="5" name="artCONTENT_9"></textarea>
		      </label>
		      <label><h3><span class="parrTitle">Paragraph 10</span></h3>
		        <textarea rows="5" name="artCONTENT_10"></textarea>
		      </label>
--> 
		      
		    </div>


		   
		 
		    <div class="large-3 columns">
				
				
				
				<button class="large-12 button radius chgbtndynm">Publish</button>
				
				<div class="row">
				    
				    <div class="large-12 columns">
				     
				      <input type="radio" name="whocanview" value="Public" id="PublicWCV"><label for="Public">Public</label>
				      
				      <input type="radio" name="whocanview" value="Private" id="PrivateWCV"><label for="Private">Private</label>
				    
				    </div>
			    
			    </div>
			    
			    <script>
				$('.chgbtndynm').mouseover(function(){
				$('.chgbtndynm').html('Publish!');	
					
				});
				
				$('.chgbtndynm').mouseout(function(){
				$('.chgbtndynm').html('Publish');	
					
				});
			    </script>
				
				
				
				
	 
			</div>
		
		  </div>
