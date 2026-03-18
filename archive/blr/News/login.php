<?php
/*---------------------------------------------------*
        File: login.php
 Description: login file for news pro
   Copyright: (c) n-12.net
 *---------------------------------------------------*/
require('path.inc');
require($path.'/functions.php');
require($path.'/config.php');
require($path.'/auth.php');

if (!$submit) {
OpenTable();
 ?>
	<font><form name="" method="post" action="<?php echo $PHP_SELF?>">
	  <p align="center">Username:<br>
	    <input type="text" name="username">
	    <br>
    	Password: <br>
   	 <input type="password" name="passwd">
   	 <br>
   	 Remember Me <input type="checkbox" name="remember" value="1">
   	 <br>
   	 <input type="submit" name="submit" value="Login">
   	 <br>
  	</p>
  	</form></font>
 <?

CloseTable();
} else { // Something has been submitted

	if ($username == '' || $passwd == '') {
		die ("<body onload=\"alert('You did not fill in one of the fields');window.history.back()\">");
	}
	if (!$loginclass->check_username($username, $dbprefix, $db)) {
		die ("<body onload=\"alert('The Username you have given is not in the database');window.history.back()\">");
	}
	if (!$loginclass->check_user_pw($username, $passwd, $dbprefix, $db)) {
		die ("<body onload=\"alert('That is the Wrong password');window.history.back()\">");
	}
	if($remember != '1') {
	$IP = $REMOTE_ADDR;
	$user = $loginclass->get_userdata($username, $dbprefix, $db);
	$loginclass->set_ip_cookie($IP);
	$loginclass->set_id_cookie($user[user_id]);
	$loginclass->update_ip($IP, $user[user_id], $dbprefix);

		header("Location: admin.php");
	} else {
	$IP = '0';
	$user = $loginclass->get_userdata($username, $dbprefix, $db);
	$loginclass->set_longip_cookie($IP);
	$loginclass->set_longid_cookie($user[user_id]);
	$loginclass->update_ip($IP, $user[user_id], $dbprefix);

		header("Location: admin.php");
	}

}
?>