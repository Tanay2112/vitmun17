<?php require_once("../../includes/session.php");?>
<?php require_once("../../includes/db_connection.php");?>
<?php require_once("../../includes/functions.php");?>
<?php confirm_logged_in(); ?>
<?php 
$del_id = $_GET["del_id"];

$query = "SELECT * FROM delegates WHERE id = {$del_id} LIMIT 1";
$result = mysqli_query($conn, $query);
confirm_query($result);
$title = mysqli_fetch_assoc($result);
$email = $title['email'];
$name = $title['name'];
$allot_council = $title['allot_council'];
$allot_country = $title['allot_country'];

// registration bill html code starts

$content = "<!DOCTYPE html> ";
$content .= "<html> ";
$content .= "<head> ";
$content .= "<title>Acceptance</title> ";	
$content .= "</head> ";
$content .= "<body style='overflow: hidden;'> ";
$content .= "<p> ";
$content .= "<b>Dear ".ucfirst($name)."</b> ";
$content .= "</p><br><br> ";
$content .= "<p> ";
$content .= "Due to some technical issue, the last date of payment for round 2 was misinformed. The deadline for the payment of your delegate fee is <b>3rd of March, 2017.</b><br>Sorry for the inconvinience caused.";
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
 
$mail->Subject = 'Change in the payment deadline';
$mail->Body    = $content;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
} 

	//redirect_to("del.php?status=1");
?>
