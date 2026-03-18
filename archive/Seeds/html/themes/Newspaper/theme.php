<?php

$thename = "Newspaper";
$bgcolor1 = "#ffffff";
$bgcolor2 = "#cccccc";
$bgcolor3 = "#ffffff";
$bgcolor4 = "#eeeeee";
$textcolor1 = "#ffffff";
$textcolor2 = "#000000";

function OpenTable() {
    global $bgcolor1, $bgcolor2;
    echo "<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" bgcolor=\"$bgcolor2\"><tr><td>\n";
    echo "<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"3\" bgcolor=\"$bgcolor1\"><tr><td>\n";
}

function OpenTable2() {
    global $bgcolor1, $bgcolor2;
    echo "<table border=\"0\" cellspacing=\"1\" cellpadding=\"0\" bgcolor=\"$bgcolor2\" align=\"center\"><tr><td>\n";
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
	echo "$thetext<br>$notes\n";
    } else {
	if($informant != "") {
	    $boxstuff = "<a href=\"user.php?op=userinfo&amp;uname=$informant\">$informant</a> ";
	} else {
	    $boxstuff = "$anonymous ";
	}
	$boxstuff .= ""._WRITES." <i>\"$thetext\"</i> $notes\n";
	echo "$boxstuff\n";
    }
}

function themeheader() {
global $user, $username, $banners, $sitename, $slogan, $cookie, $prefix;
    echo "<body bgcolor=\"ffffff\">"
	."";
    if ($banners) {
	include("banners.php");
    }
    echo ""
	."<center><table border=\"0 bgcolor=\"#ffffff\" cellpadding=\"4\" cellspacing=\"0\" width=\"100%\" align=\"center\"><tr><td height=\"4\" bgcolor=\"#000000\" colspan=\"5\"></td></tr><tr><td bgcolor=\"ffffff\">"
        ."<left><a href=\"index.php\"><font class=\"name\">$sitename Daily News</font></left></a></td><td align=\"right\"><a href=\"http://www.weather.com\" target=\"blank\"><img src=\"/themes/Newspaper/images/weather.jpg\" border=\"0\" alt=\"Current weather at Weather.com\"></a><a href=\"http://www.hollywood.com\" target=\"blank\"><img src=\"/themes/Newspaper/images/showtimes.jpg\" border=\"0\" alt=\"American Showtimes at Hollywood.com\"></a><a href=\"http://www.comics.com\" target=\"blank\"><img src=\"/themes/Newspaper/images/comics.gif\" border=\"0\" alt=\"Comics at Comics.com\"></a></tr>"
        ."<tr><td height=\"4\" bgcolor=\"#000000\" colspan=\"5\"></td></tr>"
        ."<tr><td height=\"15\" bgcolor=\"#ffffff\" colspan=\"5\">"
        ."<b><SCRIPT LANGUAGE=\"JavaScript\">
<!--
// Store the date in a variable
d = new Date()
dateText = \"\"

// Get the current day and convert it to the name of the day
dayValue = d.getDay()
if (dayValue == 0)
    dateText += \"Sunday\"
else if (dayValue == 1)
    dateText += \"Monday\"
else if (dayValue == 2)
    dateText += \"Tuesday\"
else if (dayValue == 3)
    dateText += \"Wednesday\"
else if (dayValue == 4)
    dateText += \"Thursday\"
else if (dayValue == 5)
    dateText += \"Friday\"
else if (dayValue == 6)
    dateText += \"Saturday\"

// Get the current month and convert it to the name of the month
monthValue = d.getMonth()
dateText += \" \"
if (monthValue == 0)
    dateText += \"January\"
if (monthValue == 1)
    dateText += \"February\"
if (monthValue == 2)
    dateText += \"March\"
if (monthValue == 3)
    dateText += \"April\"
if (monthValue == 4)
    dateText += \"May\"
if (monthValue == 5)
    dateText += \"June\"
if (monthValue == 6)
    dateText += \"July\"
if (monthValue == 7)
    dateText += \"August\"
if (monthValue == 8)
    dateText += \"September\"
if (monthValue == 9)
    dateText += \"October\"
if (monthValue == 10)
    dateText += \"November\"
if (monthValue == 11)
    dateText += \"December\"

// Get the current year; if it's before 2000, add 1900
if (d.getYear() < 2000) 
    dateText += \" \" + d.getDate() + \", \" + (1900 + d.getYear())
else 
    dateText += \" \" + d.getDate() + \", \" + (d.getYear())

// Get the current minutes
minuteValue = d.getMinutes()
if (minuteValue < 10)
    minuteValue = \"0\" + minuteValue

// Get the current hours
hourValue = d.getHours()

// Customize the greeting based on the current hours
if (hourValue < 12)
    {
    greeting = \"Good morning!\"
    timeText = \" at \" + hourValue + \":\" + minuteValue + \" AM\"
    }
else if (hourValue == 12)
    {
    greeting = \"Good afternoon!\"
    timeText = \" at \" + hourValue + \":\" + minuteValue + \" PM\"
    }
else if (hourValue < 17)
    {
    greeting = \"Good afternoon!\"
    timeText = \" at \" + (hourValue-12) + \":\" + minuteValue + \" PM\"
    }
else
    {
    greeting = \"Good evening!\"
    timeText = \" at \" + (hourValue-12) + \":\" + minuteValue + \" PM\"
    }
// Write the greeting, the date, and the time to the page
document.write(greeting + \" It's \" + dateText + timeText)
//-->
</SCRIPT></b>";
    echo " <img src=\"themes/Newspaper/images/dot.gif\"><a href=\"topics.php\">Topics</a>"
         ." <img src=\"themes/Newspaper/images/dot.gif\"><a href=\"sections.php\">Sections</a>"
         ." <img src=\"themes/Newspaper/images/dot.gif\"><a href=\"download.php\">Downloads</a>"
         ." <img src=\"themes/Newspaper/images/dot.gif\"><a href=\"links.php\">Links</a>"
         ." <img src=\"themes/Newspaper/images/dot.gif\"><a href=\"reviews.php\">Reviews</a>"
         ."</td></tr><tr><td height=\"4\" bgcolor=\"#000000\" colspan=\"5\"></td></tr></table><p>"
         ."<table border=\"0\" cellspacing=\"0\" cellpadding=\"2\" width=\"100%\"><tr><td valign=\"top\" width=\"150\" bgcolor=\"ffffff\">";
    blocks(left);
    echo "</td><td>&nbsp;&nbsp;</td><td width=\"100%\" valign=\"top\">";
}

function themefooter() {
    global $index;
    if ($index == 1) {
	echo "</td><td>&nbsp;&nbsp;</td><td valign=\"top\" bgcolor=\"#ffffff\">";
	blocks(right);
	echo "</td>";
    }
    echo "</td></tr></table></td></tr></table>";
    footmsg();
}

function themeindex ($aid, $informant, $time, $title, $counter, $topic, $thetext, $notes, $morelink, $topicname, $topicimage, $topictext) {
    global $tipath, $anonymous;
    echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\" bgcolor=\"E7E3E3\" width=\"100%\"><tr><td>"
        ."<table border=\"0\" cellpadding=\"3\" cellspacing=\"1\" width=\"100%\"><tr><td bgcolor=\"E7E3E3\">"
        ."<font class=\"storytitle\"><b>$title</b></font><br>"
        .""
        .""._POSTEDBY." <b>";
    formatAidHeader($aid);
    echo "</b>"
	." - "._TOPIC."<a href=\"search.php?query=&amp;topic=$topic&amp;author=\"> $topictext</a>"
	."</font></td></tr><tr><td bgcolor=\"ffffff\">";
    FormatStory($thetext, $notes, $aid, $informant);
    echo ""
        ."</td></tr><tr><td bgcolor=\"ffffff\" align=\"right\">"
        ."$morelink"
        ."</td></tr></table></td></tr></table>"
	."<br>";
}

function themearticle ($aid, $informant, $datetime, $title, $thetext, $topic, $topicname, $topicimage, $topictext) {
    global $admin, $sid, $tipath;
    if ("$aid" == "$informant") {
	echo"
	<table border=0 cellpadding=0 cellspacing=0 align=center bgcolor=000000 width=100%><tr><td>
	<table border=0 cellpadding=3 cellspacing=1 width=100%><tr><td bgcolor=FFFFFF>
	<b>$title</b><br>"._POSTEDON." $datetime";
	if ($admin) {
	    echo "&nbsp;&nbsp; $font2 [ <a href=admin.php?op=EditStory&sid=$sid>"._EDIT."</a> | <a href=admin.php?op=RemoveStory&sid=$sid>"._DELETE."</a> ]";
	}
	echo "
	<br>"._TOPIC.": <a href=search.php?query=&topic=$topic&author=>$topictext</a>
	</td></tr><tr><td bgcolor=ffffff>
	$thetext
	</td></tr></table></td></tr></table><br>";
    } else {
	if($informant != "") $informant = "<a href=\"user.php?op=userinfo&uname=$informant\">$informant</a> ";
	else $boxstuff = "$anonymous ";
	$boxstuff .= ""._WRITES." <i>\"$thetext\"</i> $notes";
	echo "
	<table border=0 cellpadding=0 cellspacing=0 align=center bgcolor=000000 width=100%><tr><td>
	<table border=0 cellpadding=3 cellspacing=1 width=100%><tr><td bgcolor=FFFFFF>
	<b>$title</b><br>"._CONTRIBUTEDBY." $informant "._ON." $datetime";
	if ($admin) {
	    echo "&nbsp;&nbsp; $font2 [ <a href=admin.php?op=EditStory&sid=$sid>"._EDIT."</a> | <a href=admin.php?op=RemoveStory&sid=$sid>"._DELETE."</a> ]";
	}
	echo "
	<br>"._TOPIC.": <a href=search.php?query=&topic=$topic&author=>$topictext</a>
	</td></tr><tr><td bgcolor=ffffff>
	$thetext
	</td></tr></table></td></tr></table><br>";
    }
}

function themesidebox($title, $content) {
    echo "<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"150\" bgcolor=\"000000\"><tr><td>"
        ."<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"3\"><tr><td bgcolor=\"000000\">"
        ."<font color=\"#ffffff\" class=\"title\"><b>$title</b></font>";
    echo "</td></tr><tr><td bgcolor=\"ffffff\"><font class=\"content\">$content</font>";
     echo "</font></td></tr></table></td></tr></table><br>";
}

?>
