<?php

/********************************************************/
/* UGreen Theme for PHP-Nuke 5.3.0-5.4.0                */
/* By: Nuke Scripts (webmaster@nukescripts.com)         */
/* http://www.nukescripts.com                           */
/* Copyright © 2002, All right reserved                 */
/********************************************************/

global $bgcolor1, $bgcolor2, $bgcolor3, $bgcolor4, $bgcolor5, $textcolor1, $textcolor2, $textcolor3, $thewidth, $thename;
$thename = "UGreen";
$thewidth = "95%";
$bgcolor1 = "#E7FFFF";
$bgcolor2 = "#339952";
$bgcolor3 = "#C2ECCF";
$bgcolor4 = "#EEEEEE";
$bgcolor5 = "#FFFFFF";
$textcolor1 = "#FFFFFF";
$textcolor2 = "#cccccc";
$textcolor3 = "#F8ECD0";

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
        echo "$thetext<br>$notes\n";
    } else {
        if($informant != "") {
            $boxstuff = "<a href=\"user.php?op=userinfo&amp;uname=$informant\">$informant</a> ";
        } else {
            $boxstuff = "$anonymous ";
        }
        $boxstuff .= ""._WRITES." <i>\"$thetext\"</i> $notes\n";
        echo "$boxstuff\n";
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
    global $dbi, $startdate, $user_prefix, $prefix, $thewidth, $thename, $bgcolor5, $user, $banners, $sitename, $slogan, $cookie;
    cookiedecode($user);
    $username = $cookie[1];
    if ($username == "") {
        $username = $anonymous;
    }
    echo "<body topmargin=\"2\" leftmargin=\"0\" marginwidth=\"0\" marginheight=\"0\" bgcolor=\"#FFFFFF\" text=\"#000000\" link=\"#000000\" vlink=\"#000000\" alink=\"#000000\">\n";
         if ($banners) {
             include("banners.php");
         }
    echo "<center>\n"
        ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"$thewidth\">\n"
        ."  <tr>\n"
        ."    <td width=\"4\"><img border=\"0\" src=\"themes/$thename/images/toplefti.gif\" width=\"4\" height=\"4\"></td>\n"
        ."    <td background=\"themes/$thename/images/topi.gif\"><img border=\"0\" src=\"themes/$thename/images/topi.gif\" width=\"152\" height=\"4\"></td>\n"
        ."    <td width=\"4\"><img border=\"0\" src=\"themes/$thename/images/toprighti.gif\" width=\"4\" height=\"4\"></td>\n"
        ."</tr>\n<tr>\n"
        ."  <td background=\"themes/$thename/images/midlefti.gif\" width=\"4\"><img border=\"0\" src=\"themes/$thename/images/midlefti.gif\" width=\"4\" height=\"30\"></td>\n"
        ."  <td class=\"blockitem\" align=\"left\"><img border=\"0\" src=\"themes/$thename/images/logo.jpg\"></td>\n"
        ."  <td background=\"themes/$thename/images/midrighti.gif\" width=\"4\"><img border=\"0\" src=\"themes/$thename/images/midrighti.gif\" width=\"4\" height=\"30\"></td>\n"
        ."</tr>\n<tr>\n"
        ."  <td width=\"4\"><img border=\"0\" src=\"themes/$thename/images/botlefti.gif\" width=\"4\" height=\"4\"></td>\n"
        ."  <td background=\"themes/$thename/images/boti.gif\"><img border=\"0\" src=\"themes/$thename/images/boti.gif\" width=\"152\" height=\"4\"></td>\n"
        ."  <td width=\"4\"><img border=\"0\" src=\"themes/$thename/images/botrighti.gif\" width=\"4\" height=\"4\"></td>\n"
        ."</tr>\n"
        ."</table>\n</center>\n"
        ."<table width=\"$thewidth\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" bgcolor=\"$bgcolor5\" align=\"center\"><tr valign=top>\n"
        ."<td bgcolor=\"$bgcolor5\"><img src=\"themes/$thename/images/pixel.gif\" width=\"1\" height=\"10\" border=\"0\"></td></tr></table>\n"
        ."<center>\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"$thewidth\">\n"
        ."    <tr>\n"
        ."      <td width=\"20\"><img border=\"0\" src=\"themes/$thename/images/toplefta.gif\" width=\"20\" height=\"4\"></td>\n"
        ."      <td background=\"themes/$thename/images/top.gif\"><img border=\"0\" src=\"themes/$thename/images/top.gif\" width=\"136\" height=\"4\"></td>\n"
        ."      <td background=\"themes/$thename/images/top.gif\"><img border=\"0\" src=\"themes/$thename/images/top.gif\" width=\"136\" height=\"4\"></td>\n"
        ."      <td background=\"themes/$thename/images/top.gif\"><img border=\"0\" src=\"themes/$thename/images/top.gif\" width=\"136\" height=\"4\"></td>\n"
        ."      <td width=\"20\"><img border=\"0\" src=\"themes/$thename/images/toprighta.gif\" width=\"20\" height=\"4\"></td>\n"
        ."    </tr>\n"
        ."    <tr>\n"
        ."      <td background=\"themes/$thename/images/midlefta.gif\" width=\"20\"><img border=\"0\" src=\"themes/$thename/images/midlefta.gif\" width=\"20\" height=\"14\"></td>\n"
        ."      <td align=\"left\" class=\"boxtitle\" width=\"33%\"><b>\n";
    if ($username == $anonymous) {
      echo "&nbsp;<a href=\"user.php?op=new_user\" class=\"header\">"._NEWUSER."</a></b> / <b><a href=\"user.php\" class=\"header\">"._USERLOGIN."</a>\n";
    } else {
      echo "&nbsp;"._TWELCOME." $username: <a href=\"user.php\" class=\"header\">"._TACCOUNT."</a> | <a href=\"user.php?op=logout\" class=\"header\">"._LOGOUT."</a>";
    }
    echo "</b></td>\n"
        ." <td align=\"center\" class=\"boxtitle\" width=\"34%\"><b>\n";
$result = sql_query("select type, var, count from $prefix"._counter." order by type desc", $dbi);
while(list($type, $var, $count) = sql_fetch_row($result, $dbi)) {
	if(($type == "total") && ($var == "hits")) {
		$total = $count;
    echo  ""._WERECEIVED." $total "._PAGESVIEWS." $startdate\n";
	}
	}
    echo "</b></td>\n"
        ."<td align=\"right\" class=\"boxtitle\" width=\"33%\"><b>\n";
        $numrows = sql_num_rows(sql_query("select uid from $user_prefix"._users."", $dbi), $dbi);
    echo ""._WEHAVE." $numrows "._REGSOFAR."&nbsp;</b></td>\n"
        ."<td background=\"themes/$thename/images/midrighta.gif\" width=\"20\"><img border=\"0\" src=\"themes/$thename/images/midrighta.gif\" width=\"20\" height=\"14\"></td>\n"
        ."</tr>\n"
        ."<tr>\n"
        ."  <td width=\"20\"><img border=\"0\" src=\"themes/$thename/images/botlefta.gif\" width=\"20\" height=\"4\"></td>\n"
        ."  <td background=\"themes/$thename/images/bot.gif\"><img border=\"0\" src=\"themes/$thename/images/bot.gif\" width=\"136\" height=\"4\"></td>\n"
        ."  <td background=\"themes/$thename/images/bot.gif\"><img border=\"0\" src=\"themes/$thename/images/bot.gif\" width=\"136\" height=\"4\"></td>\n"
        ."  <td background=\"themes/$thename/images/bot.gif\"><img border=\"0\" src=\"themes/$thename/images/bot.gif\" width=\"136\" height=\"4\"></td>\n"
        ."  <td width=\"20\"><img border=\"0\" src=\"themes/$thename/images/botrighta.gif\" width=\"20\" height=\"4\"></td>\n"
        ."</tr>\n"
        ."</table>\n"
        ."</center>\n"
        ."<!-- END HEADER -->\n"
        ."<table width=\"$thewidth\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" bgcolor=\"$bgcolor5\" align=\"center\"><tr valign=top>\n"
        ."<td bgcolor=\"$bgcolor5\"><img src=\"themes/$thename/images/pixel.gif\" width=\"1\" height=\"10\" border=\"0\"></td></tr></table>\n"
        ."<table width=\"$thewidth\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" bgcolor=\"$bgcolor5\" align=\"center\"><tr valign=top>\n"
        ."<td bgcolor=\"$bgcolor5\" width=\"160\" valign=\"top\">\n";
         blocks(left);
    echo "</td><td><img src=themes/$thename/images/pixel.gif width=15 height=1 border=0></td><td width=100%>\n";

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
global $thename, $thewidth, $index, $bgcolor5;
    echo "</td><td><img src=themes/$thename/images/pixel.gif width=15 height=1 border=0></td><td align=\"right\" valign=\"top\" bgcolor=\"$bgcolor5\">";
         blocks(right);
    echo "</td></tr></table></td></tr></table>"
        ."<table width=\"$thewidth\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" bgcolor=\"$bgcolor5\" align=\"center\"><tr valign=top>\n"
        ."<td bgcolor=\"$bgcolor5\"><img src=\"themes/$thename/images/pixel.gif\" width=\"1\" height=\"10\" border=\"0\"></td></tr></table>\n"
        ."<center>"
        ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"$thewidth\">"
        ."  <tr>"
        ."    <td width=\"20\"><img border=\"0\" src=\"themes/$thename/images/toplefta.gif\" width=\"20\" height=\"4\"></td>"
        ."    <td background=\"themes/$thename/images/top.gif\"><img border=\"0\" src=\"themes/$thename/images/top.gif\" width=\"136\" height=\"4\"></td>"
        ."    <td width=\"4\"><img border=\"0\" src=\"themes/$thename/images/toprighta.gif\" width=\"20\" height=\"4\"></td>"
        ."  </tr>"
        ."  <tr>"
        ."    <td background=\"themes/$thename/images/midlefta.gif\" width=\"20\"><img border=\"0\" src=\"themes/$thename/images/midlefta.gif\" width=\"20\" height=\"14\"></td>"
        ."    <td align=\"center\" class=\"boxtitle\">&nbsp;</td>"
        ."    <td background=\"themes/$thename/images/midrighta.gif\" width=\"4\"><img border=\"0\" src=\"themes/$thename/images/midrighta.gif\" width=\"20\" height=\"14\"></td>"
        ."  </tr>"
        ."  <tr>"
        ."    <td width=\"20\"><img border=\"0\" src=\"themes/$thename/images/botlefta.gif\" width=\"20\" height=\"4\"></td>"
        ."    <td background=\"themes/$thename/images/bot.gif\"><img border=\"0\" src=\"themes/$thename/images/bot.gif\" width=\"136\" height=\"4\"></td>"
        ."    <td width=\"4\"><img border=\"0\" src=\"themes/$thename/images/botrighta.gif\" width=\"20\" height=\"4\"></td>"
        ."  </tr>"
        ."</table>"
        ."</center>"
        ."<table width=\"$thewidth\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" bgcolor=\"$bgcolor5\" align=\"center\"><tr valign=top>\n"
        ."<td bgcolor=\"$bgcolor5\"><img src=\"themes/$thename/images/pixel.gif\" width=\"1\" height=\"10\" border=\"0\"></td></tr></table>\n"
        ."<center><table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"$thewidth\">\n"

        ."  <tr>\n"
        ."    <td width=\"4\"><img border=\"0\" src=\"themes/$thename/images/toplefti.gif\" width=\"4\" height=\"4\"></td>\n"
        ."    <td background=\"themes/$thename/images/topi.gif\"><img border=\"0\" src=\"themes/$thename/images/topi.gif\" width=\"152\" height=\"4\"></td>\n"
        ."    <td width=\"4\"><img border=\"0\" src=\"themes/$thename/images/toprighti.gif\" width=\"4\" height=\"4\"></td>\n"
        ."</tr>\n"

        ."<tr>\n"
        ."  <td background=\"themes/$thename/images/midlefti.gif\" width=\"4\"><img border=\"0\" src=\"themes/$thename/images/midlefti.gif\" width=\"4\" height=\"30\"></td>\n"
        ."  <td class=\"boxcontent\" align=\"center\">\n";
         footmsg();
    echo "  </td>\n"
        ."  <td background=\"themes/$thename/images/midrighti.gif\" width=\"4\"><img border=\"0\" src=\"themes/$thename/images/midrighti.gif\" width=\"4\" height=\"30\"></td>\n"
        ."</tr>\n"

        ."<tr>\n"
        ."  <td width=\"4\"><img border=\"0\" src=\"themes/$thename/images/botlefti.gif\" width=\"4\" height=\"4\"></td>\n"
        ."  <td background=\"themes/$thename/images/boti.gif\"><img border=\"0\" src=\"themes/$thename/images/boti.gif\" width=\"152\" height=\"4\"></td>\n"
        ."  <td width=\"4\"><img border=\"0\" src=\"themes/$thename/images/botrighti.gif\" width=\"4\" height=\"4\"></td>\n"
        ."</tr>\n"

        ."</table></center>\n";
    echo "<br><br><center><font class=\"tiny\">$thename Theme by <a href=\"http://www.nukescripts.com\" target=\"_blank\">Nuke Scripts</a>.</font></center>\n";
}

/************************************************************/
/* Function themeindex()                                    */
/*                                                          */
/* Control the header for your site. You need to define the */
/* BODY tag and in some part of the code call the blocks    */
/* function for left side with: blocks(left);               */
/************************************************************/

function themeindex ($aid, $informant, $time, $title, $counter, $topic, $thetext, $notes, $morelink, $topicname, $topicimage, $topictext) {
    global $thename, $anonymous, $admin;
    echo "<center>"
        ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">"
        ."  <tr>"
        ."    <td width=\"20\"><img border=\"0\" src=\"themes/$thename/images/toplefta.gif\" width=\"20\" height=\"4\"></td>"
        ."    <td background=\"themes/$thename/images/top.gif\"><img border=\"0\" src=\"themes/$thename/images/top.gif\" width=\"100\" height=\"4\"></td>"
        ."    <td width=\"20\"><img border=\"0\" src=\"themes/$thename/images/toprighta.gif\" width=\"20\" height=\"4\"></td>"
        ."  </tr>"
        ."  <tr>"
        ."    <td width=\"20\" background=\"themes/$thename/images/midlefta.gif\"><img border=\"0\" src=\"themes/$thename/images/midlefta.gif\" width=\"20\" height=\"18\"></td>"
        ."    <td class=\"storytitle\"><b>&nbsp;&nbsp;$title</b></td>"
        ."    <td width=\"20\" background=\"themes/$thename/images/midrighta.gif\"><img border=\"0\" src=\"themes/$thename/images/midrighta.gif\" width=\"20\" height=\"18\"></td>"
        ."  </tr>"
        ."  <tr>"
        ."    <td width=\"20\"><img border=\"0\" src=\"themes/$thename/images/botlefta.gif\" width=\"20\" height=\"4\"></td>"
        ."    <td background=\"themes/$thename/images/bot.gif\"><img border=\"0\" src=\"themes/$thename/images/bot.gif\" width=\"100\" height=\"4\"></td>"
        ."    <td width=\"20\"><img border=\"0\" src=\"themes/$thename/images/botrighta.gif\" width=\"20\" height=\"4\"></td>"
        ."  </tr>"
        ."  <tr><td colspan=\"3\"><img border=\"0\" src=\"themes/$thename/images/space.gif\" width=\"2\" height=\"2\"></td></tr>\n"
        ."</table>"
        ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">"
        ."<tr>\n"
        ."  <td width=\"4\"><img border=\"0\" src=\"themes/$thename/images/toplefti.gif\" width=\"4\" height=\"4\"></td>\n"
        ."  <td background=\"themes/$thename/images/topi.gif\"><img border=\"0\" src=\"themes/$thename/images/topi.gif\" width=\"152\" height=\"4\"></td>\n"
        ."  <td width=\"4\"><img border=\"0\" src=\"themes/$thename/images/toprighti.gif\" width=\"4\" height=\"4\"></td>\n"
        ."</tr>\n"
        ."  <tr>"
        ."  <td background=\"themes/$thename/images/midlefti.gif\"><img border=\"0\" src=\"themes/$thename/images/midlefti.gif\" width=\"4\" height=\"30\"></td>\n"
        ."    <td class=\"content\">"
        ."    &nbsp;&nbsp;"._POSTEDBY." <b>";
         formatAidHeader($aid);
    echo "</b> "._ON." $time $timezone ($counter "._READS.")<br>";
         if ($aid == $informant) {
            $boxstuff = "$thetext";
         } else {
         if ($informant != "") {
            $boxstuff = "<a href=\"user.php?op=userinfo&uname=$informant\">$informant</a> ";
         } else {
            $boxstuff = "$anonymous ";
         }
            $boxstuff .= ""._WRITES." <i>\"$thetext\"</i> $notes";
         }
    echo "&nbsp;&nbsp;"._TOPIC.": <a href=\"search.php?query=&topic=$topic\">$topictext</a><br><br>"
        ."      <a href=\"search.php?query=&topic=$topic\"><img src=\"images/topics/$topicimage\" Alt=\"$topictext\" align=\"right\" border=\"0\"></a>"
        ."      $boxstuff<br><br>"
        ."    </td>"
        ."  <td background=\"themes/$thename/images/midrighti.gif\"><img border=\"0\" src=\"themes/$thename/images/midrighti.gif\" width=\"4\" height=\"30\"></td>\n"
        ."  </tr>"
        ."<tr>\n"
        ."  <td width=\"4\"><img border=\"0\" src=\"themes/$thename/images/botlefti.gif\" width=\"4\" height=\"4\"></td>\n"
        ."  <td background=\"themes/$thename/images/boti.gif\"><img border=\"0\" src=\"themes/$thename/images/boti.gif\" width=\"152\" height=\"4\"></td>\n"
        ."  <td width=\"4\"><img border=\"0\" src=\"themes/$thename/images/botrighti.gif\" width=\"4\" height=\"4\"></td>\n"
        ."</tr>\n"
        ."</table>"
        ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">"
        ."  <tr>"
        ."    <td width=\"4\"><img border=\"0\" src=\"themes/$thename/images/space.gif\" width=\"2\" height=\"2\"></td>"
        ."    <td><img border=\"0\" src=\"themes/$thename/images/space.gif\" width=\"2\" height=\"2\"></td>"
        ."    <td width=\"4\"><img border=\"0\" src=\"themes/$thename/images/space.gif\" width=\"2\" height=\"2\"></td>"
        ."  </tr>"
        ."<tr>\n"
        ."  <td width=\"4\"><img border=\"0\" src=\"themes/$thename/images/toplefti.gif\" width=\"4\" height=\"4\"></td>\n"
        ."  <td background=\"themes/$thename/images/topi.gif\"><img border=\"0\" src=\"themes/$thename/images/topi.gif\" width=\"152\" height=\"4\"></td>\n"
        ."  <td width=\"4\"><img border=\"0\" src=\"themes/$thename/images/toprighti.gif\" width=\"4\" height=\"4\"></td>\n"
        ."</tr>\n"
        ."  <tr>"
        ."  <td background=\"themes/$thename/images/midlefti.gif\"><img border=\"0\" src=\"themes/$thename/images/midlefti.gif\" width=\"4\" height=\"30\"></td>\n"
        ."    <td align=\"right\">";
    echo "$morelink&nbsp;&nbsp;</td>"
        ."  <td background=\"themes/$thename/images/midrighti.gif\"><img border=\"0\" src=\"themes/$thename/images/midrighti.gif\" width=\"4\" height=\"30\"></td>\n"
        ."  </tr>"
        ."<tr>\n"
        ."  <td width=\"4\"><img border=\"0\" src=\"themes/$thename/images/botlefti.gif\" width=\"4\" height=\"4\"></td>\n"
        ."  <td background=\"themes/$thename/images/boti.gif\"><img border=\"0\" src=\"themes/$thename/images/boti.gif\" width=\"152\" height=\"4\"></td>\n"
        ."  <td width=\"4\"><img border=\"0\" src=\"themes/$thename/images/botrighti.gif\" width=\"4\" height=\"4\"></td>\n"
        ."</tr>\n"
        ."</table>"
        ."</center><br><br>";

}

/************************************************************/
/* Function themearticle()                                  */
/*                                                          */
/* Control the header for your site. You need to define the */
/* BODY tag and in some part of the code call the blocks    */
/* function for left side with: blocks(left);               */
/************************************************************/

function themearticle ($aid, $informant, $datetime, $title, $thetext, $topic, $topicname, $topicimage, $topictext) {
    global $thename, $bgcolor1, $admin, $sid;
    echo "<center>"
        ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">"
        ."    <td width=\"20\"><img border=\"0\" src=\"themes/$thename/images/toplefta.gif\" width=\"20\" height=\"4\"></td>"
        ."    <td background=\"themes/$thename/images/top.gif\"><img border=\"0\" src=\"themes/$thename/images/top.gif\" width=\"100\" height=\"4\"></td>"
        ."    <td width=\"20\"><img border=\"0\" src=\"themes/$thename/images/toprighta.gif\" width=\"20\" height=\"4\"></td>"
        ."  </tr>"
        ."  <tr>"
        ."    <td width=\"20\" background=\"themes/$thename/images/midlefta.gif\"><img border=\"0\" src=\"themes/$thename/images/midlefta.gif\" width=\"20\" height=\"18\"></td>"
        ."    <td class=\"storytitle\" bgcolor=\"$bgcolor1\"><b>&nbsp;&nbsp;$title</b></td>"
        ."    <td width=\"20\" background=\"themes/$thename/images/midrighta.gif\"><img border=\"0\" src=\"themes/$thename/images/midrighta.gif\" width=\"20\" height=\"18\"></td>"
        ."  </tr>"
        ."  <tr>"
        ."    <td width=\"20\"><img border=\"0\" src=\"themes/$thename/images/botlefta.gif\" width=\"20\" height=\"4\"></td>"
        ."    <td background=\"themes/$thename/images/bot.gif\"><img border=\"0\" src=\"themes/$thename/images/bot.gif\" width=\"100\" height=\"4\"></td>"
        ."    <td width=\"20\"><img border=\"0\" src=\"themes/$thename/images/botrighta.gif\" width=\"20\" height=\"4\"></td>"
        ."  </tr>"
        ."  <tr><td colspan=\"3\"><img border=\"0\" src=\"themes/$thename/images/space.gif\" width=\"2\" height=\"2\"></td></tr>\n"
        ."</table>"
        ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">"
        ."<tr>\n"
        ."  <td width=\"4\"><img border=\"0\" src=\"themes/$thename/images/toplefti.gif\" width=\"4\" height=\"4\"></td>\n"
        ."  <td background=\"themes/$thename/images/topi.gif\"><img border=\"0\" src=\"themes/$thename/images/topi.gif\" width=\"152\" height=\"4\"></td>\n"
        ."  <td width=\"4\"><img border=\"0\" src=\"themes/$thename/images/toprighti.gif\" width=\"4\" height=\"4\"></td>\n"
        ."</tr>\n"
        ."  <tr>"
        ."  <td background=\"themes/$thename/images/midlefti.gif\"><img border=\"0\" src=\"themes/$thename/images/midlefti.gif\" width=\"4\" height=\"30\"></td>\n"
        ."    <td class=\"content\">"
        ."    &nbsp;&nbsp;"._POSTEDON." $datetime";
         if ($admin) {
            echo "&nbsp;&nbsp;[ <a href=\"admin.php?op=EditStory&sid=$sid\">"._EDIT."</a> | <a href=\"admin.php?op=RemoveStory&sid=$sid\">"._DELETE."</a> ]";
         }
    echo "<br>&nbsp;&nbsp;"._TOPIC.": <a href=\"search.php?query=&topic=$topic&author=\">$topictext</a><br><br>";
         if ($aid == $informant) {
            $boxstuff = "$thetext";
         } else {
         if($informant != "") {
            $boxstuff = "<a href=\"user.php?op=userinfo&uname=$informant\">$informant</a> ";
         } else {
            $boxstuff = "$anonymous ";
         }
            $boxstuff .= ""._WRITES." <i>\"$thetext\"</i> $notes";
         }
    echo "    <a href=\"search.php?query=&topic=$topic\"><img src=\"images/topics/$topicimage\" Alt=\"$topictext\" align=\"right\" border=\"0\"></a>"
        ."    $boxstuff<br><br>"
        ."    </td>"
        ."    </td>"
        ."  <td background=\"themes/$thename/images/midrighti.gif\"><img border=\"0\" src=\"themes/$thename/images/midrighti.gif\" width=\"4\" height=\"30\"></td>\n"
        ."  </tr>"
        ."<tr>\n"
        ."  <td width=\"4\"><img border=\"0\" src=\"themes/$thename/images/botlefti.gif\" width=\"4\" height=\"4\"></td>\n"
        ."  <td background=\"themes/$thename/images/boti.gif\"><img border=\"0\" src=\"themes/$thename/images/boti.gif\" width=\"152\" height=\"4\"></td>\n"
        ."  <td width=\"4\"><img border=\"0\" src=\"themes/$thename/images/botrighti.gif\" width=\"4\" height=\"4\"></td>\n"
        ."</tr>\n"
        ."  <tr><td colspan=\"3\"><img border=\"0\" src=\"themes/$thename/images/space.gif\" width=\"2\" height=\"2\"></td></tr>\n"
        ."</table>"
        ."</center><br><br>";


}

/************************************************************/
/* Function themesidebox()                                  */
/*                                                          */
/* Control the header for your site. You need to define the */
/* BODY tag and in some part of the code call the blocks    */
/* function for left side with: blocks(left);               */
/************************************************************/

function themesidebox($title, $content) {
    global $thename;
    echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"160\">\n"
        ."<tr><td><img border=\"0\" src=\"themes/$thename/images/toplefta.gif\" width=\"20\" height=\"4\"></td>\n"
        ."<td><img border=\"0\" src=\"themes/$thename/images/top.gif\" width=\"120\" height=\"4\"></td>\n"
        ."<td><img border=\"0\" src=\"themes/$thename/images/toprighta.gif\" width=\"20\" height=\"4\"></td></tr>\n"
        ."<tr><td background=\"themes/$thename/images/midlefta.gif\"><img border=\"0\" src=\"themes/$thename/images/midlefta.gif\" width=\"20\" height=\"14\"></td>\n"
        ."<td align=\"center\" class=\"boxtitle\">$title</td>\n"
        ."<td background=\"themes/$thename/images/midrighta.gif\"><img border=\"0\" src=\"themes/$thename/images/midrighta.gif\" width=\"20\" height=\"14\"></td></tr>\n"
        ."<tr><td><img border=\"0\" src=\"themes/$thename/images/botlefta.gif\" width=\"20\" height=\"4\"></td>\n"
        ."<td><img border=\"0\" src=\"themes/$thename/images/bot.gif\" width=\"120\" height=\"4\"></td>\n"
        ."<td><img border=\"0\" src=\"themes/$thename/images/botrighta.gif\" width=\"20\" height=\"4\"></td></tr>\n"
        ."</table>\n";
    echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"160\">\n"
        ."<tr><td colspan=\"3\"><img border=\"0\" src=\"themes/$thename/images/space.gif\" width=\"2\" height=\"2\"></td></tr>\n"
        ."<tr><td><img border=\"0\" src=\"themes/$thename/images/toplefti.gif\" width=\"4\" height=\"4\"></td>\n"
        ."<td background=\"themes/$thename/images/topi.gif\"><img border=\"0\" src=\"themes/$thename/images/topi.gif\" width=\"152\" height=\"4\"></td>\n"
        ."<td><img border=\"0\" src=\"themes/$thename/images/toprighti.gif\" width=\"4\" height=\"4\"></td></tr>\n"
        ."<tr><td background=\"themes/$thename/images/midlefti.gif\"><img border=\"0\" src=\"themes/$thename/images/midlefti.gif\" width=\"4\" height=\"30\"></td>\n"
        ."<td class=\"boxcontent\">$content</td>\n"
        ."<td background=\"themes/$thename/images/midrighti.gif\"><img border=\"0\" src=\"themes/$thename/images/midrighti.gif\" width=\"4\" height=\"30\"></td></tr>\n"
        ."<tr><td><img border=\"0\" src=\"themes/$thename/images/botlefti.gif\" width=\"4\" height=\"4\"></td>\n"
        ."<td background=\"themes/$thename/images/boti.gif\"><img border=\"0\" src=\"themes/$thename/images/boti.gif\" width=\"152\" height=\"4\"></td>\n"
        ."<td><img border=\"0\" src=\"themes/$thename/images/botrighti.gif\" width=\"4\" height=\"4\"></td></tr>\n"
        ."</table><br>\n";

}

?>
