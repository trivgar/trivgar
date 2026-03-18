<?php
/*---------------------------------------------------*
        File: auth.php
 Description: login authorisation file for news pro
   Copyright: (c) n-12.net
 *---------------------------------------------------*/
 
require('path.inc');
require($path.'/config.php');
$loginclass = new loginclass;
$adminclass = new adminclass;
$postsclass = new postsclass;
$prefsclass = new prefsclass;
$emoticonsclass = new emoticonsclass;
$miscclass = new miscclass;
$backupclass = new backupclass;


// Make a database connection.
if(!$db = @mysql_connect("$dbhost", "$dbuser", "$dbpasswd"))
	die('<font size=+1>An Error Occured</font><hr>N-12 News Pro was unable to connect to the database. <BR>Please check $dbhost, $dbuser, and $dbpasswd in config.php.');
if(!@mysql_select_db("$dbname",$db))
	die("<font size=+1>An Error Occured</font><hr>N-12 News Pro was unable to find the database <b>$dbname</b> on your MySQL server. <br>Please make sure you ran the N-12 News Pro installation script.");

// Have to set these Variables here
$logged_in = 0;

// Check if user is Logged in as Admin

if(isset($HTTP_COOKIE_VARS[N12NEWSID])) {
	$userid = $HTTP_COOKIE_VARS[N12NEWSID];
	$user = $loginclass->get_userstatus_from_userid($userid, $dbprefix, $db);
}
if(isset($HTTP_COOKIE_VARS[N12NEWSIP])) {
	$IP = $HTTP_COOKIE_VARS[N12NEWSIP];
}

if($user[user_ip] != '' && $IP != '') {
	if($user[user_ip] == $IP) {
   	  $logged_in = 1;
	}
}
?>
