<?php
/******************************************************************************/
/* Copyright (c) 2001 by kodred (kodred@babylone6tem.com)                     */
/* http://www.babylone6tem.com/~kodred                                        */
/* ------------------------------------------------------                     */
/* This program is free software. You can redistribute it and/or modify it    */
/* under the terms of the GNU General Public License as published by the Free */
/* Software Foundation; either version 2 of the License.                      */
/* See ReadMe.txt COPYING and CREDITS files for details                       */
/******************************************************************************/
$thename = "sahara";
$bgcolor1 = "#f7f6e6";
$bgcolor2 = "#CC9933";
$bgcolor3 = "#f7f6e6";
$bgcolor4 = "#FFCC66";
$textcolor1 = "#000000";
$textcolor2 = "#000000";

function OpenTable() {
    global $bgcolor1, $bgcolor2;
    echo "<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\"><tr><td>\n";
    echo "<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"8\"><tr><td>\n";
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

function FormatStory($thetext, $notes, $aid, $informant) {
    global $anonymous;
    if ($notes != "") {
        $notes = "<b>"._NOTE."</b> <i>$notes</i>\n";
    } else {
        $notes = "";
    }
    if ("$aid" == "$informant") {
        echo "<font size=\"2\">$thetext<br>$notes</font>\n";
    } else {
        if($informant != "") {
            $boxstuff = "<a href=\"modules.php?name=Your_Account&amp;op=userinfo&amp;uname=$informant\">$informant</a> ";
        } else {
            $boxstuff = "$anonymous ";
        }
        $boxstuff .= ""._WRITES." \"$thetext\"<br> $notes\n";
        echo "$boxstuff\n";
    }
}

function themeheader() {
global $user, $username, $banners, $sitename, $slogan, $cookie, $prefix;
cookiedecode($user);
$username = $cookie[1];
if ($username == "") {
$username = "Anonymous";
}
    echo "<body link=\"000000\" vlink=\"000000\">\n"
    ."<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"2\" bgcolor=\"#000000\">\n"
    ."<tr>\n"
    ."<td align=\"center\" valign=\"middle\">\n"
    ."<table cellspacing=\"0\" cellpadding=\"2\" width=\"100%\" border=\"0\" bgcolor=\"#FFCC66\">\n"
    ."<tr>\n"
    ."<td align=\"left\" class=\"Marronfonce\">&nbsp;<b>$sitename - $slogan</b></td>\n"
    ."<td align=\"right\" class=\"Marronfonce\"><a href=\"index.php\"><img src=\"themes/sahara/images/logo.gif\" width=\"200\" height=\"30\" alt=\"welcome on $sitename\" border=\"0\"></a>&nbsp;</td>\n"
    ."</tr>\n"
    ."<tr>\n"
    ."<td width=\"65%\" valign=\"top\" align=\"left\" class=\"marronclair\"><b>\n";
    if ($username == "Anonymous") {
        echo "&nbsp;&nbsp;<a href=\"modules.php?name=Your_Account\">Create</a> an account\n";
    } else {
        echo "&nbsp;&nbsp;Welcome $username!";
    }
    echo "</b></td>\n"
    ."<td align=\"right\" width=\"35%\" valign=\"top\" class=\"marronclair\"><form action=\"modules.php?name=Search\" method=\"post\"><b>".translate("Search")." </b>\n"
    ."<input type=\"text\" name=\"query\" size=\"12\" class=\"formbut\">&nbsp;&nbsp;</form>\n"
    ."</td>\n"
    ."</tr>\n"
    ."<tr align=\"center\" valign=\"middle\">\n"
    ."<td colspan=\"2\" class=\"greytop\">| <a href=\"index.php\">HOME</a> | <a href=\"modules.php?name=Topics\">TOPICS</a> | <a href=\"modules.php?name=Downloads\">DOWNLOADS</a> | <a href=\"modules?name=Web_Links\">WEBLINKS</a> | <a href=\"modules?name=Submit_News\">SUBMIT NEWS</a> |</td>\n"
    ."</tr>\n"
    ."</table>\n"
    ."</td>\n"
    ."</tr>\n"
    ."</table>\n"
    ."<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"2\" bgcolor=\"#000000\">\n"
    ."<tr>\n"
    ."<td align=\"center\" valign=\"middle\">\n"
    ."<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" bgcolor=\"#f7f6e6\">\n"
    ."<tr>\n"
    ."<td align=\"center\" valign=\"top\" width=\"170\"><img src=\"themes/sahara/images/pix-transparent.gif\" width=\"170\" height=\"1\" alt=\"/\" border=\"0\"><br>\n"
    ."<br>\n";
    blocks(left);
    echo "</td>\n"
    ."<td width=\"3\" class=\"blackback\"><img src=\"themes/sahara/images/pix-transparent.gif\" width=\"3\" height=\"1\" alt=\"/\" border=\"0\"></td>\n"
    ."<td align=\"center\" valign=\"top\" width=\"100%\"><br>\n";
}
    function themefooter() {
    global $index;
    if ($index == 1) {
        echo "</td>\n"
    ."<td width=\"3\" class=\"blackback\"><img src=\"themes/sahara/images/pix-transparent.gif\" width=\"3\" height=\"1\" alt=\"/\" border=\"0\"></td>\n"
    ."<td align=\"center\" valign=\"top\" width=\"170\"><img src=\"themes/sahara/images/pix-transparent.gif\" width=\"170\" height=\"1\" alt=\"/\" border=\"0\"><br>\n"
    ."<br>\n";
    blocks(right);
}
    echo "</td>\n"
    ."</tr>\n"
    ."</table>\n"
    ."</td>\n"
    ."</tr>\n"
    ."</table><br><div align=\"center\">\n";
    if ($banners) {
        include("banners.php");
}
    echo "</div><br>\n";
    footmsg();
    echo "<br>\n";
}

function themeindex ($aid, $informant, $time, $title, $counter, $topic, $thetext, $notes, $morelink, $topicname, $topicimage, $topictext) {
    global $tipath, $anonymous;
    echo  "<table width=\"95%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\n"
    ."<tr>\n"
    ."<td class=\"newsgrey\">$title<br></td>\n"
    ."</tr>\n"
    ."<tr>\n"
    ."<td class=\"newstxt\">"._POSTEDBY." <b>";
    formatAidHeader($aid);
    echo "</b> "._ON." $time $timezone ($counter "._READS.")<br><b>"._TOPIC."</b> <a href=\"modules.php?name=Search&amp;new_topic=$topic&amp;author=\">$topictext</a><br><br>\n";
    FormatStory($thetext, $notes, $aid, $informant);
    echo "<br>$morelink<br><br></td>\n"
    ."</tr>\n"
    ."<tr>\n"
    ."<td class=\"blackback\" width=\"100%\" align=\"left\" valign=\"top\"><img src=\"themes/sahara/images/pix-transparent.gif\" width=\"1\" height=\"2\" alt=\"/\" border=\"0\"></td>\n"
    ."</tr>\n"
    ."</table>\n"
    ."<br>\n";
}

function themearticle ($aid, $informant, $datetime, $title, $thetext, $topic, $topicname, $topicimage, $topictext) {
    global $admin, $sid, $tipath;
    echo "<table width=\"95%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\n"
    ."<tr>\n"
    ."<td class=\"newsgrey\">$title<br></td>\n"
    ."</tr>\n"
    ."<tr>\n"
    ."<td class=\"newstxt\">"._POSTEDON." $datetime "._BY." ";
    formatAidHeader($aid);
    if (is_admin($admin)) {
        echo "<br>[ <a href=\"admin.php?op=EditStory&amp;sid=$sid\">"._EDIT."</a> | <a href=\"admin.php?op=RemoveStory&amp;sid=$sid\">"._DELETE."</a> ]\n";
    }
    echo "<br> <a href=\"modules.php?name=Search&amp;new_topic=$topic&amp;author=\">$topictext</a></B><br><br>\n";
    FormatStory($thetext, $notes, $aid, $informant);
    echo "<br><br></td>\n"
    ."</tr>\n"
    ."<tr>\n"
    ."<td class=\"blackback\" width=\"100%\" align=\"left\" valign=\"top\"><img src=\"themes/sahara/images/pix-transparent.gif\" width=\"1\" height=\"2\" alt=\"/\" border=\"0\"></td>\n"
    ."</tr>\n"
    ."</table>\n"
    ."<br>\n";
}

function themesidebox($title, $content) {
    echo "<table width=\"160\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\n"
    ."<tr>\n"
    ."<td class=\"blackback\" width=\"100%\" align=\"left\" valign=\"top\"><img src=\"themes/sahara/images/pix-transparent.gif\" width=\"1\" height=\"2\" alt=\"/\" border=\"0\"></td>\n"
    ."</tr>\n"
    ."<tr>\n"
    ."<td class=\"marronclair2\"><b>$title</b></td>\n"
    ."</tr>\n"
    ."<tr>\n"
    ."<td class=\"blackback\" width=\"100%\" align=\"left\" valign=\"top\"><img src=\"themes/sahara/images/pix-transparent.gif\" width=\"1\" height=\"2\" alt=\"/\" border=\"0\"></td>\n"
    ."</tr>\n"
    ."<tr>\n"
    ."<td class=\"newstxt\">$content<br><br></td>\n"
    ."</tr>\n"
    ."<tr>\n"
    ."<td class=\"blackback\" width=\"100%\" align=\"left\" valign=\"top\"><img src=\"themes/sahara/images/pix-transparent.gif\" width=\"1\" height=\"2\" alt=\"/\" border=\"0\"></td>\n"
    ."</tr>\n"
    ."</table>\n"
    ."<br>\n";
}

?>
