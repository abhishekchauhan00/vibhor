<?php
$act = "";
error_reporting(0); 
$valid=true;

if($_POST["send"]=="Submit")
{
	if($_POST["txtname"]=="" || $_POST["group"]=="" || $_POST["txtpschool"]=="" || $_POST["txtclass"]==""  || $_POST["txtpname"]==""|| $_POST["txtphone"]=="" || $_POST["txtaddress"]=="" || $_POST["activity"]=="")/*$_POST["txtemail"]=="" ||   || $_POST["txtdob"]==""*/
	{
		$valid=false;
	}
	/*if (!isset($_FILES['uploaded_file']) || $_FILES['uploaded_file']['error'] != UPLOAD_ERR_OK)
	{
	 $valid=false;
	}*/
	if($valid==false)
	{
			header("location:../little-champ.php?err=one of the requried field is blank!");
		return;
	}
	if(count($_POST["activity"])>0){
		foreach($_POST["activity"] as $x) 
		$act.= $x.",";
	}
	else 
	$act=$_POST["activity"];
	
    require_once('class.phpgmailer.php'); //library added in download source.
        function smtpmailer($to, $from, $from_name = 'rkinternational.org', $subject, $body, $is_gmail = false)
    {
        global $error;
        $mail = new PHPGMailer();
		//$mail->AddAttachment($_FILES['uploaded_file']['tmp_name'],$_FILES['uploaded_file']['name']);
		$mail->IsSMTP();
        $mail->SMTPAuth = true;
		$mail->IsHTML(true); 
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

       // $mail->IsHTML(false);
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
			header("location:../little-champ.php?err=$error");
            return true;
        }
        else
        {
            $error = 'Submitted Successfully!';
				header("location:../little-champ.php?err=$error");
        
     return false;
        }
    }
 	$msg= "Registration Details of Wisdom Little Champs-18\n";
	$msg.= "<table><tr><td>Name</td><td>:</td><td>".$_POST["txtname"]."</td></tr>";
	$msg.= "<tr><td>Group</td><td>:</td><td>".$_POST["group"]."</td></tr>";
	$msg.= "<tr><td>Present School</td><td>:</td><td>".$_POST["txtpschool"]."</td></tr>";
	$msg.= "<tr><td>Class</td><td>:</td><td>".$_POST["txtclass"]."</td></tr>";
	//$msg.= "<tr><td>Date of Borth</td><td>:</td><td>".$_POST["txtdob"]."</td></tr>";
	$msg.= "<tr><td>Date of Birth</td><td>:</td><td>".$_POST["day"]."/".$_POST["month"]."/".$_POST["year"]."</td></tr>"; 
	$msg.= "<tr><td>Parent's Name</td><td>:</td><td>".$_POST["txtpname"]."</td></tr>";
	$msg.= "<tr><td>Mobile No</td><td>:</td><td>".$_POST["txtphone"]."</td></tr>";
	$msg.= "<tr><td>Address</td><td>:</td><td>".$_POST["txtaddress"]."</td></tr>";
	$msg.= "<tr><td>Transport</td><td>:</td><td>".$_POST["trans"]."</td></tr>";
	$msg.= "<tr><td>Activity</td><td>:</td><td>".$act."</td></tr></table>";
echo $msg; return;
	$subj = 'Registration Form Details ('.$_POST["txtname"].')';
    $to   = 'school@rkinternational.org';
    $from = 'school@rkinternational.org';
    $name = 'GIPSM';
    smtpmailer($to,$from, $name ,$subj, $msg);
}
else
header("location:../little-champ.php");
?>
