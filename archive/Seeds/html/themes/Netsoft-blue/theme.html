<?php

/************************************************************/
/* Theme Name: NetSoft-Blue (v1.0)                          */
/* Theme Developer: K-See      (http://www.netsoft.sk)      */
/*	                             						    */
/* Last Updated: 28/01/2002                                 */
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

$bgcolor1_ = "#efefff";
$bgcolor2_ = "#cfcfff";

$bgcolor1= "#efefff";
$bgcolor2 = "#cfcfff";

$bgcolor3_ = "#aaaaff";
$bgcolor4_ = "#cfcfff";

$bgcolor3 = "#efefff";
$bgcolor4 = "#cfcffb";

$textcolor1 = "#000000";
$textcolor2 = "#000000";
$id1 = $id;
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
    global $user, $banners, $sitename, $slogan, $cookie, $prefix, $dbi,$ThemeSel;
    cookiedecode($user);
    $username = $cookie[1];
    if ($username == "") {
        $username = "Anonymous";
    }
    echo "<body text=\"#000000\" link=\"#363636\" vlink=\"#363636\" alink=\"#d5ae83\">\n";
    if ($banners) {
	include("banners.php");
    }
    echo "\n"
	."<!----- Logo Area ----->\n"
	."<table cellpadding=\"0\" cellspacing=\"0\" width=\"760\" border=\"0\" bgcolor=\"#aaaaFF\">\n"
	."<tr>\n"
	."<td valign=bottom>\n"
	."<img src=\"themes/NetSoft-Blue/images/logo.jpg\">\n"
	."</td>\n"
	."</tr>\n"
	."</table>\n\n"
    ."<!----- Top Navigation Buttons ----->\n"
    ."<table width=760 cellpadding=0 cellspacing=0 border=0><tr><td>"
    ."<table align=right border=0 cellpadding=0 cellspacing=0 background=\"themes/NetSoft-Blue/images/bg_blue.gif\" id=menu>"
    ."<tbody>"
    ."<tr background=\"themes/NetSoft-Blue/images/bg_blue.gif\">"
    ."<td><a href=\"index.php\"><img src=\"themes/NetSoft-Blue/images/home.gif\" wiidth=20 border=0></a></td>"
    ."<td><img src=\"themes/NetSoft-Blue/images/div.gif\"></td>"
    ."<td><img src=\"themes/NetSoft-Blue/images/pixel.gif\" width=\"5\" border=0><a href=\"topics.php\" class=a_top_menu>Home</a><img src=\"themes/NetSoft-Blue/images/pixel.gif\" width=\"5\" border=0></td>"
    ."<td><img src=\"themes/NetSoft-Blue/images/div.gif\"></td>"
    ."<td><img src=\"themes/NetSoft-Blue/images/pixel.gif\" width=\"5\" border=0><a href=\"modules.php?name=Downloads\" class=a_top_menu>Downloads</a><img src=\"themes/NetSoft-Blue/images/pixel.gif\" width=\"5\" border=0></td>"
    ."<td><img src=\"themes/NetSoft-Blue/images/div.gif\"></td>"
    ."<td><img src=\"themes/NetSoft-Blue/images/pixel.gif\" width=\"5\" border=0><a href=\"user.php\" class=a_top_menu>Your Account</a><img src=\"themes/NetSoft-Blue/images/pixel.gif\" width=\"5\" border=0></td>"
    ."<td><img src=\"themes/NetSoft-Blue/images/div.gif\"></td>"
    ."<TD><img src=\"themes/NetSoft-Blue/images/pixel.gif\" width=\"5\" border=0><a href=\"submit.php\" class=a_top_menu>Submit News</a><img src=\"themes/NetSoft-Blue/images/pixel.gif\" width=\"5\" border=0></TD>"
    ."<td><img src=\"themes/NetSoft-Blue/images/div.gif\"></td>"
    ."<td><img src=\"themes/NetSoft-Blue/images/pixel.gif\" width=\"5\" border=0><a href=\"top.php\" class=a_top_menu>Top 10</a><img src=\"themes/NetSoft-Blue/images/pixel.gif\" width=\"5\" border=0></td>"
    ."</tr>"
    ."</tbody>"
    ."</table>"
    ."</td></tr></table>"
	."<table cellpadding=\"0\" cellspacing=\"1\" width=\"758\" border=\"0\" align=\"\" bgcolor=\"#374646\">\n"
	."<tr>\n"
	."<td>\n"
	."<table cellpadding=\"0\" cellspacing=\"0\" width=\"758\" border=\"0\" align=\"center\" bgcolor=\"#FFFFFF\">\n"
	."<tr>\n"
	."<td>\n\n"
	."<!----- Login Box ----->\n"
	."<table cellpadding=\"3\" cellspacing=\"0\" width=\"758\" border=\"0\" align=\"center\">\n"
	."<tr bgcolor=\"#AAAAFF\">\n"
	."<form action=\"user.php\" method=\"post\">\n"
	."<td width=\"320\">\n"
	."<font class=\"formtexts\">Nick:</font> \n"
	."<input type=\"text\" name=\"uname\" size=\"7\" maxlength=\"25\" class=\"formtexts\">\n"
	."<font class=\"formtexts\">Pass:</font> \n"
	."<input type=\"password\" name=\"pass\" size=\"7\" maxlength=\"20\" class=\"formtexts\">\n"
	."<input type=\"hidden\" name=\"op\" value=\"login\">\n"
	."<input type=\"submit\" value=\"login\" class=\"formtexts\">\n"
	."&nbsp;<a href=\"user.php\"><font class=\"formtexts\">Join</font></a>\n"
    ."</td>\n"
	."</form>\n\n"
	."<!----- Search Box ----->\n"
	."<form action=\"search.php\" method=\"post\"><font class=\"formtexts\" color=\"#000000\">\n"
	."<td bgcolor=\"#AAAAFF\" align=\"right\">\n"
	."<font class=\"formtexts\">Search:</font> \n"
	."<input type=\"text\" name=\"query\" size=\"7\"class=\"formtexts\"></font>\n"
  	."<input type=\"submit\" value=\"search\" class=\"formtexts\">\n"
    ."</td>\n"
	."</form>\n\n"
    ."</tr>\n"
	."</table>\n"
    ."</td>\n"
    ."</tr>\n"
    ."<tr>\n"
    ."<td>\n\n"
	."</td>\n"
	."</tr>\n"
    ."</table>\n"
    ."</td>\n"
    ."</tr>\n"
    ."</table>\n\n\n"

	."<!----- Begin of Main Content Table ----->\n"
	."<table width=\"758\" cellpadding=\"0\" cellspacing=\"1\" border=\"0\" bgcolor=\"#000000\" align=\"\">\n"
	."<tr valign=\"top\">\n"
	."<td valign=\"top\">\n"
    ."<table width=\"758\" cellpadding=\"5\" cellspacing=\"0\" border=\"0\" bgcolor=\"#AAAAFF\" align=\"center\">\n"
	."<tr valign=\"top\">\n"
	."<td width=\"150\" valign=\"top\">\n";
    blocks(left);
    echo "</td><td width=\"100%\" align=\"center\" valign=\"top\">\n";
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
	echo "</td><td valign=\"top\" width=\"150\">\n";
	blocks(right);
    }
    echo "</td>\n"
	    ."</tr>\n"
	    ."</table>\n"
	    ."</td>\n"
	    ."</tr>\n"
	    ."</table>\n"
        ."<table width=\"758\" cellpadding=\"1\" cellspacing=\"0\" border=\"0\" bgcolor=\"#AAAAFF\" align=\"\">\n"
        ."<tr>\n"
        ."<td>\n"
        ."<table width=\"758\" cellpadding=\"3\" cellspacing=\"0\" border=\"0\" bgcolor=\"#AAAAFF\" align=\"center\">\n"
        ."<tr align=\"left\">\n"
        ."<td width=\"100%\" colspan=\"0\" align=\"center\">\n";
    footmsg();
    echo "</td>\n"
        ."</tr>\n"
        ."</table>\n"
        ."</td>\n"
        ."</tr>\n"
        ."</table>\n";
}

/************************************************************/
/* Function themeindex()                                    */
/*                                                          */
/* This function format the stories on the Homepage         */
/************************************************************/

function themeindex ($aid, $informant, $time, $title, $counter, $topic, $thetext, $notes, $morelink, $topicname, $topicimage, $topictext) {
    global $anonymous;
    echo "<table bgcolor=\"#374646\" border=\"0\" cellpadding=\"1\" cellspacing=\"0\" width=\"420\">\n"
    ."<tr>\n"
    ."<td>\n"
    ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"#96A096\" width=\"100%\">\n"
	."<tr>\n"
    ."<td>\n"
	."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"#374646\" width=\"100%\">\n"
	."<tr>\n"
	."<td>\n\n"
	."<!----- Story Box Title ----->\n"
	."<table border=\"0\" cellpadding=\"3\" cellspacing=\"0\" background=\"themes/NetSoft-Blue/images/bg_blue.gif\" width=\"100%\">\n"
	."<tr>\n"
	."<td align=\"center\">\n"
	."<font class=\"option1\"><b>$title</b></font>\n"
	."</td>\n"
	."</tr>\n"
	."</table>\n"
	."</td>\n"
	."</tr>\n"
	."</table>\n"
	."</td>\n"
	."</tr>\n"
	."<tr>\n"
	."<td>\n"
	."<!----- Story Box Content ----->\n"
	."<table border=\"0\" cellpadding=\"3\" cellspacing=\"0\" width=\"100%\" bgcolor=\"#efefff\">\n"
	."<tr>\n"
	."<td>\n"
	."<font color=\"#999999\"><b><a href=\"search.php?query=&amp;topic=$topic\"><img src=\"images/topics/$topicimage\" border=\"0\" Alt=\"$topictext\" align=\"right\" hspace=\"10\" vspace=\"10\"></a></B></font>\n";
    FormatStory($thetext, $notes, $aid, $informant);
    echo "</td></tr></table></td></tr></table>\n"
	."<table border=\"0\" cellpadding=\"1\" cellspacing=\"0\" width=\"100%\" bgcolor=\"#cfcfff\">\n"
	."<tr>\n"
	."<td>\n"
	."<table border=\"0\" cellpadding=\"3\" cellspacing=\"0\" width=\"100%\" bgcolor=\"#cfcfff\">\n"
	."<tr>\n"
	."<td align=\"center\">\n"
	."-----------------------------------------------<br>\n"
    ."<font size=\"1\">"._POSTEDBY." "
    ."<font size=\"1\">Posted ";
    formatAidHeader($aid);
    echo " "._ON." $time $timezone /*($counter "._READS.")*/<br></font>\n"
	."<font class=\"content\">$morelink</font>\n"
	."</td>\n"
	."</tr>\n"
	."</table>\n"
	."</td>\n"
	."</tr>\n"
	."</table>\n"
	."</td>\n"
	."</tr>\n"
	."</table>\n"
	."<br>\n\n\n";
}

/************************************************************/
/* Function themeindex()                                    */
/*                                                          */
/* This function format the stories on the story page, when */
/* you click on that "Read More..." link in the home        */
/************************************************************/

function themearticle ($aid, $informant, $datetime, $title, $thetext, $topic, $topicname, $topicimage, $topictext) {
    global $admin, $sid;
    echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"#000000\" width=\"100%\"><tr><td>\n"
        ."<table border=\"0\" cellpadding=\"1\" cellspacing=\"0\" bgcolor=\"#000000\" width=\"100%\"><tr><td>\n"
        ."<table border=\"0\" cellpadding=\"3\" cellspacing=\"0\" bgcolor=\"#cfcfff\" width=\"100%\"><tr><td align=\"left\" bgcolor=\"#cfcfff\">\n"
        ."<font class=\"option\" color=\"#363636\"><b>$title</b></font><br>\n"
        ."<font class=\"content\">"._POSTEDON." $datetime "._BY." ";
    formatAidHeader($aid);
    if (is_admin($admin)) {
	echo "<br>[ <a href=\"admin.php?op=EditStory&amp;sid=$sid\">"._EDIT."</a> | <a href=\"admin.php?op=RemoveStory&amp;sid=$sid\">"._DELETE."</a> ]\n";
    }
    echo "</td></tr></table></td></tr></table>";
    echo "<table border=\"0\" cellpadding=\"2\" cellspacing=\"1\" bgcolor=\"#000000\" width=\"100%\"><tr><td bgcolor=\"#efefff\">\n";
    echo "<a href=\"search.php?query=&amp;topic=$topic\"><img src=\"images/topics/$topicimage\" border=\"0\" Alt=\"$topictext\" align=\"right\" hspace=\"10\" vspace=\"10\"></a>\n";
    FormatStory($thetext, $notes="", $aid, $informant);
    echo "</td></tr></table>\n";
    echo "</td></tr></table><br>\n\n\n";
}

/************************************************************/
/* Function themesidebox()                                  */
/*                                                          */
/* Control look of your blocks. Just simple.                */
/************************************************************/

function themesidebox($title, $content) {
    echo "<!----- Side Box ----->\n"
    ."<table bgcolor=\"#374646\" border=\"0\" cellpadding=\"2\" cellspacing=\"1\" width=\"150\">\n"
	."<tr>\n"
	."<td background=\"themes/NetSoft-Blue/images/bg_blue.gif\" bcolor=\"#738278\" align=\"left\">\n"
	."<font class=\"content1\" color=\"#363636\">&nbsp;$title</font>\n"
	."</td>\n"
	."</tr>\n"
	."<tr valign=\"top\">\n"
	."<td bgcolor=\"#eeeeff\">\n"
	."$content\n"
	."</td>\n"
	."</tr>\n"
	."</table>\n"
	."<br>\n\n\n";
}

?>
