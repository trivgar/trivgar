<?php

/********************************************************/
/* ZBrown Theme for PHP-Nuke 5.3.0-5.4.0                */
/* By: Nuke Scripts (webmaster@nukescripts.com)         */
/* http://www.nukescripts.com                           */
/* Copyright © 2002, All right reserved                 */
/********************************************************/

global $bgcolor1, $bgcolor2, $bgcolor3, $bgcolor4, $bgcolor5, $textcolor1, $textcolor2, $textcolor3, $thewidth, $thename;
$thename = "ZBrown";
$thewidth = "95%";
$bgcolor1 = "#DDB47C";
$bgcolor2 = "#8A5328";
$bgcolor3 = "#AF6F3D";
$bgcolor4 = "#EEEEEE";
$bgcolor5 = "#FFFFFF";
$textcolor1 = "#FFFFFF";
$textcolor2 = "#CCCCCC";
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
/************************************************************/

function themeheader() {
    global $dbi, $startdate, $prefix, $thewidth, $thename, $bgcolor5, $user, $banners, $sitename, $slogan, $cookie;
    cookiedecode($user);
    $username = $cookie[1];
    if ($username == "") {
        $username = "Anonymous";
    }
    echo "<!-- BEGIN HEADER -->\n";
    echo "<body topmargin=\"2\" leftmargin=\"0\" marginwidth=\"0\" marginheight=\"0\" bgcolor=\"#FFFFFF\" text=\"#000000\" link=\"#000000\" vlink=\"#000000\" alink=\"#000000\">\n";
         if ($banners) {
             include("banners.php");
         }
    echo "<center>\n";
    echo "<table border=\"0\" cellpadding=\"2\" cellspacing=\"0\" width=\"$thewidth\">\n";
    echo "<tr><td class=\"boxtitle\">\n";
    echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\"><tr>\n";
    echo "<td class=\"blockitem\" width=\"10%\"><img border=\"0\" src=\"themes/$thename/images/logo.jpg\"></td>\n";
    echo "</tr></table>\n";
    echo "</td></tr>\n";
    echo "</table>\n";
    echo "<table width=\"$thewidth\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" bgcolor=\"$bgcolor5\" align=\"center\">\n";
    echo "<tr><td bgcolor=\"$bgcolor5\"><img src=\"images/pix.gif\" width=\"1\" height=\"10\" border=\"0\"></td></tr>\n";
    echo "</table>\n";
    echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"$thewidth\">\n";
    echo "<tr>\n";
    echo "<td align=\"left\" class=\"boxtitle\" width=\"33%\"><b>";
    if ($username == "Anonymous") {
      echo "&nbsp;<a href=\"user.php?op=new_user\" class=\"header\">"._NEWUSER."</a></b> / <b><a href=\"user.php\" class=\"header\">"._USERLOGIN."</a>\n";
    } else {
      echo "&nbsp;"._TWELCOME." $username: <a href=\"user.php\" class=\"header\">"._TACCOUNT."</a> | <a href=\"user.php?op=logout\" class=\"header\">"._LOGOUT."</a>";
    }
    echo "</b></td>\n";
    echo "<td align=\"center\" class=\"boxtitle\" width=\"34%\"><b>";
$result = sql_query("select type, var, count from $prefix"._counter." order by type desc", $dbi);
while(list($type, $var, $count) = sql_fetch_row($result, $dbi)) {
	if(($type == "total") && ($var == "hits")) {
		$total = $count;
    echo  ""._WERECEIVED." $total "._PAGESVIEWS." $startdate";
	}
	}
    echo "</b></td>\n";
    echo "<td class=\"boxtitle\" align=\"right\" width=\"33%\">\n";
    $numrows = sql_num_rows(sql_query("select uid from $prefix"._users."", $dbi), $dbi);
    echo ""._WEHAVE." $numrows "._REGSOFAR."\n&nbsp;&nbsp;</td>\n";
    echo "</tr>\n";
    echo "</table>\n";
    echo "<table width=\"$thewidth\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" bgcolor=\"$bgcolor5\" align=\"center\">\n";
    echo "<tr><td bgcolor=\"$bgcolor5\"><img src=\"images/pix.gif\" width=\"1\" height=\"10\" border=\"0\"></td></tr>\n";
    echo "</table>\n";
    echo "<table width=\"$thewidth\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" bgcolor=\"$bgcolor5\"><tr valign=top>\n";
    echo "<!-- END HEADER -->\n";
    echo "<!-- BEGIN SIDE BLOCKS -->\n";
    echo "<td bgcolor=\"$bgcolor5\" width=\"160\" valign=\"top\">\n";
         blocks(left);
    echo "</td>\n";
    echo "<!-- END SIDE BLOCKS -->\n";
    echo "<!-- BEGIN CENTER-LEFT -->\n";
    echo "<td><img src=images/pix.gif width=15 height=1 border=0></td><td width=100%>\n";
    echo "<!-- END CENTER-LEFT -->\n";

}

/************************************************************/
/* Function themefooter()                                   */
/************************************************************/

function themefooter() {
global $thename, $thewidth, $index, $bgcolor5;
    echo "</td>\n";
    echo "<!-- BEGIN CENTER-RIGHT -->\n";
    echo "<td><img src=\"images/pix.gif\" width=\"15\" height=\"1\" border=\"0\"></td>\n";
    echo "<!-- END CENTER-RIGHT -->\n";
    echo "<!-- BEGIN SIDE BLOCKS -->\n";
    echo "<td bgcolor=\"$bgcolor5\" width=\"160\" valign=\"top\">\n";
         blocks(right);
    echo "</td>\n";
    echo "<!-- END SIDE BLOCKS -->\n";
    echo "</td></tr></table>\n";
    echo "<!-- BEGIN FOOTER -->\n";
    echo "<center>\n";
    echo "<table width=\"$thewidth\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" bgcolor=\"$bgcolor5\" align=\"center\">\n";
    echo "<tr><td bgcolor=\"$bgcolor5\"><img src=\"images/pix.gif\" width=\"1\" height=\"10\" border=\"0\"></td></tr>\n";
    echo "</table>\n";
    echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"$thewidth\">\n";
    echo "<tr><td class=\"boxtitle\"><b>&nbsp;&nbsp;</b></td></tr>\n";
    echo "</table>\n";
    echo "<table width=\"$thewidth\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" bgcolor=\"$bgcolor5\" align=\"center\">\n";
    echo "<tr><td bgcolor=\"$bgcolor5\"><img src=\"images/pix.gif\" width=\"1\" height=\"10\" border=\"0\"></td></tr>\n";
    echo "</table>\n";
    echo "<table border=\"0\" cellpadding=\"2\" cellspacing=\"0\" width=\"$thewidth\">\n";
    echo "<tr><td class=\"boxtitle\">\n";
    echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\"><tr>\n";
    echo "<td class=\"boxcontent\" align=\"center\"><font class=tiny>\n";
         footmsg();
    echo "</font></td>\n";
    echo "</tr></table>\n";
    echo "</td></tr>\n";
    echo "</table>\n";
    echo "</center>\n";
    echo "<br><br><center><font class=\"tiny\">$thename Theme by <a href=\"http://bobmarion.hostbet.com\" target=\"_blank\"Bob Marion</a>.</font></center>\n";
    echo "<!-- END FOOTER -->\n";
}

/************************************************************/
/* Function themeindex()                                    */
/************************************************************/

function themeindex ($aid, $informant, $time, $title, $counter, $topic, $thetext, $notes, $morelink, $topicname, $topicimage, $topictext) {
    global $thename, $anonymous, $admin;

    echo "<!-- BEGIN STORY_HOME -->\n";
    echo "<center>\n";
    echo "<table border=\"0\" cellpadding=\"2\" cellspacing=\"0\" width=\"100%\" class=\"boxtitle\">\n";
    echo "<tr>\n";
    echo "<td class=\"boxtitle\">&nbsp;&nbsp;$title</td>\n";
    echo "</tr>\n";
    echo "<tr><td><table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n";
    echo "<tr>\n";
    echo "<td class=\"blockitem\">"._POSTEDBY." <b>";
          formatAidHeader($aid);
    echo "</b> "._ON." $time $timezone ($counter "._READS.")";
         if ($admin) {
            echo "&nbsp;&nbsp;[ <a href=\"admin.php?op=EditStory&sid=$sid\">"._EDIT."</a> | <a href=\"admin.php?op=RemoveStory&sid=$sid\">"._DELETE."</a> ]";
         }
    echo "</td>\n";
    echo "</tr>\n";
    echo "</table></td></tr>\n";
    echo "<tr><td><table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n";
    echo "<tr>\n";
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
    echo "<td class=\"blockitem\">$boxstuff</td>\n";
    echo "</tr>\n";
    echo "</table></td></tr>\n";
    echo "<tr><td><table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n";
    echo "<tr>\n";
    echo "<td class=\"blockitem\">$morelink</td>\n";
    echo "</tr>\n";
    echo "</table></td></tr>\n";
    echo "</table>\n";
    echo "</center>\n";
    echo "<br><br>\n";
    echo "<!-- END STORY_HOME -->\n";

}

/************************************************************/
/* Function themearticle()                                  */
/************************************************************/

function themearticle ($aid, $informant, $datetime, $title, $thetext, $topic, $topicname, $topicimage, $topictext) {
    global $thename, $bgcolor1, $admin, $sid;

    echo "<center>\n";
    echo "<table border=\"0\" cellpadding=\"2\" cellspacing=\"0\" width=\"100%\" class=\"boxtitle\">\n";
    echo "<tr>\n";
    echo "<td>&nbsp;&nbsp;$title&nbsp;&nbsp;</td>\n";
    echo "</tr>\n";
    echo "<tr><td><table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n";
    echo "<tr>\n";
    echo "<td class=\"blockitem\">&nbsp;&nbsp;"._POSTEDBY." <b>";
          formatAidHeader($aid);
    echo "</b> "._ON." $time $timezone ($counter "._READS.")";
         if ($admin) {
            echo "&nbsp;&nbsp;[ <a href=\"admin.php?op=EditStory&sid=$sid\">"._EDIT."</a> | <a href=\"admin.php?op=RemoveStory&sid=$sid\">"._DELETE."</a> ]";
         }
    echo "</td>\n";
    echo "</tr>\n";
    echo "</table></td></tr>\n";
    echo "<tr><td><table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n";
    echo "<tr>\n";
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
    echo "<td class=\"blockitem\">$boxstuff</td>\n";
    echo "</tr>\n";
    echo "</table></td></tr>\n";
    echo "<tr><td><table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n";
    echo "<tr>\n";
    echo "<td class=\"blockitem\">&nbsp;&nbsp;$morelink&nbsp;&nbsp;</td>\n";
    echo "</tr>\n";
    echo "</table></td></tr>\n";
    echo "</table>\n";
    echo "</center>\n";
    echo "<br><br>\n";
    echo "<!-- END STORY_HOME -->\n";

}

/************************************************************/
/* Function themesidebox()                                  */
/************************************************************/

function themesidebox($title, $content) {
    global $thename;

    echo "<!-- BEGIN BLOCK -->\n";
    echo "<table border=\"0\" cellpadding=\"1\" cellspacing=\"0\" width=\"160\" class=\"boxtitle\"><tr><td>\n";
    echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"160\" class=\"boxtitle\">\n";
    echo "<tr>\n";
    echo "<td class=\"boxtitle\">&nbsp;&nbsp;$title</td>\n";
    echo "</tr>\n";
    echo "<tr>\n";
    echo "<td><table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n";
    echo "<tr>\n";
    echo "<td class=\"boxcontent\">$content</td>\n";
    echo "</tr>\n";
    echo "</table></td>\n";
    echo "</tr>\n";
    echo "</table>\n";
    echo "</td></tr></table>\n";
    echo "<br>\n";
    echo "<!-- END BLOCK -->\n";

}

?>
