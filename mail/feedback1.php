<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GIPSM FeedBack</title>
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
	 ctrl=document.getElementById("txtemail");
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
	}
	
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
<script language="javascript" type="text/javascript" >
/*window.onload = function() {
    if (parent) {
        var oHead = document.getElementsByTagName("head")[0];
        var arrStyleSheets = parent.document.getElementsByTagName("style");
        for (var i = 0; i < arrStyleSheets.length; i++)
            oHead.appendChild(arrStyleSheets[i].cloneNode(true));
    }
}*/
window.onload = function() {
    Array.prototype.forEach.call(window.parent.document.querySelectorAll("link[rel=stylesheet]"), function(link) {
        var newLink = document.createElement("link");
        newLink.rel  = link.rel;
        newLink.href = link.href;
        document.head.appendChild(newLink);
    });
};

</script>
<script src="../assets/plugins/jquery/jquery-1.11.3.min.js"></script>
<style type="text/css">
body {
	background-color: #004884;
}
</style>
</head>
<body>
<form class="form" action="mail.php" onsubmit="return validate();" method="post">
        <div class="form-group">
            <input class="form-control" type="text" name="txtname" id="txtname" placeholder="Your Name">
            <input class="form-control" type="email" name="txtemail" id="txtemail" placeholder="Email address">
            <input class="form-control" type="phone" name="txtphone" id="txtphone" placeholder="Phone No">
            <textarea class="form-control" rows="4" name="txtmessage" id="txtmessage" placeholder="Message"></textarea>
            <button class="btn btn-primary btn-effect" name="send" id="send" value="Submit">SEND </button>
            <button class="btn btn-primary btn-effect" name="Reset" type="reset" value="Reset">RESET </button>
        </div>
</form>

</body>
</html>