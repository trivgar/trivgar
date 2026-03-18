<?php
/******************************************************************************/
/* Copyright (c) 2001 by kodred (kodred@babylone6tem.com)                     */
/* http://www.babylone6tem.com/~kodred                                        */
/* ------------------------------------------------------                     */
/* This program is free software. You can redistribute it and/or modify it    */
/* under the terms of the GNU General Public License as published by the Free */
/* Software Foundation; either version 2 of the License.                      */
/* See COPYING and CREDITS files for details                                  */
/******************************************************************************/
/************************************************************/
/* Theme Colors Definition                                  */
/************************************************************/

$thename = "Korporate";
$bgcolor1 = "#EDEDED";
$bgcolor2 = "#CCCC99";
$bgcolor3 = "#CCCCCC";
$bgcolor4 = "#FFFFCC";
$textcolor1 = "#000000";
$textcolor2 = "#000000";

function OpenTable() {
    global $bgcolor1, $bgcolor2;
    echo "<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" bgcolor=\"$bgcolor2\"><tr><td>\n";
    echo "<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"8\" bgcolor=\"$bgcolor1\"><tr><td class=\"backtable\">\n";
}

function CloseTable() {
    echo "</td></tr></table></td></tr></table>\n";
}

function OpenTable2() {
    global $bgcolor1, $bgcolor2;
    echo "<table border=\"0\" width=\"100%\" cellspacing=\"1\" cellpadding=\"0\" bgcolor=\"$bgcolor2\" align=\"center\"><tr><td>\n";
    echo "<table border=\"0\" width=\"100%\" cellspacing=\"1\" cellpadding=\"8\" bgcolor=\"$bgcolor1\"><tr><td class=\"backtable\">\n";
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
        echo "<font size=\"2\" color=\"#000000\">$thetext<br>$notes</font>\n";
    } else {
        if($informant != "") {
            $boxstuff = "<a href=\"modules.php?name=Your_Account&amp;op=userinfo&amp;uname=$informant</a> ";
        } else {
            $boxstuff = "$anonymous ";
        }
        $boxstuff .= "".translate("writes").": $thetext<br>$notes\n";
        echo "<font size=\"2\" color=\"#000000\">$boxstuff</font>\n";
    }
}

/************************************************************/
/* Function themeheader()                                   */
/************************************************************/

function themeheader() {
    global $user, $banners, $sitename, $slogan, $cookie, $prefix, $index;
    cookiedecode($user);
    $username = $cookie[1];
    if ($username == "") {
        $username = "Anonymous";
    }
    echo "<body TEXT=\"000000\" LINK=\"FF0000\" VLINK=\"FF0000\" ALINK=\"FF0000\">\n"
    ."<form action=\"modules.php?name=Search\" method=\"post\">\n"
    ."<table cellspacing=\"0\" cellpadding=\"0\" width=\"100%\" border=\"0\">\n"
    ."<tbody>\n"
    ."<tr>\n"
    ."<td class=\"header\" valign=\"bottom\"><img height=\"33\" alt=\"\" src=\"themes/Korporate/images/back-header-left.gif\" width=\"350\" border=\"0\"></td>\n"
    ."<td class=\"header\" align=\"right\" width=\"100%\"><input name=\"query\" size=\"20\" class=\"formbut\">&nbsp;<input type=\"submit\" value=\"Search\" class=\"submitbut\">&nbsp;&nbsp;</td>\n"
    ."</tr>\n"
    ."<tr>\n"
    ."<td valign=\"top\"><img src=\"themes/Korporate/images/logo.gif\" width=\"350\" height=\"40\" alt=\"Welcome on $sitename\"></td>\n"
    ."<td align=\"right\" valign=\"middle\" class=\"more\">\n";
    if ($username == "Anonymous") {
	echo "<a href=\"modules.php?name=Your_Account\">Create</a> an account&nbsp;&nbsp;\n";
    } else {
	echo "Welcome $username&nbsp;&nbsp;";
    }
    echo "</td>\n"
    ."</tr>\n"
    ."</tbody>\n"
    ."</table>\n"
    ."</form>\n"
    ."<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\n"
    ."<tr>\n"
    ."<td valign=\"top\" width=\"170\">\n"
    ."<table cellspacing=\"0\" cellpadding=\"0\" width=\"170\" border=\"0\">\n"
    ."<tbody>\n"
    ."<tr>\n"
    ."<td class=\"header\" width=\"10\"><img src=\"themes/Korporate/images/pix-transparent.gif\" width=\"10\" height=\"1\" alt=\"\"></td>\n"
    ."<td valign=\"top\">\n";
    blocks(left);
    echo "</td>\n"
    ."</tr>\n"
    ."<tr>\n"
    ."<td valign=\"top\" width=\"10\"><img src=\"themes/Korporate/images/cap.gif\" width=\"10\" height=\"12\" alt=\"\"></td>\n"
    ."<td><img src=\"themes/Korporate/images/pix-transparent.gif\" width=\"1\" height=\"1\" alt=\"\"></td>\n"
    ."</tr>\n"
    ."</tbody>\n"
    ."</table>\n"
    ."</td>\n"
    ."<td width=\"2\" class=\"tiretleft\"><img src=\"themes/Korporate/images/pix-transparent.gif\" width=\"2\" height=\"1\" alt=\"\" border=\"0\"></td>\n"
    ."<td width=\"10\"><img src=\"themes/Korporate/images/pix-transparent.gif\" width=\"10\" height=\"1\" alt=\"\" border=\"0\"></td>\n"
    ."<td width=\"100%\" valign=\"top\" align=\"center\">\n";
}
/************************************************************/
/* Function themefooter                                     */
/************************************************************/
    function themefooter() {
    global $index, $banners;

    echo "</td>\n"
    ."<td align=\"center\" valign=\"top\" width=\"10\"><img src=\"themes/Korporate/images/pix-transparent.gif\" width=\"10\" height=\"1\" alt=\"\"></td>\n";
    if ($index == 1) {
    echo "<td width=\"2\" class=\"tiretleft\"><img src=\"themes/Korporate/images/pix-transparent.gif\" width=\"2\" height=\"1\" alt=\"\" border=\"0\"></td>\n"
    ."<td valign=\"top\" align=\"right\">\n";
    blocks(right);
    echo "</td>\n";
}
    echo "</tr>\n"
    ."</table>\n"
    ."<br>\n"
    ."<table width=\"80%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\">\n"
    ."<tr>\n"
    ."<td valign=\"middle\" align=\"center\" class=\"copyright\">\n";
    if ($banners) {
	include("banners.php");
}
    echo "<br>\n";
    footmsg();
    echo "<br><br>\n"
    ."</td>\n"
    ."</tr>\n"
    ."</table>\n";
}

/************************************************************/
/* Function themeindex                                      */
/************************************************************/

function themeindex ($aid, $informant, $time, $title, $counter, $topic, $thetext, $notes, $morelink, $topicname, $topicimage, $topictext) {
    global $anonymous, $tipath;
    echo "<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"6\">\n"
        ."<tr>\n"
        ."<td class=\"titlenews\">$title</td>\n"
        ."</tr>\n"
        ."</table>\n"
        ."<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"3\">\n"
        ."<tr>\n"
        ."<td class=\"texte\"><a href=\"modules.php?name=Search&amp;new_topic=$topic\"><img src=\"$tipath$topicimage\" border=\"0\" Alt=\"$topictext\" align=\"right\" hspace=\"10\" vspace=\"10\"></a>\n";
    FormatStory($thetext, $notes, $aid, $informant);
    echo "<br>\n"
    .""._POSTEDBY." ";
    formatAidHeader($aid);
    echo " "._ON." $time $timezone ($counter "._READS.")</td>\n"
        ."</tr>\n"
        ."</table>\n"
        ."<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"3\">\n"
        ."<tr>\n"
        ."<td class=\"more\">$morelink</td>\n"
        ."</tr>\n"
        ."<tr>\n"
        ."<td class=\"horizontalback\" width=\"100%\">&nbsp;</td>\n"
        ."</tr>\n"
        ."</table>\n\n\n";
}

/************************************************************/
/* Function themeheader()                                   */
/************************************************************/

function themearticle ($aid, $informant, $datetime, $title, $thetext, $topic, $topicname, $topicimage, $topictext) {
    global $admin, $sid, $tipath;
        echo "<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"4\">\n"
    ."<tr>\n"
    ."<td class=\"titlenews\">$title<br>\n";
    if (is_admin($admin)) {
        echo "[ <a href=\"admin.php?op=EditStory&amp;sid=$sid\">"._EDIT."</a> | <a href=\"admin.php?op=RemoveStory&amp;sid=$sid\">"._DELETE."</a> ]\n";
}
        echo "</td>\n"
        ."</tr>\n"
        ."</table>\n"
        ."<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"3\">\n"
        ."<tr>\n"
        ."<td class=\"texte\"><a href=\"modules.php?name=Search&amp;new_topic=$topic\"><img src=\"$tipath$topicimage\" border=\"0\" Alt=\"$topictext\" align=\"right\" hspace=\"10\" vspace=\"10\"></a>\n";
    FormatStory($thetext, $notes, $aid, $informant);
        echo "</td>\n"
        ."</tr>\n"
        ."</table>\n"
        ."<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"3\">\n"
        ."<tr>\n"
        ."<td class=\"more\">"._POSTEDON." $datetime "._BY." ";
    formatAidHeader($aid);
        echo "<br><br></td>\n"
        ."</tr>\n"
        ."<tr>\n"
        ."<td class=\"horizontalback\" width=\"100%\">&nbsp;</td>\n"
        ."</tr>\n"
        ."</table>\n\n\n";
}


/************************************************************/
/* Function themesidebox                                    */
/************************************************************/

function themesidebox($title, $content) {
    echo "<table width=\"160\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" bgcolor=\"#FFFFFF\">\n"
    ."<tr>\n"
    ."<td width=\"5\" class=\"boxtitle\"><img src=\"themes/Korporate/images/boxmark.gif\" width=\"5\" height=\"21\" alt=\"\"></td>\n"
    ."<td class=\"boxtitle\" align=\"left\" valign=\"middle\">&nbsp;$title</td>\n"
    ."</tr>\n"
    ."<tr>\n"
    ."<td width=\"5\"><img src=\"themes/Korporate/images/pix-transparent.gif\" width=\"5\" height=\"1\" alt=\"\"></td>\n"
    ."<td class=\"boxcontent\" valign=\"top\" align=\"left\">$content</td>\n"
    ."</tr>\n"
    ."</table>\n"
    ."<br>\n\n\n";
}

?>
