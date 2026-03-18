<?php

/************************************************************/
/* THEME NAME: Mtechnik_Ultra                               */
/* THEME DEVELOPER: Mtechnik www.mtechnik.net               */
/************************************************************/

/************************************************************/
/* Theme Colors Definition                                  */
/************************************************************/

$bgcolor1 = "#ffffff";
$bgcolor2 = "#ffffff";
$bgcolor3 = "#dddddd";
$bgcolor4 = "#ffffff";
$textcolor1 = "#000000";
$textcolor2 = "#000000";

/************************************************************/
/* OpenTable Functions                                      */
/*                                                          */
/************************************************************/

function OpenTable() {
    
    echo "<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" ><tr><td class=>\n";
    echo "<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"8\" ><tr><td>\n";
}

function CloseTable() {
    echo "</td></tr></table></td></tr></table>\n";
}

function OpenTable2() {
    
    echo "<table border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\"><tr><td class=nothing>\n";
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
        echo "<font class=\"content\" color=\"#505050\">$thetext$notes</font>\n";
    } else {
        if($informant != "") {
            $boxstuff = "<a href=\"user.php?op=userinfo&amp;uname=$informant\">$informant</a> ";
        } else {
            $boxstuff = "$anonymous ";
        }
        $boxstuff .= ""._WRITES." <i>\"$thetext\"</i>$notes\n";
        echo "<font class=\"content\" color=\"#505050\">$boxstuff</font>\n";
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
    echo "<body background=\"themes/Mtechnik_Ultra/images/bg.gif\" topmargin=\"0\" leftmargin=\"0\" marginwidth=\"0\" marginheight=\"0\">";
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
        $theuser = "&nbsp;&nbsp;<a href=\"modules.php?name=Your_Account\">Login or Register, I dont bite";
    } else {
        $theuser = "Hello there sexy $username!";
    }
    $tmpl_file = "themes/Mtechnik_Ultra/header.html";
    $thefile = implode("", file($tmpl_file));
    $thefile = addslashes($thefile);
    $thefile = "\$r_file=\"".$thefile."\";";
    eval($thefile);
    print $r_file;
    blocks(left);
    $tmpl_file = "themes/Mtechnik_Ultra/left_center.html";
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
        echo "</td><td><img src=\"themes/Mtechnik_Ultra/images/pixel.gif\" width=\"15\" height=\"1\" border=\"0\" alt=\"\"></td><td valign=\"top\" width=\"160\">\n";
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
    if ($notes != "") {
        $notes = "<br><br><b>"._NOTE."</b> $notes\n";
    } else {
        $notes = "";
    }
    if ("$aid" == "$informant") {
        $content = "$thetext$notes\n";
    } else {
        if($informant != "") {
            $content = "<a href=\"modules.php?name=Your_Account&amp;op=userinfo&amp;uname=$informant\">$informant</a> ";
        } else {
            $content = "$anonymous ";
        }
        $content .= ""._WRITES." \"$thetext\"$notes\n";
    }
    //Code Changed - just show posted by
    $posted = ""._POSTEDBY." ";
    $posted .= get_author($aid);
    //$posted .= " "._ON." $time $timezone ";
    //End Code Change
    $datetime = substr($morelink, 0, strpos($morelink, "|") - strlen($morelink));
    $morelink = substr($morelink, strlen($datetime) + 2);
    $tmpl_file = "themes/Mtechnik_Ultra/story_home.html";
    $thefile = implode("", file($tmpl_file));
    $thefile = addslashes($thefile);
    $thefile = "\$r_file=\"".$thefile."\";";
    eval($thefile);
    print $r_file;
}

/************************************************************/
/* Function themeindex()                                    */
/************************************************************/

function themearticle ($aid, $informant, $datetime, $title, $thetext, $topic, $topicname, $topicimage, $topictext) {
    global $admin, $sid, $tipath;
    $posted = ""._POSTEDON." $datetime "._BY." ";
    $posted .= get_author($aid);
    if ($notes != "") {
        $notes = "<br><br><b>"._NOTE."</b> <i>$notes</i>\n";
    } else {
        $notes = "";
    }
    if ("$aid" == "$informant") {
        $content = "$thetext$notes\n";
    } else {
        if($informant != "") {
            $content = "<a href=\"user.php?op=userinfo&amp;uname=$informant\">$informant</a> ";
        } else {
            $content = "$anonymous ";
        }
        $content .= ""._WRITES." <i>\"$thetext\"</i>$notes\n";
    }
    $tmpl_file = "themes/Mtechnik_Ultra/story_page.html";
    $thefile = implode("", file($tmpl_file));
    $thefile = addslashes($thefile);
    $thefile = "\$r_file=\"".$thefile."\";";
    eval($thefile);
    print $r_file;
}

/************************************************************/
/* Function themesidebox()                                  */
/************************************************************/

function themesidebox($title, $content) {

echo "<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"\" width=\"165\"><tr><td>"
	."<table width=\"100%\" border=\"1\" cellpadding=\"0\" cellspacing=\"0\">"
	."<tr><td><img src=\"themes/Mtechnik_Ultra/images/bb.png\" width=\"100%\" height=\"15\"></td></tr></table>\n"
	."<table border=\"1\" cellpadding=\"3\" cellspacing=\"1\" bgcolor=\"\" width=\"100%\">\n"
	."<tr><td bgcolor=\"#eeeeee\" align=\"center\" bordercolor=\"#000000\"> <font class=\"content\"><b>$title</b></font></td></tr>\n"
	."<tr><td bgcolor=\"\" bordercolor=\"#000000\"><font class=\"content\">$content</font></td></tr>\n"
	."</table></td></tr></table><br><br>\n";
	
   	
}

?>