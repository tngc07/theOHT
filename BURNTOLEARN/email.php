<?php
	
	$nameF = $_REQUEST['name'];
	$emailF = $_REQUEST['email'] ;
	$phoneF = $_REQUEST['phone'];
	$messageF = $_REQUEST['message'] ;
	
	
	//What email will this message be sent to:
	$email = "dustin@theoht.com";
	
	$txt_message = "This is a message from $nameF sent from BURNTOLEARN. <br/>";
	$txt_message .= " (CONTACT EMAIL: $emailF PHONE: $phoneF)  ";
	$txt_message .= " MESSAGE: '$messageF' ";
	
$message  = "<html><body>";
   
$message .= "<table width='100%' bgcolor='#e0e0e0' cellpadding='0' cellspacing='0' border='0'>";
   
$message .= "<tr><td>";
   
$message .= "<table align='center' width='100%' border='0' cellpadding='0' cellspacing='0' style='max-width:650px; background-color:#fff; font-family:Verdana, Geneva, sans-serif;'>";
    
$message .= "<thead>
  <tr height='80'>
  <th colspan='4' style='background-color:#f5f5f5; border-bottom:solid 1px #bdbdbd; font-family:Verdana, Geneva, sans-serif; color:#333; font-size:32px;' >Burn to Learn</th>
  </tr>
             </thead>";
    
$message .= "<tbody>
             <tr align='center' height='50' style='font-family:Verdana, Geneva, sans-serif;'>
       <td style='background-color:#00a2d1; text-align:center;'><a href='http://www.codingcage.com/search/label/PDO' style='color:#fff; text-decoration:none;'>Online Courses</a></td>
       <td style='background-color:#00a2d1; text-align:center;'><a href='http://www.codingcage.com/search/label/jQuery' style='color:#fff; text-decoration:none;'>Youtube Channel</a></td>
       <td style='background-color:#00a2d1; text-align:center;'><a href='http://www.codingcage.com/search/label/PHP OOP' style='color:#fff; text-decoration:none;' >One on one coaching</a></td>
              </tr>
      
       <tr>
       <td colspan='4' style='padding:15px;'>
       <p style='font-size:20px;'>Hi Rod, my name is ".$nameF.",</p>
       <hr />
       <p style='font-size:25px; font-family:Verdana, Geneva, sans-serif;'>".$messageF.".</p>
       <hr/>
       <p style='font-size:15px;'>I am Sending an HTML eMail using PHPMailer</p>
       </td>
       </tr>
      
       <tr height='80'>
       <td colspan='4' align='center' style='background-color:#f5f5f5; border-top:dashed #00a2d1 2px; font-size:24px; '>
       <br/>
       <p>This mail was created as part of theOHT platform for BURNTOLEARN </p>
       </td>
       </tr>
      
              </tbody>";
    
$message .= "</table>";
   
$message .= "</td></tr>";
$message .= "</table>";
   
$message .= "</body></html>";
	
	

	require_once("PHPMailer-master/PHPMailerAutoload.php");
	
	$mail = new PHPMailer();
	
	$mail->IsSMTP();
	
	//TURN debug mode ON or OFF
	$mail -> SMTPDebug = 0;
	
	//$mail->Host ='smtp.gmail.com';
	//$mail->Port = 465;
	//$mail->SMTPAuth = true; 
	//$mail->SMTPSecure = 'ssl';
	   
	//$mail->Username = "nicolai@theoht.com";
	//$mail->Password = "Darkstarx7";
	
	
	$mail->setFrom = $emailF;
	
	$mail->FromName = $nameF;

	$mail->AddReplyTo($emailF);

	$mail->addAddress($email, 'Rod');
	
	$mail->Subject = "BURNTOLEARN inquiry";
	$mail->WordWrap = 50;
	
	//If html body, then send through this:
	$mail->IsHTML(true);
	$mail->Body = $message; 
	//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
	$mail->altBody = $txt_message;
	
	if(!$mail->Send())
	{
	   echo "HMMM...Somethings Wrong. <p>";
	   echo "Mailer Error: " . $mail->ErrorInfo;
	   exit;
	}
	
	echo "MESSAGE SENT";
?>