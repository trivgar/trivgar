<?php

/************************************************************/
/* THEME IDEE/CONCEPTION AND REALISATION BY FFX69           */
/* ON THE GERMAN SITE : WWW.FFX69.DE                        */
/* Orginal Theme: uwbluebump                                */
/* Tested on: IE6. Date: 19-05-2002                         */
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

$bgcolor1 = "#EFA4A3";
$bgcolor2 = "#EFA4A3";
$bgcolor3 = "#DEDEE6";
$bgcolor4 = "#DEDEE6";
$textcolor1 = "#660000";
$textcolor2 = "#660000";

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
    echo "<table width=\"95%\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" bgcolor=\"$bgcolor2\"><tr><td>\n";
    echo "<table width=\"95%\" border=\"0\" cellspacing=\"1\" cellpadding=\"8\" bgcolor=\"$bgcolor1\"><tr><td>\n";
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


echo "<script language=JavaScript1.2> 
function makevisible(cur,which)
{ 
if (which==0) 
cur.filters.alpha.opacity=100 
else
cur.filters.alpha.opacity=30 
} 
</script>\n";
echo "<script language=JavaScript1.2 src=\"themes\ffx69_redice\contextmenue.js\"></script><noscript></noscript>\n";

function FormatStory($thetext, $notes, $aid, $informant) {
    global $anonymous;
    if ($notes != "") {
	$notes = "<br><br><b>"._NOTE."</b> <i>$notes</i>\n";
    } else {
	$notes = "";
    }
    if ("$aid" == "$informant") {
	echo "$thetext$notes\n";
    } else {
	if($informant != "") {
	    $boxstuff = "<a href=\"modules.php?name=Your_Account?op=userinfo&amp;uname=$informant\">$informant</a> ";
	} else {
	    $boxstuff = "$anonymous ";
	}
	$boxstuff .= ""._WRITES." <i>\"$thetext\"</i>$notes\n";
	echo "$boxstuff\n";
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
    echo "<body bgcolor=\"#FFE7E7\" text=\"\" link=\"\" vlink=\"\" alink=\"\" leftmargin=\"0\" topmargin=\"0\" marginwidth=\"0\" marginheight=\"0\">\n"
	."<table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\" align=\"center\" bgcolor=\"#EFA4A3\"><tr>\n"
	."<td bgcolor=\"#EFA4A3\"><IMG src=\"themes/ffx69_redice/images/pixel.gif\" width=\"1\" height=\"1\" alt=\"\" border=\"0\" hspace=\"0\"></td></tr></table>\n"
	."<table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\" align=\"center\" bgcolor=\"#F7EEEE\">\n"
	."<tr>\n"
   /* ."<td valign=\"bottom\" align=\"right\" class=\"menuehead\" width=\"20%\">\n" */
	/*."<form action=\"modules.php?name=Search\" method=\"post\">"._SEARCH." \n"*/
	/*."<input type=\"text\" name=\"query\" size=\"14\">\n"*/
 /*echo "<b><a href=\"modules.php?name=Your_Account\">Login</a> -=/=- <a href=\"modules.php?name=Your_Account&op=logout\">Logout</a></b><br><br><td valign=\"bottom\" align=\"left\" class=\"menuehead\" width=\"20%\">\n";	*/
    /*echo "</select></form></td>\n";*/
       ."</center></tr></table>&nbsp;&nbsp;<font class=site>$sitename\n";
    if ($banners) {
	include("banners.php");

/*****************************************************************************/
/* For phpads User : copy the ads.php in your nuke Directory                 */
/* and edit the theme here. for Infos go on:                                 */
/* http://www.ffx69.de/nuke/html/modules.php?name=Forums&file=viewtopic&t=28 */
/*****************************************************************************/

/*      if ($banners) { 
include("ads.php"); 
*/
/*************************************************************/
/*                 END for phpads Banners                    */
/*************************************************************/

	echo "</tr></table><td valign=\"center\"><form action=modules.php?name=Search method=post><align=center width=50>&nbsp;&nbsp;<input type=text name=query size=10>&nbsp;<align=center valign=bottom width=250>&nbsp;<input type=image name=search src=themes/ffx69_redice/images/search.gif align=center width=50 height=20 border=0 style=\"filter:alpha(opacity=30)\" onMouseover=\"makevisible(this,0)\" onMouseout=\"makevisible(this,1)\"></select></form></td><table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\" align=\"center\" bgcolor=\"#7373A4\" background=\"themes/ffx69_redice/images/lei.jpg\" height=\"34\">\n"
	."<tr valign=\"middle\"><td align=\"right\" height=\"30\" width=\"20%\"><A href=\"index.php\"><IMG src=\"themes/ffx69_redice/images/home.gif\" align=center width=\"66\" height=\"27\" alt=\"Home\" border=\"0\" hspace=\"5\" style=\"filter:alpha(opacity=30)\" onMouseover=\"makevisible(this,0)\" onMouseout=\"makevisible(this,1)\"></a><A href=\"modules.php?name=Forum\"><IMG src=\"themes/ffx69_redice/images/forum.gif\" align=center width=\"66\" height=\"27\" alt=\"Forum\" border=\"0\" hspace=\"5\" style=\"filter:alpha(opacity=30)\" onMouseover=\"makevisible(this,0)\" onMouseout=\"makevisible(this,1)\"></a><A href=\"modules.php?name=Downloads\"><IMG src=\"themes/ffx69_redice/images/download.gif\" align=center width=\"66\" height=\"27\" alt=\"Downloads Section\" border=\"0\" hspace=\"5\" style=\"filter:alpha(opacity=30)\" onMouseover=\"makevisible(this,0)\" onMouseout=\"makevisible(this,1)\"></td><td align=\"center\" height=\"30\" width=\"60%\"><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" background=\"themes/ffx69_redice/images/taskright_2.jpg\"><tr><td width=\"4\" height=\"33\"><img src=\"themes/ffx69_redice/images/taskright_1.jpg\" width=\"24\" height=\"33\"></td>\n"
	."<td nowrap class=\"artsubhead\" align=\"left\">&nbsp;&nbsp;&nbsp;\n";
    if ($username == "Anonymous") {
	echo "<a href=\"modules.php?name=Your_Account&op=new_user\">Create</a> a Account\n";
    } else {
	echo "Hallo $username! | <a href=\"modules.php?name=Your_Account&op=logout\">logout</a> | ";
    }
    echo "<script type=\"text/javascript\">\n"
        ."<!--   // Array ofmonth Names\n"
        ."var monthNames = new Array( \"Januar\",\"Februar\",\"März\",\"April\",\"Mai\",\"Juni\",\"Juli\",\"August\",\"September\",\"Oktober\",\"November\",\"Dezember\");\n"
        ."var now = new Date();\n"
        ."thisYear = now.getYear();\n"
        ."if(thisYear < 1900) {thisYear += 1900}; // corrections if Y2K display problem\n"
        ."document.write(now.getDate() + \". \" + monthNames[now.getMonth()] + \" \" + thisYear);\n"
        ."// -->\n"
        ."</script> | \n";   
    cookiedecode($user);
	$ip = getenv("REMOTE_ADDR");
	$users = $cookie[1];
	if (!isset($users)) {
	$users = "$ip";
	$guest = 1;
	}
	$past = time()-900;
	mysql_query("DELETE FROM $prefix"._session." WHERE time < $past");
	$result = mysql_query("SELECT time FROM $prefix"._session." WHERE username='$users'");
	$ctime = time();
	if ($row = mysql_fetch_array($result)) {
	mysql_query("UPDATE $prefix"._session." SET username='$users', time='$ctime', host_addr='$ip', guest='$guest' WHERE 	username='$users'");
	} else {
	mysql_query("INSERT INTO $prefix"._session." (username, time, host_addr, guest) VALUES ('$users', '$ctime', '$ip', '$guest')");
	}
	$result = mysql_query("SELECT username FROM $prefix"._session." where guest=1");
	$guest_online_num = mysql_num_rows($result);

	$result = mysql_query("SELECT username FROM $prefix"._session." where guest=0");
	$member_online_num = mysql_num_rows($result);

	$who_online_num = $guest_online_num + $member_online_num;
	if($guest_online_num == '1'){
	$gast = "Gast";
	}else{
	$gast = "Gäste";
	}
	if($member_online_num == '1'){
	$members = "Member";
	}else{
	$members = "Members";
	}
	echo ""._CURRENTLY." <b>$guest_online_num</b> ".$gast." <b>$member_online_num</b> ".$members.""
    ."&nbsp;&nbsp;&nbsp;</td><td width=\"4\" height=\"30\"><img src=\"themes/ffx69_redice/images/taskright_3.gif\" width=\"25\" height=\"33\"></td></tr></table>\n"
	."<td align=\"left\" height=\"30\" width=\"20%\"><A href=\"modules.php?name=Your_Account\"><IMG src=\"themes/ffx69_redice/images/account.gif\" align=center width=\"66\" height=\"27\" alt=\"Account\" border=\"0\" hspace=\"5\" style=\"filter:alpha(opacity=30)\" onMouseover=\"makevisible(this,0)\" onMouseout=\"makevisible(this,1)\"></a><A href=\"modules.php?name=Submit_News\"><IMG src=\"themes/ffx69_redice/images/submit.gif\" align=center width=\"66\" height=\"27\" alt=\"Sunmit News\" border=\"0\" hspace=\"5\" style=\"filter:alpha(opacity=30)\" onMouseover=\"makevisible(this,0)\" onMouseout=\"makevisible(this,1)\"></a><A href=\"modules.php?name=Top\"><IMG src=\"themes/ffx69_redice/images/top.gif\" align=center width=\"66\" height=\"27\" alt=\"Top 10\" border=\"0\" hspace=\"5\" style=\"filter:alpha(opacity=30)\" onMouseover=\"makevisible(this,0)\" onMouseout=\"makevisible(this,1)\"></a></td>\n"
        ."<td align=\"right\" width=\"10%\">&nbsp;</td>\n"
        ."</tr>\n"
        ."</table><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" bgcolor=\"\" align=\"center\" background=\"themes/ffx69_redice/images/under_hl.gif\" height=\"15\"><tr>\n"
	."<td align=\"right\"></td></tr></table>\n"
	."<!-- FIN DEL TITULO -->\n"
	."<table width=\"95%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" bgcolor=\"#FFE7E7\" align=\"center\"><tr valign=\"top\">\n"
	."<td bgcolor=\"#FFE7E7\" width=\"150\" valign=\"top\">\n";
    blocks(left);
    echo "</td><td><img src=\"themes/ffx69_redice/images/pixel.gif\" width=\"15\" height=\"1\" border=\"0\" alt=\"\"></td><td width=\"100%\" align=\"middle\">\n";

    }
    echo "\n";
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
	echo "</td><td><img src=\"themes/ffx69_redice/images/pixel.gif\" width=\"15\" height=\"1\" border=\"0\" alt=\"\"></td><td valign=\"top\" width=\"150\">\n";
	blocks(right);
    }
    echo "</td>\n"
	."</td></tr></table>\n"
        ."<table width=\"95%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" bgcolor=\"#FFE7E7\" align=\"center\"><tr>\n"
        ."<td bgcolor=\"#FFE7E7\"><IMG src=\"themes/ffx69_redice/images/pixel.gif\" width=\"1\" height=\"1\" alt=\"\" border=\"0\" hspace=\"0\"></td>\n"
        ."</tr></table><br>\n"
        ."<table width=\"95%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\"><tr align=\"center\">\n"
        ."<td width=\"100%\" colspan=\"3\" class=\"artsubhead\" bgcolor=\"#F7EEEE\">\n";
    footmsg();
    echo "</tr></table><center><font class=\"artsubhead\">Theme by <a href=\"http://www.ffx69.de/nuke/html/index.php\"><b>ffx69.de</a></b></center><br>\n";
}

/************************************************************/
/* Function themeindex()                                    */
/*                                                          */
/* This function format the stories on the Homepage         */
/************************************************************/

function themeindex ($aid, $informant, $time, $title, $counter, $topic, $thetext, $notes, $morelink, $topicname, $topicimage, $topictext) {
    global $anonymous, $tipath;
    echo "<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" bgcolor=\"#FFFFFF\"><tr><td width=\"9\" height=\"10\"><img src=\"themes/ffx69_redice/images/corner-top-left.gif\" width=\"9\" height=\"10\"></td><td><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" background=\"themes/ffx69_redice/images/bottom_bg.gif\"><tr><td><img src=\"themes/ffx69_redice/images/pixel.gif\" width=\"10\" height=\"10\"></td></tr></table></td><td width=\"9\" height=\"10\" align=\"right\"><img src=\"themes/ffx69_redice/images/corner-top-right.gif\" width=\"9\" height=\"10\"></td></tr><tr><td><img src=\"themes/ffx69_redice/images/pixel.gif\" width=\"9\" height=\"10\"></td><td width=\"100%\" align=\"left\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\"><tr>\n"
      /*  ."<td><a href=\"modules.php?name=News&amp;new_topic=$topic\"><img src=\"$tipath$topicimage\" border=\"0\" Alt=\"$topictext\" align=\"left\" hspace=\"5\" vspace=\"1\"></a>\n" */
        ."<font class=\"arthead\"><img src=\"themes/ffx69_redice/images/block.gif\" align=center> $title</font><br><font class=\"artsubhead\">"._POSTEDBY." ";
    formatAidHeader($aid);
    echo " "._ON." $time ($counter "._READS.")</font><br><hr></td></tr></table>\n"
	."<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\"><tr><td width=\"4\" height=\"7\" align=\"right\"></td></tr></table><table><tr><td class=\"art\">\n";
    FormatStory($thetext, $notes, $aid, $informant);
    echo "</td></tr></table>\n"
	."<table bgcolor=\"#F7EEEE\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\" width=\"100%\"><tr><td align=\"right\" class=\"artsubhead\">\n"
	."$morelink\n"
	."</td></tr></table>\n"
	."</td><td><img src=\"themes/ffx69_redice/images/pixel.gif\" width=\"9\" height=\"10\"></td></tr><tr><td><img src=\"themes/ffx69_redice/images/corner-bottom-left.gif\" width=\"9\" height=\"7\"></td><td><img src=\"themes/ffx69_redice/images/pixel.gif\" width=\"10\" height=\"7\"></td><td><img src=\"themes/ffx69_redice/images/corner-bottom-right.gif\" width=\"9\" height=\"7\"></td></tr></table>\n"
	."<br>\n";
}

/************************************************************/
/* Function themeindex()                                    */
/*                                                          */
/* This function format the stories on the story page, when */
/* you click on that "Read More..." link in the home        */
/************************************************************/

function themearticle ($aid, $informant, $datetime, $title, $thetext, $topic, $topicname, $topicimage, $topictext) {
    global $admin, $sid, $tipath;
    echo "<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\"><tr>\n"
  /*      ."<td><a href=\"modules.php?name=News&amp;new_topic=$topic\"><img src=\"$tipath$topicimage\" border=\"0\" Alt=\"$topictext\" align=\"right\" hspace=\"1\" vspace=\"3\"></a><font class=\"arthead\">$title</font><br>\n" */
        ."<font class=\"artsubhead\">"._POSTEDON." $datetime "._BY." ";
    formatAidHeader($aid);
    if (is_admin($admin)) {
	echo "<br>[ <a href=\"admin.php?op=EditStory&amp;sid=$sid\">"._EDIT."</a> | <a href=\"admin.php?op=RemoveStory&amp;sid=$sid\">"._DELETE."</a> ]<br><hr>\n";
    }
    echo "</td></tr></table><tr><td width=\"4\" height=\"7\"></td></tr></table><table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n";
    echo "<tr><td class=\"art\"><br>\n";
    FormatStory($thetext, $notes="", $aid, $informant);
    echo "</td></tr></table><br>\n";
}

/************************************************************/
/* Function themesidebox()                                  */
/*                                                          */
/* Control look of your blocks. Just simple.                */
/************************************************************/

function themesidebox($title, $content) {
    echo "<table background=\"themes/ffx69_redice/images/redIce_gradient_blue.gif\" border=\"0\" cellpadding=\"1\" cellspacing=\"1\" bgcolor=\"#EFA4A3\" width=\"170\" height=\"20\"><tr><td class=\"menuehead\">\n"
	."<font color=\"#FFFFFF\"><img src=\"themes/ffx69_redice/images/rechts.gif\" align=center><b> $title</b>\n"
	."</td></tr></table>\n"
	."<table border=\"0\" cellpadding=\"1\" cellspacing=\"1\" bgcolor=\"#EFA4A3\" width=\"170\">\n"
	."<tr valign=\"top\"><td width=\"2\"></td><td class=\"artsubhead\">\n"
	."$content\n"
    ."</td><td width=\"15\" bgcolor=\"#EFA4A3\"><img src=\"themes/ffx69_redice/images/pixel.gif\" width=\"15\" height=\"10\"></td></tr></table><br>\n";
}

?>