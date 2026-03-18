<?php

##########################################################
#                                                        #
# PHP-NUKE: Web Portal System: CRoom Addon v1.2          #
# (c) [WCX] Network                                      #
# irc.webchatx.org                                       #
# This addon has been modified from its original version #
# To fit it to PHP-Nuke 6 and Croom 2.0.1-SEC            #
# Original credits are as follow:                        #
#                                                        #
#========================================================#
/*  Web_Chat Addon 2.0
    
    PHPNuke 5, Author Francisco Burzi (fburzi@ncc.org.ve)
    http://www.phpnuke.org/

    php Addon Web_Chat 2.0 - Copyright (c) 2001 by Jack Kozbial
    http://www.InternetIntl.com
    
	For Terms & Conditions using WebMaster Chat on your web page
	go to http://www.webmaster.com
*/
##########################################################
#                                                        #
# I do honestly reccomend you if you will use a chatroom #
# Host it in irc.webchatx.org - /server irc.webchatx.org #
# they are a small great network                         #
# but a really nice one, I'm the Server Administrator    #
# Any questions, feel free to send me a memo             #
# /MemoServ SEND Jungl3M4n YOURMESSAGE                   #
#                                                        #
#========================================================#
#                                                        #
# Addon to get nicknames for general purposes            #
# Created to be used with a Conference Room Chat addon   #
# By José Luis Chafardet - Jungl3M4n in www.phpnuke.org  #
# Forums.                                                #
# Copyright (c) 2003 by José Luis Chafardet G.           #
##########################################################

if (eregi("GetNickName.php", $PHP_SELF)) {
    Header("Location: index.php");
    die("No se puede accesar el archivo direectamente...");
}

if(!isset($mainfile)){
       include("mainfile.php");
}

global $user, $cookie, $prefix, $dbi, $user_prefix;

cookiedecode($user);
$ip = getenv("REMOTE_ADDR");
$username = $cookie[1];
if (!isset($username)) {
    $username = "Guest";
    $guest = 1;
}

$result = sql_query("SELECT uname FROM ".$prefix."_session where guest='1'", $dbi);
$guest_online_num = sql_num_rows($result, $dbi);

$result = sql_query("SELECT uname FROM ".$prefix."_session where guest='0'", $dbi);
$member_online_num = sql_num_rows($result, $dbi);

	$content = "$username";
	
?>