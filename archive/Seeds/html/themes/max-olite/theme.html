<?php



/************************************************************/

/* IMPORTANT NOTE FOR THEMES DEVELOPERS!                    */

/*   max-olite     april,2002, MaxG , globlenet.com          */

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

global $loonr, $prefix, $dbi, $kokku;

$kokku = sql_num_rows(sql_query("select * from ".$prefix."_stories LIMIT 0, 2 ", $dbi), $dbi);



$bgcolor1 = "#F4F4F4";

$bgcolor2 = "#F4F4F4";

$bgcolor3 = "#F4F4F4";

$bgcolor4 = "#F4F4F4";

$textcolor1 = "#000000";

$textcolor2 = "#000000";



include("themes/max-olite/tables.php");



/************************************************************/

/* Function themeheader()                                   */

/*                                                          */

/* Control the header for your site. You need to define the */

/* BODY tag and in some part of the code call the blocks    */

/* function for left side with: blocks(left);               */

/************************************************************/



function themeheader() {

    global $user, $banners, $sitename, $slogan, $cookie, $prefix, $dbi, $dbi;

    cookiedecode($user);

    $username = $cookie[1];

    if ($username == "") {

        $username = "Anonymous";

    }

    echo "<body bgcolor=\"#F4F4F4\" text=\"#000000\" link=\"#363636\" vlink=\"#363636\" alink=\"#d5ae83\">"
     ."<!-- Theme Layout By , MaxG, http://globlenet.com/ --->\n\n\n\n";
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

    $tmpl_file = "themes/max-olite/header.html";
    $result = mysql_query("SELECT count FROM ".$prefix."_counter WHERE type='total' AND var='hits'");
    $result = mysql_fetch_row($result);

    $thefile = implode("", file($tmpl_file));

    $thefile = addslashes($thefile);

    $thefile = "\$r_file=\"".$thefile."\";";

    eval($thefile);

    print $r_file;

    blocks(left);

    $tmpl_file = "themes/max-olite/left_center.html";

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

	$tmpl_file = "themes/max-olite/center_right.html";

	$thefile = implode("", file($tmpl_file));

	$thefile = addslashes($thefile);

	$thefile = "\$r_file=\"".$thefile."\";";

	eval($thefile);

	print $r_file;

	blocks(right);

    }

    $footer_message = "$foot1<br>$foot2<br>$foot3<br>$foot4";

    $tmpl_file = "themes/max-olite/footer.html";

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

    if (($ridaaa1*2) != $loonr) {

	$tmpl_file = "themes/max-olite/story_home.html";

	$thefile = implode("", file($tmpl_file));

	$thefile = addslashes($thefile);

	$thefile = "\$r_file=\"".$thefile."\";";

	eval($thefile);

	$vasak .= "$r_file";

    } else {

	$tmpl_file = "themes/max-olite/story_home.html";

	$thefile = implode("", file($tmpl_file));

	$thefile = addslashes($thefile);

	$thefile = "\$r_file=\"".$thefile."\";";

	eval($thefile);

	$parem .= "$r_file";

    }

    if ($loonr == $storynum OR $loonr == $kokku) {

	echo "<table width=\"100%\" border=\"0\"  cellpadding=\"0\" cellspacing=\"0\">";

	echo "<tr>";

	echo "<td width=\"49%\" valign=\"top\">";

	print $vasak;

	echo "</td>";

	echo "<td width=\"5\" cellpadding=\"0\" cellspacing=\"0\" valign=\"top\"></td>";

	echo "<td width=\"49%\" valign=\"top\">";

	print $parem;

	echo "</td>";

	echo "</tr>";

	echo "</table>";

    }

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

    $tmpl_file = "themes/max-olite/story_page.html";

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

    $tmpl_file = "themes/max-olite/blocks.html";

    $thefile = implode("", file($tmpl_file));

    $thefile = addslashes($thefile);

    $thefile = "\$r_file=\"".$thefile."\";";

    eval($thefile);

    print $r_file;

}



?>
