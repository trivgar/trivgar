<?php

$bgcolor1 = "#FFFFFF";
$bgcolor2 = "#A2CCEE";
$bgcolor3 = "#B8D4EF";
$textcolor1 = "#FFFFFF";
$textcolor2 = "#000000";



function OpenTable() {
    global $bgcolor1, $bgcolor2;
    echo "<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" bgcolor=\"$bgcolor2\"><tr><td>\n";
    echo "<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"8\" bgcolor=\"$bgcolor1\"><tr><td>\n";
}

function OpenTable2() {
    global $bgcolor1, $bgcolor2;
    echo "<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" bgcolor=\"$bgcolor2\" align=\"center\"><tr><td>\n";
    echo "<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"8\" bgcolor=\"$bgcolor1\"><tr><td>\n";
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
	echo "<font size=\"2\">$thetext<br>$notes</font>\n";
    } else {
	if($informant != "") {
	    $boxstuff = "<a href=\"modules.php?name=Your_Account&amp;op=userinfo&amp;uname=$informant\">$informant</a> ";
	} else {
	    $boxstuff = "$anonymous ";
	}
	$boxstuff .= ""._WRITES." <i>\"$thetext\"</i> $notes\n";
	echo "<font size=\"2\">$boxstuff</font>\n";
    }
}

function themeheader() {
   
    global $user, $banners, $sitename, $slogan, $prefix, $cookie, $topicstb;
    cookiedecode($user);
    $username = $cookie[1];
    if ($username == "") {
        $username = "Anonymous";
    }
    echo "<body bgcolor=#FFFFFF background=themes/Reo/images/fondo_principal.gif link=#000000 vlink=#000000 alink=#000000>


<style>
FONT, TD, BODY, P, DIV, INPUT, TEXTAREA, FORM 
{font-family: Verdana,Arial; 
font: normal 11px;}

body { scrollbar-face-color: #A2CCEE; scrollbar-shadow-color: #000000; scrollbar-highlight-color: #FFFFFF; scrollbar-3dlight-color: #000000; scrollbar-darkshadow-color: #EEEEEE; scrollbar-track-color: #A2CCEE; scrollbar-arrow-color: #000000 }
/* Black body text */
.ctnegro, a.ctnegro:link, a.ctnegro:visited, a.ctnegro:active, table.ctnegro, td.ctnegro
{ color:#000000; font-size : 11px; font-family : tahoma,verdana,arial,helvetica; font-weight : normal; text-decoration: none }

/* White body text */
.ctblanco, a.ctblanco:link, a.ctblanco:visited, a.ctblanco:active, table.ctblanco, td.ctblanco
{ color:#000000; font-size : 11px; font-family : tahoma,verdana,arial,helvetica; font-weight : normal; text-decoration: none }

/* Black title */
.tnegro, a.tnegro:link, a.tnegro:visited, a.tnegro:active, table.tnegro, td.tnegro, h1.tnegro
{ color:#000000; font-size : 16px; font-family : arial,helvetica; font-weight : bold; text-decoration: none }

/* Black Subtitle */
.stnegro, a.stnegro:link, a.stnegro:visited, a.stnegro:active, table.stnegro, td.stnegro
{ color:#000000; font-size : 12px; font-family : tahoma,verdana,arial,helvetica; font-weight : normal; text-decoration: none }

/* picture hover */
.resalta1, a.resalta1:link, a.resalta1:visited, table.resalta1, td.resalta1
{ color: #000000; font-size : 11px; font-family : tahoma,arial,helvetica; font-weight : bold; text-decoration: none }
a.resalta1:hover, a.resalta1:active
{ background: #A2CCEE; color: #FFFFFF;  font-size : 11px; font-family : tahoma,arial,helvetica; font-weight : bold; text-decoration: none}

/* hover  */
.resalta0, a.resalta0:link, a.resalta0:visited, table.resalta0, td.resalta0
{ color: #000000; font-size : 11px; font-family : tahoma,arial,helvetica; font-weight : regular; text-decoration: none }
a.resalta0:hover, a.resalta0:active
{ color: #000000;  font-size : 11px; font-family : tahoma,arial,helvetica; font-weight : regular; text-decoration: underline }


</style>

";
global $slogan;
echo "

<table border=0 cellpadding=0 cellspacing=0 width=760 height=30 align=center>
<tr>
<td colspan=4 height=1 bgcolor='#5C5C5C'><img src=themes/Reo/images/pix.gif height=1 width=1></td>
</tr>

<tr>
<td width='1' bgcolor='#5C5C5C'><img src=themes/Reo/images/pix.gif height=1 width=1></td>
<td width='401' class=ctnegro>&nbsp;"._WELCOMETO." $sitename ,&nbsp; $slogan</td>
<td height='28' width='362' background='themes/Reo/images/fondo1.gif' valign='middle' align='right'>

	<table border='0' align=left>
	<form action=modules.php?name=Search method=post>
	<tr>
	<td align=right valign=middle class=ctnegro>&nbsp;"._SEARCH." </td>
	<td valign=middle><input type=text class=resalta1 style='border: solid 1px #000000; background : White' name=query ></td>
	</tr>
	</form>
	</table>
	
	<table border='0' align=left>
	<form action=\"modules.php?name=Search\" method=post>
	<tr>
	<td class=ctnegro valign='middle'>".translate("Topics")."</td>
	<td class=ctnegro valign='middle'>";
    $toplist = mysql_query("select topicid, topictext from $prefix"._topics." order by topictext");
    echo "<SELECT class=resalta1 style='border: solid 1px #000000; background : #FFFFFF' NAME=\"topic\"onChange='submit()'>" ;
    echo "<OPTION VALUE=\"\">".translate("All Topics")."</option>\n";
    while(list($topicid, $topics) = mysql_fetch_row($toplist)) {
    if ($topicid==$topic) { $sel = "selected "; }
	echo "<option $sel value=\"$topicid\">$topics</option>\n";
    $sel = "";
    }
	echo "
	</td>
	</tr>
	</form>
	</table>



</td>
<td width=1 bgcolor=#5C5C5C><img src=themes/Reo/images/pix.gif height=1 width=1></td>
</tr>

<tr>
<td colspan=4 height=1 bgcolor=#5C5C5C><img src=themes/Reo/images/pix.gif height=1 width=1></td>
</tr>
</table>




<table border=0 cellpadding=0 cellspacing=0 width=760 align=center>
<tr>
<td valign=top width=237>

	    ";
		include ('themes/Reo/includes/Reoloop.php');
		echo "		

</td>
<td valign=top width=523 align=right>

		<table border=0 cellpadding=0 cellspacing=0 width=523 height=72 align=center>
		<tr>		
		<td height=72 width=523 valign=top align=right class=ctblanco background=themes/Reo/images/fondo2.jpg>
		<td height=72 width=1 bgcolor='#5C5C5C'><img src=themes/Reo/images/pix.gif height=1 width=1></td>
		</tr>
		</table>

	    ";
		include ('themes/Reo/includes/yourown.php');
		echo "
		";
		include ('themes/Reo/includes/navbar.php');
		echo "

</td>
</tr>

</table>
<br>
<table width=760 align=center cellpadding=0 cellspacing=0 border=0>
<tr>

<td width=136 valign=top bgcolor=#EEEEEE>";


  blocks(left);
    

echo "</TD>
    <TD width=8>&nbsp;&nbsp;</TD>
    <TD valign=top>";
 
 



}

function themefooter() {
  


  global $index;
    if ($index == 1) {
echo "  <td background=themes/Reo/images/pix.gif width=8 valign=top>&nbsp;</td>
    <td width=136 valign=top bgcolor=#EEEEEE>";
 blocks(right);
}
echo "</tr></table></td></tr></table>";
?>


<?php
echo "<br><table width=760 cellpadding=0 cellspacing=0 align=center border=0 bgcolor=#B8D4EF>";
echo "<tr><td colspan=3 bgcolor=#000000 height=1><img src=themes/Reo/images/pix.gif height=1 width=1></td></tr>";
echo "<tr><td bgcolor=#000000 width=1><img src=themes/Reo/images/pix.gif height=1 width=1></td><td align=center><br>";
footmsg();
echo "<br></td><td bgcolor=#000000 width=1><img src=themes/Reo/images/pix.gif height=1 width=1></td></tr>";
echo "<tr><td colspan=3 bgcolor=#000000 height=1><img src=themes/Reo/images/pix.gif height=1 width=1></td></tr></table>";

}

function themeindex ($aid, $informant, $datetime, $title, $counter, $topic, $thetext, $notes, $morelink, $topicname, $topicimage, $topictext) {
        global $tipath, $anonymous;
        ?>
        <table width="100%" border="0" cellpadding="0" cellspacing="0">
                <tr valign="top">
                <td align="right">
                        <table height="15" bgcolor="#B8D4EF" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                        <td valign="middle"><img src="themes/Reo/images/corner.gif" height=15></td>
                        <td background="themes/Reo/images/cornerwall.gif" class="ctblanco">&nbsp;<font size=1><B><?php echo"$title"; ?></font></B>&nbsp;</td>
                        <td valign="middle"><img src="themes/Reo/images/corner2.gif" height=15></td>
                </tr>
                        </table>
                </td>
                </tr>
                </table>

                <table border="0" cellpadding="0" cellspacing="0">
                <tr bgcolor="#000000"><td colspan="3"><img src="themes/Reo/images/pix.gif" width="1" height="1"></td></tr>
                <tr bgcolor="#e6e6e6">
                        <td background="themes/Reo/images/gl.gif"><img src="themes/Reo/images/pix.gif" width="11" height="11" alt=""></td>
                        <td width="100%">
                                <table width="100%" border="0" cellpadding="5" cellspacing="0"><tr>
                                <td class="ctnegro"><?php echo translate("Posted by "); ?> <?php formatAidHeader($aid) ?> <?php echo translate("on"); ?> <?php echo"$datetime"; ?> (<?php echo $counter; ?> <?php echo translate("reads"); ?>)</font></td>
                                </tr></table>
                        </td>
                        <td background="themes/Reo/images/gr.gif"><img src="themes/Reo/images/pix.gif" width="11" height="11" alt=""></td>
                </tr>
                <tr bgcolor="#000000"><td colspan="3"><img src="themes/Reo/images/pix.gif" width="1" height="1"></td></tr>
                <tr bgcolor="#FFFFFF">
                <td background="themes/Reo/images/wl.gif"><img src="themes/Reo/images/pix.gif" width="11" height="11" alt=""></td>
                <td width="100%">
                        <table border=0 width="100%" border="0" cellpadding="5" cellspacing="0">
                        <tr>
                        <td>
                        <a href="modules.php?name=Search&new_topic=<?php echo"$topic"; ?>&author="><img src=<?php echo"$tipath$topicimage"; ?> border=0 bordercolor="#000000" Alt=<?php echo"\"$topictext\""; ?> align=left hspace=10 vspace=10></a>
                        <?php echo "<font size=2>$thetext"; ?>
            </td>
                        </tr>
                        </table>
                </td>
        <td background="themes/Reo/images/wr.gif"><img src="themes/Reo/images/pix.gif" width="11" height="11" alt=""></td>
                </tr>
                <tr bgcolor="#000000"><td colspan="3"><img src="themes/Reo/images/pix.gif" width="1" height="1"></td></tr>
                </table>

                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tr>
                <td width="100%">
                        <table align="right" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                        <td valign="middle"><img src="themes/Reo/images/bottomleft.gif"></td>
                        <td background="themes/Reo/images/bottomwall.gif" class="ctblanco">&nbsp;<?php echo"$morelink"; ?>&nbsp;</td>
                        <td valign="middle"><img src="themes/Reo/images/bottomright.gif"></td>
                        </tr>
                        </table>
                </td>
                </tr>
                </table>
                <BR>

<?php 
       
}



function themearticle ($aid, $informant, $datetime, $title, $thetext, $topic, $topicname, $topicimage, $topictext) {
        global $admin, $sid, $tipath;


?>
                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                <tr valign="top">
                <td align="right">
                        <table height="22" bgcolor="#A2CCEE" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                        <td valign="middle"><img src="themes/Reo/images/corner.gif"></td>
                        <td background="themes/Reo/images/cornerwall.gif" class="ctblanco">&nbsp;<B><?php echo"$title"; ?></B>&nbsp;</td>
                        <td valign="middle"><img src="themes/Reo/images/corner2.gif"></td>
                </tr>
                        </table>
                </td>
                </tr>
                </table>

                <table border="0" cellpadding="0" cellspacing="0">
                <tr bgcolor="#000000"><td colspan="3"><img src="themes/Reo/images/pix.gif" width="1" height="1"></td></tr>
                <td background="themes/Reo/images/gl.gif"><img src="themes/Reo/images/pix.gif" width="11" height="11" alt=""></td>
                <td width="100%">
                                <table bgcolor="#E6E6E6" width="100%" border="0" cellpadding="5" cellspacing="0"><tr>
                                <td class="ctnegro"><?php echo translate("Posted by "); ?> <?php formatAidHeader($aid) ?> <?php echo translate("on"); ?> <?php echo"$datetime $timezone"; ?></font>

<?php
if ($admin) {
    echo "<br><br><center><font size=2> [ <a href=admin.php?op=EditStory&sid=$sid>".translate("Edit")."</a> | <a href=admin.php?op=RemoveStory&sid=$sid>".translate("Delete")."</a> ]</center>";
}
?>
                                </td>
                                </tr>
                                </table>
                </td>
                <td background="themes/Reo/images/gr.gif"><img src="themes/Reo/images/pix.gif" width="11" height="11" alt=""></td>
                </tr>
                <tr bgcolor="#000000"><td colspan="3"><img src="themes/Reo/images/pix.gif" width="1" height="1"></td></tr>
                <tr bgcolor="#FFFFFF">
                <td background="themes/Reo/images/wl.gif"><img src="themes/Reo/images/pix.gif" width="11" height="11" alt=""></td>
                <td width="400">
                        <table width="400" border="0" cellpadding="5" cellspacing="0">
                        <tr>
                        <td>
                        <?php echo "<a href=modules.php?name=Search&new_topic=$topic&author=><img src=$tipath$topicimage border=1 bordercolor=#000000 Alt=\"$topictext\" align=left hspace=10 vspace=10></a>"; ?>
                        <?php echo "<font size=2>$thetext"; ?>
                </td>
                        </tr>
                        </table>
                </td>
        <td background="themes/Reo/images/wr.gif"><img src="themes/Reo/images/pix.gif" width="11" height="11" alt=""></td>
                </tr>
                <tr bgcolor="#000000"><td colspan="3"><img src="themes/Reo/images/pix.gif" width="1" height="1"></td></tr>
               </table>
<?php


}




function themesidebox($title, $content) {
        ?>
        <table width="100%" border="0" cellpadding="0" cellspacing="0" valign="top" bgcolor="#EEEEEE">
        <tr>
        <td width="21" height="22"><img src="themes/Reo/images/leftcorner.gif"></td>
        <td height="22" class="ctnegro" background="themes/Reo/images/tdpaper.gif">&nbsp;<B><?php echo"$title"; ?></B></td>
        <td width="5" height="22"><img src="themes/Reo/images/rightcorner.gif"></td>
        </tr>
        </table>


        <br>

        <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#EEEEEE">
        <tr>
                <td class="ctnegro">
<?php


if (file_exists($content)) {
	$fp = fopen ($content, "r");
	$content = fread($fp, filesize($content));
	fclose ($fp);
	$content = "?>$content<?";
	echo eval($content);
} else {
	echo $content;

}
?></td>
        </tr>
        </table><br><br>

<?php
}

?>

