<?php

/************************************************************/
/* THEME NAME: MtechnikV2                                   */
/* THEME DEVELOPER: Mtechnik.net                            */
/************************************************************/

/************************************************************/
/*                                                          */
/* Theme Colors Definition                                  */
/*                                                          */
/* Control the header for your site. You need to define the */
/* BODY tag and in some part of the code call the blocks    */
/* function for left side with: blocks(left);               */
/************************************************************/

$thename = "MtechnikV2";
$bgcolor1 = "#000000";
$bgcolor2 = "#000000";
$bgcolor3 = "#000000";
$bgcolor4 = "#9EB2CB";
$textcolor1 = "#ffffff";
$textcolor2 = "#ffffff";

function OpenTable() {
    global $bgcolor1, $bgcolor2;
    echo "<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" bgcolor=\"$bgcolor2\"><tr><td>\n";
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

function FormatStory($thetext, $notes, $aid, $informant) {
    global $anonymous;
    if ($notes != "") {
	$notes = "<br><b>"._NOTE."</b> <i>$notes</i>\n";
    } else {
	$notes = "";
    }
    if ("$aid" == "$informant") {
	echo "<font size=\"2\" color=\"#4B679A\">$thetext<br>$notes</font>\n";
    } else {
	if($informant != "") {
	    $boxstuff = "<a href=\"modules.php?name=Your_Account?op=userinfo&amp;uname=$informant\">$informant</a> ";
	} else {
	    $boxstuff = "$anonymous ";
	}
	$boxstuff .= ""._WRITES." \"$thetext\" $notes\n";
	echo "<font size=\"2\" color=\"#4B679A\">$boxstuff</font>\n";
    }
}

/************************************************************/
/* Function themeheader()                                   */
/************************************************************/

function themeheader() {
    global $user, $banners, $sitename, $slogan, $cookie, $prefix;
    cookiedecode($user);
    $username = $cookie[1];
    if ($username == "") {
        $username = "Anonymous";
    }
    echo "<body bgcolor=\"#000000\" text=\"#000000\" link=\"#000000\" vlink=\"#000000\" alink=\"#000000\"background=\"themes/MtechnikV2/images/bg.gif\" bgproperties=\"fixed\" topmargin=\"0\" leftmargin=\"0\" marginwidth=\"0\" marginheight=\"0\">\n"
."<script src=\"themes/MtechnikV2/fade.js\" language=\"Javascript\"></script>\n"
	    ."<br>\n";
    if ($banners) {
	include("banners.php");
    }
    echo "<table cellpadding=\"3\" cellspacing=\"0\" width=\"97%\" border=\"0\" align=\"center\" bgcolor=\"#ffcc00\">\n"
        ."<tr>\n"
        ."<td width=\"100%\" background=\"themes/MtechnikV2/images/block2.jpg\">&nbsp; \n"
        ."</td>\n"
        ."</tr>\n"
        ."</table>\n\n"

        ."<table cellpadding=\"0\" cellspacing=\"0\" width=\"97%\" border=\"0\" align=\"center\" bgcolor=\"#ffffff\">\n"
	    ."<tr>\n"
	    ."<td bgcolor=\"#000000\" width=\"200\" align=\"left\" valign=\"middle\">\n\n"

    ."<!-- Begin Mtechnik Logo -->\n"
	."<OBJECT classid=\"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000\" \n"
	."codebase=\"http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0\" \n"
	."WIDTH=600 HEIGHT=80>\n"
    ."<PARAM NAME=movie VALUE=\"themes/MtechnikV2/flash/logo.swf\">\n"
    ."<PARAM NAME=quality VALUE=best>\n"
    ."<PARAM NAME=menu VALUE=false>\n"
    ."<PARAM NAME=bgcolor VALUE=#000000>\n"
    ."<EMBED src=\"themes/MtechnikV2/flash/logo.swf\" quality=best bgcolor=#000000  WIDTH=600 HEIGHT=80 TYPE=\"application/x-shockwave-flash\" PLUGINSPAGE=\"http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash\"></EMBED>\n"
    ."</OBJECT>\n"
    ."<!-- End Mtechnik Logo -->\n\n"

	    ."</td>\n"
	    ."<td bgcolor=\"#000000\" align=\"right\">\n"
	    ."<td bgcolor=\"#000000\" align=\"right\">\n"
	    ."<table>\n"
	    ."<tr>\n"
	    
	    ."<td bgcolor=\"#000000\" align=\"right\">\n"
	    ."<form action=\"search.php\" method=\"get\"><font size=\"2\"><b>".translate("Topics")." </b>\n";
    $toplist = mysql_query("select topicid, topictext from $prefix"._topics." order by topictext");
    echo "<select name=\"topic\"onChange='submit()'>\n"
	."<option value=\"\">".translate("All Topics")."</option>\n";
    while(list($topicid, $topics) = mysql_fetch_row($toplist)) {
    if ($topicid==$topic) { $sel = "selected "; }
	echo "<option $sel value=\"$topicid\">$topics</option>\n";
	$sel = "";
    }
    echo "</select></font></form></td></tr></table></td>\n"
	    ."<td bgcolor=\"#000000\" valign=\"top\">&nbsp;</td>\n"
	    ."</tr></table>\n"
	    ."<table cellpadding=\"0\" cellspacing=\"0\" width=\"97%\" border=\"0\" align=\"center\" bgcolor=\"#000000\">\n"
	    ."<tr>\n"
	    ."<td bgcolor=\"#000000\" colspan=\"4\"><IMG src=\"themes/MtechnikV2/images/pixel.gif\" width=\"1\" height=1 alt=\"\" border=\"0\" hspace=\"0\"></td>\n"
	    ."</tr>\n"
	    ."<tr valign=\"middle\" bgcolor=\"#FFFFFF\">\n"
	."<td background=\"themes/MtechnikV2/images/header.jpg\" height=24 width=\"15%\" nowrap><font size=\"2\"><b>\n";
    if ($username == "Anonymous") {
	echo "&nbsp;&nbsp;<b><a href=\"modules.php?name=Your_Account\">Login / sign up, i dont bite</a></font></b>\n";
    } else {
	echo "&nbsp;&nbsp;Hello there sexy $username!";
    }
    echo "</b></font></td>\n"
	."<td background=\"themes/MtechnikV2/images/header.jpg\" align=\"center\" height=\"24\" width=\"71%\"><font size=\"2\">\n"
	
        ."</B></font>\n"
        ."</td>\n"
        ."<td background=\"themes/MtechnikV2/images/header.jpg\" height=24 align=\"right\" width=\"15%\"><font size=\"2\"><b>\n"
        ."<script type=\"text/javascript\">\n\n"
        ."<!--   // Array ofmonth Names\n"
        ."var monthNames = new Array( \"January\",\"February\",\"March\",\"April\",\"May\",\"June\",\"July\",\"August\",\"September\",\"October\",\"November\",\"December\");\n"
        ."var now = new Date();\n"
        ."thisYear = now.getYear();\n"
        ."if(thisYear < 1900) {thisYear += 1900}; // corrections if Y2K display problem\n"
        ."document.write(monthNames[now.getMonth()] + \" \" + now.getDate() + \", \" + thisYear);\n"
        ."// -->\n\n"
        ."</script></b></font>&nbsp;</td>\n"
        ."\n"
        ."</tr>\n"
        ."<tr>\n"
        ."<td bgcolor=\"#000000\" colspan=\"4\"><IMG src=\"themes/MtechnikV2/images/pixel.gif\" width=\"1\" height=\"1\" alt=\"\" border=\"0\" hspace=\"0\"></td>\n"
        ."</tr>\n"
        ."</table>\n\n"

	    ."<!-- FIN DEL TITULO -->\n"
	    ."<table width=\"99%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\"><tr valign=\"top\">\n"
	    ."<td><img src=\"themes/MtechnikV2/images/pixel.gif\" width=\"1\" height=\"20\" border=\"0\" alt=\"\"></td></tr></table>\n"
	    ."<table width=\"99%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\"><tr valign=\"top\">\n"
	    ."<td><img src=\"themes/MtechnikV2/images/pixel.gif\" width=\"10\" height=\"1\" border=\"0\" alt=\"\"></td>\n"
	    ."<td width=\"150\" valign=\"top\">\n";
    blocks(left);
    echo "</td><td><img src=\"themes/MtechnikV2/images/pixel.gif\" width=\"15\" height=\"1\" border=\"0\" alt=\"\"></td><td width=\"100%\">\n";
}

/************************************************************/
/* Function themefooter()                                   */
/************************************************************/

function themefooter() {
    global $index;
    if ($index == 1) {
	echo "</td><td><img src=\"themes/MtechnikV2/images/pixel.gif\" width=\"15\" height=\"1\" border=\"0\" alt=\"\"></td><td valign=\"top\" width=\"155\">\n";
	blocks(right);
    }
    echo "</td><td><img src=\"themes/MtechnikV2/images/pixel.gif\" width=10 height=1 border=0 alt=\"\">\n"
	."</td></tr></table>\n"
        ."<table width=\"99%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\"><tr valign=\"top\">\n"
        ."<td height=\"17\">&nbsp;</td>\n"
        ."</tr></table>\n"
        ."<br>"
        ."<table width=\"97%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" bgcolor=\"\" align=\"center\"><tr valign=\"top\">\n"
        ."</tr><tr align=\"center\">\n"
        ."<td bgcolor=\"\" width=\"100%\" colspan=\"3\">\n";
    footmsg();
    echo "</td>\n"
        ."</tr>\n"
        ."</table>\n"
        ."</tr></table><center><br>Theme by <a href=\"http://www.mtechnik.net\"><b>Mtechnik RepReSenT'n</a></b></center>\n";
}

/************************************************************/
/* Function themeindex ()                                   */
/************************************************************/

function themeindex ($aid, $informant, $time, $title, $counter, $topic, $thetext, $notes, $morelink, $topicname, $topicimage, $topictext) {
    global $anonymous, $tipath;
    echo "<table border=\"0\" cellpadding=\"4\" cellspacing=\"0\" width=\"100%\" bgcolor=\"#000000\">\n"
    ."<tr>\n"
    ."<td background=\"themes/MtechnikV2/images/block2.jpg\">&nbsp; \n"
    ."</td>\n"
    ."</tr>\n"
    ."</table>\n"
    ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n"
    ."<tr>\n"
    ."<td>\n"
	."<table border=\"0\" cellpadding=\"3\" cellspacing=\"1\" bgcolor=\"\" width=\"100%\"><tr>\n"
	."<td bgcolor=\"#000000\" align=\"left\">\n"
	."<font size=\"4\" color=\"#D7E2EE\"><b>$title</b></font>\n"
	."<br><font color=\"#ffffff\" size=\"1\">"._POSTEDBY." ";
    formatAidHeader($aid);
    echo " "._ON." $time $timezone ($counter "._READS.")</font>\n"
    ."<br><b>"._TOPIC."</b> <a href=\"modules.php?name=News&amp;new_topic=$topic\">$topictext</a>\n"
	."</td></tr>\n"
	."<tr><td bgcolor=\"#000000\">\n"
	."<font color=\"#ffffff\"><b><a href=\"modules.php?name=News&amp;new_topic=$topic\"><img src=\"$tipath$topicimage\" border=\"0\" Alt=\"$topictext\" align=\"right\" hspace=\"10\" vspace=\"10\"></a></B></font>\n";
    FormatStory($thetext, $notes, $aid, $informant);
    echo "</td></tr>\n"
    ."<tr><td background=\"themes/MtechnikV2/images/block2.jpg\" align=\"right\">\n"
	."<font size=\"2\">$morelink</font>\n"
	."</td></tr></table></td></tr></table>\n"
	."<br>\n\n\n";
}

/************************************************************/
/* Function themeartikel-gross()                            */
/************************************************************/

function themearticle ($aid, $informant, $datetime, $title, $thetext, $topic, $topicname, $topicimage, $topictext) {
    global $admin, $sid, $tipath;
    echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"#000000\" width=\"100%\"><tr><td>\n"
        ."<table border=\"0\" cellpadding=\"1\" cellspacing=\"1\" bgcolor=\"#4B679A\" width=\"100%\"><tr><td>\n"
        ."<table background=\"themes/MtechnikV2/images/header.jpg\" border=\"0\" cellpadding=\"3\" cellspacing=\"2\" bgcolor=\"#4B679A\" width=\"100%\"><tr><td align=\"left\">\n"
        ."<font class=\"option\" size=\"1\"><b><img src=\"themes/MtechnikV2/images/icon.gif\" width=15 height=14 align=\"center\">&nbsp;&nbsp;$title</b></font><br>\n"
        ."</td></tr></table>\n"   
        ."<font size=\"1\">"._POSTEDON." $datetime "._BY." ";
    $posted .= formatAidHeader($aid); echo "$posted"; 
    if (is_admin($admin)) {
	echo "<br>[ <a href=\"admin.php?op=EditStory&amp;sid=$sid\">"._EDIT."</a> | <a href=\"admin.php?op=RemoveStory&amp;sid=$sid\">"._DELETE."</a> ]\n";
    }
    echo "</td></tr></table><br>";
    echo "<a href=\"modules.php?name=News&amp;new_topic=$topic\"><img src=\"$tipath$topicimage\" border=\"0\" Alt=\"$topictext\" align=\"right\" hspace=\"3\" vspace=\"0\" bgcolor=\"#EFEFEF\"></a>\n";
    FormatStory($thetext, $notes="", $aid, $informant);
    echo "</td></tr></table><br>\n\n\n";
}

/************************************************************/
/* Function themebox()                                      */
/************************************************************/

function themesidebox($title, $content) {
    echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"1\" bgcolor=\"\" width=\"165\"><tr><td>\n"
        ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"165\">\n"
   	."</table>\n"
    	."<table border=\"0\" cellpadding=\"3\" cellspacing=\"0\" bgcolor=\"\" width=\"100%\">\n"
	."<tr><td background=\"themes/MtechnikV2/images/block.jpg\">\n"
	."<font class=\"titel\" size=\"1\"><b>$title</b></font>\n"
	."</td></tr>\n"
	."<tr>\n"
	."<td background=\"themes/MtechnikV2/images/block1.jpg\">&nbsp;\n"
	."</tr>\n"
	."<tr>\n"
	."<td bgcolor=\"#000000\"><font size=\"1\">$content</td>\n"
	."</tr>\n"
        ."<tr>\n"
	."<td background=\"themes/MtechnikV2/images/blockb.jpg\">&nbsp;\n"
	."</tr>\n"
	."</table></td></tr></table>\n"
	."<br>\n\n\n";
}

?>