<?php

/************************************************************/
/* Theme Name: DJ-Professional v1.1                         */
/* Theme Developer: Somara Sem (http://www.pixelmayhem.com) */
/* Last Updated: 11/06/2001                                 */
/* 11/06/2001 - Fixed Logout link.                          */
/*              Stylesheet now compatible with PostNuke     */
/*              0.6.x and Netscape.                         */
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

$bgcolor1 = "#eeeeee";
$bgcolor2 = "#848284";
$bgcolor3 = "#999999";
$bgcolor4 = "#999999";
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
	$notes = "<br><br><b>"._NOTE."</b> <i>$notes</i>\n";
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
    }
    echo "<!----- Copyright (c) 2001 Somara Sem (http://www.pixelmayhem.com) ----->\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n"
    ."<body bgcolor=\"#ffffff\" background=\"themes/DJ-Professional/images/bg.gif\" bgproperties=\"fixed\" topmargin=\"0\"
leftmargin=\"0\" marginwidth=\"0\" marginheight=\"0\" text=\"#000000\" link=\"#000000\" alink=\"#000000\" vlink=\"#000000\">\n";
    if ($banners) {
	include("banners.php");
    }
    echo "<table bgcolor=\"#C6C3C6\" cellpadding=\"3\" cellspacing=\"0\" width=\"750\" border=\"0\">\n"
	."<tr>\n"
	."<td width=\"540\">\n"
	."<a href=\"index.php\"><img src=\"themes/DJ-Professional/images/logo.gif\" align=\"left\" alt=\""._WELCOMETO."
$sitename\" border=\"0\"></a></td>\n"
	."<!----- Topics Selection Box ----->\n"
	."<form action=\"modules.php?name=Search\" method=\"get\" style=\"margin:0\">\n"
	."<td align=\"right\">\n"
	."<font class=\"formtexts\">Topics: \n";
    $toplist = mysql_query("select topicid, topictext from $prefix"._topics." order by topictext");
    echo "<select class=\"selectbox\" name=\"topic\"onChange='submit()'>\n"
	."<option value=\"\">".translate("All Topics")."</option>\n";
    while(list($topicid, $topics) = mysql_fetch_row($toplist)) {
    if ($topicid==$topic) { $sel = "selected "; }
	echo "<option $sel value=\"$topicid\">$topics</option>\n";
	$sel = "";
    }
    echo "</select></font></td></form>\n"
	."<td align=\"right\">\n";

    echo "</tr></table>\n"
	."<table cellpadding=\"0\" cellspacing=\"0\" width=\"750\" border=\"0\" bgcolor=\"#eeeeee\">\n"
	."<tr>\n"
	."<td bgcolor=\"#666666\" colspan=\"4\"><IMG src=\"themes/DJ-Professional/images/pixel.gif\" width=\"1\" height=1 alt=\"\" border=\"0\" hspace=\"0\"></td>\n"
	."</tr>\n"
	."<tr>\n"
	."<td width=\"50%\" nowrap>\n";
    if ($username == "Anonymous") {
	echo "&nbsp;&nbsp;<b><font color=\"#363636\"><a href=\"user.php\">Create</a></font></b> an account\n";
    } else {
	echo "&nbsp;&nbsp;Welcome $username! &nbsp;&nbsp;<a href=\"modules.php?name=Your_Account&op=logout\">logout</a>";
    }

    echo "</td>\n"
        ."<td align=\"right\" width=\"50%\"><font class=\"content\">\n"
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
	    ."<td bgcolor=\"#666666\" colspan=\"4\"><IMG src=\"themes/DJ-Professional/images/pixel.gif\" width=\"1\" height=1 alt=\"\" border=\"0\" hspace=\"0\"></td>\n"
	    ."</tr>\n"
		."<tr>\n"
		."<td bgcolor=\"#C6C3C6\" colspan=\"4\"><IMG src=\"themes/DJ-Professional/images/pixel.gif\" width=\"1\" height=4 alt=\"\" border=\"0\" hspace=\"0\"></td>\n"
	    ."</tr>\n"
        ."</table>\n"
	."<table cellpadding=\"0\" cellspacing=\"0\" width=\"600\" height=\"46\" border=\"0\" background=\"themes/DJ-Professional/images/navbg.gif\">\n"
	."<tr>\n"
	."<td bgcolor=\"#eeeeee\" colspan=\"4\"><IMG src=\"themes/DJ-Professional/images/pixel.gif\" width=\"1\" height=1 alt=\"\" border=\"0\" hspace=\"0\"></td>\n"
	."</tr>\n"
	."<tr>\n"
	."<td bgcolor=\"#cccccc\" colspan=\"4\"><IMG src=\"themes/DJ-Professional/images/pixel.gif\" width=\"1\" height=2 alt=\"\" border=\"0\" hspace=\"0\"></td>\n"
	."</tr>\n"
	."<tr>\n"
	."<td bgcolor=\"#000000\" colspan=\"4\"><IMG src=\"themes/DJ-Professional/images/pixel.gif\" width=\"1\" height=2 alt=\"\" border=\"0\" hspace=\"0\"></td>\n"
	."</tr>\n"
	."<tr valign=\"middle\">\n";

/******** Top Navigation Bar ****/

    echo "<td width=\"100%\" align=\"left\" valign=\"top\">\n"
    ."<table cellpadding=\"0\" cellspacing=\"0\"border=\"0\">\n"
    ."<tr>\n"
	."<td align=\"left\" valign=\"top\" height=\"15\" width=\"6\"><img src=\"themes/DJ-Professional/images/leftnav.gif\" border=\"0\"></td>\n"
	."<td align=\"left\" valign=\"top\" height=\"15\" width=\"90\"><a href=\"/\"><img src=\"themes/DJ-Professional/images/home.gif\" border=\"0\"></a></td>\n"
	."<td align=\"left\" valign=\"top\" height=\"15\" width=\"90\"><a href=\"modules?name=Topics\"><img src=\"themes/DJ-Professional/images/topics.gif\" border=\"0\"></a></td>\n"
	."<td align=\"left\" valign=\"top\" height=\"15\" width=\"90\"><a href=\"modules?name=Downloads\"><img src=\"themes/DJ-Professional/images/downloads.gif\" border=\"0\"></a></td>\n"
	."<td align=\"left\" valign=\"top\" height=\"15\" width=\"90\"><a href=\"modules?name=Your_Account\"><img src=\"themes/DJ-Professional/images/myaccount.gif\" border=\"0\"></a></td>\n"
	."<td align=\"left\" valign=\"top\" height=\"15\" width=\"6\"><img src=\"themes/DJ-Professional/images/leftnav.gif\" border=\"0\"></td>\n"
    ."</tr>\n"
    ."<tr>\n"
	."<td align=\"left\" valign=\"top\" height=\"15\" width=\"6\"><img src=\"themes/DJ-Professional/images/leftnav.gif\" border=\"0\"></td>\n"
	."<td align=\"left\" valign=\"top\" height=\"15\" width=\"90\"><a href=\"modules?name=Submit_News\"><img src=\"themes/DJ-Professional/images/submitnews.gif\" border=\"0\"></a></td>\n"
	."<td align=\"left\" valign=\"top\" height=\"15\" width=\"90\"><a href=\"modules?name=Top\"><img src=\"themes/DJ-Professional/images/topten.gif\" border=\"0\"></a></td>\n"
	."<td align=\"left\" valign=\"top\" height=\"15\" width=\"90\"><a href=\"modules?name=Web_Links\"><img src=\"themes/DJ-Professional/images/weblinks.gif\" border=\"0\"></a></td>\n"
	."<td align=\"left\" valign=\"top\" height=\"15\" width=\"90\"><a href=\"modules?name=Recommend_Us\"><img src=\"themes/DJ-Professional/images/recommendus.gif\" border=\"0\"></a></td>\n"
	."<td align=\"left\" valign=\"top\" height=\"15\" width=\"6\"><img src=\"themes/DJ-Professional/images/leftnav.gif\" border=\"0\"></td>\n"
    ."</tr>\n"
    ."</table>\n"
    ."</td>\n"

/******* Begin Search Box *******/

        ."<td width=\100%\" align=\"right\" valign=\"top\">\n"
	."<form action=\"modules.php?name=Search\" method=\"post\" style=\"margin:0\"><font class=\"content\" color=\"#000000\">\n"
	."<input type=\"text\" name=\"query\" size=\"12\"></font></td>\n"
        ."<td width=\"100\" align=\"left\" valign=\"top\">\n"
        ."<input type=\"submit\" value=\"search\"></form></td>\n"

/******* End Search Box ********/

        ."</tr>\n"
        ."</table>\n"

	."<!-- Begin Main Content Table -->\n"
	."<table width=\"750\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr valign=\"top\">\n"
	."<td><img src=\"themes/DJ-Professional/images/pixel.gif\" width=\"1\" height=\"20\" border=\"0\" alt=\"\"></td></tr></table>\n"
	."<table width=\"750\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr valign=\"top\">\n"
	."<td><img src=\"themes/DJ-Professional/images/pixel.gif\" width=\"10\" height=\"1\" border=\"0\" alt=\"\"></td>\n"
	."<td width=\"150\" valign=\"top\">\n";
    blocks(left);
    echo "</td><td><img src=\"themes/DJ-Professional/images/pixel.gif\" width=\"15\" height=\"1\" border=\"0\" alt=\"\"></td><td width=\"100%\">\n";
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
	echo "</td><td><img src=\"themes/DJ-Professional/images/pixel.gif\" width=\"15\" height=\"1\" border=\"0\" alt=\"\"></td><td valign=\"top\" width=\"150\">\n";
	blocks(right);
    }
    echo "</td>\n"
	."</tr></table>\n"
        ."<br>"
        ."<table width=\"600\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\">\n"
        ."<tr align=\"center\">\n"
        ."<td width=\"100%\" colspan=\"3\">\n";
    footmsg();
    echo "</td>\n"
        ."</tr>\n"
        ."</table>\n";
}

/************************************************************/
/* Function themeindex()                                    */
/*                                                          */
/* This function format the stories on the Homepage         */
/************************************************************/

function themeindex ($aid, $informant, $time, $title, $counter, $topic, $thetext, $notes, $morelink, $topicname, $topicimage, $topictext) {
    global $anonymous, $tipath;
    echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\"><tr><td>\n"
	."<table border=\"0\" cellpadding=\"1\" cellspacing=\"0\" width=\"100%\"><tr><td>\n"
	."<table border=\"0\" cellpadding=\"3\" cellspacing=\"0\" width=\"100%\"><tr><td align=\"left\">\n"
	."<font class=\"option\" color=\"#363636\"><b>$title</b></font>\n"
    ."<br><img src=\"themes/DJ-Professional/images/details_line.gif\">\n"
	."</td></tr></table></td></tr>\n"

        ."</table>\n"
        ."<table border=\"0\" cellpadding=\"3\" cellspacing=\"0\" width=\"100%\">\n"
        ."<tr>\n"
        ."<td>\n"
	."<font color=\"#999999\"><b><a href=\"modules.php?name=News&amp;new_topic=$topic\"><img src=\"$tipath$topicimage\" border=\"0\" Alt=\"$topictext\" align=\"right\" hspace=\"10\" vspace=\"10\"></a></B></font>\n";
    FormatStory($thetext, $notes, $aid, $informant);
    echo "</td></tr></table>\n"
        ."</td></tr></table>\n"
	."<table border=\"0\" cellpadding=\"1\" cellspacing=\"0\" width=\"100%\"><tr><td>\n"
	."<table border=\"0\" cellpadding=\"1\" cellspacing=\"0\" width=\"100%\">\n"
        ."<tr>\n"
        ."<td align=\"center\">\n"
        ."---------------------------------------------<br>\n"
	.""._POSTEDBY." ";
    formatAidHeader($aid);
    echo " "._ON." $time $timezone ($counter "._READS.")<br>\n"
        ."<font class=\"content\">$morelink</font>\n"
        ."<br>\n"
        ."<img src=\"themes/DJ-Professional/images/details_line_top.gif\">\n"
	    ."</td></tr></table></td></tr></table>\n"
        ."<br>\n\n\n";
}

/************************************************************/
/* Function themeindex()                                    */
/*                                                          */
/* This function format the stories on the story page, when */
/* you click on that "Read More..." link in the home        */
/************************************************************/

function themearticle ($aid, $informant, $datetime, $title, $thetext, $topic, $topicname, $topicimage, $topictext) {
    global $admin, $sid, $tipath;
    echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"415\"><tr><td width=\"100%\">\n"
        ."<table border=\"0\" cellpadding=\"1\" cellspacing=\"0\" width=\"100%\"><tr><td width=\"100%\">\n"
        ."<table border=\"0\" cellpadding=\"3\" cellspacing=\"0\" width=\"100%\"><tr><td width=\"100%\" align=\"left\">\n"
        ."<font class=\"option\" color=\"#363636\"><b>$title</b></font><br>\n"
        .""._POSTEDON." $datetime "._BY." ";
    formatAidHeader($aid);
    if (is_admin($admin)) {
	echo "<br>[ <a href=\"admin.php?op=EditStory&amp;sid=$sid\">"._EDIT."</a> | <a href=\"admin.php?op=RemoveStory&amp;sid=$sid\">"._DELETE."</a> ]\n";
    }
    echo "</td></tr></table></td></tr></table><br>";
    echo "<a href=\"modules.php?name=News&amp;new_topic=$topic\"><img src=\"$tipath$topicimage\" border=\"0\" Alt=\"$topictext\" align=\"right\" hspace=\"10\" vspace=\"10\"></a>\n";
    FormatStory($thetext, $notes="", $aid, $informant);
    echo "</td></tr></table><br>\n\n\n";
}

/************************************************************/
/* Function themesidebox()                                  */
/*                                                          */
/* Control look of your blocks. Just simple.                */
/************************************************************/

function themesidebox($title, $content) {
    echo "<table border=\"0\" cellpadding=\"1\" cellspacing=\"0\" bgcolor=\"#848284\" width=\"148\"><tr><td>\n"
	."<table border=\"0\" cellpadding=\"3\" cellspacing=\"0\" bgcolor=\"#cccccc\" width=\"100%\"><tr><td align=left>\n"
	."<font class=\"content\" color=\"#848284\"><b>$title</b></font>\n"
	."</td></tr></table></td></tr></table>\n"
	."<table border=\"0\" cellpadding=\"3\" cellspacing=\"0\" bgcolor=\"#C6C3C6\" width=\"148\">\n"
	."<tr valign=\"top\"><td bgcolor=\"#eeeeee\">\n"
	."$content\n"
	."</td></tr></table>\n"
	."<br>\n\n\n";
}

?>
