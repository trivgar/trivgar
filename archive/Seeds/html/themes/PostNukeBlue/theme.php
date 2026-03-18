<?php

// $Id: theme.php,v 1.3 2002/03/10 01:19:27 niceguyeddie Exp $ Exp $Name:  $
// ----------------------------------------------------------------------
// POST-NUKE Content Management System
// Copyright (C) 2002 by the PostNuke Development Team.
// http://www.postnuke.com/
// ----------------------------------------------------------------------
// Based on:
// Thatware - http://thatware.org/
// PHP-NUKE Web Portal System - http://phpnuke.org/
// ----------------------------------------------------------------------
// LICENSE
//
// This program is free software; you can redistribute it and/or
// modify it under the terms of the GNU General Public License (GPL)
// as published by the Free Software Foundation; either version 2
// of the License, or (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// To read the license please visit http://www.gnu.org/copyleft/gpl.html
// ----------------------------------------------------------------------
// Original Author of file: Brumie - http://vipixel.com
// Purpose of file: Default PostNuke Theme
// Graphics designed by Abraham Irawan - Brumie - http://vipixel.com
// Helped by Dracos
// ----------------------------------------------------------------------
// 

/************************************************************/
/* Theme modify by H.Theisen (http://www.shareware-base.de) */
/* Theme was not testet on Netscape/Opera/Mozilla only IE6  */
/* Date: 08-Juli-2002                                       */
/* for PHPNuke 5.5 / 5.6 / 5.X                              */
/************************************************************/


$bgcolor1 = "#D4E2ED";
$bgcolor2 = "#87CEFA";
$bgcolor3 = "#D4E2ED";
$bgcolor4 = "#87CEFA";
$textcolor1 = "#000000";
$textcolor2 = "#000000";

include("themes/PostNukeBlue/tables.php");

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
    echo "<body bgcolor=\"#FFFFFF\" text=\"#000000\" link=\"#363636\" vlink=\"#363636\" alink=\"#d5ae83\">";
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
	$theuser = "&nbsp;&nbsp;<a href=\"modules.php?name=Your_Account&op=new_user\">Create an account";
    } else {
	$theuser = "&nbsp;&nbsp;Welcome $username!";
    }
    $tmpl_file = "themes/PostNukeBlue/header.html";
    $thefile = implode("", file($tmpl_file));
    $thefile = addslashes($thefile);
    $thefile = "\$r_file=\"".$thefile."\";";
    eval($thefile);
    print $r_file;
    blocks(left);
    $tmpl_file = "themes/PostNukeBlue/left_center.html";
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
	$tmpl_file = "themes/PostNukeBlue/center_right.html";
	$thefile = implode("", file($tmpl_file));
	$thefile = addslashes($thefile);
	$thefile = "\$r_file=\"".$thefile."\";";
	eval($thefile);
	print $r_file;
	blocks(right);
    }
    $footer_message = "$foot1<br>$foot2<br>$foot3<br>$foot4";
    $tmpl_file = "themes/PostNukeBlue/footer.html";
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
	    $content = "<a href=\"modules.php?name=Your_Account&amp;op=userinfo&amp;uname=$informant\">$informant</a> ";
	} else {
	    $content = "$anonymous ";
	}
	$content .= ""._WRITES." <i>\"$thetext\"</i>$notes\n";
    }
    $posted = ""._POSTEDBY." ";
    $posted .= get_author($aid);
    $posted .= " "._ON." $time $timezone ($counter "._READS.")";
    $tmpl_file = "themes/PostNukeBlue/story_home.html";
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
	    $content = "<a href=\"modules.php?name=Your_Account&amp;op=userinfo&amp;uname=$informant\">$informant</a> ";
	} else {
	    $content = "$anonymous ";
	}
	$content .= ""._WRITES." <i>\"$thetext\"</i>$notes\n";
    }
    $tmpl_file = "themes/PostNukeBlue/story_page.html";
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
    $tmpl_file = "themes/PostNukeBlue/blocks.html";
    $thefile = implode("", file($tmpl_file));
    $thefile = addslashes($thefile);
    $thefile = "\$r_file=\"".$thefile."\";";
    eval($thefile);
    print $r_file;
}

?>