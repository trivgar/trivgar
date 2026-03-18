<?php

/************************************************************/
/* THEME NAME: ffx69_darkEQ                                 */
/* THEME DEVELOPER: ffx69 (http://www.ffx69.de              */
/* THEME Logos and Icons from DarkEQ phpbb2 Theme           */
/************************************************************/

/************************************************************/
/*                                                          */
/* Theme Colors Definition                                  */
/*                                                          */
/* Control the header for your site. You need to define the */
/* BODY tag and in some part of the code call the blocks    */
/* function for left side with: blocks(left);               */
/************************************************************/

$thename = "ffx69_darkEQ";
$bgcolor1 = "#000022";
$bgcolor2 = "#000022";
$bgcolor3 = "#000022";
$bgcolor4 = "#000022";
$textcolor1 = "#E3DDFF";
$textcolor2 = "#E3DDFF";

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
	    $boxstuff = "<a href=\"modules.php?name=Your_Account?op=userinfo&amp;uname=$informant\">$informant</a> ";
	} else {
	    $boxstuff = "$anonymous ";
	}
	$boxstuff .= ""._WRITES." \"$thetext\" $notes\n";
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
    echo "<body bgcolor=\"#111111\" text=\"#000000\" link=\"#363636\" vlink=\"#363636\" alink=\"#d5ae83\">\n"
        ."<script src=\"themes/ffx69_darkEQ/fade.js\" language=\"Javascript\"></script>\n"
	."<table cellpadding=\"0\" cellspacing=\"0\" width=\"97%\" border=\"0\" align=\"center\" bgcolor=\"#ffffff\">\n"
	."<tr>\n"
	."<td bgcolor=\"#111133\" width=\"200\" align=\"left\" valign=\"middle\">\n"
	."<a href=\"index.php\"><img src=\"themes/ffx69_darkEQ/images/logo2.gif\" align=\"center\" alt=\""._WELCOMETO." $sitename\" border=\"0\"></a></td>\n"
	."<td bgcolor=\"#FFFFFF\" align=\"right\">\n"
	."\n"
	."\n"
	."<td bgcolor=\"#111133\">\n"
        ."<br>\n"
        ."\n";
        if ($banners) {
	include("banners.php");
    }
    echo "<br><td bgcolor=\"#111133\">\n"
        ."\n"
	."<form action=\"modules.php?name=Search\" method=\"post\"><font class=\"orange\"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"._SEARCH." <br></b>\n"
	."<input type=\"text\" name=\"query\" size=\"14\"></font></form>\n"
	."</font></form>\n"
	."<bgcolor=\"#363636\" align=\"left\">\n"
        ."</select></font></form></td></tr></table></td>\n"
	."<td bgcolor=\"#000000\" valign=\"top\">&nbsp;</td>\n"
	."</tr></table>\n"
	."<table cellpadding=\"0\" cellspacing=\"0\" width=\"97%\" border=\"0\" align=\"center\" bgcolor=\"#363636\">\n"
	."<tr>\n"
	."<td bgcolor=\"#000000\" colspan=\"4\"><IMG src=\"themes/ffx69_darkEQ/images/pixel.gif\" width=\"1\" height=1 alt=\"\" border=\"0\" hspace=\"0\"></td>\n"
	."</tr>\n"
	."<tr valign=\"middle\" bgcolor=\"#111133\">\n"
	."<td width=\"15%\" nowrap><font size=\"2\"><b>\n";
    if ($username == "Anonymous") {
	echo "&nbsp;&nbsp;<b><a href=\"modules.php?name=Your_Account\">Login</a></font></b>\n";
    } else {
	echo "&nbsp;&nbsp;Hello $username!";
    }
    echo "</b></font></td>\n"
	."<td align=\"center\" height=\"10\" width=\"71%\"><font size=\"2\">\n"
	."<img src=\"themes/ffx69_darkEQ/images/icon_mini_login.gif\" border=0 align=\"center\"><A href=\"index.php\"> Startseite</a>&nbsp;&nbsp \n"
        ."<img src=\"themes/ffx69_darkEQ/images/icon_mini_search.gif\" border=0 align=\"center\"> <A href=\"modules.php?name=Downloads\">Downloads</a>&nbsp;&nbsp \n"
        ."<img src=\"themes/ffx69_darkEQ/images/icon_mini_profile.gif\" border=0 align=\"center\"> <A href=\"modules.php?name=Your_Account\">Dein Account</a>&nbsp;&nbsp \n"
        ."<img src=\"themes/ffx69_darkEQ/images/icon_mini_groups.gif\" border=0 align=\"center\"> <A href=\"modules.php?name=Submit_News\">Schreibe News</a>&nbsp;&nbsp \n"
        ."<img src=\"themes/ffx69_darkEQ/images/icon_mini_message.gif\" border=0 align=\"center\"> <A href=\"modules.php?name=Top\">Top 30</a>&nbsp;&nbsp \n"
        ."<img src=\"themes/ffx69_darkEQ/images/icon_mini_register.gif\" border=0 align=\"center\"> <A href=\"modules.php?name=Topics\">Topics</a>&nbsp;&nbsp \n"
        ."<img src=\"themes/ffx69_darkEQ/images/icon_mini_members.gif\" border=0 align=\"center\"> <A href=\"modules.php?name=Forums\">Forum</a>&nbsp;&nbsp \n"
        ."<img src=\"themes/ffx69_darkEQ/images/icon_mini_faq.gif\" border=0 align=\"center\"> <A href=\"modules.php?name=FAQ\">FAQ</a>&nbsp;&nbsp \n"
        ."</B></font>\n"
        ."</td>\n"
        ."<td align=\"right\" width=\"15%\"><font size=\"2\"><b>\n"
        ."<script type=\"text/javascript\">\n\n"
        ."<!--   // Array ofmonth Names\n"
        ."var monthNames = new Array( \"Januar\",\"Februar\",\"März\",\"April\",\"Mai\",\"Juni\",\"Juli\",\"August\",\"September\",\"Oktober\",\"November\",\"Dezember\");\n"
        ."var now = new Date();\n"
        ."thisYear = now.getYear();\n"
        ."if(thisYear < 1900) {thisYear += 1900}; // corrections if Y2K display problem\n"
        ."document.write(now.getDate() + \". \" + monthNames[now.getMonth()] + \" \" + thisYear);\n"
        ."// -->\n\n"
        ."</script></b></font></td>\n"
        ."<td>&nbsp;</td>\n"
        ."</tr>\n"
        ."<tr>\n"
        ."<td bgcolor=\"#000000\" colspan=\"4\"><IMG src=\"themes/ffx69_darkEQ/images/pixel.gif\" width=\"1\" height=\"1\" alt=\"\" border=\"0\" hspace=\"0\"></td>\n"
        ."</tr>\n"
        ."</table><br>\n"
	."<!-- FIN DEL TITULO -->\n"
	."<table width=\"99%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\"><tr valign=\"top\">\n"
	."<td><img src=\"themes/ffx69_darkEQ/images/pixel.gif\" width=\"5\" height=\"3\" border=\"0\" alt=\"\"></td></tr></table>\n"
	."<table width=\"99%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\"><tr valign=\"top\">\n"
	."<td><img src=\"themes/ffx69_darkEQ/images/pixel.gif\" width=\"10\" height=\"1\" border=\"0\" alt=\"\"></td>\n"
	."<td width=\"155\" valign=\"top\">\n";
    blocks(left);
    echo "</td><td><img src=\"themes/ffx69_darkEQ/images/pixel.gif\" width=\"15\" height=\"1\" border=\"0\" alt=\"\"></td><td width=\"100%\">\n";
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
	echo "</td><td><img src=\"themes/ffx69_darkEQ/images/pixel.gif\" width=\"15\" height=\"1\" border=\"0\" alt=\"\"></td><td valign=\"top\" width=\"155\">\n";
	blocks(right);
    }
    echo "</td><td><img src=\"themes/ffx69_darkEQ/images/pixel.gif\" width=10 height=1 border=0 alt=\"\">\n"
	."</td></tr></table>\n"
        ."<table width=\"99%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\"><tr valign=\"top\">\n"
        ."<td height=\"17\">&nbsp;</td>\n"
        ."</tr></table>\n"
        ."<br>"
        ."<table width=\"97%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" bgcolor=\"#222233\" align=\"center\"><tr valign=\"top\">\n"
        ."</tr><tr align=\"center\">\n"
        ."<td width=\"100%\" colspan=\"3\">\n";
    footmsg();
    echo "</td>\n"
        ."</tr>\n"
        ."</table>\n"
        ."</tr></table><center><br>Theme by <a href=\"http://www.ffx69.de/nuke/html/index.php\"><b>ffx69.de</a></b></center>\n";
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
    echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"#222233\" width=\"100%\"><tr><td>\n"
	."<table border=\"0\" cellpadding=\"0\" cellspacing=\"1\" bgcolor=\"#602C72\" width=\"100%\"><tr><td>\n"
	."<table background=\"themes/ffx69_darkEQ/images/cellpic2.jpg\" border=\"0\" cellpadding=\"3\" cellspacing=\"2\" width=\"100%\"><tr><td align=\"left\">\n"
	."<font class=\"option\" color=\"#363636\"><b><img src=\"themes/ffx69_darkEQ/images/icon_delete.gif\" align=\"center\">&nbsp;&nbsp;$title</b></font>\n"
	."</td></tr></table></td></tr></table>\n";
	
    FormatStory($thetext, $notes, $aid, $informant);
    echo "</td></tr></table>\n"
	."<table bgcolor=\"#111133\" border=\"0\" cellpadding=\"1\" cellspacing=\"0\" width=\"100%\"><tr><td>\n"
	."<table border=\"0\" cellpadding=\"3\" cellspacing=\"0\" width=\"100%\"><tr><td align=\"center\">\n"
	."<font color=\"#000000\" size=\"1\">"._POSTEDBY." ";
    formatAidHeader($aid);
    echo " "._ON." $time $timezone ($counter "._READS.")<br></font>\n"
	."<font class=\"content\">$morelink</font>\n"
	."</td></tr></table></td></tr></table>\n"
	."<br>\n\n\n";
}

/************************************************************/
/* Function themeartikel-gross()                            */
/*                                                          */
/* Control the header for your site. You need to define the */
/* BODY tag and in some part of the code call the blocks    */
/* function for left side with: blocks(left);               */
/************************************************************/

function themearticle ($aid, $informant, $datetime, $title, $thetext, $topic, $topicname, $topicimage, $topictext) {
    global $admin, $sid, $tipath;
    echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"1\" bgcolor=\"#222233\" width=\"100%\"><tr><td>\n"
        ."<table border=\"0\" cellpadding=\"1\" cellspacing=\"1\" bgcolor=\"#602C72\" width=\"100%\"><tr><td>\n"
        ."<table background=\"themes/ffx69_darkEQ/images/cellpic2.jpg\" border=\"0\" cellpadding=\"3\" cellspacing=\"2\" width=\"100%\"><tr><td align=\"left\">\n"
        ."<font class=\"option\" size=\"1\"><b><img src=\"themes/ffx69_darkEQ/images/icon_delete.gif\" align=\"center\">&nbsp;&nbsp;$title</b></font><br>\n"
        ."</td></tr></table>\n"   
        ."<font size=\"1\">"._POSTEDON." $datetime "._BY." ";
    $posted .= formatAidHeader($aid); echo "$posted"; 
    if (is_admin($admin)) {
	echo "<br>[ <a href=\"admin.php?op=EditStory&amp;sid=$sid\">"._EDIT."</a> | <a href=\"admin.php?op=RemoveStory&amp;sid=$sid\">"._DELETE."</a> ]\n";
    }
    echo "</td></tr></table></td></tr></table><br>";
    echo "<a href=\"modules.php?name=News&amp;new_topic=$topic\"><img src=\"$tipath$topicimage\" border=\"0\" Alt=\"$topictext\" align=\"right\" hspace=\"3\" vspace=\"0\" bgcolor=\"#EFEFEF\"></a>\n";
    FormatStory($thetext, $notes="", $aid, $informant);
    echo "</td></tr></table><br>\n\n\n";
}

/************************************************************/
/* Function themebox()                                   */
/*                                                          */
/* Control the header for your site. You need to define the */
/* BODY tag and in some part of the code call the blocks    */
/* function for left side with: blocks(left);               */
/************************************************************/

function themesidebox($title, $content) {
    echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"#602C72\" width=\"165\"><tr><td>\n"
        ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"165\">\n"
   	."</table>\n"
    	."<table border=\"0\" cellpadding=\"3\" cellspacing=\"1\" bgcolor=\"#602C72\" width=\"100%\">\n"
	."<tr><td background=\"themes/ffx69_darkEQ/images/cellpic3.jpg\" align=\"center\">\n"
	."<font class=\"titel\" size=\"1\"><b>$title</b></font>\n"
	."</td></tr>\n"
	."<tr>\n"
	."<td bgcolor=\"#222233\"><font size=\"1\">$content</td>\n"
	."</tr>\n"
	."</table></td></tr></table>\n"
	."<br>\n\n\n";
}

?>
