<?php
	
echo $_POST['upl'];

if(isset($_FILES['upl'])){
        
		$name_array = $_FILES['upl']['name'];
		$tmp_name_array = $_FILES['upl']['tmp_name'];
		$type_array = $_FILES['upl']['type'];
		$size_array = $_FILES['upl']['size'];
		$error_array = $_FILES['upl']['error'];
		
		for($i = 0; $i < count($tmp_name_array); $i++){
		move_uploaded_file($tmp_name_array[$i], "img/ups/".$name_array[$i]);		
		}
		
}


?>