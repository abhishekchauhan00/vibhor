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
/*	 ctrl=document.getElementById("txtemail");
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

	
	ctrl=document.getElementById("txtaddress");

	if(ctrl.value=="")

	{

	alert("Enter address");
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
<form class="form" action="mail3.php" onsubmit="return validate();" method="post">
        <div class="form-group">
            <input class="form-control" type="text" name="txtname" id="txtname" placeholder="Student's Name">
           
            <input type="radio" name="group" value="A" /> : Group A: II-IV Standard<br />
			<input type="radio" name="group" value="B" /> : Group B: V-VII Standard<br />
                     			
           <input class="form-control"  type="text" name="txtpschool" id="txtpschool" placeholder="Present School">
          
           <input class="form-control" type="text" name="txtclass" id="txtclass" placeholder="Class">
         
           <input class="form-control" type="text" name="txtdob" id="txtdob" placeholder="Date of Borth [dd-mm-yyyy]">
          
           <input class="form-control" type="text" name="txtxpname" id="txtxpname" placeholder="Parent's Name">
           
            <input class="form-control" type="text" name="txtphone" id="txtphone" placeholder="Mobile No">
            
            <input class="form-control" type="text" name="txtaddress" id="txtaddress" placeholder="Address">
                          
           <!--<input class="form-control" type="email" name="txtemail" id="txtemail" placeholder="Email address">-->
            Transport Facility Required:
           <!-- <input type="radio" name="trans" /> : Yes<br />
			<input type="radio" name="trans" /> : No<br />-->
            <input class="form-control" type="radio" name="trans" value="yes">Yes<br>
  			<input class="form-control" type="radio" name="trans" value="no">No<br>
            
            I would like to participate in (Choose any Two Activity):<br />
            <input type="checkbox" name="activity" value="Personality Development workshop">Personality Development workshop<br />
            <input type="checkbox" name="activity" value="Math Olympiad & Quiz Mania">Math Olympiad & Quiz Mania<br />
            <input type="checkbox" name="activity" value="Kids Fashion Runway">Kids Fashion Runway <br />
            <input type="checkbox" name="activity" value="Skating Competition">Skating Competition<br />
            <input type="checkbox" name="activity" value="Dance Competition">Dance Competition<br />
            <input type="checkbox" name="activity" value="Table Tennis">Table Tennis<br />
            <input type="checkbox" name="activity" value="Cricket">Cricket<br />
           
            <!--<input type="checkbox" name="activity" value="pd">Personality Development workshop<br />
            <input type="checkbox" name="activity" value="moq">Math Olympiad & Quiz Mania<br />
            <input type="checkbox" name="activity" value="kfr">Kids Fashion Runway <br />
            <input type="checkbox" name="activity" value="sc">Skating Competition<br />
            <input type="checkbox" name="activity" value="dc">Dance Competition<br />
            <input type="checkbox" name="activity" value="tt">Table Tennis<br />
            <input type="checkbox" name="activity" value="cric">Cricket<br />-->
           <!-- <textarea class="form-control" rows="4" name="txtmessage" id="txtmessage" placeholder="Message"></textarea>-->
            <br />

            <button class="btn btn-primary btn-effect" name="send" id="send" value="Submit">SEND </button>
            <button class="btn btn-primary btn-effect" name="Reset" type="reset" value="Reset">RESET </button>
            <p>For More Enquiries, Contact : 8650911885 , 7454843666</p>
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
