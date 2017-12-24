<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Amy Pasternak and Marc Hauschildt's Wedding Web Site</title>
<meta name="author" content="Marc Hauschildt" />
<meta name="keywords" content="marc hauschildt, amy pasternak, iowa city, iowa, omaha, nebraska, cedar rapids, west liberty, ia, ne, engagement, wedding, uni, university of northern iowa, nortern iowa, uno, university of nebraska omaha" />
<meta name="description" content="Welcome to Amy Pasternak and Marc Hauschildt's Web site." />
<link href="wedding.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="hawkeye.ico" />
<script language="JavaScript" type="text/javascript">
<!--
function validate()
{
 if (document.contactUsForm.name.value == "")
 {
      alert ("Please type your name(s).");
      return false;
 }
 if (document.contactUsForm.email.value == "")
 {
      alert ("Please include an email address so we can respond to you.");
      return false;
 }
 if (document.contactUsForm.subject.value == "")
 {
      alert ("Please type a subject.");
      return false;
 }
 if (document.contactUsForm.comments.value == "")
 {
      alert ("Please type a message in the comments box.");
      return false;
 }
 return true;
}
// -->
</script>

<script language="JavaScript" type="text/javascript">
<!--
function validate_rsvp()
{
 if (document.rsvpform.bGUESTNAME1.value == "")
 {
      alert ("Please type your first and last name.");
      return false;
 }
 if (document.rsvpform.email.value == "")
 {
      alert ("Please type an email address so we can respond to you.");
      return false;
 }
 if (document.rsvpform.attending[0].checked == false
&& document.rsvpform.attending[1].checked == false && document.rsvpform.attending[2].checked == false && document.rsvpform.attending[3].checked == false)
 {
       alert ("Please tell us whether or not you will be attending.");
       return false;
 }
 if (document.rsvpform.nu_adults.value == "")
 {
      alert ("Please tell us how many adults will be in your party.");
      return false;
 }
 if (document.rsvpform.nu_children.value == "")
 {
      alert ("Please tell us how many children will be in your party.");
      return false;
 }
 return true;
}
// -->
</script>

</head>

<body>
<table class="container">
<tr>
<td>
<div id="main">
<?php

if (!isset($_REQUEST['content']))
include("homepage.inc.php");
else
{
$content = $_REQUEST['content'];
if (substr($content, 0, 4) == "http")
{
echo "Invalid page code\n";
exit;
} else
{
$nextpage = $content . ".inc.php";
include($nextpage);
}
}
?>
</div>
</td>
<td>
<div id="links">
	<div id="linkList">
	<div id="lselect">
		<h3 class="select"></h3>
			<ul>
				<li><a href="index.php?content=homepage">Home Page</a></li>
				<li><a href="proposal/index.htm">The Proposal</a></li>
				<li><a href="index.php?content=amy">About the Bride</a></li>
				<li><a href="index.php?content=marc">About the Groom</a>  </li>
				<li><a href="index.php?content=weddingparty">Wedding Party</a></li>
				<li><a href="index.php?content=church">The Church</a></li>
				<li><a href="index.php?content=kinnick">The Reception</a></li>
				<!--<li><a href="index.php?content=directions">Directions</a></li>-->
				<!--<li><a href="index.php?content=schedule">Schedule of Events</a></li>-->
				<!--<li><a href="index.php?content=rsvp">RSVP</a></li>-->
				<!--<li><a href="index.php?content=registry">Registry</a></li>-->
				<li><a href="index.php?content=photogallery"> </a><a href="index.php?content=honeymoon">The Honeymoon</a></li>
				<li><a href="index.php?content=photogallery">Photo Gallery</a><a href="index.php?content=honeymoon"></a></li>
				<li><a href="index.php?content=mailinglist">Mailing List</a></li>
				<li><a href="index.php?content=contactus">Contact Us</a></li>
			</ul>
	</div>
	<img src="images/mmhearts.gif" alt="Amy and Marc Hearts" width="240" height="212" style="padding-top:20px; padding-bottom:50px;" />
</div>
</div>
</td>
</tr>
</table>

<div id="footer"><img src="images/shadowfooter.jpg" alt="Amy Pasternak and Marc Hauschildt" /><p>Copyright &copy; 2008 Marc Hauschildt<br /><a href="http://validator.w3.org/check?uri=http%3A%2F%2Fwww.amy-marc.com%2F" target="_blank">XHTML Validation</a> | <a href="http://jigsaw.w3.org/css-validator/validator?uri=http://www.amy-marc.com/index.php?content=homepage" target="_blank">CSS Validation</a></p> 
</div>


<div id="header"><img src="images/shadowheader.jpg" alt="Amy Pasternak and Marc Hauschildt" /></div>
<div id="countdown">
	<!--
	<script language="JavaScript" type="text/javascript">
	today=new Date();
	mill3=new Date ("Jun 07 2008 0:00:00");
	days=(mill3-today)/86400000
	days=Math.round(days);
	document.write("There are " + days + " Days Until Our Wedding on June 07, 2008");
	</script>
	-->
	
	<script language="JavaScript" type="text/javascript">
	<!--//
	today=new Date();
	mill2=new Date ("Jun 07 2008 0:00:00");
	days=(today-mill2)/86400000
	days=Math.floor(days);
	document.write("We have been married " + days + " Days - Our Wedding was on June 07, 2008");
	//-->
	</script>
	
</div>


</body>
</html>
