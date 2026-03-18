<?php

$thename 	= "Sniper";
$bgcolor1 	= "#000000";
$bgcolor2 	= "charcol";
$bgcolor3 	= "#FFFFff";
$bgcolor4 	= "#CCCCCC";
$textcolor1 	= "#FFFFFF";
$textcolor2 	= "#FFFFFF";

function OpenTable() {
    global $bgcolor1, $bgcolor2;
    echo "<table width=\"575\" border=\"1\" cellspacing=\"0\" cellpadding=\"0\" bgcolor=\"$bgcolor2\"><tr><td>\n";
    echo "<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"2\" bgcolor=\"$bgcolor1\"><tr><td>\n";
}

function OpenTable2() {
    global $bgcolor1, $bgcolor2;
    echo "<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" bgcolor=\"$bgcolor2\" align=\"center\"><tr><td>\n";
    echo "<table border=\"1\" cellspacing=\"0\" cellpadding=\"2\" bgcolor=\"$bgcolor1\"><tr><td>\n";
}

function CloseTable() {
    echo "</td></tr></table></td></tr></table>\n";
}

function CloseTable2() {
    echo "</td></tr></table></td></tr></table>\n";
}

function FormatStory($thetext, $notes, $aid, $informant) {
    global $anonymous;
    if ($notes != "") {
	$notes = "<b>"._NOTE."</b> <i>$notes</i>\n";
    } else {
	$notes = "";
    }
    if ("$aid" == "$informant") {
	echo "<font class=\"content\">$thetext<br>$notes</font>\n";
    } else {
	if($informant != "") {
	    $boxstuff = "<a href=\"modules.php?name=Your_Account?op=userinfo&amp;uname=$informant\">$informant</a> ";
	} else {
	    $boxstuff = "$anonymous ";
	}
	$boxstuff .= ""._WRITES." <i>\"$thetext\"</i> $notes\n";
	echo "<font class=\"content\">$boxstuff</font>\n";
    }
}

function themeheader() {
    global $user, $banners, $sitename, $slogan, $cookie, $prefix, $dbi;
    cookiedecode($user);
    $username = $cookie[1];
    if ($username == "") {
        $username = "Anonymous";
    }
    if ($username == "Anonymous") {
	$theuser = "&nbsp;&nbsp;<a href=\"modules.php?name=Your_Account&op=new_user\">Create an account";
    } else {
	$theuser = "&nbsp;&nbsp;Welcome $username!";
    }
    echo "<body bgcolor=\"#000000\" text=\"#CCCCCC\" topmargin=0 leftmargin=0 MARGINHEIGHT=0 MARGINWIDTH=0 link=\"#CCCCCC\" vlink=\"#CCCCCC\" alink=\"#CCCCCC\">"
        ."<table border=\"0 cellpadding=\"0\" cellspacing=\"0\" width=\"770\">"
        ."<tr valign=\"bottom\"><td colspan=3>"
        ."<table background=\"/themes/Sniper/images/empty_top.gif\" border=\"0\" cellspacing=\"0\" cellpadding=\"2\" width=\"770\" bgcolor=\"000000\">"
        ."<tr><td align=right height=\"121\" valign=\"bottom\" background=\"/themes/Sniper/images/empty_top.gif\">"
        ."<div class=\"sitetitle\">Welcome to the Shadow Web</div>"
        ."<form action=\"modules.php?name=Search\" method=\"post\">"
        ."<font class=\"content\">"._SEARCH.""
        ."<input type=\"text\" name=\"query\">"
        ."</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</form>";
    if ($banners) {
//	echo "start banner<br>";
	include("banners.php");
//	echo "end banner<br>";
    }
    echo "</td></tr></table></td></tr>"
//         ."<tr><td valign=\"top\"><font class=content>$slogan</font></td></tr>"
         ."<tr><td height=\"0\" valign=\"top\" width=\"100%\">"
         ."<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">"
         ."<tr align=center><td bgcolor=\"#3D3C39\" valign=\"top\" background=\"themes/Sniper/images/vlinel.gif\" width=\"150\">";
    blocks(left);
    echo "</td></td><td bgcolor=\"#3D3C39\" width=\"601\" valign=\"top\">"
        ."<div style=\"float: left\"><font class=content>&nbsp;$theuser</font></div>"
        ."<div style=\"float: right\"><font class=content>$slogan</font></div>";
}

function themefooter() {
    global $index;
	echo "<p><div align=\"center\"><font face=\"MS Sans Serif\" size=\"2\">Copyright © 2002. All rights reserved.<br>"
         ."Original Design by <a href=\"http://www.lara-k.f2s.com\">Lara-K</a><br>"
         ."Ported to nuke by: <a href=\"mailto:pelkeyc@yahoo.com\">HotRod</a>.</font></div>"
         ."</td><td align=left width=\"19\" background=\"/themes/Sniper/images/vliner.gif\">&nbsp;</td>";
    if ($index == 1) {
        echo "<td valign=\"top\" bgcolor=\"#000000\">";
        blocks(right);
        echo "</td>";
    }
    echo "</tr><tr valign=\"top\">"
         ."<td colspan=\"3\"><img src=\"/themes/Sniper/images/bottom.gif\" width=\"770\" height=\"33\"></td>"
         ."</tr></table></td></tr></table>";
    footmsg();
}

function themeindex ($aid, $informant, $time, $title, $counter, $topic, $thetext, $notes, $morelink, $topicname, $topicimage, $topictext) {
    global $tipath, $anonymous;
    echo "<table border=\"0\" width=\"575\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\" bgcolor=\"#000000\"><tr><td>"
        ."<table align=center width=\"100%\" border=\"1\" cellpadding=\"0\" cellspacing=\"0\"><tr><td bgcolor=\"#CC0000\">"

        ."<b>$title</b><br>"
        ."</font></td></tr><tr><td bgcolor=\"#000000\">"
        ."<font class=\"tiny\">"
        .""._POSTEDBY." <b>";
    formatAidHeader($aid);
    echo "<a href=modules.php?name=Search&amp;query=&amp;topic=$topic><img src=$tipath$topicimage border=\"0\" Alt=\"$topictext\" align=\"left\" hspace=\"10\" vspace=\"10\"></a>";
    echo "</b> "._ON." $time $timezone ($counter "._READS.")<br><br>";
    FormatStory($thetext, $notes, $aid, $informant);
    echo "<br><br>"
        ."</td></tr><tr><td bgcolor=\"000000\" align=\"left\">"
        ."<font class=\"content\">$morelink</font>"
        ."</td></tr></table></td></tr></table>"
        ."<br><br>";
}

function themearticle ($aid, $informant, $datetime, $title, $thetext, $topic, $topicname, $topicimage, $topictext) {
    global $admin, $sid, $tipath;
    if ("$aid" == "$informant") {
	echo "<table border=0 width=\"100%\" cellpadding=0 cellspacing=0 align=\"center\" bgcolor=\"#000000\"><tr><td>"
	    ."<table align=\"center\" width=\"100%\" border=1 cellpadding=0 cellspacing=0><tr><td bgcolor=\"#CC0000\">"
	    ."<b>$title</b>"
	    ."</td></tr><tr><td bgcolor=000000>"
	    ."<font class=tiny>"._POSTEDON." $datetime </font>";
    if ($admin) {
		echo "<font class=\"tiny\">&nbsp;&nbsp; $font2 [ <a href=admin.php?op=EditStory&sid=$sid>"._EDIT."</a> | <a href=admin.php?op=RemoveStory&sid=$sid>"._DELETE."</a> ] <font>";
    }
    echo "<a href=\"modules.php?name=Search&amp;query=&amp;topic=$topic\"><img src=\"$tipath$topicimage\" border=\"0\" Alt=\"$topictext\" align=\"left\" hspace=\"10\" vspace=\"10\"></a>"
         ."<br><br>$thetext"
         ."</td></tr></table></td></tr></table><br>";
    } else {

	if($informant != "") $informant = "<a href=\"modules.php?name=Your_Account&amp;op=userinfo&amp;uname=$informant\">$informant</a>";
	else $boxstuff = "$anonymous ";
	$boxstuff .= ""._WRITES." <i>\"$thetext\"</i> $notes";
	echo "
	<table border=0 cellpadding=0 cellspacing=0 align=center bgcolor=\"#000000\" width=\"100%\"><tr><td>
	<table border=0 cellpadding=3 cellspacing=1 width=\"100%\"><tr><td bgcolor=\"#cccccc\">
	<b>$title</b>
	</td></tr><tr><td bgcolor=000000>
	<font class=tiny>"._CONTRIBUTEDBY." $informant "._ON." $datetime</font>";
	if ($admin) {
	    echo "<font class=tiny>&nbsp;&nbsp; $font2 [ <a href=admin.php?op=EditStory&sid=$sid>"._EDIT."</a> | <a href=admin.php?op=RemoveStory&sid=$sid>"._DELETE."</a> ]</font>";
	}
	echo "</td></tr><tr><td bgcolor=\"#000000\">$thetext</td></tr></table></td></tr></table><br>";
    }
}

function themesidebox($title, $content) {
    echo "<table border=\"1\" cellspacing=\"0\" cellpadding=\"0\" width=\"150\" bgcolor=\"#000000\"><tr><td>"
        ."<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"3\"><tr height=\"15\"><td height=\"15\" background=\"themes/Sniper/images/empty_button03.gif\">"
        ."<font class=\"content\"><div align=right>$title&nbsp;</div></font></td></tr><tr><td><font class=\"content\">"
        ."<font class=\"content\">$content</font>"
        ."</font></td></tr></table></td></tr></table><br>";
}

?>
