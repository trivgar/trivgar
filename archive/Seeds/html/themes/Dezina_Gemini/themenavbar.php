
<?
/************************************************************************/
/* NAVBAR FOR THEME TEMPLATE FOR THEME-EDITOR                           */
/* Copyright (c) 2002 by Roberto Beltrame (r.beltrame@libero.it)        */
/* http://www.php-proxima.com                                           */
/*----------------------------------------------------------------------*/
/* THIS THEME-TEMPLATE WORK ONLY WITH PROXIMA ADD-ON                    */
/* A MODIFY OF PHP-NUKE BY Roberto Beltrame                             */
/* and Domenico by Vivituscia (http://www.vivituscia.com)               */
/************************************************************************/
/* This program is free software. You can redistribute it and/or modify */
/* it under the terms of the GNU General Public License as published by */
/* the Free Software Foundation; either version 2 of the License.       */
/************************************************************************/
global $prefix, $dbi, $admin, $currentlang;
/*********************************************/
$maxitem=$itemnavbar;
/*********************************************/
$widthitem=(100/$maxitem);
echo "
<!-- Top Navigation Buttons -->
<table cellpadding=\"0\" cellspacing=\"1\" width=\"100%\" border=\"0\" align=\"center\" bgcolor=$navtable>
<tr>
<td width=\"$widthitem%\" bgcolor=\"$navbghome\" class=\"navbar\" align=\"center\" style=\"cursor:hand\" onMouseOver=\"this.style.background='$navoverhome'\" onMouseOut=\"this.style.background='$navouthome'\" onClick=\"window.location.href='index.php'\"><a href=\"index.php\"><font class=navbar>Home</font></a></td>\n";
$item=1;
$result = sql_query("select title,custom_title, mid from ".$prefix."_modules where active='1' ORDER BY title ASC", $dbi);
while(list($m_title) = sql_fetch_row($result, $dbi)) {
  if ($cust_title !="") {
  $m_title=$cust_title; }
  $m_title2 = ereg_replace("_", " ", $m_title);
  $xname = ereg_replace("_", " ", $m_title);
  $dummy = ereg("NS-",$m_title);
  if ($dummy == "") {
    if ($item==$maxitem) {
       echo "</tr><tr>\n";
       $item=0; }
       echo "<td width=\"$widthitem%\" bgcolor=\"$navbg\" class=\"navbar\" align=\"center\" style=\"cursor:hand\" onMouseOver=\"this.style.background='$navover'\" onMouseOut=\"this.style.background='$navout'\" onClick=\"window.location.href='modules.php?name=$m_title'\"><a href=\"modules.php?name=$m_title\"><font class=navbar>$m_title2</a></td>\n";
       $item++;
    }
  }
echo "</tr></table>\n";
?>