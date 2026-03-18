
<table width="100%" cellspacing="2" cellpadding="2" border="0">
  <tr> 
	<td align="left" valign="bottom" colspan="2"><a class="maintitle" href="{U_VIEW_TOPIC}">{TOPIC_TITLE}</a><br />
	  <span class="gensmall"><b>{PAGINATION}</b><br />
	  &nbsp; </span></td>
  </tr>
</table>

<table width="100%" cellspacing="2" cellpadding="2" border="0">
  <tr> 
	<td align="left" valign="bottom" nowrap="nowrap"><span class="nav"><a href="{U_POST_NEW_TOPIC}"><img src="{POST_IMG}" border="0" alt="{L_POST_NEW_TOPIC}" align="middle" /></a>&nbsp;&nbsp;&nbsp;<a href="{U_POST_REPLY_TOPIC}"><img src="{REPLY_IMG}" border="0" alt="{L_POST_REPLY_TOPIC}" align="middle" /></a></span></td>
	<td align="left" valign="middle" width="100%"><span class="gensmall"><b>&nbsp;&nbsp;&nbsp;<a href="{U_INDEX}" class="gensmall">{L_INDEX}</a> 
	  -> <a href="{U_VIEW_FORUM}" class="gensmall">{FORUM_NAME}</a></span></b></td>
  </tr>
</table>

<table class="forumline" width="100%" cellspacing="0" cellpadding="3" border="0">
	<tr align="right">
		<td class="catHead" colspan="2" height="28"><span class="nav"><a href="{U_VIEW_OLDER_TOPIC}" class="nav">{L_VIEW_PREVIOUS_TOPIC}</a> :: <a href="{U_VIEW_NEWER_TOPIC}" class="nav">{L_VIEW_NEXT_TOPIC}</a> &nbsp;</span></td>
	</tr>
	{POLL_DISPLAY} 
	<tr>
		<th class="th" width="165" height="25" nowrap="nowrap">{L_AUTHOR}</th>
		<th class="th" nowrap="nowrap">{L_MESSAGE}</th>
	</tr>
	<!-- BEGIN postrow -->
	<tr>
		<td background="templates/Coldsteel/images/userbg.gif" width="165" align="center" valign="top" class="{postrow.ROW_CLASS}">
		<span class="name"><a name="{postrow.U_POST_ID}"></a>
			 	<table border="1" style="border-collapse: collapse" bordercolor="#000000" width="90%" cellpadding="2">
    <tr>
    <td align="center" width="100%">
	<span class="postdetails"> <b>{postrow.POSTER_NAME}</b><br />
        </td>
		  </tr>
		    </table>
<br />
		{postrow.RANK_IMAGE}&nbsp;{postrow.POSTER_AVATAR}<br />
        <br />

	<table border="1" style="border-collapse: collapse" bordercolor="#000000" width="90%" cellpadding="2">
    <tr>
    <td width="100%">
    <span class="postdetails">Rank: {postrow.POSTER_RANK}<br />
		</td>
		  </tr>
		    </table>
<br />
    <table border="1" style="border-collapse: collapse" bordercolor="#000000" width="90%" cellpadding="2">
    <tr>
    <td width="100%">
    <span class="postdetails"> {postrow.POSTER_JOINED}<br />
        </td>
		  </tr>
		    </table>
<br />
	<table border="1" style="border-collapse: collapse" bordercolor="#000000" width="90%" cellpadding="2">
       <tr>
         <td width="100%">
          <span class="postdetails"> {postrow.POSTER_POSTS}<br />
           </td>
		     </tr>
		       </table>
		       <br />

	  </td>
		<td class="{postrow.ROW_CLASS}" width="100%" height="28" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="3">
			<tr>
				<td valign="top" width="100%">

				<span class="gensmall"><b>{L_POST_SUBJECT}: {postrow.POST_SUBJECT}</b> </span>

				
				</td>
				<td valign="top" align="right" nowrap="nowrap">{postrow.QUOTE_IMG} {postrow.EDIT_IMG} {postrow.DELETE_IMG} {postrow.IP_IMG}</td>
			</tr>
			<tr> 
				<td colspan="2"></td>
			</tr>
			<tr>
				<td colspan="2"><span class="postbody">{postrow.MESSAGE}{postrow.SIGNATURE}</span><span class="gensmall">{postrow.EDITED_MESSAGE}</span></td>
			</tr>
		</table></td>
	</tr>
	<tr> 
		<td background="templates/Coldsteel/images/userbg.gif" class="{postrow.ROW_CLASS}" width="165" align="center" valign="middle"><a href="{postrow.U_MINI_POST}"><img src="{postrow.MINI_POST_IMG}" width="12" height="9" alt="{postrow.L_MINI_POST_ALT}" title="{postrow.L_MINI_POST_ALT}" border="0" /></a><span class="copyright">{postrow.POST_DATE}</span></td>
		<td class="{postrow.ROW_CLASS}" width="100%" height="28" valign="bottom" nowrap="nowrap"><table cellspacing="0" cellpadding="0" border="0" height="18" width="18">
			<tr> 
				<td valign="middle" nowrap="nowrap">{postrow.PROFILE_IMG} {postrow.PM_IMG} {postrow.EMAIL_IMG} {postrow.WWW_IMG} {postrow.AIM_IMG} {postrow.YIM_IMG} {postrow.MSN_IMG} {postrow.ICQ_IMG}</td>
			</tr>
		</table></td>
	</tr>
	<tr> 
		<td background="templates/Coldsteel/images/spacerbg.gif" class="spaceRow" colspan="2" height="25"></td>
	</tr>
	<!-- END postrow -->
	<tr align="center"> 
		<td class="catBottom" colspan="2" height="28"><table cellspacing="0" cellpadding="0" border="0">
			<tr><form method="post" action="{S_POST_DAYS_ACTION}">
				<td align="center"><span class="gensmall">{L_DISPLAY_POSTS}: {S_SELECT_POST_DAYS}&nbsp;{S_SELECT_POST_ORDER}&nbsp;<input type="submit" value="{L_GO}" class="liteoption" name="submit" /></span></td>
			</form></tr>
		</table></td>
	</tr>
</table>

<table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
  <tr> 
	<td align="left" valign="middle" nowrap="nowrap"><span class="nav"><a href="{U_POST_NEW_TOPIC}"><img src="{POST_IMG}" border="0" alt="{L_POST_NEW_TOPIC}" align="middle" /></a>&nbsp;&nbsp;&nbsp;<a href="{U_POST_REPLY_TOPIC}"><img src="{REPLY_IMG}" border="0" alt="{L_POST_REPLY_TOPIC}" align="middle" /></a></span></td>
	<td align="left" valign="middle" width="100%"><span class="nav">&nbsp;&nbsp;&nbsp;<a href="{U_INDEX}" class="gensmall">{L_INDEX}</a> 
	  -> <a href="{U_VIEW_FORUM}" class="gensmall">{FORUM_NAME}</a></span></td>
	<td align="right" valign="top" nowrap="nowrap"><span class="gensmall">{S_TIMEZONE}</span><br /><span class="nav">{PAGINATION}</span> 
	  </td>
  </tr>
  <tr>
	<td align="left" colspan="3"><span class="nav">{PAGE_NUMBER}</span></td>
  </tr>
</table>

<table width="100%" cellspacing="2" border="0" align="center">
  <tr> 
	<td width="40%" valign="top" nowrap="nowrap" align="left"><span class="gensmall">{S_WATCH_TOPIC}</span><br />
	  &nbsp;<br />
	  {S_TOPIC_ADMIN}</td>
	<td align="right" valign="top" nowrap="nowrap">{JUMPBOX}<span class="copyright">{S_AUTH_LIST}</span></td>
  </tr>
</table>
