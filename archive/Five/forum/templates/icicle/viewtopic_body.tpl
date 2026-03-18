<table cellpadding="0" cellspacing="0" border="0" width="98%" align="center">
  <tr> 
    <td class="tableborder"> 
<table cellpadding="7" cellspacing="1" border="0"  width="100%">
  <tr align="center"> 
    <td align="center" nowrap height="35" class="toprow" valign="middle"><b>{TOPIC_TITLE}</b></td>
  </tr>
  <tr align="center"> 
    <td align="center" nowrap class="row2" valign="middle"> 
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td align="center" width="100%"><span class="mediumtext">&lt;&nbsp; 
            <a href="{U_VIEW_OLDER_TOPIC}" class="mediumlink">Last Thread</a>&nbsp;|&nbsp;<a href="{U_VIEW_NEWER_TOPIC}" class="mediumlink">Next 
            Thread </a>&nbsp;&gt;</span><span class="smalltext"><b><br>
            {S_WATCH_TOPIC}</b></span><br>
          </td>
                <td align="right" nowrap><span class="smalltext"><a href="{U_POST_NEW_TOPIC}"><img src="{POST_IMG}" border="0" alt="{L_POST_NEW_TOPIC}" align="middle"></a>&nbsp;<a href="{U_POST_REPLY_TOPIC}"><img src="{REPLY_IMG}" border="0" alt="{L_POST_REPLY_TOPIC}" align="middle"></a></span></td>
        </tr>
      </table>
    </td>
  </tr>
  <tr align="center"> 
    <td align="center" nowrap class="row1" valign="middle"><span class="largetext"><a href="index.php" class="largelink"><b>{SITENAME}</b></a> 
      &gt; <a class="largelink" href="{REQUEST_URI}"><b></b></a><a class="largelink" href="{U_VIEW_FORUM}"><b>{FORUM_NAME}</b></a></span></td>
  </tr>
</table>
</td>
</tr>
</table>
<br>{POLL_DISPLAY} 
<table cellpadding="0" cellspacing="0" border="0" width="98%" align="center">
  <tr> 
    <td class="tableborder"> 
      <table cellpadding="7" cellspacing="1" border="0"  width="100%">
        <tr align="center"> 
          <td align="center" nowrap class="catrow" valign="middle" width="22%">Author</td>
          <td align="center" nowrap class="catrow" valign="middle">Thread</td>
        </tr>
        
       </table>
    </td>
  </tr>
</table>
<!-- BEGIN postrow -->
<table cellpadding="0" cellspacing="0" border="0" width="98%" align="center">
  <tr> 
    <td class="tableborder"> 
<table width="100%" border="0" cellspacing="1" cellpadding="7">
  <tr align="center"> 
    <td align="left" nowrap class="row1" valign="top" width="22%"><span class="largetext"><a name="{postrow.U_POST_ID}"></a><b>{postrow.POSTER_NAME}</b></span><br />
      <span class="smalltext">{postrow.POSTER_RANK}<br />
      {postrow.RANK_IMAGE}{postrow.POSTER_AVATAR}<br />
      <br />
      {postrow.POSTER_JOINED}<br />
      {postrow.POSTER_POSTS}<br />
      {postrow.POSTER_FROM}</span> </td>
    <td align="left" class="row2" valign="top"> 
            <table width="100%" border="0" cellspacing="0" cellpadding="2">
              <tr> 
          <td><span class="smalltext"><b>{postrow.POST_SUBJECT}</b></span></td>
          <td align="right">{postrow.EDIT_IMG}&nbsp;{postrow.QUOTE_IMG}&nbsp;{postrow.DELETE_IMG}&nbsp;{postrow.IP_IMG}</td>
        </tr>
        <tr> 
          <td colspan="2" height="3" class="row1"></td>
        </tr>
      </table>
      <br>
      <span class="largetext">{postrow.MESSAGE}{postrow.SIGNATURE}</span><span class="smalltext">{postrow.EDITED_MESSAGE}</span></td>
  </tr>
  <tr align="center"> 
    <td align="center" class="row1" valign="middle" width="22%"><a href="{postrow.U_MINI_POST}"><img src="{postrow.MINI_POST_IMG}" <img src="{postrow.MINI_POST_IMG}" alt="{postrow.L_MINI_POST_ALT}" border="0"></a><span class="smalltext"> 
      {postrow.POST_DATE}<span class="mediumtext"></span></span></td>
    <td align="center" nowrap class="row2" valign="middle"> 
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr valign="bottom"> 
          <td>&nbsp;{postrow.PROFILE_IMG} {postrow.PM_IMG} {postrow.EMAIL_IMG} 
            {postrow.WWW_IMG} {postrow.AIM_IMG} {postrow.YIM_IMG} {postrow.MSN_IMG} 
            {postrow.ICQ_IMG}</td>
        </tr>
      </table>
    </td>
  </tr>
</table>
    </td>
  </tr>
</table> 
<!-- END postrow -->
<br>
<table cellpadding="0" cellspacing="0" border="0" width="98%" align="center">
    <tr> 
      <td class="tableborder">
<table cellpadding="7" cellspacing="1" border="0"  width="100%">
  <tr> 
          <td width="50%" align="left" class="row1"><span class="smalltext"><a href="{U_POST_NEW_TOPIC}"><img src="{POST_IMG}" border="0" alt="{L_POST_NEW_TOPIC}" align="middle"></a>&nbsp;<a href="{U_POST_REPLY_TOPIC}"><img src="{REPLY_IMG}" border="0" alt="{L_POST_REPLY_TOPIC}" align="middle"></a></span><br>
      <span class="smalltext"><a href="{U_MARK_READ}">{L_MARK_TOPICS_READ}</a></span></td>
    <td width="50%" align="right" class="row2" valign="top" colspan="-3"> 
      <table cellpadding="0" cellspacing="0" border="0">
        <tr> 
          <td> <b><span class="smalltext">Forum Jump:</span></b><br>
            {JUMPBOX} </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr> 
    <td colspan="2" align="center" class="row2"><span class="smalltext">{PAGINATION}</span><span class="smalltext"><br>
      {S_TIMEZONE}. </span> <span class="smalltext">{CURRENT_TIME}</span> <br>
    </td>
  </tr>
  <tr> 
    <td width="100%" colspan="2" align="center" height="35" class="toprow"> 
      <table border="0" cellspacing="0" cellpadding="0">
        <tr> 
        <form method="post" action="{S_POST_DAYS_ACTION}">
          <td valign="middle"><span class="toprowtext">&nbsp;&nbsp;{L_DISPLAY_POSTS}:</span></td>
          <td valign="middle"><span class="toprowtext">&nbsp;&nbsp;{S_SELECT_POST_DAYS}&nbsp;{S_SELECT_POST_ORDER}</span></td>
          <td align="left" valign="middle"><span class="toprowtext"> &nbsp; 
            <input type="image" src="templates/icicle/images/gobutton.gif" border="0" align="absmiddle" name="image">
            </span></td>
            </form>
        </tr>
      </table>
    </td>
  </tr>
</table>

    </td>
  </tr>
</table>
<p align="center">{S_TOPIC_ADMIN}</p>