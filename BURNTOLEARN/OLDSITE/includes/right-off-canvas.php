<aside class="right-off-canvas-menu">
      <ul class="off-canvas-list">
        
        <?php if(!empty($_SESSION['cur_login'])){
        
        echo '<li class="panel" style="text-align:center; color:green;"><i class="fa fa-user"></i> '.$_SESSION['cur_login'].' </li>';
        
        echo '<a href="xwriter.php"><li class="panel"><i class="fa fa-book"> Add Article</i></li></a>';
        
//         echo '<a href="postto.php"><li class="panel"><i class="fa fa-users"> USERS</i></li></a>';


		echo '<li id="addwtrs" class="panel">Add Writers</li>';
		echo '<form id="addwtrsx" action="DataUP/addWtr.php" method="post" style="display:none;" class="panel">
		
			 <input type="text" name="newWtrFn" placeholder="First Name">	
			  <input type="text" name="newWtrLn" placeholder="Last Name">	
			 <button class="button tiny">Add</button>
		</form>';
		
		
		echo '<script>
		
		$("#addwtrs").click(function(){
		$("#addwtrsx").slideToggle();	
			
		});
		
		</script>';
        
        echo '<a href="logout.php"><li><button class="button alert tiny">LOGOUT</button></li></a>';
		
		}elseif(empty($_SESSION['cur_login'])){
		
		echo '<li><label>LOGIN</label></li>';
        echo '<form action="sessions.php" method="post">';
        echo '<li><input type="text" name="username" placeholder="Username"></li>';
        echo '<li><input type="password" name="password" placeholder="Password"></li>';
        echo '<li><input class="button tiny" type="submit" value="Login"></li>';
			
		}
		?>
		
		</form>
		
		
      </ul>
    </aside>