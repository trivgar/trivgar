<?php
/***************************************************************************
 *                               pagestart.php
 *                            -------------------
 *   begin                : Thursday, Aug 2, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: pagestart.php,v 1.1.2.4 2002/11/30 21:37:43 psotfx Exp $
 *
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

if (!defined('IN_PHPBB'))
{
	die("Hacking attempt");
}

define('IN_ADMIN', true);
$forum_admin = 1;
include("../../../mainfile.php");
include($phpbb_root_path.'common.'.$phpEx);
//
// Do a check to see if the nuke user is still valid.
//

global $admin;
$admin = base64_decode($admin);
$admin = explode(":", $admin);
$aid = "$admin[0]";
$sql = "SELECT radminforum, radminsuper FROM ".$prefix."_authors WHERE aid='$aid'";
$result = $db->sql_query($sql);
$row = $db->sql_fetchrow($result);

if (!is_admin($admin) AND ($row[radminsuper] != 1 OR $row[radminforum] != 1)) {
    message_die(GENERAL_MESSAGE, "You are not authorised to administer this board");
}
/*
global $cookie, $nukeuser;
$user = base64_decode($user);
$cookie = explode(":", $user);
$sql = "SELECT user_id, user_password FROM " . USERS_TABLE . "
        WHERE username='$cookie[1]'";
$result = $db->sql_query($sql);
if(!$result) {
    message_die(GENERAL_ERROR, 'Could not query user account', '', __LINE__, __FILE__, $sql);
}
$row = $db->sql_fetchrow($result);
if ($cookie[2] == $row['user_password'] && $row['user_password'] != "") {
    $nukeuser = $user;
} else {
    unset($user);
    unset($cookie);
    message_die(GENERAL_MESSAGE, "You are not authorised to administer this board");
}
*/
//
// Start session management
//
$userdata = session_pagestart($user_ip, PAGE_INDEX, $nukeuser);
init_userprefs($userdata);
//
// End session management
//
/*
if( !$userdata['session_logged_in'] )
{
	$header_location = ( @preg_match('/Microsoft|WebSTAR|Xitami/', $_SERVER['SERVER_SOFTWARE']) ) ? 'Refresh: 0; URL=' : 'Location: ';
	header($header_location . '../../../' . append_sid("login.$phpEx?redirect=admin/"));
	exit;
}
else if( $userdata['user_level'] != ADMIN )
{
	message_die(GENERAL_MESSAGE, $lang['Not_admin']);
}
*/
if ( empty($no_page_header) )
{
	// Not including the pageheader can be neccesarry if META tags are
	// needed in the calling script.
	include('./page_header_admin.'.$phpEx);
}

?>