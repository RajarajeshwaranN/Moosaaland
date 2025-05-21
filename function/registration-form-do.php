<?php

session_start();

if(isset($_POST['submit'])){


    //Deal with the email
$to = 'contact@moosaaland.com,prakash@moosaaland.com,justfun.planet@gmail.com';    

$subject = 'Contest Registration Form';

$message= "Serial Number: ".strip_tags($_POST['rand'])." 
Name: ".strip_tags($_POST['name'])."
Parent Name: ".strip_tags($_POST['parant'])."
Email Id: ".strip_tags($_POST['email'])."
Contact Number: ".strip_tags($_POST['phone'])."
Facebook: ".strip_tags($_POST['fb'])."
Occupation: ".strip_tags($_POST['occupation'])."
Company: ".strip_tags($_POST['company'])."
Residence Area: ".strip_tags($_POST['residence'])."
Date Of Birth: ".strip_tags($_POST['dateofbirth'])."
Gender: ".strip_tags($_POST['gender'])."
School: ".strip_tags($_POST['school'])."
Grade: ".strip_tags($_POST['grade'])."
Contest: ".strip_tags($_POST['contest'])."";
$attachment = chunk_split(base64_encode(file_get_contents($_FILES['age_proof']['tmp_name'])));
$filename = $_FILES['age_proof']['name'];

$boundary =md5(date('r', time())); 

$headers = "From: contact@moosaaland.com\r\nReply-To: ";
$headers .= "\r\nMIME-Version: 1.0\r\nContent-Type: multipart/mixed; boundary=\"_1_$boundary\"";

$message="This is a multi-part message in MIME format.

--_1_$boundary
Content-Type: multipart/alternative; boundary=\"_2_$boundary\"

--_2_$boundary
Content-Type: text/plain; charset=\"iso-8859-1\"
Content-Transfer-Encoding: 7bit

$message

--_2_$boundary--
--_1_$boundary
Content-Type: application/octet-stream; name=\"$filename\" 
Content-Transfer-Encoding: base64 
Content-Disposition: attachment 

$attachment
--_1_$boundary--";



    $ext = pathinfo($filename, PATHINFO_EXTENSION);


        if(in_array($ext, array("docx","pdf","doc","jpeg","jpg","png")))
        { 
            
                if (mail($to, $subject, $message, $headers)) {
                    echo "<script>";
                    echo "alert('Your form has submitted successfully. We will contact you soon.!')";
                    echo "</script>";
                    echo("<script> self.location='../registration.php'; </script>"); 
                    
                    // Subject of confirmation email.
                    $conf_subject = 'Thank You For Your Registration';
                    // Who should the confirmation email be from?
                    $conf_sender = 'Moosaa Land <contact@moosaaland.com>';
                    $msg = $_POST['parant'] . ",\n\n Thank you for your registration. A member of our team will respond to your message as soon as possible.";
                    mail( $_POST['email'], $conf_subject, $msg, 'From: ' . $conf_sender);
                    exit;
                } else {
                    echo "<script>";
                    echo "alert('Your form has submitted failed. Please Re-upload.!')";
                    echo "</script>";
                    echo("<script> self.location= '../registration.php' </script>"); 

                }

        }
        else
        { 
            echo "<script>alert('Sorry!choose .docx,.pdf,.doc,.jpeg,.jpg,.png format')</script>";
            echo("<script> self.location='../registration.php'; </script>"); 
        }
}
?>
