<?php 
/************************************************************/
/* Theme Name: rt1 (v1.0)   for  PHPNuke  5.5               */
/* By, MaxG http://globlenet.com   support@globlenet.com    */
/* Created: March, 2002  tested on IE6+ & Netscape & 6+     */
/************************************************************/

$thename = "rt1";
$bgcolor1 = "";
$bgcolor2 = "";
$bgcolor3 = "";
$bgcolor4 = "";
$textcolor1 = "#000000";
$textcolor2 = "#000000";


function OpenTable() {
    global $bgcolor1, $bgcolor2;
    echo "<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" bgcolor=\"$bgcolor2\"><tr><td>\n";
    echo "<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"8\" bgcolor=\"$bgcolor1\"><tr><td>\n";
}

function OpenTable2() {
    global $bgcolor1, $bgcolor2;
    echo "<table border=\"0\" cellspacing=\"1\" cellpadding=\"0\" bgcolor=\"$bgcolor2\" align=\"center\"><tr><td>\n";
    echo "<table border=\"0\" cellspacing=\"1\" cellpadding=\"8\" bgcolor=\"$bgcolor1\"><tr><td>\n";
}

function CloseTable() {
    echo "</td></tr></table></td></tr></table>\n";
}

function CloseTable2() {
    echo "</td></tr></table></td></tr></table>\n";
}

/************************************************************/
/* FormatStory                                              */
/*                                                          */
/* Here we'll format the look of the stories in our site.   */
/* If you dig a little on the function you will notice that */
/* we set different stuff for anonymous, admin and users    */
/* when displaying the story.                               */
/************************************************************/

function FormatStory($thetext, $notes, $aid, $informant) {
    global $anonymous;
    if ($notes != "") {
	$notes = "<br><br><b>"._NOTE."</b> <i>$notes</i>\n";
    } else {
	$notes = "";
    }
    if ("$aid" == "$informant") {
	echo "<font class=\"content\" color=\"#505050\">$thetext$notes</font>\n";
    } else {
	if($informant != "") {
	    $boxstuff = "<a href=\"user.php?op=userinfo&amp;uname=$informant\">$informant</a> ";
	} else {
	    $boxstuff = "$anonymous ";
	}
	$boxstuff .= "".translate("writes")." <i>\"$thetext\"</i>$notes\n";
	echo "<font class=\"content\" color=\"#505050\">$boxstuff</font>\n";
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
 $result = mysql_query("SELECT count FROM ".$prefix."_counter WHERE type='total' AND var='hits'");
 $result = mysql_fetch_row($result);

echo "<body bgcolor=\"#ffffff\" topmargin=\"0\" leftmargin=\"0\" marginheight=\"0\" marginwidth=\"0\">\n";
    if ($banners) {
	include("banners.php");
    }

    echo" <!-- Layout Theme rt1 Design by, MaxG, http://www.globlenet.com -->\n"
        ."<table cellSpacing=\"0\" cellPadding=\"0\" width=\"100%\" border=\"0\">\n"
        ."<tr>\n"
        ."<td class=\"thead-line\" width=\"33%\" bgcolor=\"#C5823C\">&nbsp;Welcome:&nbsp; <a href=\"modules.php?name=Your_Account\">$username</a></td>\n"
        ."<td class=\"thead-line\" align=\"middle\" width=\"33%\" bgcolor=\"#C5823C\">&nbsp;</td>\n"
        ."<td class=\"thead-line\" align=\"right\" width=\"34%\" bgcolor=\"#C5823C\">\n"
        ."<script type=\"text/javascript\">\n\n"
        ."<!--   // Array ofmonth Names\n"
        ."var monthNames = new Array( \"January\",\"February\",\"March\",\"April\",\"May\",\"June\",\"July\",\"August\",\"September\",\"October\",\"November\",\"December\");\n"
        ."var now = new Date();\n"
        ."thisYear = now.getYear();\n"
        ."if(thisYear < 1900) {thisYear += 1900}; // corrections if Y2K display problem\n"
        ."document.write(monthNames[now.getMonth()] + \" \" + now.getDate() + \", \" + thisYear);\n"
        ."// -->\n\n"
        ."</script></td>\n"
        ."</tr></table>\n"
        ."<table cellSpacing=\"0\" cellPadding=\"0\" width=\"100%\" border=\"0\">\n"
        ."<tr><td class=\"option\" vAlign=\"center\" align=\"middle\" width=\"120\" background=\"themes/rt1/images/topcorner1.gif\" bgColor=\"#0a3642\" height=\"120\">\n"
        ."<img height=\"3\" alt src=\"themes/rt1/images/pixel.gif\" width=\"120\" border=\"0\">\n"
        ."<a href=\"index.php\"><font color=\"#FFCC00\"><b>$sitename</b></font></a></td>\n"
        ."<td vAlign=\"top\" align=\"left\" width=\"100%\">\n"
        ."<table cellSpacing=\"0\" cellPadding=\"0\" width=\"100%\" bgColor=\"#a21e23\" border=\"0\">\n"
        ."<TR><TD vAlign=\"top\" align=\"left\" width=\"122\" height=\"120\" background=\"themes/rt1/images/topcorner2.gif\">\n"
        ."<img src=\"themes/rt1/images/pixel.gif\" width=\"120\" height=\"3\" border=\"0\" alt=\"\"></TD>\n"
        ."<TD vAlign=\"center\" align=\"middle\" width=\"100%\" height=\"120\">\n"
        ."<TABLE cellSpacing=0 width=\"100%\" align=center border=0>\n"
        ."<TR><TD vAlign=\"center\" align=\"middle\" width=\"100%\">\n" 
        ."<img src=\"themes/rt1/images/pixel.gif\" width=\"5\" height=\"15\" border=\"0\" alt=\"\"></TD></TR>\n"
        ."<tr><td align=\"center\"><b><font color=\"#ffffff\" size=\"4\">$slogan</font></b>\n"
        ."</tr>\n"
        ."<TR><TD vAlign=\"center\" align=\"middle\" width=\"100%\">\n" 
        ."<img src=\"themes/rt1/images/pixel.gif\" width=\"5\" height=\"15\" border=\"0\" alt=\"\"></TD></TR>\n"
        ."<TR><TD align=\"center\" width=\"100%\">\n" 
."<!-- Open Directory search Box -------->\n"
        ."<form method=get action=\"modules.php?name=Open_Directory&file=index&op=modload&\">\n"
        ."<input type=hidden name=\"op\" value=\"modload\"><input type=hidden name=\"name\" value=\"Open_Directory\">\n"
        ."<input size=20 name=search>\n" 
        ."<input type=submit value=\"ODP Search\"> &nbsp; </form>\n"
."<!-- End of Open Directory Search Box ------->\n"
        ."</TD></TR>\n"
        ."<TR><TD vAlign=\"center\" align=\"right width=\"100%\"></TD></TR></TABLE></TD>\n"
        ."<TD valign=\"middle align=\"right\" width=\"120\" height=\"120\" background=\"themes/rt1/images/topcorner3.gif\">\n"
        ."<img src=\"themes/rt1/images/pixel.gif\" width=\"120\" height=\"1\" border=\"0\" alt=\"\">\n"
        ."</TD></TR></TABLE></TD></TR></table>\n"
        ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n"
        ."<tr><td class=\"thead-line\" bgcolor=\"#C5823C\">\n"    
        ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n"
        ."<tr><td align=\"left\" class=\"head-line\" bgcolor=\"#C5823C\">PV: <a href=\"modules.php?name=Statistics\">$result[0]</a> 15 Jan 2002</td>\n"
        ."<td align=\"center\"><a href=\"index.php\">Home</a>\n"
        ."&nbsp;�&nbsp; <a href=\"modules.php?name=Forum\">Forum</a>\n"
        ."&nbsp;�&nbsp; <a href=\"modules.php?name=Topics\">Topics</a>\n"
        ."&nbsp;�&nbsp; <a href=\"modules.php?name=Downloads\">Downloads</a>\n"
        ."&nbsp;�&nbsp; <a href=\"modules.php?name=Your_Account\">Your\n"
        ."Account</a> &nbsp;�&nbsp; <a href=\"modules.php?name=Submit_News\">Submit\n"
        ."News</a> &nbsp;�&nbsp; <a href=\"modules.php?op=modload&name=News&file=index\">Site\n"
        ."News</a></td></tr></table>\n"      
        ."</td>\n"
        ."<td align=\"right\" class=\"thead-line\" bgcolor=\"#C5823C\">$theuser&nbsp;</td>\n"
        ."</tr></table>\n"
        ."<table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\n"
        ."<td align=\"right\" width=\"468\">\n"
        ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"150\">\n"
        ."<tr><td width=\"150\"><br></td>\n"
        ."</tr></table></td>\n"
        ."<table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" bgcolor=\"#ffffff\" align=\"center\"><tr valign=\"top\"><br>\n"
    	."<td bgcolor=\"#9C1821\"><img src=\"themes/rt1/images/pixel.gif\" width=\"4\" height=\"1\" border=\"0\" alt=\"\"></td>\n"
     	."<td class=\"lbox\" bgcolor=\"#083942\" width=\"160\" valign=\"top\"><font color=\"#E4B28D\">\n"; 
     blocks(left);
     echo"</font>\n"
        ."<td bgcolor=\"#ffffff\"><img src=\"themes/rt1/images/pixel.gif\" width=\"10\" height=\"1\" border=\"0\" alt=\"\"></td>\n"
        ."<td width=\"100%\">\n";
    }

     echo "</td><td><img src=\"themes/rt1/images/pixel.gif\" width=\"15\" height=\"1\" border=\"0\" alt=\"\"></td><td valign=\"top\" width=\"150\">\n";

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
	echo "</td><td><img src=\"themes/rt1/images/pixel.gif\" width=\"10\" height=\"1\" border=\"0\" alt=\"\"></td><td valign=\"top\" width=\"150\">\n"
	 ."<TD class=\"rbox\" WIDTH=\"160\" ALIGN=\"center\" VALIGN=\"top\" bgcolor=\"#FFFFCC\">\n"
     ."<font color=\"#000000\">\n"; 
    blocks(right);
    }
    echo "</font></td><td bgcolor=\"#083942\"><img src=\"themes/rt1/images/pixel.gif\" width=\"4\" height=\"1\" border=\"0\" alt=\"\"></td>\n"
        ."<table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\">\n"
        ."<tr align=\"center\">\n"
        ."<td width=\"100%\" colspan=\"3\">\n"
        ."</td>\n"
        ."</tr></table>\n";
 echo"</tr></table></td><td><img src=\"themes/rt1/images/pixel.gif\" width=\"1\" height=\"1\" border=\"0\" alt=\"\"></td><td valign=\"top\" width=\"100%\">\n"
."<td class=\"option\"><img src=\"themes/rt1/images/pixel.gif\" width=\"1\" height=\"1\" border=\"0\" alt=\"\">\n"
."</td>\n"
."<td class=\"option\" bgcolor=\"#A52121\"><img src=\"themes/rt1/images/pixel.gif\" width=\"2\" height=\"1\" border=\"0\" alt=\"\">\n"
."</td>\n"
."<table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\"><tr valign=\"top\">\n"
."<td align=\"center\" height=\"17\">\n"
."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n"
."<tr>\n"
."<td class=\"thead-line\" width=\"150\" nowrap\">\n"
."<p align=\"center\">&nbsp;</p>\n"
."</td>\n"
."<td class=\"thead-line\" align=\"center\" width=\"499\"><B>\n"
."<A href=\"index.php\">Home</a>\n"
."&nbsp;&middot;&nbsp; <A href=\"modules.php?name=Forum\">Forum</a>\n"
."&nbsp;&middot;&nbsp; <A href=\"modules.php?name=Topics\">Topics</a>\n"
."&nbsp;&middot;&nbsp; <A href=\"modules.php?name=Downloads\">Downloads</a>\n"
."&nbsp;&middot;&nbsp; <A href=\"modules.php?name=Your_Account\">Your Account</a>\n"
."&nbsp;&middot;&nbsp; <A href=\"modules.php?name=Submit_News\">Submit News</a>\n"
."&nbsp;&middot;&nbsp; <A href=\"modules.php?name=Top\">Top 10</a></B></td>\n"
."<td class=\"thead-line\">&nbsp;</td></tr></table></td></tr></table>\n"
."&nbsp;\n"
."<table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\"><tr valign=\"top\">\n"
."<td></td>\n"
."<td align=\"center\" width=\"100%\">\n";
footmsg();
echo"</td><td></td></tr><tr align=\"center\">\n"
."<td width=\"100%\" colspan=\"3\"></td></tr><tr><td>&nbsp;</td><td width=\"100%\">&nbsp;</td><td></td>\n"
."</tr></table>\n";   
}

/************************************************************/
/* Function themeindex()                                    */
/*                                                          */
/* This function format the stories on the Homepage         */
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
."<font class=\"content\" clor=\"silver\">\n"
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
     ."</table>\n";
}

/************************************************************/
/* Function themeindex()                                    */
/*                                                          */
/* This function format the stories on the story page, when */
/* you click on that "Read More..." link in the home        */
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
/* Function themesidebox()                                  */
/*                                                          */
/* Control look of your blocks. Just simple.                */
/************************************************************/

function themesidebox($title, $content) {
        echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" bordercolor=\"#CCCCCC\">\n"
        ."<tr><td width=\"100%\" ><table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"160\"><tr><td>\n"
        ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\"><tr>\n"
        ."<td class=\"head-line\" align=\"center\" width=\"160\" boder=\"0\" height=\"15\">\n"
        ."<b>$title</b></td></tr></table></td></tr></table>\n"
        ."<table border=\"0\" cellpadding=\"6\" cellspacing=\"0\" width=\"160\">\n"
        ."<tr valign=\"top\"><td>\n"
        ."$content</td></tr>\n"
        ."<tr valign=\"top\"><td valign=\"middle\">\n"
        ."<center>\n"
        ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"1\" width=\"75%\">\n"
        ."<tr><td align=\"center\" width=\"100%\"><font color=\"#E4B28D\"><b> = + = </b></font>\n"
        ."</td></tr></table></center>\n"
        ."</td></tr></table>\n"
        ."</td></tr></table>\n";
}

?>