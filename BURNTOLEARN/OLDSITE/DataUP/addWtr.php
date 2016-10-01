<?include('../includes/ewp.php');
	
$fn = $_POST['newWtrFn'];	
$ln = $_POST['newWtrLn'];
	
$query = mysqli_query($con, "INSERT INTO writers(writer_fn, writer_ln)VALUES('$fn','$ln')");


$url = '../index.php?msg='.$fn.' Has been added as a Contributor to '.$siteName.'';
		echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
	
	

?>