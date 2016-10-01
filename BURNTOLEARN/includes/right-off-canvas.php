<aside class="right-off-canvas-menu">
      <ul class="off-canvas-list">
        <li><label>LOGIN</label></li>
        <form action="" method="">
        <li><input type="text" name="username" placeholder="Username"></li>
        <li><input type="password" name="password" placeholder="Password"></li>
        <li><input class="button tiny" type="submit" value="Login"></li>
		</form>
      </ul>
      <hr />
      
      <a href="#" data-reveal-id="Add_Course" class="button">Add Course Here</a>

<div id="Add_Course" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
  <h2 id="modalTitle">Add a new Burn to Learn Course</h2>
  <form action="uptodb/upcourse.php" method="POST">
        <label> Course Title 
        <input type="text" name="title">  
        </label>
        
        <label> Course Image 
        <input type="text" name="image">  
        </label>
        
        <label> Course Description</label>
        

       
        
       <br />
       <hr />
        <label> Link to Course
          <select name="link">
          <option>Choose Course</option>
          <?php
          $query = mysqli_query($con,"SELECT * FROM blog");
          while($crs = mysqli_fetch_array($query)){
          echo '<option value="'.$crs['blog_id'].'">'.$crs['blog_title'].'</option>';  
          }
          ?>
          </select>  
        </label>
        
        <label> Paypal Button
        <input type="text" name="paypal">  
        </label>
        
        <input type="submit" class="button success">
        
      </form>
</div>
      
         </aside>