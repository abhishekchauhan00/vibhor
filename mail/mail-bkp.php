<?php
$valid=true;
if($_POST["send"]=="Submit")
{
	if($_POST["txtname"]=="" ||  $_POST["txtphone"]=="" || $_POST["txtmessage"]=="")/*$_POST["txtemail"]=="" ||*/
	{
		$valid=false;
	}
	/*if (!isset($_FILES['uploaded_file']) || $_FILES['uploaded_file']['error'] != UPLOAD_ERR_OK)
	{
	 $valid=false;
	}*/
	if($valid==false)
	{
		echo "<html><head><meta http-equiv=\"refresh\" content=\"3;url=feedback2.php\"></head>";
		echo "<body><div style=\"width:350px;\"><br/><br/><br/>One of the required field is blank.<br/><br/>Please Enter all required fields.<br><br>This page will auto redirect to feedback form with in 3 seconds.</div></body></html>";

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
			echo "<html><head><meta http-equiv=\"refresh\" content=\"3;url=feedback2.php\"></head>";
		    echo "<body><div style=\"width:350px;\"><br/><br/><br/>$error<br><br>This page will auto redirect to feedback form with in 3 seconds.</div></body></html>";

            return true;
        }
        else
        {
            $error = 'Message sent!';
				echo "<html><head><meta http-equiv=\"refresh\" content=\"3;url=feedback2.php\"></head>";
		echo "<body><div style=\"width:350px;\"><br/><br/><br/>$error<br><br>This page will auto redirect to feedback form with in 3 seconds.</div></body></html>";

     return false;
        }
    }
    
	$msg= "Feed Back From WebSite\n";

	$msg.= "Name:".$_POST["txtname"]."\n";
    $msg.= "E-Mail:".$_POST["txtemail"]."\n";
    /*$msg.= "Address:".$_POST["txtaddress"]."\n";*/
    $msg.= "Phone:".$_POST["txtphone"]."\n";
   /* $msg.= "Country:".$_POST["country"]."\n";*/
	/*$msg.= "Stete:".$_POST["state"]."\n";
	$msg.= "City:".$_POST["txtcity"]."\n";*/
    $msg.= "Message:".$_POST["txtmessage"]."\n";

	$subj = 'Website Enquiry Form Message';
    $to   = 'school@rkinternational.org';
    $from = 'school@rkinternational.org';
    $name = 'GIPSM';

     echo smtpmailer($to,$from, $name ,$subj, $msg);

}
else
header("location:feedback2.php");
?>
