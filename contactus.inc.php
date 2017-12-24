<h3>Contact Us</h3>
<form action="gdform.php" method="post" name="contactUsForm" onsubmit="return validate()">
<input type="hidden" name="redirect" value="index.php?content=thankyou" />
<table width="95%" align="left" cellpadding="5" cellspacing="3" border="0">
    <tr bgcolor="#EEEEEE" id="nameRow">
		<td width="120">Your Name</td>
		<td><input type="text" name="name" size="40" maxlength="40" value="" /></td>
	</tr>
	<tr bgcolor="#EEEEEE">
		<td width="120">Your E-mail </td>
		<td><input type="text" name="email" size="40" maxlength="40" value="" /></td>
	</tr>
	<tr bgcolor="#EEEEEE">
		<td width="120">Subject</td>
		<td><input type="text" name="subject" size="40" value="" /></td>
	</tr>
	<tr bgcolor="#EEEEEE">
		<td width="120">Message</td>
		<td valign="top"><textarea name="comments" rows="6" cols="30"></textarea></td>
	</tr>
	<tr>
   	  <td colspan="2"><input type="submit" name="Submit" value="Submit" />&nbsp;<input type="reset" name="Submit2" value="Reset" /></td>
   	</tr>
</table>
</form>
