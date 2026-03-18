<?php
/************************************************************/
/* Theme Colors Definition                                  */
/*                                                          */
/* Define colors for your web site. $bgcolor2 is generaly   */
/* used for the tables border as you can see on OpenTable() */
/* function, $bgcolor1 is for the table background and the  */
/* other two bgcolor variables follows the same criteria.   */
/* $texcolor1 and 2 are for tables internal texts           */
/************************************************************/

$bgcolor1 = "#F2F2F2";
$bgcolor2 = "#D1D1D1";
$bgcolor3 = "#F2F2F2";
$bgcolor4 = "#F2F2F2";
$textcolor1 = "#000000";
$textcolor2 = "#000000";

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
    echo "<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" bgcolor=\"$bgcolor2\"  class=\"forumline\"><tr><td>\n";
    echo "<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"8\" bgcolor=\"$bgcolor1\"><tr><td>\n";
}

function CloseTable() {
    echo "</td></tr></table></td></tr></table>\n";
}

function OpenTable2() {
    global $bgcolor1, $bgcolor2;
    echo "<table border=\"0\" cellspacing=\"1\" cellpadding=\"0\" bgcolor=\"$bgcolor2\" align=\"center\"><tr><td>\n";
    echo "<table border=\"0\" cellspacing=\"1\" cellpadding=\"8\" bgcolor=\"$bgcolor1\"><tr><td>\n";
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
	echo "<font class=\"content\" color=\"#000000\">$thetext$notes</font>\n";
    } else {
	if($informant != "") {
	    $boxstuff = "<a href=\"modules.php?op=userinfo&amp;uname=$informant\">$informant</a> ";
	} else {
	    $boxstuff = "$anonymous ";
	}
	$boxstuff .= "".translate("writes")." <i>\"$thetext\"</i>$notes\n";
	echo "<font class=\"content\" color=\"#000000\">$boxstuff</font>\n";
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

    echo "<body bgcolor=\"#FFFFFF\" text=\"#000000\" link=\"#666666\" vlink=\"#666666\" alink=\"#666666\" marginheight=\"0\" leftmargin=\"0\" topmargin=\"0\">\n";

    echo "\n"
	."<!----- Logo Area ----->\n"

	."<table cellpadding=\"0\" cellspacing=\"1\" width=\"100%\" border=\"0\" align=\"center\" bgcolor=\"#FFFFFF\">\n"

    ."<tr>\n"
    ."<td width=\"100%\" bgcolor=\"#FFFFFF\" align=\"center\" valign=\"top\">\n"

	."<br />\n"

."<table bgcolor=\"#E7E7E7\" cellpadding=\"0\" cellspacing=\"1\" width=\"99%\" class=\"forumline\">\n"
	."<tr bordercolor=\"#F2F2F2\">\n"
	."<td bgcolor=\"#F2F2F2\" class=\"row1\" valign=\"middle\" width=\"800\" height=\"70\">\n"
    ."<a href=\"http://www.newzworld.com/\"><img src=\"images/logo.gif\"></a>\n"
              ."</td>\n"
	."<td background=\"/themes/steelDawn/images/cellpic01.gif\" class=\"catHead\" bgcolor=\"#D1D1D1\"
 align=\"right\" width=\"100\"><center>\n"
."NewzWorld Network<br>"
        ."Choose One:"
        ."<FORM ACTION=\"\" METHOD=\"GET\">
<select name=\"site\" onChange=\"top.location.href=this.options[this.selectedIndex].value\">
<option value=\"http://www.newzworld.com/\" SELECTED>NewzWorld</option>  
<option value=\"\"> ----------- </option>
<option value=\"http://nuke.newzworld.com\">Nuke NewzWorld</option>
</select>
</FORM>\n";

    if ($banners) {
	include("banners.php");
    }

    echo "\n"
	."</td>\n"
	."</tr>\n"

	."<tr>\n"
	."<td background=\"/themes/steelDawn/images/cellpic01.gif\" class=\"catHead\" height=\"28\" bgcolor=\"#D1D1D1\" 	align=\"left\" colspan=\"2\">\n"
	."<span class=\"cattitle\"><b><center>\n"
	."<a href=\"/index.php\">Home</a> ::\n"
	."<a href=\"/modules.php?name=Your_Account\">Your Account</a> ::\n"
	."<a href=\"/modules.php?name=Search\">Search</a> ::\n"
	."<a href=\"/modules.php?name=Topics\">Topics</a> ::\n"
	."<a href=\"/modules.php?name=Web_Links\">Web Links</a>\n"
	."</span>\n"
	."</td>\n"
	."</tr>\n"
."<tr>\n"
        ."<td colspan=2 background=\"/themes/steelDawn/images/cellpic01.gif\"
class=\"catHead\" height=\"28\"
bgcolor=\"#D1D1D1\">\n";
$result = sql_query("select sid, title from ".$prefix."_stories order by sid DESC limit 0, 10",
$dbi);
        echo "<MARQUEE behavior=\"scroll\" direction=\"left\" scrollamount=\"7\"
scrolldelay=\"90\" onmouseover='this.stop()' onmouseout='this.start()'>";
	echo "Developers and Writers wanted.  They will receive a newzworld.com email address. <a
href=\"mailto:admin@newzworld.com\">Email me for more details</a> -- The NewzWorld Network has been established!  Head over
to <a href=\"http://nuke.newzworld.com/\">Nuke NewzWorld</a> and check our first member out!";
        echo "</MARQUEE>"
        ."</td></tr>"

	."</table>\n"

      ."</td>\n"
	."</tr>\n"

      ."<tr>\n"
	."<td colspan=\"6\">\n"

	."<!----- Begin of Main Content Table ----->\n"
	."<table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" bgcolor=\"#FFFFF\" align=\"center\">\n"
	."<tr valign=\"top\">\n"
	."<td valign=\"top\">\n"
	."<table width=\"100%\" cellpadding=\"5\" cellspacing=\"0\" border=\"0\" bgcolor=\"#FFFFFF\" align=\"center\">\n"
	."<tr valign=\"top\">\n"
	."<td width=\"170\" valign=\"top\">\n";
    blocks(left);
    echo "</td><td width=\"100%\" align=\"center\" valign=\"top\">\n";
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
	echo "</td><td valign=\"top\" width=\"170\">\n";
	blocks(right);
    }
    echo "</td>\n"
	    ."</tr>\n"
	    ."</table>\n"
	    ."</td>\n"
	    ."</tr>\n"
	    ."</table>\n"
        ."<table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" bgcolor=\"#FFFFFF\" align=\"center\">\n"
        ."<tr>\n"
        ."<td align=\"center\">\n"
        ."<table bgcolor=\"#E7E7E7\" cellpadding=\"0\" cellspacing=\"1\" width=\"99%\" class=\"forumline\">\n"
        ."<tr align=\"center\">\n"
        ."<td width=\"100%\" colspan=\"3\" background=\"/themes/steelDawn/images/cellpic01.gif\" class=\"catHead\" height=\"28\" bgcolor=\"#D1D1D1\" align=\"center\">\n"
."<span=\"mainmenu\"></span>\n"
	."</td>\n"
	."</tr>\n"
	."<tr>\n"
	."<td align=\"center\" bgcolor=\"#F2F2F2\" class=\"row1\">\n"
	."<font class=\"option\" color=\"#000000\"></font>\n";
    footmsg();
    echo "</td>\n"
        ."</tr>\n"
        ."</table>\n"
        ."</td>\n"
        ."</tr>\n"
        ."</table>\n";
}

/************************************************************/
/* Function themeindex()                                    */
/*                                                          */
/* This function format the stories on the Homepage         */
/************************************************************/

function themeindex ($aid, $informant, $time, $title, $counter, $topic, $thetext, $notes, $morelink, $topicname, $topicimage, $topictext) {
    global $anonymous, $tipath;
    echo "<table bgcolor=\"#E7E7E7\" cellpadding=\"0\" cellspacing=\"1\" width=\"100%\" class=\"forumline\">\n"
    ."<tr>\n"
    ."<td>\n"
    ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"#F2F2F2\" width=\"100%\">\n"
	."<tr>\n"
    ."<td>\n"
	."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"#E7E7E7\" width=\"100%\">\n"
	."<tr>\n"
	."<td>\n\n"
	."<!----- Story Box Title ----->\n"
	."<table border=\"0\" cellpadding=\"3\" cellspacing=\"0\" background=\"/themes/steelDawn/images/cellpic01.gif\" height=\"28\" bgcolor=\"#D1D1D1\" width=\"100%\">\n"
	."<tr>\n"
	."<td align=\"center\">\n"
	."<font class=\"option\" color=\"#000000\"><b>$title</b></font>\n"
	."</td>\n"
	."</tr>\n"
	."</table>\n"
	."</td>\n"
	."</tr>\n"
	."</table>\n"
	."</td>\n"
	."</tr>\n"
	."<tr>\n"
	."<td>\n"
	."<!----- Story Box Content ----->\n"
	."<table border=\"0\" cellpadding=\"2\" cellspacing=\"0\" width=\"100%\" bgcolor=\"#F2F2F2\">\n"
	."<tr>\n"
	."<td bgcolor=\"F2F2F2\">\n"
	."<font color=\"#000000\"><b><a href=\"modules.php?name=News&amp;new_topic=$topic\"><img src=\"$tipath$topicimage\" border=\"0\" Alt=\"$topictext\" align=\"right\" hspace=\"10\" vspace=\"10\"></a></B></font>\n";
    FormatStory($thetext, $notes, $aid, $informant);
    echo "</td></tr></table></td></tr></table>\n"
	."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" bgcolor=\"#F2F2F2\">\n"
	."<tr>\n"
	."<td>\n"
	."<table border=\"0\" background=\"/themes/steelDawn/images/cellpic01.gif\" cellpadding=\"2\" cellspacing=\"0\" width=\"100%\" bgcolor=\"#F2F2F2\">\n"
	."<tr>\n"
	."<td align=\"center\" height=\"28\">\n"
	."<font size=\"1\">"._POSTEDBY." ";
    formatAidHeader($aid);
    echo " "._ON." $time $timezone ($counter "._READS.")<br></font>\n"
	."<font class=\"content\">$morelink</font>\n"
	."</td>\n"
	."</tr>\n"
	."</table>\n"
	."</td>\n"
	."</tr>\n"
	."</table>\n"
	."</td>\n"
	."</tr>\n"
	."</table>\n"
	."<br>\n\n\n";
}

/************************************************************/
/* Function themeindex()                                    */
/*                                                          */
/* This function format the stories on the story page, when */
/* you click on that "Read More..." link in the home        */
/************************************************************/

function themearticle ($aid, $informant, $datetime, $title, $thetext, $topic, $topicname, $topicimage, $topictext) {
    global $admin, $sid, $tipath;
    echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"1\" bgcolor=\"#F2F2F2\" width=\"100%\" class=\"forumline\">
	<tr><td>\n"

        ."<table border=\"0\" cellpadding=\"2\" cellspacing=\"0\" bgcolor=\"#F2F2F2\" width=\"100%\"><tr><td align=\"left\" background=\"/themes/steelDawn/images/cellpic01.gif\">\n"
        ."<font class=\"option\" color=\"#000000\"><b>$title</b></font><br>\n"
        ."<font class=\"content\">"._POSTEDON." $datetime "._BY." ";
    echo "</td></tr>";

    echo "<tr><td>";

    echo "<a href=\"modules.php?name=Topics\"><img src=\"$tipath$topicimage\" border=\"0\" Alt=\"$topictext\" align=\"right\" hspace=\"10\" vspace=\"10\"></a>\n";
    FormatStory($thetext, $notes="", $aid, $informant);
    echo "</td></tr></table></td></tr></table><br>\n\n\n";
}

/************************************************************/
/* Function themesidebox()                                  */
/*                                                          */
/* Control look of your blocks. Just simple.                */
/************************************************************/

function themesidebox($title, $content) {
    echo "<!----- Side Box ----->\n"
    ."<table bgcolor=\"#374646\" cellpadding=\"2\" cellspacing=\"1\" width=\"150\" class=\"forumline\">\n"
	."<tr>\n"
	."<td background=\"/themes/steelDawn/images/cellpic01.gif\" height=\"28\" bgcolor=\"#D1D1D1\" align=\"left\">\n"
	."<font class=\"content\" color=\"#000000\">$title</font>\n"
	."</td>\n"
	."</tr>\n"
	."<tr valign=\"top\">\n"
	."<td bgcolor=\"#F2F2F2\">\n"
	."$content\n"
	."</td>\n"
	."</tr>\n"
	."</table>\n"
	."<br>\n\n\n";
}

?>
