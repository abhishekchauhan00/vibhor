<?php
/*$error = 'Message sent!';
header("location:feedback2.php?err=$error"); return;*/
$valid=true;
if($_POST["send"]=="Submit")
{
	if($_POST["txtname"]=="" || $_POST["txtphone"]=="" || $_POST["txtmessage"]=="" )/*$_POST["txtemail"]=="" ||*/
	{
		$valid=false;
	}
	/*if (!isset($_FILES['uploaded_file']) || $_FILES['uploaded_file']['error'] != UPLOAD_ERR_OK)
	{
	 $valid=false;
	}*/
	if($valid==false)
	{
			header("location:enq.php?err=one of the requried field is blank!");
		return;
	}
    require_once('class.phpgmailer.php'); //library added in download source.
        function smtpmailer($to, $from, $from_name = 'rkinternational.org', $subject, $body, $is_gmail = false)
    {
        global $error;
        $mail = new PHPGMailer();
		//$mail->AddAttachment($_FILES['uploaded_file']['tmp_name'],$_FILES['uploaded_file']['name']);
		$mail->IsSMTP();
        $mail->SMTPAuth = true;
       if($is_gmail)
        {
            $mail->SMTPSecure = 'ssl';
            $mail->Host = 'mail.rkinternational.org';
            $mail->Port = 465;  
            $mail->Username = 'school@rkinternational.org';  
            $mail->Password = 'Sch#Rki_210'; 
			$mail->SMTPKeepAlive = true;  
        }
        else
        {
			$mail->Host = 'mail.rkinternational.org';
            $mail->Username = 'school@rkinternational.org';  
            $mail->Password = 'Sch#Rki_210';
			$mail->Port = 25;  
        }

        $mail->IsHTML(false);
        $mail->From="school@rkinternational.org";
        $mail->FromName="school@rkinternational.org";
        $mail->Sender=$from; // indicates ReturnPath header
        $mail->AddReplyTo($from, $from_name); // indicates ReplyTo headers
        //$mail->AddCC('', 'CC: to site.com');

        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AddAddress($to);
        if(!$mail->Send())
        {
            $error = 'Mail error: '.$mail->ErrorInfo;
			header("location:enq.php?err=$error");
            return true;
        }
        else
        {
            $error = 'Message sent!';
				header("location:enq.php?err=$error");
        
     return false;
        }
    }
 	$msg= "Enquiry From WebSite\n";
	$msg.= "Name:".$_POST["txtname"]."\n";
/*	$msg.= "Age:".$_POST["txtage"]."\n";
	$msg.= "Class:".$_POST["txtclass"]."\n";
    $msg.= "E-Mail:".$_POST["txtemail"]."\n";*/
    /*$msg.= "Address:".$_POST["txtaddress"]."\n";*/
    $msg.= "Phone:".$_POST["txtphone"]."\n";
   /* $msg.= "Country:".$_POST["country"]."\n";*/
	/*$msg.= "Stete:".$_POST["state"]."\n";
	$msg.= "City:".$_POST["txtcity"]."\n";
    $msg.= "Previous School:".$_POST["txtpschool"]."\n";*/
	$msg.= "Message:".$_POST["txtmessage"]."\n";
	$subj = 'Website Enquiry Form Message';
    $to   = 'school@rkinternational.org';
    $from = 'school@rkinternational.org';
    $name = 'RKI';
    smtpmailer($to,$from, $name ,$subj, $msg);
}
else
header("location:enq.php");
?>
