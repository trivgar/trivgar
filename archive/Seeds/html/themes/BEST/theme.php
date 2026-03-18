<?php

/************************************************************/
/* THEME NAME: Reality                                      */
/* THEME DEVELOPER: Necromancer (http://www.realm.tr.cx)     */
/************************************************************/

/************************************************************/
/* Theme Colors Definition                                  */
/************************************************************/

$bgcolor1 = "#828e99";
$bgcolor2 = "";
$bgcolor3 = "";
$bgcolor4 = "";
$textcolor1 = "#828e99";
$textcolor2 = "#FFFFFF";

include("themes/BEST/tables.php");

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
    echo "<BODY onmouseover=\"window.status=' .::Realm Design::. ';return true\" text=\"#999999\" vLink=\"#aaaeb3\" aLink=\"#aaaeb3\" link=\"#aaaeb3\" bgColor=\"#000000\" background=\"themes/BEST/images/back.gif\" topMargin=\"0\"
marginheight=\"0\" marginwidth=\"0\">";
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
        $theuser = "&nbsp;&nbsp;<a href=\"user.php\">Create an account";
    } else {
        $theuser = "&nbsp;&nbsp;Welcome $username!";
    }
    $tmpl_file = "themes/BEST/header.html";
    $thefile = implode("", file($tmpl_file));
    $thefile = addslashes($thefile);
    $thefile = "\$r_file=\"".$thefile."\";";
    eval($thefile);
    print $r_file;
    blocks(left);
    $tmpl_file = "themes/BEST/left_center.html";
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
    global $index, $foot1, $foot2, $foot3, $foot4;
    if ($index == 1) {
        $tmpl_file = "themes/BEST/center_right.html";
        $thefile = implode("", file($tmpl_file));
        $thefile = addslashes($thefile);
        $thefile = "\$r_file=\"".$thefile."\";";
        eval($thefile);
        print $r_file;
        blocks(right);
    }
    $footer_message = "$foot1<br>$foot2<br>$foot3<br>$foot4";
    $tmpl_file = "themes/BEST/footer.html";
    $thefile = implode("", file($tmpl_file));
    $thefile = addslashes($thefile);
    $thefile = "\$r_file=\"".$thefile."\";";
    eval($thefile);
    print $r_file;
}

/************************************************************/
/* Function themeindex()                                    */
/*                                                          */
/* This function format the stories on the Homepage         */
/************************************************************/

function themeindex ($aid, $informant, $time, $title, $counter, $topic, $thetext, $notes, $morelink, $topicname, $topicimage, $topictext) {
    global $anonymous, $tipath;
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
    $posted = ""._POSTEDBY." ";
    $posted .= get_author($aid);
    $posted .= " "._ON." $time $timezone ($counter "._READS.")";
    $tmpl_file = "themes/BEST/story_home.html";
    $thefile = implode("", file($tmpl_file));
    $thefile = addslashes($thefile);
    $thefile = "\$r_file=\"".$thefile."\";";
    eval($thefile);
    print $r_file;
}

/************************************************************/
/* Function themearticle()                                  */
/*                                                          */
/* This function format the stories on the story page, when */
/* you click on that "Read More..." link in the home        */
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
    $tmpl_file = "themes/BEST/story_page.html";
    $thefile = implode("", file($tmpl_file));
    $thefile = addslashes($thefile);
    $thefile = "\$r_file=\"".$thefile."\";";
    eval($thefile);
    print $r_file;
}

/************************************************************/
/* Function themesidebox()                                  */
/*                                                          */
/* Control look of your blocks. Just simple.                */
/************************************************************/

function themesidebox($title, $content) {
    $tmpl_file = "themes/BEST/blocks.html";
    $thefile = implode("", file($tmpl_file));
    $thefile = addslashes($thefile);
    $thefile = "\$r_file=\"".$thefile."\";";
    eval($thefile);
    print $r_file;
}

?>