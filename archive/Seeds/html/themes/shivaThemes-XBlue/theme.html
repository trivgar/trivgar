<?php

$thename 	= "shivaThemes-XBlue";
$bgcolor1 	= "#FFFFFF";
$bgcolor2 	= "#6699cc";
$bgcolor3 	= "#FFFFFF";
$bgcolor4 	= "#6699cc";
$bgcolor5 	= "shivaThemes-XBlue/images/bar.gif";
$textcolor1 	= "#000000";
$textcolor2 	= "#FFFFFF";

function OpenTable() {
    global $bgcolor1, $bgcolor5;
    echo "<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" bgcolor=\"000000\"><tr><td>\n";
    echo "<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"8\" bgcolor=\"$bgcolor1\"><tr><td>\n";
}

function OpenTable2() {
    global $bgcolor1, $bgcolor2;
    echo "<table border=\"0\" cellspacing=\"1\" cellpadding=\"0\" bgcolor=\"000000\" align=\"center\"><tr><td>\n";
    echo "<table border=\"0\" cellspacing=\"1\" cellpadding=\"8\" bgcolor=\"$bgcolor1\"><tr><td>\n";
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
	    $boxstuff = "<a href=\"user.php?op=userinfo&amp;uname=$informant\">$informant</a> ";
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
    global $slogan;
    echo "<body bgcolor=\"FFFFFF\" text=\"#000000\" link=\"000000\" vlink=\"000000\" leftmargin=\"0\" topmargin=\"0\" marginwidth=\"0\" marginheight=\"0\">";
    if ($banners) {
	include("banners.php");

    }
    $topics_list = "<select name=\"topic\" onChange='submit()'>\n";
    $topics_list .= "<option value=\"\">All Topics</option>\n";
    $toplist = sql_query("select topicid, topictext from ".$prefix."_topics order by topictext", $dbi);
    while(list($topicid, $topics) = sql_fetch_row($toplist, $dbi)) {
    if ($topicid==$topic) { $sel = "selected "; }
	$topics_list .= "<option $sel value=\"$topicid\">$topics</option>\n";
	$sel = "";
    }
    if ($username == "Anonymous") {
	$theuser = "&nbsp;&nbsp;<a href=\"user.php?op=new_user\">Create an account";
    } else {
	$theuser = "&nbsp;&nbsp;Welcome $username!";
    }
    $tmpl_file = "themes/shivaThemes-XBlue/header.html";
    $thefile = implode("", file($tmpl_file));
    $thefile = addslashes($thefile);
    $thefile = "\$r_file=\"".$thefile."\";";
    eval($thefile);
    print $r_file;
    echo "<table border=\"0 cellpadding=\"4\" cellspacing=\"0\" width=\"100%\" align=\"center\"><tr><td>"
        ."<table border=\"0\" cellspacing=\"0\" cellpadding=\"2\" width=\"100%\"><tr><td valign=\"top\" width=\"150\">";
    blocks(left);
    echo "<img src=\"images/pix.gif\" border=\"0\" width=\"150\" height=\"1\"></td><td>&nbsp;&nbsp;</td><td width=\"100%\" valign=\"top\">";

}

function themefooter() {
    global $index;
    if ($index == 1) {	
	echo "</td><td><font class=\"pn-title\">&nbsp;&nbsp;</font></td><td valign=\"top\">";
	blocks(right);
	echo "</td>";
    }
    echo "</td></tr></table></td></tr></table>";
    echo "<table border=\"0\" cellpadding=\"1\" cellspacing=\"1\" align=\"center\" bgcolor=\"000000\" width=\"100%\"><tr><td><table border=\"0\" bgcolor=\"CCCCCC\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\" width=\"100%\"><tr><td>";
	$tmpl_file = "themes/shivaThemes-XBlue/footer_menu.html";
	$thefile = implode("", file($tmpl_file));
    $thefile = addslashes($thefile);
    $thefile = "\$r_file=\"".$thefile."\";";
    eval($thefile);
    print $r_file;
    footmsg();
	echo "</td></tr></table></td></tr></table>";
}

function themeindex ($aid, $informant, $time, $title, $counter, $topic, $thetext, $notes, $morelink, $topicname, $topicimage, $topictext) {
    global $tipath, $anonymous;
    echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\" bgcolor=\"000000\" width=\"100%\"><tr><td>"
        ."<table border=\"0\" cellpadding=\"3\" cellspacing=\"1\" width=\"100%\"><tr><td bgcolor=\"000000\" background=\"themes/shivaThemes-XBlue/images/barra.gif\">"
        ."<font class=\"boxtitle\"><b>$title</b></font><br>"
	."</font></td></tr><tr><td bgcolor=\"FFFFFF\">"
        ."<font class=\"tiny\">"
        .""._POSTEDBY." <b>";
    formatAidHeader($aid);
    echo "<a href=\"modules.php?name=Search&amp;query=&amp;topic=$topic\"><img src=$tipath$topicimage border=\"0\" Alt=\"$topictext\" align=\"right\" hspace=\"5\" vspace=\"5\"></a>";
    echo "</b> "._ON." $time $timezone ($counter "._READS.")<br><br>";
    FormatStory($thetext, $notes, $aid, $informant);
    echo "<br><br>"
        ."</td></tr><tr><td bgcolor=\"C5C5C5\" align=\"left\">"
        ."<font class=\"content\">$morelink</font>"
        ."</td></tr></table></td></tr></table>"
	."<br><br>";
}

function themearticle ($aid, $informant, $datetime, $title, $thetext, $topic, $topicname, $topicimage, $topictext) {
    global $admin, $sid, $tipath;
    if ("$aid" == "$informant") {
	echo "<table border=0 cellpadding=0 cellspacing=0 align=center bgcolor=000000 width=100%><tr><td>"
	    ."<table border=0 cellpadding=3 cellspacing=1 width=100%><tr><td bgcolor=000000 background=\"themes/shivaThemes-XBlue/images/barra.gif\">"
	    ."<font color=\"FFFFFF\"><b>$title</b></font>"
	    ."</td></tr><tr><td bgcolor=FFFFFF>"
	    ."<font class=tiny>".translate("Posted on ")." $datetime </font>";
	    if ($admin) {
		echo "<font class=\"tiny\">&nbsp;&nbsp; $font2 [ <a href=admin.php?op=EditStory&sid=$sid>".translate("Edit")."</a> | <a href=admin.php?op=RemoveStory&sid=$sid>".translate("Delete")."</a> ] <font>";
	    }
	    echo "<a href=\"search.php?query=&amp;topic=$topic\"><img src=\"$tipath$topicimage\" border=\"0\" Alt=\"$topictext\" align=\"left\" hspace=\"10\" vspace=\"10\"></a>"
	        ."<br><br>$thetext"
	        ."</td></tr></table></td></tr></table><br>";
    } else {

	if($informant != "") $informant = "<a href=\"user.php?op=userinfo&uname=$informant\">$informant</a>";
	else $boxstuff = "$anonymous ";
	$boxstuff .= "".translate("writes")." <i>\"$thetext\"</i> $notes";
	echo "
	<table border=0 cellpadding=0 cellspacing=0 align=center bgcolor=000000 width=100%><tr><td>
	<table border=0 cellpadding=3 cellspacing=1 width=100%><tr><td bgcolor=000000 background=\"themes/shivaThemes-XBlue/images/barra.gif\">
	<b><font color=\"FFFFFF\">$title</font></b>
	</td></tr><tr><td bgcolor=FFFFFF>
	<font class=tiny>".translate("Contributed by ")." $informant ".translate("on")." $datetime</font>";
	if ($admin) {
	    echo "<font class=tiny>&nbsp;&nbsp; $font2 [ <a href=admin.php?op=EditStory&sid=$sid>".translate("Edit")."</a> | <a href=admin.php?op=RemoveStory&sid=$sid>".translate("Delete")."</a> ]</font>";
	}
	echo "
	</td></tr><tr><td bgcolor=FFFFFF>
	$thetext
	</td></tr></table></td></tr></table><br>";
    }
}

function themesidebox($title, $content) {
    echo "<table border=\"0\" cellspacing=\"0\" cellpadding=\"1\" width=\"152\" bgcolor=\"000000\"><tr><td>"
        ."<table width=\"150\" border=\"0\" cellspacing=\"0\" cellpadding=\"3\"><tr><td bgcolor=\"FFFFFF\" background=\"themes/shivaThemes-XBlue/images/barra.gif\">"
        ."<font class=boxtitle>$title</font></td></tr><tr><td bgcolor=\"FFFFFF\"><font class=\"content\">"
        ."<font class=content>$content</font>"
	."</font></td></tr></table></td></tr></table><br>";
}

?>