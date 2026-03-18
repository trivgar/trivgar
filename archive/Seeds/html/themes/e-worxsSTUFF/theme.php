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

$bgcolor1 = "#ffffff";
$bgcolor2 = "#A7C3FB";
$bgcolor3 = "#efefef";
$bgcolor4 = "#A7C3FB";
$textcolor1 = "#000000";
$textcolor2 = "#000000";

include("themes/e-worxsSTUFF/tables.php");

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
    echo "<body bgcolor=\"#ffffff\" text=\"#000000\">";
    echo "<script language=\"Javascript\" src=\"themes/e-worxsSTUFF/style/fade2.js\"></script>";
    if ($banners == 1) {
        include("banners.php");
    }
    $topics_list = "<select name=\"new_topic\" onChange='submit()'>\n";
    $topics_list .= "<option value=\"\">All Topics</option>\n";
    $toplist = sql_query("select topicid, topictext from ".$prefix."_topics order by topictext", $dbi);
    while(list($topicid, $topics) = sql_fetch_row($toplist, $dbi)) {
    if ($topicid==$topic) { $sel = "selected "; }
        $topics_list .= "<option $sel value=\"$topicid\">$topics</option>\n";
        $sel = "";
    }
    if ($username == "Anonymous") {
  $theuser = "&nbsp;&nbsp;<a href=\"modules.php?name=Your_Account&op=new_user\">Register Now!";
    } else {
  $theuser = "&nbsp;&nbsp;Willkommen $username!";
    }
    $tmpl_file = "themes/e-worxsSTUFF/header.html";
    $thefile = implode("", file($tmpl_file));
    $thefile = addslashes($thefile);
    $thefile = "\$r_file=\"".$thefile."\";";
    eval($thefile);
    print $r_file;
    blocks(left);
    $tmpl_file = "themes/e-worxsSTUFF/left_center.html";
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
        $tmpl_file = "themes/e-worxsSTUFF/center_right.html";
        $thefile = implode("", file($tmpl_file));
        $thefile = addslashes($thefile);
        $thefile = "\$r_file=\"".$thefile."\";";
        eval($thefile);
        print $r_file;
        blocks(right);
    }
    $footer_message = "$foot1<br>$foot2<br>$foot3<br>$foot4";
    $tmpl_file = "themes/e-worxsSTUFF/footer.html";
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
    $tmpl_file = "themes/e-worxsSTUFF/story_home.html";
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
    $tmpl_file = "themes/e-worxsSTUFF/story_page.html";
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
//Code Change - rewritten function for show and hide blocks
function themesidebox($title, $content, $bid = -1) {
        //no content...return
        if ($content == "") return;
        //set show as default
        $show = true;
        //if block cannot be hidden, no img
        if ($bid == -1) {
                $link_text = "";
        }
        else {
                //get cookie
                global $block_cookie;
                //check if block id $bid is in cookie. if so, hide block
                if (isset ($block_cookie)) {
                        if (in_array ($bid, $block_cookie)) {
                                $show = false;
                        }
                }

                //get querystring
                $querystring = $_SERVER['QUERY_STRING'];
                //remove any bshow=*&s=* from querystring with ""
                $search = array("!&bshow=(.*?)show!", "!&bshow=(.*?)hide!", "!bshow=(.*?)show!", "!bshow=(.*?)hide!");
                $replace = "";
                $querystring = preg_replace ($search, $replace, $querystring);
                //get url
                $doc = $_SERVER['PHP_SELF'];
                //build total url
                if ($querystring != "") {
                        $doc .= "?".$querystring."&";
                }
                else {
                        $doc .= "?";
                }
                //build links for block header
                if (!$show) {
                        $link_text = $doc."bshow=$bid&s=show";
                        $img_text = "show";
                }
                else {
                        $link_text = $doc."bshow=$bid&s=hide";
                        $img_text = "hide";
                }

                $link_text = "<a href=\"$link_text\"><img src=\"themes/e-worxsSTUFF/images/block_$img_text.gif\" border=\"0\" alt=\"$img_text\"></a>";
   }

    //Set width for side block
    $block_width = "150";
    $tmpl_file = "themes/e-worxsSTUFF/blocks.html";
    $thefile = implode("", file($tmpl_file));
    $thefile = addslashes($thefile);
    $thefile = "\$r_file=\"".$thefile."\";";
    eval($thefile);
    print $r_file;

                if ($show || $bid == -1) {
            $tmpl_file = "themes/e-worxsSTUFF/blocks_content.html";
            $thefile = implode("", file($tmpl_file));
            $thefile = addslashes($thefile);
            $thefile = "\$r_file=\"".$thefile."\";";
            eval($thefile);
            print $r_file;
          }
          else {
                  echo "<br>";
          }
}
//End Code Change
?>