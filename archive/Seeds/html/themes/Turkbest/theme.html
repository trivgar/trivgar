<?php


$thename = "Turkbest";
$bgcolor1 = "#bedfff";
$bgcolor2 = "#006699";
$bgcolor3 = "#ffffff";
$bgcolor4 = "#ffffff";
$textcolor1 = "#000000";
$textcolor2 = "#000000";

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
        echo "<font size=\"2\" color=\"#505050\">$thetext<br>$notes</font>\n";
    } else {
        if($informant != "") {
            $boxstuff = "<a href=\"user.php?op=userinfo&amp;uname=$informant\">$informant</a> ";
        } else {
            $boxstuff = "$anonymous ";
        }
        $boxstuff .= ""._WRITES." \"$thetext\" $notes\n";
        echo "<font size=\"2\" color=\"#505050\">$boxstuff</font>\n";
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
    echo "<body bgcolor=\"#bedfff\" text=\"#000000\" link=\"#363636\" vlink=\"#363636\" alink=\"#d5ae83\">\n"
        ."<br>\n";
    if ($banners) {
        include("banners.php");
    }
    echo "<body onmouseover=\"window.status=' ... Reignemesis Inc ... ';return true\"> \n"

        ."<table background=\"themes/Turkbest/images/sag.gif\" cellpadding=\"0\" cellspacing=\"0\" width=\"696\" height=\"30\" border=\"0\" align=\"center\" valign=\"bottom\">\n"
        ."<tr>\n"
        ."<td width=\"296\" height=\"0\" align=\"left\" valign=\"middle\" >\n"
        ."<a href=\"index.php\"><img src=\"themes/Turkbest/images/logo.gif\" align=\"right\" alt=\""._WELCOMETO." $sitename\" border=\"0\"></a></td>\n"
        ."<td height=\"0\" align=\"center\" valign=\"middle\" background=\"themes/Turkbest/images/sol.gif\">\n"
        ."<table cellpadding=\"0\" cellspacing=\"0\" height=\"0\" border=\"0\" align=\"center\" valign=\"bottom\">\n"
        ."<tr>\n"
        ."<td valign=\"middle\" height=\"0\">\n"
        ."<form action=\"search.php\" method=\"post\"><font size=\"2\" color=\"#000000\"><b>"._SEARCH." </b>\n"
        ."<input type=\"text\" name=\"query\" size=\"14\"></font></form></td>\n"
        ."<td align=\"left\" valign=\"middle\" height=\"0\">\n"
        ."<form action=\"search.php\" method=\"get\"><font size=\"2\"></B> <b>"._TOPIC.":</B>";

    $toplist = mysql_query("select topicid, topictext from topics order by topictext");
    echo "<SELECT NAME=\"topic\"onChange='submit()'>" ;
    echo "<OPTION VALUE=\"\">"._ALLTOPICS."</option>\n";
    while(list($topicid, $topics) = mysql_fetch_row($toplist)) {
    if ($topicid==$topic) { $sel = "selected "; }
        echo "<option $sel value=\"$topicid\">$topics</option>\n";
    $sel = "";
    }
    echo "</SELECT></font></form></td></tr></table></td>\n"
        ."<td valign=\"middle\"></td>\n"
        ."</tr></table>\n"

        ."<table cellpadding=\"0\" cellspacing=\"0\" width=\"700\" align=\"center\" border=\"0\" >\n"
        ."<tr>\n"
        ."<td colspan=\"4\" width=\"400\"></td>\n"
        ."</tr>\n"
        ."<tr valign=\"middle\">\n"
        ."<td width=\"200\" nowrap><b><font size=\"2\" color=\"#363636\"><b>\n";
    if ($username == "Anonymous") {
        echo "&nbsp;&nbsp;<font color=\"#363636\"><b><a href=\"user.php\">"._LOGINCREATE."</a></font>\n";
    } else {
        echo "&nbsp;&nbsp;"._HELLO." $username!";
    }
    echo "</b></font></td>\n"
        ."<td align=\"center\" height=\"20\" width=\"400\"><font size=\"2\"><B>\n"
            ."<img src=\"themes/Turkbest/images/arrow.gif\" border=0> <A href=\"index.php\">Main</a>\n"
        ."<img src=\"themes/Turkbest/images/arrow.gif\" border=0> <A href=\"forums.php\">Forum</a>\n"
        ."<img src=\"themes/Turkbest/images/arrow.gif\" border=0> <A href=\"Chats.php\">Chat</a>\n"
        ."<img src=\"themes/Turkbest/images/arrow.gif\" border=0> <A href=\"user.php\">Your Account</a>\n"
        ."<img src=\"themes/Turkbest/images/arrow.gif\" border=0> <A href=\"links.php\">Links</a>\n"
        ."<img src=\"themes/Turkbest/images/arrow.gif\" border=0> <A href=\"top.php\">Top Ten</a>\n"
        ."</B></font>\n"
        ."</td>\n"
        ."<td align=\"right\" width=\"100\"><font size=\"2\"><b>\n"
        ."<script type=\"text/javascript\">\n\n"
        ."<!--   // Array ofmonth Names\n"
        ."var monthNames = new Array( \"Ocak\",\"Þubat\",\"Mart\",\"Nisan\",\"Mayýs\",\"Haziran\",\"Temmuz\",\"Auðustos\",\"Eylül\",\"Ekim\",\"Kasým\",\"Aralýk\");\n"
        ."var now = new Date();\n"
        ."thisYear = now.getYear();\n"
        ."if(thisYear < 1900) {thisYear += 1900}; // corrections if Y2K display problem\n"
        ."document.write(monthNames[now.getMonth()] + \" \" + now.getDate() + \", \" + thisYear);\n"
        ."// -->\n\n"
        ."</script></b></font></td>\n"
        ."<td>&nbsp;</td>\n"
        ."</tr>\n"
        ."<tr>\n"
        ."<td colspan=\"4\"><IMG src=\"themes/Turkbest/images/pixel.gif\" width=\"1\" height=\"1\" alt=\"\" border=\"0\" hspace=\"0\"></td>\n"
        ."</tr>\n"
        ."</table>\n"
        ."<table cellpadding=\"0\" cellspacing=\"0\" width=\"0\" border=\"0\" align=\"center\" bgcolor=\"#bedfff\">\n"
        ."<tr>\n"
        ."<td width=\"50\" height=\"23\" valign=\"bottom\">\n"
        ."<img src=\"themes/Turkbest/images/sx.gif\" width=\"60\" height=\"23\" align=\"center\" alt=\"Reignemesis Inc\" border=\"0\"></a></td>\n"
        ."<td width=\"80\" height=\"23\" background=\"themes/Turkbest/images/bg.gif\">\n"
        ."<a href=\"stats.php\"><img src=\"themes/Turkbest/images/charts.gif\" width=\"59\" height=\"23\" border=\"0\" alt=\"Ýstatistikler\"></a></td>\n"
        ."<td width=\"80\" height=\"23\" background=\"themes/Turkbest/images/bg.gif\" align=\"center\" valign=\"bottom\">\n"
        ."<a href=\"top100.php\"><img src=\"themes/Turkbest/images/topsites.gif\" width=\"64\" height=\"23\" border=\"0\" alt=\"Liste.tr.cx\"></a></td>\n"
        ."<td width=\"80\" height=\"23\" background=\"themes/Turkbest/images/bg.gif\" align=\"center\" valign=\"bottom\">\n"
        ."<a href=\"http://www.reignemesis.f2s.com/html/categories.php?op=newindex&catid=5\"><img src=\"themes/Turkbest/images/latest.gif\" width=\"85\" height=\"23\" border=\"0\" alt=\"Son Mp3ler\"></a></td>\n"
        ."<td width=\"80\" height=\"23\" background=\"themes/Turkbest/images/bg.gif\" align=\"center\" valign=\"bottom\">\n"
        ."<a href=\"download.php\"><img src=\"themes/Turkbest/images/topdownloads.gif\" width=\"99\" height=\"23\" border=\"0\" alt=\"Downloads\"></a></td>\n"
        ."<td width=\"80\" height=\"23\" background=\"themes/Turkbest/images/bg.gif\" align=\"center\" valign=\"bottom\">\n"
        ."<a href=\"modules.php?op=modload&name=FAQ&file=index\"><img src=\"themes/Turkbest/images/faq.gif\" width=\"36\" height=\"23\" border=\"0\" alt=\"Sýk.a Sorulan Sorular\"></a></td>\n"
        ."<td width=\"80\" height=\"23\" background=\"themes/Turkbest/images/bg.gif\" align=\"center\" valign=\"bottom\">\n"
        ."<a href=\"formmail.php\"><img src=\"themes/Turkbest/images/contact.gif\" width=\"81\" height=\"23\" border=\"0\" alt=\"Bize yazýn\"></a></td>\n"
        ."<td width=\"0\" height=\"23\" bgcolor=\"#bedfff\" align=\"center\" valign=\"bottom\">\n"
        ."<img src=\"themes/Turkbest/images/dx.gif\" width=\"60\" height=\"23\" border=\"0\" alt=\"top ten\"></a></td>\n"
        ."</tr>\n"
        ."</table>\n"
        ."<!-- FIN DEL TITULO -->\n"
        ."<table width=\"800\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\"><tr valign=\"top\">\n"
        ."<td><img src=\"themes/Turkbest/images/pixel.gif\" width=\"1\" height=\"20\" border=\"0\" alt=\"\"></td></tr></table>\n"
        ."<table width=\"800\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\"><tr valign=\"top\">\n"
        ."<td><img src=\"themes/Turkbest/images/pixel.gif\" width=\"10\" height=\"1\" border=\"0\" alt=\"\"></td>\n"
        ."<td width=\"150\" valign=\"top\">\n";
    blocks(left);
    echo "</td><td><img src=\"themes/Turkbest/images/pixel.gif\" width=\"15\" height=\"1\" border=\"0\" alt=\"\"></td><td width=\"100%\">\n";
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
        echo "</td><td><img src=\"themes/Turkbest/images/pixel.gif\" width=\"15\" height=\"1\" border=\"0\" alt=\"\"></td><td valign=\"top\" width=\"150\">\n";
        blocks(right);
    }
    echo "</td><td><img src=\"themes/Turkbest/images/pixel.gif\" width=10 height=1 border=0 alt=\"\">\n"
        ."</td></tr></table>\n"
        ."<table width=\"800\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" ><tr valign=\"top\">\n"
        ."<td height=\"17\">&nbsp;</td>\n"
        ."</tr></table>\n"
        ."<br>"
        ."<table width=\"800\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\"  ><tr valign=\"top\">\n"
        ."</tr><tr align=\"center\">\n"
        ."<td width=\"800\" colspan=\"3\">\n";
    footmsg();
    echo "</td>\n"
        ."</tr>\n"
        ."</table>\n";
}

/************************************************************/
/* Function themeheader()                                   */
/*                                                          */
/* Control the header for your site. You need to define the */
/* BODY tag and in some part of the code call the blocks    */
/* function for left side with: blocks(left);               */
/************************************************************/

function themeindex ($aid, $informant, $time, $title, $counter, $topic, $thetext, $notes, $morelink, $topicname, $topicimage, $topictext) {
    global $anonymous, $tipath;
  echo "<br><table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"#006699\" width=\"100%\">\n"
    ."<tr>\n"
    ."<td>\n"

        ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" bgcolor=\"#bedfff\">\n"
        ."<tr>\n"
        ."<td align=\"center\" valign=\"top\"><img src=\"themes/Turkbest/images/ustrgn.gif\" width=\"450\" height=\"6\">\n"
        ."</td>\n"
        ."</tr>\n"
        ."</table>\n"

        ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n"
        ."<tr>\n"
        ."<td>\n"

        ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" >\n"
        ."<tr>\n"
        ."<td align=\"left\" valign=\"top\" width=\"0\" height=\"0\"></td>\n"
        ."<td align=\"left\" valign=\"middle\" background=\"themes/Turkbest/images/storybox-bg.gif\" width=\"100%\" height=\"0\">\n"
        ."<font color=\"#FFFFFF\" size=\"1\"><b>Konu::: </b>$title<br><b>"._POSTEDBY.":::</B> ";
    formatAidHeader($aid);
    echo "<br><b> "._ON."::</B> $time $timezone <b>($counter "._READS.")</b>\n"
        ."</td>\n"
    ."<td width=\"12\" align=\"left\" valign=\"top\"></td>\n"
        ."</tr>\n"
        ."</table>\n"

        ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" bgcolor=\"#0099cc\">\n"
        ."<tr>\n"
        ."<td width=\"4\" align=\"left\" valign=\"top\" background=\"themes/Turkbest/images/sidebox-bar-left.gif\"></td>\n"
        ."<td>\n"

        ."<table border=\"0\" cellpadding=\"3\" cellspacing=\"0\" width=\"100%\">\n"
        ."<tr valign=\"top\">\n"
        ."<td>\n"
        ."<font color=\"#999999\"><b><a href=\"search.php?query=&amp;topic=$topic\"><img src=\"$tipath$topicimage\" border=\"0\" Alt=\"$topictext\" align=\"right\" hspace=\"10\" vspace=\"10\"></a></B></font>\n";
    FormatStory($thetext, $notes, $aid, $informant);
    echo "</td></tr></table>\n"
    ."</td>\n"
    ."<td width=\"13\" align=\"left\" valign=\"top\" background=\"themes/Turkbest/images/storybox-content-right.gif\"></td>\n"
    ."</tr></table>\n"

        ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" background=\"themes/Turkbest/images/altrgn.gif\">\n"
        ."<tr>\n"
        ."<td height=\"20\" align=\"right\">\n"
     ."<font color=\"#000000\">$morelink</font>\n"
     ."</td>\n"
     ."<td height=\"20\" align=\"right\"><img src=\"themes/Turkbest/images/reignemesis.gif\" height=\"20\" align=\"center\" valign=\"top\" border=\"0\">\n"
     ."</table>\n"

     ."</td></tr></table>\n"

     ."</td></tr></table>\n";
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
    echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"5\" bgcolor=\"#bedFFF\" width=\"100%\"><tr><td>\n"
        ."<table border=\"0\" cellpadding=\"1\" cellspacing=\"0\" bgcolor=\"#000000\" width=\"100%\"><tr><td>\n"
        ."<table border=\"0\" cellpadding=\"3\" cellspacing=\"0\" bgcolor=\"#FFFFFF\" width=\"100%\"><tr><td align=\"left\">\n"
        ."<font size=\"3\" color=\"#363636\"><b>$title</b></font><br>\n"
        .""._POSTEDON." $datetime "._BY." ";
    formatAidHeader($aid);
    if (is_admin($admin)) {
        echo "<br>[ <a href=\"admin.php?op=EditStory&amp;sid=$sid\">"._EDIT."</a> | <a href=\"admin.php?op=RemoveStory&amp;sid=$sid\">"._DELETE."</a> ]\n";
    }
    echo "</td></tr></table></td></tr></table><br>";
    echo "<a href=\"search.php?query=&amp;topic=$topic\"><img src=\"$tipath$topicimage\" border=\"0\" Alt=\"$topictext\" align=\"right\" hspace=\"10\" vspace=\"10\"></a>\n";
    FormatStory($thetext, $notes="", $aid, $informant);
    echo "</td></tr></table><br>\n\n\n";
}

/************************************************************/
/* Function themeheader()                                   */
/*                                                          */
/* Control the header for your site. You need to define the */
/* BODY tag and in some part of the code call the blocks    */
/* function for left side with: blocks(left);               */
/************************************************************/

function themesidebox($title, $content) {
    echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"160\">\n"
    ."<tr>\n"
    ."<td width=\"160\"align=\"left\" valign=\"top\"><img src=\"themes/Turkbest/images/sopra-centro-small.gif\"></td>\n"
    ."</tr>\n"
    ."</table>\n"

    ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"160\">\n"
    ."<tr>\n"
    ."<td width=\"1\" align=\"left\" valign=\"top\" background=\"themes/Turkbest/images/sidebox-pixel.gif\"><img src=\"themes/Turkbest/images/clear-pixel.gif\"></td>\n"
    ."<td width=\"160\" align=\"center\" valign=\"top\" bgcolor=\"#006699\"><font size=\"2\" color=\"#FFFFFF\"><b>$title</b></font></td>\n"
    ."<td width=\"1\" align=\"left\" valign=\"top\" background=\"themes/Turkbest/images/sidebox-pixel.gif\"><img src=\"themes/Turkbest/images/clear-pixel.gif\"></td>\n"
    ."</tr>\n"
    ."</table>\n"

    ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"160\">\n"
    ."<tr>\n"
    ."<td width=\"160\" height=\"1\" align=\"left\" valign=\"top\"><img src=\"themes/Turkbest/images/sidebox-dot-line.gif\"></td>\n"
    ."</tr>\n"
    ."</table>\n"

    ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"158\">\n"
    ."<tr>\n"
    ."<td width=\"1\" align=\"left\" valign=\"top\" background=\"themes/Turkbest/images/sidebox-pixel.gif\"><img src=\"themes/Turkbest/images/clear-pixel.gif\"></td>\n"
    ."<td>\n"
    ."<table border=\"0\" cellpadding=\"2\" cellspacing=\"0\" width=\"158\">\n"
    ."<tr>\n"
    ."<td width=\"158\" align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">$content</td>\n"
    ."</tr>\n"
    ."</table>\n"
    ."</td>\n"
    ."<td width=\"1\" align=\"left\" valign=\"top\" background=\"themes/Turkbest/images/sidebox-pixel.gif\"><img src=\"themes/Turkbest/images/clear-pixel.gif\"></td>\n"
    ."</tr>\n"
    ."</table>\n"

    ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"160\">\n"
    ."<tr>\n"
    ."<td background=\"themes/Turkbest/images/sotto-lati.gif\" width=\"160\" height=\"3\" align=\"right\" valign=\"top\"><img src=\"themes/Turkbest/images/mp3.gif\"></td>\n"
    ."</tr>\n"
    ."</table>\n"

        ."<br>\n\n\n";

}

?>