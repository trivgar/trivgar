<?php
//THEME NAME ->trek BY RYAN GOMEZ WWW.KREATIVESOURCE.COM
//IF YOU USE A LINK WOULD BE APPRECIATED
/************************************************************/
$bgcolor1 = "#B1B6C2";
$bgcolor2 = "#C8CFDA";
$bgcolor3 = "#B1B6C2";
$bgcolor4 = "#C8CFDA";
$textcolor1 = "#000000";
$textcolor2 = "#000000";

/************************************************************/


function OpenTable() {
    echo "<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\"><tr>
    <td width=\"15\" height=\"15\"><img src=\"themes/trek/images/up-left2.gif\" alt=\"\" border=\"0\"></td>
    <td background=\"themes/trek/images/up2.gif\" align=\"center\" width=\"100%\" height=\"15\">&nbsp;</td>
    <td><img src=\"themes/trek/images/up-right2.gif\" width=\"15\" height=\"15\" alt=\"\" border=\"0\"></td></tr>
    <tr>
    <td background=\"themes/trek/images/left2.gif\" width=\"15\">&nbsp;</td>
    <td bgcolor=\"C8CFDA\" width=\"100%\">";
}

function OpenTable2() {

    echo "<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"><tr>
    <td width=\"15\" height=\"15\"><img src=\"themes/trek/images/up-left2.gif\" alt=\"\" border=\"0\"></td>
    <td background=\"themes/trek/images/up2.gif\" align=\"center\" height=\"15\">&nbsp;</td>
    <td><img src=\"themes/trek/images/up-right2.gif\" width=\"15\" height=\"15\" alt=\"\" border=\"0\"></td></tr>
    <tr>
    <td background=\"themes/trek/images/left2.gif\" width=\"15\">&nbsp;</td>
    <td bgcolor=\"C8CFDA\">";
}

function CloseTable() {
    echo "</td>
    <td background=\"themes/trek/images/right2.gif\">&nbsp;</td></tr>
    <tr>
    <td width=\"15\" height=\"15\"><img src=\"themes/trek/images/down-left2.gif\" alt=\"\" border=\"0\"></td>
    <td background=\"themes/trek/images/down2.gif\" align=\"center\" height=\"15\">&nbsp;</td>
    <td><img src=\"themes/trek/images/down-right2.gif\" width=\"15\" height=\"15\" alt=\"\" border=\"0\"></td></tr>
    </td></tr></table>
    <br>";
}

function CloseTable2() {
    echo "</td>
    <td background=\"themes/trek/images/right2.gif\">&nbsp;</td></tr>
    <tr>
    <td width=\"15\" height=\"15\"><img src=\"themes/trek/images/down-left2.gif\" alt=\"\" border=\"0\"></td>
    <td background=\"themes/trek/images/down2.gif\" align=\"center\" height=\"15\">&nbsp;</td>
    <td><img src=\"themes/trek/images/down-right2.gif\" width=\"15\" height=\"15\" alt=\"\" border=\"0\"></td></tr>
    </td></tr></table>
    <br>";
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

    echo "<!----- trek © 2001-2002 Ryan Gomez (http://www.kreativesource.com) ----->\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n";

        echo "<script type=\"text/javascript\" language=\"JavaScript1.2\" src=\"themes/trek/jscript/imageswap.js\"></script>\n\n\n";

    echo "<body background=\"themes/trek/images/bkg.gif\" text=\"#000000\" leftmargin=\"0\" topmargin=\"0\" marginwidth=\"0\" marginheight=\"0\" onLoad=\"MM_preloadImages('themes/trek/images/navi/nav-bar-home-02.gif','themes/trek/images/navi/nav-bar-account-02.gif','themes/trek/images/navi/nav-bar-topics-02.gif','themes/trek/images/navi/nav-bar-downloads-02.gif','themes/trek/images/navi/nav-bar-forums-02.gif','themes/trek/images/navi/join_on.gif','themes/trek/images/navi/nav-bar-gallery-02.gif','themes/trek/images/navi/dl_nuke_on.gif','themes/trek/images/navi/nav-bar-gallery-02.gif',)\">\n\n\n";

    if ($banners) {
        include("banners.php");
    }




       echo "</td></tr></table>\n"
        ."<table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\" align=\"center\"><tr>\n"
        ."<td><IMG src=\"themes/trek/images/pixel.gif\" width=\"1\" height=\"1\" alt=\"0\" border=\"0\" hspace=\"0\"></td></tr></table>\n"
        ."<table cellpadding=\"0\" cellspacing=\"0\" height=\"73\" width=\"800\" border=\"0\" align=\"center\" background=\"themes/trek/images/top_graphic.gif\">\n"

         ."</table>\n\n\n";
               echo "<table width=\"785\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\">\n"
                  ."<tr valign=\"top\">\n"
            ."<td width=\"192\"><img src=\"themes/trek/images/navi/nav-bar-logo.gif\" width=\"470\" height=\"35\" name=\"navbarleft\"></td>\n"
            ."<td width=\"100\"><a href=\"http://www.kreativesource.com/site_data/modules.php?op=modload&name=My_eGallery&file=index&do=showgall&gid=2\" onMouseOut=\"MM_swapImgRestore()\" onMouseOver=\"MM_swapImage('dlnuke','','themes/trek/images/navi/dl_nuke_on.gif',1)\"><img name=\"dlnuke\" border=\"0\" src=\"themes/trek/images/navi/dl_nuke_off.gif\" width=\"135\" height=\"35\"></a></td>\n"
            ."<td width=\"100\"><a href=\"modules.php?name=Your_Account&op=new_user\" onMouseOut=\"MM_swapImgRestore()\" onMouseOver=\"MM_swapImage('join','','themes/trek/images/navi/join_on.gif',1)\"><img name=\"join\" border=\"0\" src=\"themes/trek/images/navi/join_off.gif\" width=\"165\" height=\"35\"></a></td>\n"
            ."<td width=\"15\"><img src=\"themes/trek/images/navi/topright.gif\" width=\"15\" height=\"35\" name=\"navbarright\"></td>\n"
                  ."</tr>\n"
                ."</table>\n";


                echo "<table width=\"785\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\">\n"
                  ."<tr valign=\"top\">\n"
            ."<td width=\"43\"><img src=\"themes/trek/images/navi/nav-bar-left.gif\" width=\"42\" height=\"25\" name=\"navbarleft\"></td>\n"
            ."<td width=\"100\"><a href=\"index.php\" onMouseOut=\"MM_swapImgRestore()\" onMouseOver=\"MM_swapImage('home','','themes/trek/images/navi/nav-bar-home-02.gif',1)\"><img name=\"home\" border=\"0\" src=\"themes/trek/images/navi/nav-bar-home-01.gif\" width=\"100\" height=\"25\"></a></td>\n"
            ."<td width=\"100\"><a href=\"modules.php?name=Your_Account\" onMouseOut=\"MM_swapImgRestore()\" onMouseOver=\"MM_swapImage('account','','themes/trek/images/navi/nav-bar-account-02.gif',1)\"><img name=\"account\" border=\"0\" src=\"themes/trek/images/navi/nav-bar-account-01.gif\" width=\"100\" height=\"25\"></a></td>\n"
            ."<td width=\"100\"><a href=\"modules.php?name=Topics\" onMouseOut=\"MM_swapImgRestore()\" onMouseOver=\"MM_swapImage('topics','','themes/trek/images/navi/nav-bar-topics-02.gif',1)\"><img name=\"topics\" border=\"0\" src=\"themes/trek/images/navi/nav-bar-topics-01.gif\" width=\"100\" height=\"25\"></a></td>\n"
            ."<td width=\"100\"><a href=\"modules.php?name=Downloads\" onMouseOut=\"MM_swapImgRestore()\" onMouseOver=\"MM_swapImage('downloads','','themes/trek/images/navi/nav-bar-downloads-02.gif',1)\"><img name=\"downloads\" border=\"0\" src=\"themes/trek/images/navi/nav-bar-downloads-01.gif\" width=\"100\" height=\"25\"></a></td>\n"
            ."<td width=\"100\"><a href=\"modules.php?name=XForum\" onMouseOut=\"MM_swapImgRestore()\" onMouseOver=\"MM_swapImage('forum','','themes/trek/images/navi/nav-bar-forums-02.gif',1)\"><img name=\"forum\" border=\"0\" src=\"themes/trek/images/navi/nav-bar-forums-01.gif\" width=\"100\" height=\"25\"></a></td>\n"
            ."<td width=\"100\"><a href=\"modules.php?name=My_eGallery\" onMouseOut=\"MM_swapImgRestore()\" onMouseOver=\"MM_swapImage('gallery','','themes/trek/images/navi/nav-bar-gallery-02.gif',1)\"><img name=\"gallery\" border=\"0\" src=\"themes/trek/images/navi/nav-bar-gallery-01.gif\" width=\"100\" height=\"25\"></a></td>\n"
            ."<td width=\"100\"><a href=\"modules.php?name=Feedback\" onMouseOut=\"MM_swapImgRestore()\" onMouseOver=\"MM_swapImage('contact','','themes/trek/images/navi/nav-bar-contact-02.gif',1)\"><img name=\"contact\" border=\"0\" src=\"themes/trek/images/navi/nav-bar-contact-01.gif\" width=\"100\" height=\"25\"></a></td>\n"
            ."<td width=\"42\"><img src=\"themes/trek/images/navi/nav-bar-right.gif\" width=\"43\" height=\"25\" name=\"navbarright\"></td>\n"
                  ."</tr>\n"
                ."</table>\n";

// Top Image
        echo "<table width=\"785\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\">\n"
            ."<tr valign=\"top\">\n"
            ."<td><img src=\"themes/trek/images/topper.gif\" width=\"785\" height=\"12\" border=\"0\" alt=\"\"></td>\n"
            ."</tr>\n"
            ."</table>\n\n\n";

// Main Content Table
        echo "<table width=\"785\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\">\n"
            ."<tr valign=\"top\">\n"

            ."<td <td background=\"themes/trek/images/side_bgL.gif\" width=\"13\" height=\"5\"><img src=\"themes/trek/images/side_bgL.gif\" width=\"13\" height=\"5\" border=\"0\" alt=\"\"></td>\n"
            ."<td width=\"150\" valign=\"top\">\n";
    blocks(left);
    echo "</td>\n"
        ."<td width=\"10\"><img src=\"themes/trek/images/pixel.gif\" width=\"10\" height=\"1\" border=\"0\" alt=\"\"></td>\n"



        ."<td align=\"left\" width=\"600\">\n";
}

/************************************************************/


function themefooter() {
    global $index;
    if ($index == 1) {
        echo "</td>\n"
            ."<td><img src=\"themes/trek/images/pixel.gif\" width=\"10\" height=\"1\" border=\"0\" alt=\"\"></td>\n"

            ."<td valign=\"top\" width=\"150\">\n";
        blocks(right);
    }
    echo "</td>\n"
        ."<td><img src=\"themes/trek/images/pixel.gif\" width=\"5\" height=\"1\" border=0 alt=\"\"></td>\n"

        ."<td background=\"themes/trek/images/side_bg.gif\" width=\"9\" height=\"1\"><img src=\"themes/trek/images/side_bg.gif\" width=\"9\" height=\"1\" border=\"0\" alt=\"\"></td>\n"


            ."</tr>\n"
            ."</table>\n\n\n";

// Footer Graphic
    echo "<table width=\"785\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\">\n"
        ."<tr>\n"
        ."<td width=\"785\" height=\"44\"><img src=\"themes/trek/images/footer-image.gif\" width=\"785\" height=\"44\" alt=\"\"></td>\n"
        ."</tr>\n"
        ."</table>\n\n\n";

//Footer Text
    echo "<br><table width=\"785\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\">\n"
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

// Story Box Title Table
    echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\"width=\"430\">\n"
            ."<tr>\n"
            ."<td>\n"

            ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\"width=\"100%\">\n"
            ."<tr>\n"
             ."<td align=\"left\" valign=\"top\" width=\"30\" height=\"30\"><img src=\"themes/trek/images/sidebox-title-left.gif\"></td>\n"
            ."<td align=\"left\" width=\"70%\" background=\"themes/trek/images/title_bg_l.gif\"><b>$title</b></td>\n"
            ."<td align=\"left\" width=\"20\" background=\"themes/trek/images/story-title-splitter.gif\"><img src=\"themes/trek/images/pixel.gif\" width=\"20\"></td>\n"
            ."<td align=\"left\" width=\"30%\"  background=\"themes/trek/images/title_bg_r.gif\"><img src=\"themes/trek/images/pixel.gif\"></td>\n"
            ."<td align=\"left\" valign=\"top\" width=\"65\" height=\"30\"><img src=\"themes/trek/images/sidebox-title-right.gif\"></td>\n"
            ."</tr>\n"
            ."</table>\n\n\n";

// Story Box Content
    echo "<table border=\"0\" cellpadding=\"9\" cellspacing=\"0\" background=\"themes/trek/images/story_bg.gif\" width=\"430\">\n"
        ."<tr>\n"
        ."<td>\n"
            ."<font color=\"#999999\" size=\"1\">"._POSTEDBY." $aid";

    echo " "._ON." $time $timezone ($counter "._READS.")</font><br><br>\n"
            ."<a href=\"modules.php?name=News&amp;new_topic=$topic\"><img src=\"images/topics/$topicimage\" border=\"0\" alt=\"$topictext\" align=\"left\" hspace=\"5\" vspace=\"5\"></a>\n";
    FormatStory($thetext, $notes, $aid, $informant);
    echo "</td>\n"
        ."</tr>\n"
        ."</table>\n\n\n";

// Story Box Posted By, Morelink, Print
        echo "<table border=\"0\" cellpadding=\"9\" cellspacing=\"0\" background=\"themes/trek/images/story_bg.gif\" width=\"430\">\n"
            ."<tr>\n"
            ."<td align=\"right\"><br>\n"
            ."<font class=\"content\">$morelink</font>\n"
            ."</td>\n"
            ."</tr>\n"
            ."</table>\n"

            ."</td>\n"
            ."</tr>\n"
                        ."<td align=\"left\" valign=\"top\" width=\"430\" height=\"30\"><img src=\"themes/trek/images/storybox_foot.gif\"></td>\n"
            ."</table>\n";
}

/************************************************************/


function themearticle ($aid, $informant, $datetime, $title, $thetext, $topic, $topicname, $topicimage, $topictext) {
    global $admin, $sid, $tipath;

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
    echo "<img src=\"themes/trek/images/box_head.gif\" width=\"153\" height=\"8\" alt=\"\" border=\"0\"><br><table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" background=\"themes/trek/images/box_headline.gif\" width=\"153\" height=\"27\"><tr><td align=center class=\"menuehead\">\n"
        ."    $title\n"
        ."</td></tr></table>\n"
        ."<table bgcolor=\"E4E6EA\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"153\">\n"
        ."<tr valign=\"top\"><td width=\"20\" background=\"themes/trek/images/box_bg_l.gif\"><img src=\"themes/trek/images/pixel.gif\" width=\"20\" height=\"10\"></td><td class=\"artsubhead\"><img src=\"themes/trek/images/pixel.gif\" width=\"115\" height=\"1\"><br>\n"
        ."$content\n"
    ."</td><td width=\"15\" background=\"themes/trek/images/box_bg_r.gif\"><img src=\"themes/trek/images/pixel.gif\" width=\"15\" height=\"10\"></td></tr></table><img src=\"themes/trek/images/box_foot.gif\" width=\"153\" height=\"15\" alt=\"\" border=\"0\"><br>\n";
}

?>