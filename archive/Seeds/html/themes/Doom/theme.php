
<?php

/************************************************************/
/*THEME NAME: Doom                                           */
/*Theme by:dezina.com                                        */
/*PHPNuke 5.4: 28th March 2002 - dezina.com                  */
/*Updated to PHPNuke 5.5: 29th March 2002 - dezina.com       */
/************************************************************/

/************************************************************/
/* Theme Colors Definition                                  */
/*                                                          */
/* Define colors for your web site. $bgcolor2 is generaly   */
/* used for the tables border as you can see on OpenTable() */
/* function, $bgcolor1 is for the table background and the  */
/* other two bgcolor variables follows the same criteria.   */
/* $texcolor1 and 2 are for tables internal texts           */
/************************************************************/

$bgcolor1 = "#C0C0C0";
$bgcolor2 = "#B6B6B6";
$bgcolor3 = "#ADADAD";
$bgcolor4 = "#B6B6B6";
$textcolor1 = "#000000";
$textcolor2 = "#000000";

/************************************************************/
/* OpenTable Functions                                      */
/*                                                          */
/* Define the tables look&feel for you whole site. For this */
/* we have two options: OpenTable and OpenTable2 functions. */
/* Then we have CloseTable and CloseTable2 function to      */
/* properly close our tables. The difference is that        */
/* OpenTable has a 100% width and OpenTable2 has a width    */
/* according with the table content                         */
/************************************************************/

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
	$notes = "<br><br><b>"._NOTE."</b>$notes\n";
    } else {
	$notes = "";
    }
    if ("$aid" == "$informant") {
	echo "<font class=\"content\" color=\"#505050\">$thetext$notes</font>\n";
    } else {
	if($informant != "") {
	    $boxstuff = "<a href=\"modules.php?name=Your_Account&amp;op=userinfo&amp;uname=$informant\">$informant</a> ";
	} else {
	    $boxstuff = "$anonymous ";
	}
	$boxstuff .= "".translate("writes")." \"$thetext\"$notes\n";
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
// COPYRIGHTS
    echo "<!----- PLEASE DO NOT REMOVE COPYRIGHT NOTICE ----->\n";
    echo "<!----- NEED CUSTOM DESIGNS? VISIT WWW.DEZINA.COM ----->\n";
    echo "<!----- Copyright (c) 2002 Dezina.com ----->\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n";

    }
    echo "<body bgcolor=\"#545454\" text=\"#000000\" link=\"#363636\" vlink=\"#363636\" alink=\"#d5ae83\">\n"
	."<br>\n";
    if ($banners) {
	include("banners.php");
    }
    echo "<br>\n"
	
	."<table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\" align=\"center\" bgcolor=\"#ffffff\">\n"
	."<tr>\n"
	."<td bgcolor=\"#545454\">\n"
	
	."</tr>\n"
	."</table>\n"
	."<table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\" align=\"center\" bgcolor=\"#ffffff\">\n"
	."<tr valign=\"middle\">\n"
	."<td width=\"100%\" bgcolor=\"#545454\" align=\"left\">\n"
."<a href=\"index.php\"><img src=\"themes/Doom/images/logo.gif\" align=\"left\" alt=\""._WELCOMETO." $sitename\" border=\"0\"></a></td>\n"
."<td bgcolor=\"#545454\" align=\"center\">\n"
	."<form action=\"modules.php?name=Search\" method=\"post\"><font class=\"content\" color=\"#000000\"><b>".translate("Search")." </b>\n"
	."<input type=\"text\" name=\"query\" size=\"14\"></font></form></td>\n"
	."<td bgcolor=\"#545454\" align=\"center\">\n"
	."<form action=\"modules.php?name=Search\" method=\"post\"><font class=\"content\"><b>".translate("Topics")." </b>\n";
    $toplist = mysql_query("select topicid, topictext from $prefix"._topics." order by topictext");
    echo "<select name=\"topic\"onChange='submit()'>\n"
	."<option value=\"\">".translate("All Topics")."</option>\n";
    while(list($topicid, $topics) = mysql_fetch_row($toplist)) {
    if ($topicid==$topic) { $sel = "selected "; }
	echo "<option $sel value=\"$topicid\">$topics</option>\n";
	$sel = "";
    }
    echo "</select></font></form></td>\n"
	."</tr></table>\n"
	."<table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\" align=\"center\" bgcolor=\"#fefefe\">\n"
	."<tr>\n"
	."<td bgcolor=\"#000000\" colspan=\"4\"><IMG src=\"themes/Doom/images/pixel.gif\" width=\"1\" height=1 alt=\"\" border=\"0\" hspace=\"0\"></td>\n"
	."</tr>\n"
	."<tr valign=\"middle\" bgcolor=\"#COCOCO\">\n"
	."<td width=\"15%\" nowrap><font class=\"content\" color=\"#363636\">\n";
    if ($username == "Anonymous") {
	echo "&nbsp;&nbsp;<font color=\"#363636\"><a href=\"modules.php?name=Your_Account\">Create</a></font> an account\n";
    } else {
	echo "&nbsp;&nbsp;Welcome $username! &nbsp;&nbsp;<a href=\"modules.php?name=Your_Account&op=logout\">logout</a>&nbsp;&nbsp;<a href=\"user.php?op=chgtheme\">change theme</a>";
    }
    echo "</font></td>\n"
	."<td align=\"center\" height=\"20\" width=\"60%\"><font class=\"content\">\n"
        ."&nbsp;\n"
        ."</td>\n"
        ."<td align=\"right\" width=\"25%\"><font class=\"content\">\n"
        ."<script type=\"text/javascript\">\n\n"
        ."<!--   // Array ofmonth Names\n"
        ."var monthNames = new Array( \"January\",\"February\",\"March\",\"April\",\"May\",\"June\",\"July\",\"August\",\"September\",\"October\",\"November\",\"December\");\n"
        ."var now = new Date();\n"
        ."thisYear = now.getYear();\n"
        ."if(thisYear < 1900) {thisYear += 1900}; // corrections if Y2K display problem\n"
        ."document.write(monthNames[now.getMonth()] + \" \" + now.getDate() + \", \" + thisYear);\n"
        ."// -->\n\n"
        ."</script></font></td>\n"
        ."<td>&nbsp;</td>\n"
        ."</tr>\n"
        ."<tr>\n"
        ."<td bgcolor=\"#000000\" colspan=\"4\"><IMG src=\"themes/Doom/images/pixel.gif\" width=\"1\" height=\"1\" alt=\"\" border=\"0\" hspace=\"0\"></td>\n"
        ."</tr>\n"
        ."</table>\n"
	."<!-- FIN DEL TITULO -->\n"
	."<table width=\"99%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\"><tr valign=\"top\">\n"
	."<td><img src=\"themes/Doom/images/pixel.gif\" width=\"1\" height=\"20\" border=\"0\" alt=\"\"></td></tr></table>\n"
	."<table width=\"99%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\"><tr valign=\"top\">\n"
	."<td><img src=\"themes/Doom/images/pixel.gif\" width=\"10\" height=\"1\" border=\"0\" alt=\"\"></td>\n"
	."<td width=\"150\" valign=\"top\">\n";
    blocks(left);
    echo "</td><td><img src=\"themes/Doom/images/pixel.gif\" width=\"15\" height=\"1\" border=\"0\" alt=\"\"></td><td width=\"100%\">\n";
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
	echo "</td><td><img src=\"themes/Doom/images/pixel.gif\" width=\"15\" height=\"1\" border=\"0\" alt=\"\"></td><td valign=\"top\" width=\"150\">\n";
	blocks(right);
    }
    echo "</td><td><img src=\"themes/Doom/images/pixel.gif\" width=10 height=1 border=0 alt=\"\">\n"
	."</td></tr></table>\n"
        ."<table width=\"99%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\"><tr valign=\"top\">\n"
        ."<td height=\"17\">&nbsp;</td>\n"
        ."</tr></table>\n"
        ."<br>"
        ."<table width=\"97%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" bgcolor=\"#545454\" align=\"center\"><tr valign=\"top\">\n"
        ."</tr><tr align=\"center\">\n"
        ."<td width=\"100%\" colspan=\"3\">\n";
    footmsg();
    echo "</td>\n"
        ."</tr>\n"
        ."</table>\n";
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
    echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\"><tr><td>\n"
	."<table border=\"0\" cellpadding=\"3\" cellspacing=\"1\" bgcolor=\"#000000\" width=\"100%\"><tr>\n"
	."<td bgcolor=\"#B6B6B6\" align=\"left\">\n"
	."<font size=\"3\" color=\"#363636\"><b>$title</b></font>\n"
	."<br><font color=\"#FFFFFF\" size=\"1\">"._POSTEDBY." ";
    formatAidHeader($aid);
    echo " "._ON." $time $timezone ($counter "._READS.")</font>\n"
    ."<br><b>"._TOPIC."</b> <a href=\"modules.php?name=News&amp;new_topic=$topic;author=\">$topictext</a>\n"
	."</td></tr>\n"
	."<tr><td bgcolor=\"#949494\">\n"
	."<font color=\"#FFFFFF\"><b><a href=\"modules.php?name=News&amp;new_topic=$topic\"><img src=\"$tipath$topicimage\" border=\"0\" Alt=\"$topictext\" align=\"right\" hspace=\"10\" vspace=\"10\"></a></B></font>\n";
    FormatStory($thetext, $notes, $aid, $informant);
    echo "</td></tr>\n"
    ."<tr><td bgcolor=\"#B6B6B6\" align=\"right\">\n"
	."<font size=\"2\">$morelink</font>\n"
	."</td></tr></table></td></tr></table>\n"
	."<br>\n\n\n";
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
    echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"5\" bgcolor=\"#ffffff\" width=\"100%\"><tr><td>\n"
        ."<table border=\"0\" cellpadding=\"1\" cellspacing=\"0\" bgcolor=\"#000000\" width=\"100%\"><tr><td>\n"
        ."<table border=\"0\" cellpadding=\"3\" cellspacing=\"0\" bgcolor=\"#B6B6B6\" width=\"100%\"><tr><td align=\"left\">\n"
        ."<font size=\"3\" color=\"#363636\"><b>$title</b></font><br>\n"
        .""._POSTEDON." $datetime "._BY." ";
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


echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"150\">\n"
."<tr>\n"
."<td width=\"15\" height=\"20\" align=\"right\" valign=\"top\"><img src=\"themes/Doom/images/sidebox-title-left.gif\" width=\"15\" height=\"20\" alt=\"\"></td>\n"
."<td width=\"120\" align=\"left\" valign=\"middle\" background=\"themes/Doom/images/sidebox-title-bg.gif\"><p align=\"left\"><font class=\"boxtitle\" color=\"#363636\">$title</font></td>\n"
."<td width=\"15\" height=\"20\" align=\"left\" valign=\"top\"><img src=\"themes/Doom/images/sidebox-title-right.gif\" width=\"15\" height=\"20\" alt=\"\"></td>\n"
."</tr>\n"
."</table>\n"
."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"150\">\n"
."<tr>\n"
."<td colspan=\"3\" width=\"150\" height=\"1\" align=\"right\" valign=\"top\" bgcolor=\"#000000\"><img src=\"themes/Cobalt/images/pixel.gif\" width=\"150\" height=\"1\" alt=\"\"></td>\n"
."</tr>\n"
."</table>\n"
."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"150\">\n"
."<tr>\n"
."<td width=\"1\" align=\"right\" valign=\"top\" bgcolor=\"#000000\"><img src=\"themes/Doom/images/pixel.gif\" width=\"1\" height=\"1\" alt=\"\"></td>\n"
."<td width=\"148\" align=\"left\" valign=\"top\" >\n"
."<table border=\"0\" cellpadding=\"3\" cellspacing=\"0\" width=\"148\">\n"
."<tr bgcolor=\"#808080\">\n"
."<td align=\"left\">\n"
."$content\n"
." <br>\n"
." </td>\n"
."</tr>\n"
." </table>\n"
." </td>\n"
." <td width=\"1\" align=\"left\" valign=\"top\" bgcolor=\"#000000\"><img src=\"themes/Doom/images/pixel.gif\" width=\"1\" height=\"1\" alt=\"\"></td>\n"
."</tr>\n"
."<tr>\n"
."<td colspan=\"3\" width=\"150\" height=\"1\" align=\"right\" valign=\"top\" bgcolor=\"#000000\"><img src=\"themes/Doom/images/pixel.gif\" width=\"150\" height=\"1\" alt=\"\"></td>\n"
."</tr>\n"
."</table><br>\n";
}

?>
