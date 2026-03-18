<?php

/************************************************************/
/* THEME NAME: Mtechnik_V1                                  */
/* THEME DEVELOPER: Mtechnik mtechnik.net                   */
/************************************************************/

/************************************************************/
/* Theme Colors Definition                                  */
/************************************************************/

$bgcolor1 = "#000000";
$bgcolor2 = "#1C2B53";
$bgcolor3 = "#24A5DD";
$bgcolor4 = "#012A3B";
$textcolor1 = "#FFFFFF";
$textcolor2 = "#FFFFFF";

/************************************************************/
/* OpenTable Functions                                      */
/*                                                          */
/************************************************************/

function OpenTable() {
    global $bgcolor1, $bgcolor2;
    echo "<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" ><tr><td class=extra>\n";
    echo "<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"8\" ><tr><td>\n";
}

function CloseTable() {
    echo "</td></tr></table></td></tr></table>\n";
}

function OpenTable2() {
    global $bgcolor1, $bgcolor2;
    echo "<table border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\"><tr><td class=extra>\n";
    echo "<table border=\"0\" cellspacing=\"1\" cellpadding=\"8\" ><tr><td>\n";
}

function CloseTable2() {
    echo "</td></tr></table></td></tr></table>\n";
}

/************************************************************/
/* FormatStory                                              */
/************************************************************/

function FormatStory($thetext, $notes, $aid, $informant) {
    global $anonymous;
    if ($notes != "") {
        $notes = "<br><br><b>"._NOTE."</b> <i>$notes</i>\n";
    } else {
        $notes = "";
    }
    if ("$aid" == "$informant") {
        echo "<font class=\"content\" color=\"#ffffff\">$thetext$notes</font>\n";
    } else {
        if($informant != "") {
            $boxstuff = "<a href=\"user.php?op=userinfo&amp;uname=$informant\">$informant</a> ";
        } else {
            $boxstuff = "$anonymous ";
        }
        $boxstuff .= ""._WRITES." <i>\"$thetext\"</i>$notes\n";
        echo "<font class=\"content\" color=\"#ffffff\">$boxstuff</font>\n";
    }
}

/************************************************************/
/* Function themeheader()                                   */
/************************************************************/
    function themeheader() {
    global $user, $banners, $sitename, $slogan, $cookie, $prefix, $dbi;
    cookiedecode($user);
    $username = $cookie[1];
    if ($username == "") {
        $username = "Anonymous";
    }
     echo "<body background=\"themes/Mtechnik_V1/images/ground.gif\" text=\"#ffffff\" link=\"#ffffff\" vlink=\"#ffffff\" alink=\"#ffffff\" topmargin=\"0\">\n"
."<script src=\"themes/Mtechnik_V1/style/fade.js\" language=\"Javascript\"></script>\n"
	    ."<br>\n";
    if ($banners == 1) {
        include("banners.php");
    }
    $topics_list = "<select name=\"topic\" onChange='submit()'>\n";
    $topics_list .= "<option value=\"\">All Topics</option>\n";
    $toplist = sql_query("select topicid, topictext from $prefix"._topics." order by topictext", $dbi);
    while(list($topicid, $topics) = sql_fetch_row($toplist, $dbi)) {
    if ($topicid==$topic) { $sel = "selected "; }
        $topics_list .= "<option $sel value=\"$topicid\">$topics</option>\n";
        $sel = "";
    }
    if ($username == "Anonymous") {
        $theuser = "&nbsp;&nbsp;<a href=\"modules.php?name=Your_Account\">Create an account";
    } else {
        $theuser = "&nbsp;&nbsp;Welcome $username!";
    }
    $tmpl_file = "themes/Mtechnik_V1/header.html";
    $thefile = implode("", file($tmpl_file));
    $thefile = addslashes($thefile);
    $thefile = "\$r_file=\"".$thefile."\";";
    eval($thefile);
    print $r_file;
    blocks(left);
    $tmpl_file = "themes/Mtechnik_V1/left_center.html";
    $thefile = implode("", file($tmpl_file));
    $thefile = addslashes($thefile);
    $thefile = "\$r_file=\"".$thefile."\";";
    eval($thefile);
    print $r_file;
}

/************************************************************/
/* Function themefooter()                                   */
/************************************************************/

function themefooter() {
    global $index;
    if ($index == 1) {
        echo "</td><td><img src=\"themes/Mtechnik_V1/images/pixel.gif\" width=\"15\" height=\"1\" border=\"0\" alt=\"\"></td><td valign=\"top\" width=\"160\">\n";
        blocks(right);
    }
    echo "</td>\n"
        ."</tr></table>\n"
        ."<br>"
        ."<table width=\"97%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" bgcolor=\"\" align=\"center\"><tr valign=\"top\">\n"
        ."</tr><tr align=\"center\">\n"
        ."<td bgcolor=\"\" width=\"100%\" colspan=\"3\">\n";
    footmsg();
    echo "</td>\n"
        ."</tr>\n"
        ."</table>\n"
        ."</tr></table><center><br>Theme by <a href=\"http://www.mtechnik.net\"><b>Mtechnik RepReSenT'n</a></b></center>\n";
}

/************************************************************/
/* Function themeindex()                                    */
/*                                                          */
/* This function format the stories on the Homepage         */
/************************************************************/
function themeindex ($aid, $informant, $time, $title, $counter, $topic, $thetext, $notes, $morelink, $topicname, $topicimage, $topictext) {
    global $anonymous, $tipath;
    echo "<table border=\"0\" cellpadding=\"4\" cellspacing=\"0\" width=\"100%\" bgcolor=\"\">\n"
    ."<tr>\n"
    ."<td background=\"themes/Mtechnik_V1/images/block2.jpg\">&nbsp; \n"
    ."</td>\n"
    ."</tr>\n"
    ."</table>\n"
    ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n"
    ."<tr>\n"
    ."<td>\n"
	."<table border=\"0\" cellpadding=\"3\" cellspacing=\"1\" bgcolor=\"000000\" width=\"100%\"><tr>\n"
	."<td class=content>\n"
	."<font size=\"3\" color=\"#ffffff\"><b>$title</b></font>\n"
	."<br><font color=\"#ffffff\" size=\"1\">"._POSTEDBY." ";
    formatAidHeader($aid);
    echo " "._ON." $time $timezone ($counter "._READS.")</font>\n"
    ."<br><b>"._TOPIC."</b> <a href=\"modules.php?name=News&amp;new_topic=$topic\">$topictext</a>\n"
	."</td></tr>\n"
	."<tr><td class=heading2>\n"
	."<font color=\"#ffffff\"><b><a href=\"modules.php?name=News&amp;new_topic=$topic\"><img src=\"$tipath$topicimage\" border=\"0\" Alt=\"$topictext\" align=\"right\" hspace=\"10\" vspace=\"10\"></a></B></font>\n";
    FormatStory($thetext, $notes, $aid, $informant);
    echo "</td></tr>\n"
    ."<tr><td background=\"themes/Mtechnik_V1/images/block2.jpg\" align=\"right\">\n"
	."<font size=\"1\">$morelink</font>\n"
	."</td></tr></table></td></tr></table>\n"
	."<br>\n\n\n";
}

/************************************************************/
/* Function themeindex()                                    */
/************************************************************/

function themearticle ($aid, $informant, $datetime, $title, $thetext, $topic, $topicname, $topicimage, $topictext) {
    global $admin, $sid, $tipath;
    echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"#000000\" width=\"100%\"><tr><td>\n"
        ."<table border=\"0\" cellpadding=\"1\" cellspacing=\"1\" bgcolor=\"#000000\" width=\"100%\"><tr><td>\n"
        ."<table background=\"themes/Mtechnik_V1/images/block2.jpg\" border=\"0\" cellpadding=\"3\" cellspacing=\"2\" bgcolor=\"#000000\" width=\"100%\"><tr><td align=\"left\">\n"
        ."<font class=\"option\" size=\"1\"><b><img src=\"themes/Mtechnik_V1/images/icon.gif\" width=15 height=14 align=\"center\">&nbsp;&nbsp;$title</b></font><br>\n"
        ."</td></tr></table>\n"   
        ."<font size=\"1\">"._POSTEDON." $datetime "._BY." ";
    $posted .= formatAidHeader($aid); echo "$posted"; 
    if (is_admin($admin)) {
	echo "<br>[ <a href=\"admin.php?op=EditStory&amp;sid=$sid\">"._EDIT."</a> | <a href=\"admin.php?op=RemoveStory&amp;sid=$sid\">"._DELETE."</a> ]\n";
    }
    echo "</td></tr></table><br>";
    echo "<a href=\"modules.php?name=News&amp;new_topic=$topic\"><img src=\"$tipath$topicimage\" border=\"0\" Alt=\"$topictext\" align=\"right\" hspace=\"3\" vspace=\"0\" bgcolor=\"#000000\"></a>\n";
    FormatStory($thetext, $notes="", $aid, $informant);
    echo "</td></tr></table><br>\n\n\n";
}

/************************************************************/
/* Function themesidebox()                                  */
/************************************************************/

function themesidebox($title, $content) {
    echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"#000000\" width=\"160\"><tr><td>\n"
    ."<table border=\"0\" cellpadding=\"4\" cellspacing=\"0\" width=\"160\">\n"
    ."<tr><td background=\"themes/Mtechnik_V1/images/sideboxBartop.png\">\n"
	."<font class=\"heading\" size=\"2\">&nbsp;&nbsp;&nbsp;&nbsp;<b>$title</b></font>\n"
	."</td></tr>\n"
    ."</table>\n"

	."<table border=\"0\" cellpadding=\"3\" cellspacing=\"1\" bgcolor=\"#000000\" width=\"100%\">\n"
	
	."<tr>\n"
	."<td bgcolor=\"#000000\">$content</td>\n"
	."</tr>\n"
	."</table></td></tr></table>\n"
	."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"160\">\n"
	."<tr>\n"
	."<td><img src=\"themes/Mtechnik_V1/images/sideboxBar1.png\"></td>\n"
	."</tr>\n"
    ."</table>\n"
	."<br>\n\n\n";
}

?>