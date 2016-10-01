<?php include('includes/ewp.php');

$rm = $_GET['rm'];

$query = mysqli_query($con,"DELETE FROM cursofillout WHERE form_id=$rm");

$url = "http://horaciogonzalez.com.mx/postto.php";
		echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';

?>