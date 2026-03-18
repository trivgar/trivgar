<?php
/*---------------------------------------------------*
        File: install.php
 Description: installation file for news pro
   Copyright: (c) n-12.net
 *---------------------------------------------------*/
 
$version = "3.00";
	 ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Strict//EN">
<html>
<head>
<link rel='stylesheet' type='text/css' href='admin/admin.css'>
<title>N-12 News Installation</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body bgcolor="#FFFFFF" text="#000000">
<?php
if($next) {
   switch($next) {
    case 'database':
    	 if($Admin_Pass != $Admin_Pass2) {
	 //If we get here then the User has entered 2 Different Passwords in the Admins settings
	  echo "<font face=\"Verdana, Arial, Helvetica, sans-serif\"><center>Sorry the Admin passswords you gave didn't Match<br>";
	  echo "<a href=\"javascript:history.back();\">Click here to Go back!</a></center></font>";
	  die();
	 }
	$Admin_Pass = md5($Admin_Pass); // Encrypting the Password of the User (MD5)
	 echo "<table border='0' cellspacing='0' width='100%' cellpadding='5' style='border-left: 1 solid #FFFFFF; border-right: 1 solid #000000; border-bottom: 1 solid #000000'>
  <tr>
    <td colspan='2' bgcolor='#000080' style='border-left: 1 solid #E0D8D0; border-right: 1 solid #808080; border-top: 1 solid #E0D8D0' valign='middle' align='left'>
  <font face='Verdana, Arial, Helvetica, sans-serif' color='#FFFFFF' class='adminhead'><b>Installation
  - n-12 news</b><br></font>
    </td>
  </tr>
  <tr>
    <td width='891' colspan='2' bgcolor='#D8D0C8' style='border-left: 1 solid #E0D8D0; border-right: 1 solid #808080; border-bottom: 1 solid #808080'><font>
Testing DB Connection...";
	 flush();
	 if(!$db = mysql_connect("$dbserver", "$dbuser", "$dbpass"))
	   die("<font color=\"#FF0000\">Error, I could not connect to the database at $dbserver. Using username $dbuser and password $dbpass.<BR>Please go back and try again.");
	 echo "<font color=\"#00FF00\">DB Connection Good!</FONT><BR>";
	 flush();
	 echo "Selected database $dbname...";
	 flush();
	 if(!@mysql_select_db("$dbname", $db)) {
	    echo "<font color=\"#FF0000\">Database could not be found</font><BR>";
	    flush();
	    echo "Attempting to create database $dbname...";
	    flush();
	    if(!$r = mysql_query("CREATE DATABASE $dbname", $db))
	      die("<font color=\"#FF0000\">Error, could not select or create database $dbname, please create it manually or have your system administrator do it for you and try again.");
	    mysql_select_db("$dbname", $db);
	    echo "<font color=\"#00FF00\">Database Created!</font><BR>";
	    flush();
	 }
	 else
	   echo "<font color=\"#00FF00\">Database Selected!</font><BR>";
	 flush();
	 echo "Creating N-12 News tables an inserting default data...<BR>";
	 flush();
	 $tables = array ("Users" => "CREATE TABLE ".$dbprefix."users (
							  user_id int(10) NOT NULL auto_increment,
							  username varchar(40) default '',
							  user_password varchar(32) default '',
							  user_ip text,
							  user_email varchar(50) default NULL,
							  user_level text,
							  PRIMARY KEY  (user_id)
							  ) ",
			   "News" => "CREATE TABLE ".$dbprefix."news (
							  msg_id int(10) NOT NULL auto_increment,
							  msg_text text,
							  msg_subject text,
							  msg_poster varchar(40) default '',
							  msg_posttime varchar(20) default NULL,
							  msg_postdate varchar(20) NOT NULL default '',
							  PRIMARY KEY  (msg_id)
							  ) ",
			    "Comments" => "CREATE TABLE ".$dbprefix."comments (
							  comment_id int(10) NOT NULL auto_increment,
							  msg_id text NOT NULL,
							  poster_ip text NOT NULL,
							  poster_name text NOT NULL,
							  poster_email text NOT NULL,
							  poster_comment text NOT NULL,
							  post_date text NOT NULL,
							  PRIMARY KEY  (comment_id)
							  ) ",
			);

	 echo "<TABLE BORDER=\"0\">\n";
	 while(list($name, $table) = each($tables)) {
	    echo "<TR><TD><font>Creating table $name</TD> ";
	    if(!$r = mysql_query($table, $db))
	      die("<TD><font color=\"#FF0000\">ERROR! Could not create table. Reason: <b>". mysql_error()."</b></TD></TR></TABLE>");
	    echo "<TD><font color=\"#000000\">[OK]</FONT></TD></TR>";
	    flush();
	 }


// This bit adds the Admin Details to the Database
     $sql = "INSERT INTO `".$dbprefix."users` (`user_id`, `username`, `user_password`, `user_email`, `user_level`) VALUES ('1', '$Admin_Username', '$Admin_Pass', '$Admin_Email', '2')"; 

       if(!$result = mysql_query($sql)) {
      die("An Error Occured while trying to add the information into the database. Please go back and try again. <BR>$sql<BR>$mysql_error()");
   } else {
	 echo "<TD><font>Creating Admin User</TD>";
	 echo "<TD><font color=\"#000000\">[OK]</FONT></TD></TR>";
	}
	 echo "</TABLE>";

	 echo "<font color=\"#00FF00\">Database Created Successfully!</FONT><BR>";
?>
	   <CENTER>
	   <FORM METHOD="POST" ACTION="<?php echo $PHP_SELF ?>">
	   <INPUT TYPE="HIDDEN" NAME="dbname" VALUE="<?php echo $dbname ?>">
	   <INPUT TYPE="HIDDEN" NAME="dbserver" VALUE="<?php echo $dbserver ?>">
	   <INPUT TYPE="HIDDEN" NAME="dbuser" VALUE="<?php echo $dbuser ?>">
	   <INPUT TYPE="HIDDEN" NAME="dbpass" VALUE="<?php echo $dbpass ?>">
	   <INPUT TYPE="HIDDEN" NAME="dbprefix" VALUE="<?php echo $dbprefix ?>">
	   <INPUT TYPE="HIDDEN" NAME="Admin_Username" VALUE="<?php echo $Admin_Username ?>">
	   <INPUT TYPE="HIDDEN" NAME="Admin_Pass" VALUE="<?php echo $Admin_Pass ?>">
	   <INPUT TYPE="HIDDEN" NAME="Admin_Email" VALUE="<?php echo $Admin_Email ?>">
	   <INPUT TYPE="HIDDEN" NAME="xcount" VALUE="<?php echo $xcount ?>">
	   <INPUT TYPE="HIDDEN" NAME="xDefault_Theme" VALUE="<?php echo $xDefault_Theme ?>">
	   <INPUT TYPE="HIDDEN" NAME="xpath" VALUE="<?php echo $xpath ?>">
	   <INPUT TYPE="HIDDEN" NAME="xurl" VALUE="<?php echo $xurl ?>">
	   <INPUT TYPE="HIDDEN" NAME="xcomments" VALUE="<?php echo $xcomments ?>">
	   <INPUT TYPE="HIDDEN" NAME="next" VALUE="options">
	   <INPUT TYPE="SUBMIT" VALUE="Next >">
	   </FORM>
	   </CENTER>
</td>  </tr>
</table>
<?php	   
	break;
    case 'options':
// LAST BIT OF INSTALLATION
	// Add the Database Information to the Config.php File
    $file = fopen("config.php", "w") OR die("Couldn't Open Config.php");
    $content = "<?php\n";
    $content .= "\$dbhost = \"$dbhost\";\n";
    $content .= "\$dbuser = \"$dbuser\";\n";
    $content .= "\$dbpasswd = \"$dbpasswd\";\n";
    $content .= "\$dbname = \"$dbname\";\n";
    $content .= "\$dbprefix = \"$dbprefix\";\n";
    $content .= "\n";
    $content .= "\$templatename = \"$xDefault_Theme\";\n";
    $content .= "\$count = \"$xcount\";\n";
    $content .= "\$comments = \"$xcomments\";\n";
    $content .= "\$updateurl = \"http://www.n-12.net/ts/news/Upgrade.php?version=\";\n";
    $content .= "?>";
    fwrite($file, $content);
    fclose($file);
    
	// Add the Database Information to the path.inc File
    $file = fopen("path.inc", "w") OR die("Couldn't Open path.inc");
    $content = "<?php\n";
    $content .= "\$path = \"$xpath\"; // WITHOUT TRAILING SLASH\n";
    $content .= "\$url = \"$xurl\"; // WITHOUT TRAILING SLASH\n";    
    $content .= "?>";
    fwrite($file, $content);
    fclose($file);
 
   
?>
<table border="0" cellspacing="0" width="100%" cellpadding="5" style="border-left: 1 solid #FFFFFF; border-right: 1 solid #000000; border-bottom: 1 solid #000000">
  <tr>
    <td colspan="2" bgcolor="#000080" style="border-left: 1 solid #E0D8D0; border-right: 1 solid #808080; border-top: 1 solid #E0D8D0" valign="middle" align="left">
  <font face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF" class="adminhead"><b>Installation
  - n-12 news</b><br></font>
    </td>
  </tr>
  <tr>
    <td width="891" colspan="2" bgcolor="#D8D0C8" style="border-left: 1 solid #E0D8D0; border-right: 1 solid #808080; border-bottom: 1 solid #808080">

  <font face="Verdana, Arial, Helvetica, sans-serif">
  <p align="center"><b>Installation Complete!</b></p>
  <p align="center"><b><u>PLEASE DELETE INSTALL.PHP </u></b></p>
  <p align="center">The Installation is now 
    Complete! Hopefully you didn't have any errors<br>
    but if you did Check that you have Followed the Install instructions in the 
    Zip file!</p>
  <p align="center"><a href="admin.php">Click 
    Here to Log into the Admin Area and Start Posting News!</a></p>
  <p align="center">We at N-12 hope that you 
    enjoy N-12 News Pro!</p>
  <p align="left"><b>Bugs:<br>
  </b>If you find 
    a bug in one of our scripts please Report it to us by either emailing it too 
    Chris: <a href="mailto:Chris@N-12.net"> Chris@N-12.net</a>&nbsp;<br>
  or Tom: <a href="mailto:Tom@N-12.net"> Tom@N-12.net</a><b><br>
  <br>
  Or<br>
  </b>You could go to our Website and Post it in the Bugs section of our Forum!</p>
  <p>&nbsp;

  </tr>
</table>

<?
}
} else {  // This Else Refers to the if($news) at the top. Its the first screen the User See's.

?>
<form action="<?php echo $PHP_SELF; ?>">
<table border="0" cellspacing="0" width="100%" cellpadding="5" style="border-left: 1 solid #FFFFFF; border-right: 1 solid #000000; border-bottom: 1 solid #000000">
  <tr>
    <td colspan="2" bgcolor="#000080" style="border-left: 1 solid #E0D8D0; border-right: 1 solid #808080; border-top: 1 solid #E0D8D0" valign="middle" align="left">
  <font face="Verdana, Arial, Helvetica, sans-serif" color="white" class="adminhead"><b>Installation
  - n-12 news</b><br></font>
    </td>

  </tr>
  <tr>
    <td width="891" colspan="2" bgcolor="#D8D0C8" style="border-left: 1 solid #E0D8D0; border-right: 1 solid #808080">
  <p align="center"><font face="Verdana, Arial, Helvetica, sans-serif">This install 
    will take only a few minutes of your time and when it is finished you will 
    be able to Post news directly from the web with no Uploading needed!</font></p>
    </td>
  </tr>
  <tr>
    <td width="275" valign="top" bgcolor="#D8D0C8" style="border-left: 1 solid #E0D8D0"><font face="Verdana, Arial, Helvetica, sans-serif">
    <b>Step 1:</b><br>
    <font size="2">In the fields below please fill out the Information needed 
    to connect to your Database.</font></font></td>
    <td width="614" align="right" bgcolor="#D8D0C8" style="border-right: 1 solid #808080">
  <table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr> 
      <td width="28%"><font face="Verdana, Arial, Helvetica, sans-serif">Database 
        Server Address:</font></td>
      <td width="72%"> 
        <input type="text" name="dbserver" value="localhost" size="30">
      </td>
    </tr>
    <tr> 
      <td width="28%"><font face="Verdana, Arial, Helvetica, sans-serif">Database 
        Name: </font></td>
      <td width="72%"> 
        <input type="text" name="dbname" value="N12News" size="30">
      </td>
    </tr>
    <tr> 
      <td width="28%"><font face="Verdana, Arial, Helvetica, sans-serif">Database 
        Username:</font></td>
      <td width="72%"> 
        <input type="text" name="dbuser" value="root" size="30">
      </td>
    </tr>
    <tr> 
      <td width="28%"><font face="Verdana, Arial, Helvetica, sans-serif">Database 
        Password: </font></td>
      <td width="72%">
        <input type="text" name="dbpass" size="30">
      </td>
    </tr>
    <tr> 
      <td width="28%"><font face="Verdana, Arial, Helvetica, sans-serif">Database 
        Tables Prefix:</font></td>
      <td width="72%">
        <input type="text" name="dbprefix" size="30" value="n12_">
      </td>
    </tr>
  </table>
</td>
  </tr>
  <tr>
    <td width="275" valign="top" bgcolor="#D8D0C8" style="border-left: 1 solid #E0D8D0"><font face="Verdana, Arial, Helvetica, sans-serif"><b>Step 2:</b><br>
    <font size="2">Now you need to fill in Your Admin Settings.</font></font></td>
    <td width="614" align="right" bgcolor="#D8D0C8" style="border-right: 1 solid #808080">
  <table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr> 
      <td width="28%"><font face="Verdana, Arial, Helvetica, sans-serif">Username:</font></td>
      <td width="72%" height="19"> 
        <input type="text" name="Admin_Username" value="Admin" size="30">
      </td>
    </tr>
    <tr> 
      <td width="28%"><font face="Verdana, Arial, Helvetica, sans-serif">Password:</font></td>
      <td width="72%" height="19"> 
        <input type="password" name="Admin_Pass" size="30">
      </td>
    </tr>
    <tr> 
      <td width="28%"><font face="Verdana, Arial, Helvetica, sans-serif">Re-Type 
        Password: </font></td>
      <td width="72%" height="19"> 
        <input type="password" name="Admin_Pass2" size="30">
      </td>
    </tr>
    <tr> 
      <td width="28%" height="19"><font face="Verdana, Arial, Helvetica, sans-serif">Email 
        Address: </font></td>
      <td width="72%" height="19"> 
        <input type="text" name="Admin_Email" size="30">
      </td>
    </tr>
  </table>
</td>
  </tr>
  <tr>
    <td width="275" valign="top" bgcolor="#D8D0C8" style="border-left: 1 solid #E0D8D0"><font face="Verdana, Arial, Helvetica, sans-serif"><b>Step 3:</b><br>
    <font size="2">Now you need to fill in News preferences.</font></font></td>
    <td width="614" align="right" bgcolor="#D8D0C8" style="border-right: 1 solid #808080">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="28%"><font face="Verdana, Arial, Helvetica, sans-serif">Template:</font></td>
    <td>     
 
<?
echo "<select name=\"xDefault_Theme\">";
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
    echo "</select>";
    ?>    
     </td>
  </tr>
  <tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif">How Many Articles are Displayed:</font></td>
    <td> 
      <input type="text" name="xcount" size="3" value="10">
    </td>
  </tr>
  <tr> 
            <td height="23"><font face="Verdana, Arial, Helvetica, sans-serif">Comments:</font></td>
            <td height="23">
              <font>On: </font><input type="radio" name="xcomments" value="1" checked>
              <font>Off: </font><input type="radio" name="xcomments" value="0">
              </td>
          </tr>
</table></td>
  </tr>
  <tr>
    <td width="275" valign="top" bgcolor="#D8D0C8" style="border-left: 1 solid #E0D8D0"><font face="Verdana, Arial, Helvetica, sans-serif"><b>Step 4:</b><br>
    <font size="2">Now you need to fill in the path to and the URL of the Directory that you are going to install N-12 New Pro too, Without the Trailing Slash.</font></font></td>
    <td width="614" align="right" bgcolor="#D8D0C8" style="border-right: 1 solid #808080">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
          <font face="Verdana, Arial, Helvetica, sans-serif">
          <td width="28%"><font face="Verdana, Arial, Helvetica, sans-serif">Path:</font></td>
          <font face="Verdana, Arial, Helvetica, sans-serif">
          <td width="72%"> 
      <input type="text" name="xpath" size="30" value="/path/to/n12news">
    </td>
  </tr>
      <tr>
          <td width="28%"><font face="Verdana, Arial, Helvetica, sans-serif">URL:</font></td>
          <td width="72%"> 
      <input type="text" name="xurl" size="30" value="http://www.urlto.com/n12news">
    </td>
  </tr>
</table>

</td>
  </tr>
  <tr>
    <td width="891" colspan="2" align="center" bgcolor="#D8D0C8" style="border-left: 1 solid #E0D8D0; border-right: 1 solid #808080; border-bottom: 1 solid #808080"><font face="Verdana, Arial, Helvetica, sans-serif"><INPUT TYPE="RESET" VALUE="Reset" style="background-color: #D8D0C8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<INPUT TYPE="HIDDEN" NAME="next" VALUE="database">
      <INPUT TYPE="SUBMIT" VALUE="Next >" style="background-color: #D8D0C8">
      </td>
  </tr>
</table>
  <p align="left"><font face="Verdana, Arial, Helvetica, sans-serif"><br>

<p>&nbsp;</p>


  <p>
</p>
</form>

<?
}
?>

