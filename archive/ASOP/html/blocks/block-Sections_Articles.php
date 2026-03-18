<?php

/************************************************************************/
/* PHP-NUKE: Web Portal System                                          */
/* ===========================                                          */
/*                                                                      */
/* Copyright (c) 2002 by Francisco Burzi                                */
/* http://phpnuke.org                                                   */
/*                                                                      */
/* This program is free software. You can redistribute it and/or modify */
/* it under the terms of the GNU General Public License as published by */
/* the Free Software Foundation; either version 2 of the License.       */
/************************************************************************/

if (eregi("block-Sections_Articles.php", $_SERVER['PHP_SELF'])) {
    Header("Location: index.php");
    die();
}

global $prefix, $db;

$sql = "SELECT artid, title FROM ".$prefix."_seccont ORDER BY artid DESC LIMIT 0,10";
$result = $db->sql_query($sql);
while ($row = $db->sql_fetchrow($result)) {
    $content .= "<strong><big>&middot;</big></strong>&nbsp;<a href=\"modules.php?name=Sections&amp;op=viewarticle&amp;artid=$row[artid]\">$row[title]</a><br>";
}

?>