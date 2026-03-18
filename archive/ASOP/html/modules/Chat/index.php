<?php


#########################################################################
#                                                                       #
# Modulo de chat creado por José Luis Chafardet G. (tucaracas.com)      #
# con ayuda de Drago (dragolistas.com)                                  #
#                                                                       #
# Servidor Usado: irc.webchatx.org ([WCX] Network                       #
#                                                                       #
#                                                                       #
#########################################################################

 if (!eregi("modules.php", $PHP_SELF)) {
	die ("No puedes accesar este archivo directamente...");
    }
	if(!isset($mainfile)) { include("mainfile.php"); } 


include ('header.php'); 

function chatbox($title, $content) {
    
    echo "<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">"
	."<tr>\n<td>"
    ."<b>$title</b></td>\n</tr>\n"
    ."<tr>\n<td>"
    ."\n";
    if (file_exists($content)) {
		$fp = fopen ($content, "r");
		$content = fread($fp, filesize($content));
		fclose ($fp);
		$content = "?>$content<?";
		echo eval($content);
	} else {
		echo $content;
	}
	echo "\n"
    ."</td>\n</tr>\n</table>\n<br>\n\n";
}

function online2() { 
global $prefix; 
$count = 0; 

if (is_user($user)) {
        $result = mysql_query("select user_id from $prefix"._users." where username='$uname'");
        list($uid) = mysql_fetch_row($result);
        }
        $usernameResult = mysql_query("SELECT uname FROM ".$prefix."_session WHERE guest='0' ORDER BY uname ASC");
        $numUsersOnline = mysql_num_rows($usernameResult);
    if (is_user($user)) {
        $result = mysql_query("select user_id from ".$prefix."_users where username='$uname'");
        list($uid) = mysql_fetch_row($result);
        
    } else {
        $usernameResult = mysql_query("SELECT uname FROM ".$prefix."_session WHERE guest='0' ORDER BY uname ASC");
        $numUsersOnline = mysql_num_rows($usernameResult);
		}
		if ($numUsersOnline<=0) {	
	$content .= "<center><b>No hay miembros conectados</b></center>";
	}	 
    if ($numUsersOnline>0) {
        $content .= "<b>Who is online:</b>";
             while($row = mysql_fetch_array($usernameResult)){
             $username = $row[uname];
			 $nickname = $username;
             $content .= "&nbsp;<img src=\"modules/Chat/images/users.gif\" align=\"absmiddle\">&nbsp;<a href=modules.php?name=Your_Account&op=userinfo&uname=$username><b>$username</b></a>&nbsp;";
            	
  }
}
	
chatbox($title, $content);
}

function lastregister() {
global $prefix;

$result = mysql_query("select username from $prefix"._users." order by user_id DESC limit 0,1");

    while(list($lastuser) = mysql_fetch_row($result)) {
    $content .= "<img src=\"modules/Chat/images/members.gif\" align=\"absmiddle\">&nbsp;"._GREETINGS." <A HREF=\"user.php?op=userinfo&amp;uname=$lastuser\">$lastuser</a>";
	
	}
   
chatbox($title, $content);
}

function online3() { 
global $prefix; 
$count = 0; 
$result = mysql_query("SELECT uname FROM $prefix"._session." where guest=1"); 
      $guest_online_count = mysql_num_rows($result); 
      $result = mysql_query("SELECT uname FROM $prefix"._session." where guest=0"); 
      $member_online_count = mysql_num_rows($result); 
$content .= "<center>"._CURRENTLY." <b>$guest_online_count</b> "._GUESTS." <b>$member_online_count</b> "._MEMBERS."</center>";
   
chatbox($title, $content);
}

global $bgcolor1, $bgcolor2, $bgcolor3, $bgcolor4, $slogan;
Opentable();
include("modules/Chat/chat.php");
echo "Powered by: <b><a href=\"http://www.xirc.org\" target=\"_blank\">[xIRC] Network</a></b><br>\n";
Closetable();
 
include("footer.php");

?>