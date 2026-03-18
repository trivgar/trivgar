<?php

/************************************************************/
/* IMPORTANT NOTE FOR THEMES DEVELOPERS!                    */
/*                                                          */
/* When you start coding your theme, if you want to         */
/* distribute it, please double check it to fit the HTML    */
/* 4.01 Transitional Standard. You can use the W3 validator */
/* located at http://validator.w3.org                       */
/* If you don't know where to start with your theme, just   */
/* start modifying this theme, it's validate and is cool ;) */
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

$bgcolor1 = "#001E64";
$bgcolor2 = "#000055";
$bgcolor3 = "#001E64";
$bgcolor4 = "#696969";
$textcolor1 = "#FFD26A";
$textcolor2 = "#FFD26A";

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
    
	echo "<table width=\"100%\" border=\"3\" bordercolor=\"#CCCCCC\" bgcolor=\"000066\" background=\"/themes/Rama/images/blockbg.gif\" cellspacing=\"1\" cellpadding=\"0\"><tr><td>\n";
    echo "<table width=\"100%\" cellspacing=\"0\" cellpadding=\"4\"><tr><td>\n";
}

function CloseTable() {
    echo "</td></tr></table></td></tr></table>\n";
}

function OpenTable2() {
    global $bgcolor1, $bgcolor2;
    echo "<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"><tr><td>\n";
    echo "<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" ><tr><td>\n";
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
        echo "$thetext$notes\n";
    } else {
        if($informant != "") {
            $boxstuff = "<a href=\"user.php?op=userinfo&amp;uname=$informant\">$informant</a> ";
        } else {
            $boxstuff = "$anonymous ";
        }
        $boxstuff .= ""._WRITES." <i>\"$thetext\"</i>$notes\n";
        echo "$boxstuff\n";
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
    echo "<body text=\"\" BGCOLOR=#00004E link=\"\" vlink=\"\" alink=\"\" leftmargin=\"0\" topmargin=\"0\" marginwidth=\"0\" marginheight=\"0\" background=\"themes/Rama/images/main-bg.png\">\n"
        ."<table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\" background=\"themes/Rama/images/main-bg.png\"><tr><td align=\"left\">\n";
    if ($banners) {
        include("banners.php");
    }
    echo "</td></tr></table>\n";
	
/* HEADER TABLE */
	echo "<TABLE WIDTH=100% BORDER=0 CELLPADDING=0 CELLSPACING=0><TR>\n" 
	."<TD ROWSPAN=2 WIDTH=411 HEIGHT=97><a href=\"modules.php?op=modload&name=News&file=index\"><IMG SRC=\"/themes/Rama/header2/headerLeft.gif\" WIDTH=411 HEIGHT=97 border=\"0\" alt=\"news page\"></a></TD>\n"
	."<TD ROWSPAN=2 WIDTH=100% HEIGHT=87 background=\"/themes/Rama/header2/headerBG.gif\" valign=\"top\"><img src=\"/themes/Rama/header/pixel.gif\" WIDTH=1 HEIGHT=1 alt=\"Ramasite\"></TD>\n"
	."<TD COLSPAN=6 WIDTH=364 HEIGHT=73><IMG SRC=\"/themes/Rama/header2/headerRight.gif\" WIDTH=364 HEIGHT=73 alt=\"Ramasite\"></TD></TR>\n"
	."<TR>\n" 
	."<TD WIDTH=41 HEIGHT=24><a href=\"/index.php\"><IMG SRC=\"/themes/Rama/header2/headerhome.gif\" WIDTH=41 HEIGHT=24 border=\"0\" alt=\"home\"></a></TD>\n"
	."<TD WIDTH=60 HEIGHT=24><a href=\"modules.php?name=Forum\"><IMG SRC=\"/themes/Rama/header2/headerForums.gif\" WIDTH=60 HEIGHT=24 border=\"0\" alt=\"dev forum\"></a></TD>\n"
	."<TD WIDTH=41 HEIGHT=24><a href=\"modules.php?op=modload&name=WebChat&file=index\"><IMG SRC=\"/themes/Rama/header2/headerChat.gif\" WIDTH=41 HEIGHT=24 border=\"0\" alt=\"chat\"></a></TD>\n"
	."<TD WIDTH=89 HEIGHT=24><a href=\"modules.php?name=Downloads\"><IMG SRC=\"/themes/Rama/header2/headerDownload.gif\" WIDTH=89 HEIGHT=24 border=\"0\" alt=\"downloads\"></a></TD>\n"
	."<TD WIDTH=66 HEIGHT=24><a href=\"modules.php?name=Your_Account\"><IMG SRC=\"/themes/Rama/header2/headerAccount.gif\" WIDTH=66 HEIGHT=24 alt=\"your account\" border=\"0\"></a></TD>\n"
	."<TD WIDTH=67 HEIGHT=24><a href=\"modules.php?name=Feedback\"><IMG SRC=\"/themes/Rama/header2/headerContact.gif\" WIDTH=67 HEIGHT=24 border=\"0\" alt=\"contact us\"></a></TD>\n"
	."</TR></TABLE>\n";
/* END HEADER TABLE	*/

	echo "<img src=\"themes/Rama/images/pixel.gif\" width=\"15\" height=\"2\" border=\"0\" alt=\"Ramasite\">\n"
	."<table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\" ><tr valign=\"top\">\n"
	."<td width=\"160\" valign=\"top\">\n";
    blocks(left);
    echo "</td><td><img src=\"themes/Rama/images/pixel.gif\" width=\"15\" height=\"2\" border=\"0\" alt=\"Ramasite\"></td><td width=\"100%\">\n";
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
        echo "</td><td><img src=\"themes/Rama/images/pixel.gif\" width=\"15\" height=\"1\" border=\"0\" alt=\"0\"></td><td valign=\"top\" width=\"150\">\n";
        blocks(right);
    }
	
    echo "</td>\n"
        ."</td></tr></table>\n";
        echo "<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\"><tr><td>\n"
		."<TABLE WIDTH=100% BORDER=0 CELLPADDING=0 CELLSPACING=0><TR>\n" 
		."<TD WIDTH=412 HEIGHT=31><IMG SRC=\"/themes/Rama/footer/footerTopLeft.gif\" WIDTH=412 HEIGHT=31></TD>\n" 
		."<TD WIDTH=100% HEIGHT=31 background=\"/themes/Rama/footer/footerTopBG.gif\"><IMG SRC=\"/themes/Rama/footer/footerTopBG.gif\" WIDTH=1 HEIGHT=31></TD>\n" 
		."<TD WIDTH=41 HEIGHT=31><a href=\"/index.php\"><IMG SRC=\"/themes/Rama/footer/footerHome.gif\" WIDTH=41 HEIGHT=31 border=\"0\" alt=\"Home\"></a></TD>\n" 
		."<TD WIDTH=61 HEIGHT=31><a href=\"modules.php?name=Forum\"><IMG SRC=\"/themes/Rama/footer/footerForum.gif\" WIDTH=61 HEIGHT=31 alt=\"Forums\" border=\"0\"></a></TD>\n"
		."<TD WIDTH=40 HEIGHT=31><a href=\"modules.php?op=modload&name=WebChat&file=index\"><IMG SRC=\"/themes/Rama/footer/footerChat.gif\" WIDTH=40 HEIGHT=31 alt=\"Chat\" border=\"0\"></a></TD>\n"
		."<TD WIDTH=88 HEIGHT=31><a href=\"modules.php?name=Downloads\"><IMG SRC=\"/themes/Rama/footer/footerDownloads.gif\" WIDTH=88 HEIGHT=31 border=\"0\" alt=\Downloads\"></a></TD>\n" 
		."<TD WIDTH=67 HEIGHT=31><a href=\"modules.php?name=Your_Account\"><IMG SRC=\"/themes/Rama/footer/footerAccount.gif\" WIDTH=67 HEIGHT=31 border=\"0\" alt=\"Your Account\"></a></TD>\n"
		."<TD WIDTH=71 HEIGHT=31><a href=\"modules.php?name=Feedback\"><IMG SRC=\"/themes/Rama/footer/footerContact.gif\" WIDTH=71 HEIGHT=31 border=\"0\" alt=\"Contact Us\"></a></TD></TR></TABLE>\n"
		."<TABLE WIDTH=100% BORDER=0 CELLPADDING=0 CELLSPACING=0 bgcolor=\"#000033\"><TR>\n"
		."<TD WIDTH=14 background=\"/themes/Rama/footer/footerMiddleLeft.gif\"><IMG SRC=\"/themes/Rama/footer/footerMiddleLeft.gif\" WIDTH=14 HEIGHT=12></TD>\n"
		."<TD width=\"100%\" background=\"/themes/Rama/footer/footerMiddleBG.gif\"><img src=\"/themes/Rama/footer/spacer.gif\"><center>\n";
	 footmsg();
		echo "</center></TD><TD WIDTH=17 background=\"/themes/Rama/footer/footerMiddleRight.gif\"><IMG SRC=\"/themes/Rama/footer/footerMiddleRight.gif\" WIDTH=17 HEIGHT=12></TD></TR></TABLE>\n"
		."<TABLE WIDTH=100% BORDER=0 CELLPADDING=0 CELLSPACING=0><TR>\n"
		."<TD WIDTH=288 HEIGHT=27><IMG SRC=\"/themes/Rama/footer/footerBotLeft.gif\" WIDTH=288 HEIGHT=27></TD>\n"
		."<TD WIDTH=100% HEIGHT=27 background=\"/themes/Rama/footer/footerBotBG.gif\"><IMG SRC=\"/themes/Rama/footer/footerBotBG.gif\" WIDTH=1 HEIGHT=1></TD>\n"
		."<TD WIDTH=174 HEIGHT=27><IMG SRC=\"/themes/Rama/footer/footerBotRight.gif\" WIDTH=174 HEIGHT=27></TD></TR></TABLE></td></tr></table>\n";
		
}

/************************************************************/
/* Function themeindex()                                    */
/*                                                          */
/* This function format the stories on the Homepage         */
/************************************************************/

function themeindex ($aid, $informant, $time, $title, $counter, $topic, $thetext, $notes, $morelink, $topicname, $topicimage, $topictext) {
    global $anonymous, $tipath;
    echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" align=\"center\" width=\"100%\">\n"
    ."<tr>\n"
    ."<td>\n"

        ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n"
        ."<tr>\n"

        ."<TD WIDTH=8 HEIGHT=16><IMG SRC=\"/themes/Rama/images/sidebox-title-bg_01.gif\" WIDTH=8 HEIGHT=16></TD>\n"
        ."<TD HEIGHT=16 background=\"/themes/Rama/images/sidebox-title-bg_02.gif\">\n"
		."<font class=\"option\" color=\"#00005E\"><b>&nbsp;&nbsp; $title</b></font></TD>\n"
        ."<TD WIDTH=90 HEIGHT=16><IMG SRC=\"/themes/Rama/images/sidebox-title-bg_03.gif\" WIDTH=90 HEIGHT=16></td>\n"

        ."</tr>\n"
        ."</table>\n"

        ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n"
        ."<tr>\n"
        ."<td>\n"

        ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n"
        ."<tr>\n"
        ."<td align=\"left\" valign=\"top\" width=\"15\" height=\"46\"><img src=\"themes/Rama/images/storybox-left.gif\"></td>\n"
        ."<td align=\"left\" valign=\"middle\" background=\"themes/Rama/images/storybox-bg.gif\" width=\"100%\" height=\"46\">\n"
        .""._POSTEDBY." ";
    formatAidHeader($aid);
    echo " "._ON." $time\n"
        
        ."</td>\n"
    ."<td width=\"1\" align=\"left\" valign=\"top\"><img src=\"themes/Rama/images/storybox-right.gif\"></td>\n"
        ."</tr>\n"
        ."</table>\n"

        ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n"
        ."<tr>\n"
        ."<td width=\"1\" align=\"left\" valign=\"top\" background=\"themes/Rama/images/sidebox-bar-left.gif\"><img src=\"themes/Rama/images/sidebox-bar-px.gif\"></td>\n"
        ."<td>\n"

        ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n"
        ."<tr valign=\"top\" width=\"100%\">\n"
        ."<td width=\"100%\">\n"
        ."<b><a href=\"modules.php?name=Search&query=&amp;topic=$topic\"><img src=\"$tipath$topicimage\" border=\"0\" Alt=\"$topictext\" align=\"right\" hspace=\"1\" vspace=\"1\"></a></B>\n";
    FormatStory($thetext, $notes, $aid, $informant);
    echo "</td></tr></table>\n"
    ."<br>$morelink<br><br>\n"
	."</td>\n"
    ."<td width=\"13\" align=\"left\" valign=\"top\" background=\"themes/Rama/images/storybox-content-right.gif\"><img src=\"themes/Rama/images/storybox-content-right-px.gif\"></td>\n"
    ."</tr></table>\n"

        ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n"
        ."<tr valign=\"top\">\n"
        ."<td width=\"9\" height=\"15\" align=\"left\" valign=\"top\"><img src=\"themes/Rama/images/storybox-bottom-left.gif\"></td>\n"
        ."<td width=\"100%\" height=\"15\" background=\"themes/Rama/images/storybox-bottom-bg.gif\"></td>\n"
        ."<td width=\"120\" height=\"15\" align=\"left\" valign=\"top\"><img src=\"themes/Rama/images/storybox-bottom-right.gif\"></td>\n"
    ."</table>\n"

    ."</td></tr></table>\n"

    ."</td></tr></table>\n";
}

/************************************************************/
/* Function themearticle()                                  */
/*                                                          */
/* This function format the stories on the story page, when */
/* you click on that "Read More..." link in the home        */
/************************************************************/

function themearticle ($aid, $informant, $datetime, $title, $thetext, $topic, $topicname, $topicimage, $topictext) {
    global $admin, $sid, $tipath;
    echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n"
        ."<tr>\n"

        ."<TD WIDTH=8 HEIGHT=16><IMG SRC=\"/themes/Rama/images/sidebox-title-bg_01.gif\" WIDTH=8 HEIGHT=16></TD>\n"
        ."<TD HEIGHT=16 background=\"/themes/Rama/images/sidebox-title-bg_02.gif\">\n"
		."<font class=\"option\" color=\"#00005E\"><b>&nbsp;&nbsp; $title</b></font></TD>\n"
        ."<TD WIDTH=90 HEIGHT=16><IMG SRC=\"/themes/Rama/images/sidebox-title-bg_03.gif\" WIDTH=90 HEIGHT=16></td>\n"

        ."</tr>\n"
        ."</table>\n"
		."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n"
        ."<tr>\n"
        ."<td align=\"left\" valign=\"top\" width=\"15\" height=\"46\"><img src=\"themes/Rama/images/storybox-left.gif\"></td>\n"
        ."<td align=\"left\" valign=\"middle\" background=\"themes/Rama/images/storybox-bg.gif\" width=\"100%\" height=\"46\">\n"
        ."<font class=\"artsubhead\">"._POSTEDON." $datetime "._BY." ";
    	formatAidHeader($aid);
    	if (is_admin($admin)) {
        echo "<br>[ <a href=\"admin.php?op=EditStory&amp;sid=$sid\">"._EDIT."</a> | <a href=\"admin.php?op=RemoveStory&amp;sid=$sid\">"._DELETE."</a> ]\n";
    	}
	
        
        echo "</td>\n"
    ."<td width=\"1\" align=\"left\" valign=\"top\"><img src=\"themes/Rama/images/storybox-right.gif\"></td>\n"
        ."</tr>\n"
        ."</table>\n"
	
		."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n"
        ."<tr>\n"
        ."<td width=\"1\" align=\"left\" valign=\"top\" background=\"themes/Rama/images/sidebox-bar-left.gif\"><img src=\"themes/Rama/images/sidebox-bar-px.gif\"></td>\n"
        ."<td>\n"
	
    ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\"><tr><td class=\"art\"><br>\n"
	."<table border=\"0\" cellspacing=\"2\" cellpadding=\"0\" width=\"20\" height=\"20\" align=\"right\"><tr><td><a href=\"search.php?query=&amp;topic=$topic\"><img src=\"$tipath$topicimage\" border=\"0\" Alt=\"$topictext\" align=\"right\" hspace=\"1\" vspace=\"0\"></a></td></tr></table>\n";
    FormatStory($thetext, $notes="", $aid, $informant);
    echo "<br><br><i>To comment on this article, or view other members opinions, please look directly below this article.</i></td></tr></table><br>\n"
		."</td>\n"
    	."<td width=\"13\" align=\"left\" valign=\"top\" background=\"themes/Rama/images/storybox-content-right.gif\"><img src=\"themes/Rama/images/storybox-content-right-px.gif\"></td>\n"
    	."</tr></table>\n"
		
		."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n"
        ."<tr valign=\"top\">\n"
        ."<td width=\"9\" height=\"15\" align=\"left\" valign=\"top\"><img src=\"themes/Rama/images/storybox-bottom-left.gif\"></td>\n"
        ."<td width=\"100%\" height=\"15\" background=\"themes/Rama/images/storybox-bottom-bg.gif\"></td>\n"
        ."<td width=\"120\" height=\"15\" align=\"left\" valign=\"top\"><img src=\"themes/Rama/images/storybox-bottom-right.gif\"></td>\n"
    ."</table>\n";
}

/************************************************************/
/* Function themesidebox()                                  */
/*                                                          */
/* Control look of your blocks. Just simple.                */
/************************************************************/

function themesidebox($title, $content) {
    echo "<img src=\"themes/Rama/images/box_head.gif\" width=\"165\" height=\"19\" alt=\"\" border=\"0\"><br><table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" background=\"themes/Rama/images/box_headline.gif\" width=\"165\" height=\"25\"><tr><td align=center class=\"menuehead\">\n"
        ."<font class=\"option\" color=\"#00005E\">$title</font>\n"
        ."</td></tr></table>\n"
        ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"165\">\n"
        ."<tr valign=\"top\"><td width=\"20\" bgcolor=\"00004E\" background=\"themes/Rama/images/box_bg_l.gif\"><img src=\"themes/Rama/images/pixel.gif\" width=\"20\" height=\"10\"></td><td class=\"artsubhead\" bgcolor=\"00004E\"><img src=\"themes/Rama/images/pixel.gif\" width=\"115\" height=\"1\"><br>\n"
        ."$content\n"
    ."<br></td><td width=\"15\" bgcolor=\"00004E\" background=\"themes/Rama/images/box_bg_r.gif\"><img src=\"themes/Rama/images/pixel.gif\" width=\"15\" height=\"10\"></td></tr></table><img src=\"themes/Rama/images/box_foot.gif\" width=\"165\" height=\"15\" alt=\"\" border=\"0\"><br>\n";
}

?>
