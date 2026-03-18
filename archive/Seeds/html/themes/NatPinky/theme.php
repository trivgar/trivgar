<?php

/************************************************************/
/* Ported Theme Name: PinkyNat                              */                      
/* Copyright (c) 2002 by Natland http://www.natland.org     */
/* The pinky design for PhPNuke!                            */
/* Month Names in Portuguese, I suggest you translate them! */
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

$bgcolor1 = "#000000";
$bgcolor2 = "#FF0099";
$bgcolor3 = "#000000";
$bgcolor4 = "#FF0099";
$textcolor1 = "#CCCCCC";
$textcolor2 = "#CCCCCC";

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
    echo "<table border=\"0\" cellspacing=\"1\" cellpadding=\"0\" bgcolor=\"$bgcolor2\" align=\"left\"><tr><td>\n";
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
	echo "<font class=\"content\" color=\"#CCCCCC\">$thetext$notes</font>\n";
    } else {
	if($informant != "") {
	    $boxstuff = "<a href=\"modules.php?name=Your_Account&amp;op=userinfo&amp;uname=$informant\">$informant</a> ";
	} else {
	    $boxstuff = "$anonymous ";
	}
	$boxstuff .= ""._WRITES." <i>\"$thetext\"</i>$notes\n";
	echo "<font class=\"content\" color=\"#CCCCCC\">$boxstuff</font>\n";
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
    global $user, $sitename, $slogan, $cookie, $prefix;
    cookiedecode($user);
    $username = $cookie[1];
    if ($username == "") {
        $username = "Anonymous";
    }
    echo "<body bgcolor=\"#000000\" text=\"#cccccc\" link=\"#ffffff\" vlink=\"#ffffff\" alink=\"#973362\" leftmargin=\"0\" topmargin=\"0\" marginwidth=\"0\" marginheight=\"0\">\n"
	."\n";
    echo "\n"
	."<table cellpadding=\"0\" cellspacing=\"0\" width=\"650\" border=\"0\" align=\"left\" bgcolor=\"#000000\">\n"
	."<tr>\n"
	."<td bgcolor=\"#000000\" align=\"left\">\n"
	."<table cellpadding=\"0\" cellspacing=\"0\" width=\"650\" border=\"0\" align=\"left\" bgcolor=\"#000000\">\n"
	."<tr>\n"
	."<td bgcolor=\"#000000\" align=\"left\" width=\"650\"><a href=\"index.php\"><img src=\"themes/NatPinky/images/barra.jpg\" width=\"650\" align=\"left\" alt=\""._WELCOMETO." $sitename\" border=\"0\"></a></td>\n"
	."</tr>\n"
	."<tr>\n"
	."<td bgcolor=\"#000000\" width=\"650\" valign=\"top\">\n"
	."<a href=\"index.php\"><img src=\"themes/NatPinky/images/colors.gif\" align=\"left\" alt=\""._WELCOMETO." $sitename\" border=\"0\" width=\"501\"></a><font class=\"content\">\n"
    ."<script type=\"text/javascript\">\n\n"
    ."<!--   // Array ofmonth Names\n"
    ."var monthNames = new Array( \"January\",\"February\",\"March\",\"April\",\"May\",\"June\",\"July\",\"Agust\",\"September\",\"October\",\"November\",\"December\");\n"
     ."var now = new Date();\n"
     ."thisYear = now.getYear();\n"
     ."if(thisYear < 1900) {thisYear += 1900}; // corrections if Y2K display problem\n"
     ."document.write(monthNames[now.getMonth()] + \" \" + now.getDate() + \", \" + thisYear);\n"
     ."// -->\n\n"
     ."</script></font></td>\n"
	."</tr>\n"
	."</table>\n"
    ."</td>\n"
	."</tr>\n"
    ."<tr>\n"
	."<td>\n"
	."<table width=\"650\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" bgcolor=\"#000000\" align=\"left\">\n"
	."\n"
	."<tr valign=\"top\">\n"
	."<td bgcolor=\"#FF0099\"><img src=\"themes/NatPinky/images/pixel.gif\" width=\"1\" height=\"3\" border=\"0\" alt=\"\"></td>\n"
	."</tr>\n"
	."</table>\n"
    ."</td>\n"
	."</tr>\n"
    ."<tr>\n"
	."<td>\n"
	."<table width=\"650\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" bgcolor=\"#000000\" align=\"left\"><tr valign=\"top\">\n"
	."<td bgcolor=\"#60213E\" width=\"150\" valign=\"top\">\n";
    blocks(left);
    echo "</td><td><img src=\"themes/NatPinky/images/pixel.gif\" width=\"15\" height=\"1\" border=\"0\" alt=\"\"></td><td width=\"100%\">\n";
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
    global $index, $banners;
    if ($index == 1) {
	echo "</td><td><img src=\"themes/NatPinky/images/pixel.gif\" width=\"15\" height=\"1\" border=\"0\" alt=\"\"></td><td valign=\"top\" width=\"150\" bgcolor=\"#60213E\">\n";
	blocks(right);
    }
    echo "</td>\n"
	."</tr></table>\n"
    ."</td>\n"
	."</tr>\n"
    ."<tr>\n"
	."<td>\n"
        ."<table bgcolor=\"#000000\" width=\"650\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"left\">\n"
        ."<tr>\n"
        ."<td width=\"650\" bgcolor=\"#FF0099\" height=\"2\"><img src=\"themes/NatPinky/images/pixel.gif\" width=\"650\" height=\"2\" border=\"0\" alt=\"\"></td>\n"
        ."</tr>\n"
        ."<tr>\n"
        ."<td width=\"100%\"><img src=\"themes/NatPinky/images/pixel.gif\" width=\"1\" height=\"1\" border=\"0\" alt=\"\"></td>\n"
        ."</tr>\n"
        ."</table>\n"
        ."<br>\n"
        ."<br>\n"
        ."<table width=\"650\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"left\">\n"
        ."<tr align=\"left\">\n"
        ."<td width=\"100%\" colspan=\"3\">\n";
    if ($banners) {
	include("banners.php");
    }
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
    global $anonymous, $tipath;
    echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"#000000\" width=\"320\"><tr><td valign=\"top\">\n"
	."<table border=\"0\" cellpadding=\"1\" cellspacing=\"0\" bgcolor=\"#FF0099\" width=\"100%\"><tr><td>\n"
	."<table border=\"0\" cellpadding=\"3\" cellspacing=\"0\" bgcolor=\"#973362\" width=\"100%\"><tr><td align=\"left\" width=\"100%\">\n"
	."<font class=\"option\" color=\"#CCCCCC\"><b>$title</b></font>\n"
	."</td></tr></table></td></tr></table>\n"
	."<font color=\"#CCCCCC\"><b><a href=\"modules.php?name=Search&amp;topic=$topic\"><img src=\"$tipath$topicimage\" border=\"0\" Alt=\"$topictext\" align=\"right\" hspace=\"10\" vspace=\"10\"></a></B></font>\n";
    FormatStory($thetext, $notes, $aid, $informant);
    echo "</td></tr></table><br>\n"
	."<table border=\"0\" cellpadding=\"1\" cellspacing=\"0\" bgcolor=\"#FF0099\" width=\"100%\"><tr><td>\n"
	."<table border=\"0\" cellpadding=\"3\" cellspacing=\"0\" bgcolor=\"#000000\" width=\"100%\"><tr><td align=\"left\">\n"
	."<font color=\"#CCCCCC\" size=\"1\">"._POSTEDBY." ";
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
    echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"#000000\" width=\"100%\"><tr><td>\n"
        ."<table border=\"0\" cellpadding=\"1\" cellspacing=\"0\" bgcolor=\"#FF0099\" width=\"100%\"><tr><td>\n"
        ."<table border=\"0\" cellpadding=\"3\" cellspacing=\"0\" bgcolor=\"#973362\" width=\"100%\"><tr><td align=\"left\">\n"
        ."<font class=\"option\" color=\"#CCCCCC\"><b>$title</b></font><br>\n"
        ."<font class=\"content\">"._POSTEDON." $datetime "._BY." ";
    formatAidHeader($aid);
    if (is_admin($admin)) {
	echo "<br>[ <a href=\"admin.php?op=EditStory&amp;sid=$sid\">"._EDIT."</a> | <a href=\"admin.php?op=RemoveStory&amp;sid=$sid\">"._DELETE."</a> ]\n";
    }
    echo "</td></tr></table></td></tr></table><br>";
    echo "<a href=\"modules.php?name=Search&amp;topic=$topic\"><img src=\"$tipath$topicimage\" border=\"0\" Alt=\"$topictext\" align=\"right\" hspace=\"10\" vspace=\"10\"></a>\n";
    FormatStory($thetext, $notes="", $aid, $informant);
    echo "</td></tr></table><br>\n\n\n";
}

/************************************************************/
/* Function themesidebox()                                  */
/*                                                          */
/* Control look of your blocks. Just simple.                */
/************************************************************/

function themesidebox($title, $content) {
    echo "<table border=\"0\" cellpadding=\"1\" cellspacing=\"0\" bgcolor=\"#FF0099\" width=\"150\"><tr><td>\n"
	."<table border=\"0\" cellpadding=\"3\" cellspacing=\"0\" bgcolor=\"#973362\" width=\"100%\"><tr><td align=left>\n"
	."<font class=\"content\" color=\"#CCCCCC\"><b>$title</b></font>\n"
	."</td></tr></table></td></tr></table>\n"
	."<table border=\"0\" cellpadding=\"3\" cellspacing=\"0\" width=\"150\">\n"
	."<tr valign=\"top\"><td>\n"
	."$content\n"
	."</td></tr></table>\n"
	."<br>\n\n\n";
}

?>
