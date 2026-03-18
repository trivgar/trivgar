<BODY BACKGROUND="themes/Gold/images/fonds/fond.gif">
<?php

/************************************************************/
/* Theme Colors Definition                                  */
/*                                                          */
/* Control the header for your site. You need to define the */
/* BODY tag and in some part of the code call the blocks    */
/* function for left side with: block(left);                */
/************************************************************/

$thename = "Gold";
$bgcolor1 = "";
$bgcolor2 = "#F7FDA6";
$bgcolor3 = "";
$bgcolor4 = "#F7FDA6";
$textcolor1 = "#000000";
$textcolor2 = "#000000";

function OpenTable() {
    echo "<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\"><tr>
    <td width=\"15\" height=\"15\"><img src=\"themes/Gold/images/up-left2.gif\" alt=\"\" border=\"0\"></td>
    <td background=\"themes/Gold/images/up2.gif\" align=\"center\" width=\"100%\" height=\"15\">&nbsp;</td>
    <td><img src=\"themes/Gold/images/up-right2.gif\" width=\"15\" height=\"15\" alt=\"\" border=\"0\"></td></tr>
    <tr>
    <td background=\"themes/Gold/images/left2.gif\" width=\"15\">&nbsp;</td>
    <td bgcolor=\"#F7FDA6\" width=\"100%\">";
}

function OpenTable2() {

    echo "<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"><tr>
    <td width=\"15\" height=\"15\"><img src=\"themes/Gold/images/up-left2.gif\" alt=\"\" border=\"0\"></td>
    <td background=\"themes/Gold/images/up2.gif\" align=\"center\" height=\"15\">&nbsp;</td>
    <td><img src=\"themes/Gold/images/up-right2.gif\" width=\"15\" height=\"15\" alt=\"\" border=\"0\"></td></tr>
    <tr>
    <td background=\"themes/Gold/images/left2.gif\" width=\"15\">&nbsp;</td>
    <td bgcolor=\"#F7FDA6\" >";
}

function CloseTable() {
    echo "</td>
    <td background=\"themes/Gold/images/right2.gif\">&nbsp;</td></tr>
    <tr>
    <td width=\"15\" height=\"15\"><img src=\"themes/Gold/images/down-left2.gif\" alt=\"\" border=\"0\"></td>
    <td background=\"themes/Gold/images/down2.gif\" align=\"center\" height=\"15\">&nbsp;</td>
    <td><img src=\"themes/Gold/images/down-right2.gif\" width=\"15\" height=\"15\" alt=\"\" border=\"0\"></td></tr>
    </td></tr></table>
    <br>";
}

function CloseTable2() {
    echo "</td>
    <td background=\"themes/Gold/images/right2.gif\">&nbsp;</td></tr>
    <tr>
    <td width=\"15\" height=\"15\"><img src=\"themes/Gold/images/down-left2.gif\" alt=\"\" border=\"0\"></td>
    <td background=\"themes/Gold/images/down2.gif\" align=\"center\" height=\"15\">&nbsp;</td>
    <td><img src=\"themes/Gold/images/down-right2.gif\" width=\"15\" height=\"15\" alt=\"\" border=\"0\"></td></tr>
    </td></tr></table>
    <br>";
}

function FormatStory($thetext, $notes, $aid, $informant) {
    global $anonymous;
    if ($notes != "") {
	$notes = "<b>"._NOTE."</b> <i>$notes</i>\n";
    } else {
	$notes = "";
    }
    if ("$aid" == "$informant") {
	echo "<font class=\"content\" color=\"#505050\">$thetext<br>$notes</font>\n";
    } else {
	if($informant != "") {
	    $boxstuff = "<a href=\"user.php?op=userinfo&amp;uname=$informant\">$informant</a> ";
	} else {
	    $boxstuff = "$anonymous ";
	}
	$boxstuff .= "".translate("writes")." <i>\"$thetext\"</i> $notes\n";
	echo "<font class=\"content\" color=\"#505050\">$boxstuff</font>\n";
    }
}

/************************************************************/
/* Function themeheader()                                   */
/*                                                          */
/* Control the header for your site. You need to define the */
/* BODY tag and in some part of the code call the blocks    */
/* function for left side with: block(left);                */
/************************************************************/

function themeheader() {
    global $user, $banners, $sitename, $slogan, $cookie, $prefix, $dbi;
    cookiedecode($user);
    $username = $cookie[1];
    if ($username == "") {
        $username = "Anonymous";
    }
    echo "<body bgcolor=\"#FFFFFF\" text=\"#000000\" link=\"#363636\" vlink=\"#363636\" alink=\"#d5ae83\">\n"
	."<br>\n";
    if ($banners == 1) {
        echo "<table align=\"center\" border=\"0\"><tr><td>";
	include("banners.php");
        echo "<br></td><td>";
	echo "<td>&nbsp;</td><td>";
	include("banners2.php");
	echo "</td></tr></table>";
    }
    OpenTable();
    echo "<table border=\"0\"><tr><td rowspan=\"2\">"
	."<a href=\"index.php\"><img src=\"themes/Gold/images/logo.gif\" border=\"2\" alt=\""._WELCOMETO." $sitename\" align=\"left\"></a></td>"
	."<td align=right width=100%>"
        ."<form action=\"modules.php?name=Search\" method=\"post\">"
        ."<font class=\"content\" color=\"#000000\"><b>"._SEARCH." </b>"
        ."<input type=\"text\" name=\"query\" size=\"14\"></font></form>"
        ."</td></tr><tr>"
        ."<td align=\"right\" valign=\"bottom\" width=\"100%\">"
        ."<font class=\"content\"><b>"
	."<A href=\"index.php\">Home</a>&nbsp;&middot;&nbsp;<A href=\"modules.php?name=Topics\">Topics</a>&nbsp;&middot;&nbsp"
        ."<A href=\"modules.php?name=Downloads\">Downloads</a>&nbsp;&middot;&nbsp;<A href=\"modules.php?name=Your_Account\">Votre compte</a>"
        ."&nbsp;&middot;&nbsp;<A href=\"modules.php?name=Forum\">Forums</a>&nbsp;&middot;&nbsp;<A href=\"modules.php?name=Top\">Top 10</a>&nbsp;&middot;&nbsp;<A href=\"modules.php?name=Shop\">Espace rencontres</a>"
        ."</b></font></td></tr></table>\n";
    CloseTable();
    echo "<table cellpadding=\"0\" cellspacing=\"0\" width=\"99%\" border=\"0\" align=\"center\" >\n"
	."<tr><td valign=\"top\">\n";
    blocks(left);
    echo "</td><td><img src=\"themes/Gold/images/pixel.gif\" width=\"15\" height=\"1\" border=\"0\" alt=\"\"></td><td width=\"100%\" valign=top>\n";
}

/************************************************************/
/* Function themefooter()                                   */
/*                                                          */
/* Control the footer for your site. You don't need to      */
/* close BODY and HTML tags at the end. In some part call   */
/* the function for right blocks with: block(right);        */
/* Also, $index variable need to be global and is used to   */
/* determine if the page your're viewing is the Homepage or */
/* and internal one.                                        */
/************************************************************/

function themefooter() {
    global $index;
    if ($index == 1) {
	echo "</td><td><img src=\"themes/Gold/images/pixel.gif\" width=\"15\" height=\"1\" border=\"0\" alt=\"\"></td><td valign=\"top\" width=\"150\">\n";
	blocks(right);
    }
    echo "</td></tr></table>\n";
    echo "<br>";
    OpenTable();
    footmsg();
    CloseTable();
}

/************************************************************/
/* Function themeheader()                                   */
/*                                                          */
/* Control the header for your site. You need to define the */
/* BODY tag and in some part of the code call the blocks    */
/* function for left side with: block(left);                */
/************************************************************/

function themeindex ($aid, $informant, $time, $title, $counter, $topic, $thetext, $notes, $morelink, $topicname, $topicimage, $topictext) {
    global $anonymous;
    echo "<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\"><tr>
    <td width=\"15\" height=\"15\"><img src=\"themes/Gold/images/up-left2.gif\" alt=\"\" border=\"0\"></td>
    <td background=\"themes/Gold/images/up2.gif\" align=\"center\" width=\"100%\" height=\"15\">&nbsp;</td>
    <td><img src=\"themes/Gold/images/up-right2.gif\" width=\"15\" height=\"15\" alt=\"\" border=\"0\"></td></tr>
    <tr>
    <td background=\"themes/Gold/images/left2.gif\" width=\"15\">&nbsp;</td>
    <td bgcolor=\"ffffff\" width=\"100%\">
    <font color=\"#999999\"><b><a href=\"search.php?query=&amp;topic=$topic\"><img src=\"images/topics/$topicimage\" border=\"0\" Alt=\"$topictext\" align=\"right\" hspace=\"10\" vspace=\"10\"></a></B></font>
    <b>$title</b><br><br>";
    FormatStory($thetext, $notes, $aid, $informant);
    echo "</td>
    <td background=\"themes/Gold/images/right2.gif\">&nbsp;</td></tr>
    <tr>
    <td width=\"15\" height=\"15\"><img src=\"themes/Gold/images/middle-left.gif\" alt=\"\" border=\"0\"></td>
    <td background=\"themes/Gold/images/middle.gif\" align=\"center\" height=\"15\">&nbsp;</td>
    <td><img src=\"themes/Gold/images/middle-right.gif\" width=\"15\" height=\"15\" alt=\"\" border=\"0\"></td></tr>
    <tr>
    <td background=\"themes/Gold/images/left3.gif\" width=\"15\">&nbsp;</td>
    <td bgcolor=\"ffffff\" align=center>
    <font color=\"#999999\" size=\"1\">"._POSTEDBY." ";
    formatAidHeader($aid);
    echo ""._ON." $time $timezone ($counter "._READS.")<br></font>
	<font class=\"content\">$morelink</font></td>
    <td background=\"themes/Gold/images/right3.gif\" width=\"15\">&nbsp;</td></tr>
    <tr>
    <td width=\"15\" height=\"11\" valign=top><img src=\"themes/Gold/images/down-left3.gif\" alt=\"\" border=\"0\"></td>
    <td background=\"themes/Gold/images/down3.gif\" align=\"center\" height=\"11\" width=\"15\">&nbsp;</td>
    <td width=\"15\" height=\"11\" valign=top><img src=\"themes/Gold/images/down-right3.gif\" alt=\"\" border=\"0\">
    </td></tr></table>
    <br>";
}

/************************************************************/
/* Function themeheader()                                   */
/*                                                          */
/* Control the header for your site. You need to define the */
/* BODY tag and in some part of the code call the blocks    */
/* function for left side with: block(left);                */
/************************************************************/

function themearticle ($aid, $informant, $datetime, $title, $thetext, $topic, $topicname, $topicimage, $topictext) {
    global $admin, $sid;
    Opentable();
    echo "<font class=\"option\" color=\"#363636\"><b>$title</b></font><br>\n"
        ."<font class=\"content\">".translate('Posted on')." $datetime by ";
    formatAidHeader($aid);
    if (is_admin($admin)) {
	echo "<br>[ <a href=\"admin.php?op=EditStory&amp;sid=$sid\">"._EDIT."</a> | <a href=\"admin.php?op=RemoveStory&amp;sid=$sid\">"._DELETE."</a> ]\n";
    }
    echo "<br><br>";
    echo "<a href=\"search.php?query=&amp;topic=$topic\"><img src=\"images/topics/$topicimage\" border=\"0\" Alt=\"$topictext\" align=\"right\" hspace=\"10\" vspace=\"10\"></a>\n";
    FormatStory($thetext, $notes="", $aid, $informant);
    echo "<br>\n\n\n";
    CloseTable();
}

/************************************************************/
/* Function themeheader()                                   */
/*                                                          */
/* Control the header for your site. You need to define the */
/* BODY tag and in some part of the code call the blocks    */
/* function for left side with: block(left);                */
/************************************************************/

function themesidebox($title, $content) {
    echo "<table background=themes/Gold/images/fonds/box.jpg border=0 cellspacing=0 cellpadding=0 width=150><tr>"
	."<td width=17 height=17><img src=themes/Gold/images/up-left.gif alt=\"\" border=0></td>"
        ."<td background=themes/Gold/images/up.gif align=center width=100% height=17>&nbsp;</td>"
        ."<td><img src=themes/Gold/images/up-right.gif width=17 height=17 alt=\"\" border=0></td></tr>"
        ."<tr>"
        ."<td background=themes/Gold/images/left.jpg width=17>&nbsp;</td>"
        ."<td><center><font class=content><b>$title</b></font></center><br>$content</td>"
        ."<td background=themes/Gold/images/right.jpg>&nbsp;</td></tr>"
        ."<tr>"
        ."<td width=17 height=17><img src=themes/Gold/images/down-left.gif alt=\"\" border=0></td>"
        ."<td background=themes/Gold/images/down.gif align=center width=100% height=17>&nbsp;</td>"
        ."<td><img src=themes/Gold/images/down-right.gif width=17 height=17 alt=\"\" border=0></td></tr>"
        ."</td></tr></table>"
        ."<br>";
}

?>
</BODY>
