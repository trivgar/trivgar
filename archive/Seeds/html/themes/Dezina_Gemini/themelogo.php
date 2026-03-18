
<?
/*******************************************************************************/
/* Themelogo standard                                                          */
/* THEME EDITOR for Proxima add-on                                             */
/* Copyright (c) 2002 by Roberto Beltrame (r.beltrame@libero.it)               */
/* http://www.php-proxima.com                                                  */
/*-----------------------------------------------------------------------------*/
/* This program is free software. You can redistribute it and/or modify        */
/* it under the terms of the GNU General Public License as published by        */
/* the Free Software Foundation; either version 2 of the License.              */
/*******************************************************************************/
global $themename,$banners,$sitename,$table;
echo "
<!-- Start logo box -->
<table width=\"$table\"> 
<tr>
<td>
<img src=\"themes/$themename/images/logo.gif\" alt=\"$sitename\">
</td>\n";
if ($banners==1 || $banners==3) {
   echo "<td align=right>";
   include("banners.php");
   echo "</td>";
}
echo "
</tr>
</table>\n";
?>

