<?php
/*---------------------------------------------------*
        File: comments.php
 Description: comments output file for news pro
   Copyright: (c) n-12.net
 *---------------------------------------------------*/
require('path.inc');
require($path.'/functions.php');
require($path.'/config.php');
require($path.'/auth.php');

switch($mode) {
	
    default:
		header("Location: index.php");
    break;

    case "post":
    if(!$comments) {
    die ("<font face=\"verdana\" size=\"1\">The Posting of Comments has Been Disabled!</font>");
    }
if(!$submit) {
$query = "SELECT * FROM ".$dbprefix."news WHERE msg_id = '".$msgid."'"; 
$result = mysql_query ($query) or die ("SCRIPT GENERATED: <b>Data Error:</b> Line 36"); 

$data = mysql_fetch_array($result) or die ("SCRIPT GENERATED: <b>Data Error:</b> Line 39");

$data = stripslashes_array($data);
$templatepath = $path."/themes/".$templatename."/comments";
	$filename = $templatepath."/comments_posting.tpl";
	$fp = fopen($filename, "r");
	$template = fread($fp, filesize($filename));
	$template = str_replace('{id}', $msgid, $template);
	$template = str_replace('{subject}', $data[msg_subject], $template);
	fclose($fp);
echo $template;

} elseif($submit) {

if(!$comment) {
die("<table border='0' cellpadding='0' cellspacing='0' width='100%' height='70' style='border\: 1 outset \#D8D0C8' bgcolor='#D8D0C8'>
    <tr> 
      <td height='88' valign='middle' align='left'> 
        <p align='center'><font face='Verdana, Arial, Helvetica, sans-serif' size='1'>Sorry but you need to fill in a comment!
        </font>
      </td>
    </tr>
  </table>");
}
if(!$name) {
$name = "Anonymous";
}

     $postdate = date("d/m/Y");
     

	$comment = htmlspecialchars($comment);
	
	$name = htmlspecialchars($name);
	$email = htmlspecialchars($email);
	$comment = str_replace("\n", "<BR>", $comment);
	$comment = addslashes($comment);
	$subject = addslashes($subject);
	$name = addslashes($name);
	$email = addslashes($email);
	
       $sql = "SELECT max(comment_id) AS total FROM ".$dbprefix."comments";
       if(!$r = mysql_query($sql, $db))
         die("Error connecting to the database.");
       list($total) = mysql_fetch_array($r);
       $total += 1;


$query = "INSERT INTO ".$dbprefix."comments VALUES ('".$total."', '".$msgid."', '".$REMOTE_ADDR."', '".$name."', '".$email."', '".$comment."', '".$postdate."')"; 
$result = mysql_query ($query) 
or die (mysql_error());

$name = stripslashes($name);
$name = stripslashes($name);
$templatepath = $path."/themes/".$templatename."/comments";
	$filename = $templatepath."/comments_thankyou.tpl";
	$fp = fopen($filename, "r");
	$thankyou = fread($fp, filesize($filename));
	$thankyou = str_replace('{name}', $name, $thankyou);
	fclose($fp);
	echo $thankyou;
}
    break;

    case "view":
    
    if(!$comments) {
    die ("<font face=\"verdana\" size=\"1\">The viewing of Comments has Been Disabled!</font>");
    }
    
// access database table that holds comments
$query = "SELECT * FROM ".$dbprefix."news WHERE msg_id = '".$msgid."'"; 
$query_result_handle = mysql_query ($query) 
or die (mysql_error()); 

$info = mysql_fetch_array($query_result_handle);
$info = stripslashes_array($info);

    echo"<head><title>Comments on ".$info[msg_subject]."</title></head><body>";
        
        
// access database table that holds comments
$query = "SELECT * FROM ".$dbprefix."comments WHERE msg_id = '".$msgid."' ORDER BY post_date DESC"; 
$query_result_handle = mysql_query ($query) 
or die (mysql_error()); 

	$num_of_rows = mysql_num_rows($query_result_handle);
if(!$num_of_rows) {
echo "<font face=\"verdana\" size=\"1\"><a href=\"index.php\">Back to News</a></font><a name=\"Top\"></a><br><br>";
echo "<font face=\"verdana\" size=\"1\">This post has no Comments!</font><br><br>";
die ("<font face=\"verdana\" size=\"1\"><a href=\"#Top\">Back to Top^</a></font><br><br>");
}

// get news from db
echo "<font face=\"verdana\" size=\"1\"><a href=\"index.php\">Back to News</a></font><a name=\"Top\"></a>";
while ($info = mysql_fetch_array($query_result_handle))
{
$info = stripslashes_array($info);

    $msg = get_msg_from_msg_id($info[msg_id], $dbprefix, $db);
    
	
$templatepath = $path."/themes/".$templatename."/comments";
	
	$filename = $templatepath."/comments_viewing.tpl";
	$fp = fopen($filename, "r");
	$this->template = fread($fp, filesize($filename));
	$this->template = str_replace('{name}', $info[poster_name], $this->template);
	$this->template = str_replace('{email}', $info[poster_email], $this->template);
	$this->template = str_replace('{date}', $info[post_date], $this->template);
	$this->template = str_replace('{comment}', $info[poster_comment], $this->template);
	$this->template = str_replace('{admindelurl}', $del, $this->template);
	$this->template = $emoticonsclass->emoticons($this->template);
	echo $this->template."<br>";
	fclose($fp);
}
	echo "<font face=\"verdana\" size=\"1\"><a href=\"#Top\">Back to Top^</a></font>";

    break;

    case "admin":
    	if($logged_in) {

    		switch($action) {
    		
     		   default:
     		   
    		    OpenTable();
    		    
    		    if(!$msgid) {
    		    // access database table that holds comments
    		    $query = "SELECT * FROM ".$dbprefix."comments order by 'msg_id'"; 
    		    $query_result_handle = mysql_query ($query) 
    		    or die (mysql_error()); 
    		    // check that there are comments
    		      $num_of_rows = mysql_num_rows ($query_result_handle) 
    		      or die (error("<font>There were no Comments found in the database!</font>"));
		    } elseif($msgid) {
		    // access database table that holds comments
    		    $query = "SELECT * FROM ".$dbprefix."comments order by 'msg_id'"; 
    		    $query_result_handle = mysql_query ($query) 
    		    or die (mysql_error()); 
    		    // check that there are comments
    		      $num_of_rows = mysql_num_rows ($query_result_handle) 
    		      or die (error("<font>There were no Comments found in the database!</font>"));
		    }
    		    echo "<table cellspacing='0'><tr><td bgcolor='c0c0c0' colspan='11'><font>Comments found in the database:</font></td></tr>";


    		    // get news from db
    		    while ($row = mysql_fetch_array($query_result_handle))
    		    {
    		    $row = stripslashes_array($row);
    		    $row = stripslashes_array($row);
    		    $sql = "SELECT * FROM ".$dbprefix."news WHERE msg_id = '".$row[msg_id]."'"; 
    		    $result = mysql_query ($sql) or die (mysql_error()); 
    		      $post = mysql_fetch_array($result);
    		      $post = stripslashes_array($post);
  
  	// access database table that holds news
	$sql = "SELECT * FROM ".$dbprefix."comments WHERE msg_id = '".$row[msg_id]."'"; 
	$result = mysql_query ($sql) 
	or die (mysql_error()); 
	$comments = mysql_fetch_array($result);
	$num_of_rows = mysql_num_rows($result);

    		      // main part of html

    		    ?><body bgcolor="600000" text="#FFFFFF">
  <tr bgcolor="#c0c0c0"> 
    <td ><font>&nbsp;News:&nbsp;</font></td>
    <td><font> <a href="index.php" target=_blank> 
      <?php echo $post[msg_subject]; ?>
       </a> </font></td>
    <td><font>&nbsp;Posted By:&nbsp;</font></td>
    <td><font> <a href="mailto:<?php echo $row[poster_email]; ?>"> 
      <?php echo $row[poster_name]; ?>
      </a> </font></td>
    <td><font>&nbsp;Posted On:&nbsp;</font></td>
    <td align="left"><font> 
      <?php echo $row[post_date]; ?>
      </font></td>
    <td align="left"><font>&nbsp;Poster IP:&nbsp;</font></td>
    <td align="left"><font> 
      <?php echo $row[poster_ip]; ?>
      </font></td>
    <td align="left"><font>&nbsp;Comment:&nbsp;</font></td>
    <td align="left"><font> 
      <?php echo $row[poster_comment]; ?>
      </font></td>
    <td align="center"><font>&nbsp;&nbsp;&nbsp;<a href="comments.php?mode=admin&action=del&commentid=<?php echo $row[comment_id]; ?>"><img src="admin/delete.gif" border="0" title="Delete Comment"></a></font></td>
  </tr>

	    <?php 
     		      }  
    		      echo "</table><br><br><br><font color=red class='important'><b>IMPORTANT: When you press the Delete icon the Comment is instantly removed</b></font>";
     		     CloseTable();

    		  break;
    		

    		  case "del":
    		    $result = mysql_query("DELETE FROM ".$dbprefix."comments WHERE comment_id = '".$commentid."'");
    		    if (!$result) {
    		  	  echo mysql_errno(). ": ".mysql_error(). "<br>";
    		  	  return;
    		    }
    		    if($back) {
    		    Header("Location: comments.php?mode=view&msgid=".$msgid);
		    } else {
    		    Header("Location: comments.php?mode=admin&action=view");
		    }
    		  break;
    		  
		}
       } else {
           		    Header("Location: comments.php?mode=admin&action=view");
	}
    break;

}
?>
