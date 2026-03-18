<?php

/************************************************************/
/* Theme Name: MT (v1.0)                                    */
/* Theme Developer: Somara Sem (http://www.somara.com)      */
/* Last Updated: 09/08/2001                                 */
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

$bgcolor1 = "#727272";
$bgcolor2 = "#939393";
$bgcolor3 = "#727272";
$bgcolor4 = "#939393";
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
    echo "<body topmargin=\"0\" leftmargin=\"0\" marginwidth=\"0\" marginheight=\"0\" background=\"themes/MT/images/main-background.gif\" bgcolor=\"#333333\" link=\"#FF6600\" vlink=\"#999999\" alink=\"#FFFFFF\">\n\n\n";
    if ($banners) {
	include("banners.php");
    }
    echo "<!----- This theme graphics was created by Somara Sem (http://www.somara.com) ----->\n\n\n\n"
    ."<!----- Logo, Search and Topic Selection Table ----->\n"
    ."<table cellpadding=\"0\" cellspacing=\"0\" width=\"762\" border=\"0\" bgcolor=\"#ffffff\">\n"
	."<tr>\n"
	."<td colspan=\"3\" background=\"themes/MT/images/metalbar.gif\" width=\"1\" height=\"10\"><img src=\"themes/MT/images/pixel.gif\" width=\"1\" height=\"10\"></td>\n"
	."</tr>\n"
	."<tr>\n"
	."<td bgcolor=\"#ffffff\" align=\"left\" width=\"33%\">\n"
	."<a href=\"index.php\"><img src=\"themes/MT/images/logo.gif\" align=\"left\" alt=\""._WELCOMETO." $sitename\" border=\"0\"></a>\n"
	."</td>\n\n\n"
	."<!----- Search Box ----->\n"
    ."<form action=\"modules.php?name=Search\" method=\"post\"><font class=\"content\" color=\"#000000\">\n"
    ."<td bgcolor=\"#ffffff\" align=\"right\" width=\"33%\">\n"
    ."<input type=\"text\" name=\"query\" size=\"14\">\n"
    ."<input type=\"submit\" value=\"search\"></font>\n"
    ."</td>\n"
    ."</form>\n\n\n"
    ."<!----- Topic Selection Box ----->\n"
    ."<form action=\"modules.php?name=Search\" method=\"get\">\n"
	."<td bgcolor=\"#ffffff\" align=\"right\" width=\"33%\">\n"
	."<font class=\"content\">\n";
    $toplist = mysql_query("select topicid, topictext from $prefix"._topics." order by topictext");
    echo "<select name=\"topic\"onChange='submit()'>\n"
	."<option value=\"\">".translate("All Topics")."</option>\n";
    while(list($topicid, $topics) = mysql_fetch_row($toplist)) {
    if ($topicid==$topic) { $sel = "selected "; }
	echo "<option $sel value=\"$topicid\">$topics</option>\n";
	$sel = "";
    }
    echo "</select></font>&nbsp;&nbsp;\n"
    ."</td>\n"
    ."</form>\n"
	."</tr>\n"
	."</table>\n\n\n"

	."<!----- Main Graphic Table ----->\n"
	."<table width=\"762\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\">\n"
	."<tr>\n"
	."<td background=\"themes/MT/images/metalbar.gif\" width=\"1\" height=\"10\"><img src=\"themes/MT/images/pixel.gif\" width=\"1\" height=\"10\"></td>\n"
	."</tr>\n"
	."<tr>\n"
	."<td><img src=\"themes/MT/images/main-graphic.gif\"></td>\n"
	."</tr>\n"
	."<tr>\n"
	."<td background=\"themes/MT/images/metalbar.gif\" width=\"1\" height=\"10\"><img src=\"themes/MT/images/pixel.gif\" width=\"1\" height=\"10\"></td>\n"
	."</tr>\n"
	."</table>\n\n\n"

    ."<!----- Welcome & Date Table ----->\n"
	."<table width=\"762\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"#333333\" border=\"0\">\n"
	."<tr>\n"
	."<td width=\"50%\" nowrap><font class=\"content\" color=\"#363636\">\n";
    if ($username == "Anonymous") {
	echo "&nbsp;&nbsp;<font color=\"#ffffff\"><a href=\"modules.php?name=Your_Account\">Create</a></font> an account\n";
    } else {
	echo "&nbsp;&nbsp;Welcome $username!";
    }
    echo "</font></td>\n"
    ."<td align=\"right\" width=\"50%\"><font class=\"content\">\n"
    ."<script type=\"text/javascript\">\n\n"
    ."<!--   // Array ofmonth Names\n"
    ."var monthNames = new Array( \"January\",\"February\",\"March\",\"April\",\"May\",\"June\",\"July\",\"August\",\"September\",\"October\",\"November\",\"December\");\n"
    ."var now = new Date();\n"
    ."thisYear = now.getYear();\n"
    ."if(thisYear < 1900) {thisYear += 1900}; // corrections if Y2K display problem\n"
    ."document.write(monthNames[now.getMonth()] + \" \" + now.getDate() + \", \" + thisYear);\n"
    ."// -->\n\n"
    ."</script></font>&nbsp;&nbsp;</td>\n"
	."</tr>\n"
	."</table>\n\n\n"

    ."<!----- capper.gif Graphic ----->\n"
	."<table width=\"762\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\">\n"
	."<tr>\n"
	."<td><img src=\"themes/MT/images/capper.gif\"></td>\n"
	."</tr>\n"
	."</table>\n\n\n"
	."<table width=\"762\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\">\n"
	."<tr valign=\"top\">\n"
	."<td width=\"150\" valign=\"top\">\n";
    blocks(left);
    echo "</td><td><img src=\"themes/MT/images/pixel.gif\" width=\"15\" height=\"1\" border=\"0\" alt=\"\"></td><td width=\"100%\">\n";
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
	echo "</td><td><img src=\"themes/MT/images/pixel.gif\" width=\"15\" height=\"1\" border=\"0\" alt=\"\"></td><td valign=\"top\" width=\"150\">\n";
	blocks(right);
    }
    echo "</td></tr></table>\n"
        ."<br><br><br><br>\n"
        ."<!----- First Footer Metal Bar ----->\n"
    	."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"762\">\n"
		."<tr>\n"
		."<td align=\"left\" background=\"themes/MT/images/metalbar.gif\"><img src=\"themes/MT/images/metalbar.gif\" width=\"2\" height=\"10\"></td>\n"
		."</tr>\n"
	    ."</table>\n"
        ."<table width=\"762\" bgcolor=\"#727272\" cellpadding=\"10\" cellspacing=\"0\" border=\"0\">\n"
        ."<tr align=\"center\">\n"
        ."<td width=\"100%\" colspan=\"3\">\n";
    footmsg();
    echo "</td>\n"
        ."</tr><tr>\n"
        ."</tr></table>\n\n\n"
        ."<!----- Last Footer Metal Bar ----->\n"
        ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"762\">\n"
		."<tr>\n"
		."<td align=\"left\" background=\"themes/MT/images/metalbar.gif\"><img src=\"themes/MT/images/metalbar.gif\" width=\"2\" height=\"10\"></td>\n"
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
    echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n"
	."<tr>\n"
	."<td align=\"left\" background=\"themes/MT/images/metalbar.gif\"><img src=\"themes/MT/images/metalbar.gif\" width=\"2\" height=\"10\"></td>\n"
	."</tr>\n"
	."</table>\n"
    ."<!----- StoryBox Title and Content ----->\n"
    ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\"><tr><td>\n"
	."<table border=\"0\" cellpadding=\"1\" cellspacing=\"0\" width=\"100%\"><tr><td>\n"
	."<table border=\"0\" cellpadding=\"3\" cellspacing=\"0\" width=\"100%\">\n"
	."<tr>\n"
	."<td align=\"left\"><font class=\"option\" color=\"#363636\"><b>:: $title</b></font>\n"
	."</td></tr></table></td></tr></table>\n";
    FormatStory($thetext, $notes, $aid, $informant);
    echo "</td></tr></table>\n"
	."<table border=\"0\" cellpadding=\"1\" cellspacing=\"0\" width=\"100%\"><tr><td>\n"
	."<table border=\"0\" cellpadding=\"3\" cellspacing=\"0\" width=\"100%\"><tr><td align=\"center\">\n"
	."<br>--------------------------------------------------------\n"
	."<br><font color=\"#999999\" size=\"1\">"._POSTEDBY." ";
    formatAidHeader($aid);
    echo " "._ON." $time $timezone ($counter "._READS.")<br></font>\n"
	."<font class=\"content\">$morelink</font>\n"
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
    echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"423\"><tr><td>\n"
        ."<table border=\"0\" cellpadding=\"1\" cellspacing=\"0\" width=\"100%\"><tr><td>\n"
        ."<table border=\"0\" cellpadding=\"3\" cellspacing=\"0\" width=\"100%\"><tr><td align=\"left\">\n"
        ."<font class=\"option\" color=\"#363636\"><b>$title</b></font><br>\n"
        ."<font class=\"content\">"._POSTEDON." $datetime "._BY." ";
    formatAidHeader($aid);
    if (is_admin($admin)) {
	echo "<br>[ <a href=\"admin.php?op=EditStory&amp;sid=$sid\">"._EDIT."</a> | <a href=\"admin.php?op=RemoveStory&amp;sid=$sid\">"._DELETE."</a> ]\n";
    }
    echo "</td></tr></table></td></tr></table><br>";
    echo "<a href=\"modules.php?name=Search&amp;new_topic=$topic\"><img src=\"$tipath$topicimage\" border=\"0\" Alt=\"$topictext\" align=\"right\" hspace=\"10\" vspace=\"10\"></a>\n";
    FormatStory($thetext, $notes="", $aid, $informant);
    echo "</td></tr></table><br>\n\n\n";
}

/************************************************************/
/* Function themesidebox()                                  */
/*                                                          */
/* Control look of your blocks. Just simple.                */
/************************************************************/

function themesidebox($title, $content) {
    echo "<table border=\"0\" cellpadding=\"1\" cellspacing=\"0\" width=\"155\">\n"
    ."<tr>\n"
    ."<td>\n"
    ."<!----- SideBox Metal Bar ----->\n"
	."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n"
	."<tr>\n"
	."<td align=\"left\" background=\"themes/MT/images/metalbar.gif\"><img src=\"themes/MT/images/metalbar.gif\" width=\"2\" height=\"10\"></td>\n"
	."</tr>\n"
	."</table>\n"
    ."<!----- SideBox Title ----->\n"
	."<table border=\"0\" cellpadding=\"3\" cellspacing=\"0\" width=\"100%\">\n"
	."<tr>\n"
	."<td align=\"left\"><font class=\"content\" color=\"#363636\"><b>:: $title</b></font></td>\n"
	."</tr>\n"
	."</table>\n"
	."</td>\n"
	."</tr>\n"
	."</table>\n"
    ."<!----- SideBox Content ----->\n"
	."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"155\">\n"
	."<tr valign=\"top\">\n"
	."<td>\n"
	."$content\n"
	."</td>\n"
	."</tr>\n"
	."</table>\n"
	."<br>\n\n\n";
}

?>