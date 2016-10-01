<?php include('../includes/ewp.php');

if($con){
  echo 'connected';
}

$title = $_POST['title'];
$image = $_POST['image'];
$parr = $_POST['parr'];
$link = $_POST['link'];
$paypal = $_POST['paypal'];


$query = mysqli_query($con,"INSERT INTO Courses(title,image,parr,paypal,vidPG)VALUES('$title','$image','$parr','$paypal','$link')");

/*
if($query){
  echo 'New Row Added';
}
*/

$url = 'index.php';
		echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';

	

?>