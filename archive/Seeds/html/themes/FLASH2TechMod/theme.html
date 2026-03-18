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
    
	echo "<table width=\"100%\" border=\"3\" bordercolor=\"#CCCCCC\" bgcolor=\"000066\" cellspacing=\"1\" cellpadding=\"0\"><tr><td>\n";
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
    echo "<body text=\"\" link=\"\" vlink=\"\" alink=\"\" leftmargin=\"0\" topmargin=\"0\" marginwidth=\"0\" marginheight=\"0\" background=\"themes/FLASH2TechMod/images/bg2.gif\">\n"
        ."<table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\" background=\"themes/FLASH2TechMod/images/main-bg.gif\"><tr><td align=\"left\">\n";
    if ($banners) {
        include("banners.php");
    }
    echo "</td></tr></table>\n"
        ."<table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\" align=\"center\" background=\"themes/FLASH2TechMod/images/main-bg.gif\"><tr>\n"
        ."<td><IMG src=\"themes/FLASH2TechMod/images/pixel.gif\" width=\"1\" height=\"1\" alt=\"0\" border=\"0\" hspace=\"0\"></td></tr></table>\n"
        ."<TABLE WIDTH=100% BORDER=0 CELLPADDING=0 CELLSPACING=0 name=\"LOGO HEADER\"><TR>\n"
		."<TD WIDTH=269 HEIGHT=73> <IMG SRC=\"/themes/FLASH2TechMod/images/top_graphic_01.gif\" WIDTH=269 HEIGHT=73 alt=\"logo\"></TD>\n"
		."<TD HEIGHT=73 background=\"/themes/FLASH2TechMod/images/top_graphic_02.gif\" WIDTH=100%><img src=\"/themes/FLASH2TechMod/images/top_graphic_02.gif\" width=\"1\" height=\"73\" alt=\"image spacer\"></TD>\n"
		."<TD WIDTH=79 HEIGHT=73> <IMG SRC=\"/themes/FLASH2TechMod/images/top_graphic_03.gif\" WIDTH=79 HEIGHT=73 alt=\"logoright\"></TD>\n"
		."</TR></TABLE>\n"
        ."<tr>\n"
        ."<table width=\"100%\" border=\"3\" bordercolor=\"#CCCCCC\" cellspacing=\"0\" cellpadding=\"0\" background=\"themes/FLASH2TechMod/images/main-bg.gif\"><tr><td><table width=100% cellspacing=\"0\" cellpadding=\"0\"><tr><td width=50%>\n";
	if ($username == "Anonymous") {
	echo "&nbsp;&nbsp;<b>".CREATEACCOUNT."</b>\n";
    } else {
	echo "&nbsp;&nbsp;<b>".HELLO." $username!</b>";
    }
	
    echo "<a href=\"modules.php?op=modload&name=News&file=index\"></a></td>\n"
        ."<td align=\"right\" width=50% class=\"menuehead\">\n";

	echo "<form action=\"modules.php?name=Your_Account\" method=\"post\" style=\"margin:1\">\n"
        ."<font class=\"pinktext\"><b>User: </b></font>\n"
        ."<input type=\"text\" name=\"uname\" size=\"7\" maxlength=\"25\">\n"
        ."<font class=\"pinktext\"><b>Pass: </b></font>\n"
        ."<input type=\"password\" name=\"pass\" size=\"7\" maxlength=\"20\">\n"
        ."<input type=\"hidden\" name=\"op\" value=\"login\">\n"
        ."<input type=\"submit\" value=\"login\">\n"
        ."<a href=\"modules.php?name=Your_Account&op=new_user\"><font class=\"pinktext\"><b>Join</b></font></a>\n"
        ."</form></td></tr></table></td></tr></table>\n";
	echo "</table><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\"><tr>\n"
        ."<td align=\"center\" height=\"15\" width=\"100%\" background=\"themes/FLASH2TechMod/images/main-bg.gif\">\n"
        ."<object classid=\"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000\" codebase=\"http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=4,0,2,0\" width=\"100%\" height=\"35\">\n"
        ."<param name=movie value=\"themes/FLASH2TechMod/flash/main_nav.swf\">\n"
        ."<param name=quality value=high>\n"
        ."<param name=\"BGCOLOR\" value=\"#00004E\">\n"
        ."<embed src=\"themes/FLASH2TechMod/flash/main_nav.swf\" quality=high pluginspage=\"http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash\" type=\"application/x-shockwave-flash\" width=\"100%\" height=\"35\">\n"
        ."</embed>\n"
        ."</object>\n"
        ."<table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\"><tr valign=\"top\">\n"
        ."<td width=\"160\" valign=\"top\">\n";
    blocks(left);
    echo "</td><td><img src=\"themes/FLASH2TechMod/images/pixel.gif\" width=\"15\" height=\"2\" border=\"0\" alt=\"0\"></td><td width=\"100%\">\n";
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
        echo "</td><td><img src=\"themes/FLASH2TechMod/images/pixel.gif\" width=\"15\" height=\"1\" border=\"0\" alt=\"0\"></td><td valign=\"top\" width=\"150\">\n";
        blocks(right);
    }
	
		
	
    echo "</td>\n"
        ."</td></tr></table>\n";
        
		echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n"
        ."<tr>\n"
        ."<td align=\"left\" valign=\"top\" width=\"15\"><img src=\"themes/FLASH2TechMod/images/storybox-left.gif\"></td>\n"
        ."<td align=\"left\" valign=\"middle\" background=\"themes/FLASH2TechMod/images/storybox-bg.gif\" width=\"100%\">\n"
        ."<font class=\"artsubhead\"><center><A href=\"../../index.php\">Home</a> &nbsp;&middot;&nbsp; 
      <A href=\"/forums/\" target=\"_blank\">Forums</a> 
      &nbsp;&middot;&nbsp; <A href=\"modules.php?name=Content\">Features</a> 
      &nbsp;&middot;&nbsp; <A href=\"modules.php?name=Your_Account\">My 
      Account</a> &nbsp;&middot;&nbsp; <A href=\"modules.php?name=Topics\">Topics</a> 
      &nbsp;&middot;&nbsp; <A href=\"modules.php?name=Downloads\">Downloads</a> 
      &nbsp;&middot;&nbsp; <A href=\"/phpMyChat/chat/\" target=\"_blank\">Chat</a></center></font>\n"
        
        ."</td>\n"
    	."<td width=\"1\" align=\"left\" valign=\"top\"><img src=\"themes/FLASH2TechMod/images/storybox-right.gif\"></td>\n"
        ."</tr>\n"
	."</table>\n"
	
	."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n"
        ."<tr>\n"
        ."<td width=\"1\" align=\"left\" valign=\"top\" background=\"themes/FLASH2TechMod/images/sidebox-bar-left.gif\"><img src=\"themes/FLASH2TechMod/images/sidebox-bar-px.gif\"></td>\n"
        ."<td>\n"
	
    ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" valign=\"top\"><tr><td class=\"art\">\n"
    	."<font class=\"artsubhead\">\n";
		footmsg();
		echo "</font></td></tr></table><br>\n"
		."</td>\n"
    	."<td width=\"13\" align=\"left\" valign=\"top\" background=\"themes/FLASH2TechMod/images/storybox-content-right.gif\"><img src=\"themes/FLASH2TechMod/images/storybox-content-right-px.gif\"></td>\n"
    	."</tr></table>\n"
		
	."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n"
        ."<tr valign=\"top\">\n"
        ."<td width=\"9\" height=\"15\" align=\"left\" valign=\"top\"><img src=\"themes/FLASH2TechMod/images/storybox-bottom-left.gif\"></td>\n"
        ."<td width=\"100%\" height=\"15\" background=\"themes/FLASH2TechMod/images/storybox-bottom-bg.gif\"></td>\n"
        ."<td width=\"120\" height=\"15\" align=\"left\" valign=\"top\"><img src=\"themes/FLASH2TechMod/images/storybox-bottom-right.gif\"></td>\n"
    ."</table>\n";
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

        ."<TD WIDTH=8 HEIGHT=16><IMG SRC=\"/themes/FLASH2TechMod/images/sidebox-title-bg_01.gif\" WIDTH=8 HEIGHT=16></TD>\n"
        ."<TD HEIGHT=16 background=\"/themes/FLASH2TechMod/images/sidebox-title-bg_02.gif\">\n"
		."<font class=\"option\" color=\"#00005E\"><b>&nbsp;&nbsp; $title</b></font></TD>\n"
        ."<TD WIDTH=90 HEIGHT=16><IMG SRC=\"/themes/FLASH2TechMod/images/sidebox-title-bg_03.gif\" WIDTH=90 HEIGHT=16></td>\n"

        ."</tr>\n"
        ."</table>\n"

        ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n"
        ."<tr>\n"
        ."<td>\n"

        ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n"
        ."<tr>\n"
        ."<td align=\"left\" valign=\"top\" width=\"15\" height=\"46\"><img src=\"themes/FLASH2TechMod/images/storybox-left.gif\"></td>\n"
        ."<td align=\"left\" valign=\"middle\" background=\"themes/FLASH2TechMod/images/storybox-bg.gif\" width=\"100%\" height=\"46\">\n"
        ."<font color=\"#ffffff\">"._POSTEDBY." ";
    formatAidHeader($aid);
    echo " "._ON." $time</font>\n"
        
        ."</td>\n"
    ."<td width=\"1\" align=\"left\" valign=\"top\"><img src=\"themes/FLASH2TechMod/images/storybox-right.gif\"></td>\n"
        ."</tr>\n"
        ."</table>\n"

        ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n"
        ."<tr>\n"
        ."<td width=\"1\" align=\"left\" valign=\"top\" background=\"themes/FLASH2TechMod/images/sidebox-bar-left.gif\"><img src=\"themes/FLASH2TechMod/images/sidebox-bar-px.gif\"></td>\n"
        ."<td>\n"

        ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n"
        ."<tr valign=\"top\" width=\"100%\">\n"
        ."<td width=\"100%\">\n"
        ."<font color=\"#FFD26A\"><b><a href=\"modules.php?name=Search&query=&amp;topic=$topic\"><img src=\"$tipath$topicimage\" border=\"0\" Alt=\"$topictext\" align=\"right\" hspace=\"1\" vspace=\"1\"></a></B></font>\n";
    FormatStory($thetext, $notes, $aid, $informant);
    echo "</td></tr></table>\n"
    ."<br><font color=\"#ffffff\">$morelink</font><br><br>\n"
	."</td>\n"
    ."<td width=\"13\" align=\"left\" valign=\"top\" background=\"themes/FLASH2TechMod/images/storybox-content-right.gif\"><img src=\"themes/FLASH2TechMod/images/storybox-content-right-px.gif\"></td>\n"
    ."</tr></table>\n"

        ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n"
        ."<tr valign=\"top\">\n"
        ."<td width=\"9\" height=\"15\" align=\"left\" valign=\"top\"><img src=\"themes/FLASH2TechMod/images/storybox-bottom-left.gif\"></td>\n"
        ."<td width=\"100%\" height=\"15\" background=\"themes/FLASH2TechMod/images/storybox-bottom-bg.gif\"></td>\n"
        ."<td width=\"120\" height=\"15\" align=\"left\" valign=\"top\"><img src=\"themes/FLASH2TechMod/images/storybox-bottom-right.gif\"></td>\n"
    ."</table>\n"

    ."</td></tr></table>\n"

    ."</td></tr></table><br>\n";
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

        ."<TD WIDTH=8 HEIGHT=16><IMG SRC=\"/themes/FLASH2TechMod/images/sidebox-title-bg_01.gif\" WIDTH=8 HEIGHT=16></TD>\n"
        ."<TD HEIGHT=16 background=\"/themes/FLASH2TechMod/images/sidebox-title-bg_02.gif\">\n"
		."<font class=\"option\" color=\"#00005E\"><b>&nbsp;&nbsp; $title</b></font></TD>\n"
        ."<TD WIDTH=90 HEIGHT=16><IMG SRC=\"/themes/FLASH2TechMod/images/sidebox-title-bg_03.gif\" WIDTH=90 HEIGHT=16></td>\n"

        ."</tr>\n"
        ."</table>\n"
		."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n"
        ."<tr>\n"
        ."<td align=\"left\" valign=\"top\" width=\"15\" height=\"46\"><img src=\"themes/FLASH2TechMod/images/storybox-left.gif\"></td>\n"
        ."<td align=\"left\" valign=\"middle\" background=\"themes/FLASH2TechMod/images/storybox-bg.gif\" width=\"100%\" height=\"46\">\n"
        ."<font class=\"artsubhead\">"._POSTEDON." $datetime "._BY." ";
    	formatAidHeader($aid);
    	if (is_admin($admin)) {
        echo "<br>[ <a href=\"admin.php?op=EditStory&amp;sid=$sid\">"._EDIT."</a> | <a href=\"admin.php?op=RemoveStory&amp;sid=$sid\">"._DELETE."</a> ]\n";
    	}
	
        
        echo "</td>\n"
    ."<td width=\"1\" align=\"left\" valign=\"top\"><img src=\"themes/FLASH2TechMod/images/storybox-right.gif\"></td>\n"
        ."</tr>\n"
        ."</table>\n"
	
		."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n"
        ."<tr>\n"
        ."<td width=\"1\" align=\"left\" valign=\"top\" background=\"themes/FLASH2TechMod/images/sidebox-bar-left.gif\"><img src=\"themes/FLASH2TechMod/images/sidebox-bar-px.gif\"></td>\n"
        ."<td>\n"
	
    ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\"><tr><td class=\"art\"><br>\n"
	."<table border=\"0\" cellspacing=\"2\" cellpadding=\"0\" width=\"20\" height=\"20\" align=\"right\"><tr><td><a href=\"search.php?query=&amp;topic=$topic\"><img src=\"$tipath$topicimage\" border=\"0\" Alt=\"$topictext\" align=\"right\" hspace=\"1\" vspace=\"0\"></a></td></tr></table>\n";
    FormatStory($thetext, $notes="", $aid, $informant);
    echo "<br><br><i>To comment on this article, or view other members opinions, please look directly below this article.</i></td></tr></table><br>\n"
		."</td>\n"
    	."<td width=\"13\" align=\"left\" valign=\"top\" background=\"themes/FLASH2TechMod/images/storybox-content-right.gif\"><img src=\"themes/FLASH2TechMod/images/storybox-content-right-px.gif\"></td>\n"
    	."</tr></table>\n"
		
		."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n"
        ."<tr valign=\"top\">\n"
        ."<td width=\"9\" height=\"15\" align=\"left\" valign=\"top\"><img src=\"themes/FLASH2TechMod/images/storybox-bottom-left.gif\"></td>\n"
        ."<td width=\"100%\" height=\"15\" background=\"themes/FLASH2TechMod/images/storybox-bottom-bg.gif\"></td>\n"
        ."<td width=\"120\" height=\"15\" align=\"left\" valign=\"top\"><img src=\"themes/FLASH2TechMod/images/storybox-bottom-right.gif\"></td>\n"
    ."</table>\n";
}

/************************************************************/
/* Function themesidebox()                                  */
/*                                                          */
/* Control look of your blocks. Just simple.                */
/************************************************************/

function themesidebox($title, $content) {
    echo "<img src=\"themes/FLASH2TechMod/images/box_head.gif\" width=\"165\" height=\"19\" alt=\"\" border=\"0\"><br><table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" background=\"themes/FLASH2TechMod/images/box_headline.gif\" width=\"165\" height=\"25\"><tr><td align=center class=\"menuehead\">\n"
        ."<font class=\"option\" color=\"#00005E\">$title</font>\n"
        ."</td></tr></table>\n"
        ."<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"165\">\n"
        ."<tr valign=\"top\"><td width=\"20\" background=\"themes/FLASH2TechMod/images/box_bg_l.gif\"><img src=\"themes/FLASH2TechMod/images/pixel.gif\" width=\"20\" height=\"10\"></td><td class=\"artsubhead\"><img src=\"themes/FLASH2TechMod/images/pixel.gif\" width=\"115\" height=\"1\"><br>\n"
        ."$content\n"
    ."</td><td width=\"15\" background=\"themes/FLASH2TechMod/images/box_bg_r.gif\"><img src=\"themes/FLASH2TechMod/images/pixel.gif\" width=\"15\" height=\"10\"></td></tr></table><img src=\"themes/FLASH2TechMod/images/box_foot.gif\" width=\"165\" height=\"15\" alt=\"\" border=\"0\"><br>\n";
}

?>
