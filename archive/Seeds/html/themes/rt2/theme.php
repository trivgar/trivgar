<?php

/************************************************************/
/* THEME NAME: rt2, support@globlenet.com                   */
/* THEME DEVELOPER: MaxG, http://www.globlenet.com/         */
/************************************************************/

/************************************************************/
/*                                                          */
/* Theme Colors Definition                                  */
/*                                                          */
/* Control the header for your site. You need to define the */
/* BODY tag and in some part of the code call the blocks    */
/* function for left side with: blocks(left);               */
/************************************************************/

$thename = "rt2";
$bgcolor1 = "#ffffff";
$bgcolor2 = "#eeeeee";
$bgcolor3 = "#ffffff";
$bgcolor4 = "#eeeeee";
$textcolor1 = "#000000";
$textcolor2 = "#000000";

function OpenTable() {
    global $bgcolor1, $bgcolor2;
    echo "<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" bgcolor=\"$bgcolor2\"><tr><td>\n";
    echo "<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"8\" bgcolor=\"$bgcolor1\"><tr><td>\n";
}

function CloseTable() {
    echo "</td></tr></table></td></tr></table>\n";
}

function OpenTable2() {
    global $bgcolor1, $bgcolor2;
    echo "<table border=\"0\" cellspacing=\"1\" cellpadding=\"0\" bgcolor=\"$bgcolor2\" align=\"center\"><tr><td>\n";
    echo "<table border=\"0\" cellspacing=\"1\" cellpadding=\"8\" bgcolor=\"$bgcolor1\"><tr><td>\n";
}

function CloseTable2() {
    echo "</td></tr></table></td></tr></table>\n";
}

function FormatStory($thetext, $notes, $aid, $informant) {
    global $anonymous;
    if ($notes != "") {
	$notes = "<br><b>"._NOTE."</b> <i>$notes</i>\n";
    } else {
	$notes = "";
    }
    if ("$aid" == "$informant") {
	echo "<font size=\"2\" color=\"#505050\">$thetext<br>$notes</font>\n";
    } else {
	if($informant != "") {
	    $boxstuff = "<a href=\"modules.php?name=Your_Account&amp;op=userinfo&amp;uname=$informant\">$informant</a> ";

	} else {
	    $boxstuff = "$anonymous ";
	}
	$boxstuff .= "".translate("writes")." <i>\"$thetext\"</i>$notes\n";
	echo "<font size=\"2\" color=\"#505050\">$boxstuff</font>\n";
    }
}

/************************************************************/
/* Function themeheader()                                   */
/*                                                          */
/* Control the header for your site. You need to define the */
/* BODY tag and in some part of the code call the blocks    */
/* function for left side with: blocks(left);               */
/************************************************************/

function themeheader() {
    global $user, $banners, $sitename, $slogan, $cookie, $prefix;
    cookiedecode($user);
    $username = $cookie[1];
    if ($username == "") {
        $username = "Anonymous";
    }
if ($username == "Anonymous") {
	$theuser = "&nbsp;&nbsp;<a href=\"modules.php?name=Your_Account&op=new_user\">Create an account";
    } else {
	$theuser = "&nbsp;&nbsp;Welcome $username!";
    }
   echo "<body bgcolor=\"#ffffff\" topmargin=\"0\" leftmargin=\"0\" marginheight=\"0\" marginwidth=\"0\">\n";
  

    $result = mysql_query("SELECT count FROM ".$prefix."_counter WHERE type='total' AND var='hits'");
    $result = mysql_fetch_row($result);

    echo" <!-- Layout Theme rt2 Design by, MaxG, http://www.globlenet.com -->\n"
        ."<a name=\"top\"></a><table cellSpacing=\"0\" cellPadding=\"0\" width=\"100%\" border=\"0\">\n"
        ."<tr>\n"
        ."<td class=\"thead-line\" width=\"33%\" bgcolor=\"#C5823C\">&nbsp;Welcome:&nbsp; <a href=\"modules.php?name=Your_Account\">$username</a></td>\n"
        ."<td class=\"thead-line\" align=\"middle\" width=\"33%\" bgcolor=\"#C5823C\">&nbsp;\n"
        ."</td>\n"
        ."<td class=\"thead-line\" align=\"right\" width=\"34%\" bgcolor=\"#C5823C\">\n"
        ."<script type=\"text/javascript\">\n\n"
        ."<!--   // Array ofmonth Names\n"
        ."var monthNames = new Array( \"January\",\"February\",\"March\",\"April\",\"May\",\"June\",\"July\",\"August\",\"September\",\"October\",\"November\",\"December\");\n"
        ."var now = new Date();\n"
        ."thisYear = now.getYear();\n"
        ."if(thisYear < 1900) {thisYear += 1900}; // corrections if Y2K display problem\n"
        ."document.write(monthNames[now.getMonth()] + \" \" + now.getDate() + \", \" + thisYear);\n"
        ."// -->\n\n"
        ."</script>&nbsp;</td>\n"
        ."</tr></table>\n"
        ."<table cellSpacing=\"0\" cellPadding=\"0\" width=\"100%\" border=\"0\">\n"
        ."<tr><td class=\"option\" vAlign=\"center\" align=\"middle\" width=\"120\" background=\"themes/rt2/images/topcorner1.gif\" bgColor=\"#0a3642\" height=\"120\">\n"
        ."<img height=\"3\" alt src=\"themes/rt2/images/pixel.gif\" width=\"120\" border=\"0\">\n"
        ."<a href=\"index.php\"><font color=\"#FFCC00\"><b>$sitename</b></font></a></td>\n"
        ."<td vAlign=\"top\" align=\"left\" width=\"100%\">\n"
        ."<table cellSpacing=\"0\" cellPadding=\"0\" width=\"100%\" bgColor=\"#a21e23\" border=\"0\">\n"
        ."<TR><TD vAlign=\"top\" align=\"left\" width=\"122\" height=\"120\" background=\"themes/rt2/images/topcorner2.gif\">\n"
        ."<img src=\"themes/rt2/images/pixel.gif\" width=\"120\" height=\"3\" border=\"0\" alt=\"\"></TD>\n"
        ."<TD vAlign=\"center\" align=\"middle\" width=\"100%\" height=\"120\">\n"
        ."<TABLE cellSpacing=0 width=\"100%\" align=center border=0 bgcolor=\"#A52129\">\n"
        ."<TR><TD vAlign=\"center\" align=\"middle\" width=\"100%\" bgcolor=\"#A52129\">\n" 
        ."<img src=\"themes/rt2/images/pixel.gif\" width=\"5\" height=\"5\" border=\"0\" alt=\"\"></TD></TR>\n"
        ."<tr><td align=\"center\" bgcolor=\"#A52129\">\n";
  	
    if ($banners) {
	include("banners.php");
    }

         echo"</tr>\n"
    ."<TR><TD vAlign=\"center\" width=\"100%\" bgcolor=\"#A52129\">\n" 
    ."<img src=\"themes/rt2/images/pixel.gif\" width=\"5\" height=\"5\" border=\"0\" alt=\"\"></TD></TR>\n"
    ."<TR><TD align=\"center\" width=\"100%\" bgcolor=\"#A52129\">\n"
."<!-- Open Directory Search Box Disabled -->\n"
    //."<form method=\"get\" action=\"modules.php?name=Open_Directory&file=index&op=modload&\"><input type=hidden name=\"op\" value=\"modload\"><input type=hidden name=\"name\" value=\"Open_Directory\"> <input size=\"15\" name=search><input type=submit value=\"ODP Search\"></form>\n"
."<!-- Open Directory Search Box Disabled -->\n"
    ."</TD></TR>\n"
    ."<TR><TD vAlign=\"center\" width=\"100%\" bgcolor=\"#A52129\">\n"
    ."</TD></TR></TABLE>\n"
    ."</TD>\n"
    ."<TD valign=\"middle align=\"right\" width=\"120\" height=\"120\" background=\"themes/rt2/images/topcorner3.gif\">\n"
."<!-- Right Top Background image disabled -->\n"
    ."<img src=\"themes/rt2/images/pixel.gif\" width=\"60\" height=\"1\" border=\"0\" alt=\"\">\n"
    ."</TD></TR></TABLE></TD></TR></table>\n"
    ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n"
    ."<tr><td class=\"thead-line\" bgcolor=\"#C5823C\">\n"    
    ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n"
    ."<tr><td align=\"left\" class=\"thead-line\" bgcolor=\"#C5823C\">&nbsp;PV: <a href=\"modules.php?name=Statistics\">$result[0]</a> 15 Jan 2002</td>\n"
    ."<td align=\"center\" class=\"thead-line\"><a href=\"index.php\">Home</a>\n"
    ."&nbsp;�&nbsp; <a href=\"modules.php?name=Forum\">Forum</a>\n"
    ."&nbsp;�&nbsp; <a href=\"modules.php?name=Topics\">Topics</a>\n"
    ."&nbsp;�&nbsp; <a href=\"modules.php?name=Downloads\">Downloads</a>\n"
    ."&nbsp;�&nbsp; <a href=\"modules.php?name=Your_Account\">Your\n"
    ."Account</a> &nbsp;�&nbsp; <a href=\"modules.php?name=Submit_News\">Submit\n"
    ."News</a> &nbsp;�&nbsp; <a href=\"modules.php?op=modload&name=News&file=index\">Site\n"
    ."News</a></td></tr></table>\n"      
    ."</td>\n"
    ."<td class=\"thead-line\" align=\"right\" bgcolor=\"#C5823C\" height=\"6\">$theuser&nbsp;</td>\n"
    ."</tr></table>\n"
    ."<table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\n"
    ."<td align=\"right\" width=\"468\">\n"
    ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"150\">\n"
    ."<tr><td width=\"150\"><br></td>\n"
    ."</tr></table></td>\n"
."<!-- End Title -->\n"
	."<table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\"><tr valign=\"top\">\n"
	."<td><img src=\"themes/rt2/images/pixel.gif\" width=\"1\" height=\"20\" border=\"0\" alt=\"\"></td></tr></table>\n"
	."<table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\"><tr valign=\"top\">\n"
	."<td bgcolor=\"#A52129\"><img src=\"themes/rt2/images/pixel.gif\" width=\"5\" height=\"1\" border=\"0\" alt=\"\"></td>\n"
	."<td class=\"lbox\" bgcolor=\"#083942\" width=\"160\" valign=\"top\">\n";
    //."<font class=\"lbox\" color=\"#083942\">\n";
    blocks(left);
    echo "</font></td><td><img src=\"themes/rt2/images/pixel.gif\" width=\"15\" height=\"1\" border=\"0\" alt=\"\"></td><td width=\"100%\">\n";
}

/************************************************************/
/* Function themefooter()                                   */
/*                                                          */
/* Control the footer for your site. You don't need to      */
/* close BODY and HTML tags at the end. In some part call   */
/* the function for right blocks with: blocks(right);       */
/* Also, $index variable need to be global and is used to   */
/* determine if the page your're viewing is the Homepage or */
/* and internal one.                                        */
/************************************************************/

function themefooter() {
    global $index;
    if ($index == 1) {
	echo "</td><td><img src=\"themes/rt2/images/pixel.gif\" width=\"15\" height=\"1\" border=\"0\" alt=\"\"></td><td class=\"rbox\" WIDTH=\"160\" valign=\"top\">\n"
	 ."<TD class=\"rbox\" WIDTH=\"160\" ALIGN=\"center\" VALIGN=\"top\" bgcolor=\"#FFFFCC\">\n"
    ."<font class=\"rbox\" color=\"#000080\">\n";
    blocks(right);
    echo" </font>\n";
    }
    echo "</td><td bgcolor=\"#083942\"><img src=\"themes/rt2/images/pixel.gif\" width=5 height=1 border=0 alt=\"\">\n"
	."</td></tr></table>\n"
    ."<table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\"><tr valign=\"top\">\n"
    ."</tr></table>\n"
    ."<table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\" bgcolor=\"#083142\"><tr valign=\"top\">\n"
."<td align=\"center\" height=\"17\">\n"
."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n"
."<tr>\n"
."<td align=\"center\" class=\"thead-line\" width=\"150\" nowrap\">\n"
."<p>&nbsp;</p>\n"
."</td>\n"
."<td class=\"thead-line\" align=\"center\" width=\"100%\"><B>\n"
."<A href=\"index.php\">Home</a>\n"
."&nbsp;&middot;&nbsp; <A href=\"modules.php?name=Forum\">Forum</a>\n"
."&nbsp;&middot;&nbsp; <A href=\"modules.php?name=Topics\">Topics</a>\n"
."&nbsp;&middot;&nbsp; <A href=\"modules.php?name=Downloads\">Downloads</a>\n"
."&nbsp;&middot;&nbsp; <A href=\"modules.php?name=Your_Account\">Your Account</a>\n"
."&nbsp;&middot;&nbsp; <A href=\"modules.php?name=Submit_News\">Submit News</a>\n"
."&nbsp;&middot;&nbsp; <A href=\"modules.php?name=Top\">Top 10</a></B></td>\n"
."<td class=\"thead-line\">&nbsp;</td></tr></table></td></tr></table>\n"
."<table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\" bgcolor=\"#083142\"><tr valign=\"top\">\n"
."<td bgcolor=\"#083142\">&nbsp;</td>\n"
."<td class=\"lbox\" align=\"center\" width=\"100%\" bgcolor=\"#083142\"><br>\n";
footmsg();
echo "</td><td>&nbsp;</td></tr><tr align=\"center\">\n"
."</tr><tr><td>&nbsp;</td><td width=\"100%\">&nbsp;</td><td>&nbsp;</td>\n"
."</tr></table>\n"
."<table border=\"0\" cellPadding=\"0\" cellSpacing=\"0\" width=\"100%\" bgcolor=\"#C5823C\">\n"
."<tr><td class=\"thead-line\" width=\"150\" nowrap? bgcolor=\"#C5823C\">\n"
."<p align=\"center\">&nbsp;</p>\n"
."</td>\n"
."<td align=\"middle\" class=\"thead-line\" width=\"100%\" bgcolor=\"#C5823C\"><p align=center><a href=\"#top\">UpTop</a></p></td>\n"
."<td class=\"thead-line\">&nbsp;</td>\n"
."</tr></table>\n";   

}
/************************************************************/
/* Function themeheader()                                   */
/*                                                          */
/* Control the header for your site. You need to define the */
/* BODY tag and in some part of the code call the blocks    */
/* function for left side with: blocks(left);               */
/************************************************************/

function themeindex ($aid, $informant, $time, $title, $counter, $topic, $thetext, $notes, $morelink, $topicname, $topicimage, $topictext) {
    global $anonymous, $tipath; 
 echo "<table cellSpacing=\"0\" cellPadding=\"0\" width=\"100%\" border=\"0\" bordercolor=\"#CCCCCC\">\n"
."<tr><td>\n"
."<table cellSpacing=\"0\" cellPadding=\"0\" width=\"100%\" border=\"1\">\n"
."<tr><td>\n"
."<table cellSpacing=\"0\" cellPadding=\"0\" width=\"100%\" bgColor=\"#ffffff\" border=\"0\">\n"
."<tr><td class=\"thead-line\" align=\"left\"><b>&nbsp;$title</b></td></tr>\n"
."</table></td></tr></table>\n"
."<table cellSpacing=\"0\" cellPadding=\"4\" width=\"100%\" border=\"0\">\n"
."<tr><td vAlign=\"top\"><a href=\"modules.php?name=News&new_topic=$topic\"><img src=\"$tipath$topicimage\" border=\"0\" Alt=\"$topictext\" align=\"right\" hspace=\"10\" vspace=\"10\"></a>\n"
."<td vAlign=\"top\">\n"
."<font class=\"content\" color=\"silver\">\n"
.""._POSTEDBY." ";
formatAidHeader($aid);
echo " "._ON." $time $timezone ($counter "._READS.")<br>\n";
FormatStory($thetext, $notes, $aid, $informant);
     echo "<br></font></td></tr>\n"
     ."</table></td></tr></table>\n"
     ."<table cellSpacing=\"0\" cellPadding=\"1\" width=\"100%\" border=\"0\">\n"
     ."<tr><td>\n"
     ."<table cellSpacing=\"0\" cellPadding=\"3\" width=\"100%\" border=\"0\">\n"
     ."<tr><td Valign=\"center\" align=\"middle\">\n"
     ."<font class=\"content\">$morelink</font>\n"
     ."</td></tr>\n"
     ."</table></td></tr>\n" 
     ."</table><br>\n\n\n";
}

/************************************************************/
/* Function themeheader()                                   */
/*                                                          */
/* Control the header for your site. You need to define the */
/* BODY tag and in some part of the code call the blocks    */
/* function for left side with: blocks(left);               */
/************************************************************/

function themearticle ($aid, $informant, $datetime, $title, $thetext, $topic, $topicname, $topicimage, $topictext) {
    global $admin, $sid, $tipath;
    echo "<table border=\"0\" cellpadding=\"5\" cellspacing=\"0\"  width=\"100%\"><tr><td>\n"
        ."<table border=\"0\" cellpadding=\"1\" cellspacing=\"0\"  width=\"100%\"><tr><td>\n"
        ."<table border=\"0\" cellpadding=\"3\" cellspacing=\"0\"  width=\"100%\"><tr><td align=\"left\">\n"
        ."<font class=\"thead-line\"><b>&nbsp;$title&nbsp;</b></font><br>\n"
        ."<font color=\"#000000\">"._POSTEDON." $datetime "._BY." ";
   formatAidHeader($aid);
   if (is_admin($admin)) {
   echo "<br>[ <a href=\"admin.php?op=EditStory&amp;sid=$sid\">"._EDIT."</a> | <a href=\"admin.php?op=RemoveStory&amp;sid=$sid\">"._DELETE."</a> ]\n";
   }
   echo "</td></tr></table></td></tr></table><br>";
   echo "<a href=\"modules.php?name=Search&query=&topic=$topic\"><img src=\"$tipath$topicimage\" border=\"0\" Alt=\"$topictext\" align=\"right\" hspace=\"10\" vspace=\"10\"></a>\n";
   FormatStory($thetext, $notes="", $aid, $informant);
   echo "</td></tr></table><br>\n\n\n";
   
}

/************************************************************/
/* Function themeheader()                                   */
/*                                                          */
/* Control the header for your site. You need to define the */
/* BODY tag and in some part of the code call the blocks    */
/* function for left side with: blocks(left);               */
/************************************************************/

function themesidebox($title, $content) {
   echo "<table border=\"0\" cellpadding=\"1\" cellspacing=\"0\" width=\"100%\">\n"
         ."<tr><td width=\"100%\">\n"
          ."<table border=\"0\" cellpadding=\"3\" cellspacing=\"0\" width=\"160\">\n"
          ."<tr>\n"
          ."<td align=\"center\" class=\"head-line\" height=\"10\">$title</td>\n"
          ."</tr>\n"
          ."<tr><td class=\"boxin\">$content</td></tr>\n"
          ."<tr><td>\n"
          ."<div align=\"center\">\n"
          ."<center>\n"
          ."<table border=\"0\" cellspacing=\"0\" width=\"90%\">\n"
          ."<tr><td class=\"boxin\" align=\"center\" width=\"100%\">= + =</td>\n"
          ."</tr></table>\n"
          ."</center>\n"
          ."</div>\n"
          ."</td></tr></table>\n"
          ."</td></tr></table>\n\n";
}

?>