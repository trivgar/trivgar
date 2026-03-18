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

global $new_topic, $catid, $topic, $categories, $topics, $side, $pos, $storyhome, $loonr, $kokku, $NameOfTheme, $bgcolor1, $bgcolor2, $bgcolor3, $bgcolor4, $bgcolor5, $bgcolor6, $bgcolor7, $textcolor1, $textcolor2, $textcolor3, $textcolor4, $prefix, $dbi, $querylang;
if ($topics==1) {
    $kokku = sql_num_rows(sql_query("SELECT * FROM ".$prefix."_stories WHERE topic='$topic' $querylang LIMIT $storyhome", $dbi), $dbi);
} elseif($categories==1) {
    $kokku = sql_num_rows(sql_query("SELECT * FROM ".$prefix."_stories WHERE catid='$catid' $querylang LIMIT $storyhome", $dbi), $dbi);
} elseif($new_topic > 0) {
    $kokku = sql_num_rows(sql_query("SELECT * FROM ".$prefix."_stories WHERE topic='$new_topic' $querylang LIMIT $storyhome", $dbi), $dbi);
} else {
    $kokku = sql_num_rows(sql_query("SELECT * FROM $prefix"._stories." WHERE sid='*' $querylang LIMIT 0, $storyhome ", $dbi), $dbi);
}

$NameOfTheme = "NSN_Green_v3b";
$bgcolor1 = "#c0ffc0";
$bgcolor2 = "#a0ffa0";
$bgcolor3 = "#c0ffc0";
$bgcolor4 = "#a0ffa0";
$bgcolor5 = "#d0ffd0";
$bgcolor6 = "#80ff80";
$bgcolor7 = "#4dcc4d";
$textcolor1 = "#000000";
$textcolor2 = "#000000";
$textcolor3 = "#ffff00";
$textcolor4 = "#ffffff";

if ($kokku == "") {
    $kokku = $storyhome;
}

if ($loonr == "") {
    $loonr = "0";
}

if (isset($newlang)) { $language = $newlang; } elseif (isset($lang)) { $language = $lang; }

if(file_exists("themes/$NameOfTheme/language/lang-$language.php")) { include("themes/$NameOfTheme/language/lang-$language.php"); } else { include("themes/$NameOfTheme/language/lang-english.php"); }
include("themes/$NameOfTheme/tables.php");

/************************************************************/
/* Function themeheader()                                   */
/*                                                          */
/* Control the header for your site. You need to define the */
/* BODY tag and in some part of the code call the blocks    */
/* function for left side with: blocks(left);               */
/************************************************************/

function themeheader() {
    global $user, $banners, $sitename, $slogan, $cookie, $prefix, $user_prefix, $dbi, $NameOfTheme, $bgcolor1, $bgcolor2, $bgcolor3, $bgcolor4, $bgcolor5, $bgcolor6, $bgcolor7, $textcolor1, $textcolor2, $textcolor3, $textcolor4;
    cookiedecode($user);
    $username = $cookie[1];
    if ($username == "") {
        $username = "Anonymous";
    }
    echo "<body text=\"#000000\" link=\"#363636\" vlink=\"#363636\" alink=\"#d5ae83\" topmargin=\"0\" leftmargin=\"0\" marginwidth=\"0\" marginheight=\"0\">\n";

    echo "<div id=\"overDiv\" style=\"position:absolute; visibility:hidden; z-index:1000;\"></div>\n";
    echo "<script language=\"JavaScript\" src=\"themes/$NameOfTheme/style/overlib.js\"><!-- overLIB (c) Erik Bosrup --></script>\n"; 

/*
        if ($banners == 1) {
        OpenTable2();
        include("banners.php");
        CloseTable2();
        echo "<br>";
    }
*/
    if ($banners == 1) {
        global $prefix, $dbi, $admin;
        $bresult = sql_query("select * from ".$prefix."_banner", $dbi);
        $numrows = sql_num_rows($bresult, $dbi);
        if ($numrows>1) {
            $numrows = $numrows-1;
            mt_srand((double)microtime()*1000000);
            $bannum = mt_rand(0, $numrows);
        } else {
            $bannum = 0;
        }
        $bresult2 = sql_query("select bid, imageurl from ".$prefix."_banner limit $bannum,1", $dbi);
        list($bid, $imageurl) = sql_fetch_row($bresult2, $dbi);
        if (is_admin($admin)) {
        } else {
            sql_query("update ".$prefix."_banner set impmade=impmade+1 where bid=$bid", $dbi);
        }
        if($numrows>0) {
            $aborrar = sql_query("select cid, imptotal, impmade, clicks, date from ".$prefix."_banner where bid=$bid", $dbi);
            list($cid, $imptotal, $impmade, $clicks, $date) = sql_fetch_row($aborrar, $dbi);
            if (($imptotal <= $impmade) AND ($imptotal != 0)) {
                sql_query("insert into ".$prefix."_bannerfinish values (NULL, '$cid', '$impmade', '$clicks', '$date', now())", $dbi);
                sql_query("delete from ".$prefix."_banner where bid=$bid", $dbi);
            }
            $tbanners = "<a href=\"banners.php?op=click&amp;bid=$bid\" target=\"_blank\"><img src=\"$imageurl\" border=\"0\" alt=\"\"></a>";
        }
    }
    $uresult = sql_query("select uid from $user_prefix"._users." where uname='$username'", $dbi);
    list($uid) = sql_fetch_row($uresult, $dbi);
    $presult = sql_query("select * from $prefix"._priv_msgs." where to_userid='$uid'", $dbi);
    $pnumrow = sql_num_rows($presult, $dbi);
    if ($username == "Anonymous") {
        $priv_msgs = "<font class=\"content\">"._TNOINFOFOR." $username</font>";
    } else {
        $priv_msgs = "<font class=\"content\">"._TYOUHAVE." <a href=\"modules.php?name=Private_Messages\">$pnumrow</a> "._TPRIVATEMSG."</font>";
    }
    $mresult = sql_query("select * from $user_prefix"._users."", $dbi);
    $mnumrow = sql_num_rows($mresult, $dbi);
    $members = "<font class=\"content\">"._TREGUSERS." $mnumrow</font>";
    if ($username == "Anonymous") {
        $theuser = "<a href=\"modules.php?name=Your_Account&op=new_user\">"._TNEWUSER."</a> / <a href=\"modules.php?name=Your_Account\">"._TUSERLOGIN."</a>";
    } else {
        $theuser = ""._THELLO." $username: <a href=\"modules.php?name=Your_Account&op=logout\">"._TLOGOUT."</a>";
    }
    include("themes/$NameOfTheme/navbar.php");
    $tmpl_file = "themes/$NameOfTheme/header.html";
    $thefile = implode("", file($tmpl_file));
    $thefile = addslashes($thefile);
    $thefile = "\$r_file=\"".$thefile."\";";
    eval($thefile);
    print $r_file;
    blocks(left);
    $tmpl_file = "themes/$NameOfTheme/center_left.html";
    $thefile = implode("", file($tmpl_file));
    $thefile = addslashes($thefile);
    $thefile = "\$r_file=\"".$thefile."\";";
    eval($thefile);
    print $r_file;
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
    global $index, $foot1, $foot2, $foot3, $foot4, $NameOfTheme, $bgcolor1, $bgcolor2, $bgcolor3, $bgcolor4, $bgcolor5, $bgcolor6, $bgcolor7, $textcolor1, $textcolor2, $textcolor3, $textcolor4;
        $tmpl_file = "themes/$NameOfTheme/center_right.html";
        $thefile = implode("", file($tmpl_file));
        $thefile = addslashes($thefile);
        $thefile = "\$r_file=\"".$thefile."\";";
        eval($thefile);
        print $r_file;
        blocks(right);
    include("themes/$NameOfTheme/navbar.php");
    $footer_message = "$foot1<br>$foot2<br>$foot3<br>$foot4";
    $tmpl_file = "themes/$NameOfTheme/footer.html";
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
    global $cookie, $loonr, $vasak, $parem, $kokku, $admin, $sid, $anonymous, $tipath, $NameOfTheme, $bgcolor1, $bgcolor2, $bgcolor3, $bgcolor4, $bgcolor5, $bgcolor6, $bgcolor7, $textcolor1, $textcolor2, $textcolor3, $textcolor4;
    $loonr = ($loonr+1);
    if (isset($cookie[3])) {
        $storynum = $cookie[3];
    } else {
        $storynum = $storyhome;
    }
    $ridaaa1 = round($loonr/2);
    if ($notes != "") {
        $notes = "<br><br><b>"._TNOTE."</b> <i>$notes</i>\n";
    } else {
        $notes = "";
    }
    if ("$aid" == "$informant") {
        $content = "$thetext$notes\n";
    } else {
        if($informant != "") {
            $content = "<a href=\"modules.php?name=Your_Account&op=userinfo&amp;uname=$informant\">$informant</a> ";
        } else {
            $content = "$anonymous ";
        }
        $content .= ""._TWRITES." \"$thetext\"$notes\n";
    }
    $posted = ""._TPOSTEDBY." ";
    $posted .= get_author($aid);
    $posted .= " "._TON." $time $timezone ($counter "._TREADS.")";

    if (($ridaaa1*2) != $loonr) {
        $tmpl_file = "themes/$NameOfTheme/story_home.html";
        $thefile = implode("", file($tmpl_file));
        $thefile = addslashes($thefile);
        $thefile = "\$r_file=\"".$thefile."\";";
        eval($thefile);
        $vasak .= "$r_file";
    } else {
        $tmpl_file = "themes/$NameOfTheme/story_home.html";
        $thefile = implode("", file($tmpl_file));
        $thefile = addslashes($thefile);
        $thefile = "\$r_file=\"".$thefile."\";";
        eval($thefile);
        $parem .= "$r_file";
    }
    if ($loonr == $storynum OR $loonr == $kokku) {
        echo "<table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr>";
        echo "<td width=\"49%\" valign=\"top\">$vasak</td>";
        echo "<td width=\"2%\" valign=\"top\">&nbsp;</td>";
        echo "<td width=\"49%\" valign=\"top\">$parem</td>";
        echo "</tr></table>";
    }

}

/************************************************************/
/* Function themeindex2()                                    */
/*                                                          */
/* This function format the stories on the Homepage         */
/************************************************************/

function themeindex2 ($aid, $informant, $time, $title, $counter, $topic, $thetext, $notes, $morelink, $topicname, $topicimage, $topictext) {
    global $cookie, $loonr, $vasak, $parem, $kokku, $admin, $sid, $anonymous, $tipath, $NameOfTheme, $bgcolor1, $bgcolor2, $bgcolor3, $bgcolor4, $bgcolor5, $bgcolor6, $bgcolor7, $textcolor1, $textcolor2, $textcolor3, $textcolor4;
    $loonr = ($loonr+1);
    if (isset($cookie[3])) {
        $storynum = $cookie[3];
    } else {
        $storynum = $storyhome;
    }
    $ridaaa1 = round($loonr/2);
    if ($notes != "") {
        $notes = "<br><br><b>"._TNOTE."</b> <i>$notes</i>\n";
    } else {
        $notes = "";
    }
    if ("$aid" == "$informant") {
        $content = "$thetext$notes\n";
    } else {
        if($informant != "") {
            $content = "<a href=\"modules.php?name=Your_Account&op=userinfo&amp;uname=$informant\">$informant</a> ";
        } else {
            $content = "$anonymous ";
        }
        $content .= ""._TWRITES." \"$thetext\"$notes\n";
    }
    $posted = ""._TPOSTEDBY." ";
    $posted .= get_author($aid);
    $posted .= " "._TON." $time $timezone ($counter "._TREADS.")";

    if (($ridaaa1*2) != $loonr) {
        $tmpl_file = "themes/$NameOfTheme/story_home.html";
        $thefile = implode("", file($tmpl_file));
        $thefile = addslashes($thefile);
        $thefile = "\$r_file=\"".$thefile."\";";
        eval($thefile);
        $vasak .= "$r_file";
    } else {
        $tmpl_file = "themes/$NameOfTheme/story_home.html";
        $thefile = implode("", file($tmpl_file));
        $thefile = addslashes($thefile);
        $thefile = "\$r_file=\"".$thefile."\";";
        eval($thefile);
        $parem .= "$r_file";
    }
    if ($loonr == $storynum OR $loonr == $kokku) {
        echo "<table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr>";
        echo "<td width=\"49%\" valign=\"top\">$vasak</td>";
        echo "<td width=\"2%\" valign=\"top\">&nbsp;</td>";
        echo "<td width=\"49%\" valign=\"top\">$parem</td>";
        echo "</tr></table>";
    }

}

/************************************************************/
/* Function themearticle()                                  */
/*                                                          */
/* This function format the stories on the story page, when */
/* you click on that "Read More..." link in the home        */
/************************************************************/

function themearticle ($aid, $informant, $datetime, $title, $thetext, $topic, $topicname, $topicimage, $topictext) {
    global $admin, $sid, $tipath, $NameOfTheme, $bgcolor1, $bgcolor2, $bgcolor3, $bgcolor4, $bgcolor5, $bgcolor6, $bgcolor7, $textcolor1, $textcolor2, $textcolor3, $textcolor4;
/*    $posted = ""._TPOSTEDON." $datetime "._TBY." ";
    $posted .= get_author($aid);*/
    $posted = ""._TPOSTEDBY." ";
    $posted .= get_author($aid);
    $posted .= " "._TON." $time $timezone ($counter "._TREADS.")";
    if (is_admin($admin)) {
        $posted .= " [ <a href=\"admin.php?op=EditStory&amp;sid=$sid\">"._TEDIT."</a> | <a href=\"admin.php?op=RemoveStory&amp;sid=$sid\">"._TDELETE."</a> ]\n";
    }
    if ($notes != "") {
        $notes = "<br><br><b>"._TNOTE."</b> <i>$notes</i>\n";
    } else {
        $notes = "";
    }
    if ("$aid" == "$informant") {
        $content = "$thetext$notes\n";
    } else {
        if($informant != "") {
            $content = "<a href=\"modules.php?name=Your_Account&op=userinfo&amp;uname=$informant\">$informant</a> ";
        } else {
            $content = "$anonymous ";
        }
        $content .= ""._TWRITES." \"$thetext\"$notes\n";
    }
    $tmpl_file = "themes/$NameOfTheme/story_page.html";
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
    global $NameOfTheme, $bgcolor1, $bgcolor2, $bgcolor3, $bgcolor4, $bgcolor5, $bgcolor6, $bgcolor7, $textcolor1, $textcolor2, $textcolor3, $textcolor4;
    $tmpl_file = "themes/$NameOfTheme/blocks.html";
    $thefile = implode("", file($tmpl_file));
    $thefile = addslashes($thefile);
    $thefile = "\$r_file=\"".$thefile."\";";
    eval($thefile);
    print $r_file;
}

?>