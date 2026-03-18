<?php
/*********************************************************************/
/* Theme generated with Theme-editor 1.0 beta                        */
/* Copyright (c) 2002 by Roberto Beltrame (r.beltrame@libero.it)     */
/* http://beltrame-caruso.it                                         */
/* THIS THEME WORK ONLY WITH PROXIMA ADD-ON, a                       */
/* modify of PHP-NUKE Web Portal System - rel. 5.5                   */
/* Thanks to Francisco Burzi                                         */
/*********************************************************************/
/*please dont remove this copyright please dont remove this copyright*/
/*********************************************************************/
function themeheader() {
global $themename,$themeimage,$prefix,$modlayout,$mod,$dbi,$isleft,$iscenter,$ismaxcenter,$isright,$ismodule,$istop,$isbot;
$themename  =  Proxima_cafe;
$themeimage  = Proxima_cafe;
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
        $iscenter="444";
        if ($isleft>0) { $isleft="160"; 
        } else { $iscenter=$iscenter+"160"; }
        if ($isright>0) { $isright="160"; 
        } else { $iscenter=$iscenter+"160"; }
        if ($iscenter<105) { $iscenter="$iscenter%"; }
} else { 
        $ismodule="444";
        if ($isleft>0) { $isleft="160"; 
        } else { $ismodule=$ismodule+"160"; }
        if ($isright>0) { $isright="160"; 
        } else { $ismodule=$ismodule+"160"; }
        if ($ismodule<105) { $ismodule="$ismodule%"; }
}
$result = sql_query("select * from $prefix"._proxima_blocks." where position='a' AND mid='$modlayout' $querylang ORDER BY weight ASC", $dbi);
    $istop = sql_num_rows($result, $dbi);
$result = sql_query("select * from $prefix"._proxima_blocks." where position='x' AND mid='$modlayout' $querylang ORDER BY weight ASC", $dbi);
    $isbot = sql_num_rows($result, $dbi);

/*** global colors ***************************************************/
global $themename, $bgcolor1, $bgcolor2, $bgcolor3, $bgcolor4, $bgcolor5, $bgcolor6;
global $textcolor1, $textcolor2;
$bgcolor1   = "#BF9E6F";
$bgcolor2   = "#594B25";
$bgcolor3   = "#BF9E6F";
$bgcolor4   = "#BF9E6F";
$bgcolor5   = "#BF9E6F";
$bgcolor6   = "#BF9E6F";
$textcolor1 = "#D3C494";
$textcolor2 = "#D3C494";
/*******************************************************************************/
global $table;
$table= "768";
theme($table);
themecore($table);
}
/*********************************************************************************/
function theme($table) {
global $themename,$themename,$isleft,$iscenter,$ismaxcenter,$isright,$ismodule,$istop,$mod,$nrocenter;
include("themes/themetemplate.php");
echo "<!-- Start body -->\n";
echo "<body  bgcolor=#B59A6B>\n";
OpenScreen();
echo "<table width=768 border=0 align=center cellspacing=1 cellpadding=0>\n";
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
$navtable   = "#B59A6B";
$navbg      = "#635231";
$navover    = "#B59A6B";
$navout     = "#635231";
$navbghome  = "#635231";
$navoverhome= "#B59A6B";
$navouthome = "#635231";
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
echo "        <table align=center width=768 cellspacing=0 cellpadding=0 border=0 >\n";
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
echo "         <table width=768 border=0 align=center cellspacing=0 cellpadding=0 >\n";
echo "<tr>\n";
     echo "<td width=0 ></td>\n";
     echo "<td width=$isleft valign=top align=center >\n";
     themeblocksleft();
     echo "</td>\n";
     echo "<td width=2 ></td>\n";
     echo "<td width=0  background=themes/Proxima_cafe/table/td2C.gif></td>\n";
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
     echo "<td width=2 ></td>\n";
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
echo "        <table align=center width=768 cellspacing=0 cellpadding=0 border=0 >\n";
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
$navtable   = "#B59A6B";
$navbg      = "#635231";
$navover    = "#B59A6B";
$navout     = "#635231";
$navbghome  = "#635231";
$navoverhome= "#B59A6B";
$navouthome = "#635231";
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
$block="PROX2";
$topheight="10"; $tabheight="27"; $tab2height="23"; $botheight="15"; $leftwidth="15"; $rightwidth="10"; $tablewidth="100%";
$boxtable="#B59A6B"; $boxtitle="#B59A6B"; $boxbg="#635231"; $typeuse="B";$br="0"; 
$image="block-standardl.gif";
if ($modlayout == $mod) { 
block_type_6($title, $content, $image, $mod, $posted, $morelink); 
  }
}
/***********************************************************************/
function themesideboxcenter($title, $content, $image, $mod, $posted="", $morelink="") {
global $modlayout,$themename,$topheight,$tabheight,$tab2height,$botheight,$leftwidth,$rightwidth,$tablewidth,$themeimage;
global $boxtable,$boxtitle,$boxbg,$typeuse,$block,$br,$salta,$nrocenter,$ismaxcenter;
$block="PROX8";
$topheight="20"; $tabheight="26"; $tab2height=""; $botheight="16"; $leftwidth="14"; $rightwidth="14"; $tablewidth="100%";
$boxtable="#B59A6B"; $boxtitle="#B59A6B"; $boxbg="#635231"; $typeuse="B"; $br="0";
$image="block-standardc.gif";
if ($nrocenter>0) {
   if ($salta==0) {$salta=1;}
   if ($modlayout == $mod) { echo "<tr><td valign=\"top\">"; block_type_6($title, $content, $image, $mod, $posted, $morelink); echo "</td></tr>\n";
      if ($salta==$ismaxcenter) { 
         echo "</table></td><td valign=\"top\" width=\"50%\"><table width=\"100%\">\n";
         $salta=1; 
       } else { 
         $salta++; 
       }
   }
} else { 
if ($modlayout == $mod) { echo "<tr><td>"; block_type_6($title, $content, $image, $mod, $posted, $morelink); echo "</td></tr>";  }
}
}
/***********************************************************************/
function themesideboxright($title, $content, $image, $mod, $posted="", $morelink="") {
global $modlayout,$themename,$topheight,$tabheight,$tab2height,$botheight,$leftwidth,$rightwidth,$tablewidth,$themeimage;
global $boxtable,$boxtitle,$boxbg,$typeuse,$block,$br;
$block="PROX1";
$topheight="5"; $tabheight="30"; $tab2height=""; $botheight="15"; $leftwidth="15"; $rightwidth="10"; $tablewidth="100%";
$boxtable="#635231"; $boxtitle="#B59A6B"; $boxbg="#635231"; $typeuse="B"; $br="0";
$image="block-standardr.gif";
if ($modlayout == $mod) { 
block_type_6($title, $content, $image, $mod, $posted, $morelink);
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
$block="PROX1";
$topheight="5"; $tabheight="30"; $tab2height=""; $botheight="15"; $leftwidth="15"; $rightwidth="10"; 
$image="block-standardr.gif";
$boxtable="#635231"; $boxtitle="#B59A6B"; $boxbg="#635231"; $typeuse="B"; $br="0";
block_type_6($title, $content, $image, $mod, $posted, $morelink);
}
/***********************************************************************/
/* OPENTABLE - CLOSETABLE                                              */
/***********************************************************************/
function OpenTable() {
global $themename,$topheight,$tabheight,$tab2height,$botheight,$leftwidth,$rightwidth,$tablewidth,$themeimage;
global $boxtable,$boxtitle,$boxbg,$block;
$block="PROX8"; $tablewidth="100%"; 
$topheight="20"; $tabheight="26"; $tab2height=""; $botheight="16"; $leftwidth="14"; $rightwidth="14";
$boxtable="#B59A6B"; $boxtitle="#B59A6B"; $boxbg="#635231";
OpenTable_type_5("","",1); 
}
function CloseTable() {
global $themename,$topheight,$tabheight,$tab2height,$botheight,$leftwidth,$rightwidth,$tablewidth,$themeimage;
global $boxtable,$boxtitle,$boxbg,$block;
$block="PROX8";
$topheight="20"; $tabheight="26"; $tab2height=""; $botheight="16"; $leftwidth="14"; $rightwidth="14";
CloseTable_type_5(); 
}
function OpenTable2() {
global $themename,$topheight,$tabheight,$tab2height,$botheight,$leftwidth,$rightwidth,$tablewidth,$themeimage;
global $boxtable,$boxtitle,$boxbg,$block;
$block="PROX8";
$topheight="20"; $tabheight="26"; $tab2height=""; $botheight="16"; $leftwidth="14"; $rightwidth="14";
$boxtable="#B59A6B"; $boxtitle="#B59A6B"; $boxbg="#635231";
OpenTable_type_5("","",1); 
}
function CloseTable2() {
global $themename,$topheight,$tabheight,$tab2height,$botheight,$leftwidth,$rightwidth,$tablewidth,$themeimage;
global $boxtable,$boxtitle,$boxbg,$block;
$block="PROX8";
$topheight="20"; $tabheight="26"; $tab2height=""; $botheight="16"; $leftwidth="14"; $rightwidth="14";
CloseTable_type_5(); 
}
function OpenScreen() {
global $themename,$topheight,$tabheight,$tab2height,$botheight,$leftwidth,$rightwidth,$tablewidth,$themeimage;
global $boxtable,$boxtitle,$boxbg,$block;
$block="PROX6";
$topheight="29"; $tabheight=""; $tab2height=""; $botheight="16"; $leftwidth="24"; $rightwidth="16"; $tablewidth="768";
$boxtable="#635231"; $boxtitle="#635231"; $boxbg="#635231";
OpenTable_type_5("","",1); 
}
function CloseScreen() {
global $themename,$topheight,$tabheight,$tab2height,$botheight,$leftwidth,$rightwidth,$tablewidth,$themeimage;
global $boxtable,$boxtitle,$boxbg,$block;
$block="PROX6";
$topheight="29"; $tabheight=""; $tab2height=""; $botheight="16"; $leftwidth="24"; $rightwidth="16"; $tablewidth="768";
$boxtable="#635231"; $boxtitle="#635231"; $boxbg="#635231";
CloseTable_type_5(); 
}
function OpenLogo() {
global $themename,$topheight,$tabheight,$tab2height,$botheight,$leftwidth,$rightwidth,$tablewidth,$themeimage;
global $boxtable,$boxtitle,$boxbg,$block;
$block="PROX7";
$topheight="5"; $tabheight=""; $tab2height=""; $botheight="5"; $leftwidth="5"; $rightwidth="5";
$boxtable="#635231"; $boxtitle="#635231"; $boxbg="#635231";
OpenTable_type_0("","",1); 
}
function CloseLogo() {
global $themename,$topheight,$tabheight,$tab2height,$botheight,$leftwidth,$rightwidth,$tablewidth,$themeimage;
global $boxtable,$boxtitle,$boxbg,$block;
$block="PROX7";
$topheight="5"; $tabheight=""; $tab2height=""; $botheight="5"; $leftwidth="5"; $rightwidth="5";
$boxtable="#635231"; $boxtitle="#635231"; $boxbg="#635231";
CloseTable_type_0(); 
}
function OpenNavBar() {
global $themename,$topheight,$tabheight,$tab2height,$botheight,$leftwidth,$rightwidth,$tablewidth,$themeimage;
global $boxtable,$boxtitle,$boxbg,$block;
$block="PROX7";
$topheight="5"; $tabheight=""; $tab2height=""; $botheight="5"; $leftwidth="5"; $rightwidth="5";
$boxtable="#635231"; $boxtitle="#635231"; $boxbg="#635231";
OpenTable_type_5("","",1); 
}
function CloseNavBar() {
global $themename,$topheight,$tabheight,$tab2height,$botheight,$leftwidth,$rightwidth,$tablewidth,$themeimage;
global $boxtable,$boxtitle,$boxbg,$block;
$block="PROX7";
$topheight="5"; $tabheight=""; $tab2height=""; $botheight="5"; $leftwidth="5"; $rightwidth="5";
$boxtable="#635231"; $boxtitle="#635231"; $boxbg="#635231";
CloseTable_type_5(); 
}
function OpenUser() {
global $themename,$topheight,$tabheight,$tab2height,$botheight,$leftwidth,$rightwidth,$tablewidth,$themeimage;
global $boxtable,$boxtitle,$boxbg,$block;
$block="PROX7";
$topheight="5"; $tabheight=""; $tab2height=""; $botheight="5"; $leftwidth="5"; $rightwidth="5";
$boxtable="#635231"; $boxtitle="#635231"; $boxbg="#635231";
OpenTable_type_5("","",1); 
}
function CloseUser() {
global $themename,$topheight,$tabheight,$tab2height,$botheight,$leftwidth,$rightwidth,$tablewidth,$themeimage;
global $boxtable,$boxtitle,$boxbg,$block;
$block="PROX7";
$topheight="5"; $tabheight=""; $tab2height=""; $botheight="5"; $leftwidth="5"; $rightwidth="5";
$boxtable="#635231"; $boxtitle="#635231"; $boxbg="#635231";
CloseTable_type_5(); 
}
function OpenSpaceBottom() {
global $themename,$topheight,$tabheight,$tab2height,$botheight,$leftwidth,$rightwidth,$tablewidth,$themeimage;
global $boxtable,$boxtitle,$boxbg,$block;
$block="PROX2";
$topheight="10"; $tabheight="27"; $tab2height="23"; $botheight="15"; $tab2height="27"; $leftwidth="15"; $rightwidth="10";
$boxtable="#B59A6B"; $boxtitle="#B59A6B"; $boxbg="#635231";
OpenTable_type_0("","",1); 
}
function CloseSpaceBottom() {
global $themename,$topheight,$tabheight,$tab2height,$botheight,$leftwidth,$rightwidth,$tablewidth,$themeimage;
global $boxtable,$boxtitle,$boxbg,$block;
$block="PROX2";
$topheight="10"; $tabheight="27"; $tab2height="23"; $botheight="15"; $tab2height="27"; $leftwidth="15"; $rightwidth="10";
$boxtable="#B59A6B"; $boxtitle="#B59A6B"; $boxbg="#635231";
CloseTable_type_0(); 
}
function OpenCoreTable() {
global $themename,$topheight,$tabheight,$tab2height,$botheight,$leftwidth,$rightwidth,$tablewidth,$themeimage;
global $boxtable,$boxtitle,$boxbg,$block;
$block="TRY";
$topheight=""; $tabheight=""; $tab2height=""; $botheight=""; $tab2height=""; $leftwidth=""; $rightwidth="";
$boxtable="#B59A6B"; $boxtitle="#B59A6B"; $boxbg="#635231";
OpenTable_type_0("","",1); 
}
function CloseCoreTable() {
global $themename,$topheight,$tabheight,$tab2height,$botheight,$leftwidth,$rightwidth,$tablewidth,$themeimage;
global $boxtable,$boxtitle,$boxbg,$block;
$block="TRY";
$topheight=""; $tabheight=""; $tab2height=""; $botheight=""; $tab2height=""; $leftwidth=""; $rightwidth="";
$boxtable="#B59A6B"; $boxtitle="#B59A6B"; $boxbg="#635231";
CloseTable_type_0(); 
}
function OpenBlockTop() {
global $themename,$topheight,$tabheight,$tab2height,$botheight,$leftwidth,$rightwidth,$tablewidth,$themeimage;
global $boxtable,$boxtitle,$boxbg,$block;
$block="TRY";
$topheight=""; $tabheight=""; $tab2height=""; $botheight=""; $tab2height=""; $leftwidth=""; $rightwidth="";
$boxtable="#B59A6B"; $boxtitle="#B59A6B"; $boxbg="#635231";
OpenTable_type_0("","",1); 
}
function CloseBlockTop() {
global $themename,$topheight,$tabheight,$tab2height,$botheight,$leftwidth,$rightwidth,$tablewidth,$themeimage;
global $boxtable,$boxtitle,$boxbg,$block;
$block="TRY";
$topheight=""; $tabheight=""; $tab2height=""; $botheight=""; $tab2height=""; $leftwidth=""; $rightwidth="";
$boxtable="#B59A6B"; $boxtitle="#B59A6B"; $boxbg="#635231";
CloseTable_type_0(); 
}
function OpenBlockBottom() {
global $themename,$topheight,$tabheight,$tab2height,$botheight,$leftwidth,$rightwidth,$tablewidth,$themeimage;
global $boxtable,$boxtitle,$boxbg,$block;
$block="TRY4";
$topheight=""; $tabheight=""; $tab2height=""; $botheight=""; $tab2height=""; $leftwidth=""; $rightwidth="";
$boxtable="#B59A6B"; $boxtitle="#B59A6B"; $boxbg="#635231";
OpenTable_type_0("","",1); 
}
function CloseBlockBottom() {
global $themename,$topheight,$tabheight,$tab2height,$botheight,$leftwidth,$rightwidth,$tablewidth,$themeimage;
global $boxtable,$boxtitle,$boxbg,$block;
$block="TRY4";
$topheight=""; $tabheight=""; $tab2height=""; $botheight=""; $tab2height=""; $leftwidth=""; $rightwidth="";
$boxtable="#B59A6B"; $boxtitle="#B59A6B"; $boxbg="#635231";
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
$block="PROX8";
$topheight="20"; $tabheight="26"; $tab2height=""; $botheight="16"; $leftwidth="14"; $rightwidth="14"; $tablewidth="100%";
$boxtable="#B59A6B"; $boxtitle="#B59A6B"; $boxbg="#635231"; $typeuse="A";
$image="block-standardc.gif";
block_type_6($title, $content, $image, $mod, $posted, $morelink);
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
$block="PROX8";
$topheight="20"; $tabheight="26"; $tab2height=""; $botheight="16"; $leftwidth="14"; $rightwidth="14"; $tablewidth="100%";
$image="block-noimage.gif";
$boxtable="#B59A6B"; $boxtitle="#B59A6B"; $boxbg="#635231"; $typeuse="I";
block_type_6($title, $content, $image, $mod, $posted, $morelink);
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
$block="PROX8";
$topheight="20"; $tabheight="26"; $tab2height=""; $botheight="16"; $leftwidth="14"; $rightwidth="14"; $tablewidth="100%";
$boxtable="#B59A6B"; $boxtitle="#B59A6B"; $boxbg="#635231"; $typeuse="A";
$image="block-standardc.gif";
block_type_6($title, $content,$image,"","","");
}
/***********************************************************************/
function FormatStory($thetext, $notes, $aid, $informant) {
FormatStory_type_1($thetext, $notes, $aid, $informant); 
}

?>