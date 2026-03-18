<?php

/**************************************************************/
/* Modification - updated for PHP-Nuke 5.5 by                 */
/* maxxy - ( http://www.nuketest.net )                        */
/**************************************************************/
/* fmII version 1.3 created by MonkeyKing                     */
/* http://www.samuraisunday.com                               */
/* contact: monkeyking@samuraisunday.com                      */
/* Released under the GNU/GPL license                         */
/*                                                            */
/**************************************************************/
/**************************************************************/
/* Theme Colors Definition                                    */
/**************************************************************/

$thename = "fmII";
$bgcolor1 = "#FFFFFF";
$bgcolor2 = "#CCCCCC";
$bgcolor3 = "#C6C6C6";
$bgcolor4 = "#e7e7e7";
$textcolor1 = "#333333";
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
        $notes = "<br><b>"._NOTE."</b> $notes\n";
    } else {
        $notes = "";
    }
    if ("$aid" == "$informant") {
        echo "$thetext<br>$notes\n";
    } else {
        if($informant != "") {
            $boxstuff = "<a href=\"modules.php?name=Your_Account&amp;op=userinfo&amp;uname=$informant\">$informant</a> ";
        } else {
            $boxstuff = "$anonymous ";
        }
        $boxstuff .= "".translate("writes")." $thetext<br>$notes\n";
        echo "$boxstuff\n";
    }
}

/************************************************************/
/* Function themeheader                                     */
/************************************************************/

function themeheader() {
    global $user, $username, $banners, $sitename, $slogan, $cookie, $prefix, $index, $admin;
    cookiedecode($user);
    $username = $cookie[1];
    if ($username == "") {
        $username = "Anonymous";
    }
echo "<body>\n"

// ***** begin top bar *****

	."<table cellspacing=\"0\" cellpadding=\"1\" width=\"100%\" border=\"0\" bgcolor=\"#cccccc\">\n"
	."<tr valign=\"middle\">\n"
	."<td><font size=1>\n";
	print( "Welcome to $sitename" );
echo "</font></td>\n"
	."<td bgcolor=\"#cccccc\" align=\"right\"><font size=1>\n";
	print( "$slogan" );
echo "</font></td>\n"
	."</tr>\n"
	."</table>\n"
	
	."<table cellspacing=\"0\" cellpadding=\"0\" width=\"100%\" border=\"0\" bgcolor=\"#FFFFFF\" >\n"
	."<tr valign=\"middle\" bgcolor=\"#6f6f6f\">\n"
	."<td><img src=\"/themes/fmII/images/pix.gif\" width=\"1\" height=\"2\" alt=\"\"></td>\n"
	."</tr>\n"
	."</table>\n"

	
// ***** end top bar *****

    ."<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\n"
    ."<tr>\n"
    ."<td class=\"headertop\" width=\"100%\" valign=\"top\">\n"
    ."<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\n"
    ."<tr>\n"
    ."<td width=\"168\"><a href=\"index.php\"><img src=\"themes/fmII/images/logo.gif\" alt=\"welcome to $sitename\" border=\"0\"></a></td>\n"
    ."<td valign=\"top\" align=\"right\">\n"
    ."<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"headertabledate\">\n"
    ."<tr>\n"
    ."<td align=\"right\"><br>\n";
    if ($banners) {
    include("banners.php");
}

/******************* Greeting to newest User ******/
//
//$resultlast = mysql_query("select uname from $prefix"._users." order by uid DESC limit 0,1");
//list($lastuser) = mysql_fetch_row($resultlast);
//        echo ""._GREETINGS." <A HREF=\"modules.php?name=Your_Account&amp;op=userinfo&amp;uname=$lastuser\">$lastuser</a>\n";

/****************** End Greeting ******************/
    echo "</td>\n"
    ."</tr>\n"
    ."</table>\n"
    ."</td>\n"
    ."</tr>\n"
    ."</table>\n"

    ."</td>\n"
    ."</tr>\n"
    ."<tr>\n"
    ."<td class=\"headerline\" width=\"100%\"><img src=\"themes/fmII/images/pix-transparent.gif\" width=\"1\" height=\"2\" alt=\"\" border=\"0\"></td>\n"
    ."</tr>\n"
    ."<tr>\n"
    ."<td bgcolor=\"#cccccc\">\n"
	
	."<table bgcolor=\"#cccccc\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"2\">\n"
	."<tr>\n"	
	."<td align=\"left\" valign=\"middle\"><font size=1>\n";

// getDate ... done coz Javascript grabs Date from the browser

echo "<script type=\"text/javascript\">\n\n"
    ."var monthNames = new Array( \"January\",\"February\",\"March\",\"April\",\"May\",\"June\",\"July\",\"August\",\"September\",\"October\",\"November\",\"December\");\n"
    ."var now = new Date();\n"
    ."thisYear = now.getYear();\n"
    ."if(thisYear < 1900) {thisYear += 1900}; // corrections if Y2K display problem\n"
    ."document.write(monthNames[now.getMonth()] + \" \" + now.getDate() + \" \" + thisYear);\n\n"
    ."</script>\n";
echo "</font></td>\n"


// ***** Start Hardcoded Navbar here ***************	
    ."<td align=\"center\" valign=\"middle\">\n"
    ."<a href=\"index.php\">Home</a>\n"
    ." | \n"
    ."<a href=\"modules.php?name=Topics\">Topics</a>\n"
    ." | \n"
    ."<a href=\"modules.php?name=Downloads\">Downloads</a>\n"
    ." | \n"
    ."<a href=\"modules.php?name=Web_Links\">Links</a>\n"
    ." | \n";
    if ($username != "Anonymous") {
	echo "<a href=\"modules.php?name=Your_Account\">Account</a>\n";
    } else {
	echo "<a href=\"modules.php?name=Your_Account\">Login</a>\n";
    }
    echo " | \n";
    if ($username != "Anonymous") {
	echo "<a href=\"modules.php?name=Your_Account&op=logout\">Logout</a>\n";
    } else {
	echo "";
    }
    if (is_admin($admin)) { 
    	echo " | \n";
	echo "<a href=\"admin.php\">Administration</a>\n";
    }
    echo "</td>\n"
// ***** End Hardcoded Navbar here ***************	
	."<td align=\"right\"><font size=1>\n";

// getTime ... done Javascript grabs the time from the browser

echo "<script type=\"text/javascript\">\n\n"
	."var timeNow = new Date();\n"
	."var hours = timeNow.getHours();\n"
	."var minutes = timeNow.getMinutes();\n"
	."var minute = (minutes <= 9) ? \"0\" : \"\";\n"
	."var timeValue = (hours >= 12) ? \" PM\" : \" AM\";\n"
	."if (hours == 0) hours = 12;\n"
	."if (hours > 12) hours = hours-12;\n"
	."document.write(hours + \":\" + minute + minutes + timeValue);\n"
    	."</script>\n";


echo "</font></td>\n"
	

    ."</table>\n"
	
    ."</td>\n"
    ."</tr>\n"
	
    ."<tr>\n"
    ."<td class=\"headerline\" width=\"100%\"><img src=\"themes/fmII/images/pix-transparent.gif\" width=\"1\" height=\"2\" alt=\"\" border=\"0\"></td>\n"
    ."</tr>\n"
    ."</table>\n"

	."<table cellspacing=\"0\" cellpadding=\"5\" width=\"100%\" border=\"0\" bgcolor=\"#cccccc\" align=\"center\">\n"
	."<tr bgcolor=\"#BBDDFF\">\n"
	."<td align=\"left\">\n"

	 ."<FORM action=modules.php?name=Search method=post>\n"
 	 ."<font size=2>find:</font> <input type=text name=query size=15>\n"
	 ."</FORM>\n"

	."</td>\n"
	."<td valign=\"top\" align=\"right\"><font size=1>\n";

if ($username == "Anonymous") {
echo "<a href=\"modules.php?name=Your_Account\">not logged in</a> «\n"
	."<br><b><a href=\"modules.php?name=Your_Account&op=new_user\">register</a></b> «\n"
	."<br><b><a href=\"modules.php?name=Your_Account&op=pass_lost\">lost password</a></b> «";
}
else

    if (is_user($user)) {
	$content .= ""._YOUARELOGGED." <b>$username</b>    «<br>";
	$result = mysql_query("select uid from $prefix"._users." where uname='$username'");
	list($uid) = mysql_fetch_row($result);
	$result2 = mysql_query("select to_userid from $prefix"._priv_msgs." where to_userid='$uid'");
	$numrow = mysql_num_rows($result2);
	$content .= ""._YOUHAVE." <a href=\"modules.php?name=Private_Messages\"><b>$numrow</b></a> "._PRIVATEMSG."   «</font></center>";
    } 
	echo "$content";
	
echo    "</font></td>\n"
	."</tr>\n"
	."</table>\n"
	
	."<table cellspacing=\"0\" cellpadding=\"0\" width=\"100%\" border=\"0\" bgcolor=\"#FFFFFF\" >\n"
	."<tr valign=\"middle\" bgcolor=\"#6f6f6f\">\n"
	."<td><img src=\"/themes/fmII/images/pix.gif\" width=\"1\" height=\"2\" alt=\"\"></td>\n"
	."</tr>\n"
	."</table>\n"
	
    ."<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\n"
    ."<tr>\n"
    ."<td width=\"10\" class=\"whitevertical\"><img src=\"themes/fmII/images/pix-transperent.gif\" alt=\"\" border=\"0\" width=\"1\" height=\"1\">&nbsp;</td>\n"
    ."<td valign=\"top\" align=\"center\" width=\"100%\">\n";

}

/************************************************************/
/* Function themefooter                                     */
/************************************************************/

function themefooter() {
    global $index;
    if ($index == 1) {
    echo "</td>\n"
    ."<td width=\"2\" class=\"tiretvertical\"><img src=\"themes/fmII/images/pix-transperent.gif\" alt=\"\" border=\"0\" width=\"2\" height=\"1\"></td>\n"
    ."<td valign=\"top\" align=\"center\" width=\"166\" class=\"boxback1\">\n";

blocks(left);
blocks(right);
} else {
    echo "</td>\n"
    ."<td valign=\"top\" align=\"center\" width=\"166\" class=\"boxback1\">\n";

blocks(left);
}
    echo "</td>\n"
    ."</tr>\n"
    ."</table>\n"
    ."<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" bgcolor=\"#FFFFFF\" >\n"
    ."<tr>\n"
    ."<td class=\"headerline\" width=\"100%\"><img src=\"themes/fmII/images/pix-transparent.gif\" width=\"1\" height=\"2\" alt=\"\" border=\"0\"></td>\n"
    ."</tr>\n"
    ."<tr>\n"
    ."<td class=\"headertop\" align=\"center\" valign=\"middle\">\n"
    ."<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"5\">\n"
    ."<tr>\n"
    ."<td align=\"center\" valign=\"middle\" class=\"copyright\">\n";
footmsg();
    echo "</td>\n"
    ."</tr>\n"
    ."</table>\n"
    ."</td>\n"
    ."</tr>\n"
    ."</table>\n";
}

/************************************************************/
/* Function themeindex                                      */
/************************************************************/

function themeindex ($aid, $informant, $time, $title, $counter, $topic, $thetext, $notes, $morelink, $topicname, $topicimage, $topictext) {
    global $anonymous, $tipath;
    echo "<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"2\">\n"
    ."<tr>\n"
    ."<td>\n"
    ."<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"4\">\n"
    ."<tr>\n"
    ."<td valign=\"middle\" align=\"left\" width=\"20\"><img src=\"themes/fmII/images/fleche2.gif\" width=\"20\" height=\"20\" alt=\"\" border=\"0\"></td>\n"
    ."<td valign=\"middle\" align=\"left\" class=\"newstitle\">$title<br></td>\n"
    ."</tr>\n"
    ."</table>\n"
    ."</td>\n"
    ."</tr>\n"
    
    ."<tr>\n"
    ."<td class=\"newstex2\" align=\"left\" valign=\"top\">"._POSTEDBY." ";
    formatAidHeader($aid);
    echo " "._ON." $time $timezone <br><a href=\"modules.php?name=News&amp;new_topic=$topic\">Topic: $topictext </a> ($counter "._READS.") $morelink<br><hr noshade align=\"left\" width=\"90\" size=\"1\">\n"
    ."</td></tr>\n"
    ."<tr>\n"
    ."<td class=\"newstexte\" align=\"left\" valign=\"top\">\n";
    FormatStory($thetext, $notes, $aid, $informant);
    echo "</td>\n"
    ."</tr>\n"
    ."</table>\n"
    ."<hr noshade align=\"left\" width=\"95%\">\n\n\n";
}

/************************************************************/
/* Function themearticle                                    */
/************************************************************/

function themearticle ($aid, $informant, $datetime, $title, $thetext, $topic, $topicname, $topicimage, $topictext) {
    global $admin, $sid, $tipath;
    echo  "<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"2\">\n"
    ."<tr>\n"
    ."<td>\n"
    ."<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"4\">\n"
    ."<tr>\n"
    ."<td valign=\"middle\" align=\"left\" width=\"20\"><img src=\"themes/fmII/images/fleche2.gif\" width=\"20\" height=\"20\" alt=\"\" border=\"0\"></td>\n"
    ."<td valign=\"middle\" align=\"left\" class=\"newstitle\">$title</td>\n"
    ."</tr>\n"
    ."</table>\n"
    ."</td>\n"
    ."</tr>\n"
    ."<tr>\n"
    ."<td class=\"newstexte\" align=\"left\" valign=\"top\"><a href=\"modules.php?name=News&amp;new_topic=$topic\"><img src=\"$tipath$topicimage\" border=\"0\" Alt=\"$topictext\" align=\"right\" hspace=\"5\" vspace=\"5\"></a>\n";
    FormatStory($thetext, $notes, $aid, $informant);
    echo "</td>\n"
    ."</tr>\n"
    ."<tr>\n"
    ."<td class=\"newstexte\" align=\"left\" valign=\"top\">"._POSTEDON." $datetime "._BY." ";
    formatAidHeader($aid);
    if (is_admin($admin)) {
    echo "<br>[ <a href=\"admin.php?op=EditStory&amp;sid=$sid\">"._EDIT."</a> | <a href=\"admin.php?op=RemoveStory&amp;sid=$sid\">"._DELETE."</a> ]\n";
}
     echo "</td>\n"
    ."</tr>\n"
    ."<tr>\n"
    ."<td class=\"newsline\" width=\"100%\"><img src=\"themes/fmII/images/pix-transparent.gif\" width=\"1\" height=\"10\" alt=\"\" border=\"0\"></td>\n"
    ."</tr>\n"
    ."</table>\n"
    ."<br>\n\n\n";
}

/************************************************************/
/* Function themesidebox                                    */
/************************************************************/

function themesidebox($title, $content) {
    echo "<br><table width=\"160\" border=\"0\" cellspacing=\"0\" cellpadding=\"3\">\n"
    ."<tr>\n"
    ."<td>\n"
    ."<table width=\"160\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\n"
    ."<tr>\n"
    ."<td width=\"20\"><img src=\"themes/fmII/images/fleche2.gif\" width=\"20\" height=\"20\" alt=\"\" border=\"0\"></td>\n"
    ."<td class=\"boxtitle\">&nbsp;$title&nbsp;</td>\n"
    ."</tr>\n"
    ."</table>\n"
    ."</td>\n"
    ."</tr>\n"
    ."<tr>\n"
    ."<td class=\"boxtexte\">";
if (file_exists($content)) {
        $fp = fopen ($content, "r");
        $content = fread($fp, filesize($content));
        fclose ($fp);
        $content = "?>$content<?";
        echo eval($content);
} else {
        echo $content;
}
    echo "</td>\n"
    ."</tr>\n"
   ."</table>\n\n\n";
}

?>

