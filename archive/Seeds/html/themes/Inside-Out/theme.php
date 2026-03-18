<?php


// Some theme color definitions
$bgcolor1 = "#eeeeee";
$bgcolor2 = "#909799";
$bgcolor3 = "#909799";
$bgcolor4 = "#909799";
$textcolor1 = "#000000";
$textcolor2 = "#000000";

/************************************************************/


function OpenTable() {
    global $bgcolor1, $bgcolor2;
    echo "<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\"><tr><td>\n";
    echo "<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"3\"><tr><td>\n";
}

function CloseTable() {
    echo "</td></tr></table></td></tr></table>\n";
}

function OpenTable2() {
    global $bgcolor1, $bgcolor2;
    echo "<table border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\"><tr><td>\n";
    echo "<table border=\"0\" cellspacing=\"1\" cellpadding=\"8\"><tr><td>\n";
}

function CloseTable2() {
    echo "</td></tr></table></td></tr></table>\n";
}

/************************************************************/


function FormatStory($thetext, $notes, $aid, $informant) {
    global $anonymous;
    if ($notes != "") {
        $notes = "<br><br><b>"._NOTE."</b> $notes\n";
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
        $boxstuff .= "".translate("writes")." \"$thetext\"$notes\n";
        echo "<font class=\"content\" color=\"#505050\">$boxstuff</font>\n";
    }
}

/************************************************************/


function themeheader() {
    global $user, $banners, $sitename, $slogan, $cookie, $prefix;
    cookiedecode($user);
    $username = $cookie[1];
    if ($username == "") {
        $username = "Anonymous";
    }

    echo "<!----- Inside-Out © 2001-2002 Ryan Gomez (http://www.kreativesource.com) ----->\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n";

        echo "<script type=\"text/javascript\" language=\"JavaScript1.2\" src=\"themes/Inside-Out/jscript/imageswap.js\"></script>\n\n\n";

    echo "<body background=\"themes/Inside-Out/images/bkg.gif\" text=\"#000000\" leftmargin=\"0\" topmargin=\"0\" marginwidth=\"0\" marginheight=\"0\" onLoad=\"MM_preloadImages('themes/Inside-Out/images/navi/nav-bar-home-02.gif','themes/Inside-Out/images/navi/nav-bar-account-02.gif','themes/Inside-Out/images/navi/nav-bar-topics-02.gif','themes/Inside-Out/images/navi/nav-bar-downloads-02.gif','themes/Inside-Out/images/navi/nav-bar-forums-02.gif','themes/Inside-Out/images/navi/nav-bar-submit-02.gif','themes/Inside-Out/images/navi/nav-bar-contact-02.gif')\">\n\n\n";

    if ($banners) {
        include("banners.php");
    }




        echo "<table width=\"785\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\">\n"
            ."<tr valign=\"top\">\n"
            ."<td><img src=\"themes/Inside-Out/images/logo.gif\" width=\"785\" height=\"69\" border=\"0\" alt=\"\"></td>\n"
            ."</tr>\n"
            ."</table>\n\n\n";



                echo "<table width=\"785\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\">\n"
                  ."<tr valign=\"top\">\n"
            ."<td width=\"21\"><img src=\"themes/Inside-Out/images/navi/nav-bar-left.gif\" width=\"21\" height=\"19\" name=\"navbarleft\"></td>\n"
            ."<td width=\"106\"><a href=\"index.php\" onMouseOut=\"MM_swapImgRestore()\" onMouseOver=\"MM_swapImage('home','','themes/Inside-Out/images/navi/nav-bar-home-02.gif',1)\"><img name=\"home\" border=\"0\" src=\"themes/Inside-Out/images/navi/nav-bar-home-01.gif\" width=\"106\" height=\"19\"></a></td>\n"
            ."<td width=\"106\"><a href=\"modules.php?name=Your_Account\" onMouseOut=\"MM_swapImgRestore()\" onMouseOver=\"MM_swapImage('account','','themes/Inside-Out/images/navi/nav-bar-account-02.gif',1)\"><img name=\"account\" border=\"0\" src=\"themes/Inside-Out/images/navi/nav-bar-account-01.gif\" width=\"106\" height=\"19\"></a></td>\n"
            ."<td width=\"106\"><a href=\"modules.php?name=Topics\" onMouseOut=\"MM_swapImgRestore()\" onMouseOver=\"MM_swapImage('topics','','themes/Inside-Out/images/navi/nav-bar-topics-02.gif',1)\"><img name=\"topics\" border=\"0\" src=\"themes/Inside-Out/images/navi/nav-bar-topics-01.gif\" width=\"106\" height=\"19\"></a></td>\n"
            ."<td width=\"106\"><a href=\"modules.php?name=Downloads\" onMouseOut=\"MM_swapImgRestore()\" onMouseOver=\"MM_swapImage('downloads','','themes/Inside-Out/images/navi/nav-bar-downloads-02.gif',1)\"><img name=\"downloads\" border=\"0\" src=\"themes/Inside-Out/images/navi/nav-bar-downloads-01.gif\" width=\"106\" height=\"19\"></a></td>\n"
            ."<td width=\"106\"><a href=\"modules.php?name=Forum\" onMouseOut=\"MM_swapImgRestore()\" onMouseOver=\"MM_swapImage('forum','','themes/Inside-Out/images/navi/nav-bar-forums-02.gif',1)\"><img name=\"forum\" border=\"0\" src=\"themes/Inside-Out/images/navi/nav-bar-forums-01.gif\" width=\"106\" height=\"19\"></a></td>\n"
            ."<td width=\"106\"><a href=\"modules.php?name=Submit_News\" onMouseOut=\"MM_swapImgRestore()\" onMouseOver=\"MM_swapImage('submit','','themes/Inside-Out/images/navi/nav-bar-submit-02.gif',1)\"><img name=\"submit\" border=\"0\" src=\"themes/Inside-Out/images/navi/nav-bar-submit-01.gif\" width=\"106\" height=\"19\"></a></td>\n"
            ."<td width=\"106\"><a href=\"modules.php?name=Feedback\" onMouseOut=\"MM_swapImgRestore()\" onMouseOver=\"MM_swapImage('contact','','themes/Inside-Out/images/navi/nav-bar-contact-02.gif',1)\"><img name=\"contact\" border=\"0\" src=\"themes/Inside-Out/images/navi/nav-bar-contact-01.gif\" width=\"106\" height=\"19\"></a></td>\n"
            ."<td width=\"22\"><img src=\"themes/Inside-Out/images/navi/nav-bar-right.gif\" width=\"22\" height=\"19\" name=\"navbarright\"></td>\n"
                  ."</tr>\n"
                ."</table>\n";

// Top Image
        echo "<table width=\"785\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\">\n"
            ."<tr valign=\"top\">\n"
            ."<td><img src=\"themes/Inside-Out/images/topper.gif\" width=\"785\" height=\"22\" border=\"0\" alt=\"\"></td>\n"
            ."</tr>\n"
            ."</table>\n\n\n";

// Begin of Main Content Table
        echo "<table width=\"785\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\">\n"
            ."<tr valign=\"top\">\n"
            ."<td><img src=\"themes/Inside-Out/images/pixel.gif\" width=\"5\" height=\"1\" border=\"0\" alt=\"\"></td>\n"
            ."<td width=\"150\" valign=\"top\">\n";
    blocks(left);
    echo "</td>\n"
        ."<td width=\"10\"><img src=\"themes/Inside-Out/images/pixel.gif\" width=\"10\" height=\"1\" border=\"0\" alt=\"\"></td>\n"
        ."<td <td background=\"themes/Inside-Out/images/side_bgR.gif\" width=\"13\" height=\"1\"><img src=\"themes/Inside-Out/images/side_bgR.gif\" width=\"9\" height=\"1\" border=\"0\" alt=\"\"></td>\n"


        ."<td align=\"left\" width=\"600\">\n";
}

/************************************************************/


function themefooter() {
    global $index;
    if ($index == 1) {
        echo "</td>\n"
            ."<td><img src=\"themes/Inside-Out/images/pixel.gif\" width=\"10\" height=\"1\" border=\"0\" alt=\"\"></td>\n"

            ."<td valign=\"top\" width=\"150\">\n";
        blocks(right);
    }
    echo "</td>\n"
        ."<td><img src=\"themes/Inside-Out/images/pixel.gif\" width=\"5\" height=\"1\" border=0 alt=\"\"></td>\n"

        ."<td background=\"themes/Inside-Out/images/side_bg.gif\" width=\"9\" height=\"1\"><img src=\"themes/Inside-Out/images/side_bg.gif\" width=\"9\" height=\"1\" border=\"0\" alt=\"\"></td>\n"


            ."</tr>\n"
            ."</table>\n\n\n";

// Footer Graphic
    echo "<table width=\"785\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\">\n"
        ."<tr>\n"
        ."<td width=\"785\" height=\"18\"><img src=\"themes/Inside-Out/images/footer-image.gif\" width=\"785\" height=\"18\" alt=\"\"></td>\n"
        ."</tr>\n"
        ."</table>\n\n\n";

// Begin Footer Message Box
    echo "<br><table width=\"785\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\">\n"
        ."<tr align=\"center\">\n"
        ."<td width=\"100%\" colspan=\"3\">\n";
    footmsg();
    echo "</td>\n"
        ."</tr>\n"
        ."</table>\n\n\n";
}

/************************************************************/



function themeindex ($aid, $informant, $time, $title, $counter, $topic, $thetext, $notes, $morelink, $topicname, $topicimage, $topictext) {
    global $anonymous, $tipath;
    echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" align=\"center\" width=\"100%\">\n"
    ."<tr>\n"
    ."<td>\n"

        ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n"
        ."<tr>\n"
        ."<td align=\"left\" valign=\"top\" width=\"26\" height=\"30\"><img src=\"themes/Inside-Out/images/sidebox-title-left.gif\"></td>\n"
        ."<td align=\"left\" valign=\"middle\" background=\"themes/Inside-Out/images/sidebox-title-bg.gif\" width=\"100%\" height=\"30\">\n"
        ."<font class=\"option\" color=\"#363636\"><b>$title</b></font>\n"
        ."</td>\n"
        ."<td align=\"left\" valign=\"top\" width=\"28\" height=\"30\"><img src=\"themes/Inside-Out/images/sidebox-title-right.gif\"></td>\n"
        ."</tr>\n"
        ."</table>\n"

        ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n"
        ."<tr>\n"
        ."<td>\n"

        ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n"
        ."<tr>\n"
        ."<td align=\"left\" valign=\"top\" width=\"15\" height=\"46\"><img src=\"themes/Inside-Out/images/storybox-left.gif\"></td>\n"
        ."<td align=\"left\" valign=\"middle\" background=\"themes/Inside-Out/images/storybox-bg.gif\" width=\"100%\" height=\"46\">\n"
        ."<font color=\"#000000\" size=\"2\">"._POSTEDBY." ";
    formatAidHeader($aid);
    echo "\n"
        ."<font color=\"#000000\">$morelink</font>\n"
        ."</td>\n"
    ."<td width=\"12\" align=\"left\" valign=\"top\"><img src=\"themes/Inside-Out/images/storybox-right.gif\"></td>\n"
        ."</tr>\n"
        ."</table>\n"

        ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n"
        ."<tr>\n"
        ."<td width=\"9\" align=\"left\" valign=\"top\" background=\"themes/Inside-Out/images/sidebox-bar-left.gif\"><img src=\"themes/Inside-Out/images/sidebox-bar-px.gif\"></td>\n"
        ."<td>\n"

        ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n"
        ."<tr valign=\"top\" width=\"100%\">\n"
        ."<td width=\"100%\">\n"
        ."<font color=\"#999999\"><b><a href=\"modules.php?name=Search&query=&amp;topic=$topic\"><img src=\"$tipath$topicimage\" border=\"0\" Alt=\"$topictext\" align=\"right\" hspace=\"1\" vspace=\"1\"></a></B></font>\n";
    FormatStory($thetext, $notes, $aid, $informant);
    echo "</td></tr></table>\n"
    ."</td>\n"
    ."<td width=\"13\" align=\"left\" valign=\"top\" background=\"themes/Inside-Out/images/storybox-content-right.gif\"><img src=\"themes/Inside-Out/images/storybox-content-right-px.gif\"></td>\n"
    ."</tr></table>\n"

        ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n"
        ."<tr valign=\"top\">\n"
        ."<td width=\"9\" height=\"15\" align=\"left\" valign=\"top\"><img src=\"themes/Inside-Out/images/storybox-bottom-left.gif\"></td>\n"
        ."<td width=\"100%\" height=\"15\" background=\"themes/Inside-Out/images/storybox-bottom-bg.gif\"></td>\n"
        ."<td width=\"120\" height=\"15\" align=\"left\" valign=\"top\"><img src=\"themes/Inside-Out/images/storybox-bottom-right.gif\"></td>\n"
    ."</table>\n"

    ."</td></tr></table>\n"

    ."</td></tr></table>\n";
}

/************************************************************/


function themearticle ($aid, $title, $thetext, $topic, $topicname, $topicimage, $topictext) {
    global $admin, $sid, $tipath;

// Read More Title Area
    echo "<table border=\"0\" cellpadding=\"3\" cellspacing=\"0\" width=\"422\">\n"
        ."<tr>\n"
        ."<td align=\"left\">\n"
        ."<font class=\"option\" color=\"#363636\"><b>$title</b></font>\n"
        ."<br>\n"
        ."<font class=\"content\">"._POSTEDON." $datetime "._BY." $aid";
    if (is_admin($admin)) {
        echo "<br>[ <a href=\"admin.php?op=EditStory&amp;sid=$sid\">"._EDIT."</a> | <a href=\"admin.php?op=RemoveStory&amp;sid=$sid\">"._DELETE."</a> ]\n";
    }
    echo "</td>\n"
        ."</tr>\n"
        ."</table>\n\n\n"

        ."<br>\n\n\n"

// Read More Content
        ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"422\">\n"
        ."<tr>\n"
        ."<td>\n";
    echo "<a href=\"modules.php?name=News&amp;new_topic=$topic\"><img src=\"images/topics/$topicimage\" border=\"0\" alt=\"$topictext\" align=\"left\" hspace=\"5\" vspace=\"5\"></a>\n";
    FormatStory($thetext, $notes="", $aid, $informant);
    echo "</td>\n"
        ."</tr>\n"
        ."</table>\n\n\n"

        ."<br>\n\n\n";
}

/************************************************************/

function themesidebox($title, $content) {
    echo "<img src=\"themes/Inside-Out/images/box_head.gif\" width=\"153\" height=\"8\" alt=\"\" border=\"0\"><br><table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" background=\"themes/Inside-Out/images/box_headline.gif\" width=\"153\" height=\"27\"><tr><td align=center class=\"menuehead\">\n"
        ."$title\n"
        ."</td></tr></table>\n"
        ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"153\">\n"
        ."<tr valign=\"top\"><td width=\"20\" background=\"themes/Inside-Out/images/box_bg_l.gif\"><img src=\"themes/Inside-Out/images/pixel.gif\" width=\"20\" height=\"10\"></td><td class=\"artsubhead\"><img src=\"themes/Inside-Out/images/pixel.gif\" width=\"115\" height=\"1\"><br>\n"
        ."$content\n"
    ."</td><td width=\"15\" background=\"themes/Inside-Out/images/box_bg_r.gif\"><img src=\"themes/Inside-Out/images/pixel.gif\" width=\"15\" height=\"10\"></td></tr></table><img src=\"themes/Inside-Out/images/box_foot.gif\" width=\"153\" height=\"15\" alt=\"\" border=\"0\"><br>\n";
}

?>