<?php include('includes/head.php');?>
   <body>
	   
<div class="off-canvas-wrap" data-offcanvas>
  <div class="inner-wrap">
    <nav class="tab-bar">
      <section class="left-small">
        <a class="left-off-canvas-toggle menu-icon" href="#"><span></span></a>
      </section>

      <section class="middle tab-bar-section">
        <h5 class="title" style="font-family: 'Raleway', sans-serif; font-size:10px; letter-spacing:10px;">HORACIO GONZALEZ | HORAS TRADING</h5>
      </section>

      <section class="right-small">
        <a class="right-off-canvas-toggle menu-icon" href="#"><span></span></a>
      </section>
    </nav>
	
	<?php 
	include('includes/left-off-canvas.php');	
	include('includes/right-off-canvas.php');	
	?>
   
    <section class="main-section">
<!-- 	    END of OFF CANVAS NAVIGATION : TOP -->
<?php   

echo '<div class="row">';
echo '<div class="large-12 columns">';

echo '<img src="img/HORAS%20TRADING%20LOGO%202.png" alt="HORAS%20TRADING%20LOGO" width="90%" height="" />';
echo '</div>';
echo '</div>';

$uname = $_POST['name'];
$lname = $_POST['lname'];
$e_mail = $_POST['e_mail'];
$telefono = $_POST['telefono'];

$codigoTRUE = $_POST['codigo'];
$codigoFALSE = $_POST['noncode'];

if(!empty($codigoTRUE)){
$codigo = $_POST['codigo'];
}elseif(!empty($codigoFALSE)){
$codigo = 'Envia Codigo';	
}

$escuela = $_POST['escuela'];
$escuela_x = $_POST['escuela_x'];

if(!empty($escuela)){
$escuela_name = $_POST['escuela'];
}elseif(!empty($escuela_x)){
$escuela_name = $_POST['escuela_x'];
}

$type_course = $_POST['typecourse'];

$days = $_POST['daychoiz'];
$hourz = $_POST['hour_choiz'];

if(!empty($days)){
$Dayz = implode(" ",$days);
$Hourz = implode(" ",$hourz);
}

if(!empty($uname)){

	$query = mysqli_query($con,"INSERT INTO cursofillout(userName,userLname,email,telefono,escuela,course,days,hours,codigo)VALUES('$uname','$lname','$e_mail','$telefono','$escuela_name','$type_course','$Dayz','$Hourz','$codigo')");

	if($query){
		echo '<hr />';
	 	echo '<div class="row">';
	 	echo '<div class="large-12 columns">';
		 	echo '<div class="large-8 columns">';
		 	
			echo '<h5>Muchas Gracis '.$uname.'</h5>';
			echo '<p>Hemos recibido su informacion y estas registrado con nuestro sistema, pronto estariamos en contacto al numero indicado - '.$telefono.' </p>';
			echo '<p>Saludos!</p>';
			echo '</div>';
			
			echo '<div class="large-4 columns panel">';
			echo '<img src="img/happyInveststocks.jpg" alt="happyInveststocks" width="" height="" />';
			echo '</div>';
		echo '</div>';	
		echo '</div>';
		
		 //Email information
		 $admin_email = "contacto@horaciogonzalez.com.mx";
		 $subject = 'Registo Nuevo | Cursos';
		 
		 $comment = '<html><body>';
		 $comment .= '<img src="http://kidkodes.com/HORACIOGON/img/HoracioGonHder3.png" alt="happyInveststocks" width="" height="120px" />';
		 $comment .= '<hr />';
		 $comment .= "".$uname." ".$lname."<br />"; 
		 $comment .= "Correo : ".$e_mail."<br />"; 
		 $comment .= "Tel : ".$telefono."<br />"; 
		 $comment .= "Escuela : ".$escuela_name."<br />"; 
		 $comment .= "Dias de Semana: ".$Dayz."<br />"; 
		 $comment .= "Horario : ".$Hourz."<br />"; 
		 $comment .= "Codigo : ".$codigo."<br />";
		 $comment .= '<hr />';
		 $comment .= '</body></html>';
	
		 $headers  = 'MIME-Version: 1.0' . "\r\n";
		 $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		 $headers .= "From:".$e_mail." \r\n";
		 $headers .= "Reply-To: ".$e_mail." \r\n";

		 //send email
		 mail($admin_email, $subject, $comment, $headers);

		
		
	}	
}
if(empty($uname)){
if(empty($_SESSION['cur_login'])){
	echo '<div class="row" style="height:600px;">';
	echo '<div class="large-12 columns" style="text-align:center;">
	<span class="large-12 columns">
	<hr />
	</span>	
	<a class="right-off-canvas-toggle button radius" href="#"><span>Login</span></a>

	</div>';
		echo '</div>';
}elseif(!empty($_SESSION['cur_login'])){
	
	$queryform = mysqli_query($con, "SELECT * FROM cursofillout");
	echo '<div class="row">';
	
		echo '<div class="large-12 columns">';
		
			echo '<table>';
			echo '<tr>
				  <th>Nombre</th>
				  <th>Email</th>
				  <th>Tel</th>
				  <th>Course</th>
				  <th>Dias</th>
				  <th>Horas</th>
				  <th style="color:red;">CODE</th>
				  <th>Fecha</th>
				  <th><i class="fa fa-cogs fa-lg"></i></th>
				  </tr>';
			while($f = mysqli_fetch_array($queryform)){
			
				$d = $f['days'];
				$h = $f['hours'];
				$code = $f['codigo'];
				if($code == 'Envia Codigo'){
				$thecode = '<td class="button alert" style="width:100%;">'.$code.'</td>';
				}elseif($code != 'Envia Codigo'){
				$thecode = '<td class="button success" style="width:100%;">'.$code.'</td>';		
				}
				
				$pa = ':';
				$rep = ',';
				
				echo '<tr>';
				
				echo '<td>'.$f['userName'].' '.$f['userLname'].'</td>';
				echo '<td>'.$f['email'].'</td>';
				echo '<td>'.$f['telefono'].'</td>';
				echo '<td>'.$f['course'].'</td>';
				echo '<td>'.$d.'</td>';
				echo '<td>'.$h.'</td>';
				echo $thecode;
			    echo '<td>'.$f['regdata'].'</td>';
			    echo '<td><a href="del_user.php?rm='.$f['form_id'].'"><i class="fa fa-trash"></i></a></td>';
			    
			    
			    echo '</tr>';
			}
			
			echo '</table>';
				
		echo '</div>';	
	echo '</div>';
	
}
}

?>

 </section>

  <a class="exit-off-canvas"></a>

  </div>
</div>	
	
	<script src="js/vendor/jquery.js"></script>
	<script src="js/foundation.min.js"></script>
	<script>
	  $(document).foundation();
	</script>
  </body>
</html>