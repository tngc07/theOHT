<?php
	
/*
foreach ($_POST as $key => $value)
 echo "Field ".htmlspecialchars($key)." is ".htmlspecialchars($value)."<br>";	
	
*/

/*
if(!empty($_POST['daychoiz'])) {
    foreach($_POST['daychoiz'] as $check) {
               
            }
}

if(!empty($_POST['hour_choiz'])) {
    foreach($_POST['hour_choiz'] as $check) {
            echo $check.',';     }
}
*/	

include('includes/ewp.php');

$days = $_POST['daychoiz'];
$tough = implode(":",$days);

/*
echo $tough;

echo '<table border="1"><tr><td>'.$tough.'</td></tr></table>';
*/

if(!empty($days)){
	$query = mysqli_query($con,"INSERT INTO cursofillout(days)VALUES('$tough')");
}

?>