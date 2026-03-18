<?php

/************************************************************/
/* THEME NAME: Simplicity - Nuke 5.3 - November 2001        */
/* THEME DEVELOPER: Dezina (http://www.dezina.com)          */   
/* THEME Updated PHPNuke 5.5: Dezina (http://www.dezina.com */ 
/* Date Updated: By Dezina on 5th March 2002                */     
/************************************************************/


/************************************************************/
/* Theme Colors Definition                                  */
/*                                                          */
/* Control the header for your site. You need to define the */
/* BODY tag and in some part of the code call the blocks    */
/* function for left side with: blocks(left);               */
/************************************************************/

$thename = "Simplicity";
$bgcolor1 = "#C0C0C0";
$bgcolor2 = "#C0C0C0";
$bgcolor3 = "#E2DEDE";
$bgcolor4 = "#E2DEDE";
$textcolor1 = "#000000";
$textcolor2 = "#000080";

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
    global $anonymous;;$tipath;
    if ($notes != "") {
	$notes = "<br><b>"._NOTE."</b> $notes\n";
    } else {
	$notes = "";
    }
    if ("$aid" == "$informant") {
	echo "<font size=\"2\" color=\"#000080\">$thetext<br>$notes</font>\n";
    } else {
	if($informant != "") {
	    $boxstuff = "<a href=\"modules.php?name=Your_Account&amp;op=userinfo&amp;uname=$informant\">$informant</a> ";
	} else {
	    $boxstuff = "$anonymous ";
	}
	$boxstuff .= ""._WRITES." \"$thetext\" $notes\n";
	echo "<font size=\"2\" color=\"#000000\">$boxstuff</font>\n";
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
  echo "<!----- PLEASE DO NOT REMOVE COPYRIGHT NOTICE ----->\n";
    echo "<!----- Copyright (c) 2002 Dezina(http://www.dezina.com) ----->\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n";
    }
    echo "<body bgcolor=\"#808080\" background=\"themes/Simplicity/images/back.jpg\" text=\"#ffffff\" link=\"#000080\" vlink=\"#ff6600\" alink=\"#ffff00\">\n"
	."<br>\n";
    if ($banners) {
	include("banners.php");
    }
    echo "<br>\n"
	."<table cellpadding=\"0\" cellspacing=\"0\" width=\"99%\" border=\"0\" align=\"center\" bgcolor=\"#333366\">\n"
	."<tr>\n"
	."<td bgcolor=\"#808080\">\n"
	."<img height=\"16\" alt=\"\" hspace=\"0\" src=\"themes/Simplicity/images/corner-top-left.gif\" width=\"17\" align=\"left\">\n"
	."<a href=\"index.php\"><img src=\"themes/Simplicity/images/logo1.gif\"
	align=\"left\" vspace=\"10\" hspace=\"5\" alt=\""._WELCOMETO." $sitename\" 
	border=\"0\" width=\"347\" height=\"66\"></a></td>\n"
	."<td bgcolor=\"#808080\"><IMG src=\"themes/Simplicity/images/pixel.gif\" width=\"1\" height=\"1\" alt=\"\" border=\"0\" hspace=\"0\"></td>\n"
	."<td bgcolor=\"#808080\" align=\"center\">\n"
	."&nbsp;</td>\n"
	."<td bgcolor=\"#808080\" align=\"center\">\n"
	."<form action=\"modules.php?name=Search\" method=\"post\"><font class=\"content\" color=\"#000000\"><b>".translate("Search")." </b>\n"
	."<input type=\"text\" name=\"query\" size=\"14\"></font></form></td>\n"
	."<td bgcolor=\"#808080\" align=\"center\">\n"
	."<form action=\"modules.php?name=Search\" method=\"post\"><font class=\"content\"><b>".translate("Topics")." </b>\n";
    $toplist = mysql_query("select topicid, topictext from $prefix"._topics." order by topictext");
    echo "<select name=\"topic\"onChange='submit()'>\n"
	."<option value=\"\">".translate("All Topics")."</option>\n";
    while(list($topicid, $topics) = mysql_fetch_row($toplist)) {
    if ($topicid==$topic) { $sel = "selected "; }
	echo "<option $sel value=\"$topicid\">$topics</option>\n";
	$sel = "";

    }
    echo "</select></font></form></center></td>\n"
	."<td bgcolor=\"#808080\" valign=\"top\"><img height=\"17\" alt=\"\" hspace=\"0\" src=\"themes/Simplicity/images/corner-top-right1.gif\" width=\"17\" align=\"right\"></td>\n"
	."</tr></table>\n"
	."<table cellpadding=\"0\" cellspacing=\"0\" width=\"99%\" border=\"0\" align=\"center\" bgcolor=\"#000000\">\n"
	."<tr>\n"
	."<td bgcolor=\"#000000\" colspan=\"4\"><IMG src=\"themes/Simplicity/images/pixel.gif\" width=\"1\" height=1 alt=\"\" border=\"0\" hspace=\"0\"></td>\n"
	."</tr>\n"
	."<tr valign=\"middle\" bgcolor=\"#CECEDE\">\n"
	."<td width=\"15%\" nowrap><font size=\"1\" color=\"#000080\"><b>\n";
    if ($username == "Anonymous") {
	echo "&nbsp;&nbsp;<b><font color=\"#ffffff\"><a href=\"modules.php?name=Your_Account\"><img 
	src=\"themes/Simplicity/images/nav/members.gif\" border=\"0\" height=\"19\" Alt=\"Create an Account\"</a></font></b>\n";
    } else {
	echo "&nbsp;&nbsp;".WELCOME." $username!";
    }
    echo "</b></font></td>\n"
	."<td align=\"center\" height=\"20\" width=\"70%\"><font size=\"1\"><B>\n"
	."<A href=\"index.php\"><img src=\"themes/Simplicity/images/nav/home.jpg\" border=\"0\" height=\"19\" Alt=\"Index\"></a>\n"
       ."<A href=\"modules.php?op=modload&name=The_Gallery&file=index\"><img src=\"themes/Simplicity/images/nav/gallery.jpg\" border=\"0\" height=\"19\" Alt=\"Gallery\"></a>\n"       
        ."<A href=\"modules.php?name=Downloads\"><img src=\"themes/Simplicity/images/nav/download.jpg\" border=\"0\" height=\"19\" Alt=\"Downloads\"></a>\n"
        ."<A href=\"modules.php?name=Your_Account\"><img src=\"themes/Simplicity/images/nav/account.jpg\" border=\"0\" height=\"19\" Alt=\"Account\"></a>\n"
        ."<A href=\"modules.php?name=Web_Links\"><img src=\"themes/Simplicity/images/nav/links.jpg\" border=\"0\" height=\"19\" Alt=\"Links\"></a>\n"       
        ."<A href=\"modules.php?name=Top\"><img src=\"themes/Simplicity/images/nav/topten.jpg\" border=\"0\" height=\"19\" Alt=\"Top 10\"></a>\n"       
        ."</B></font>\n"

        ."</B></font>\n"
        ."</td>\n"
        ."<td align=\"right\" width=\"15%\"><font size=\"1\"color=\"#000000\"><b>\n"
        ."<script type=\"text/javascript\">\n\n"
        ."<!--   // Array ofmonth Names\n"
        ."var monthNames = new Array( \"January\",\"February\",\"March\",\"April\",\"May\",\"June\",\"July\",\"August\",\"September\",\"October\",\"November\",\"December\");\n"
        ."var now = new Date();\n"
        ."thisYear = now.getYear();\n"
        ."if(thisYear < 1900) {thisYear += 1900}; // corrections if Y2K display problem\n"
        ."document.write(monthNames[now.getMonth()] + \" \" + now.getDate() + \", \" + thisYear);\n"
        ."// -->\n\n"
        ."</script></b></font></td>\n"
        ."<td>&nbsp;</td>\n"
        ."</tr>\n"
        ."<tr>\n"
        ."<td bgcolor=\"#000000\" colspan=\"4\"><IMG src=\"themes/Simplicity/images/pixel.gif\" width=\"1\" height=\"1\" alt=\"\" border=\"0\" hspace=\"0\"></td>\n"
        ."</tr>\n"
        ."</table>\n"
	."<!-- FIN DEL TITULO -->\n"
	."<table width=\"99%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" 
	bgcolor=\"#808080\" align=\"center\"><tr valign=\"top\">\n"
	."<td bgcolor=\"#808080\"><img src=\"themes/Simplicity/images/pixel.gif\" width=\"1\" height=\"20\" border=\"0\" alt=\"\"></td></tr></table>\n"
	."<table width=\"99%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" 
	bgcolor=\"#808080\" align=\"center\"><tr valign=\"top\">\n"
	."<td bgcolor=\"#808080\"><img src=\"themes/Simplicity/images/pixel.gif\" width=\"10\" height=\"1\" border=\"0\" alt=\"\"></td>\n"
	."<td bgcolor=\"#808080\" width=\"150\" valign=\"top\">\n";
    blocks(left);
    echo "</td><td><img src=\"themes/Simplicity/images/pixel.gif\" width=\"15\" height=\"1\" border=\"0\" alt=\"\"></td><td width=\"100%\">\n";
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
	echo "</td><td><img src=\"themes/Simplicity/images/pixel.gif\" width=\"15\" height=\"1\" border=\"0\" alt=\"\"></td><td valign=\"top\" width=\"150\">\n";
	blocks(right);
    }
    echo "</td><td bgcolor=\"#808080\"><img src=\"themes/Simplicity/images/pixel.gif\" width=10 height=1 border=0 alt=\"\">\n"
	."</td></tr></table>\n"
        ."<table width=\"99%\" cellpadding=\"0\" cellspacing=\"0\" 
        border=\"0\" bgcolor=\"#808080\" align=\"center\"><tr valign=\"top\">\n"
        ."<td align=\"center\" height=\"17\">\n"
        ."<IMG height=\"17\" alt=\"\" hspace=\"0\" src=\"themes/Simplicity/images/corner-bottom-left1.gif\" width=\"17\" align=\"left\">\n"
        ."<IMG height=\"17\" alt=\"\" hspace=\"0\" src=\"themes/Simplicity/images/corner-bottom-right1.gif\" width=\"17\" align=\"right\">\n"
        ."</td></tr></table>\n"
        ."<br>"
        ."<table width=\"99%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\"><tr valign=\"top\">\n"
        ."<td><IMG height=\"17\" alt=\"\" hspace=\"0\" src=\"themes/Simplicity/images/pixel.gif\" width=\"1\" align=\"left\"></td>\n"
        ."<td width=\"100%\">&nbsp;</td>\n"
        ."<td><IMG height=\"17\" alt=\"\" hspace=\"0\" src=\"themes/Simplicity/images/pixel.gif\" width=\"1\" align=\"right\"></td>\n"
        ."</tr><tr align=\"center\">\n"
        ."<td width=\"100%\" colspan=\"3\">\n";
    footmsg();
    echo "</td>\n"
        ."</tr><tr>\n"
        ."<td><IMG height=\"17\" alt=\"\" hspace=\"0\" src=\"themes/Simplicity/images/pixel.gif\" width=\"1\" align=\"left\"></td>\n"
        ."<td width=\"100%\">&nbsp;</td>\n"
        ."<td><IMG height=\"17\" alt=\"\" hspace=\"0\" src=\"themes/Simplicity/images/pixel.gif\" width=\"1\" align=\"right\"></td>\n"
        ."</tr></table>\n";
}

/************************************************************/
/* Function themeheader()                                   */
/*                                                          */
/* MAINTEXT...Control the header for your site. You need to define the */
/* BODY tag and in some part of the code call the blocks    */
/* function for left side with: blocks(left);               */
/************************************************************/

function themeindex ($aid, $informant, $time, $title, $counter, $topic, $thetext, $notes, $morelink, $topicname, $topicimage, $topictext) {
    global $anonymous, $tipath;
    echo "<table border=\"0\" cellpadding=\"1\" cellspacing=\"0\" 
    bgcolor=\"#000000\" width=\"100%\"><tr><td>\n"
	."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"#ffffff\" width=\"100%\"><tr><td>\n"
	."<table border=\"0\" cellpadding=\"5\" cellspacing=\"0\" 
	bgcolor=\"#C0C0C0\" 
	width=\"100%\"><tr><td align=\"left\">\n"
	."<font size=\"2\" font class=\"boxtitle\" color=\"#000000\"><b>$title</b></font><br>\n"
."<font color=\"#999999\" size=\"1\">"._POSTEDBY." ";
    formatAidHeader($aid);
    echo " "._ON." $time $timezone ($counter "._READS.")<br></font>\n"    
."</td></tr></table></td></tr></table>\n"
	."<table border=\"0\" cellpadding=\"5\" cellspacing=\"0\" bgcolor=\"#ffffff\" 
	width=\"100%\"><tr><td align=\"justify\">\n"
	."<font size=\"2\" color=\"#ffbb00\"><b><a href=\"modules.php?name=News&amp;new_topic=$topic\"><img src=\"$tipath$topicimage\" border=\"0\" Alt=\"$topictext\" align=\"right\" hspace=\"10\" vspace=\"10\"></a></B></font>\n";
    FormatStory($thetext, $notes, $aid, $informant);
    echo "</td></tr></table></td></tr></table>\n"
	."<table border=\"0\" cellpadding=\"1\" cellspacing=\"0\" bgcolor=\"#000000\" width=\"100%\"><tr><td>\n"
	."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"#C0C0C0\" 
	width=\"100%\"><tr><td align=\"right\">\n"
	
	."<font color=\"#999999\" size=\"1\">$morelink</font>\n"
	."</td></tr></table></td></tr></table>\n"
	."<br>\n\n\n";
}

/************************************************************/
/* Function themeheader()                                   */
/*                                                          */
/* Control the header for your site. You need to define the */
/* BODY tag and in some part of the code call the blocks    */
/* function for left side with: blocks(left);               */
/************************************************************/

function themearticle ($aid, $informant, $datetime, $title, $thetext, $topic, $topicname, $topicimage, $topictext) {
    global $admin, $sid, $tipath;
    echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" 
    bgcolor=\"#B9B5B5\" width=\"100%\" bordercolor=\"#9191B3\" ><tr><td>\n"
        ."<table border=\"0\" cellpadding=\"1\" cellspacing=\"0\" bgcolor=\"#9191B3\" width=\"100%\"><tr><td>\n"
        ."<table border=\"0\" cellpadding=\"3\" cellspacing=\"0\" bgcolor=\"#CFCFE3\" width=\"100%\"><tr><td align=\"left\">\n"
        ."<font size=\"1\" font class=\"content\" color=\"#000000\"><b>$title</b></font><br>\n"
        ."<font size=\"1\">"._POSTEDON." $datetime "._BY." ";
    formatAidHeader($aid);

    echo "</td></tr></table></td></tr></table><br>";
    
     echo "<a href=\"modules.php?name=Search&query=&topic=$topic\"><img src=\"$tipath$topicimage\" border=\"0\" Alt=\"$topictext\" align=\"right\" hspace=\"10\" vspace=\"10\"></a>\n";
    FormatStory($thetext, $notes="", $aid, $informant);
    echo "</td></tr></table><br>\n\n\n";
}

/************************************************************/
/* Function themeheader()                                   */
/*                                                          */
/* sidebOX Control the header for your site. You need to define the */
/* BODY tag and in some part of the code call the blocks    */
/* function for left side with: blocks(left);               */
/************************************************************/

function themesidebox($title, $content) {
    echo "<table border=\"0\" cellpadding=\"1\" cellspacing=\"0\" 
    bgcolor=\"#000000\" width=\"150\"><tr><td>\n"
	."<table border=\"0\" cellpadding=\"2\" cellspacing=\"1\" 
	bgcolor=\"#9A9AA8\" 
	width=\"100%\"><tr><td align=center>\n"
	."<font size=\"1\" font class=\"boxtitle\" color=\"#FFFFFF\"><b>$title</b></font>\n"
	."</td></tr><tr valign=\"top\"><td bgcolor=\"#D5D3D3\">\n"
	."<font size=\"1\">$content</font>\n"
	."</td></tr></table></td></tr></table>\n"
	."<br>\n\n\n";
}

