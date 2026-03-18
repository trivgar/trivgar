<?php

/*****************************************************************/
/* Theme Name: sb_ulk (v1.0)                                     */
/* Theme Developer: Helmut Theisen (http://www.shareware-base.de)*/
/* date: 01/06/2002                                              */
/*****************************************************************/

/************************************************************/
/* Theme Colors Definition                                  */
/*                                                          */
/* Define colors for your web site. $bgcolor2 is generaly   */
/* used for the tables border as you can see on OpenTable() */
/* function, $bgcolor1 is for the table background and the  */
/* other two bgcolor variables follows the same criteria.   */
/* $texcolor1 and 2 are for tables internal texts           */
/************************************************************/

$bgcolor1 = "#3B96C2";
$bgcolor2 = "#3B96C2";
$bgcolor3 = "#3B96C2";
$bgcolor4 = "#3B96C2";
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
	echo "<font class=\"content\" color=\"#505050\">$thetext$notes</font>\n";
    } else {
	if($informant != "") {
	    $boxstuff = "<a href=\"modules.php?name=Your_Account&amp;op=userinfo&amp;uname=$informant\">$informant</a> ";
	} else {
	    $boxstuff = "$anonymous ";
	}
	$boxstuff .= ""._WRITES." <i>\"$thetext\"</i>$notes\n";
	echo "<font class=\"content\" color=\"#505050\">$boxstuff</font>\n";
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
    global $user, $banners, $sitename, $slogan, $cookie, $prefix, $dbi;
    cookiedecode($user);
    $username = $cookie[1];
    if ($username == "") {
        $username = "Anonymous";
    }
    echo "<body bgcolor=\"#3B96C2\" text=\"#000000\" link=\"#363636\" vlink=\"#363636\" alink=\"#d5ae83\">\n"
	."<CENTER>\n"
	."<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=0 WIDTH=752><TR VALIGN=TOP ALIGN=LEFT><TD WIDTH=752><P>\n"
	."<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=0 WIDTH=\"100%\"><COLGROUP><COL WIDTH=752></COLGROUP><TR>\n"
	."<!-- EndFragment -->\n"
	."<TD WIDTH=752><P>\n"
	."<!-- StartFragment -->\n"
	."<TABLE BORDER=0 BGCOLOR=\"#3B96C2\" CELLSPACING=0 CELLPADDING=0 WIDTH=\"100%\"><COLGROUP><COL WIDTH=770>\n"
	."</COLGROUP><TR><TD WIDTH=770><P><TABLE background=\"themes/sb_ulk/images/cellpic3.jpg\" BORDER=0 BGCOLOR=\"#3B96C2\" CELLSPACING=0 CELLPADDING=0 WIDTH=\"100%\">\n"
	."<COLGROUP><COL WIDTH=77><COL WIDTH=693></COLGROUP><TR><TD WIDTH=90 BGCOLOR=\"#3B96C2\" valign=\"top\"><P><FONT class=\"mini\">\n"
	."Theme by<BR></FONT><A HREF=\"http://www.shareware-base.de\"><FONT class=\"mini\">Shareware-base.de</FONT></A></P>\n"
	."</TD><TD ALIGN=RIGHT WIDTH=693 BGCOLOR=\"#3B96C2\">\n"
	."<P ALIGN=center>&nbsp;\n";
    if ($banners) {
	include("banners.php");
    }	
    $result = mysql_query("SELECT count FROM ".$prefix."_counter WHERE type='total' AND var='hits'");
    $result = mysql_fetch_row($result);
$result1 = sql_query("SELECT username FROM ".$prefix."_session where guest=1", $dbi);
$guest_online_num = sql_num_rows($result1, $dbi);

$result1 = sql_query("SELECT username FROM ".$prefix."_session where guest=0", $dbi);
$member_online_num = sql_num_rows($result1, $dbi);
$who_online_num = $guest_online_num + $member_online_num;
if ($guest_online_num =="") { $guest_online_num = "0"; }
if ($member_online_num =="") { $member_online_num = "0"; }
	echo "<br></TD>\n"
	."</TR></TABLE></TD></TR><TR><TD WIDTH=770 BGCOLOR=\"#3B96C2\">\n"
	."<P><TABLE BORDER=0 BGCOLOR=\"#3B96C2\" CELLSPACING=0 CELLPADDING=0 WIDTH=\"100%\"><COLGROUP>\n"
	."<COL WIDTH=360><COL WIDTH=205><COL WIDTH=205></COLGROUP><TR><TD ROWSPAN=3 WIDTH=360>\n"
	."<P><A HREF=\"index.php\"><IMG HEIGHT=50 WIDTH=280 SRC=\"themes/sb_ulk/images/Logo2.gif\" VSPACE=0 HSPACE=0 ALIGN=\"BOTTOM\" BORDER=0 ALT=\"$sitename\"></A></TD>\n"
	."<TD COLSPAN=2 ALIGN=RIGHT><P ALIGN=RIGHT><TABLE BORDER=0 CELLSPACING=0 CELLPADDING=0 WIDTH=\"100%\" HEIGHT=\"19\">\n"
	."<COLGROUP><COL WIDTH=405><COL WIDTH=5></COLGROUP><TR>\n"
	."<TD ALIGN=RIGHT WIDTH=405 BGCOLOR=\"#3B96C2\" HEIGHT=19>\n"
	."<P ALIGN=CENTER><b>Views: $result[0]&nbsp;&nbsp;&nbsp;&nbsp;Guest Online: $guest_online_num&nbsp;&nbsp;&nbsp;&nbsp;Members: $member_online_num&nbsp;&nbsp;&nbsp;&nbsp;\n"
        ."<script type=\"text/javascript\">\n\n"
        ."<!--   // Array ofmonth Names\n"
        ."var monthNames = new Array( \"Januar\",\"Februar\",\"März\",\"April\",\"Mai\",\"Juni\",\"Juli\",\"August\",\"September\",\"Oktober\",\"November\",\"Dezember\");\n"
        ."var now = new Date();\n"
        ."thisYear = now.getYear();\n"
        ."if(thisYear < 1900) {thisYear += 1900}; // corrections if Y2K display problem\n"
        ."document.write(now.getDate() + \". \" + monthNames[now.getMonth()] + \" \" + thisYear);\n"
        ."// --></b>\n\n"
        ."</script>&nbsp;\n"
	."&nbsp;</P></TD><TD WIDTH=5><P ALIGN=RIGHT></P>\n"
	."</TD></TR></TABLE></TD></TR><TR><TD COLSPAN=2 ALIGN=RIGHT><P ALIGN=RIGHT>\n"
	."<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=0 WIDTH=\"100%\"><COLGROUP>\n"
	."<COL WIDTH=133><COL WIDTH=198><COL WIDTH=80></COLGROUP><TR><TD WIDTH=133>\n"
	."<P></P></TD><TD WIDTH=198><P></P></TD><TD WIDTH=80><P></P></TD></TR><TR><TD VALIGN=TOP WIDTH=133>\n"
	."<P><select class=\"combobox\" name=\"SiteMap\" onchange=\"if(options[selectedIndex].value){location = options[selectedIndex].value}\" size=1>\n"
	."<option selected>Page Function  </option>\n"
	."<option value=\"index.php\">Home</option>\n"
	."<option value=\"modules.php?name=Downloads\">Downloads</option>\n"
	."<option value=\"modules.php?name=Feedback\">Feedback</option>\n"
	."<option value=\"modules.php?name=Members_List\">Memberlist</option>\n"
	."<option value=\"modules.php?name=Recommend_Us\">Recommend Us</option>\n"
	."<option value=\"modules.php?name=Reviews\">Reviews</option>\n"
	."<option value=\"modules.php?name=Search\">Search</option>\n"
	."<option value=\"modules.php?name=Sections\">Sections</option>\n"
	."<option value=\"modules.php?name=Statistics\">Statistics</option>\n"
	."<option value=\"modules.php?name=Stories_Archive\">Stories Archiv</option>\n"
	."<option value=\"modules.php?name=Submit_News\">Submit News</option>\n"
	."<option value=\"modules.php?name=Top\">Top 10</option>\n"
	."<option value=\"modules.php?name=Topics\">Topics</option>\n"
	."<option value=\"modules.php?name=Web_Links\">Web Links</option>\n"
	."<option value=\"modules.php?name=Your_Account\">Your Account</option>\n"
	."</select>\n"
	."</TD>\n" 
	."<TD VALIGN=TOP WIDTH=198><P>\n"
	."<form action=\"modules.php?name=Search\" method=\"post\"><font class=\"content\" color=\"#000000\">Search <input type=\"text\" name=\"query\" size=\"18\"></font></form></center>\n"
	."<TD VALIGN=TOP WIDTH=100 align=\"center\"><P>\n"
	."<IMG HEIGHT=0 WIDTH=0 SRC=\"\" VSPACE=0 HSPACE=0 ALIGN=\"MIDDLE\" BORDER=0></A></TD>\n" 
	."</TR></TABLE></TD></TR><TR><TD WIDTH=205><P></P></TD><TD WIDTH=205><P></P></TD></TR></TABLE></FORM></TD></TR></TABLE>\n"
	."<TABLE BORDER=0 BGCOLOR=\"#3B96C2\" CELLSPACING=0 CELLPADDING=0 WIDTH=\"100%\"><COLGROUP>\n"
	."<COL WIDTH=300><COL WIDTH=470></COLGROUP><TR><TD COLSPAN=0 BGCOLOR=\"#3B96C2\" HEIGHT=3>\n"
	."</TR><TR><TD COLSPAN=0 ALIGN=RIGHT BGCOLOR=\"#3B96C2\" HEIGHT=10>\n"
	."<P ALIGN=CENTER>\n"
	."<td width=\"16%\" bgcolor=\"#3B96C2\" class=\"cellbox\" align=\"center\" style=\"cursor:hand\" onMouseOver=\"this.style.background='#0066FF'\" onMouseOut=\"this.style.background='#3B96C2'\" onClick=\"window.location.href='index.php'\"><a href=\"index.php\">Home</a></td>\n"
	."<td width=\"16%\" bgcolor=\"#3B96C2\" class=\"cellbox\" align=\"center\" style=\"cursor:hand\" onMouseOver=\"this.style.background='#0066FF'\" onMouseOut=\"this.style.background='#3B96C2'\" onClick=\"window.location.href='modules.php?name=Forum'\"><a href=\"modules.php?name=Forum\">Forum</a></td>\n"
	."<td width=\"16%\" bgcolor=\"#3B96C2\" class=\"cellbox\" align=\"center\" style=\"cursor:hand\" onMouseOver=\"this.style.background='#0066FF'\" onMouseOut=\"this.style.background='#3B96C2'\" onClick=\"window.location.href='modules.php?name=Submit_News'\"><a href=\"modules.php?name=Submit_News\">Submit_News</a></td>\n"
	."<td width=\"16%\" bgcolor=\"#3B96C2\" class=\"cellbox\" align=\"center\" style=\"cursor:hand\" onMouseOver=\"this.style.background='#0066FF'\" onMouseOut=\"this.style.background='#3B96C2'\" onClick=\"window.location.href='modules.php?name=Downloads'\"><a href=\"modules.php?name=Downloads\">Downloads</a></td>\n"
	."<td width=\"16%\" bgcolor=\"#3B96C2\" class=\"cellbox\" align=\"center\" style=\"cursor:hand\" onMouseOver=\"this.style.background='#0066FF'\" onMouseOut=\"this.style.background='#3B96C2'\" onClick=\"window.location.href='modules.php?name=Web_Links'\"><a href=\"modules.php?name=Web_Links\">Web Links</a></td>\n"
	."<td width=\"16%\" bgcolor=\"#3B96C2\" class=\"cellbox\" align=\"center\" style=\"cursor:hand\" onMouseOver=\"this.style.background='#0066FF'\" onMouseOut=\"this.style.background='#3B96C2'\" onClick=\"window.location.href='modules.php?name=Your_Account'\"><a href=\"modules.php?name=Your_Account\">Account</a></td>\n"
	."<IMG HEIGHT=1 WIDTH=14 SRC=\"themes/sb_ulk/images/pixel.gif\" VSPACE=0 HSPACE=0 ALIGN=\"BOTTOM\" BORDER=0>\n"
	."<form action=\"modules.php?name=Your_Account\" method=\"post\">\n"
	."<font class=\"formtexts\">Nick:</font> <input type=\"text\" name=\"uname\" size=\"7\" maxlength=\"25\" class=\"formtexts\">\n"
	."<font class=\"formtexts\">Pass:</font> <input type=\"password\" name=\"pass\" size=\"7\" maxlength=\"20\" class=\"formtexts\">\n"
	."<input type=\"hidden\" name=\"op\" value=\"login\">\n"
	."<input type=\"submit\" value=\"login\" class=\"formtexts\">\n"
	."&nbsp;<a href=\"modules.php?name=Your_Account&op=new_user\"><font class=\"formtexts\">Join</font></a>\n"
	."<IMG HEIGHT=1 WIDTH=140 SRC=\"themes/sb_ulk/images/pixel.gif\" VSPACE=0 HSPACE=0 ALIGN=\"BOTTOM\" BORDER=0></TD>\n"
	."<TD ALIGN=LEFT WIDTH=470><P ALIGN=CENTER>\n"
	."</P></TD></TR></TABLE></TD></TR></TABLE></TD></TR></TABLE></CENTER>\n"
	."</tr>\n"
	."</table>\n"
	."</td>\n"
	."</tr>\n"
	."<tr>\n"
	."<td>\n\n"
	."<!----- Begin of Main Content Table ----->\n"
	."<table width=\"750\" cellpadding=\"0\" cellspacing=\"1\" border=\"0\" bgcolor=\"#3B96C2\" align=\"center\">\n"
	."<tr valign=\"top\">\n"
	."<td valign=\"top\">\n"
	."<table width=\"750\" cellpadding=\"5\" cellspacing=\"0\" border=\"0\" bgcolor=\"#3B96C2\" align=\"center\">\n"
	."<tr valign=\"top\">\n"
	."<td width=\"150\" valign=\"top\">\n";
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
	echo "</td><td valign=\"top\" width=\"150\">\n";
	blocks(right);
    }
    echo "</td>\n"
	    ."</tr>\n"
	    ."</table>\n"
	    ."</td>\n"
	    ."</tr>\n"
	    ."</table>\n"
        ."<table background=\"themes/sb_ulk/images/cellpic4.jpg\" width=\"750\" cellpadding=\"1\" cellspacing=\"0\" border=\"0\" bgcolor=\"#3B96C2\" align=\"center\">\n"
        ."<tr>\n"
        ."<td>\n"
        ."<table background=\"themes/sb_ulk/images/cellpic4.jpg\" width=\"750\" cellpadding=\"3\" cellspacing=\"0\" border=\"0\" bgcolor=\"#3B96C2\" align=\"center\">\n"
        ."<tr align=\"center\">\n"
        ."<td width=\"100%\" colspan=\"3\">\n";
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
    echo "<table bgcolor=\"#3B96C2\" border=\"0\" cellpadding=\"1\" cellspacing=\"0\" width=\"420\">\n"
    ."<tr>\n"
    ."<td>\n"
    ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"#000000\" width=\"100%\">\n"
	."<tr>\n"
    ."<td>\n"
	."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"#056B9C\" width=\"100%\">\n"
	."<tr>\n"
	."<td>\n\n"
	."<!----- Story Box Title ----->\n"
	."<table background=\"themes/sb_ulk/images/cellpic3.jpg\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\" bgcolor=\"#056B9C\" width=\"100%\">\n"
	."<tr>\n"
	."<td align=\"center\">\n"
	."<font class=\"option\" color=\"#363636\"><b>$title</b></font>\n"
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
	."<table border=\"0\" cellpadding=\"3\" cellspacing=\"0\" width=\"100%\" bgcolor=\"#056B9C\">\n"
	."<tr>\n"
	."<td>\n"
	."<font color=\"#999999\"><b><a href=\"modules.php?name=Search&query=&amp;topic=$topic\"><img src=\"$tipath$topicimage\" border=\"0\" Alt=\"$topictext\" align=\"right\" hspace=\"10\" vspace=\"10\"></a></B></font>\n";
    FormatStory($thetext, $notes, $aid, $informant);
    echo "</td></tr></table></td></tr></table>\n"
	."<table border=\"0\" cellpadding=\"1\" cellspacing=\"0\" width=\"100%\" bgcolor=\"#056B9C\">\n"
	."<tr>\n"
	."<td>\n"
	."<table background=\"themes/sb_ulk/images/cellpic3.jpg\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\" width=\"100%\" bgcolor=\"#056B9C\">\n"
	."<tr>\n"
	."<td align=\"center\">\n"
	."<br>\n"
	."<font size=\"1\">"._POSTEDBY." ";
    formatAidHeader($aid);
    echo " "._ON." $time $timezone  - x$counter<br></font>\n"
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
    echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"#056B9C\" width=\"100%\"><tr><td>\n"
        ."<table border=\"0\" cellpadding=\"1\" cellspacing=\"0\" bgcolor=\"#056B9C\" width=\"100%\"><tr><td>\n"
        ."<table border=\"0\" cellpadding=\"3\" cellspacing=\"0\" bgcolor=\"#3B96C2\" width=\"100%\"><tr><td align=\"left\">\n"
        ."<font class=\"option\" color=\"#363636\"><b>$title</b></font><br>\n"
        ."<font class=\"content\">"._POSTEDON." $datetime "._BY." ";
    formatAidHeader($aid);
    if (is_admin($admin)) {
        echo "<br>[ <a href=\"admin.php?op=EditStory&amp;sid=$sid\">"._EDIT."</a> | <a href=\"admin.php?op=RemoveStory&amp;sid=$sid\">"._DELETE."</a> ]\n";
    }
    echo "</td></tr></table></td></tr></table><br>";
    echo "<a href=\"modules.php?name=Search&query=&amp;topic=$topic\"><img src=\"$tipath$topicimage\" border=\"0\" Alt=\"$topictext\" align=\"right\" hspace=\"10\" vspace=\"10\"></a>\n";
    FormatStory($thetext, $notes="", $aid, $informant);
    echo "</td></tr></table><br>\n\n\n";
}

/************************************************************/
/* Function themesidebox()                                  */
/*                                                          */
/* Control look of your blocks. Just simple.                */
/************************************************************/

function themesidebox($title, $content) {
    echo "<!----- Side Box ----->\n"
    ."<table bgcolor=\"#374646\" border=\"0\" cellpadding=\"2\" cellspacing=\"1\" width=\"150\">\n"
	."<tr>\n"
	."<td background=\"themes/sb_ulk/images/cellpic3.jpg\" bgcolor=\"#738278\" align=\"left\">\n"
	."<font class=\"content\" color=\"#363636\">$title</font>\n"
	."</td>\n"
	."</tr>\n"
	."<tr valign=\"top\">\n"
	."<td bgcolor=\"#056B9C\">\n"
	."<font class=\"blocks\">$content\n"
	."</td>\n"
	."</tr>\n"
	."</table>\n"
	."<br>\n\n\n";
}

?>