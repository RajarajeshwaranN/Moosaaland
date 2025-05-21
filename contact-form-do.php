<?php	
session_start();
if(isset($_POST['email'])){

	$url = $_POST['url'];
if(empty($_SESSION['captcha_code'] ) || strcasecmp($_SESSION['captcha_code'], $_POST['captcha_code']) != 0){  
			
	 echo "<script>alert('Invalid captcha code');window.location = '$url';</script>";
	}
else{	
$name =$_POST['name'];
$email = $_POST['email'];	
$phone = $_POST['phone'];	
$msg = $_POST['msg'];	


if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) 
{
	
	require 'mailer/PHPMailerAutoload.php';
//Create a new PHPMailer instance
$mail = new PHPMailer;
//Set who the message is to be sent from
$mail->setFrom($email, $name);
//Set an alternative reply-to address
//$mail->addReplyTo('replyto@example.com', 'Reply Name');
//Set who the message is to be sent to
//$mail->addAddress('webdesign@eastonmedia.in', 'Info');
//$mail->addAddress('web@eastonmedia.com', 'contact');
$mail->addAddress('contact@moosaaland.com', 'contact');
//Set the subject line
$mail->Subject = 'Contact Form Enquiry- Moosaaland';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
ob_start();?>
<table style="font-family: 'Verdana'; margin: 25px auto; border-collapse: separate; border-spacing: 3px;  border: 1px solid #eee; box-shadow:0px 0px 20px #808080; text-align:left; border-radius:10px;">
<caption>Contact Form</caption>
<tbody><tr style="color: #999; border: 1px solid #eee; padding: 12px 35px;transition: all 1s;border-radius: 5px;box-shadow: 3px 3px #808080;"><td style="color: #999; border: 1px solid #eee; padding: 12px 35px;transition: all 1s;border-radius: 5px;box-shadow: 3px 3px #808080;">Name:</td><td style="color: #999; border: 1px solid #eee; padding: 12px 35px;transition: all 1s;border-radius: 5px;box-shadow: 3px 3px #808080;"><?php echo $name; ?></td></tr>
<tr style="color: #999; border: 1px solid #eee; padding: 12px 35px;transition: all 1s;border-radius: 5px;box-shadow: 3px 3px #808080;"><td style="color: #999; border: 1px solid #eee; padding: 12px 35px;transition: all 1s;border-radius: 5px;box-shadow: 3px 3px #808080;">Email:</td><td style="color: #999; border: 1px solid #eee; padding: 12px 35px;transition: all 1s;border-radius: 5px;box-shadow: 3px 3px #808080;"><?php echo $email; ?></td></tr>
<tr style="color: #999; border: 1px solid #eee; padding: 12px 35px;transition: all 1s;border-radius: 5px;box-shadow: 3px 3px #808080;"><td style="color: #999; border: 1px solid #eee; padding: 12px 35px;transition: all 1s;border-radius: 5px;box-shadow: 3px 3px #808080;">Phone:</td><td style="color: #999; border: 1px solid #eee; padding: 12px 35px;transition: all 1s;border-radius: 5px;box-shadow: 3px 3px #808080;"><?php echo $phone; ?></td></tr>
<tr style="color: #999; border: 1px solid #eee; padding: 12px 35px;transition: all 1s;border-radius: 5px;box-shadow: 3px 3px #808080;"><td style="color: #999; border: 1px solid #eee; padding: 12px 35px;transition: all 1s;border-radius: 5px;box-shadow: 3px 3px #808080;">Message:</td><td style="color: #999; border: 1px solid #eee; padding: 12px 35px;transition: all 1s;border-radius: 5px;box-shadow: 3px 3px #808080;"><?php echo $msg; ?></td></tr></tbody></table>
<?php $body = ob_get_clean();
$mail->msgHTML($body);
//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');
//send the message, check for errors
if (!$mail->send()) {

 echo "<script>alert('Something went wrong !');window.location = '$url';</script>";
	}
 else {
	 
	 echo "<script>alert('Thank you for your Message. We will get in touch with you shortly !!');window.location = '$url';</script>";
	 
	 //	 echo "<script>alert('Enter valid Email ');window.location.href='contact.php';</script>";
	 
	 }
	 }else{
	 echo "<script>alert('Invalid Details ');window.location = '$url';</script>";
	 }
	 }
}	 
	 
 ?>