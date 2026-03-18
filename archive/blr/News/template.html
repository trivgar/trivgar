<?php
/*---------------------------------------------------*
        File: template.php
 Description: output templating file for news pro
   Copyright: (c) n-12.net
 *---------------------------------------------------*/

require('path.inc');

require($path.'/functions.php');
require($path.'/config.php');
require($path.'/auth.php');

$templatepath = $path."/themes/".$templatename."/index.tpl";


// access database table that holds news
$query = "SELECT * FROM ".$dbprefix."news order by 'msg_id' DESC LIMIT 0, ".$count.""; 
$query_result_handle = mysql_query ($query) 
or die (mysql_error()); 

// check that there is news
$num_of_rows = mysql_num_rows ($query_result_handle);
if(!$num_of_rows) {$templatepath = $path."/themes/".$templatename;
     $postdate = date("d/m/Y");
     $posttime = date("H:i:s");
	$filename = $templatepath."/index.tpl";
	$fp = fopen($filename, "r");
	$this->template = fread($fp, filesize($filename));
	$this->template = str_replace('{posttime}', $posttime, $this->template);
	$this->template = str_replace('{postdate}', $postdate, $this->template);
	$this->template = str_replace('{poster}', 'n-12', $this->template);
	$this->template = str_replace('{posteremail}', 'support@n-12.net', $this->template);
	$this->template = str_replace('{subject}', '<b><i>No News</i></b>', $this->template);
	$this->template = str_replace('{news}','No News has been posted yet!<br>Please contact The Site admin<br>Informating them of this!', $this->template);
	$this->template = str_replace('{path}',$path, $this->template);
	$this->template = str_replace('{url}',$url, $this->template);
	$this->template = str_replace('{comments}','<font face="verdana" size="1">Comments have Been Disabled!</font>', $this->template);
	echo $this->template;
}


// get news from db
while ($newsinfo = mysql_fetch_array($query_result_handle))
{
	$newsinfo = stripslashes_array($newsinfo);
	$posterinfo = $loginclass->get_userstatus_from_userid($newsinfo[msg_poster], $dbprefix, $db);
	// output news to template
	$newsinfo[msg_text] = $emoticonsclass->emoticons($newsinfo[msg_text]);
	$newsinfo[msg_subject] = $emoticonsclass->emoticons($newsinfo[msg_subject]);
	
$templatepath = $path."/themes/".$templatename;
	
	$filename = $templatepath."/index.tpl";
	$fp = fopen($filename, "r");
	$this->template = fread($fp, filesize($filename));
	$this->template = str_replace('{posttime}', $newsinfo[msg_posttime], $this->template);
	$this->template = str_replace('{postdate}', $newsinfo[msg_postdate], $this->template);
	$this->template = str_replace('{poster}', $posterinfo[username], $this->template);
	$this->template = str_replace('{posteremail}', $posterinfo[user_email], $this->template);
	$this->template = str_replace('{subject}', $newsinfo[msg_subject], $this->template);
	$this->template = str_replace('{news}',$newsinfo[msg_text], $this->template);
	$this->template = str_replace('{path}',$path, $this->template);
	$this->template = str_replace('{url}',$url, $this->template);
	fclose($fp);
	
include($path.'/config.php');
if($comments == 1) {

	// access database table that holds news
	$sql = "SELECT * FROM ".$dbprefix."comments WHERE msg_id = '".$newsinfo[msg_id]."'"; 
	$result = mysql_query ($sql) 
	or die (mysql_error()); 
	$comments = mysql_fetch_array($result);
	$num_of_rows = mysql_num_rows($result);
	
	$templatepath = $path."/themes/".$templatename."/comments";
	$filename = $templatepath."/comments.tpl";
	$commentsurl = $url."/comments.php";
	$fp = fopen($filename, "r");
	$comments = fread($fp, filesize($filename));
	$comments = str_replace('{commentsnumber}',$num_of_rows, $comments);
if($num_of_rows) {
	$comments = str_replace('{commentsview}',$commentsurl.'?mode=view&msgid='.$newsinfo[msg_id], $comments);
} else {
	$comments = str_replace('| <a href="{commentsview}">Read Comments</a> ','', $comments);
}
	$comments = str_replace('{commentspost}',$commentsurl.'?mode=post&msgid='.$newsinfo[msg_id], $comments);

	$this->template = str_replace('{comments}',$comments, $this->template);
	
} else {
	$this->template = str_replace('{comments}','<font face="verdana" size="1">Comments have Been Disabled!</font>', $this->template);
}
echo $this->template;


} ?><body bgcolor="053247">
<font color="#FFFFFF">
<center>
<font face="Verdana, Arial, Helvetica, sans-serif" size="2">Blue Light Romance</font></font>
