
<?
/************************************************************************/
/* PHP-NUKE: Web Portal System                                          */
/* ===========================                                          */
/* Copyright (c) 2001 by Francisco Burzi (fbc@mandrakesoft.com)         */
/* http://phpnuke.org                                                   */
/************************************************************************/
/* THEME TEMPLATE FOR THEME-EDITOR                                      */
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
global  $table,$themename;
global $nukeurl, $slogan, $table, $foot1, $foot2, $foot3, $foot4, $themename;
echo "
<table width=\"100%\" border=\"0\"><tr>
<td align=\"center\">
<font class=\"slogan\"><br>$slogan<br></font>
</td>
</tr></table>\n";
/*** footer ***/
global $nukeurl, $slogan, $table, $foot1, $foot2, $foot3, $foot4, $themename;
$footer_message = footmsg();
    echo "<table width=100% border=0><tr>\n"
    ."<td align=\"center\"></td>\n"
	."</tr></table>\n"
    ."</tr></td\n>";
?>