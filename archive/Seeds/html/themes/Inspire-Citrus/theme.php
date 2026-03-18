<?php

/************************************************************/
/* IMPORTANT NOTE FOR THEMES DEVELOPERS!                    */
/*                                                          */
/* When you start coding your theme, if you want to         */
/* distribute it, please double check it to fit the HTML    */
/* 4.01 Transitional Standard. You can use the W3 validator */
/* located at http://validator.w3.org                       */
/* If you don't know where to start with your theme, just   */
/* start modifying this theme, it's validate and is cool ;) */
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

$bgcolor1 = "#FFDA80";
$bgcolor2 = "#FFDB6C";
$bgcolor3 = "#FFDA80";
$bgcolor4 = "#FFDB6C";
$textcolor1 = "#660000";
$textcolor2 = "#660000";

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
    echo "<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" bgcolor=\"131544\"><tr><td>\n";
    echo "<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" bgcolor=\"ffffff\"><tr><td>\n";
}

function CloseTable() {
    echo "</td></tr></table></td></tr></table>\n";
}

function OpenTable2() {
    global $bgcolor1, $bgcolor2;
    echo "<table border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\"><tr><td>\n";
    echo "<table border=\"0\" cellspacing=\"1\" cellpadding=\"0\" ><tr><td>\n";
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
        echo "$thetext$notes\n";
    } else {
        if($informant != "") {
            $boxstuff = "<a href=\"user.php?op=userinfo&amp;uname=$informant\">$informant</a> ";
        } else {
            $boxstuff = "$anonymous ";
        }
        $boxstuff .= ""._WRITES." <i>\"$thetext\"</i>$notes\n";
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
    global $user, $banners, $sitename, $slogan, $cookie, $prefix;
    cookiedecode($user);
    $username = $cookie[1];
    if ($username == "") {
        $username = "Anonymous";
    }
    echo "<body text=\"\" link=\"\" vlink=\"\" alink=\"\" leftmargin=\"0\" topmargin=\"0\" marginwidth=\"0\" marginheight=\"0\" background=\"themes/Inspire-Citrus/images/main-bg.gif\">\n"
        ."<table cellpadding=\"5\" cellspacing=\"0\" width=\"100%\" border=\"0\"><tr><td align=\"right\">\n";
    if ($banners) {
        include("banners.php");
    }
    echo "</td></tr></table>\n"
        ."<table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\" align=\"center\"><tr>\n"
        ."<td><IMG src=\"themes/Inspire-Citrus/images/pixel.gif\" width=\"1\" height=\"1\" alt=\"\" border=\"0\" hspace=\"0\"></td></tr></table>\n"
        ."<table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\" align=\"center\">\n"
        ."<tr>\n"
        ."<td>\n"
        ."<a href=\"modules.php?op=modload&name=News&file=index\"><img src=\"themes/Inspire-Citrus/images/logo.gif\" align=\"left\" alt=\""._WELCOMETO." $sitename\" border=\"0\"></a></td>\n"
        ."<td align=\"right\" class=\"menuehead\">\n"
        ."<center><form action=\"modules.php?name=Search\" method=\"post\">"._SEARCH." \n"
        ."<input type=\"text\" name=\"query\" size=\"14\"></form></center></td>\n"
        ."<td align=\"center\" class=\"menuehead\">\n"

        ."</tr></table>\n"
        ."<table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\" align=\"center\" background=\"themes/Inspire-Citrus/images/headerline.gif\" height=\"30\">\n"
        ."<tr valign=\"middle\"><td><IMG src=\"themes/Inspire-Citrus/images/pixel.gif\" width=\"24\" height=\"30\" border=\"0\" hspace=\"0\"></td><td><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\"><tr><td width=\"4\" height=\"30\"><width=\"4\" height=\"30\"></td>\n"
        ."<td nowrap class=\"artsubhead\" align=\"left\">\n";
    if ($username == "Anonymous") {
        echo "<a href=\"user.php\">create</a> an account\n";
    } else {
        echo " welcome $username! | <a href=\"user.php?op=logout\">logout</a> | ";
    }
    echo "<script type=\"text/javascript\">\n"
        ."<!--   // Array ofmonth Names\n"
        ."var monthNames = new Array( \"January\",\"February\",\"March\",\"April\",\"May\",\"June\",\"July\",\"August\",\"September\",\"October\",\"November\",\"December\");\n"
        ."var now = new Date();\n"
        ."thisYear = now.getYear();\n"
        ."if(thisYear < 1900) {thisYear += 1900}; // corrections if Y2K display problem\n"
        ."document.write(monthNames[now.getMonth()] + \" \" + now.getDate() + \", \" + thisYear) ;\n"
        ."// -->\n"
        ."</script></td><td width=\"4\" height=\"30\"><width=\"4\" height=\"30\"></td></tr></table>\n"
        ."<td align=\"left\" height=\"10\" width=\"90%\"><IMG src=\"themes/Inspire-Citrus/images/pixel_top.gif\" width=\"68\" height=\"30\" border=\"0\" hspace=\"0\"><A href=\"/\"><IMG src=\"themes/Inspire-Citrus/images/home.gif\" width=\"68\" height=\"30\" alt=\""._MAIN."\" border=\"0\" hspace=\"5\"></a><A href=\"modules.php?name=Topics\"><IMG src=\"themes/Inspire-Citrus/images/themes.gif\" width=\"68\" height=\"30\" alt=\"Topics\" border=\"0\" hspace=\"5\"></a><A href=\"modules.php?name=Downloads\"><IMG src=\"themes/Inspire-Citrus/images/downloads.gif\" width=\"68\" height=\"30\" alt=\"Download\" border=\"0\" hspace=\"5\"><A href=\"modules.php?name=Your_Account\"><IMG src=\"themes/Inspire-Citrus/images/account.gif\" width=\"68\" height=\"30\" alt=\"Your Account\" border=\"0\" hspace=\"5\"></a><A href=\"modules.php?name=Submit_News\"><IMG src=\"themes/Inspire-Citrus/images/submitnews.gif\" width=\"68\" height=\"30\" alt=\"Submit News\" border=\"0\" hspace=\"5\"></a><A href=\"modules.php?name=Top\"><IMG src=\"themes/Inspire-Citrus/images/topten.gif\" width=\"68\" height=\"30\" alt=\"Top 10\" border=\"0\" hspace=\"5\"></a></td>\n"
        ."<td align=\"right\" width=\"10%\">&nbsp;</td>\n"
        ."</tr>\n"
        ."</table><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\" height=\"15\"><tr>\n"
        ."<td><IMG src=\"themes/Inspire-Citrus/images/under_hl.gif\" height=\"15\" alt=\"\" border=\"0\" hspace=\"0\"></td></tr></table>\n"
        ."<!-- FIN DEL TITULO -->\n"
        ."<table width=\"95%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\"><tr valign=\"top\">\n"
        ."<td width=\"150\" valign=\"top\">\n";
    blocks(left);
    echo "</td><td><img src=\"themes/Inspire-Citrus/images/pixel.gif\" width=\"15\" height=\"1\" border=\"0\" alt=\"\"></td><td width=\"100%\">\n";
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
        echo "</td><td><img src=\"themes/Inspire-Citrus/images/pixel.gif\" width=\"15\" height=\"1\" border=\"0\" alt=\"\"></td><td valign=\"top\" width=\"150\">\n";
        blocks(right);
    }
    echo "</td>\n"
        ."</td></tr></table>\n"
        ."<table width=\"95%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" bgcolor=\"#FFDA80\" align=\"center\"><tr>\n"
        ."<td><IMG src=\"themes/Inspire-Citrus/images/pixel.gif\" width=\"1\" height=\"1\" alt=\"\" border=\"0\" hspace=\"0\"></td>\n"
        ."</tr></table><br>\n"
        ."<table width=\"95%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\"><tr align=\"center\">\n"
        ."<td width=\"100%\" colspan=\"3\" class=\"artsubhead\">\n";
    footmsg();
    echo "</td>\n"
        ."</tr></table>\n";
}

/************************************************************/
/* Function themeindex()                                    */
/*                                                          */
/* This function format the stories on the Homepage         */
/************************************************************/

function themeindex ($aid, $informant, $time, $title, $counter, $topic, $thetext, $notes, $morelink, $topicname, $topicimage, $topictext) {
    global $anonymous, $tipath;
    echo "<br><table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"95%\" align=\"center\">\n"
    ."<tr>\n"
    ."<td>\n"

        ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" bgcolor=\"FFFFFF\">\n"
        ."<tr>\n"
        ."<td align=\"left\" valign=\"top\" width=\"26\" height=\"30\"><img src=\"themes/Inspire-Citrus/images/sidebox-title-left.gif\"></td>\n"
        ."<td align=\"left\" valign=\"middle\" background=\"themes/Inspire-Citrus/images/sidebox-title-bg.gif\" width=\"100%\" height=\"30\">\n"
        ."<font class=\"option\" color=\"#363636\">&nbsp;&nbsp;<b>$title</b></font>\n"
        ."</td>\n"
        ."<td align=\"left\" valign=\"top\" width=\"23\" height=\"30\"><img src=\"themes/Inspire-Citrus/images/sidebox-title-right.gif\"></td>\n"
        ."</tr>\n"
        ."</table>\n"

        ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n"
        ."<tr>\n"
        ."<td>\n"

        ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n"
        ."<tr>\n"
        ."<td align=\"left\" valign=\"top\" width=\"15\" height=\"46\"><img src=\"themes/Inspire-Citrus/images/storybox-left.gif\"></td>\n"
        ."<td align=\"left\" valign=\"middle\" background=\"themes/Inspire-Citrus/images/storybox-bg.gif\" width=\"100%\" height=\"46\">\n"
        ."<font color=\"#000000\" size=\"2\">"._POSTEDBY." ";
    formatAidHeader($aid);
    echo " "._ON." $time $timezone ($counter "._READS.")</font>\n"
        ."<font color=\"#000000\">$morelink</font>\n"
        ."</td>\n"
    ."<td width=\"12\" align=\"left\" valign=\"top\"><img src=\"themes/Inspire-Citrus/images/storybox-right.gif\"></td>\n"
        ."</tr>\n"
        ."</table>\n"

        ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" bgcolor=\"FFFFFF\">\n"
        ."<tr>\n"
        ."<td width=\"6\" align=\"left\" valign=\"top\" background=\"themes/Inspire-Citrus/images/sidebox-bar-left.gif\"><img src=\"themes/Inspire-Citrus/images/sidebox-bar-px.gif\"></td>\n"
        ."<td>\n"

        ."<table border=\"0\" cellpadding=\"3\" cellspacing=\"0\" width=\"100%\">\n"
        ."<tr valign=\"top\">\n"
        ."<td width=\"800\">\n"
        ."<font color=\"#999999\"><b><a href=\"modules.php?name=News&new_topic=$topic\"><img src=\"$tipath$topicimage\" border=\"0\" Alt=\"$topictext\" align=\"right\" hspace=\"10\" vspace=\"10\"></a></B></font>\n";
    FormatStory($thetext, $notes, $aid, $informant);
    echo "</td></tr></table>\n"
    ."</td>\n"
    ."<td width=\"13\" align=\"left\" valign=\"top\" background=\"themes/Inspire-Citrus/images/storybox-content-right.gif\"><img src=\"themes/Inspire-Citrus/images/storybox-content-right-px.gif\"></td>\n"
    ."</tr></table>\n"

        ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n"
        ."<tr valign=\"top\">\n"
        ."<td width=\"9\" height=\"29\" align=\"left\" valign=\"top\"><img src=\"themes/Inspire-Citrus/images/storybox-bottom-left.gif\"></td>\n"
        ."<td width=\"100%\" height=\"29\" background=\"themes/Inspire-Citrus/images/storybox-bottom-bg.gif\">&nbsp;</td>\n"
        ."<td width=\"120\" height=\"29\" align=\"left\" valign=\"top\"><img src=\"themes/Inspire-Citrus/images/storybox-bottom-right.gif\"></td>\n"
    ."</table>\n"

    ."</td></tr></table>\n"

    ."</td></tr></table>\n";
}

/************************************************************/
/* Function themeindex()                                    */
/*                                                          */
/* This function format the stories on the story page, when */
/* you click on that "Read More..." link in the home        */
/************************************************************/

function themearticle ($aid, $informant, $datetime, $title, $thetext, $topic, $topicname, $topicimage, $topictext) {
    global $admin, $sid, $tipath;
    echo "<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\"><tr><td><a href=\"modules.php?name=News&new_topic=$topic\"><img src=\"$tipath$topicimage\" border=\"0\" Alt=\"$topictext\" align=\"right\" hspace=\"1\" vspace=\"3\"></a><font class=\"arthead\">$title</font><br>\n"
        ."<font class=\"artsubhead\">"._POSTEDON." $datetime "._BY." ";
    formatAidHeader($aid);
    if (is_admin($admin)) {
        echo "<br>[ <a href=\"admin.php?op=EditStory&amp;sid=$sid\">"._EDIT."</a> | <a href=\"admin.php?op=RemoveStory&amp;sid=$sid\">"._DELETE."</a> ]\n";
    }
    echo "</td></tr></table><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" background=\"themes/Inspire-Citrus/images/line_bg.gif\"><tr><td width=\"4\" height=\"7\"><img src=\"themes/Inspire-Citrus/images/corner_line_left.gif\" width=\"4\" height=\"7\"></td><td><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\"><tr><td><img src=\"themes/Inspire-Citrus/images/line_bg.gif\" height=\"7\"></td></tr></table></td><td width=\"4\" height=\"7\" align=\"right\"><img src=\"themes/Inspire-Citrus/images/corner_line_right.gif\" width=\"4\" height=\"7\"></td></tr></table><table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n";
    echo "<tr><td class=\"art\"><br>\n";
    FormatStory($thetext, $notes="", $aid, $informant);
    echo "</td></tr></table><br>\n";
}

/************************************************************/
/* Function themesidebox()                                  */
/*                                                          */
/* Control look of your blocks. Just simple.                */
/************************************************************/

function themesidebox($title, $content) {
    echo "<img src=\"themes/Inspire-Citrus/images/box_head.gif\" width=\"160\" height=\"19\" alt=\"\" border=\"0\"><br><table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" background=\"themes/Inspire-Citrus/images/box_headline.gif\" width=\"160\" height=\"21\"><tr><td align=center class=\"menuehead\">\n"
        ."$title\n"
        ."</td></tr></table>\n"
        ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"160\" bgcolor=\"ffffff\">\n"
        ."<tr valign=\"top\"><td width=\"20\" background=\"themes/Inspire-Citrus/images/box_bg_l.gif\"><img src=\"themes/Inspire-Citrus/images/pixel.gif\" width=\"20\" height=\"10\"></td><td class=\"artsubhead\"><img src=\"themes/Inspire-Citrus/images/pixel.gif\" width=\"115\" height=\"1\"><br>\n"
        ."$content\n"
    ."</td><td width=\"15\" background=\"themes/Inspire-Citrus/images/box_bg_r.gif\"><img src=\"themes/Inspire-Citrus/images/pixel.gif\" width=\"15\" height=\"10\"></td></tr></table><img src=\"themes/Inspire-Citrus/images/box_foot.gif\" width=\"160\" height=\"30\" alt=\"\" border=\"0\"><br>\n";
}

?>