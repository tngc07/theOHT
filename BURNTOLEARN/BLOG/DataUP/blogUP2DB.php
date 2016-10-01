<?include('../includes/ewp.php');

$updater = $_POST['updateThis'];




$artTTL = $_POST['artTTL'];
$artIMG = $_FILES['artIMG']['name'];


$artCATSAME = $_POST['artCAT'];
$artCATNEW = $_POST['NewCat'];

if(!empty($artCATSAME)){
$artCAT = $_POST['artCAT'];
}elseif(!empty($artCATNEW)){
$artCAT = $_POST['NewCat'];
}

$artWTR = $_POST['artWTR'];
$artCONTENT_1 = $_POST['artCONTENT_1'];
$artCONTENT_2 = $_POST['artCONTENT_2'];
$artCONTENT_3 = $_POST['artCONTENT_3'];
$artCONTENT_4 = $_POST['artCONTENT_4'];
$artCONTENT_5 = $_POST['artCONTENT_5'];
$artCONTENT_6 = $_POST['artCONTENT_6'];
$artCONTENT_7 = $_POST['artCONTENT_7'];
$artCONTENT_8 = $_POST['artCONTENT_8'];
$artCONTENT_9 = $_POST['artCONTENT_9'];
$artCONTENT_10 = $_POST['artCONTENT_10'];


$whocanview = $_POST['whocanview'];

if(isset($_FILES['artIMG'])){
        
		$name_array = $_FILES['artIMG']['name'];
		$tmp_name_array = $_FILES['artIMG']['tmp_name'];
		$type_array = $_FILES['artIMG']['type'];
		$size_array = $_FILES['artIMG']['size'];
		$error_array = $_FILES['artIMG']['error'];
		
		
		move_uploaded_file($tmp_name_array, "../img/articles_imgs/".$name_array);		
		
		}
		//$pic1 = $_POST[''];
		
		if(empty($updater)){
			
			$addART = mysqli_query($con,"INSERT INTO blog(blog_title,blog_img1,blog_cat,blog_wtr,blog_par_1,blog_par_2,blog_par_3,blog_par_4,blog_par_5,blog_par_6,blog_par_7,blog_par_8,blog_par_9,blog_par_10,whocanview)VALUES('$artTTL','$artIMG','$artCAT','$artWTR','$artCONTENT_1','$artCONTENT_2','$artCONTENT_3','$artCONTENT_4','$artCONTENT_5','$artCONTENT_6','$artCONTENT_7','$artCONTENT_8','$artCONTENT_9','$artCONTENT_10','$whocanview')");
			
		}elseif(!empty($updater)){
		
		if(!empty($artTTL)){
		$queryUPATER = mysqli_query($con,"UPDATE blog SET blog_title='".$artTTL."' WHERE blog_id='".$updater."'");	
		}
		
		if(!empty($artIMG)){
		$queryUPATER = mysqli_query($con,"UPDATE blog SET blog_img1='".$artIMG."' WHERE blog_id='".$updater."'");	
		}
		
		if(!empty($artCAT)){
		$queryUPATER = mysqli_query($con,"UPDATE blog SET blog_cat='".$artCAT."' WHERE blog_id='".$updater."'");	
		}
		
		if(!empty($artWTR)){
		$queryUPATER = mysqli_query($con,"UPDATE blog SET blog_wtr='".$artWTR."' WHERE blog_id='".$updater."'");	
		}
		
		if(!empty($artCONTENT_1)){
		$queryUPATER = mysqli_query($con,"UPDATE blog SET blog_par_1='".$artCONTENT_1."' WHERE blog_id='".$updater."'");	
		}
		
		if(!empty($artCONTENT_2)){
		$queryUPATER = mysqli_query($con,"UPDATE blog SET blog_par_2='".$artCONTENT_2."' WHERE blog_id='".$updater."'");	
		}
		
		if(!empty($artCONTENT_3)){
		$queryUPATER = mysqli_query($con,"UPDATE blog SET blog_par_3='".$artCONTENT_3."' WHERE blog_id='".$updater."'");	
		}
		
		if(!empty($artCONTENT_4)){
		$queryUPATER = mysqli_query($con,"UPDATE blog SET blog_par_4='".$artCONTENT_4."' WHERE blog_id='".$updater."'");	
		}
		if(!empty($artCONTENT_5)){
		$queryUPATER = mysqli_query($con,"UPDATE blog SET blog_par_5='".$artCONTENT_5."' WHERE blog_id='".$updater."'");	
		}
		if(!empty($artCONTENT_6)){
		$queryUPATER = mysqli_query($con,"UPDATE blog SET blog_par_6='".$artCONTENT_6."' WHERE blog_id='".$updater."'");	
		}
		if(!empty($artCONTENT_7)){
		$queryUPATER = mysqli_query($con,"UPDATE blog SET blog_par_7='".$artCONTENT_7."' WHERE blog_id='".$updater."'");	
		}
		if(!empty($artCONTENT_8)){
		$queryUPATER = mysqli_query($con,"UPDATE blog SET blog_par_8='".$artCONTENT_8."' WHERE blog_id='".$updater."'");	
		}
		if(!empty($artCONTENT_9)){
		$queryUPATER = mysqli_query($con,"UPDATE blog SET blog_par_9='".$artCONTENT_9."' WHERE blog_id='".$updater."'");	
		}
		
		if(!empty($artCONTENT_10)){
		$queryUPATER = mysqli_query($con,"UPDATE blog SET blog_par_10='".$artCONTENT_10."' WHERE blog_id='".$updater."'");	
		}
		
		if(!empty($whocanview)){
		$queryUPATER = mysqli_query($con,"UPDATE blog SET whocanview='".$whocanview."' WHERE blog_id='".$updater."'");	
		}
		
		}
		echo '<br />';
		

		
		//$returnTO = $_POST['return'];
		
$url = '../index.php';
		echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';

	
	
?>