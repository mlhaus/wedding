<h3>RSVP </h3>
<p>The favor of reply is requested by May 17, 2008.</p>
<form name="rsvpform" action="gdform.php" method="post" onsubmit="return validate_rsvp()">
<input type="hidden" name="subject" value="Wedding RSVP" /> 
<input type="hidden" name="redirect" value="index.php?content=rsvpthankyou" />
<table width="100%" align="left" cellpadding="5" cellspacing="3" border="0">
  <tr bgcolor="#EEEEEE" id="guestname">
    <td width="100">Your name</td>
	<td width="70%"><input type="text" name="bGUESTNAME1" size="40" /></td>
  </tr>
  <tr bgcolor="#EEEEEE">
    <td width="100">Your e-mail</td>
    <td><input type="text" name="email" size="40" /></td>
  </tr>
  <tr bgcolor="#EEEEEE">
    <td width="100">Will you be attending?</td>
    <td style="font-size:11px"><input name="attending" type="radio" value="yes_both" /> 
      Yes, I/we will be attending the <u>ceremony and reception</u>.<br />
      <input name="attending" type="radio" value="yes_ceremony_only" />
Yes, I/we will be attending the <u>ceremony only</u>.<br />
<input name="attending" type="radio" value="yes_reception_only" />
Yes, I/we will be attending the <u>reception only</u>.<br />
      <input name="attending" type="radio" value="no" />
No, I/we cannot attend, but will be thinking of you</td>
  </tr>
  <tr bgcolor="#EEEEEE">
    <td width="100">Number of guest(s) including yourself who will be in attendance</td>
	<td>Adults: <input type="text" name="nu_adults" size="2" maxlength="1" /> and Children: <input type="text" name="nu_children" size="2" maxlength="1" /></td>
  </tr>
  <tr bgcolor="#EEEEEE">
    <td width="100">Comments<br /></td>
    <td><textarea name="comments" rows="6" cols="30" wrap="soft"></textarea>    </td>
  </tr>
  <tr>
    <td colspan="2"><input type="submit" name="Submit" value="Submit" />&nbsp;<input type="reset" name="Submit2" value="Reset" /></td>
    </tr>
</table>
</form>
