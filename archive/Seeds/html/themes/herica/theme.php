<?php

$bgcolor1 = "#d4d4d4";
$bgcolor2 = "#ffccff";
$bgcolor3 = "#d4d4d4";
$bgcolor4 = "#ffccff";
$textcolor1 = "#000000";
$textcolor2 = "#000000";



function OpenTable() {
    global $bgcolor1, $bgcolor2;
    echo "<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\"><tr><td>\n";
    echo "<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"8\"><tr><td>\n";
}

function OpenTable2() {
    global $bgcolor1, $bgcolor2;
    echo "<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\"><tr><td>\n";
    echo "<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"8\"><tr><td>\n";
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
    echo "<body bgproperties=fixed bgcolor=#ffffff background=themes/herica/gfx/fondo_principal.gif>


<style>
FONT, TD, BODY, P, DIV, INPUT, TEXTAREA, FORM 
{font-family: Verdana,Arial; 
font: normal 11px;}

body { scrollbar-face-color: #ffccff; scrollbar-shadow-color: #000000; scrollbar-highlight-color: #FFFFFF; scrollbar-3dlight-color: #000000; scrollbar-darkshadow-color: #EEEEEE; scrollbar-track-color: #FFFFFF; scrollbar-arrow-color: #000000 }
/* Black body text */
.ctnegro, a.ctnegro:link, a.ctnegro:visited, a.ctnegro:active, table.ctnegro, td.ctnegro
{ color:#000000; font-size : 11px; font-family : tahoma,verdana,arial,helvetica; font-weight : normal; text-decoration: none }

/* White body text */
.ctblanco, a.ctblanco:link, a.ctblanco:visited, a.ctblanco:active, table.ctblanco, td.ctblanco
{ color:#FFFFFF; font-size : 11px; font-family : tahoma,verdana,arial,helvetica; font-weight : normal; text-decoration: none }

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
{ background: #d4d4d4; color: #FFFFFF;  font-size : 11px; font-family : tahoma,arial,helvetica; font-weight : bold; text-decoration: none}

/* hover  */
.resalta0, a.resalta0:link, a.resalta0:visited, table.resalta0, td.resalta0
{ color: #000000; font-size : 11px; font-family : tahoma,arial,helvetica; font-weight : regular; text-decoration: none }
a.resalta0:hover, a.resalta0:active
{ color: #000000;  font-size : 11px; font-family : tahoma,arial,helvetica; font-weight : regular; text-decoration: underline }


</style>

";
global $slogan;
echo "

<table border=0 cellpadding=0 cellspacing=0 width=100% align=center>
<tr>
<td valign=top width=237>

	    ";
		include ('themes/herica/includes/hericaloop.php');
		echo "		

<hr><center>
<font color=#000000>
<b>
<script type=\"text/javascript\">
<!--   // Array ofmonth Names
var monthNames = new Array( \"Janeiro\",\"Fevereiro\",\"Março\",\"Abril\",\"Maio\",\"Junho\",\"Julho\",\"Agosto\",\"Setembro\",\"Outubro\",\"Novembro\",\"Dezembro\");
var now = new Date();
thisYear = now.getYear();
if(thisYear < 1900) {thisYear += 1900}; // corrections if Y2K display problem
document.write(now.getDate() + \"&nbsp;de&nbsp;\" + monthNames[now.getMonth()] + \"&nbsp;de&nbsp;\" + thisYear);
// -->
</script></font></b></center></td>
<td valign=top width=100% align=right>

		<table border=0 cellpadding=0 cellspacing=0 width=100% height=80 align=center>
		<tr>		
		<td align='right' height=76 width=100% valign=top align=right class=ctblanco background=themes/herica/gfx/fondo2.jpg>
<form action=modules.php?name=Your_Account method=post><font color=#000000#><b>Usuário:</b>
	<input type=text name=uname size=14 maxlength=25><b>Senha:</font></b>
	<input type=password name=pass size=14 maxlength=25>
	<input type=hidden name=op value=login>
	<input type=submit value=login>
	</form>
<br><br>

</td>		

		<td height=76 aligh='center'></td>
		</tr>
		<hr></table><hr>

	   
		";
		include ('themes/herica/includes/navbar.php');
		echo "
</td>
</tr>

</table>
<hr>
<table width=100% align='center' cellpadding=0 cellspacing=0 border=0>
<tr>

<td width=136 valign=top>";


  blocks(left);
    

echo "</TD>
    <TD width=8>&nbsp;&nbsp;</TD>
    <TD valign=top>";
 
 



}

function themefooter() {
  


  global $index;
    if ($index == 1) {
echo "  <td width=8 valign=top>&nbsp;</td>
    <td width=136 valign=top>";
 blocks(right);
}
echo "</tr></table></td></tr></table>";
?>


<?php
echo "<table width=100% cellpadding=0 cellspacing=0 align=center border=0>";
echo "<tr></td></tr>";
echo "<tr><td></td><td align=center><hr>";
footmsg();
echo "<hr></td><td></td></tr>";
echo "<tr><td colspan=3></td></tr></table>";

}

function themeindex ($aid, $informant, $datetime, $title, $counter, $topic, $thetext, $notes, $morelink, $topicname, $topicimage, $topictext) {
        global $tipath, $anonymous;
        ?>
        <table width="100%" border="0" cellpadding="0" cellspacing="0">
                <tr valign="top">
                <td align="left">
                        <table height="22" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                        <td valign="middle"></td>
                        <td>&nbsp;<B><?php echo"$title"; ?></B>&nbsp;</td>
                        <td valign="middle"></td>
                </tr>
                        </table>
                </td>
                </tr>
                </table>

                <table border="0" cellpadding="0" cellspacing="0">
                <tr><td colspan="3"></td></tr>
                <tr>
                        <td><img src="themes/herica/gfx/pix.gif" width="8" height="11" alt=""></td>
                        <td width="100%">
                                <table width="100%" border="0" cellpadding="5" cellspacing="0"><tr><hr>
                                <td align='left' class="ctnegro"><?php echo translate("Posted by "); ?> <?php formatAidHeader($aid) ?> <?php echo translate("on"); ?> <?php echo"$datetime $timezone"; ?> (<?php echo $counter; ?> <?php echo translate("reads"); ?>)</font></td>
                                </tr></table>
                        </td>
                        <td><img src="themes/herica/gfx/pix.gif" width="11" height="11" alt=""></td>
                </tr>
                <tr><td colspan="3"></td></tr>
                <tr>
                <td><img src="themes/herica/gfx/pix.gif" width="11" height="11" alt=""></td>
                <td width="100%">
                        <table border=0 width="100%" border="0" cellpadding="5" cellspacing="0">
                        <tr>
                        <td aligh='left'>
                <a href="modules.php?name=Search&new_topic=<?php echo"$topic"; ?>&author="><img src=<?php echo"$tipath$topicimage"; ?> border=0 bordercolor="#000000" hspace="5" vspace="5" Alt=<?php echo"\"$topictext\""; ?> align=right &nbsp;></a>
                        <?php echo "<font size=2>$thetext"; ?>

            </td>
                        </tr>
                        </table>
                </td>
        <td><img src="themes/herica/gfx/pix.gif" width="11" height="11" alt=""></td>
                </tr>
                <tr><td colspan="3"></td></tr>
                </table>

                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tr>
                <td width="100%">
                        <table align="center" border="0" cellpadding="5" cellspacing="0">
                        <tr>
                        <td><font class="tnegro"></font> <font size="2"><?php echo"$morelink"; ?></font></td>
                        </tr>
                        <hr></table>
                </td>
                </tr>
                </table>
                <BR>

<?php 
       
}



function themearticle ($aid, $informant, $datetime, $title, $thetext, $topic, $topicname, $topicimage, $topictext) {
    global $admin, $sid;
    if ("$aid" == "$informant") {
	echo"
	<table border=0 cellpadding=0 cellspacing=0 align=center width=100%><tr><td>
	<table border=0 cellpadding=3 cellspacing=1 width=100%><tr><td>
	<b>$title</b><br><font class=tiny>".translate("Posted on ")." $datetime";
	if ($admin) {
	    echo "&nbsp;&nbsp; $font2 [ <a href=admin.php?op=EditStory&sid=$sid>".translate("Edit")."</a> | <a href=admin.php?op=RemoveStory&sid=$sid>".translate("Delete")."</a> ]";
	}
	echo "
	<br>".translate("Topic").": <a href=search.php?query=&topic=$topic&author=>$topictext</a>
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

	echo "
	<br>".translate("Topic").": <a href=search.php?query=&topic=$topic&author=>$topictext</a>
	</td></tr><tr><td>
	$thetext
	</td></tr></table></td></tr></table><br>";
    }
}




function themesidebox($title, $content) {
        ?>
        <table width="130" border="0" cellpadding="0" cellspacing="0" valign="top">
        <tr>
        <td width="21" height="22"><img src="themes/herica/gfx/leftcorner.gif"></td>
        <td height="22" class="ctnegro" background="themes/herica/gfx/tdpaper.gif">&nbsp;<B><?php echo"$title"; ?></B></td>
        <td width="5" height="22"><img src="themes/herica/gfx/rightcorner.gif"></td>
        </tr>
        </table>


        <br>

        <table width="100%" border="0" cellpadding="0" cellspacing="0">
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

