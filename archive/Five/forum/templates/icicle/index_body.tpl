 
<table width="98%" border="0" cellspacing="2" cellpadding="2" align="center">
  <tr> 
    <td align="left" width="50%" valign="middle"><span class="smalltext"> 
      <!-- BEGIN switch_user_logged_in -->
      <a href="{U_SEARCH_NEW}" class="smalllink">{L_SEARCH_NEW}</a><br>
      <a href="{U_SEARCH_SELF}" class="smalllink">{L_SEARCH_SELF}</a> 
      <!-- END switch_user_logged_in -->
      <br>
      {CURRENT_TIME}<br>
      <!-- BEGIN switch_user_logged_in -->
      {LAST_VISIT_DATE} 
      <!-- END switch_user_logged_in -->
      </span></td>
    <td align="right" width="50%" valign="bottom">
      <p><a href="{U_INDEX}" class="smalllink">{L_INDEX}</a><br>
      </p>
      <p><span class="smalltext">{TOTAL_POSTS}<br>
        {TOTAL_USERS}</span></p>
    </td>
  </tr>
</table>

        <!-- BEGIN catrow -->
         <table cellpadding="0" cellspacing="0" border="0" width="98%" align="center">
	  <tr> 
	    <td class="tableborder">
      <table cellpadding="7" cellspacing="1" border="0" width="100%">
        <tr> 
          <td colspan="3" class="catrow"><a href="{catrow.U_VIEWCAT}" class=catlink>{catrow.CAT_DESC}</a></td>
        </tr>
        <tr align="center" valign="middle"> 
          <td class="toprow" colspan="2" width="100%"><b>Forum</b></td>
          <td class="toprow" nowrap width="151"><b>Last Post</b></td>
        </tr>
        <!-- BEGIN forumrow -->
        <tr align="center"> 
          <td valign="middle" class="row1" align="center"><img src="{catrow.forumrow.FORUM_FOLDER_IMG}" alt="{catrow.forumrow.L_FORUM_FOLDER_ALT}"></td>
          <td align="left" class="row2" width="100%"><a href="{catrow.forumrow.U_VIEWFORUM}" class="forumlink">{catrow.forumrow.FORUM_NAME}</a> 
            - <span class="smalltext"><i>{catrow.forumrow.POSTS}</i> Posts in 
            <i>{catrow.forumrow.TOPICS}</i><b> </b>Threads <br>
            {catrow.forumrow.FORUM_DESC}<br>
            <b>Moderated by:</b> {catrow.forumrow.MODERATORS} </span></td>
          <td class="row1" align="right" nowrap width="151"> <span class="smalltext"><table cellpadding="5"><tr><td nowrap align="right">{catrow.forumrow.LAST_POST}</td></tr></table></span></td>
        </tr>
        <!-- END forumrow -->
              </td>
	      </tr>
      </table>
            </td>
            </tr>
      </table><br>
        <!-- END catrow -->
                 <table cellpadding="0" cellspacing="0" border="0" width="98%" align="center">
		  <tr> 
	    <td class="tableborder">
	          <table cellpadding="7" cellspacing="1" border="0" width="100%">
        <tr > 
          <td class="catrow"><a href="{U_VIEWONLINE}" class="catlink">{L_WHO_IS_ONLINE}</a></td>
        </tr>
        <tr> 
          <td class="row2"> <span class="smalltext">{TOTAL_USERS_ONLINE}&nbsp; [ <b>{L_WHOSONLINE_ADMIN}</b> ] &nbsp; [ <b>{L_WHOSONLINE_MOD}</b> 
            ]<br>
            {LOGGED_IN_USER_LIST}<br>
            {RECORD_USERS}</span></td>
        </tr>
        <tr> 
          <td class="row1"> <span class="smalltext"> {NEWEST_USER}<br>
          {L_ONLINE_EXPLAIN}
            </span></td>
        </tr>
        </table>
        </tr>
        </td>
        </table>
        <!-- BEGIN switch_user_logged_in -->
        <br>
                         <table cellpadding="0" cellspacing="0" border="0" width="98%" align="center">
			  <tr> 
		    <td class="tableborder">
	          <table cellpadding="7" cellspacing="1" border="0" width="100%">
        <tr> 
          <td colspan="2" class="catrow"><span class="catrowtext">Private Messages</span></td>
        </tr>
        <tr align="center" valign="middle"> 
          <td class="row1"> <img src="templates/icicle/images/posticon_normal_new.gif"> 
          </td>
          <td class="row2" align="left" width="100%"> 
            <p><span class="smalltext">{CURRENT_TIME}</span><span class="mainmenu"><a href="{U_PRIVATEMSGS}" class="mainmenu"><br>
              {PRIVATE_MESSAGE_INFO}</a></span></p>
          </td>
        </tr>
                </table>
	        </tr>
	        </td>
        </table>
        <!-- END switch_user_logged_in -->
    <table width="98%" cellspacing="0" border="0" align="center" cellpadding="2">
  <tr> 
    <td align="left"><a href="{U_MARK_READ}" class="smalllink">{L_MARK_FORUMS_READ}</a></td>
    <td align="right" width="50%"><span class="smalltext"> </span><span class="smalltext"> 
      <a href="{U_LOGIN_LOGOUT}" class="smalllink">{L_LOGIN_LOGOUT}</a> | {S_TIMEZONE}</span></td>
  </tr>
  <tr>
    <td align="center">&nbsp; </td>
    <td align="right" width="50%"> 
      <!-- BEGIN switch_user_logged_out -->
      <table border="0" cellpadding="2" cellspacing="0">
        <form method="post" action="{S_LOGIN_ACTION}">
          <tr> 
            <td nowrap><span class="smalltext"><b>Not cookied?</b><br>
              Login with username and password:</span></td>
          </tr>
          <tr> 
            <td nowrap align="center"> 
              <input class="post" type="text" name="username" size="10">
              <input class="post" type="password" name="password" size="10">
              <b>Auto Login?</b> 
              <input class="text" type="checkbox" name="autologin">
              <input type="submit" class="mainoption" name="login" value="{L_LOGIN}">
              <br>
            </td>
          </tr>
        </form>
      </table>
      <!-- END switch_user_logged_out -->
    </td>
  </tr>
</table>
<table cellspacing="3" border="0" align="center" cellpadding="0">
  <tr> 
    <td width="20" align="center"><img src="templates/icicle/images/posticon_normal_new.gif" alt="{L_NEW_POSTS}"/></td>
    <td><span class="smalltext">{L_NEW_POSTS}</span></td>
    <td>&nbsp;&nbsp;</td>
    <td width="20" align="center"><img src="templates/icicle/images/posticon_normal.gif" alt="{L_NO_NEW_POSTS}"></td>
    <td><span class="smalltext">{L_NO_NEW_POSTS}</span></td>
    <td>&nbsp;&nbsp;</td>
    <td width="20" align="center"><img src="templates/icicle/images/posticon_normal_locked.gif" alt="{L_FORUM_LOCKED}"></td>
    <td><span class="smalltext">A Closed Forum</span></td>
  </tr>
</table>
<p><br>
</p>
