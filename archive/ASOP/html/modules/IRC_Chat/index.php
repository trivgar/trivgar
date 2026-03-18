<?php
/*  IRC Chat Addon 1.0
    
    PHPNuke 5, Author Francisco Burzi (fburzi@ncc.org.ve)
    http://www.phpnuke.org/

    php Addon IRC Chat - Copyright (c) 2001 by Jack Kozbial
    http://www.InternetIntl.com
    
	For (c) http://www.multichat.com/ Terms & Conditions using IRC Chat
    Chat on your web page go to http://www.multichat.com
*/

 if (!eregi("modules.php", $PHP_SELF)) {
	die ("You can't access this file directly...");
    }
	
/////////////////////////////////////////////////////////////////////////
$index = 0; // right side off
//$index = 1;
$formname = "<img src=\"modules/IRC_Chat/images/smiley.gif\" alt = \"Welcome to IRC Chat\"><br><br>IRC Chat";
include("header.php");
/////////////////////////////////////////////////////////////////////////
$chat_block = "<BR><BR><center><P><h2><strong>$formname</strong></h2></p><br>
<APPLET CODEBASE=\"http://www.multichat.com/ChatBox/\" ARCHIVE=\"multichat.zip\" CODE=\"GUIClient.class\" WIDTH=\"562\" HEIGHT=\"385\" ALIGN=\"BOTTOM\">
<PARAM NAME=\"Category\" VALUE=\"3\">
<PARAM NAME=\"Language\" VALUE=\"EN\">
<PARAM NAME=\"ChatAreaBackground\" VALUE=\"black\">
<PARAM NAME=\"ChatAreaForeground\" VALUE=\"yellow\">
<PARAM NAME=\"AppletBackground\" VALUE=\"lightGray\">
<PARAM NAME=\"FontName\" VALUE=\"Helvetica\">
<PARAM NAME=\"FontSize\" VALUE=\"12\">
<PARAM NAME=\"Subject\" VALUE=\"Internet International ........ http://www.internetintl.com\">
<PARAM NAME=\"HomepageImage\" VALUE=\"http://www.multichat.com/images/man.gif\">
<PARAM NAME=\"HomepageURL\" VALUE=\"http://www.multicity.com\">
      Your browser does not support Java applets. Upgrade to a newer browser or use the Options menu to enable Java.
</APPLET><p align=\"center\">
<!--Copyright notice - Do not remove-->
<hr noshade><div align=\"right\"><font size=\"-7\" color=\"$textcolor2\">
Powered by: <a href=\"http://www.internetintl.com/design\">Astro Web Design</a><br>
&copy; 2001 Copyright <a href=\"http://www.internetintl.com\">Internet International</a><br>
Free java chat <a href=\"http://www.multichat.com\">www.multichat.com</a><br><br></div></font>
<!--Copyright notice - Do not remove-->
";
if ($opi != "ds") {

	echo "$chat_block";
}
//////////////////////////////////  
 
    include("footer.php");

?>