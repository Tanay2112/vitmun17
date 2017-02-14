<?php require_once("../../includes/session.php");?>
<?php require_once("../../includes/db_connection.php");?>
<?php require_once("../../includes/functions.php");?>
<?php confirm_logged_in(); ?>
<?php 
	$inmates = $_GET["inmates"];
	$ex_in = explode("_", $inmates);
	
		
	$query = "SELECT * FROM eb_apps WHERE id = {$ex_in[0]} LIMIT 1";
	$result = mysqli_query($conn, $query);
	$list = mysqli_fetch_assoc($result);
	
	$room = $list['room'];
	$mates = "Your roommates are ";		

	$query1 = "SELECT * FROM eb_apps WHERE id = {$ex_in[1]} LIMIT 1";
	$result1 = mysqli_query($conn, $query1);
	$list1 = mysqli_fetch_assoc($result1);
	

	$query2 = "SELECT * FROM eb_apps WHERE id = {$ex_in[2]} LIMIT 1";
	$result2 = mysqli_query($conn, $query2);
	$list2 = mysqli_fetch_assoc($result2);		

	$name = $list2['name'];
	$mate = $list['name']." and ".$list1['name'];
	$email = $list2['email'];

	
	$content = "<!DOCTYPE html> ";
	$content .= "<html> ";
	$content .= "<head> ";
	$content .= "<title>Accommodation</title> ";	
	$content .= "</head> ";
	$content .= "<body style='overflow: hidden;'> ";
	$content .= "<p> ";
	$content .= "<b>Dear ".ucfirst($name)."</b> ";
	$content .= "</p><br><br> ";
	$content .= "<p> ";
	$content .= "Congratulations! Your request for accommodation has been approved for VITCMUN 2017. You have been allotted room number <b>".$room." </b> in <b><a href='http://www.southernresidency.com/'>Southern Residency, Kellambakkam, Chennai</a>.</b>".$mates."<b>".$mate."</b> We look forward to having you here. :) ";
	$content .= "<p><div class='pm-button'><a href='https://www.payumoney.com/paybypayumoney/#/A2A8078FDA63CF6B433440BBCE67859C'><img src='https://www.payumoney.com//media/images/payby_payumoney/buttons/213.png' /></a></div></p>";
	$content .= "</p><br><br> ";
	$content .= "<p> ";
	$content .= "<b>Regards<br>Prashant Bhardwaj<br>Technical Head<br>VITCMUN 2017</b> ";
	$content .= "</p> ";
	$content .= "</body> ";
	$content .= "</html>";		

	// registration bill html ends

	require 'PHPMailer-master/PHPMailerAutoload.php';

	$mail = new PHPMailer;
	 
	$mail->isSMTP();                                      
	$mail->Host = 'smtp.gmail.com';                       
	$mail->SMTPAuth = true;                               
	$mail->Username = 'VITCMUN2017@gmail.com';                   
	$mail->Password = '25nov1992';               
	$mail->SMTPSecure = 'tls';                            
	$mail->Port = 587;                                    
	$mail->setFrom('VITCMUN2017@gmail.com', 'VITCMUN 2017');
	$mail->addAddress("$email");       
	$mail->WordWrap = 50; 
	$mail->isHTML(true);                                  
	 
	$mail->Subject = 'Regarding your accommodation request for VITCMUN 2017';
	$mail->Body    = $content;
	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	if(!$mail->send()) {
	   echo 'Message could not be sent.';
	   echo 'Mailer Error: ' . $mail->ErrorInfo;
	   exit;
	} 
	

	redirect_to("hotel.php");
?>