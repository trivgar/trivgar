<?php
/*********************************************************************/
/* Theme generated with Theme-editor 1.0 beta                        */
/* Copyright (c) 2002 by Roberto Beltrame (r.beltrame@libero.it)     */
/* http://www.php-proxima.com                                        */
/* THIS THEME WORK ONLY WITH PROXIMA ADD-ON, a                       */
/* modify of PHP-NUKE Web Portal System - rel. 5.5                   */
/* Thanks to Francisco Burzi                                         */
/*********************************************************************/
/*please dont remove this copyright please dont remove this copyright*/
/*********************************************************************/
function themeheader() {
global $themename,$themeimage,$prefix,$modlayout,$mod,$dbi,$isleft,$iscenter,$ismaxcenter,$isright,$ismodule,$istop,$isbot;
$themename  =  Proxima_sunsweet;
$themeimage  = Proxima_sunsweet;
/*********************************************************************/
$result = sql_query("select * from $prefix"._proxima_blocks." where position='l' AND mid='$modlayout' $querylang ORDER BY weight ASC", $dbi);
    $isleft = sql_num_rows($result, $dbi);
$result = sql_query("select * from $prefix"._proxima_blocks." where position='c' AND mid='$modlayout' $querylang ORDER BY weight ASC", $dbi);
    $iscenter = sql_num_rows($result, $dbi);
    $ismaxcenter = ceil($iscenter/2) ;
    $salta = 1;
$result = sql_query("select * from $prefix"._proxima_blocks." where position='r' AND mid='$modlayout' $querylang ORDER BY weight ASC", $dbi);
    $isright = sql_num_rows($result, $dbi);

if ($iscenter>0) { 
        $iscenter="58%";
        if ($isleft>0) { $isleft="20%"; 
        } else { $iscenter=$iscenter+"20%"; }
        if ($isright>0) { $isright="20%"; 
        } else { $iscenter=$iscenter+"20%"; }
        if ($iscenter<105) { $iscenter="$iscenter%"; }
} else { 
        $ismodule="58%";
        if ($isleft>0) { $isleft="20%"; 
        } else { $ismodule=$ismodule+"20%"; }
        if ($isright>0) { $isright="20%"; 
        } else { $ismodule=$ismodule+"20%"; }
        if ($ismodule<105) { $ismodule="$ismodule%"; }
}
$result = sql_query("select * from $prefix"._proxima_blocks." where position='a' AND mid='$modlayout' $querylang ORDER BY weight ASC", $dbi);
    $istop = sql_num_rows($result, $dbi);
$result = sql_query("select * from $prefix"._proxima_blocks." where position='x' AND mid='$modlayout' $querylang ORDER BY weight ASC", $dbi);
    $isbot = sql_num_rows($result, $dbi);

/*** global colors ***************************************************/
global $themename, $bgcolor1, $bgcolor2, $bgcolor3, $bgcolor4, $bgcolor5, $bgcolor6;
global $textcolor1, $textcolor2;
$bgcolor1   = "#404040";
$bgcolor2   = "#666E8C";
$bgcolor3   = "#808080";
$bgcolor4   = "#6D6D6D";
$bgcolor5   = "#404040";
$bgcolor6   = "#404040";
$textcolor1 = "#EDBB33";
$textcolor2 = "#DEDEDE";
/*******************************************************************************/
global $table;
$table= "100%";
theme($table);
themecore($table);
}
/*********************************************************************************/
function theme($table) {
global $themename,$themename,$isleft,$iscenter,$ismaxcenter,$isright,$ismodule,$istop,$mod,$nrocenter;
include("themes/themetemplate.php");
echo "<!-- Start body -->\n";
echo "<body  bgcolor=#404040>\n";
OpenScreen();
echo "<table width=100% border=0 align=center cellspacing=1 cellpadding=0>\n";
/****************************** logo iniziale **************************/
global $button;
$button="";
echo "    <tr>\n";
echo "       <td>\n";
OpenLogo();
include("themes/themelogo.php");
CloseLogo();
echo "       </td>\n";
echo "    </tr>\n";
/*******************************barra user ******************************/
echo "    <tr>\n";
echo "       <td>\n";
OpenUser();
include("themes/themeuser.php");
CloseUser();
echo "      </td>\n";
echo "    </tr>\n";
/******************************* nav bar *******************************/
global $navtable,$navbg,$navover,$navout,$navbghome,$navoverhome,$navouthome,$itemnavbar;
$navtable   = "#404040";
$navbg      = "#666E8C";
$navover    = "#353949";
$navout     = "#666E8C";
$navbghome  = "#666E8C";
$navoverhome= "#353949";
$navouthome = "#666E8C";
$itemnavbar = "6";
echo "    <tr>\n";
echo "      <td>\n";
OpenNavBar();
include("themes/themenavbar.php");
CloseNavBar();
echo "      </td>\n";
echo "    </tr>\n";
/***************************  blocchi top  ****************************/
if ($istop>0) {
echo "    <tr>\n";
echo "      <td>\n";
OpenBlockTop();
echo "        <table align=center width=100% cellspacing=0 cellpadding=0 border=0 >\n";
echo "          <tr>\n";
themeblockstop();
echo "          </tr>\n";
echo "        </table>\n";
CloseBlockTop();
echo "      </td>\n";
echo "   </tr>\n";
}
}
/******** themecore *****************************************************************/
function themecore($table) {
global $themename,$themeimage,$bgcolor1,$bgcolor2,$bgcolor3,$bgcolor4,$bgcolor5,$bgcolor6,$isleft,$iscenter,$isright,$ismodule;
global $textcolor1, $textcolor2;
global $mod,$button,$nrocenter;
echo "   <tr>\n";
echo "      <td>\n";
OpenCoreTable();
echo "         <table width=100% border=0 align=center cellspacing=0 cellpadding=0 >\n";
echo "<tr>\n";
     echo "<td width=0 ></td>\n";
     echo "<td width=$isleft valign=top align=center >\n";
     themeblocksleft();
     echo "</td>\n";
     echo "<td width=0 ></td>\n";
     echo "<td width=1% ></td>\n";
     echo "<td width=0 ></td>\n";
if ($iscenter>0) {
$iscentmod = $iscenter;
} else { 
$iscentmod = $ismodule;
}
     echo "<td width=$iscentmod valign=top align=center >\n";
  }
/******************************* themefooter *******************************/
function themefooter() {
global $themename,$themeimage,$bgcolor1, $bgcolor2, $bgcolor3, $bgcolor4, $bgcolor5, $bgcolor6;
global $textcolor1, $textcolor2;
global $mod,$button,$isleft,$iscenter,$ismaxcenter,$isright,$ismodule,$isbot,$nrocenter;
     echo "<table width=\"100%\"><tr>\n";
     echo "  <td valign=\"top\" width=\"50%\">\n";
     echo "    <table width=\"100%\">\n";
     	  themeblockscenter();
     echo "    </table>\n";
     echo "</td></tr></table>\n";
     echo "</td>\n";
     echo "<td width=0 ></td>\n";
     echo "<td width=1% ></td>\n";
     echo "<td width=0 ></td>\n";
     echo "<td width=$isright valign=top align=center>\n";
     themeblocksright();
     echo "</td>\n";
     echo "<td width=0 ></td>\n";
     echo "</tr>\n";
     echo "</table>\n";
CloseCoreTable();
     echo "</td>\n";
     echo "</tr>\n";
/******************************* block bottom *******************************/
if ($isbot>0) {
echo "    <tr>\n";
echo "      <td>\n";
OpenBlockBottom();
echo "        <table align=center width=100% cellspacing=0 cellpadding=0 border=0 >\n";
echo "          <tr>\n";
themeblocksbottom();
echo "          </tr>\n";
echo "        </table>\n";
CloseBlockBottom();
echo "      </td>\n";
echo "   </tr>\n";
}
/******************************* nav bar bottom *************************/
global $navtable,$navbg,$navover,$navout,$navbghome,$navoverhome,$navouthome,$itemnavbar;
$navtable   = "#404040";
$navbg      = "#666E8C";
$navover    = "#353949";
$navout     = "#666E8C";
$navbghome  = "#666E8C";
$navoverhome= "#353949";
$navouthome = "#666E8C";
$itemnavbar = "6";
echo "    <tr>\n";
echo "      <td>\n";
OpenNavBar();
include("themes/themenavbarbot.php");
CloseNavBar();
echo "      </td>\n";
echo "    </tr>\n";
/*******************************  bottom ********************************/
echo "    <tr>\n";
echo "       <td>\n";
OpenSpaceBottom();
  include("themes/themebottom.php");
CloseSpaceBottom();
  echo "    </td>\n";
  echo "  </tr>\n";
  echo "</table>\n";
CloseScreen();
}
/***************************************************************/
function themeblocksleft() {
global $modlayout;
proxima_blocks(LEFT);
}
/***************************************************************/
function themeblockscenter() {
global $modlayout;
proxima_blocks(CENTER);
}
/***************************************************************/
function themeblocksright() {
global $modlayout;
proxima_blocks(RIGHT);
}
/***************************************************************/
function themeblocksbottom() {
global $modlayout;
proxima_blocks(XBOTTOM);
}
/***************************************************************/
function themeblockstop() {
global $modlayout;
proxima_blocks(ATOP);
}
/***********************************************************************/
/* THEMESIDEBOX -> LEFT / CENTER / RIGHT / TOP / BOTTOM /               /
/***********************************************************************/
function themesideboxleft($title, $content, $image, $mod, $posted="", $morelink="") {
global $modlayout,$themename,$topheight,$tabheight,$tab2height,$botheight,$leftwidth,$rightwidth,$tablewidth,$themeimage;
global $boxtable,$boxtitle,$boxbg,$typeuse,$block,$br;
$block="L";
$topheight=""; $tabheight=""; $tab2height=""; $botheight=""; $leftwidth=""; $rightwidth=""; $tablewidth="100%";
$boxtable="#E5AB1F"; $boxtitle="#E5AB1F"; $boxbg="#404040"; $typeuse="B";$br="1"; 
$image="block-standardl.gif";
if ($modlayout == $mod) { 
block_type_1($title, $content, $image, $mod, $posted, $morelink); 
  }
}
/***********************************************************************/
function themesideboxcenter($title, $content, $image, $mod, $posted="", $morelink="") {
global $modlayout,$themename,$topheight,$tabheight,$tab2height,$botheight,$leftwidth,$rightwidth,$tablewidth,$themeimage;
global $boxtable,$boxtitle,$boxbg,$typeuse,$block,$br,$salta,$nrocenter,$ismaxcenter;
$block="C";
$topheight=""; $tabheight=""; $tab2height=""; $botheight=""; $leftwidth=""; $rightwidth=""; $tablewidth="100%";
$boxtable="#E5AB1F"; $boxtitle="#E5AB1F"; $boxbg="#404040"; $typeuse="B"; $br="1";
$image="block-standardc.gif";
if ($nrocenter>0) {
   if ($salta==0) {$salta=1;}
   if ($modlayout == $mod) { echo "<tr><td valign=\"top\">"; block_type_1($title, $content, $image, $mod, $posted, $morelink); echo "</td></tr>\n";
      if ($salta==$ismaxcenter) { 
         echo "</table></td><td valign=\"top\" width=\"50%\"><table width=\"100%\">\n";
         $salta=1; 
       } else { 
         $salta++; 
       }
   }
} else { 
if ($modlayout == $mod) { echo "<tr><td>"; block_type_1($title, $content, $image, $mod, $posted, $morelink); echo "</td></tr>";  }
}
}
/***********************************************************************/
function themesideboxright($title, $content, $image, $mod, $posted="", $morelink="") {
global $modlayout,$themename,$topheight,$tabheight,$tab2height,$botheight,$leftwidth,$rightwidth,$tablewidth,$themeimage;
global $boxtable,$boxtitle,$boxbg,$typeuse,$block,$br;
$block="R";
$topheight=""; $tabheight=""; $tab2height=""; $botheight=""; $leftwidth=""; $rightwidth=""; $tablewidth="100%";
$boxtable="#E5AB1F"; $boxtitle="#E5AB1F"; $boxbg="#404040"; $typeuse="B"; $br="1";
$image="block-standardr.gif";
if ($modlayout == $mod) { 
block_type_1($title, $content, $image, $mod, $posted, $morelink);
  }
}
/***********************************************************************/
function themesideboxbottom($title, $content, $image, $mod) {
global $modlayout,$themename,$topheight,$botheight,$leftwidth,$rightwidth,$tablewidth,$themeimage;
global $boxtable,$boxtitle,$boxbg;
$block=b; 
if ($modlayout == $mod) { 
block_type_tb($title, $content, $image, $mod, $block); 
  }
}
/***********************************************************************/
function themesideboxtop($title, $content, $image, $mod) {
global $modlayout,$themename,$frameheight,$framewidth,$themeimage;
global $boxtable,$boxtitle,$boxbg; 
$block=t; 
if ($modlayout == $mod) { 
block_type_tb($title, $content, $image, $mod, $block); 
  }
}
/***********************************************************************/
function themesidebox($title, $content, $image="", $mod="", $posted="", $morelink=""){
global $modlayout,$themename,$topheight,$tabheight,$tab2height,$botheight,$leftwidth,$rightwidth,$tablewidth,$themeimage;
global $boxtable,$boxtitle,$boxbg,$block,$br;
$tablewidth="160";
$block="R";
$topheight=""; $tabheight=""; $tab2height=""; $botheight=""; $leftwidth=""; $rightwidth=""; 
$image="block-standardr.gif";
$boxtable="#E5AB1F"; $boxtitle="#E5AB1F"; $boxbg="#404040"; $typeuse="B"; $br="1";
block_type_1($title, $content, $image, $mod, $posted, $morelink);
}
/***********************************************************************/
/* OPENTABLE - CLOSETABLE                                              */
/***********************************************************************/
function OpenTable() {
global $themename,$topheight,$tabheight,$tab2height,$botheight,$leftwidth,$rightwidth,$tablewidth,$themeimage;
global $boxtable,$boxtitle,$boxbg,$block;
$block=""; $tablewidth="100%"; 
$topheight=""; $tabheight=""; $tab2height=""; $botheight=""; $leftwidth=""; $rightwidth="";
$boxtable="#E5AB1F"; $boxtitle="#E5AB1F"; $boxbg="#404040";
OpenTable_type_1("","",1); 
}
function CloseTable() {
global $themename,$topheight,$tabheight,$tab2height,$botheight,$leftwidth,$rightwidth,$tablewidth,$themeimage;
global $boxtable,$boxtitle,$boxbg,$block;
$block="";
$topheight=""; $tabheight=""; $tab2height=""; $botheight=""; $leftwidth=""; $rightwidth="";
CloseTable_type_1(); 
}
function OpenTable2() {
global $themename,$topheight,$tabheight,$tab2height,$botheight,$leftwidth,$rightwidth,$tablewidth,$themeimage;
global $boxtable,$boxtitle,$boxbg,$block;
$block="";
$topheight=""; $tabheight=""; $tab2height=""; $botheight=""; $leftwidth=""; $rightwidth="";
$boxtable="#E5AB1F"; $boxtitle="#E5AB1F"; $boxbg="#404040";
OpenTable_type_1("","",1); 
}
function CloseTable2() {
global $themename,$topheight,$tabheight,$tab2height,$botheight,$leftwidth,$rightwidth,$tablewidth,$themeimage;
global $boxtable,$boxtitle,$boxbg,$block;
$block="";
$topheight=""; $tabheight=""; $tab2height=""; $botheight=""; $leftwidth=""; $rightwidth="";
CloseTable_type_1(); 
}
function OpenScreen() {
global $themename,$topheight,$tabheight,$tab2height,$botheight,$leftwidth,$rightwidth,$tablewidth,$themeimage;
global $boxtable,$boxtitle,$boxbg,$block;
$block="";
$topheight=""; $tabheight=""; $tab2height=""; $botheight=""; $leftwidth=""; $rightwidth=""; $tablewidth="100%";
$boxtable="#E5AB1F"; $boxtitle="#E5AB1F"; $boxbg="#404040";
OpenTable_type_1("","",1); 
}
function CloseScreen() {
global $themename,$topheight,$tabheight,$tab2height,$botheight,$leftwidth,$rightwidth,$tablewidth,$themeimage;
global $boxtable,$boxtitle,$boxbg,$block;
$block="";
$topheight=""; $tabheight=""; $tab2height=""; $botheight=""; $leftwidth=""; $rightwidth=""; $tablewidth="100%";
$boxtable="#E5AB1F"; $boxtitle="#E5AB1F"; $boxbg="#404040";
CloseTable_type_1(); 
}
function OpenLogo() {
global $themename,$topheight,$tabheight,$tab2height,$botheight,$leftwidth,$rightwidth,$tablewidth,$themeimage;
global $boxtable,$boxtitle,$boxbg,$block;
$block="";
$topheight=""; $tabheight=""; $tab2height=""; $botheight=""; $leftwidth=""; $rightwidth="";
$boxtable="#E5AB1F"; $boxtitle="#E5AB1F"; $boxbg="#404040";
OpenTable_type_1("","",1); 
}
function CloseLogo() {
global $themename,$topheight,$tabheight,$tab2height,$botheight,$leftwidth,$rightwidth,$tablewidth,$themeimage;
global $boxtable,$boxtitle,$boxbg,$block;
$block="";
$topheight=""; $tabheight=""; $tab2height=""; $botheight=""; $leftwidth=""; $rightwidth="";
$boxtable="#E5AB1F"; $boxtitle="#E5AB1F"; $boxbg="#404040";
CloseTable_type_1(); 
}
function OpenNavBar() {
global $themename,$topheight,$tabheight,$tab2height,$botheight,$leftwidth,$rightwidth,$tablewidth,$themeimage;
global $boxtable,$boxtitle,$boxbg,$block;
$block="";
$topheight=""; $tabheight=""; $tab2height=""; $botheight=""; $leftwidth=""; $rightwidth="";
$boxtable="#E5AB1F"; $boxtitle="#E5AB1F"; $boxbg="#404040";
OpenTable_type_1("","",1); 
}
function CloseNavBar() {
global $themename,$topheight,$tabheight,$tab2height,$botheight,$leftwidth,$rightwidth,$tablewidth,$themeimage;
global $boxtable,$boxtitle,$boxbg,$block;
$block="";
$topheight=""; $tabheight=""; $tab2height=""; $botheight=""; $leftwidth=""; $rightwidth="";
$boxtable="#E5AB1F"; $boxtitle="#E5AB1F"; $boxbg="#404040";
CloseTable_type_1(); 
}
function OpenUser() {
global $themename,$topheight,$tabheight,$tab2height,$botheight,$leftwidth,$rightwidth,$tablewidth,$themeimage;
global $boxtable,$boxtitle,$boxbg,$block;
$block="";
$topheight=""; $tabheight=""; $tab2height=""; $botheight=""; $leftwidth=""; $rightwidth="";
$boxtable="#E5AB1F"; $boxtitle="#E5AB1F"; $boxbg="#404040";
OpenTable_type_1("","",1); 
}
function CloseUser() {
global $themename,$topheight,$tabheight,$tab2height,$botheight,$leftwidth,$rightwidth,$tablewidth,$themeimage;
global $boxtable,$boxtitle,$boxbg,$block;
$block="";
$topheight=""; $tabheight=""; $tab2height=""; $botheight=""; $leftwidth=""; $rightwidth="";
$boxtable="#E5AB1F"; $boxtitle="#E5AB1F"; $boxbg="#404040";
CloseTable_type_1(); 
}
function OpenSpaceBottom() {
global $themename,$topheight,$tabheight,$tab2height,$botheight,$leftwidth,$rightwidth,$tablewidth,$themeimage;
global $boxtable,$boxtitle,$boxbg,$block;
$block="";
$topheight=""; $tabheight=""; $tab2height=""; $botheight=""; $tab2height=""; $leftwidth=""; $rightwidth="";
$boxtable="#E5AB1F"; $boxtitle="#E5AB1F"; $boxbg="#404040";
OpenTable_type_1("","",1); 
}
function CloseSpaceBottom() {
global $themename,$topheight,$tabheight,$tab2height,$botheight,$leftwidth,$rightwidth,$tablewidth,$themeimage;
global $boxtable,$boxtitle,$boxbg,$block;
$block="";
$topheight=""; $tabheight=""; $tab2height=""; $botheight=""; $tab2height=""; $leftwidth=""; $rightwidth="";
$boxtable="#E5AB1F"; $boxtitle="#E5AB1F"; $boxbg="#404040";
CloseTable_type_1(); 
}
function OpenCoreTable() {
global $themename,$topheight,$tabheight,$tab2height,$botheight,$leftwidth,$rightwidth,$tablewidth,$themeimage;
global $boxtable,$boxtitle,$boxbg,$block;
$block="";
$topheight=""; $tabheight=""; $tab2height=""; $botheight=""; $tab2height=""; $leftwidth=""; $rightwidth="";
$boxtable="#E5AB1F"; $boxtitle="#E5AB1F"; $boxbg="#404040";
OpenTable_type_0("","",1); 
}
function CloseCoreTable() {
global $themename,$topheight,$tabheight,$tab2height,$botheight,$leftwidth,$rightwidth,$tablewidth,$themeimage;
global $boxtable,$boxtitle,$boxbg,$block;
$block="";
$topheight=""; $tabheight=""; $tab2height=""; $botheight=""; $tab2height=""; $leftwidth=""; $rightwidth="";
$boxtable="#E5AB1F"; $boxtitle="#E5AB1F"; $boxbg="#404040";
CloseTable_type_0(); 
}
function OpenBlockTop() {
global $themename,$topheight,$tabheight,$tab2height,$botheight,$leftwidth,$rightwidth,$tablewidth,$themeimage;
global $boxtable,$boxtitle,$boxbg,$block;
$block="";
$topheight=""; $tabheight=""; $tab2height=""; $botheight=""; $tab2height=""; $leftwidth=""; $rightwidth="";
$boxtable="#E5AB1F"; $boxtitle="#E5AB1F"; $boxbg="#404040";
OpenTable_type_0("","",1); 
}
function CloseBlockTop() {
global $themename,$topheight,$tabheight,$tab2height,$botheight,$leftwidth,$rightwidth,$tablewidth,$themeimage;
global $boxtable,$boxtitle,$boxbg,$block;
$block="";
$topheight=""; $tabheight=""; $tab2height=""; $botheight=""; $tab2height=""; $leftwidth=""; $rightwidth="";
$boxtable="#E5AB1F"; $boxtitle="#E5AB1F"; $boxbg="#404040";
CloseTable_type_0(); 
}
function OpenBlockBottom() {
global $themename,$topheight,$tabheight,$tab2height,$botheight,$leftwidth,$rightwidth,$tablewidth,$themeimage;
global $boxtable,$boxtitle,$boxbg,$block;
$block="";
$topheight=""; $tabheight=""; $tab2height=""; $botheight=""; $tab2height=""; $leftwidth=""; $rightwidth="";
$boxtable="#E5AB1F"; $boxtitle="#E5AB1F"; $boxbg="#404040";
OpenTable_type_0("","",1); 
}
function CloseBlockBottom() {
global $themename,$topheight,$tabheight,$tab2height,$botheight,$leftwidth,$rightwidth,$tablewidth,$themeimage;
global $boxtable,$boxtitle,$boxbg,$block;
$block="";
$topheight=""; $tabheight=""; $tab2height=""; $botheight=""; $tab2height=""; $leftwidth=""; $rightwidth="";
$boxtable="#E5AB1F"; $boxtitle="#E5AB1F"; $boxbg="#404040";
CloseTable_type_0(); 
}
/***********************************************************************/
function themearticle ($aid, $informant, $datetime, $title, $thetext, $topic, $topicname, $topicimage, $topictext) {
global $admin, $sid, $tipath;
$posted = ""._POSTEDON." $datetime "._BY." "; 
$posted .= get_author($aid);
if (is_admin($admin)) {
$posted .= "<br>[ <a href=\"admin.php?op=EditStory&amp;sid=$sid\">"._EDIT."</a> | <a href=\"admin.php?op=RemoveStory&amp;sid=$sid\">"._DELETE."</a> ]";
}
if ($notes != "") {
$notes = "<br><br><b>"._NOTE."</b> <i>$notes</i>";
} else {
$notes = "";
}
if ("$aid" == "$informant") {
$content = "$thetext$notes";
} else {
if($informant != "") {
$content = "<a href=\"user.php?op=userinfo&amp;uname=$informant\">$informant</a> ";
} else {
$content = "$anonymous ";
}
$content .= ""._WRITES." <i>\"$thetext\"</i>$notes";
}
$content .="<a href=\"search.php?query=&amp;topic=$topic\"><img src=\"images/topics/$topicimage\" border=\"0\" Alt=\"$topictext\" align=\"right\" hspace=\"10\" vspace=\"10\"></a>";
global $themename,$topheight,$botheight,$tabheight,$leftwidth,$rightwidth,$tablewidth,$themeimage;
global $boxtable,$boxtitle,$boxbg, $block, $typeuse;
$block="C";
$topheight=""; $tabheight=""; $tab2height=""; $botheight=""; $leftwidth=""; $rightwidth=""; $tablewidth="100%";
$boxtable="#E5AB1F"; $boxtitle="#E5AB1F"; $boxbg="#404040"; $typeuse="A";
$image="block-standardc.gif";
block_type_1($title, $content, $image, $mod, $posted, $morelink);
}


/***********************************************************************/
function themeindex ($aid, $informant, $time, $title, $counter, $topic, $thetext, $notes, $morelink, $topicname, $topicimage, $topictext) {
global $anonymous, $tipath;
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
   $content = "<a href=\"user.php?op=userinfo&amp;uname=$informant\">$informant</a> ";
} else {
   $content = "$anonymous ";
}
$content .= ""._WRITES." <i>\"$thetext\"</i>$notes";
}
$content .="<a href=\"search.php?query=&amp;topic=$topic\"><img src=\"$tipath$topicimage\" border=\"0\" Alt=\"$topictext\" align=\"right\" hspace=\"10\" vspace=\"10\"></a> ";
$posted = ""._POSTEDBY." ";
$posted .= get_author($aid);
$posted .= " "._ON." $time $timezone ($counter "._READS.")";
global $modlayout,$themename,$topheight,$botheight,$leftwidth,$rightwidth,$tablewidth,$themeimage;
global $boxtable,$boxtitle,$boxbg,$typeuse,$block;
$block="C";
$topheight=""; $tabheight=""; $tab2height=""; $botheight=""; $leftwidth=""; $rightwidth=""; $tablewidth="100%";
$image="block-noimage.gif";
$boxtable="#E5AB1F"; $boxtitle="#E5AB1F"; $boxbg="#404040"; $typeuse="I";
block_type_1($title, $content, $image, $mod, $posted, $morelink);
}
/***********************************************************************/
function thememessages ($title, $content, $contentmore, $location) {
global $admin;
$content="<table cellspacing=2 cellpadding=2 border=0><tr><td valign=top>$content</td><td valign=top>$contentmore</td></tr></table>";
   if ($admin) {
    $content .= "<hr noshade width=\"98%\" size=\"1\">[ <a href=admin.php?op=editmsg_news&mid=$mod>"._EDIT."</a> | <a href=admin.php?op=deletemsg_news&mid=>"._DELETE."</a> ]";
}
global $modlayout,$themename,$topheight,$botheight,$leftwidth,$rightwidth,$tablewidth,$themeimage;
global $boxtable,$boxtitle,$boxbg,$typeuse,$block;
$block="C";
$topheight=""; $tabheight=""; $tab2height=""; $botheight=""; $leftwidth=""; $rightwidth=""; $tablewidth="100%";
$boxtable="#E5AB1F"; $boxtitle="#E5AB1F"; $boxbg="#404040"; $typeuse="A";
$image="block-standardc.gif";
block_type_1($title, $content,$image,"","","");
}
/***********************************************************************/
function FormatStory($thetext, $notes, $aid, $informant) {
FormatStory_type_1($thetext, $notes, $aid, $informant); 
}

?>