 <?php error_reporting(0); 
 if ( $_GET["err"]=='Message sent!') 
{
  ?>
<script language="javascript" type="text/x-javascript">
alert("Message Send...");
window.parent.document.getElementById("overlay").style.display="none";
window.parent.document.getElementById("popup").style.display="none";
</script>
 <?php
 }
  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GIPSM FeedBack</title>
<!--<style>

body

{
	font-family:Arial, Helvetica, sans-serif;
	font-size:13px;
	color:#333;
	font-weight:bold;
	font-style:italic;
}

table td
{
border-spacing:none;
padding:6px 3px;
border:none;
}

input[type="text"],input[type="file"] ,select,textarea
{
	background-color:#EFEFEF;
	padding:5px;
	border-color:gray;
	border-style:solid;
	border-width:thin;
	border-radius:5px;
}

input[type="text"],input[type="file"]
{ width:210px;
}

select{
	width:210px;
}

textarea{
	width:210px;
	
}

input[type="submit"],input[type="reset"]
{
	padding:10px 15px;
	font-weight:bold;
	border:thin solid #cacaca;
	border-radius:5px;
	color:#656565;
	background: rgb(255,255,255); 
 background: linear-gradient(top, rgba(255,255,255,1) 0%, rgba(196,196,196,1) 100%);
background: -webkit-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(196,196,196,1) 100%);


}

input:focus,select:focus,textarea:focus {
	background-color: #FFC;
	border:thin solid black;
} 

.style1 {font-size: 11px; color:#000000;}
</style>-->
<link href="../includes/css/bootstrap.min.css" type="text/css" rel="stylesheet">
<link href="../includes/css/style.css" type="text/css" rel="stylesheet">

<script type="text/javascript" language="javascript">
function checkemail(str)
{
var filter=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i
if (filter.test(str))
return true;
else
return false;

}
function validate()
{
	var ctrl=document.getElementById("txtname");
	if(ctrl.value=="")
	{
		alert("Enter Your Name.");
		ctrl.focus();
		return false;
	}
	/* ctrl=document.getElementById("txtemail");
	if(ctrl.value=="")
	{
		alert("Enter Your Email-ID.");
		ctrl.focus();
		return false;
	}

	if(!checkemail(ctrl.value))
	{
		alert("Invalid Email-ID.");
		ctrl.focus();
		return false;
	}*/
	
	ctrl=document.getElementById("txtphone");
	if(ctrl.value=="")
	{
		alert("Enter Your Phone/Mobile No.");
		ctrl.focus();
		return false;
	}

	
	ctrl=document.getElementById("txtmessage");

	if(ctrl.value=="")

	{

	alert("Enter Message");
	ctrl.focus();
	return false;

	}
}
</script>
<!--<script language="javascript" type="text/javascript">
var cssLink = document.createElement("link");
cssLink.href = "stylesheet.css";
cssLink.href = "mester.css";  
cssLink.rel = "stylesheet"; 
cssLink.type = "text/css"; 
frames['frame1'].document.body.appendChild(cssLink);
</script>-->

<style type="text/css">
body {
	/*background-color: #004884;*/
	background:none;
}
</style>
</head>
<body>
<div style="font-size:12px; font-weight:600; text-align:center; padding-bottom:4px;">BOOK YOUR SCHOOL VISIT</div>
<form class="form" action="mail.php" onSubmit="return validate();" method="post">
        <div class="form-group">
            <input class="form-control" type="text" name="txtname" id="txtname" placeholder="Your Name" style="padding: .01rem .25rem;">
         <!-- <input class="form-control" type="email" name="txtemail" id="txtemail" placeholder="Email address">-->
            <input class="form-control" type="phone" name="txtphone" id="txtphone" placeholder="Phone No"  style="padding: .01rem .25rem;">
            <textarea class="form-control" rows="2" name="txtmessage" id="txtmessage" placeholder="Message" style="padding: .01rem .25rem;"></textarea>
            <button class="btn btn-primary btn-effect" name="send" id="send" value="Submit" >SEND </button>
            <button class="btn btn-primary btn-effect" name="Reset" type="reset" value="Reset">RESET </button>
            <?php error_reporting(0); echo $_GET["err"];?>
        </div>
</form>
<!-- 
<form action="../mail/mail.php" onsubmit="return validate();" method="post"  enctype="multipart/form-data">
  <table width="431" cellpadding="0" cellspacing="0" >
    
    <tr>
      <td height="10" colspan="3"></td>
    </tr>
    <tr>
      <td width="141">Your Name</td>
      <td width="17">:</td>
      <td width="271"><input type="text" size="25" name="txtname" id="txtname" /></td>
    </tr>
    <tr>
      <td>Your Email-ID</td>
      <td>:</td>
      <td><input  type="text" size="25" name="txtemail" id="txtemail" /></td>
    </tr>

    <tr>
      <td>Phone/ Mobile No.</td>
      <td>:</td>
      <td><input  type="text" size="25" name="txtphone" id="txtphone" /></td>
    </tr>
    <tr>
      <td valign="top">Message</td>
      <td valign="top">:</td>
      <td><textarea  cols="35" rows="5" name="txtmessage" id="txtmessage"></textarea></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input name="send" type="submit" class="send_1" id="send" value="Submit">
        &nbsp;&nbsp;&nbsp;
      <input name="Reset" type="reset" class="send_2"  value="Reset"></td>
    </tr>
  </table>
</form>-->
</body>
</html>
