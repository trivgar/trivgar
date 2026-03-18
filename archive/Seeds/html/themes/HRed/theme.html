<?php

/********************************************************/
/* HRed Theme for PHP-Nuke 5.3.0-5.4.0                  */
/* By: Nuke Scripts (webmaster@nukescripts.com)         */
/* http://www.nukescripts.com                           */
/* Copyright © 2002, All right reserved                 */
/********************************************************/

global $tableset, $thewidth, $thename, $bgcolor1, $bgcolor2, $bgcolor3, $bgcolor4, $bgcolor5, $fbgcolor1, $fbgcolor2, $textcolor1, $textcolor2;
$thename = "HRed";
$bgcolor1 = "#ffffff";
$bgcolor2 = "#eeeeee";
$bgcolor3 = "#ffffff";
$bgcolor4 = "#eeeeee";
$bgcolor5 = "#ef6b84";
$textcolor1 = "#000000";
$textcolor2 = "#000000";
$tableset = "2"; /* 1 for 760, 2 for 980 (default), 3 for 1230 */
if ($tableset == "3") {
    $thewidth = "1230"; /* DON'T Change, graphics are this size */
} else if ($tableset == "2") {
    $thewidth = "980"; /* DON'T Change, graphics are this size */
} else {
    $thewidth = "760"; /* DON'T Change, graphics are this size */
}

if (isset($newlang)) {
    $language = $newlang;
} elseif (isset($lang)) {
    $language = $lang;
}

if(file_exists("themes/$thename/language/$language.php")) {
        include("themes/$thename/language/$language.php");
} else {
        include("themes/$thename/language/english.php");
}

###########################################################################################
function OpenTable() {
    global $bgcolor1, $bgcolor5;
    echo "<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" bgcolor=\"$bgcolor5\"><tr><td>\n";
    echo "<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"8\" bgcolor=\"$bgcolor1\"><tr><td>\n";
}

function CloseTable() {
    echo "</td></tr></table></td></tr></table>\n";
}

function OpenTable2() {
    global $bgcolor1, $bgcolor5;
    echo "<table border=\"0\" cellspacing=\"1\" cellpadding=\"0\" bgcolor=\"$bgcolor5\" align=\"center\"><tr><td>\n";
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
            $boxstuff = "<a href=\"user.php?op=userinfo&amp;uname=$informant\">$informant</a> ";
        } else {
            $boxstuff = "$anonymous ";
        }
        $boxstuff .= ""._WRITES." \"$thetext\" $notes\n";
        echo "<font size=\"2\" color=\"#505050\">$boxstuff</font>\n";
    }
}

/************************************************************/
/* Function themeheader()                                   */
/************************************************************/

function themeheader() {
    global $dbi, $anonymous, $tableset, $startdate, $user, $banners, $sitename, $slogan, $cookie, $prefix, $thewidth, $thename, $bgcolor1, $bgcolor2, $bgcolor3, $bgcolor4, $bgcolor5, $textcolor1, $textcolor2;
    cookiedecode($user);
    $username = $cookie[1];
    if ($username == "") {
        $username = $anonymous;
    }
    echo "<body bgcolor=\"$bgcolor1\" background=\"themes/$thename/images/background.gif\" text=\"$textcolor1\" link=\"#363636\" vlink=\"#363636\" alink=\"#d5ae83\">\n";

if ($tableset == "3") {
    echo "<table cellpadding=\"0\" cellspacing=\"0\" width=\"$thewidth\" border=\"0\" align=\"center\" bgcolor=\"$bgcolor1\">\n"
        ."<tr>\n<td><img src=\"themes/$thename/images/barhead3.gif\" height=\"12\" width=\"1230\"></td>\n</tr>\n"
        ."<tr>\n<td><img src=\"themes/$thename/images/header3.jpg\" alt=\""._WELCOMETO." $sitename\" border=\"0\" height=\"155\" width=\"1230\"></td>\n</tr>\n"
        ."</table>\n";
} else if ($tableset == "2") {
    echo "<table cellpadding=\"0\" cellspacing=\"0\" width=\"$thewidth\" border=\"0\" align=\"center\" bgcolor=\"$bgcolor1\">\n"
        ."<tr>\n<td><img src=\"themes/$thename/images/barhead2.gif\" height=\"12\" width=\"980\"></td>\n</tr>\n"
        ."<tr>\n<td><img src=\"themes/$thename/images/header2.jpg\" alt=\""._WELCOMETO." $sitename\" border=\"0\" height=\"125\" width=\"980\"></td>\n</tr>\n"
        ."</table>\n";
} else {
    echo "<table cellpadding=\"0\" cellspacing=\"0\" width=\"$thewidth\" border=\"0\" align=\"center\">\n"
        ."<tr>\n<td><img src=\"themes/$thename/images/barhead1.gif\" height=\"12\" width=\"760\"></td>\n</tr>\n"
        ."<tr>\n<td><img src=\"themes/$thename/images/header1.jpg\" alt=\""._WELCOMETO." $sitename\" border=\"0\" height=\"95\" width=\"760\"></td>\n</tr>\n"
        ."</table>\n";
}

    echo "<table cellpadding=\"0\" cellspacing=\"0\" width=\"$thewidth\" border=\"0\" align=\"center\" bgcolor=\"#fefefe\">\n"
        ."<tr>\n<td bgcolor=\"$textcolor1\" colspan=\"3\"><IMG src=\"themes/$thename/images/pixel.gif\" width=\"1\" height=\"1\" alt=\"\" border=\"0\" hspace=\"0\"></td>\n</tr>\n"
        ."<tr bgcolor=\"$bgcolor1\">\n<td align=\"left\" width=\"33%\"><font size=\"2\" color=\"#363636\">\n";
    if ($username == $anonymous) {
        echo "&nbsp;<a href=\"user.php?op=new_user\">"._NEWUSER."</a></b> / <b><a href=\"user.php\">"._USERLOGIN."</a>\n";
    } else {
        echo "&nbsp;"._TWELCOME." $username: <a href=\"user.php\">"._TACCOUNT."</a> | <a href=\"user.php?op=logout\">"._LOGOUT."</a>";
    }
    echo "</font></td>\n"
        ." <td align=\"center\" width=\"34%\"><font size=\"2\" color=\"#363636\">\n";
    $result = sql_query("select type, var, count from $prefix"._counter." order by type desc", $dbi);
    while(list($type, $var, $count) = sql_fetch_row($result, $dbi)) {
        if(($type == "total") && ($var == "hits")) {
            $total = $count;
            echo  ""._WERECEIVED." $total "._PAGESVIEWS." $startdate\n";
        }
    }
    echo "</font></td>\n"
        ."<td align=\"right\" width=\"33%\"><font size=\"2\">\n";
        $numrows = sql_num_rows(sql_query("select uid from $prefix"._users."", $dbi), $dbi);
    echo ""._WEHAVE." $numrows "._REGSOFAR."&nbsp;</font>\n</td>\n</tr>\n"
        ."<tr>\n<td bgcolor=\"$textcolor1\" colspan=\"3\"><IMG src=\"themes/$thename/images/pixel.gif\" width=\"1\" height=\"1\" alt=\"\" border=\"0\" hspace=\"0\"></td>\n"
        ."</tr>\n</table>\n"
        ."<table width=\"$thewidth\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\"><tr valign=\"top\">\n"
        ."<td><img src=\"themes/$thename/images/pixel.gif\" width=\"1\" height=\"5\" border=\"0\" alt=\"\"></td></tr></table>\n"
        ."<table width=\"$thewidth\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\"><tr valign=\"top\">\n"
        ."<td width=\"160\" valign=\"top\">\n";
    blocks(left);
    echo "</td><td><img src=\"themes/$thename/images/pixel.gif\" width=\"5\" height=\"1\" border=\"0\" alt=\"\"></td><td width=\"100%\" bgcolor=\"$bgcolor1\">\n";
    if ($banners) {
        OpenTable2();
        echo "<center>";
        include("banners.php");
        echo "</center>";
        CloseTable2();
        echo "<br>";
    }
}

/************************************************************/
/* Function themefooter()                                   */
/************************************************************/

function themefooter() {
    global $tableset, $index, $thewidth, $thename, $bgcolor1, $bgcolor2, $bgcolor3, $bgcolor4, $bgcolor5, $textcolor1, $textcolor2;
    echo "</td><td><img src=\"themes/$thename/images/pixel.gif\" width=\"5\" height=\"1\" border=\"0\" alt=\"\"></td><td valign=\"top\" width=\"160\">\n";
          blocks(right);
    echo "</td></tr></table>\n"
        ."<table width=\"$thewidth\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\"><tr valign=\"top\">\n"
        ."<td><img src=\"themes/$thename/images/pixel.gif\" width=\"1\" height=\"5\" border=\"0\" alt=\"\"></td></tr></table>\n";

if ($tableset == "3") {
    echo "<table width=\"$thewidth\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\"><tr valign=\"top\">\n"
        ."<td><img src=\"themes/$thename/images/barhead3.gif\" height=\"12\" width=\"1230\"></td>\n"
        ."</tr></table>\n";
} else if ($tableset == "2") {
    echo "<table width=\"$thewidth\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\"><tr valign=\"top\">\n"
        ."<td><img src=\"themes/$thename/images/barhead2.gif\" height=\"12\" width=\"980\"></td>\n"
        ."</tr></table>\n";
} else {
    echo "<table width=\"$thewidth\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\"><tr valign=\"top\">\n"
        ."<td><img src=\"themes/$thename/images/barhead1.gif\" height=\"12\" width=\"760\"></td>\n"
        ."</tr></table>\n";
}

    echo "<table width=\"$thewidth\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" bgcolor=\"$bgcolor5\" align=\"center\"><tr valign=\"top\">\n"
        ."</tr><tr align=\"center\">\n<td width=\"100%\" colspan=\"3\">";
         footmsg();
    echo "</td>\n</tr>\n</table>\n";
    echo "<br><br><center><font class=\"tiny\">$thename Theme by <a href=\"http://www.nukescripts.com\" target=\"_blank\">Nuke Scripts</a>.</font></center>\n";
}

/************************************************************/
/* Function themeindex()                                    */
/************************************************************/

function themeindex ($aid, $informant, $time, $title, $counter, $topic, $thetext, $notes, $morelink, $topicname, $topicimage, $topictext) {
    global $anonymous, $bgcolor1, $bgcolor2, $bgcolor3, $bgcolor4, $bgcolor5, $textcolor1, $textcolor2;
    echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\"><tr><td>\n"
        ."<table border=\"0\" cellpadding=\"3\" cellspacing=\"1\" bgcolor=\"$textcolor1\" width=\"100%\"><tr>\n"
        ."<td bgcolor=\"$bgcolor5\" align=\"left\">\n"
        ."<font size=\"3\" color=\"#363636\"><b>$title</b></font><br>\n"
        .""._POSTEDON." $datetime $time $timezone ($counter "._READS.")\n"
        ."<br><b>"._TOPIC.":</b> <a href=\"stories.php?op=newindex&amp;topic=$topic\">$topictext</a>\n"
        ."</td></tr>\n"
        ."<tr><td bgcolor=\"$bgcolor1\"><table border=\"0\" cellpadding=\"2\" cellspacing=\"0\" width=\"100%\">\n";
    FormatStory($thetext, $notes, $aid, $informant);
    echo "</td></tr></table></td></tr>\n"
    ."<tr><td bgcolor=\"$bgcolor1\" align=\"right\">\n"
        ."<font size=\"2\">$morelink</font>\n"
        ."</td></tr></table></td></tr></table>\n"
        ."<br>\n\n\n";
}

/************************************************************/
/* Function themearticle()                                  */
/************************************************************/

function themearticle ($aid, $informant, $datetime, $title, $thetext, $topic, $topicname, $topicimage, $topictext) {
    global $admin, $sid, $bgcolor1, $bgcolor2, $bgcolor3, $bgcolor4, $bgcolor5, $textcolor1, $textcolor2;
    echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\"><tr><td>\n"
        ."<table border=\"0\" cellpadding=\"3\" cellspacing=\"1\" bgcolor=\"$textcolor1\" width=\"100%\"><tr>\n"
        ."<td bgcolor=\"$bgcolor5\" align=\"left\">\n"
        ."<font size=\"3\" color=\"#363636\"><b>$title</b></font><br>\n"
        .""._POSTEDON." $datetime $time $timezone ($counter "._READS.")\n"
        ."<br><b>"._TOPIC.":</b> <a href=\"stories.php?op=newindex&amp;topic=$topic\">$topictext</a>\n";
    if (is_admin($admin)) {
        echo " [ <a href=\"admin.php?op=EditStory&amp;sid=$sid\">"._EDIT."</a> | <a href=\"admin.php?op=RemoveStory&amp;sid=$sid\">"._DELETE."</a> ]\n";
    }
    echo "</td></tr>\n"
        ."<tr><td bgcolor=\"$bgcolor1\"><table border=\"0\" cellpadding=\"2\" cellspacing=\"0\" width=\"100%\">\n";
    FormatStory($thetext, $notes="", $aid, $informant);
    echo "</td></tr></table></td></tr></table></td></tr></table><br>\n\n\n";
}

/************************************************************/
/* Function themesidebox()                                  */
/************************************************************/

function themesidebox($title, $content) {
    global $thename, $bgcolor1, $bgcolor2, $bgcolor3, $bgcolor4, $bgcolor5, $textcolor1, $textcolor2;
    echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"$bgcolor2\" width=\"160\"><tr><td>\n"
    ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"160\">\n"
    ."<tr>\n"
    ."<td><img src=\"themes/$thename/images/barside.gif\" height=\"12\" width=\"160\"></td>\n"
    ."</tr>\n"
    ."</table>\n"

        ."<table border=\"0\" cellpadding=\"3\" cellspacing=\"1\" bgcolor=\"$textcolor1\" width=\"100%\">\n"
        ."<tr><td bgcolor=\"$bgcolor5\" align=\"center\">\n"
        ."<font size=\"2\" color=\"#363636\"><b>$title</b></font>\n"
        ."</td></tr>\n"
        ."<tr>\n"
        ."<td bgcolor=\"$bgcolor2\">$content</td>\n"
        ."</tr>\n"
        ."</table></td></tr></table>\n"
        ."<br>\n\n\n";
}

?>
