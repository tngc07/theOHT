<?php include('../includes/ewp.php');
	
$rating = $_POST['rate'];
$blogid = $_POST['el_id'];	

$query = mysqli_query($con, "INSERT INTO rating(blog_id,rating)VALUES('$blogid','$rating')");

if($rating == 1){
echo 'Well 1 is not great Thank you for being honest ';

echo '<form action="DataUP/suggestions.php" method="POST">
	     <label>Where did we go wrong?
	     <input type="text" name="suggestions" placeholder="Enter Suggestions Here!">
	     </label>
	      <input type="hidden" name="el_id" value="'.$blogid.'">
	     <input type="submit" class="button tiny" value="submit">
		</form>';
}elseif($rating == 2){
echo '2 is start! How could we get another star? ';

echo '<form action="DataUP/suggestions.php"  method="POST">
	     <label>Any suggestions to help us improve?
	     <input type="text" name="suggestions" placeholder="Enter Suggestions Here!">
	     </label>
	      <input type="hidden" name="el_id" value="'.$blogid.'">
	     <input type="submit" class="button tiny" value="submit">
		</form>';
}elseif($rating == 3){
echo '3 is not terrible! What\'s missing from the video? ';

echo '<form action="DataUP/suggestions.php"  method="POST">
	     <label>Please tell us how can 5 star this?
	     <input type="text" name="suggestions" placeholder="Enter Suggestions Here!">
	     </label>
	      <input type="hidden" name="el_id" value="'.$blogid.'">
	     <input type="submit" class="button tiny" value="submit">
		</form>';
}elseif($rating == 4){
echo 'Hey Thanks for the 4 Stars! ';

echo '<form action="DataUP/suggestions.php"  method="POST">
	     <label>What would make this a 5 star Video?
	     <input type="text" name="suggestions" placeholder="Enter Suggestions Here!">
	     </label>
	      <input type="hidden" name="el_id" value="'.$blogid.'">
	     <input type="submit" class="button tiny" value="submit">
		</form>';
}elseif($rating == 5){
echo 'WOW 5 Stars! Thank you!';

echo '<form action="DataUP/suggestions.php"  method="POST">
	     <label>Any feedback on how we can improve would be greatly appreciated!
	     <input type="text" name="suggestions" placeholder="Enter Suggestions Here!">
	     </label>
	     <input type="hidden" name="el_id" value="'.$blogid.'">
	     <input type="submit" class="button tiny" value="submit">
		</form>';
}


	
?>