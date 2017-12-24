<?php

$disk = $_GET['disk'];
$clip = $_GET['clip'];
$title = $_GET['description'];

echo "<h3>$title</h3>\n";


echo "<p><object id=\"MediaPlayer\" width=240 height=180 classid=\"CLSID:22D6f312-B0F6-11D0-94AB-0080C74C7E95\" standby=\"Loading Windows Media Player components...\" type=\"application/x-oleobject\" codebase=\"http://activex.microsoft.com/activex/controls/mplayer/en/nsmp2inf.cab#Version=6,4,7,1112\"><param name=\"filename\" value=\"images/disk$disk/$clip-Untitled.wmv\"><param name=\"Showcontrols\" value=\"False\"><param name=\"autoStart\" value=\"True\"><embed type=\"application/x-mplayer2\" src=\"images/disk$disk/$clip-Untitled.wmv\" name=\"MediaPlayer\" width=240 height=180></embed></object></p>\n";




?>

