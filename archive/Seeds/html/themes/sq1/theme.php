<?php

/**************************************************************/
/* Ported Theme Name: sq1 (v1.0) for  PHPNuke 5.5 tested on   */
/* Netscape 4.6-6.2 and IE6                                   */
/* Aimed at lowering grapic calls to give webmaster's room to */
/* expand, speed load time, this layout by globlenet.com      */
/* Created: May 4 2002 & Modifed April 11, 2002 for PHPNUKE   */
/* Ver 5.5 By,MaxG www.globlenet.com support@globlenet.com    */
/**************************************************************/


    $bgcolor1 = "#E9ECEF";
    $bgcolor2 = "#889AAC";
    $bgcolor3 = "#E9ECEF";
    $bgcolor4 = "#E9ECEF";
    $textcolor1 = "#000000";
    $textcolor2 = "#000000";

    function OpenTable($width="100%") {
    global $bgcolor1, $bgcolor2;
    echo "<table width=\"".$width."\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\" class='bg2'><tr><td>\n";
    echo "<table class=\"content2\" width=\"94%\" border=\"0\" cellspacing=\"1\" cellpadding=\"8\"  align=\"center\" bgcolor=\"$bgcolor1\"><tr><td>\n";
    }

    function CloseTable() {
    echo "</td></tr></table></td></tr></table>\n";
    }
    function OpenTable2() {
    global $bgcolor1, $bgcolor2;
    echo "<table class=\"table2\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" bgcolor=\"$bgcolor2\" align=\"center\"><tr><td>\n";
    echo "<table class=\"table1\" border=\"0\" cellspacing=\"1\" cellpadding=\"8\" bgcolor=\"$bgcolor1\"><tr><td>\n";
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
	echo "<font class=\"content\" color=\"#505050\">$thetext<br>$notes</font>\n";
    } else {
	if($informant != "") {
	    $boxstuff = "<a href=\"modules.php?name=Your_Account&amp;op=userinfo&amp;uname=$informant\">$informant</a> ";
	} else {
	    $boxstuff = "$anonymous ";
	}
 
	$boxstuff .= "".translate("writes")." <i>\"$thetext\"</i> $notes\n";
	echo "<font class=\"content\" color=\"#505050\">$boxstuff</font>\n";
    }
    }
    
    function themeheader() {
    global $user, $banners, $sitename, $slogan, $cookie, $prefix,$blocks;
    cookiedecode($user);
    $username = $cookie[1];
    if ($username == "") {
        $username = "Anonymous";
    }
    
    if ($username == "Anonymous") {
	$theuser = "<a href=\"modules.php?name=Your_Account&op=new_user\">Create an account";
    } else {
	$theuser = "Welcome $username!";
    }

    echo "<body bgcolor=\"#889AAC\">\n"
    ."<!-- The theme sq1 created by: MaxG, for PHP-Nuke 5.5, www.globlenet.com support@globlenet.com --->\n\n\n\n\n";
    $result = mysql_query("SELECT count FROM ".$prefix."_counter WHERE type='total' AND var='hits'");
    $result = mysql_fetch_row($result);
     echo "<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\">
     <tr><td valign=\"top\" bgcolor=\"#D2D9DF\">
     <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
     <tr><td width=\"285\" align=\"center\">
     <table border=\"0\" cellpadding=\"4\" cellspacing=\"0\" width=\"100%\">
     <tr><td Valign=middle align=left width=\"100%\"><a href='".$nukeConfig['nuke_url']."/'><font class=\"top\"><b>$sitename</b></font></td></tr>
     <tr><td align=left width=\"100%\">\n"
     ."<form action=\"modules.php?name=Search\" method=\"post\"> <font size=\"2\"><b>".translate("Topics")." </b>\n";
    $toplist = mysql_query("select topicid, topictext from $prefix"._topics." order by topictext");
    echo "<select name=\"topic\"onChange='submit()'>\n"
	."<option value=\"\">".translate("All Topics")."</option>\n";
    while(list($topicid, $topics) = mysql_fetch_row($toplist)) {
    if ($topicid==$topic) { $sel = "selected "; }
	echo "<option $sel value=\"$topicid\">$topics</option>\n";
	$sel = "";
    }
    echo "</select>\n"
     ."</td></tr></table>
     <!-- img src=\"".$nukeConfig['nuke_url']."/themes/sq1/images/logo.gif\" -->
     </a></td><td align=\"right\" >";
     if ($banners) { include("banners.php"); }
     echo" </td></tr></table></td></tr><tr><td valign=\"top\" align=center bgcolor=\"#E9ECEF\">
     <table border=\"0\" cellpadding=\"4\" cellspacing=\"0\" width=\"100%\" bgcolor=\"#D2D9DF\" background=\"themes/sq1/images/bluebar.jpg\">
     <tr><td width=\"25%\"><p align=\"left\"><font class=\"option2\">Welcome: $username</font></td>
     <td width=\"25%\"><p align=\"center\"><font class=\"option2\">$theuser</font></td>
     <td width=\"25%\"><p align=\"center\"><font class=\"option2\">$result[0] Page Views</font></td>
     <td width=\"25%\"><p align=\"right\"><font class=\"option2\">
     <script type=\"text/javascript\">
     <!--   // Array ofmonth Names
     var monthNames = new Array( \"January\",\"February\",\"March\",\"April\",\"May\",\"June\",\"July\",\"August\",\"September\",\"October\",\"November\",\"December\");
     var now = new Date();
     thisYear = now.getYear();
     if(thisYear < 1900) {thisYear += 1900}; // corrections if Y2K display problem
     document.write(monthNames[now.getMonth()] + \" \" + now.getDate() + \", \" + thisYear);
     // -->
     </script></font></td></tr></table>
     <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" height=\"100%\">
     <tr><td width=\"20%\" bgcolor=\"#E9ECEF\" valign=\"top\" align=\"center\"0><br>";
     blocks(left);
     echo "</td><td align=\"center\" valign=\"top\">";
     }
     function themefooter() {
     global $index, $footer;
     echo "</td>";
	 echo "<td width=\"20%\" bgcolor=\"#E9ECEF\" valign=\"top\" align=\"center\"><br>";
     if  ($index == 1) {
     blocks(right);
     }
     echo "</td></tr></table></td></tr><tr>
     <td height=\"30\" valign=\"middle\" bgcolor=\"#D2D9DF\" align=\"center\">";
     footmsg();
     echo "</td>
     </tr></table>";
     }
     function themeindex ($aid, $informant, $time, $title, $counter, $topic, $thetext, $notes, $morelink, $topicname, $topicimage, $topictext) {
     global $tipath, $anonymous;
     echo"<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\" width=\"95%\"><tr><td>"
     ."<table class=content2 border=\"0\" cellpadding=\"3\" cellspacing=\"0\" width=\"100%\"><tr><td>"
     ."<b>$title</b><br>"
     ."<font class=\"tiny\">"
     .""._POSTEDBY." <b>";
     formatAidHeader($aid);
     echo "</b> "._ON." $time $timezone ($counter "._READS.")<br>"
	 ."<b>"._TOPIC."</b> <a href=\"modules.php?name=Search&amp;new_topic=$topic\">$topictext</a><br>"
	 ."</font></td></tr><tr><td>";
     FormatStory($thetext, $notes, $aid, $informant);
     echo "<br><br>"
     ."</td></tr><tr><td align=\"center\">"
     ."<font class=\"content\">$morelink</font>"
     ."</td></tr></table></td></tr></table>"
	 ."<br>";
     }
     function themearticle ($aid, $informant, $datetime, $title, $thetext, $topic, $topicname, $topicimage, $topictext) {
     global $admin, $sid, $tipath;
     if ("$aid" == "$informant") {
	 echo"
	 <table border=0 cellpadding=0 cellspacing=0 align=center width=100%><tr><td>
	 <table border=0 cellpadding=3 cellspacing=1 width=100%><tr><td>
	 <b>$title</b><br><font class=tiny>".translate("Posted on ")." $datetime";
	 if ($admin) {
	 echo "&nbsp;&nbsp; $font2 [ <a href=admin.php?op=EditStory&sid=$sid>".translate("Edit")."</a> | <a href=admin.php?op=RemoveStory&sid=$sid>".translate("Delete")."</a> ]";
	 }
	 echo "
	 <br>".translate("Topic").": <a href=modules.php?name=Search&amp;new_topic=$topic>$topictext</a>
	 </td></tr><tr><td>
	 $thetext
	 </td></tr></table></td></tr></table><br>";
     } else {
	 if($informant != "") $informant = "<a href=\"user.php?op=userinfo&uname=$informant\">$informant</a> ";
	 else $boxstuff = "$anonymous ";
	 $boxstuff .= "".translate("writes")." <i>\"$thetext\"</i> $notes";
	 echo "
	 <table border=0 cellpadding=0 cellspacing=0 align=center width=100%><tr><td>
	 <table border=0 cellpadding=3 cellspacing=1 width=100%><tr><td>
	 <b>$title</b><br><font class=content>".translate("Contributed by ")." $informant ".translate("on")." $datetime</font>";
	 if ($admin) {
	 echo "&nbsp;&nbsp; $font2 [ <a href=admin.php?op=EditStory&sid=$sid>".translate("Edit")."</a> | <a href=admin.php?op=RemoveStory&sid=$sid>".translate("Delete")."</a> ]";
	 }
	 echo "<br>".translate("Topic").": <a href=modules.php?name=Search&amp;new_topic=$topic>$topictext</a>
	 </td></tr><tr><td>
	 $thetext
	 </td></tr></table></td></tr></table><br>";
     }
     }
     function themesidebox($title, $content) {
     echo "<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"2\">
     <tr><td class=\"content1\" bgcolor=\"#889AAC\">&nbsp;<b><font color=\"#E9ECEF\">$title</font></b></td>
     </tr>
     <tr><td valign=\"top\">$content</td>
     </tr></table><br>";
}

?>
