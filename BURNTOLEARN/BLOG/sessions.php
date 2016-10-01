<?php include('includes/ewp.php');
	
$loginname = $_POST['username'];
$password = $_POST['password'];


	if(!empty($loginname)){
	$queryUsers = mysqli_query($con, "SELECT * FROM users WHERE username='$loginname' AND password='$password'");
	$rows = mysqli_num_rows($queryUsers);
	
	
	if($rows > 0){
	$_SESSION['cur_login'] = $loginname;
	}
		
	mysqli_close($con);

	$url = 'index.php';
	echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';  
	
}	
?>