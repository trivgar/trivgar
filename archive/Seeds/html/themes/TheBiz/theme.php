<?php

/************************************************************/
/* IMPORTANT NOTE FOR THEMES DEVELOPERS!                    */
/*                                                          */
/* When you start modifying your theme, if you want to      */
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

global $loonr, $prefix, $dbi, $kokku;
$kokku = sql_num_rows(sql_query("select * from $prefix"._stories." LIMIT 0, 30 ", $dbi), $dbi);

$bgcolor1 = "#efefef";
$bgcolor2 = "#41729e";
$bgcolor3 = "#ffffff";
$bgcolor4 = "#586480";
$bgcolor5 = "#3399CC";
$textcolor1 = "#000000";
$textcolor2 = "#FFFFFF";
$textcolor3 = "#FFFFFF";

if ($loonr == "") {
    $loonr = "0";
}

include("themes/e-worxsTEC/tables.php");

/************************************************************/
/* Function themeheader()                                   */
/*                                                          */
/* Control the header for your site. You need to define the */
/* BODY tag and in some part of the code call the blocks    */
/* function for left side with: blocks(left);               */
/************************************************************/

function themeheader() {
    global $user, $banners, $sitename, $slogan, $cookie, $prefix, $dbi;
    cookiedecode($user);
    $username = $cookie[1];
    if ($username == "") {
        $username = "Anonymous";
    }
    echo "<body bgcolor=\"#004080\" text=\"#000000\" link=\"#004080\" vlink=\"#004080\" alink=\"#004080\">";
    if ($banners) {
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
    $tmpl_file = "themes/e-worxsTEC/header.html";
    $thefile = implode("", file($tmpl_file));
    $thefile = addslashes($thefile);
    $thefile = "\$r_file=\"".$thefile."\";";
    eval($thefile);
    print $r_file;
    if ($username == "Anonymous") {
    echo "&nbsp;&nbsp; $textcolor3 Willkommen <a href=\"modules.php?name=Your_Account\">SIGNUP | LOGIN</a>.</font>\n";
    } else {
    $welcomedate = date("H");
    if($welcomedate < 12)
    echo "&nbsp;&nbsp;Guten Morgen $username!";
    else if($welcomedate < 18)
    echo "&nbsp;&nbsp;Guten Tag $username!";
    else
    echo "&nbsp;&nbsp;Guten Abend $username!</font>";
    }
    echo "</td>";
    echo "<td bgcolor=\"#B0C4DE\" style=\"border-bottom: 1px solid #000000;border-right: 1px solid #000000;\" valign=\"top\" align=\"right\">";
    print (Date("d. m. Y"));
    echo "&nbsp;&nbsp;";
    echo "<font></td></tr></table>";

    echo "<table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" bgcolor=\"#ffffff\" align=\"center\">\n"
        ."<tr valign=\"top\">\n"
        ."<td bgcolor=\"#ffffff\">\n"
        ."<img src=\"themes/e-worxsTEC/images/pixel.gif\" width=\"1\" height=\"20\" border=\"0\" alt=\"\">\n"
        ."</td>\n"
        ."</tr></table>\n"
        ."<table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" bgcolor=\"#ffffff\" align=\"center\"><tr valign=\"top\">\n"
        ."<td bgcolor=\"#ffffff\"><img src=\"themes/e-worxsTEC/images/pixel.gif\" width=\"10\" height=\"1\" border=\"0\" alt=\"\"></td>\n"
        ."<td bgcolor=\"#ffffff\" width=\"120\" valign=\"top\">";
    blocks(left);
    $tmpl_file = "themes/e-worxsTEC/left_center.html";
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
    global $index, $foot1, $foot2, $foot3, $foot4;
    if ($index == 1) {
        $tmpl_file = "themes/e-worxsTEC/center_right.html";
        $thefile = implode("", file($tmpl_file));
        $thefile = addslashes($thefile);
        $thefile = "\$r_file=\"".$thefile."\";";
        eval($thefile);
        print $r_file;
        blocks(right);
    }
    $footer_message = "$foot1<br>$foot2<br>$foot3<br>$foot4";
    $tmpl_file = "themes/e-worxsTEC/footer.html";
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
    global $anonymous, $tipath, $cookie, $loonr, $vasak, $parem, $kokku, $storyhome, $storynum;
    $loonr = ($loonr+1);
    if (isset($cookie[3])) {
        $storynum = $cookie[3];
    } else {
        $storynum = $storyhome;
    }
    $ridaaa1 = round($loonr/2);
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
    $posted = ""._POSTEDBY." ";
    $posted .= get_author($aid);
    $posted .= " "._ON." $time $timezone";
    if (($ridaaa2*2) != $loonr) {
        $tmpl_file = "themes/e-worxsTEC/story_home.html";
        $thefile = implode("", file($tmpl_file));
        $thefile = addslashes($thefile);
        $thefile = "\$r_file=\"".$thefile."\";";
        eval($thefile);
        $vasak .= "$r_file";
    }
    if ($loonr == $storynum OR $loonr == $kokku) {
        echo "<table width=\"100%\" border=\"0\"  cellpadding=\"0\" cellspacing=\"0\">";
        echo "<tr>";
        echo "<td width=\"100%\" valign=\"top\">";
        print $vasak;
        echo "</td>";
        echo "<td width=\"5\" cellpadding=\"0\" cellspacing=\"0\" valign=\"top\"></td>";
        echo "<td width=\"100%\" valign=\"top\">";
        print $parem;
        echo "</td>";
        echo "</tr>";
        echo "</table>";
    }
}

/************************************************************/
/* Function themeindex()                                    */
/*                                                          */
/* This function format the stories on the story page, when */
/* you click on that "Read More..." link in the home        */
/************************************************************/

function themearticle ($aid, $informant, $datetime, $title, $thetext, $topic, $topicname, $topicimage, $topictext) {
    global $admin, $sid;
    $posted = ""._POSTEDON." $datetime "._BY." ";
    $posted .= get_author($aid);
    if ($notes != "") {
        $notes = "<br><br><b>"._NOTE."</b> $notes\n";
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
        $content .= ""._WRITES." \"$thetext\"$notes\n";
    }
    $tmpl_file = "themes/e-worxsTEC/story_page.html";
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
    $tmpl_file = "themes/e-worxsTEC/blocks.html";
    $thefile = implode("", file($tmpl_file));
    $thefile = addslashes($thefile);
    $thefile = "\$r_file=\"".$thefile."\";";
    eval($thefile);
    print $r_file;
}

?>