<?php
/*---------------------------------------------------*
        File: functions.php
 Description: base functions file for news pro
   Copyright: (c) n-12.net
 *---------------------------------------------------*/
 
include('path.inc');
include($path.'/config.php');
 
 $newsv = "3.00";

if (substr(phpversion(), 0, 1) == 3) { 
$PHP_SELF = $HTTP_SERVER_VARS['PHP_SELF'];
}


// main admin section
function admin() {
	include ("path.inc");
    include ($path."/config.php");
    OpenTable();
    echo "<font>Welcome to n-12 news Administration.<br><bR><br>On this section of your site you can modify the many aspects of your news section.<br>Use the left hand navigation system to access the diffrent sections</font>";
    CloseTable();
}

function error($error) {
echo $error;
CloseTable();
}

/******************************************* Open Table *********************************************/

// global open function

function OpenTable() {
global $ntype, $newsv, $user, $logged_in, $php_active_build;
	include ("path.inc");
    include ($path."/config.php");
	echo "<head><title>N-12 News Pro - v $newsv</title><link rel='stylesheet' type='text/css' href='admin/admin.css'>
</head>

<body link='#000080' vlink='#000080' alink='#000080' topmargin='0' leftmargin='0'>

<div align='center'>
  <center>
  <table border='0' cellpadding='2' cellspacing='0' width='100%' height='100%'>
    <tr>
      <td width='15%' background='admin/adbg.gif'>
        <p align='center'><font class='adminhead'>n-12 news pro</font></td>
      <td width='85%' background='admin/adbg.gif'>
        <p align='center'><font class='adminhead'>Administration</font></td>
    </tr>
    <tr>
      <td width='15%' valign='top' style='border-top: 1 solid #000000'>
<table border='0' cellpadding='2' cellspacing='0' width='100%'>
    <tr>
      <td width='100%' style='border: 1 solid #000000' background='admin/adbg.gif'><font class='adminhead'><b>-
        Main</b></font></td>
    </tr>
    <tr>
      <td width='100%' background='admin/adlo.jpg'  style='border-left: 1 solid #000000; border-right: 1 solid #000000; border-bottom: 1 solid #000000'><font size='1'>
<a href='admin.php'>Admin Main</a><br><a href='index.php' target=_blank>Return To Index</a><br>  &nbsp;
";
if(!$user[user_level]) {
?>
<img src='admin/lin.gif'> <a href='login.php'>Login</a>
<?
} else {
?>
<img src='admin/lout.gif'> <a href='logout.php'>Logout</a>
<?
}
echo"</tr>
  </table>
&nbsp;
  <table border='0' cellpadding='2' cellspacing='0' width='100%'>
    <tr>
      <td width='100%' style='border: 1 solid #000000' background='admin/adbg.gif'><font class='adminhead'><b>-
        My Details</b></font></td>
    </tr>
    <tr>
      <td width='100%' background='admin/adlo.jpg' style='border-left: 1 solid #000000; border-right: 1 solid #000000; border-bottom: 1 solid #000000'><font size='1'>
    <img src='admin/view.gif'> <a href='admin.php?mode=editadmin&adminid=".$user[user_id]."'>My Details</a>
        </font></td>
    </tr>
  </table>
  &nbsp;
  <table border='0' cellpadding='2' cellspacing='0' width='100%'>
    <tr>
      <td width='100%' style='border: 1 solid #000000' background='admin/adbg.gif'><font class='adminhead'><b>-
        Post</b></font></td>
    </tr>    <tr>
      <td width='100%' background='admin/adlo.jpg'  style='border-left: 1 solid #000000; border-right: 1 solid #000000; border-bottom: 1 solid #000000'><font size='1'>    <img src='admin/post.gif'> <a href='admin.php?mode=post'>Post</a>
    <br>
    <img src='admin/modi.gif'> <a href='admin.php?mode=rempost'>Modify Posts</a>
        </font></td>
    </tr>
  </table>";
if($user[user_level] == '2') {
echo"
&nbsp;
  <table border='0' cellpadding='2' cellspacing='0' width='100%'>
    <tr>
      <td width='100%' style='border: 1 solid #000000' background='admin/adbg.gif'><font class='adminhead'><b>-
        Admins</b></font></td>
    </tr>
    <tr>
      <td width='100%' background='admin/adlo.jpg'  style='border-left: 1 solid #000000; border-right: 1 solid #000000; border-bottom: 1 solid #000000'><font size='1'>    <img src='admin/add.gif'> <a href='admin.php?mode=addadmin'>Create Admin</a>
    <br>
    <img src='admin/view.gif'> <a href='admin.php?mode=viewadmin'>View Admins</a>
        </font></td>
    </tr>
  </table>
&nbsp;
  <table border='0' cellpadding='2' cellspacing='0' width='100%'>
    <tr>
      <td width='100%' style='border: 1 solid #000000' background='admin/adbg.gif'><font class='adminhead'><b>-
        Comments</b></font></td>
    </tr>
    <tr>
      <td width='100%' background='admin/adlo.jpg'  style='border-left: 1 solid #000000; border-right: 1 solid #000000; border-bottom: 1 solid #000000'><font size='1'>    <img src='admin/comment.gif'> <a href='comments.php?mode=admin'>Edit Comments</a>
        </font></td>
    </tr>
  </table>

&nbsp;

<table border='0' cellpadding='2' cellspacing='0' width='100%'>
    <tr>
      <td width='100%' style='border: 1 solid #000000' background='admin/adbg.gif'><font class='adminhead'><b>-
        Options</b></font></td>
    </tr>
    <tr>
      <td width='100%' background='admin/adlo.jpg' style='border-left: 1 solid #000000; border-right: 1 solid #000000; border-bottom: 1 solid #000000'><font size='1'>
    <img src='admin/prefs.gif'> <a href='admin.php?mode=config'>Prefrences</a><br>
    <img src='admin/backup.gif'> <a href='admin.php?mode=backup'>Backup DB</a>
 </font></td>
    </tr>
  </table>";
}
echo"&nbsp;

<table border='0' cellpadding='2' cellspacing='0' width='100%'>
    <tr>
      <td width='100%' style='border: 1 solid #000000' background='admin/adbg.gif'><font class='adminhead'><b>-
        About</b></font></td>
    </tr>
    <tr>
      <td width='100%' background='admin/adlo.jpg' style='border-left: 1 solid #000000; border-right: 1 solid #000000; border-bottom: 1 solid #000000'><font size='1'>
       <img src='admin/help.gif'> <a href='admin.php?mode=about'>Help/About</a>
    <br>
    <img src='admin/credits.gif' > <a href='admin.php?mode=cred'>Credits</a> </font></td>
    </tr>
  </table>
</td>
      <td width='75%' valign='top' style='border-left: 1 solid #c0c0c0; border-top: 1 solid #000000; border-bottom: 1 solid #c0c0c0'>";
   }

/****************************************** Close Table *********************************************/

// global close function
function CloseTable() {
	global $newsv, $user;
	echo "</td>
    </tr>
    <tr>
      <td width='15%'>
        <p align='center'><a href='http://www.php.net'><img src='admin/powbyphp.gif' border='0'></a></p>
      </td>
      <td width='85%'><font face='Verdana' size='1'>&copy; 2002 n-12.net<br>v $newsv";
echo"</font>
     </td>
    </tr>
  </table>
  </center>
</div>";
}    

/****************************************** Strip Slash Array ****************************************/

// Use $variable = stripslashes_array($variable_array);

function stripslashes_array($arr = array()) {
        $rs = array();

	while (list($key,$val) = each($arr)) {
		$rs[$key] = stripslashes($val);
	}

	return $rs;
}

/****************************************** Login Options *******************************************/

class loginclass {

 function check_username($username, $dbprefix, $db) {
 	$username = addslashes($username);
	$sql = "SELECT user_id FROM ".$dbprefix."users WHERE (username = '$username')";
	$resultID = mysql_query($sql);
	if (!$resultID) {
		echo mysql_error() . "<br>";
		die("Error doing DB query in check_username()");
	}
	return mysql_num_rows($resultID);

 } // check_username()


 function check_user_pw($username, $password, $dbprefix, $db) {
	$password = md5($password);
	$sql = "SELECT user_id FROM ".$dbprefix."users WHERE (username = '$username') AND (user_password = '$password')";
	$resultID = mysql_query($sql, $db);
	if (!$resultID) {
		echo mysql_error() . "<br>";
		die("Error doing DB query in check_user_pw()");
	}
	return mysql_num_rows($resultID);
 } // check_user_pw()


 function get_userstatus_from_userid($userid, $dbprefix, $db) {
	
	$sql = "SELECT * FROM ".$dbprefix."users WHERE user_id = '$userid'";
	if(!$result = mysql_query($sql, $db)) {
		$userdata = array("error" => "1");
		return ($user);
	}
	if(!$myrow = mysql_fetch_array($result)) {
		$userdata = array("error" => "1");
		return ($user);
	}
	
	return($myrow);
 }
 
 function get_userdata($username, $dbprefix, $db) {
	$username = addslashes($username);
	$sql = "SELECT * FROM ".$dbprefix."users WHERE username = '$username'";
	if(!$result = mysql_query($sql, $db))
		$userdata = array("error" => "1");
	if(!$myrow = mysql_fetch_array($result))
		$userdata = array("error" => "1");
	
	return($myrow);
 }
 
 function set_ip_cookie($IP) {
	setcookie('N12NEWSIP',$IP);
 }


 function set_id_cookie($user_id) {
	setcookie('N12NEWSID',$user_id);
 }

 function set_longip_cookie($IP) {
	setcookie('N12NEWSIP',$IP,'3153600');
 }


 function set_longid_cookie($user_id) {
	setcookie('N12NEWSID',$user_id,'3153600');
 }

 function update_ip($IP, $user_id, $dbprefix) {
	$sql = "UPDATE ".$dbprefix."users SET user_ip='$IP' WHERE (user_id = '$user_id')" or die("unable to update db");
	$result = mysql_query($sql);
 }

}


 function get_msg_from_msg_id($msgid, $dbprefix, $db) {
	
	$sql = "SELECT * FROM ".$dbprefix."news WHERE msg_id = '$msgid'";
	if(!$result = mysql_query($sql, $db))
		$msgdata = array("error" => "1");
	if(!$myrow = mysql_fetch_array($result))
		$msgdata = array("error" => "1");
		
	$myrow = stripslashes_array($myrow);
	
	return($myrow);
 }


/****************************************** Admin Options ********************************************/


class adminclass {

 function deladmin($dbprefix, $adminid) {
    $result = mysql_query("DELETE FROM ".$dbprefix."users WHERE user_id = '".$adminid."'");
    if (!$result) {
	echo mysql_errno(). ": ".mysql_error(). "<br>";
	return;
    }
    Header("Location: admin.php?mode=viewadmin");
 }


 function Viewadmin($dbprefix, $userid) {
    OpenTable();

    // access database table that holds the Admins
    $query = "SELECT * FROM ".$dbprefix."users WHERE user_id <> ".$userid." order by 'user_id'"; 
    $query_result_handle = mysql_query ($query) 
    or die (mysql_error()); 

    // check that there are other admins
      $num_of_rows = mysql_num_rows ($query_result_handle) 
    or die (error("<font>There were no other Admins found in the database!</font>"));

    echo "<table width='50%' cellspacing='0'><tr><td bgcolor='c0c0c0' colspan='5'><font>Admins found in the database:</font></td></tr>";


    // get news from db
    while ($row = mysql_fetch_array($query_result_handle))
    {
    if($row[user_level] == 2) {
    $row[username] = "*".$row[username];
    }
    // main part of html
    ?>

    <tr bgcolor="#c0c0c0">
      <td width="10%" ><font>Username:</font></td>
      <td width="60%"><font><?php echo $row[username]; ?></font></td>
      <td width="5%"><font>UserID:</font></td>
      <td width="5%" align="left"><font><?php echo $row[user_id]; ?></font></td>
      <td width="20%" align="center"><font>
      <a href="admin.php?mode=editadmin&adminid=<?php echo $row[user_id]; ?>"><img src="admin/edit.gif" border="0" title="Edit <?php echo $row[username]; ?>"></a>&nbsp;&nbsp; 
      <a href="<?echo $PHP_SELF;?>?mode=deladmin&adminid=<?php echo $row[user_id]; ?>"><img src="admin/delete.gif" border="0" title="Delete <?php echo $row[username]; ?>"  onClick="return confirm('Are You Sure?\n'+
                                       '_____________________________________________________________\n\n'+
                                       'This will delete the selected admin: <? echo $row[username]; ?> \n'+
                                       'This cannot be undone unless a backup has been made\n\n'+
                                       'Click OK to continue.');"></a></font></td>
    </tr>
  
   
    <?php
     }  
    echo "</table><font color=red class='important'><b>* Means they are an Admin</b></font>";
    echo "<br><br><br>";
    CloseTable();
 }


 function Addadmin() {
    OpenTable();
    ?>
    <form method="post" action="">
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="28%"><font face='Verdana' size='2'>Username:</font></td>
          <td width="72%">
            <input type="text" name="newusername" size="30">
          </td>
        </tr>
        <tr>
          <td width="28%"><font face='Verdana' size='2'>Password:</font></td>
          <td width="72%">
            <input type="password" name="newpassword" size="30">
          </td>
        </tr>
        <tr>
          <td width="28%"><font face='Verdana' size='2'>Retype Password:</font></td>
          <td width="72%">
            <input type="password" name="newpassword2" size="30">
          </td>
        </tr>
        <tr>
          <td width="28%"><font face='Verdana' size='2'>Email Address:</font></td>
          <td width="72%">
            <input type="text" name="newemail" size="30">
          </td>
        </tr>
        <tr>
          <td width="28%"><font face='Verdana' size='2'>User Level:</font></td>
          <td width="72%">
        <select name="level">
          <option value="2" selected>Admin</option>
          <option value="1">Poster Only</option>
        </select>
          </td>
        </tr>

      </table>
      <p> 
        <input type="hidden" name="mode" value="createadmin">
        <input type="submit" name="Submit" value="Create">
    </p>
      </form>
    <?
    CloseTable();
 }

 function editadmin($adminid) {
 global $user;
 include("path.inc");
 include($path."/config.php");
 include($path."/auth.php");
 
 if($user[user_level] != 2) {
    if($user[user_id] != $adminid) {
      OpenTable();
      echo "Sorry but you can only edit your Own personal profile!";
      CloseTable();
      die();
    }
 }
  $query = "SELECT * FROM ".$dbprefix."users WHERE user_id = '".$adminid."'"; 
  $query_result_handle = mysql_query ($query) 
  or die (mysql_error()); 
  $userinfo = mysql_fetch_array($query_result_handle);
  
  $userinfo = stripslashes_array($userinfo);

    OpenTable();
    ?>
    <form method="post"><font>
      <table width="57%" border="0" cellspacing="0" cellpadding="0" height="99">
        <tr> 
          <td height="29" width="62%"><font>(Only if changing password) New Password: *</font></td>
          <td height="29" width="38%"> 
            <input type="password" name="password" size="30">
          </td>
        </tr>
        <tr> 
          <td width="62%" height="29"><font>(Only if changing password) Re-Type New Password: 
            *</font></td>
        <td width="38%" height="29"> 
            <input type="password" name="password2" size="30">
          </td>
        </tr>
        <tr> 
          <td width="62%" height="29"><font>Email Address: *<font></td>
          <td width="38%" height="29"> 
            <input type="text" name="email" value="<?php echo $userinfo[user_email];?>" size="30">
          </td>
        </tr>
        <?
        if($user[user_level] == 2 && $userinfo[user_id] <> $user[user_id]) {
        
          if($userinfo[user_level] == 2) {
              $selected2 = " selected";
          } else {
              $selected1 = " selected";
          }
        ?>
        <tr> 
          <td width="62%" height="29"><font>User Level:<font></td>
          <td width="38%" height="29">
            <select name="level">
              <option value="2"<?php echo $selected2;?>>Admin</option>
               <option value="1"<?php echo $selected1;?>>Poster Only</option>
             </select>
           </td>
        </tr>
        <?
        }
        ?>
        <tr> 
          <td colspan="2" height="29">
          <?
          if($userinfo[user_id] == $user[user_id]) {
          ?>
          <input type="hidden" name="level" value="<?php echo $userinfo[user_level];?>">
          <?
          }
          ?>
            <input type="submit" name="Submit" value="Save"><input type="hidden" name="adminid" value="<?php echo $userinfo[user_id];?>"><input type="hidden" name="mode" value="saveadmin">
          </td>
        </tr>
      </table>
      </font>
    </form>
    <?
    CloseTable();
 }

 function saveadmin($password, $email, $adminid, $level) {
 global $user;
 include("path.inc");
 include($path."/config.php");
 
   if($password == "none") { 
  $query = "SELECT * FROM ".$dbprefix."users WHERE user_id = '".$adminid."'"; 
  $query_result_handle = mysql_query ($query) 
  or die (mysql_error()); 
  $userinfo = mysql_fetch_array($query_result_handle);
       
     $password = $userinfo[user_password];
   } else {
   $password = md5($password);
   }
  $query = "SELECT * FROM ".$dbprefix."users WHERE user_id = '".$adminid."'"; 
  $query_result_handle = mysql_query ($query) 
  or die (mysql_error()); 
  $userinfo = mysql_fetch_array($query_result_handle);

  $sql = "UPDATE ".$dbprefix."users SET user_level = '".$level."', user_password = '".$password."', user_email = '".$email."' WHERE user_id = '".$adminid."'";
  $query_result_handle = mysql_query ($sql) 
  or die (mysql_error()); 


  Opentable();
  if($adminid == $user[user_id]) {
  echo "<font>Your Details were updated Succesfully!</font>";
  } else {
  echo "<font>The user <b>".$userinfo[username]."</b> was updated Successfully!</font>";
  }
  Closetable();
 }

 function Createadmin($newusername, $newpassword, $newemail, $level, $dbprefix, $db) {

    $newpassword = md5($newpassword);

       $sql = "SELECT max(user_id) AS total FROM ".$dbprefix."users";
       if(!$r = mysql_query($sql, $db))
         die("Error connecting to the database.");
       list($total) = mysql_fetch_array($r);
       $total += 1;
    
       $sql = "INSERT INTO ".$dbprefix."users (user_id, username, user_password, user_email, user_level) 
    				VALUES ('$total', '$newusername', '$newpassword', '$newemail', '$level')";
       if(!$result = mysql_query($sql, $db)) {
          die("An Error Occured while trying to add the information into the database. Please go back and try again. <BR>$sql<BR>$mysql_error()");
       }
    OpenTable();
        echo "<font>The Database was Updated Successfully.<br>You may return to the main admin section using the left hand navigation menu.<br></font>";
    CloseTable();
 }
}

/****************************************** BackUp Options ******************************************/


class backupclass { 

function backup() {
	global $url, $path, $dbname;
	OpenTable();

	?>
	<font><form name="form1" method="post" action="?mode=backupdb">
	  <div align="center">Click Backup to save your n-12 Database to a file!<br>
	    The URL to the file will be: <b><br>
	    <?php $date = date("d_m_Y");
		$filename = $url.'/backups/'.$dbname.'_'.$date.'.sql</b>';
		echo $filename;
		?>
	    <br>
	    <input type="submit" name="Submit" value="Backup">
	    <br>
	  </div>
	</form></font>
	<?
	CloseTable();
 }

 function backupdb() {
	include ("path.inc");
    include ($path."/config.php");
   
if(!file_exists ('backups/')) {
   $dirmake = mkdir("backups", 0777); 
}
      $db = $dbname;
       @set_time_limit(600);
	$crlf="\n";
	
	$dump_buffer="";
	
	$tables = mysql_list_tables($db);
	$num_tables = @mysql_numrows($tables);

	if($num_tables == 0)
	{
		echo "# No Tables Found";
	}
	else
	{
	
		$i = 0;
	
		while($i < $num_tables)
		{
			$table = mysql_tablename($tables, $i);
			$dump_buffer.= "#$crlf";
			$dump_buffer.= "# Table structure for table '$table'$crlf";
			$dump_buffer.= "#$crlf$crlf";
			$dump_buffer.= $this->get_table_def($db,$table, $crlf).";$crlf"; 				
			$dump_buffer.= "$crlf#$crlf";
			$dump_buffer.= "# Dumping data for table '$table'$crlf"; 
			$dump_buffer.= "#$crlf$crlf";
			$tmp_buffer="";
			$this->get_table_content($db, $table, 0, 0, 'my_handler');
			$dump_buffer.=$tmp_buffer;
			$i++;
			$dump_buffer.= "$crlf";
		} 
	}
	
	$date = date("d_m_Y");

	$filename = 'backups/'.$db.'_'.$date.'.sql';
	$file = @fopen($filename, 'a');
	fwrite($file, $dump_buffer);
	fclose($file);
	OpenTable();
	echo "<font>DB Backup Succesfull</font>!";
	CloseTable();
 }

 function get_table_def($db, $table, $crlf) {

    $schema_create = "DROP TABLE IF EXISTS $table;$crlf";
    $schema_create .= "CREATE TABLE $table ($crlf";
    $result = mysql_query("SHOW FIELDS FROM " .$db."." 
	. $table) or mysql_die();
    while($row = mysql_fetch_array($result))
    {
        $schema_create .= "   $row[Field] $row[Type]";
        if(isset($row["Default"]) && (!empty($row["Default"]) || $row["Default"] == "0"))
            $schema_create .= " DEFAULT '$row[Default]'";
        if($row["Null"] != "YES")
            $schema_create .= " NOT NULL";
        if($row["Extra"] != "")
            $schema_create .= " $row[Extra]";
        $schema_create .= ",$crlf";
    }
    $schema_create = ereg_replace(",".$crlf."$", "", $schema_create);
    $result = mysql_query("SHOW KEYS FROM " .$db."." .
	$table) or mysql_die();
    while($row = mysql_fetch_array($result))
    {
        $kname=$row['Key_name'];
        $comment=(isset($row['Comment'])) ? $row['Comment'] : '';
        $sub_part=(isset($row['Sub_part'])) ? $row['Sub_part'] : '';

        if(($kname != "PRIMARY") && ($row['Non_unique'] == 0))
            $kname="UNIQUE|$kname";

        if($comment=="FULLTEXT")
            $kname="FULLTEXT|$kname";
         if(!isset($index[$kname]))
             $index[$kname] = array();

        if ($sub_part>1)
         $index[$kname][] = $row['Column_name'] . "(" . $sub_part . ")";
        else
         $index[$kname][] = $row['Column_name'];
    }

    while(list($x, $columns) = @each($index))
    {
         $schema_create .= ",$crlf";
         if($x == "PRIMARY")
            $schema_create .= "   PRIMARY KEY (";
         elseif (substr($x,0,6) == "UNIQUE")
            $schema_create .= "   UNIQUE " .substr($x,7)." (";
         elseif (substr($x,0,8) == "FULLTEXT")
            $schema_create .= "   FULLTEXT ".substr($x,9)." (";
         else
            $schema_create .= "   KEY $x (";

        $schema_create .= implode($columns,", ") . ")";
    }

    $schema_create .= "$crlf)";
    if(get_magic_quotes_gpc()) {
      return (stripslashes($schema_create));
    } else {
      return ($schema_create);
    }
 }

 function get_table_content($db, $table, $limit_from = 0, $limit_to = 0, $handler) {
 
    // Defines the offsets to use
    if ($limit_from > 0) {
        $limit_from--;
    } else {
        $limit_from = 0;
    }
    if ($limit_to > 0 && $limit_from >= 0) {
        $add_query  = " LIMIT $limit_from, $limit_to";
    } else {
        $add_query  = '';
    }

    $this->get_table_content_fast($db, $table, $add_query, $handler);

 }

 function get_table_content_fast($db, $table, $add_query = '', $handler) {
 
    $result = mysql_query('SELECT * FROM ' . $db . '.' . $table . $add_query) or mysql_die();
    if ($result != false) {
    
        @set_time_limit(1200); // 20 Minutes

        // Checks whether the field is an integer or not
        for ($j = 0; $j < mysql_num_fields($result); $j++) {
            $field_set[$j] = mysql_field_name($result, $j);
            $type          = mysql_field_type($result, $j);
            if ($type == 'tinyint' || $type == 'smallint' || $type == 'mediumint' || $type == 'int' ||
                $type == 'bigint'  ||$type == 'timestamp') {
                $field_num[$j] = true;
            } else {
                $field_num[$j] = false;
            }
        } // end for

        // Get the scheme
        if (isset($GLOBALS['showcolumns'])) {
            $fields        = implode(', ', $field_set);
            $schema_insert = "INSERT INTO $table ($fields) VALUES (";
        } else {
            $schema_insert = "INSERT INTO $table VALUES (";
        }
        
        $field_count = mysql_num_fields($result);

        $search  = array("\x0a","\x0d","\x1a"); //\x08\\x09, not required
        $replace = array("\\n","\\r","\Z");


        while ($row = mysql_fetch_row($result)) {
            for ($j = 0; $j < $field_count; $j++) {
                if (!isset($row[$j])) {
                    $values[]     = 'NULL';
                } else if (!empty($row[$j])) {
                    // a number
                    if ($field_num[$j]) {
                        $values[] = $row[$j];
                    }
                    // a string
                    else {
                        $values[] = "'" . str_replace($search, $replace, addslashes($row[$j])) . "'";
                    }
                } else {
                    $values[]     = "''";
                } // end if
            } // end for

            $insert_line = $schema_insert . implode(',', $values) . ')';
            unset($values);

            // Call the handler
            $this->$handler($insert_line);
        } // end while
    } // end if ($result != false)
    
    return true;
 }


 function my_handler($sql_insert) {
	global $crlf, $asfile;
	global $tmp_buffer;

	if(empty($asfile))
		$tmp_buffer.= htmlspecialchars("$sql_insert;$crlf");
	else
		$tmp_buffer.= "$sql_insert;$crlf";
 }
}

/****************************************** Posts Options ********************************************/

class postsclass {
 // Getting Post to Modify it
 function modpost($msgid ,$dbprefix, $db) {
  $msg = get_msg_from_msg_id($msgid, $dbprefix, $db);
  
  OpenTable();
  $msg[msg_text] = str_replace("<BR>", "\n", $msg[msg_text]);
  echo "<font><form action=\"".$PHP_SELF."\" method=\"post\">
          <table border='0' cellpadding='0' cellspacing='0' width='100%'>
            <tr> 
              <td width='24%'><font>Subject:</font></td>
              <td width='76%'> 
                <input type=\"text\" name=\"subject\" size=\"50\" maxlength=\"100\" value=\"$msg[msg_subject]\">
              </td>
            </tr>
            <tr> 
              <td width='24%' height=\"21\"><font>News:</font></td>
              <td width='76%' height=\"21\"> 
                
        <textarea name=\"news\" cols=\"50\" rows=\"10\" wrap=\"PHYSICAL\">$msg[msg_text]</textarea>
              </td>
            </tr>
            <tr> 
              <td width='100%' colspan='2'> 
                <input type=\"hidden\" name=\"mode\" value=\"ModSave\">
                <input type=\"hidden\" name=\"msgid\" value=\"$msgid\">
                <input type=\"submit\" value=\"Update\"><font><br>You can Use HTML in your Posts as well as <a href=\"emoticons/list.html\" target=_blank>emoticons</a></font>
              </td>
            </tr>
          </table>
  </form></font>";
  CloseTable();
 } 

 // Saving Modified News
 function modsave($dbprefix ,$news, $subject, $msgid, $db) {
  $news = addslashes($news);
  $subject = addslashes($subject);
  $news = str_replace("\n", "<BR>", $news);
  $sql = "UPDATE ".$dbprefix."news SET msg_text='$news', msg_subject='$subject' WHERE (msg_id = '$msgid')";
      if(!$result = mysql_query($sql, $db)) {
	 die("An Error Occured<hr>Could not update the database. Please go back and try again.");
      }
  Opentable();
  echo "<font>The news has been updated Successfully!</font>";
  Closetable();
 } 

 // Post news
 function post() {
  OpenTable();
  echo "<font><form action=\"".$PHP_SELF."\" method=\"post\">
          <table border='0' cellpadding='0' cellspacing='0' width='100%'>
            <tr> 
              <td width='24%'><font>Subject:</font></td>
              <td width='76%'> 
                <input type=\"text\" name=\"subject\" size=\"50\" maxlength=\"100\">
              </td>
            </tr>
            <tr> 
              <td width='24%' height=\"21\"><font>News:</font></td>
              <td width='76%' height=\"21\"> 
                
        <textarea name=\"news\" cols=\"50\" rows=\"10\" wrap=\"PHYSICAL\"></textarea>
              </td>
            </tr>
            <tr> 
              <td width='100%' colspan='2'> 
                <input type=\"hidden\" name=\"mode\" value=\"NewsSave\">
                <input type=\"submit\" value=\"Post\"><font><br>You can Use HTML in your Posts as well as <a href=\"emoticons/list.html\" target=_blank>emoticons</a></font>
              </td>
            </tr>
          </table>
  </form></font>";
  CloseTable();
 } 


 // Save News
 function NewsSave($dbprefix, $poster_id, $news, $subject, $db) {

  $news = str_replace("\n", "<BR>", $news);
  $news = addslashes($news);
  $subject = addslashes($subject);
     $postdate = date("d/m/Y");
     $posttime = date("H:i:s");
  
     $sql = "SELECT max(msg_id) AS total FROM ".$dbprefix."news";
     if(!$r = mysql_query($sql, $db))
       die("Error connecting to the database.");
     list($total) = mysql_fetch_array($r);
     $total += 1;
     $sql = "INSERT INTO ".$dbprefix."news (msg_id, msg_text, msg_subject, msg_poster, msg_postdate, msg_posttime) 
				VALUES ('$total', '$news', '$subject', '$poster_id', '$postdate', '$posttime')";

     if(!$result = mysql_query($sql, $db)) {
        die("An Error Occured while trying to add the information into the database. Please go back and try again. <BR>$sql<BR>$mysql_error()");
     }

  OpenTable();
      echo "<font>The Database was Updated Successfully.<br>You may return to the main admin section using the left hand navigation menu.<br></font>";
  CloseTable();
 }


 // remove posts
 function remposts($dbprefix) {
  OpenTable();
  // access database table that holds news
  $query = "SELECT * FROM ".$dbprefix."news order by 'msg_id' DESC"; 
  $query_result_handle = mysql_query ($query) 
  or die (mysql_error()); 


  // check that there is news
    $num_of_rows = mysql_num_rows ($query_result_handle) 
    or die (error("<font>There were no posts found in the database!</font>"));

  echo "<table cellspacing='0'><tr><td bgcolor='c0c0c0' colspan='9'><font>Posts found in the database:</font></td></tr>";


  // get news from db
  while ($row = mysql_fetch_array($query_result_handle))
  {
  $row = stripslashes_array($row);
  // main part of html
	// access database table that holds news
	$sql = "SELECT * FROM ".$dbprefix."comments WHERE msg_id = '".$row[msg_id]."'"; 
	$result = mysql_query ($sql) 
	or die (mysql_error()); 
	$comments = mysql_fetch_array($result);
	$num_of_rows = mysql_num_rows($result);

  $subject = substr($row[msg_subject], 0, 23) . "...";

 ?>
   <tr bgcolor="#c0c0c0"> 
    <td width="9%" ><font>Subject:</font></td>
    <td width="32%"><font> 
      <?php echo $subject; ?>
      </font></td>
    <td width="8%"><font>Posted:</font></td>
    <td width="14%"><font> 
      <?php echo $row[msg_postdate]; ?>
      </font></td>
    <td width="4%"><font>ID:</font></td>
    <td width="6%" align="left"><font> 
      <?php echo $row[msg_id]; ?>
      </font></td>
    <td width="3%" align="left">
	<?php 
	if($num_of_rows) {
	?>
	<font><a href="comments.php?mode=admin&action=view&msgid=<?php echo $row[msg_id];?>">Comments:</font></td>
    <?php
	}
	?>
	<td width="2%" align="left">
	<?php 
	if($num_of_rows) {
	?>
	<font>
	  <?php echo $num_of_rows; ?>
      </font></a></td>
	<?php
	}
	?>
    <td width="22%" align="center"><font><a href="admin.php?mode=modpost&msgid=<?php echo $row[msg_id]; ?>"><img src="admin/edit.gif" border="0" title="Edit <?php echo $row[msg_subject]; ?>"></a> 
      &nbsp;&nbsp; <a href="admin.php?mode=delete&msgid=<?php echo $row[msg_id]; ?>"><img src="admin/delete.gif" border="0" title="Delete <?php echo $row[msg_subject]; ?>" onClick="return confirm('Are You Sure?\n'+
                                       '_____________________________________________________________\n\n'+
                                       'This will delete the selected post: <? echo $row[msg_subject]; ?> \n'+
                                       'This cannot be undone unless a backup has been made\n\n'+
                                       'Click OK to continue.');"></a></font></td>
  </tr>
  <?php
  }  
  echo "</table><br><br><br><font color=red class='important'></font>";
  CloseTable();
 }

 function delete($msgid, $dbprefix) {
      global $dbprefix;
      include("config.php");
      $result = mysql_query("DELETE FROM ".$dbprefix."news WHERE msg_id='".$msgid."'");
      if (!$result) {
  	  echo mysql_errno(). ": ".mysql_error(). "<br>";
	  return;
      }
	
      $result = mysql_query("DELETE FROM ".$dbprefix."comments WHERE msg_id='".$msgid."'");
      if (!$result) {
  	echo mysql_errno(). ": ".mysql_error(). "<br>";
	return;
      }
      Header("Location: admin.php?mode=rempost");
 }

}

/****************************************** Prefs Options ********************************************/

class prefsclass {
 // modify configuration
 function Configure() {
  include('path.inc');
  include($path.'/config.php');

      OpenTable();
  echo " <font> <form action=\"admin.php?mode=ConfigSave\" method=\"post\"><table border='0' cellpadding='0' cellspacing='0' width='100%'>
      <tr>
        <td width='24%'><font>Template:</font></td>
        <td width='76%'><select name=\"xDefault_Theme\">";
      $handle=opendir('themes');
      while ($file = readdir($handle)) {
  	  if ( (!ereg("[.]",$file)) ) {
		  $themelist .= "$file ";
	  }
      }
      closedir($handle);
      $themelist = explode(" ", $themelist);
      sort($themelist);
      for ($i=0; $i < sizeof($themelist); $i++) {
	  if($themelist[$i]!="") {
	    echo "<option name=\"xDefault_Theme\" value=\"$themelist[$i]\" ";
		if($themelist[$i]==$templatename) echo "selected";
		echo ">$themelist[$i]\n";
	  }
      }    
    echo "</select></td>
    </tr>
    <tr>
      <td width='24%'><font>How many news articles are Displayed:</font></td>
      <td width='76%'><input type=\"text\" name=\"countx\" value=\"$count\" size=\"3\" maxlength=\"5\"></td>
    </tr>
    <tr>
      <td width='24%'><font>Do you want to allow Comments:</font></td>
      <td width='76%'><font>On: </font><input type=\"radio\" name=\"commentsx\" value=\"1\"";
      if($comments == 1) {
      echo " checked";
      }
      echo ">
      <font>Off: </font></font><input type=\"radio\" name=\"commentsx\" value=\"0\"";
      if($comments == 0) {
      echo " checked";
      }
      echo "></td>
    </tr>
    <tr>
      <td width='24%'><font>The current path to n-12 News:</font></td>
      <td width='76%'><input type=\"text\" name=\"pathx\" value=\"$path\" size=\"30\"></td>
    </tr>
    <tr>
      <td width='24%'><font>The current URL to n-12 News:</font></td>
      <td width='76%'><input type=\"text\" name=\"urlx\" value=\"$url\" size=\"30\"></td>
    </tr>
    <tr>
      <td width='100%' colspan='2'>    	<input type=\"hidden\" name=\"mode\" value=\"ConfigSave\">
	<input type=\"submit\" value=\"Update\"></td>
    </tr>
  </table>
  </form></font>";
    CloseTable();
 }

 // save configuration	
 function ConfigSave($xDefault_Theme, $countx, $urlx, $pathx, $commentsx, $updateurl) {
  include ("path.inc");
  include ($path."/config.php");
  OpenTable();
  $file = fopen($path."/config.php", "w") or die ("Couldn't write to Config.php");
    $content = "<?php\n";
    $content .= "\$dbhost = \"$dbhost\";\n";
    $content .= "\$dbuser = \"$dbuser\";\n";
    $content .= "\$dbpasswd = \"$dbpasswd\";\n";
    $content .= "\$dbname = \"$dbname\";\n";
    $content .= "\$dbprefix = \"$dbprefix\";\n";
    $content .= "\n";
    $content .= "\$templatename = \"$xDefault_Theme\";\n";
    $content .= "\$count = \"$countx\";\n";
    $content .= "\$comments = \"$commentsx\";\n";
    $content .= "\$updateurl = \"$updateurl\";\n";
    $content .= "?>";
  fwrite($file, $content);
  fclose($file);
  $file = fopen("path.inc", "w") or die ("Couldn't write to path.inc");
    $content = "<?php\n";
    $content .= "\$path = \"$pathx\"; // WITHOUT TRAILING SLASH\n";
    $content .= "\$url = \"$urlx\"; // WITHOUT TRAILING SLASH\n";    
    $content .= "?>";
  fwrite($file, $content);
  fclose($file);
  echo "<font>config.php and path.inc were sucessfully updated.<br>You may return to the main admin section using the left hand navigation menu.</font>";
  CloseTable();
 }
}

class comments {
  function t() {
  echo "hi";
  }
}

/****************************************** Emoticons Options ***************************************/

class emoticonsclass {

 function emoticons($msg) {

	$emoticons = array(
	"\(y\)" => "thumbs_up",
	"\(n\)" => "thumbs_down",
	"\(b\)" => "beer_yum",
	"\(d\)" => "martini_shaken",
	"\(x\)" => "girl_handsacrossamerica",
	"\(z\)" => "guy_handsacrossamerica",
	":\[" => "bat",
	"\(\}\)" => "girl_hug",
	"\(\{\)" => "dude_hug",
	":\)" => "regular_smile",
	":D" => "teeth_smile",
	":o" => "omg_smile",
	":p" => "tounge_smile",
	";)" => "wink_smile",
	":\(" => "sad_smile",
	":s" => "confused_smile",
	":\|" => "whatchutalkingabout_smile",
	":'\(" => "cry_smile",
	":\\$" => "embaressed_smile",
	"\(h\)" => "shades_smile",
	":@" => "angry_smile",
	"\(a\)" => "angel_smile",
	"\(6\)" => "devil_smile",
	"\(l\)" => "heart",
	"\(u\)" => "broken_heart",
	"\(k\)" => "kiss",
	"\(g\)" => "present",
	"\(f\)" => "rose",
	"\(w\)" => "wilted_rose",
	"\(p\)" => "camera",
	"\(~\)" => "film",
	"\(t\)" => "phone",
	"\(@\)" => "kittykay",
	"\(&\)" => "bowwow",
	"\(c\)" => "coffee",
	"\(i\)" => "lightbulb",
	"\(s\)" => "moon",
	"\(\*\)" => "star",
	"\(8\)" => "musical_note",
	"\(e\)" => "envelope",
	"\(\^\)" => "cake",
	"\(o\)" => "clock",
	"\(m\)" => "messenger"
	);

	while (list($short, $name) = each ($emoticons))
	        $msg = ereg_replace("$short","<img src=\"{url}/emoticons/$name.gif\">",$msg);
	return $msg;
 }
}


/****************************************** Misc Options ********************************************/

class miscclass {
 // about n-12 news    
 function about() {
   OpenTable();
   ?><font><u>n-12 news</u><br>n-12 news is a product of n-12.net scripts. The script you see now is &copy; n-12.net.<br><br><br><u>Support:</u><br>If you urgently require support, there are a few different methods:<br><br><b>Email:</b><br>Tom : <a href="mailto:tom@n-12.net">tom@n-12.net</a><br>Chris : <a href="mailto:chris@n-12.net">chris@n-12.net</a>
   <br><br><b>Web:</b><br>n-12 Support Forums : <a href="http://www.n-12.net/support/">n-12.net/support/</a><br><br><b>MSN:</b><br>Tom : <a href="mailto:tom01@n-12.net">tom01@n-12.net</a><br>Chris : <a href="mailto:christoph2k@hotmail.com">christoph2k@hotmail.com</a><br><br><b>IRC:</b><br>Server: irc.quakenet.eu.org<br>Room: #N-12.net
   <?
   CloseTable();
 }

 // Script Credits
 function cred() {
  OpenTable();
  ?>
        <font><p><u>Credits</u></p>
        <p>This entire Script was made by <b>Tom Barry</B>(tombarry) and <b>Chris Neal</b>(Christoph2k).<br>
          <br>
          <b>Tom</b> made the Templates system, parts of the Admin section and 
          he created N-12.net (which has copyrighted this script!)<br>
          <b>Chris</b> made the Login system, the Posting section and part of 
          the Admin section.<br>
          <br>
          Please <b>Click </b>on<b> Help/About</b> to find out how you can Contact 
          Tom or Chris!</p></font>
  <?
  CloseTable();
 }
}
