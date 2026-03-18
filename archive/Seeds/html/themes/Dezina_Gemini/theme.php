<?php
/*********************************************************************/
/* Theme generated with Theme-editor 2.0 for php-nuke 5.5            */
/* Copyright (c) 2002 by Roberto Beltrame (r.beltrame@libero.it)     */
/* http://www.php-proxima.com                                        */
/* Thanks to Francisco Burzi                                         */
/* Theme-editor 2.0 for phpnuke 5.5/5.6 modified by dezina.com -june 2002*/
/*********************************************************************/
/*please dont remove this copyright please dont remove this copyright*/
/*********************************************************************/
function themeheader() {
global $themename,$themeimage,$prefix,$modlayout,$mod,$dbi,$isleft,$iscenter,$ismaxcenter,$isright,$ismodule,$istop,$isbot,$multilingual,$currentlang, $index;
$themename  =  Dezina_Gemini;
$themeimage  = Dezina_Gemini;
/*** global colors ***************************************************/
global $themename, $bgcolor1, $bgcolor2, $bgcolor3, $bgcolor4;
global $textcolor1, $textcolor2;
$bgcolor1   = "#7F8F9F";
$bgcolor2   = "#00288C";
$bgcolor3   = "#017FFF";
$bgcolor4   = "#7F8F9F";
$bgcolor5   = "#CFD5DB";
$bgcolor6   = "#CFD5DB";
$textcolor1 = "#000000";
$textcolor2 = "#000000";
echo "<!----- PLEASE DO NOT REMOVE COPYRIGHT NOTICE ----->\n";
echo "<!----- NEED Web Hosting/Themes? VISIT WWW.DEZINA.COM ----->\n";
echo "<!----- Copyright (c) 2002 Dezina.com ----->\n


";
/*******************************************************************************/
global $table;
$table= "100%";
theme($table);
themecore($table);
}
/*********************************************************************************/
function theme($table) {
echo "<LINK REL=\"StyleSheet\" HREF=\"themes/Dezina_Gemini/style/LEFT.css\" TYPE=\"text/css\">\n";
echo "<LINK REL=\"StyleSheet\" HREF=\"themes/Dezina_Gemini/style/CENTE.css\" TYPE=\"text/css\">\n";
echo "<LINK REL=\"StyleSheet\" HREF=\"themes/Dezina_Gemini/style/RIGHT.css\" TYPE=\"text/css\">\n";
global $themename,$themename,$isleft,$iscenter,$ismaxcenter,$isright,$ismodule,$istop,$mod,$nrocenter, $index;
include("themes//$themename/themetemplate.php");
echo "<!-- Start body -->\n";
echo "<body topmargin=\"0\" leftmargin=\"0\"   bgcolor=\"#CFD5DB\">\n";
OpenWindow("0","","","","","","","","","","100%","#00288C","#00288C","#017FFF","","block-screen.gif");
echo "<table width=\"100%\" border=\"0\" valign=\"top\" align=\"center\" cellspacing=\"0\" cellpadding=\"0\"><tr><td valign=\"top\">\n";
if (file_exists("themes/Dezina_Gemini/themeleft.php")) { include ("themes/Dezina_Gemini/themeleft.php");}
echo "</td><td>\n";
echo "<table width=\"100%\" border=\"0\" valign=\"top\" align=\"center\" cellspacing=\"1\" cellpadding=\"0\">\n";
/****************************** logo iniziale **************************/
global $button;
$button="";
echo "<tr>\n";
echo "<td>\n";
OpenWindow("6","","","","","","","","","","100%","#00288C","#00288C","#122764","","block-logo.gif");
include("themes//$themename/themelogo.php");
CloseWindow("6","","","","","","","","","","100%","#00288C","#00288C","#122764","","block-logo.gif");
echo "</td>\n";
echo "</tr>\n";
/*******************************barra user ******************************/
echo "<tr>\n";
echo "<td>\n";
OpenWindow("6","","","","","","","","","","100%","#7F8F9F","#7F8F9F","#7F8F9F","","block-user.gif");
include("themes/$themename/themeuser2.php");
CloseWindow("6","","","","","","","","","","100%","#7F8F9F","#7F8F9F","#7F8F9F","","block-user.gif");
echo "</td>\n";
echo "</tr>\n";
/******************************* nav bar *******************************/
global $navtable,$navbg,$navover,$navout,$navbghome,$navoverhome,$navouthome,$itemnavbar;
$navtable   = "#017FFF";
$navbg      = "#00288C";
$navover    = "#017FFF";
$navout     = "#00288C";
$navbghome  = "#00288C";
$navoverhome= "#017FFF";
$navouthome = "#00288C";
$itemnavbar = "6";
echo "<tr>\n";
echo "<td>\n";
OpenWindow("0","","","","","","","","","","100%","#234B53","#7F8F9F","#CFD5DB","","block-navbar.gif");
include("themes//$themename/themenavbar.php");
CloseWindow("0","","","","","","","","","","100%","#234B53","#7F8F9F","#CFD5DB","","block-navbar.gif");
echo "</td>\n";
echo "</tr>\n";
}
/******** themecore *****************************************************************/
function themecore($table) {
global $themename,$themeimage,$bgcolor1,$bgcolor2,$bgcolor3,$bgcolor4,$bgcolor5,$bgcolor6,$isleft,$iscenter,$isright,$ismodule, $index;
global $textcolor1, $textcolor2;
global $mod,$button,$nrocenter;
echo "<tr>\n";
echo "<td>\n";
OpenWindow("0","","","","","","","","","","100%","#234B53","#7F8F9F","#CFD5DB","","block-coretable.gif");
echo "<table width=\"100%\" border=\"0\" valign=\"top\" align=\"center\" cellspacing=\"0\" cellpadding=\"0\">\n";
echo "<tr>\n";
echo "<td width=\"0\" valign=\"top\">\n";
echo "</td>\n";
echo "<td width=22% valign=top align=center  bgcolor=\"#00288C\">\n";
themeblocksleft();
echo "</td>\n";
echo "<td width=\"1%\" ></td>\n";
echo "<td width=\"0\" ></td>\n";
echo "<td width=\"0\" ></td>\n";
if ($index == 1) {
$tdfooter="54%";
} else {
$tdfooter="77%";
} 
echo "<td width=$tdfooter valign=top align=center >\n";
}
/******************************* themefooter *******************************/
function themefooter() {
global $themename,$themeimage,$bgcolor1, $bgcolor2, $bgcolor3, $bgcolor4, $bgcolor5, $bgcolor6, $index;
global $textcolor1, $textcolor2;
global $mod,$button,$isleft,$iscenter,$ismaxcenter,$isright,$ismodule,$isbot,$nrocenter;
echo "<td width=\"0\" ></td>\n";
echo "<td width=0 ></td>\n";
echo "<td width=1% ></td>\n";
if ($index == 1) {
echo "<td width=22% valign=top align=center bgcolor=\"#7F8F9F\">\n";
themeblocksright();
echo "</td>\n";
} 
echo "<td width=\"0\" valign=\"top\" >\n";
echo "</td>\n";
echo "</tr>\n";
echo "</table>\n";
CloseWindow("0","","","","","","","","","","100%","#234B53","#7F8F9F","#CFD5DB","","block-coretable.gif");
echo "</td>\n";
echo "</tr>\n";
/******************************* nav bar bottom *************************/
global $navtable,$navbg,$navover,$navout,$navbghome,$navoverhome,$navouthome,$itemnavbar;
$navtable   = "#017FFF";
$navbg      = "#00288C";
$navover    = "#017FFF";
$navout     = "#00288C";
$navbghome  = "#00288C";
$navoverhome= "#017FFF";
$navouthome = "#00288C";
$itemnavbar = "6";
echo "<tr>\n";
echo "<td>\n";
OpenWindow("0","","","","","","","","","","100%","#234B53","#7F8F9F","#CFD5DB","","block-navbar.gif");
include("themes//$themename/themenavbar.php");
CloseWindow("0","","","","","","","","","","100%","#234B53","#7F8F9F","#CFD5DB","","block-navbar.gif");
echo "</td>\n";
echo "</tr>\n";

/*******************************  bottom ********************************/
echo "<tr>\n";
echo "<td>\n";
OpenWindow("6","","","","","","","","","","100%","#00288C","#00288C","#122764","","block-bottom.gif");
include("themes//$themename/themebottom.php");
CloseWindow("6","","","","","","","","","","100%","#00288C","#00288C","#122764","","block-bottom.gif");
echo "</td>\n";
echo "</tr>\n";
echo "</table></td><td valign=\"top\">\n";
if (file_exists("themes/Dezina_Gemini/themeright.php")) { include ("themes/Dezina_Gemini/themeright.php");}
echo "</td></tr></table>\n";
CloseWindow("0","","","","","","","","","","100%","#00288C","#00288C","#017FFF","","block-screen.gif");
}
/***************************************************************/
function themeblocksleft() {
blocks(LEFT);
}
/***************************************************************/
function themeblocksright() {
$linksurvey==1;
blocks(RIGHT);
}
/***********************************************************************/
/* THEMESIDEBOX ->                                                      /
/***********************************************************************/
function themesidebox($title, $content){
$posted=""; $morelink="";
themesideboxtempl($title, $content, $posted, $morelink); 
}
function themesideboxtempl($title, $content, $image, $mod, $posted="", $morelink="") {
global $modlayout,$themename,$topheight,$tabheight,$tab2height,$botheight,$leftwidth,$rightwidth,$tablewidth,$themeimage;
global $boxtable,$boxtitle,$boxbg,$typeuse,$block,$br;
$block="LEFT";
$topheight=""; $tabheight=""; $tab2height=""; $botheight=""; $leftwidth=""; $rightwidth=""; $tablewidth="100%";
$boxtable="#017FFF"; $boxtitle="#017FFF"; $boxbg="#FFFFFF"; $typeuse="B";$br="1"; 
$image="block-LEFT-standard.gif";
block_type_5($title, $content, $image, $mod, $posted, $morelink); 
}
/***********************************************************************/
/* OPENTABLE - CLOSETABLE                                              */
/***********************************************************************/
function OpenTable() {
OpenWindow("1","","","","","","","","","","100%","#017FFF","#017FFF","#00288C","","block-opentable.gif");
}
function CloseTable() {
CloseWindow("1","","","","","","","","","","100%","#017FFF","#017FFF","#00288C","","block-opentable.gif");
}
function OpenTable2() {
OpenWindow("1","","","","","","","","","","100%","#017FFF","#017FFF","#00288C","","block-opentable2.gif");
}
function CloseTable2() {
CloseWindow("1","","","","","","","","","","100%","#017FFF","#017FFF","#00288C","","block-opentable2.gif");
}
function OpenWindow($yblocktype,$ytopheight,$ytabheight,$ytab2height,$ybotheight,$yleftwidth,$yrightwidth,$yextraheight,$yextraleft,$yextraright,$ytablewidth,$yboxtable,$yboxtitle,$yboxbg,$yblock,$yimage) {
global $themename,$topheight,$tabheight,$tab2height,$botheight,$leftwidth,$rightwidth,$tablewidth,$themeimage;
global $boxtable,$boxtitle,$boxbg,$block,$image,$extraheight,$extraleft,$extraright;
$blocktype=$yblocktype;$topheight=$ytopheight;$tabheight=$ytabheight;$tab2height=$ytab2height;$botheight=$ybotheight;$leftwidth=$yleftwidth;$rightwidth=$yrightwidth;$extraheight=$yextraheight;$extraleft=$yextraleft;$extraright=$yextraright;$tablewidth=$ytablewidth;$boxtable=$yboxtable;$boxtitle=$yboxtitle;$boxbg=$yboxbg;$block=$yblock;$image=$yimage;
switch($blocktype)  {
case 0:
OpenTable_type_0("","",1); 
break; 
case 1:
OpenTable_type_1("","",1); 
break; 
case 3:
OpenTable_type_3("","",1); 
break; 
case 5:
OpenTable_type_5("","",1); 
break; 
case 6:
OpenTable_type_6("","",1); 
break; 
default: 
OpenTable_type_0("","",1); 
}
}
function CloseWindow($yblocktype,$ytopheight,$ytabheight,$ytab2height,$ybotheight,$yleftwidth,$yrightwidth,$yextraheight,$yextraleft,$yextraright,$ytablewidth,$yboxtable,$yboxtitle,$yboxbg,$yblock,$yimage) {
global $themename,$topheight,$tabheight,$tab2height,$botheight,$leftwidth,$rightwidth,$tablewidth,$themeimage;
global $boxtable,$boxtitle,$boxbg,$block,$image,$extraheight,$extraleft,$extraright;
$blocktype=$yblocktype;$topheight=$ytopheight;$tabheight=$ytabheight;$tab2height=$ytab2height;$botheight=$ybotheight;$leftwidth=$yleftwidth;$rightwidth=$yrightwidth;$extraheight=$yextraheight;$extraleft=$yextraleft;$extraright=$yextraright;$tablewidth=$ytablewidth;$boxtable=$yboxtable;$boxtitle=$yboxtitle;$boxbg=$yboxbg;$block=$yblock;$image=$yimage;
switch($blocktype)  {
case 0:
CloseTable_type_0(); 
break; 
case 1:
CloseTable_type_1(); 
break; 
case 3:
CloseTable_type_3(); 
break; 
case 5:
CloseTable_type_5(); 
break; 
case 6:
CloseTable_type_6(); 
break; 
default: 
CloseTable_type_0(); 
}
}
function ContentBlock($typeuse,$content,$posted,$morelink) {
if     ($typeuse=="B") { echo "$content"; } 
elseif ($typeuse=="A") { echo "$posted  <hr noshade width=\"98%\" size=\"1\">$content  <hr noshade width=\"98%\" size=\"1\">"; } 
elseif ($typeuse=="I") { echo "$content <hr noshade width=\"98%\" size=\"1\">$posted   <hr noshade width=\"98%\" size=\"1\">$morelink <hr noshade width=\"98%\" size=\"1\">";}
}
/***********************************************************************/
function themearticle ($aid, $informant, $datetime, $title, $thetext, $topic, $topicname, $topicimage, $topictext) {
global $admin, $sid, $tipath;
$posted = ""._POSTEDON." $datetime "._BY." "; 
$posted .= get_author($aid);
$content .="<a href=\"modules.php?name=Search&amp;query=&amp;topic=$topic\"><img src=\"$tipath$topicimage\" border=\"0\" Alt=\"$topictext\" align=\"right\" hspace=\"10\" vspace=\"10\"></a> ";
if (is_admin($admin)) {
$posted .= "<br>[ <a href=\"admin.php?op=EditStory&amp;sid=$sid\">"._EDIT."</a> | <a href=\"admin.php?op=RemoveStory&amp;sid=$sid\">"._DELETE."</a> ]";
}
if ($notes != "") {
$notes = "<br><br><b>"._NOTE."</b> <i>$notes</i>";
} else {
$notes = "";
}
if ("$aid" == "$informant") {
$content .= "$thetext$notes";
} else {
if($informant != "") {
$content = "<a href=\"modules.php?name=Your_Account&amp;op=userinfo&amp;uname=$informant\">$informant</a> ";
} else {
$content .= "$anonymous ";
}
$content .= ""._WRITES." <i>\"$thetext\"</i>$notes";
}
global $themename,$topheight,$botheight,$tabheight,$leftwidth,$rightwidth,$tablewidth,$themeimage;
global $boxtable,$boxtitle,$boxbg, $block, $typeuse;
$block="CENTE";
$topheight=""; $tabheight=""; $tab2height=""; $botheight=""; $leftwidth=""; $rightwidth=""; $tablewidth="100%";
$boxtable="#00288C"; $boxtitle="#00288C"; $boxbg="#7F8F9F"; $typeuse="A";
unset($image);
block_type_3($title, $content, $image, $mod, $posted, $morelink);
}


/***********************************************************************/
function themeindex ($aid, $informant, $time, $title, $counter, $topic, $thetext, $notes, $morelink, $topicname, $topicimage, $topictext) {
global $anonymous, $tipath;
$content ="<a href=\"modules.php?name=News&amp;new_topic=$topic\"><img src=\"$tipath$topicimage\" border=\"0\" Alt=\"$topictext\" align=\"right\" hspace=\"10\" vspace=\"10\"></a> ";
if ($notes != "") {
$notes = "<br><br><b>"._NOTE."</b> <i>$notes</i>";
} else {
$notes = "";
}
if ("$aid" == "$informant") {
$content = "$thetext$notes
";
} else {
if($informant != "") {
   $content = "<a href=\"modules.php?name=Your_Account&amp;op=userinfo&amp;uname=$informant\">$informant</a> ";
} else {
   $content = "$anonymous ";
}
$content .= ""._WRITES." <i>\"$thetext\"</i>$notes";
}
$content .="<a href=\"modules.php?name=News&amp;new_topic=$topic\"><img src=\"$tipath$topicimage\" border=\"0\" Alt=\"$topictext\" align=\"right\" hspace=\"10\" vspace=\"10\"></a> ";
$posted = ""._POSTEDBY." ";
$posted .= get_author($aid);
$posted .= " "._ON." $time $timezone ($counter "._READS.")";
global $modlayout,$themename,$topheight,$botheight,$leftwidth,$rightwidth,$tablewidth,$themeimage;
global $boxtable,$boxtitle,$boxbg,$typeuse,$block,$extraheight,$extraleft,$extraright;
$block="CENTE";
$topheight=""; $tabheight=""; $tab2height=""; $botheight=""; $leftwidth=""; $rightwidth=""; $extraheight=""; $extraleft=""; $extraright=""; $tablewidth="100%";
unset($image);
$boxtable="#00288C"; $boxtitle="#00288C"; $boxbg="#7F8F9F"; $typeuse="I";
block_type_3($title, $content, $image, $mod, $posted, $morelink);
}

?>
<?php
function block_type_0($title,$content,$image,$level,$posted,$morelink) {
global $themename,$topheight,$tabheight,$tab2height,$botheight,$leftwidth,$rightwidth,$tablewidth,$block,$index;
global $boxtable,$boxtitle,$boxbg,$typeuse,$br;
OpenTable_type_0($title,$image,0);
ContentBlock($typeuse,$content,$posted,$morelink);
CloseTable_type_0();
if ($br==1){ echo "<br>\n"; }
}
//
function OpenTable_type_0($title,$image,$tab) {
global $themename,$topheight,$tabheight,$tab2height,$botheight,$leftwidth,$rightwidth,$tablewidth;
global $boxtable,$boxtitle,$boxbg,$block;
echo "
<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"$tablewidth\" align=\"center\">
<tr>
<td valign=\"top\">\n";
}
//
function CloseTable_type_0() {
echo "
</td>
</tr>
</table>\n";
}
?>
<?php
function block_type_1($title,$content,$image,$level,$posted,$morelink) {
global $themename,$topheight,$tabheight,$tab2height,$botheight,$leftwidth,$rightwidth,$tablewidth,$block,$index;
global $boxtable,$boxtitle,$boxbg,$typeuse,$br;
OpenTable_type_1($title,$image,0);
ContentBlock($typeuse,$content,$posted,$morelink);
CloseTable_type_1();
if ($br==1){ echo "<br>\n"; }
}
//
function OpenTable_type_1($title,$image,$tab) {
global $themename,$topheight,$tabheight,$tab2height,$botheight,$leftwidth,$rightwidth,$tablewidth;
global $boxtable,$boxtitle,$boxbg,$block;
echo "
<table width=\"$tablewidth\" bgcolor=\"$boxtable\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\">
<tr><td>
<table width=\"100%\" bgcolor=\"$boxtable\" cellspacing=\"1\" cellpadding=\"0\" border=\"0\">
<tr>
<td>
<table width=\"100%\" bgcolor=\"$boxtitle\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\">
<tr>\n";
if ($tab==0){
  if (isset($image)) { echo"<td align=\"left\"> <img src=themes/$themename/blocks/title-$image align=\"absmiddle\" hspace=\"5\"></td>\n";  }
  if (isset($title)) { echo"<td align=\"right\"><font class=$block-blocktitle>$title</font></td>\n"; }
}
echo "
</tr>
</table>
</td>
</tr>
<tr>
<td>
<table width=\"100%\" bgcolor=\"$boxbg\" cellspacing=\"2\" cellpadding=\"2\" border=\"0\">
<tr>
<td>";
}
//
function CloseTable_type_1() {
echo "
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>\n";
}
?>
<?php
function block_type_3($title,$content,$image,$level,$posted,$morelink) {
global $themename,$topheight,$tabheight,$tab2height,$botheight,$leftwidth,$rightwidth,$tablewidth,$block,$index;
global $boxtable,$boxtitle,$boxbg,$typeuse,$br;
OpenTable_type_3($title,$image,0);
ContentBlock($typeuse,$content,$posted,$morelink);
CloseTable_type_3();
if ($br==1){ echo "<br>\n"; }
}
//
function OpenTable_type_3($title,$image,$tab) {
global $themename,$topheight,$tabheight,$tab2height,$botheight,$leftwidth,$rightwidth,$tablewidth;
global $boxtable,$boxtitle,$boxbg,$block;
echo "
<table width=\"$tablewidth\" bgcolor=\"$boxtable\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\">
<tr><td>
<table width=\"100%\" bgcolor=\"$boxtitle\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\">
<tr>
<td>
<table width=\"100%\" bgcolor=\"$boxtitle\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\">
<tr>\n";
if ($tab==0){
  if (isset($image)) { echo"<td align=\"left\"> <img src=themes/$themename/blocks/title-$image align=\"absmiddle\" hspace=\"5\"></td>\n";  }
  if (isset($title)) { echo"<td align=\"right\"><font class=$block-blocktitle>$title</font></td>\n"; }
}
echo "
</tr>
</table>
</td>
</tr>
<tr>
<td>
<table width=\"100%\" bgcolor=\"$boxbg\" cellspacing=\"2\" cellpadding=\"2\" border=\"0\">
<tr>
<td>\n";
}
//
function CloseTable_type_3() {
echo "
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>\n";
}
?>
<?php
function block_type_5($title,$content,$image,$level,$posted,$morelink) {
global $themename,$topheight,$tabheight,$tab2height,$botheight,$leftwidth,$rightwidth,$tablewidth,$block,$index;
global $boxtable,$boxtitle,$boxbg,$typeuse,$br;
OpenTable_type_5($title,$image,0);
ContentBlock($typeuse,$content,$posted,$morelink);
CloseTable_type_5();
if ($br==1){ echo "<br>\n"; }
}
//
function OpenTable_type_5($title,$image,$tab) {
global $themename,$topheight,$tabheight,$tab2height,$botheight,$leftwidth,$rightwidth,$tablewidth;
global $boxtable,$boxtitle,$boxbg,$block;
echo "
<table width=\"$tablewidth\" cellspacing=\"0\" cellpadding=\"0\" border=\"1\" align=\"center\">
<tr><td>
<table width=\"100%\" bgcolor=\"$boxtitle\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\">
<tr>\n";
if ($tab==0){
  if (isset($image)) { echo" <td align=\"left\" ><img src=themes/$themename/blocks/title-$image align=absmiddle></td>\n";  }
  if (isset($title)) { echo" <td align=\"right\"><font class=$block-blocktitle>$title</font></td>\n"; }
}
echo "
</tr>
</table>
<tr>
<td>
<table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\">
<tr>
<td>\n";
}
//
function CloseTable_type_5() {
echo "
</td>
</tr>
</table>
</td>
</tr>
</table>\n";
}
?>
<?php
function block_type_6($title,$content,$image,$level,$posted,$morelink) {
global $themename,$topheight,$tabheight,$tab2height,$botheight,$leftwidth,$rightwidth,$tablewidth,$block,$index;
global $boxtable,$boxtitle,$boxbg,$typeuse,$br;
OpenTable_type_6($title,$image,0);
ContentBlock($typeuse,$content,$posted,$morelink);
CloseTable_type_6();
if ($br==1){ echo "<br>\n"; }
}
//
function OpenTable_type_6($title,$image,$tab) {
global $themename,$topheight,$tabheight,$tab2height,$botheight,$leftwidth,$rightwidth,$tablewidth;
global $boxtable,$boxtitle,$boxbg,$block;
echo "
<table width=\"$tablewidth\" bgcolor=\"$boxtitle\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\">
<tr>
<td>
<table width=\"100%\" bgcolor=\"$boxtitle\" cellspacing=\"1\" cellpadding=\"0\" border=\"0\">
<tr>
<td>
<table width=\"100%\" bgcolor=\"$boxbg\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\">
<tr>
<td>\n";
}
//
function CloseTable_type_6() {
echo "
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>\n";
}
?>