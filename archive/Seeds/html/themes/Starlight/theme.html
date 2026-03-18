<?php

/************************************************************/
/* THEME NAME: Starlight - PHPNuke 6.0                     */
/* Origina THEME NAME: Starlight - PHPNuke 5.3             */
/* THEME Designer: Dezina (http://www.dezina.com)           */
/* Date of Design: November 2000                            */
/* Updated for PHPNuke 5.5 - dezina.com March 2nd 2002      */
/* Updated Style.css - dezina.com March 8th 2002            */
/* Updated theme.php, removed italics - dezina.com March 8th 2002*/
/* Updated for PHPNuke 6.0 - dezina.com October 2002        */
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

$bgcolor1 = "#000000";
$bgcolor2 = "#484848";
$bgcolor3 = "#333333";
$bgcolor4 = "#706868";
$textcolor1 = "#CCCCFF";
$textcolor2 = "#CCCCFF";

include("themes/Starlight/tables.php");

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
    echo "<!----- PLEASE DO NOT REMOVE COPYRIGHT NOTICE ----->\n";
    echo "<!----- Copyright (c) 2002 Dezina(http://www.dezina.com) ----->\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n";

    }
    echo "<body bgcolor=\"#000000\" text=\"#CCCCFF\" link=\"#9999CC\" vlink=\"#9999CC\" alink=\"#9966CC\">";
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
    $public_msg = public_message();
    $tmpl_file = "themes/Starlight/header.html";
    $thefile = implode("", file($tmpl_file));
    $thefile = addslashes($thefile);
    $thefile = "\$r_file=\"".$thefile."\";";
    eval($thefile);
    print $r_file;
    blocks(left);
    $tmpl_file = "themes/Starlight/left_center.html";
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
    global $index, $foot1, $foot2, $foot3, $copyright, $totaltime;
    if ($index == 1) {
	$tmpl_file = "themes/Starlight/center_right.html";
	$thefile = implode("", file($tmpl_file));
	$thefile = addslashes($thefile);
	$thefile = "\$r_file=\"".$thefile."\";";
	eval($thefile);
	print $r_file;
	blocks(right);
    }

    $tmpl_file = "themes/Starlight/footer.html";
    $thefile = implode("", file($tmpl_file));
    $thefile = addslashes($thefile);
    $thefile = "\$r_file=\"".$thefile."\";";
    eval($thefile);
    print $r_file;
    //Adjust by Dezina to show Page Generation Time etc
echo "</td></tr></table><center></td></tr></table>";
    footmsg();

echo "</td>\n"
        ."</tr>\n"
        ."</table>\n"
        ."</tr></table><center><br>© Starlight Theme by <a href=\"http://www.dezina.com\"><b>Dezina</a></b></center>\n";
//End Adjust by Dezina to show Page Generation Time etc
}


/************************************************************/
/* Function themeindex()                                    */
/*                                                          */
/* This function format the stories on the Homepage         */
/************************************************************/

function themeindex ($aid, $informant, $time, $title, $counter, $topic, $thetext, $notes, $morelink, $topicname, $topicimage, $topictext) {
    global $anonymous;$tipath;

    if ($notes != "") {
	$notes = "<br><br><b>"._NOTE."</b>$notes\n";
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
    $posted .= " "._ON." $time $timezone ($counter "._READS.")";
    $tmpl_file = "themes/Starlight/story_home.html";
    $thefile = implode("", file($tmpl_file));
    $thefile = addslashes($thefile);
    $thefile = "\$r_file=\"".$thefile."\";";
    eval($thefile);
    print $r_file;
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
	    $content = "<a href=\"modules.php?name=Your_Account&amp;op=userinfo&amp;uname=$informant\">$informant</a> ";
	} else {
	    $content = "$anonymous ";

	}
	$content .= ""._WRITES." \"$thetext\"$notes\n";
    }
    $tmpl_file = "themes/Starlight/story_page.html";
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
    $tmpl_file = "themes/Starlight/blocks.html";
    $thefile = implode("", file($tmpl_file));
    $thefile = addslashes($thefile);
    $thefile = "\$r_file=\"".$thefile."\";";
    eval($thefile);
    print $r_file;
}

?>