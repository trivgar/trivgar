<?php

/************************************************************/
/* Theme Name: sb_lightblue (v1.0)                          */
/* Theme Developer: ffx69 (http://www.shareware-base.de)    */
/* Last Updated: 25/08/2002                                 */
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

$bgcolor1 = "#99CCFF";
$bgcolor2 = "#99CCFF";
$bgcolor3 = "#99CCFF";
$bgcolor4 = "#99CCFF";
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
    echo "<body bgcolor=\"#9999FF\" text=\"#000000\" link=\"#363636\" vlink=\"#363636\" alink=\"#d5ae83\">\n"
    	."<br>\n"
	."<!----- Logo Area ----->\n"
	."<table cellpadding=\"2\" cellspacing=\"0\" width=\"752\" border=\"0\" align=\"center\" bgcolor=\"#99CCFF\">\n"
	."<tr>\n"
	."<TD COLSPAN=6 BACKGROUND=\"themes/sb_lightblue/images/logo.jpg\" HEIGHT=103>\n"
	."<P ALIGN=TOP><img src=\"themes/sb_lightblue/images/theme.jpg\" VSPACE=0 HSPACE=0 ALIGN=\"TOP\" BORDER=0 USEMAP=\"#map0\"><MAP NAME=\"map0\"><AREA SHAPE=POLY ALT=\"Shareware-base.de\" COORDS=\"4,2,178,2,177,15,4,14,3,12\" HREF=\"http://www.shareware-base.de\"></MAP><br>\n";
    if ($banners) {
	include("banners.php");
    }
	echo "</p></td>\n"

	."<!----- \n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n Theme by (http://www.shareware-base.de) do not remove this line ----->\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n"
	."</tr>\n"
	."<TR><TD COLSPAN=2 BGCOLOR=\"#99CCFF\"><P><form action=\"modules.php?name=Your_Account\" method=\"post\"><font class=\"formtexts\">Nick:</font><input type=\"text\" name=\"uname\" size=\"7\" maxlength=\"25\" class=\"formtexts\"><font class=\"formtexts\">Pass:</font><input type=\"password\" name=\"pass\" size=\"7\" maxlength=\"20\" class=\"formtexts\"><input type=\"hidden\" name=\"op\" value=\"login\"><input type=\"submit\" value=\"login\" class=\"formtexts\">&nbsp;<a href=\"modules.php?name=Your_Account&op=new_user\"><font class=\"formtexts\">Join</font></a></P></TD>"
	."<TD COLSPAN=2 BGCOLOR=\"#99CCFF\"><P><form action=\"modules.php?name=Search\" method=\"post\"><font class=\"formtexts\" color=\"#000000\"><bgcolor=\"#96A096\" align=\"right\" width=\"150\"><font class=\"formtexts\">Search:</font><input type=\"text\" name=\"query\" size=\"7\"class=\"formtexts\"></font><align=\"left\" valign=\"bottom\">&nbsp;&nbsp;&nbsp;<input type=\"image\" name=\"search\" src=\"themes/sb_lightblue/images/search-button.gif\" width=\"52\" height=\"18\" border=\"0\"></form></P></TD>"
	."<TD COLSPAN=2 BGCOLOR=\"#99CCFF\"><P><form action=\"modules.php?name=Search\" method=\"post\"><bgcolor=\"#96A096\" align=\"right\"><font class=\"formtexts\">\n";
    $toplist = mysql_query("select topicid, topictext from $prefix"._topics." order by topictext");
    echo "<select name=\"topic\"onChange='submit()'>\n"
	."<option value=\"\">".translate("All Topics")."</option>\n";
    while(list($topicid, $topics) = mysql_fetch_row($toplist)) {
    if ($topicid==$topic) { $sel = "selected "; }
	echo "<option $sel value=\"$topicid\">$topics</option>\n";
	$sel = ""; 
    }
	echo "</P></TD>"
	."</tr><tr>"
	."<TD WIDTH=126 BGCOLOR=\"#99CCFF\" class=\"cellbox\" align=\"center\" style=\"cursor:hand\" onMouseOver=\"this.style.background='#006699'\" onMouseOut=\"this.style.background='#99CCFF'\" onClick=\"window.location.href='index.php'\" HEIGHT=19><P ALIGN=CENTER><B>Home</B></P></TD></a>"
	."<TD WIDTH=126 BGCOLOR=\"#99CCFF\" class=\"cellbox\" align=\"center\" style=\"cursor:hand\" onMouseOver=\"this.style.background='#006699'\" onMouseOut=\"this.style.background='#99CCFF'\" onClick=\"window.location.href='modules.php?name=Your_Account'\" HEIGHT=19><P ALIGN=CENTER><B>Account</B></P></TD>"
	."<TD WIDTH=124 BGCOLOR=\"#99CCFF\" class=\"cellbox\" align=\"center\" style=\"cursor:hand\" onMouseOver=\"this.style.background='#006699'\" onMouseOut=\"this.style.background='#99CCFF'\" onClick=\"window.location.href='modules.php?name=Downloads'\" HEIGHT=19><P ALIGN=CENTER><B>Downloads</B></P></TD>"
	."<TD WIDTH=125 BGCOLOR=\"#99CCFF\" class=\"cellbox\" align=\"center\" style=\"cursor:hand\" onMouseOver=\"this.style.background='#006699'\" onMouseOut=\"this.style.background='#99CCFF'\" onClick=\"window.location.href='modules.php?name=Web_Links'\" HEIGHT=19><P ALIGN=CENTER><B>Web Links</B></P></TD>"
	."<TD WIDTH=126 BGCOLOR=\"#99CCFF\" class=\"cellbox\" align=\"center\" style=\"cursor:hand\" onMouseOver=\"this.style.background='#006699'\" onMouseOut=\"this.style.background='#99CCFF'\" onClick=\"window.location.href='modules.php?name=Forums'\" HEIGHT=19><P ALIGN=CENTER><B>Forums</B></P></TD>"
	."<TD WIDTH=126 BGCOLOR=\"#99CCFF\" class=\"cellbox\" align=\"center\" style=\"cursor:hand\" onMouseOver=\"this.style.background='#006699'\" onMouseOut=\"this.style.background='#99CCFF'\" onClick=\"window.location.href='modules.php?name=Feedback'\" HEIGHT=19><P ALIGN=CENTER><B>Contact</B></P></TD>"
	."</tr><tr>"
	."<TD COLSPAN=6><P></P></TD></TR></TABLE>"
	."<!----- Begin of Main Content Table ----->\n"
	."<table width=\"750\" cellpadding=\"0\" cellspacing=\"1\" border=\"0\" bgcolor=\"#99CCFF\" align=\"center\">\n"
	."<tr valign=\"top\">\n"
	."<td valign=\"top\">\n"
	."<table width=\"750\" cellpadding=\"3\" cellspacing=\"0\" border=\"0\" bgcolor=\"#99CCFF\" align=\"center\">\n"
	."<tr valign=\"top\">\n"
	."<td width=\"160\" valign=\"top\">\n";
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
	echo "</td><td valign=\"top\" width=\"160\">\n";
	blocks(right);
    }
    echo "</td>\n"
	    ."</tr>\n"
	    ."</table>\n"
	    ."</td>\n"
	    ."</tr>\n"
	    ."</table>\n"
        ."<table width=\"750\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" bgcolor=\"#99CCFF\" align=\"center\">\n"
        ."<tr>\n"
        ."<td>\n"
        ."<table BACKGROUND=\"themes/sb_lightblue/images/footer.jpg\" width=\"750\" cellpadding=\"3\" cellspacing=\"0\" border=\"0\" bgcolor=\"#99CCFF\" align=\"center\">\n"
        ."<tr align=\"center\">\n"
        ."<td width=\"100%\" colspan=\"3\">\n";
    footmsg();
    echo "</td>\n"
        ."</tr>\n"
        ."</table>\n"
        ."</td>\n"
        ."</tr>\n"
        ."</table><center>Theme by <a href=\"http://www.shareware-base.de\">Shareware-base.de</a>\n"; // Do not remove this line please!
}

/************************************************************/
/* Function themeindex()                                    */
/*                                                          */
/* This function format the stories on the Homepage         */
/************************************************************/

function themeindex ($aid, $informant, $time, $title, $counter, $topic, $thetext, $notes, $morelink, $topicname, $topicimage, $topictext) {
    global $anonymous, $tipath;
    echo "<table bgcolor=\"#99CCFF\" border=\"0\" cellpadding=\"1\" cellspacing=\"0\" width=\"390\">\n"
    ."<tr>\n"
    ."<td>\n"
    ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"#99CCFF\" width=\"100%\">\n"
	."<tr>\n"
    ."<td>\n"
	."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"#99CCFF\" width=\"100%\">\n"
	."<tr>\n"
	."<td>\n\n"
	."<!----- Story Box Title ----->\n"
	."<table border=\"0\" cellpadding=\"3\" cellspacing=\"0\" bgcolor=\"#99CCFF\" width=\"100%\">\n"
	."<tr>\n"
	."<td BACKGROUND=\"themes/sb_lightblue/images/o-b-lm-mitte.gif\">\n"
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
	."<table background=\"themes/sb_lightblue/images/fuell.jpg\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\" width=\"100%\" bgcolor=\"#99CCFF\">\n"
	."<tr>\n"
	."<td><font class=\"foot\">"._POSTEDBY." ";
    formatAidHeader($aid);
	echo "<br><br><font color=\"#999999\"><b><a href=\"modules.php?name=Search&query=&amp;topic=$topic\"><img src=\"$tipath$topicimage\" border=\"0\" Alt=\"$topictext\" align=\"right\" hspace=\"10\" vspace=\"10\"></a></B></font>\n";
    FormatStory($thetext, $notes, $aid, $informant);
    echo "</td></tr></table></td></tr></table>\n"
	."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" bgcolor=\"#99CCFF\">\n"
	."<tr>\n"
	."<td background=\"themes/sb_lightblue/images/fuell.jpg\"><hr width=200 color=\"#003366\">\n"
	."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" bgcolor=\"#99CCFF\">\n"
	."<tr>\n"
	."<td BACKGROUND=\"themes/sb_lightblue/images/index-unten.jpg\" align=\"center\" height=20>\n"
	."\n"
	."<font class=\"foot\">"
   	." "._ON." $time $timezone - $counter<br></font>\n"
	."<font class=\"foot\">$morelink</font>\n"
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
    echo "<table BACKGROUND=\"themes/sb_lightblue/images/fuell.jpg\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"#99CCFF\" width=\"100%\"><tr><td>\n"
        ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"#99CCFF\" width=\"100%\"><tr><td>\n"
        ."<table BACKGROUND=\"themes/sb_lightblue/images/more-head.jpg\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\" bgcolor=\"#99CCFF\" width=\"100%\"><tr><td align=\"left\">\n"
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
    ."<table bgcolor=\"#99CCFF\" border=\"0\" cellpadding=\"7\" cellspacing=\"0\" width=\"160\">\n"
	."<TR>
        <TD WIDTH=160 BACKGROUND=\"themes/sb_lightblue/images/bl-oben.jpg\" HEIGHT=31>
            <P align=center><B>$title</B></P>
        </TD>
    </TR>
    <TR>
        <TD WIDTH=160 BACKGROUND=\"themes/sb_lightblue/images/bl-mitte.gif\">
            <P>$content</P>
        </TD>
    </TR>
    <TR>
        <TD WIDTH=160 BACKGROUND=\"themes/sb_lightblue/images/bl-unten.jpg\" HEIGHT=20>
            <P ALIGN=CENTER></P>
        </TD>

    </TR>
</TABLE><br>\n\n\n";
}

?>