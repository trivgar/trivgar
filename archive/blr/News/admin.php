<?php
/*---------------------------------------------------*
        File: admin.php
 Description: administration file for news pro
   Copyright: (c) n-12.net
 *---------------------------------------------------*/

$newsv = "3.00";
require('path.inc');
require($path.'/functions.php');
require($path.'/config.php');
require($path.'/auth.php');

if($logged_in == 1) {
switch($mode) {
	
    default:
    admin();
    break;

/****************************************** Admin Options *******************************************/
    case "addadmin":
    if($user[user_level] == 2) {
    $adminclass->Addadmin();
    } else {
    OpenTable();
    echo "<font>Sorry but you do not have Access to this section</font>";
    CloseTable();
    }
    break;
    
    case "viewadmin":
    if($user[user_level] == 2) {
    $adminclass->Viewadmin($dbprefix, $user[user_id]);
    } else {
    OpenTable();
    echo "<font>Sorry but you do not have Access to this section</font>";
    CloseTable();
    }
    break;

    case "deladmin":
    if($user[user_level] == 2) {
    $adminclass->deladmin($dbprefix, $adminid);
    } else {
    OpenTable();
    echo "<font>Sorry but you do not have Access to this section</font>";
    CloseTable();
    }
    break;

    case "saveadmin":
    if($user[user_level] != 2) {
    if($user[user_id] != $adminid) {
    OpenTable();
    echo ("<font>Sorry but you do not have Access to this section</font>");
    CloseTable();
    } else {
    if($password <> $password2) {
    die ("The passwords you gave didn't Match! Please go back and try again!");
    }
    if($password == '' && $password2 == '') {
    $password = "none";
    }
    $adminclass->saveadmin($password, $email, $adminid, $level);
    }
    } else {
    if($password <> $password2) {
    die ("The passwords you gave didn't Match! Please go back and try again!");
    }
    if($password == '' && $password2 == '') {
    $password = "none";
    }
    $adminclass->saveadmin($password, $email, $adminid, $level);
    }
    break;

    case "editadmin":
    if($user[user_level] != 2) {
    if($user[user_id] != $adminid) {
    OpenTable();
    echo ("<font>Sorry but you do not have Access to this section</font>");
    CloseTable();
    } else {
    $adminclass->editadmin($adminid);
    }
    } else {
    $adminclass->editadmin($adminid);
    }
    break;

    case "createadmin":
    if($user[user_level] == 2) {
    if($newpassword <> $newpassword2) {
    die ("The passwords you gave didn't Match! Please go back and try again!");
    }
    $adminclass->Createadmin($newusername, $newpassword, $newemail, $level, $dbprefix, $db);
    } else {
    OpenTable();
    echo "Sorry but you do not have Access to this section";
    CloseTable();
    }
    break;
    
/****************************************** BackupDB Options ****************************************/

    case "backup":
    if($user[user_level] == 2) {
    $backupclass->Backup();
    } else {
    OpenTable();
    echo "<font>Sorry but you do not have Access to this section</font>";
    CloseTable();
    }
    break;

    case "backupdb":
    if($user[user_level] == 2) {
    $backupclass->Backupdb();
    } else {
    OpenTable();
    echo "<font>Sorry but you do not have Access to this section</font>";
    CloseTable();
    }
    break;

/****************************************** Prefs Options *******************************************/

    case "config":
    if($user[user_level] == 2) {
    $prefsclass->Configure();
    } else {
    OpenTable();
    echo "<font>Sorry but you do not have Access to this section</font>";
    CloseTable();
    }
    break;
    
    case "ConfigSave":
    if($user[user_level] == 2) {
    $prefsclass->ConfigSave($xDefault_Theme, $countx, $urlx, $pathx, $commentsx, $updateurl);
    } else {
    OpenTable();
    echo "Sorry but you do not have Access to this section";
    CloseTable();
    }
    break;
    
/****************************************** Posts Options *******************************************/

    case "rempost":
    $postsclass->remposts($dbprefix);
    break;

    case "delete":
    global $user;
    $msg = get_msg_from_msg_id($msgid, $dbprefix, $db);
    
    	if($user[user_id] != $msg[msg_poster] && $user[user_level] != 2) {
    	  OpenTable();
    	  echo "<font>Sorry but this is not your Post so you cannot Delete it!</font>";
    	  CloseTable();
    	} elseif($user[user_id] == $msg[msg_poster] || $user[user_level] == 2) {
    	  $postsclass->delete($msgid, $dbprefix);
    	}
    break;

    case "post":
    $postsclass->post();
    break;        

    case "modpost":
    	if($user[user_id] != $msg[msg_poster] && $user[user_level] != 2) {
    	  OpenTable();
    	  echo "<font>Sorry but this is not your Post so you cannot Edit it!</font>";
    	  CloseTable();
    	} elseif($user[user_id] == $msg[msg_poster] || $user[user_level] == 2) {
    	$postsclass->modpost($msgid, $dbprefix, $db);
    	}
    break;
            
    case "NewsSave":
    $postsclass->NewsSave($dbprefix, $user[user_id], $news, $subject, $db);
    break;
    
    case "ModSave":
    
    $msg = get_msg_from_msg_id($msgid, $dbprefix, $db);
    	if($user[user_id] != $msg[msg_poster] && $user[user_level] != 2) {
    	  OpenTable();
    	  echo "<font>Sorry but this is not your Post so you cannot Edit it!</font>";
    	  CloseTable();
    	} elseif($user[user_id] == $msg[msg_poster] || $user[user_level] == 2) {
    	$postsclass->modsave($dbprefix, $news, $subject, $msgid, $db);
    	}
    break;    
        
/****************************************** Misc Options ********************************************/

    case "cred":
    $miscclass->cred();
    break;
            
    case "about":
    $miscclass->about();
    break;

    case "update":
    if($user[user_level] == 2) {
    $miscclass->update($newsv);
    } else {
    OpenTable();
    echo "<font>Sorry but you do not have Access to this section</font>";
    CloseTable();
    }
    break;
    
/****************************************** Not Logged In *******************************************/
}
} else {
OpenTable();
echo "<font>You are not logged in! Please <a href=\"login.php\">Click Here</a> to log in!</font>";
CloseTable();
}
?>