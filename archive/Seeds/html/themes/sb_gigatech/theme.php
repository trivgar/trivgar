<?php
global $sepcolor, $thename;
/************************************************************************/
/* Post-Nuke: Content Management System                                 */
/* ====================================                                 */
/*                                                                      */
/* Copyright (c) 2001 by the Post Nuke development team                 */
/* http://www.postnuke.com                                              */
/************************************************************************/
/************************/
/* Modified version of: */
/************************************************************************/
/* PHP-NUKE: Web Portal System                                          */
/* ===========================                                          */
/*                                                                      */
/* Copyright (c) 2001 by Francisco Burzi (fbc@mandrakesoft.com)         */
/* http://phpnuke.org                                                   */
/*                                                                      */
/* This program is free software. You can redistribute it and/or modify */
/* it under the terms of the GNU General Public License as published by */
/* the Free Software Foundation; either version 2 of the License.       */
/************************************************************************/
/************************/
/************************************************************************/
/* Filename: Giga_tech - Theme PostNuke Rogue                           */
/* Author  : Nuno Luciano                                               */
/* Designer: ?????????? [no info about designer]                        */
/* Email   : webmaster@divertidos.org                                   */
/* URL     : http://www.divertidos.org                                  */
/* Date    : 27 november 2001                                           */
/************************************************************************/

/************************************************************/
/* THEME NAME: sb_gigatech                                  */
/* THEME modified for Nuke: (http://www.shareware-base.de   */
/* Date:08-09-2002 - Email: info@shareware-base.de          */
/************************************************************/




$thename = "sb_gigatech";
$bgcolor1 = "#646464";
$bgcolor2 = "#4E4E4E";
$bgcolor3 = "#666666";
$bgcolor4 = "#5C5C5C";
$sepcolor = "#5C5C5C"; // Color for the seperator used in the theme.  Theme only.
$textcolor1 = "#cccccc";
$textcolor2 = "#999999";
#$postnuke_theme = true;

#themes_get_language();

function OpenTable() {
    global $bgcolor1, $bgcolor2;
    echo "<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" bgcolor=\"$bgcolor2\"><tr><td>\n";
    echo "<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"6\" bgcolor=\"$bgcolor1\"><tr><td>\n";
}

function OpenTable2() {
    global $bgcolor1, $bgcolor2;
    echo "<table border=\"0\" cellspacing=\"1\" cellpadding=\"0\" bgcolor=\"$bgcolor2\" align=\"center\"><tr><td>\n";
    echo "<table border=\"0\" cellspacing=\"1\" cellpadding=\"6\" bgcolor=\"$bgcolor1\"><tr><td>\n";
}

function CloseTable() {
    echo "</td></tr></table></td></tr></table>\n";
}

function CloseTable2() {
    echo "</td></tr></table></td></tr></table>\n";
}


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
	echo "<font class=\"content\" color=\"$textcolor2\">$boxstuff</font>\n";
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
    global $user, $sitename, $slogan, $cookie, $prefix, $thename;
    cookiedecode($user);
    $username = $cookie[1];
    if ($username == "") {
        $username = "Anonymous";
    }

 echo "<!----- Theme Modified for phpnuke http://www.shareware-base.de  Please dot not remove this line, THANX----->\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n"
	."<BODY>\n"
        ."<table width=\"790\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" background=\"themes/$thename/images/bg.gif\" align=\"center\">"
        ."<tr><td background=\"themes/$thename/images/bg.gif\">"
        ."<table width=\"780\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\"><tr>"
        ."<td width=\"622\"><img src=\"themes/$thename/images/topleft.gif\" border=0 width=622 height=109 alt=\"\"></td>"
        ."<td width=\"158\"><img src=\"themes/$thename/images/topright.gif\" border=0 width=158 height=109 alt=\"\"></td>"
        ."</tr></table>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"index.php\"><img src=\"themes/$thename/images/logo.gif\" alt=\"$sitename\" border=0></a>"
        ."<table width=\"740\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\"><tr>"
        ."<td width=\"42\"><IMG SRC=\"themes/$thename/images/spacer.gif\" border=0 width=42 height=4 alt=\"\"></td><td>"
        ."<TABLE WIDTH=\"100%\" BORDER=\"0\" CELLSPACING=\"0\" CELLPADDING=\"0\"><TR>\n"
        ."<TD WIDTH=\"150\"><font class=\"pn-sub\">=[ ";
echo "<script type=\"text/javascript\">
<!--   // Array ofmonth Names
var monthNames = new Array( \"Januar\",\"Februar\",\"März\",\"April\",\"Mai\",\"Juni\",\"Juli\",\"August\",\"September\",\"Oktober\",\"November\",\"Dezember\")
var now = new Date();
thisYear = now.getYear();
if(thisYear < 1900) {thisYear += 1900}; // corrections if Y2K display problem
document.write(now.getDate() + \". \" + monthNames[now.getMonth()] + \" \" + thisYear);
// -->
</script> ]=";
        echo "<TD WIDTH=\"1\" BGCOLOR=\"$sepcolor\"><IMG SRC=\"themes/$thename/images/pixel.gif\" WIDTH=\"1\" HEIGHT=\"1\" ALT=\"alt1\" BORDER=\"0\"></TD>\n"
        ."<TD WIDTH=\"100%\" VALIGN=\"top\" class=\"pn-sub\">"
        ."&nbsp;$slogan</TD>\n";
        if ($index == 1) {
       	echo "<TD WIDTH=\"1\" BGCOLOR=\"$sepcolor\"><IMG SRC=\"themes/$thename/images/pixel.gif\" WIDTH=\"1\" HEIGHT=\"1\" ALT=\"alt1\" BORDER=\"0\"></TD>\n"
         ."<TD WIDTH=\"150\" VALIGN=\"top\">:::::</TD>\n";
        }
        echo "</TR>\n"
        ."<TR>\n"
        ."<TD WIDTH=\"150\" VALIGN=\"top\">\n";
blocks('left');
        echo "</TD>\n"
        ."<TD WIDTH=\"1\" BGCOLOR=\"$sepcolor\"><IMG SRC=\"themes/$thename/images/pixel.gif\" WIDTH=\"1\" HEIGHT=\"1\" ALT=\"alt1\" BORDER=\"0\"></TD>\n"
        ."<TD ALIGN=\"center\" VALIGN=\"top\" WIDTH=\"100%\">\n";
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
    global $index, $thename, $banners;

        echo "</TD>\n";
        if ($index == 1) {
       	echo "<TD WIDTH=\"1\" BGCOLOR=\"$sepcolor\">"
        ."<IMG SRC=\"themes/$thename/images/pixel.gif\" WIDTH=\"1\" HEIGHT=\"1\" ALT=\"alt1\" BORDER=\"0\">"
        ."</TD>"
        ."<TD ALIGN=\"center\" VALIGN=\"top\">";
blocks('right');
       	echo "</TD>\n";
        }
        echo "</TR>\n"
        ."</TABLE>\n"
        ."</td></tr></table>"
        ."<TABLE BORDER=0 CELLPADDING=0 CELLSPACING=0 Height=100% BGCOLOR=\"000000\"><TR>"
        ."<TD valign=top>"
        ."<img src=\"themes/$thename/images/bottom.gif\" border=0 width=780 height=40 alt=\"\">"
        ."</TD>"
        ."</TR><TR>"
        ."<TD align=\"center\">Theme modified for PHPNuke <a href=\"http://www.shareware-base.de\">Shareware-base</a>";
footmsg();
        echo "<br>";
    if ($banners) {
	include("banners.php");
    }
        echo "</td></tr></table>"
        ."</td></tr></table><br>";
}

/************************************************************/
/* Function themeindex()                                    */
/*                                                          */
/* This function format the stories on the Homepage         */
/************************************************************/

function themeindex ($aid, $informant, $time, $title, $counter, $topic, $thetext, $notes, $morelink, $topicname, $topicimage, $topictext) {
global $anonymous, $admin, $tipath, $thename, $sid;
        echo "<TABLE WIDTH=\"100%\" BORDER=\"0\" CELLSPACING=\"0\" CELLPADDING=\"0\">\n"
        ."<TR BGCOLOR=\"$sepcolor\">\n"
        ."<TD>"
        ."<IMG SRC=\"themes/$thename/images/pixel.gif\" WIDTH=\"1\" HEIGHT=\"1\" ALT=\"alt1\" BORDER=\"0\">"
        ."</TD>\n"
        ."</TR>\n"
        ."<TR>\n"
        ."<TD>\n"
        ."<TABLE BORDER=\"0\" CELLSPACING=\"0\" CELLPADDING=\"3\" WIDTH=\"100%\" BGCOLOR=\"$bgcolor4\">\n"
        ."<TR>\n"
        ."<TD WIDTH=\"100%\"><font CLASS=\"pn-title\">"
 	."$title</font><br>\n"
        ."<font CLASS=\"pn-sub\">"._POSTEDBY.": $posted $aid "._ON." $time $timezone</font></TD>\n"
        ."</TR>\n"
        ."</TABLE>\n"
        ."</TD>\n"
        ."</TR>\n"
        ."<TR BGCOLOR=\"$sepcolor\">\n"
        ."<TD>"
        ."<IMG SRC=\"themes/$thename/images/pixel.gif\" WIDTH=\"1\" HEIGHT=\"1\" ALT=\"alt1\" BORDER=\"0\">"
        ."</TD>\n"
        ."</TR>\n"
        ."<TR>\n"
        ."<TD ALIGN=\"left\" VALIGN=\"top\" CLASS=\"pn-normal\">\n"
        ."<div align=\"center\"></div>\n"
        ."$thetext\n"
        ."<BR><BR>\n"
        ."</TD></TR>\n"
        ."<TR BGCOLOR=\"$sepcolor\">\n"
        ."<TD>"
        ."<IMG SRC=\"themes/$thename/images/pixel.gif\" WIDTH=\"1\" HEIGHT=\"1\" ALT=\"alt1\" BORDER=\"0\">"
        ."</TD>\n"
        ."</TR>\n"
        ."<TR>\n"
        ."<TD VALIGN=\"middle\" ALIGN=\"right\" WIDTH=\"100%\">\n"
        ."<TABLE WIDTH=\"100%\" BORDER=\"0\" CELLSPACING=\"0\" CELLPADDING=\"3\" BGCOLOR=\"$bgcolor1\">\n"
        ."<TR>\n"
        ."<TD WIDTH=\"20%\" VALIGN=\"middle\" CLASS=\"pn-sub\">$counter "._READS."</TD>\n"
        ."<TD ALIGN=\"right\" VALIGN=\"middle\" WIDTH=\"80%\" CLASS=\"pn-sub\">$morelink</TD>\n"
        ."</TR>\n"
        ."</TABLE>\n"
        ."</TD>\n"
        ."</TR>\n"
        ."<TR BGCOLOR=\"$sepcolor\">\n"
        ."<TD>"
        ."<IMG SRC=\"themes/$thename/images/pixel.gif\" WIDTH=\"1\" HEIGHT=\"1\" ALT=\"alt1\" BORDER=\"0\">"
        ."</TD>\n"
        ."</TR>\n"
        ."</TABLE>\n"
        ."<BR><center><hr width=200></center>\n";
}

/************************************************************/
/* Function themeindex()                                    */
/*                                                          */
/* This function format the stories on the story page, when */
/* you click on that "Read More..." link in the home        */
/************************************************************/

function themearticle ($aid, $informant, $datetime, $title, $thetext, $topic, $topicname, $topicimage, $topictext) {
    global $admin, $sid, $tipath, $thename;

        echo "<TABLE WIDTH=\"100%\" BORDER=\"0\" CELLSPACING=\"0\" CELLPADDING=\"0\">\n"
        ."<TR BGCOLOR=\"$sepcolor\">\n"
        ."<TD><IMG SRC=\"themes/$thename/images/pixel.gif\" WIDTH=\"1\" HEIGHT=\"1\" ALT=\"alt1\" BORDER=\"0\"></TD>\n"
        ."</TR>\n"
        ."<TR>\n"
        ."<TD>\n"
        ."<TABLE BORDER=\"0\" CELLSPACING=\"0\" CELLPADDING=\"3\" WIDTH=\"100%\" BGCOLOR=\"$bgcolor4\">\n"
        ."<TR>\n"
        ."<TD WIDTH=\"100%\"><font CLASS=\"pn-title\">$title</font><br>\n"
        ."<font CLASS=\"pn-sub\">"._POSTEDBY.": $posted $aid</font></TD>\n"
        ."</TR>\n"
        ."</TABLE>\n"
        ."</TD>\n"
        ."</TR>\n"
        ."<TR BGCOLOR=\"$sepcolor\">\n"
        ."<TD><IMG SRC=\"themes/$thename/images/pixel.gif\" WIDTH=\"1\" HEIGHT=\"1\" ALT=\"alt1\" BORDER=\"0\"></TD>\n"
        ."</TR>\n"
        ."<TR>\n"
        ."<TD ALIGN=\"left\" VALIGN=\"top\" CLASS=\"pn-normal\">\n";
    if (is_admin($admin)) {
	echo "[ <a href=\"admin.php?op=EditStory&amp;sid=$sid\">"._EDIT."</a> | <a href=\"admin.php?op=RemoveStory&amp;sid=$sid\">"._DELETE."</a> ]\n";
    }
        echo "<br><br><a href=\"modules.php?name=Search&query=&amp;topic=$topic\"><img src=\"$tipath$topicimage\" border=\"0\" Alt=\"$topictext\" align=\"right\" hspace=\"10\" vspace=\"10\"></a>\n"
        ."$thetext\n"
        ."</TD>\n"
        ."</TR>\n"
        ."<TR BGCOLOR=\"$sepcolor\">\n"
        ."<TD><IMG SRC=\"themes/$thename/images/pixel.gif\" WIDTH=\"1\" HEIGHT=\"1\" ALT=\"alt1\" BORDER=\"0\"></TD>\n"
        ."</TR>\n"
        ."<TR BGCOLOR=\"$sepcolor\">\n"
        ."<TD><IMG SRC=\"themes/$thename/images/pixel.gif\" WIDTH=\"1\" HEIGHT=\"1\" ALT=\"alt1\" BORDER=\"0\"></TD>\n"
        ."</TR>\n"
        ."</TABLE>\n";
}

/************************************************************/
/* Function themesidebox()                                  */
/*                                                          */
/* Control look of your blocks. Just simple.                */
/************************************************************/

function themesidebox($title, $content) {
    global $thename, $sepcolor;
        echo "<TABLE WIDTH=\"140\" BORDER=\"0\" CELLSPACING=\"0\" CELLPADDING=\"0\">\n"
        ."<TR BGCOLOR=\"$sepcolor\">\n"
        ."<TD><IMG SRC=\"themes/$thename/images/pixel.gif\" WIDTH=\"1\" HEIGHT=\"1\" ALT=\"alt1\" BORDER=\"0\"></TD>\n"
        ."</TR>\n"
        ."<TR>\n"
        ."<TD ALIGN=\"left\" VALIGN=\"top\">\n"
        ."<TABLE WIDTH=\"140\" BORDER=\"0\" CELLSPACING=\"0\" CELLPADDING=\"4\">\n"
        ."<TR>\n"
        ."<td CLASS=\"pn-title\" align=\"center\">:: $title ::</TD>\n"
        ."</TR>\n"
        ."</TABLE>\n"
        ."</TD>\n"
        ."</TR>\n"
        ."<TR BGCOLOR=\"$sepcolor\">\n"
        ."<TD><IMG SRC=\"themes/$thename/images/pixel.gif\" WIDTH=\"1\" HEIGHT=\"1\" ALT=\"alt1\" BORDER=\"0\"></TD>\n"
        ."</TR>\n"
        ."<TR>\n"
        ."<TD ALIGN=\"left\" VALIGN=\"top\" CLASS=\"pn-normal\">$content</TD>\n"
        ."</TR>\n"
        ."</TABLE><br>\n";
}
?>
