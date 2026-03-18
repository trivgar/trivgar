<?php

$bgcolor1 = "#FFFFFF";
$bgcolor2 = "#A3A48C";
$bgcolor3 = "#eeeeee";
$bgcolor4 = "#eeeeee";
$textcolor1 = "";
$textcolor2 = "#ffffff";

function OpenTable() {
    global $bgcolor1, $bgcolor2;
    echo "<center><table width=\"96%\" border=\"0\" cellspacing=\"5\" cellpadding=\"2\" bgcolor=\"$bgcolor2\"><tr><td>\n";
    echo "<center><table width=\"98%\" border=\"0\" cellspacing=\"5\" cellpadding=\"2\" bgcolor=\"$bgcolor1\"><tr><td>\n";
}

function CloseTable() {
    echo "</td></tr></table></center></td></tr></table></center>\n";
}

function OpenTable2() {
    global $bgcolor1, $bgcolor2;
    echo "<table width=\"96%\" border=\"0\" cellspacing=\"8\" cellpadding=\"5\" bgcolor=\"$bgcolor4\" align=\"center\"><tr><td>\n";
    echo "<table width=\"98%\" border=\"0\" cellspacing=\"5\" cellpadding=\"2\" bgcolor=\"$bgcolor3\"><tr><td>\n";
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
    global $slogan, $sitename, $banners;
echo "<body topmargin=0 leftmargin=0 bgcolor=000000><table cellpadding=0 cellspacing=0 border=0 width=775 align=center bgcolor=A6AD8B><tr><td align=left><a href=$nuke_url><img src=themes/NoBlocks/images/logo.gif border=0></a></td><td align=right width=100%></td><td align=right><center><table width=\"468\"><tr><td>
";
if ($banners) {
    include("banners.php");
}
echo "
</center></td><tr></table></td>";
echo "</td></tr></table>";
echo "
<center><table cellpadding=0 cellspacing=1 border=0 width=775 bgcolor=9A0A14><tr><td align=right height=26>
<SCRIPT>
function getSelect(s) {
  return s.options[s.selectedIndex].value
}
</SCRIPT>
<FORM style=margin:0; text-align:center; word-spacing:0; background-color:000000>
<SELECT NAME=list SIZE=1 OnChange=location=getSelect(this) style=color:A3A48C style=background-color:000000>
<OPTION value=#>Take me to...
<OPTION value=index.php>Home
<OPTION value=modules.php?name=Sections>Sections
<OPTION value=modules.php?name=Reviews>Reviews
<OPTION value=modules.php?name=Web_Links>Links
<OPTION value=modules.php?name=Surveys>Polls
<OPTION value=modules.php?name=Your_Account>My Account
<OPTION value=modules.php?name=Downloads>Downloads
<OPTION value=modules.php?name=Members_List>Members List
<OPTION value=modules.php?name=Top>My Top 10
<OPTION value=modules.php?name=Statistics>Statistics
<OPTION value=modules.php?name=Encyclopedia>Encyclopedia
<OPTION value=modules.php?name=Stories_Archive>Archives
<OPTION value=modules.php?name=Search>Search
<OPTION value=modules.php?name=Recommend_Us>Recommend
<OPTION value=modules.php?name=Feedback>Feedback
</SELECT></FORM></td><td width=4></td></tr></table></center>
<table width=775 align=center cellpadding=5 cellspacing=2 border=0  bgcolor=9A0A14><tr>";

echo "<td valign=top width=100%><font class=\"content\" color=\"ffffff\">";
}

function themefooter() {
    global $index;
if ($index == 1) {
    echo "</font>";
    echo "</td>";
}
echo "</tr></table>";
footmsg();
}

function themeindex ($aid, $informant, $datetime, $title, $counter, $topic, $thetext, $notes, $morelink, $topicname, $topicimage, $topictext) {
	global $anonymous;
	if ("$aid" == "$informant") { ?>
	<center><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor=""><tr valign="top" bgcolor="#A3A48C">
	<td><img src="themes/NoBlocks/images/cl.gif" alt=""></td>
	<td width="100%"><font class="option"><B><?php echo"$title"; ?></B></font></td>
	<td align="center"><img src="themes/NoBlocks/images/cr.gif" alt=""></td></tr></table>
	<table border="0" cellpadding="0" cellspacing="0" width="100%">
 	<tr bgcolor="#BDB663">
	<td background="themes/NoBlocks/images/gl.gif"><img src="themes/NoBlocks/images/pix.gif" width="11" height="11" alt=""></td>
	<td width="100%"><font class="tiny"><?php echo translate("Posted by "); ?> <?php formatAidHeader($aid) ?> <?php echo translate("on"); ?> <?php echo"$datetime $timezone"; ?> (<?php echo $counter; ?> <?php echo translate("reads"); ?>)</font></td>
 	<td><img src="themes/NoBlocks/images/pix.gif" width="11" height="11" alt=""></td>
	</tr></table><table border="0" cellpadding="0" cellspacing="0" width="100%">
	<tr bgcolor="#ffffff">
	<td background="themes/NoBlocks/images/wl.gif"><img src="themes/NoBlocks/images/pix.gif" width="11" height="11" alt=""></td>
	<td width="100%"><table width="100%" border="0" cellpadding="5" cellspacing="3"><tr><td>
	<a href="modules.php?name=Search&amp;query=&topic=<?php echo"$topic"; ?>&author="><img src=<?php echo"images/topics/$topicimage"; ?> border=0 Alt=<?php echo"\"$topictext\""; ?> align=right hspace=10 vspace=10></a>
	<font class="content"><?php echo "$thetext"; ?> </font>
        </td></tr></table></td>
        <td><img src="themes/NoBlocks/images/pix.gif" width="11" height="11" alt=""></td>
	</tr>
	<tr bgcolor="#cccccc"><td colspan="3"></td></tr>
	</table><table border="0" cellpadding="0" cellspacing="0" width="100%">
	<tr bgcolor="#ffffff">
	<td background="themes/NoBlocks/images/wl_cccccc.gif" bgcolor="cccccc"><img src="themes/NoBlocks/images/pix.gif" width="11" height="11" alt=""></td>
	<td width="100%">
	<table width="100%" border="0" cellpadding="2" cellspacing="0"> 
	<tr><td bgcolor="#cccccc"><font class="content"><?php echo"$morelink"; ?></font></td></tr></table>
	</td>
	</tr>
	</table><BR>
<?php	}
}

function themearticle ($aid, $informant, $datetime, $title, $thetext, $topic, $topicname, $topicimage, $topictext) {
	global $admin, $sid;
	if ("$aid" == "$informant") { ?>
	<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#DDDDDD"><tr valign="top" bgcolor="#A3A48C">
	<td><img src="themes/NoBlocks/images/cl.gif"></td>
	<td width="100%"><font class="option" color="#FFFFFF"><B><?php echo"$title"; ?></B></font>
	</td>
 	<td align="right"><img src="themes/NoBlocks/images/cr.gif"></td>
       	</tr></table>
	<table border="0" cellpadding="0" cellspacing="0" width="100%"><tr bgcolor="#e6e6e6">
	<td background="themes/NoBlocks/images/gl.gif"><img src="themes/NoBlocks/images/pix.gif" width="11" height="11" alt=""></td>
	<td bgcolor="#BDB663" width="100%"><font class="tiny"><?php echo translate("Posted by "); ?> <?php formatAidHeader($aid) ?> <?php echo translate("on"); ?> <?php echo"$datetime $timezone"; ?></font>

<?php
if ($admin) {
    echo "<a href=admin.php?op=EditStory&sid=$sid>".translate("Edit")."</a> - <a href=admin.php?op=RemoveStory&sid=$sid>".translate("Delete")."</a>";
}
?>
	</td>
	</tr></table><table border="0" cellpadding="0" cellspacing="0" bgcolor="ffffff" width="100%>
	<tr bgcolor="#ffffff">
	<td background="themes/NoBlocks/images/wl.gif"><img src="themes/NoBlocks/images/pix.gif" width="11" height="11" alt=""></td>
	<td>
   	<?php echo "<a href=modules.php?name=Search&amp;query=&topic=$topic&author=><img src=images/topics/$topicimage border=0 Alt=\"$topictext\" align=right hspace=10 vspace=10></a>"; ?>
	<font class="content"><?php echo "$thetext"; ?> </font>
        </td>
	</tr>
	<tr bgcolor="#9A0A14" height="12"><td colspan="4"></td></tr>
	</table>
<?php	} else {
	if($informant != "") $boxstuff = "<a href=\"modules.php?name=Your_Account&amp;op=userinfo&uname=$informant\">$informant</a> ";
	else $boxstuff = "$anonymous ";
	$boxstuff .= "".translate("writes")." <i>\"$thetext\"</i> $notes";
?>	<table width="100%" border="0" cellpadding="2" cellspacing="0" bgcolor="#DDDDDD"><tr valign="top" bgcolor="#A3A48C">
	<td><img src="themes/NoBlocks/images/cl.gif" width="7" height="10" alt=""></td>
	<td width="100%">
	<table width="100%" border="0" cellpadding="2" cellspacing="0"><tr><td>
	<font class="option" color="#FFFFFF"><B><?php echo"$title"; ?></B></font>
	</td></tr></table>
	</td><td align="right"><img src="themes/NoBlocks/images/cr.gif" width="7" height="10" alt=""></td>
       	</tr></table>
	<table border="8" cellpadding="0" cellspacing="0"><tr bgcolor="#e6e6e6">
	<td background="themes/NoBlocks/images/gl.gif"><img src="themes/NoBlocks/images/pix.gif" width="11" height="11" alt=""></td>
	<td width="100%">
	<table width="100%" border="0" cellpadding="2" cellspacing="0"><tr>
	<td><font class="tiny"><?php echo translate("Posted by "); ?> <?php formatAidHeader($aid) ?><?php echo"$datetime $timezone"; ?></font>
<?php	}
}

function themesidebox($title, $content) { 
?>	
    	<table width="105" border="0" cellpadding="0" cellspacing="0">
	<tr valign="top" bgcolor="#A3A48C">
	<td><img src="themes/NoBlocks/images/cl.gif"></td>
	<td><font color="#ffffff"><B><?php echo"$title"; ?></B></font></td>
	<td align="right"><img src="themes/NoBlocks/images/cr.gif"></td>
	</tr>
	</table>
	<table width="100%" border="0" cellpadding="2" cellspacing="0">
	<tr bgcolor="#ffffff">
	<td width="100%"><font color="000000">
	<?php echo"$content"; ?>
	</font></td>
	</tr>
	</table><br>
<?php
}

?>
