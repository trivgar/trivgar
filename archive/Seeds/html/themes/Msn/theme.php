<?php

// THEME NAME: Msn for PHP-Nuke 5.5
// THEME DEVELOPER: Abraham Gausachs
// THEME SITE: ladooscuro.host.sk
// VERSION: 1.0
// BASED ON: Somara-XP


$bgcolor1 = "#C3D6E6";
$bgcolor2 = "#93BEE2";
$bgcolor3 = "#C3D6E6";
$bgcolor4 = "#003366";
$textcolor1 = "#000000";
$textcolor2 = "#000000";

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


function FormatStory($thetext, $notes, $aid, $informant) {
    global $anonymous;
    if ($notes != "") {
	$notes = "<br><br><b>"._NOTE."</b> $notes\n";
    } else {
	$notes = "";
    }
    if ("$aid" == "$informant") {
	echo "<font class=\"content\" color=\"#505050\">$thetext$notes</font>\n";
    } else {
	if($informant != "") {
	    $boxstuff = "<a href=\"modules.php?name=Your_Account&amp;op=userinfo&amp;uname=$informant\"><b>$informant</b></a> ";
	} else {
	    $boxstuff = "$anonymous ";
	}
	$boxstuff .= "".translate("<i>escribió</i>")." \"$thetext\"$notes\n";
	echo "<font class=\"content\" color=\"#505050\">$boxstuff</font>\n";
    }
}

/************************************************************/


function themeheader() {
    global $user, $banners, $sitename, $slogan, $cookie, $prefix;
    cookiedecode($user);
    $username = $cookie[1];
    if ($username == "") {
        $username = "Anonymous";
    }
    echo "<body bgcolor=\"#EFF7FF\" topmargin=\"0\" leftmargin=\"0\" marginheight=\"0\" marginwidth=\"0\">\n\n";
    if ($banners) {
	include("banners.php");
    }
    echo "<table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\" bgcolor=\"#003366\">\n"
	."<tr>\n"
	."<td bgcolor=\"#003366\" align=\"left\" valign=\"top\" width=\"65%\"><a href=\"index.php\"><img src=\"themes/Msn/images/logo.gif\" align=\"left\" alt=\""._WELCOMETO." $sitename\" border=\"0\"></a></td>\n"
	."<form action=\"modules.php?name=Search\" method=\"post\">\n"
	."<td align=\"right\" valign=\"top\">\n"
	."<input class=lupa type=\"image\" src=\"/themes/Msn/images/searchgo.gif\" border=\"0\" align=\"absmiddle\"><font class=\"content\" color=\"#000000\">\n"
	."<input type=\"text\" name=\"query\" size=\"30\"></font>\n"
	."</td></form>\n"
	."</tr></table>\n"
	."<table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\" align=\"center\" bgcolor=\"#F3F4F7\">\n"
	."<tr valign=\"middle\" bgcolor=\"#EAE7D1\">\n"
    ."<td align=\"left\" valign=\"top\" width=\"8\" height=\"22\"><img src=\"themes/Msn/images/topnav-left.gif\"></td>\n"
	."<td width=\"15%\" background=\"themes/Msn/images/topnav-bg.gif\" nowrap><font class=\"titulos\" color=\"#363636\">\n";
    if ($username == "Anonymous") {
	echo "&nbsp;&nbsp;<a href=\"modules.php?name=Your_Account\"><img src=\"themes/Msn/images/abrirsesion.gif\" border=0 ALT=\"LOGIN/REGISTRAR NUEVO!\"></a>\n";
    } else {
	echo "&nbsp;&nbsp;Bienvenido $username! <a href=\"modules.php?name=Your_Account&op=logout\"><img src=\"themes/Msn/images/cerrarsesion.gif\" border=0 ALT=\"LOGOUT!\"></a>";
    }
    echo "</font></td>\n"
	."<td align=\"center\" height=\"20\" width=\"70%\" background=\"themes/Msn/images/topnav-bg.gif\"><font class=\"titulos\">\n"
	."<A href=\"index.php\" class=\"titul\">Inicio</a>\n"
	."&nbsp;</font><font color=white>|</font><font class=\"titulos\">&nbsp;\n"
        ."<A href=\"modules.php?name=Topics\" class=\"titul\">Temas</a>\n"
        ."&nbsp;</font><font color=white>|</font><font class=\"titulos\">&nbsp;\n"
        ."<A href=\"modules.php?name=Downloads\" class=\"titul\">Downloads</a>\n"
        ."&nbsp;</font><font color=white>|</font><font class=\"titulos\">&nbsp;\n"
        ."<A href=\"modules.php?name=Your_Account\" class=\"titul\">Tu cuenta</a>\n"
        ."&nbsp;</font><font color=white>|</font><font class=\"titulos\">&nbsp;\n"
        ."<A href=\"modules.php?name=Submit_News\" class=\"titul\">Enviar noticia</a>\n"
        ."&nbsp;</font><font color=white>|</font><font class=\"titulos\">&nbsp;\n"
        ."<A href=\"modules.php?name=Top\" class=\"titul\">Top 10</a>\n"
        ."</font>\n"
        ."</td>\n"
        ."<td align=\"right\" width=\"200\" background=\"themes/Msn/images/topnav-bg.gif\"><font class=\"titulos\">\n"
        ."<script type=\"text/javascript\">\n\n"
        ."<!--   // Array ofmonth Names\n"
        ."var monthNames = new Array( \"Enero\",\"Febrero\",\"Marzo\",\"Abril\",\"Mayo\",\"Junio\",\"Julio\",\"Agosto\",\"Septiembre\",\"Octubre\",\"Noviembre\",\"Diciembre\");\n"
        ."var now = new Date();\n"
        ."thisYear = now.getYear();\n"
        ."if(thisYear < 1900) {thisYear += 1900}; // corrections if Y2K display problem\n"
        ."document.write(monthNames[now.getMonth()] + \" \" + now.getDate() + \", \" + thisYear);\n"
        ."// -->\n\n"
        ."</script></font>&nbsp;</td>\n"
        ."</tr>\n"
        ."</table>\n"
	."<!----- Begin Main Content Table ----->\n"
	."<table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\"><tr valign=\"top\">\n"
	."<td bgcolor=\"#336699\"><img src=\"themes/Msn/images/pixel.gif\" width=\"10\" height=\"1\" border=\"0\" alt=\"\"></td>\n"
	."<td bgcolor=\"#336699\" width=\"175\" valign=\"top\">\n";
    blocks(left);
    echo "</td><td bgcolor=\"#336699\"><img src=\"themes/Msn/images/pixel.gif\" width=\"15\" height=\"1\" border=\"0\" alt=\"\"></td>\n"
        ."<td><img src=\"themes/Msn/images/pixel.gif\" width=\"15\" height=\"1\" border=\"0\" alt=\"\"></td>\n"
        ."<td width=\"100%\">\n";
}

/************************************************************/


function themefooter() {
    global $index;
    if ($index == 1) {
	echo "</td><td><img src=\"themes/Msn/images/pixel.gif\" width=\"15\" height=\"1\" border=\"0\" alt=\"\"></td><td valign=\"top\" width=\"150\">\n";
	blocks(right);
    }
    echo "</td><td><img src=\"themes/Msn/images/pixel.gif\" width=10 height=10 border=0 alt=\"\">\n"
	."<br><br></td></tr></table>\n"
        ."<table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" bgcolor=\"#336699\" align=\"center\">\n"
        ."<tr align=\"center\">\n"
        ."<td width=\"100%\" colspan=\"3\">\n"
        ."<table width=\"50%\" cellpadding=\"0\" cellspacing=\"0\" bordercolor=\"#336699\" border=\"1\" bgcolor=\"#C3D6E6\" align=\"center\">\n"
        ."<tr align=\"center\">\n"
        ."<td width=\"100%\" colspan=\"3\"><font color=\"#ffffff\">\n";
    footmsg();
    echo "</font></td>\n"
        ."</tr><tr align=\"center\"><td><font color=\"#ffffff\">msn theme v.1.0 by <a href=\"http://www.ladooscuro.host.sk\">ladooscuro</a></td></tr></table></td></tr></table>\n";
}

/************************************************************/


function themeindex ($aid, $informant, $time, $title, $counter, $topic, $thetext, $notes, $morelink, $topicname, $topicimage, $topictext) {
    global $anonymous, $tipath;
    echo "<br><table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n"
    ."<tr>\n"
    ."<td>\n"

	."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n"
	."<tr>\n"
	."<td align=\"left\" valign=\"top\" width=\"26\" height=\"30\"><img src=\"themes/Msn/images/storybox-title-left.gif\"></td>\n"
	."<td align=\"left\" valign=\"middle\" background=\"themes/Msn/images/storybox-title-bg.gif\" width=\"100%\" height=\"30\">\n"
	."<font class=\"option\" color=\"#363636\">&nbsp;&nbsp;<b>$title</b></font>\n"
	."</td>\n"
	."<td align=\"left\" valign=\"top\" width=\"6\" height=\"30\"><img src=\"themes/Msn/images/storybox-title-right.gif\"></td>\n"
	."</tr>\n"
	."</table>\n"

	."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n"
	."<tr>\n"
	."<td>\n"

	."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n"
	."<tr>\n"
	."<td align=\"left\" valign=\"top\" width=\"15\" height=\"46\"><img src=\"themes/Msn/images/storybox-left.gif\"></td>\n"
	."<td align=\"left\" valign=\"middle\" background=\"themes/Msn/images/posted-bg.gif\" width=\"100%\" height=\"46\">\n"
	."<font color=\"#104a7b\" size=\"1\">"._POSTEDBY." ";
    formatAidHeader($aid);
    echo " "._ON." $time $timezone ($counter "._READS.")</font>\n"
	."<font color=\"#104a7b\">$morelink</font>\n"
	."</td>\n"
    ."<td width=\"12\" align=\"left\" valign=\"top\"><img src=\"themes/Msn/images/storybox-right.gif\"></td>\n"
	."</tr>\n"
	."</table>\n"

	."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n"
	."<tr>\n"
	."<td width=\"4\" align=\"left\" valign=\"top\" background=\"themes/Msn/images/sidebox-bar-left.gif\"><img src=\"themes/Msn/images/sidebox-bar-px.gif\"></td>\n"
	."<td>\n"

	."<table border=\"0\" bgcolor=\"#ffffff\" cellpadding=\"3\" cellspacing=\"0\" width=\"100%\">\n"
	."<tr valign=\"top\">\n"
	."<td width=\"800\">\n"
	."<font color=\"#999999\"><b><a href=\"modules.php?name=News&amp;new_topic=$topic\"><img src=\"images/topics/$topicimage\" border=\"0\" Alt=\"$topictext\" align=\"right\" hspace=\"10\" vspace=\"10\"></a></B></font>\n";
    FormatStory($thetext, $notes, $aid, $informant);
    echo "</td></tr></table>\n"
    ."</td>\n"
    ."<td width=\"13\" align=\"left\" valign=\"top\" background=\"themes/Msn/images/storybox-content-right.gif\"><img src=\"themes/Msn/images/storybox-content-right-px.gif\"></td>\n"
    ."</tr></table>\n"

	."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n"
	."<tr valign=\"top\">\n"
	."<td width=\"9\" height=\"29\" align=\"left\" valign=\"top\"><img src=\"themes/Msn/images/storybox-bottom-left.gif\"></td>\n"
	."<td width=\"100%\" height=\"29\" background=\"themes/Msn/images/storybox-bottom-bg.gif\">&nbsp;</td>\n"
	."<td width=\"18\" height=\"29\" align=\"left\" valign=\"top\"><img src=\"themes/Msn/images/storybox-bottom-right.gif\"></td>\n"
    ."</table>\n"

    ."</td></tr></table>\n"

    ."</td></tr></table>\n";
}

/************************************************************/


function themearticle ($aid, $informant, $datetime, $title, $thetext, $topic, $topicname, $topicimage, $topictext) {
    global $admin, $sid, $tipath;
    echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"#ffffff\" width=\"100%\"><tr><td>\n"
        ."<table border=\"0\" cellpadding=\"1\" cellspacing=\"0\" bgcolor=\"#000000\" width=\"100%\"><tr><td>\n"
        ."<table border=\"0\" cellpadding=\"3\" cellspacing=\"0\" bgcolor=\"#003366\" width=\"100%\"><tr><td align=\"left\">\n"
        ."<font class=\"option\" color=\"#363636\"><b>$title</b></font><br>\n"
        ."<font class=\"content\">"._POSTEDON." $datetime "._BY." ";
    formatAidHeader($aid);
    if (is_admin($admin)) {
	echo "<br>[ <a href=\"admin.php?op=EditStory&amp;sid=$sid\">"._EDIT."</a> | <a href=\"admin.php?op=RemoveStory&amp;sid=$sid\">"._DELETE."</a> ]\n";
    }
    echo "</td></tr></table></td></tr></table><br>";
    echo "<a href=\"modules.php?name=News&amp;new_topic=$topic\"><img src=\"images/topics/$topicimage\" border=\"0\" Alt=\"$topictext\" align=\"right\" hspace=\"10\" vspace=\"10\"></a>\n";
    FormatStory($thetext, $notes="", $aid, $informant);
    echo "</td></tr></table><br>\n\n\n";
}

/************************************************************/


function themesidebox($title, $content) {
    echo "<br><table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"175\"><tr><td>\n"
	."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n"
	."<tr>\n"
	."<td align=\"left\" valign=\"top\" width=\"26\" height=\"30\"><img src=\"themes/Msn/images/sidebox-title-left.gif\"></td>\n"
	."<td align=\"left\" valign=\"middle\" background=\"themes/Msn/images/sidebox-title-bg.gif\" width=\"143\" height=\"30\">\n"
	."<font class=\"option\" color=\"#ffffff\">&nbsp;&nbsp;<b>$title</b></font></td>\n"
	."<td align=\"left\" valign=\"top\" width=\"6\" height=\"30\"><img src=\"themes/Msn/images/sidebox-title-right.gif\"></td>\n"
	."</tr>\n"
	."</table>\n"
	."</td>\n"
	."</tr>\n"
	."</table>\n\n"
	."<!----- Side Box Content ----->\n"
	."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"175\">\n"
	."<tr valign=\"top\">\n"
	."<td width=\"4\" align=\"left\" valign=\"top\" background=\"themes/Msn/images/sidebox-bar-left.gif\"><img src=\"themes/Msn/images/sidebox-bar-px.gif\"></td>\n"

	."<td bgcolor=\"#FDFBE9\" width=\"166\" align=\"left\" valign=\"top\">\n"
	."<table border=\"0\" cellpadding=\"3\" cellspacing=\"0\" width=\"167\">\n"
	."<tr>\n"
	."<td>\n"
	."$content\n"
	."</td>\n"
	."</tr>\n"
	."</table>\n"
	."</td>\n"
    ."<td width=\"4\" align=\"left\" valign=\"top\" background=\"themes/Msn/images/sidebox-bar-right.gif\"><img src=\"themes/Msn/images/sidebox-bar-px.gif\"></td>\n"
	."</tr></table>\n"

	."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"175\">\n"
	."<tr>\n"
	."<td align=\"left\" valign=\"top\" width=\"175\" height=\"29\">\n"
	."<img src=\"themes/Msn/images/sidebox-bottom.gif\">\n"
	."</td>\n"
	."</tr>\n"
	."</table>\n\n\n";
}

?>