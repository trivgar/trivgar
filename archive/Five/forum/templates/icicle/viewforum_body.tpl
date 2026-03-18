 

  <table cellpadding="0" cellspacing="0" border="0" width="98%" align="center">
    <tr> 
      <td class="tableborder"> 
        <table cellpadding="7" cellspacing="1" border="0"  width="100%">
          <tr align="center"> 
            <td align="center" nowrap colspan="6" height="35" class="toprow" valign="middle"><a class="toprowlink" href="{REQUEST_URI}"><b>{FORUM_NAME}</b></a> 
              - {PAGE_NUMBER}</td>
          </tr>
          <tr align="center"> 
            <td align="center" nowrap colspan="6" class="row2" valign="middle"> 
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr> 
                  <td align="left">(Moderated by:<b><span class="smalltext"> {MODERATORS}</span></b>)<br>
                    <b><span class="smalltext">{PAGINATION} </span></b><b><span class="smalltext"> 
                    </span></b><span class="smalltext"><b>{LOGGED_IN_USER_LIST}</b></span><br>
                  </td>
                  <td align="right"><a href="{U_POST_NEW_TOPIC}"><img src="{POST_IMG}" border="0" alt="{L_POST_NEW_TOPIC}"></a></td>
                </tr>
              </table>
            </td>
          </tr>
          <tr align="center"> 
            
          <td align="center" nowrap colspan="6" class="row1" valign="middle"><span class="largetext"><a href="index.php" class="largelink"><b>{SITENAME}</b></a> 
            &gt; <a class="largelink" href="{REQUEST_URI}"><b>{FORUM_NAME}</b></a></span></td>
          </tr>
		  		        </table>
      </td>
    </tr>
  </table><br>
      <table cellpadding="0" cellspacing="0" border="0" width="98%" align="center">
    <tr> 
      <td class="tableborder"> 
        <table cellpadding="7" cellspacing="1" border="0"  width="100%">
          <tr align="center"> 
            <td align="center" nowrap colspan="2" class="catrow" valign="middle"><span class="catrowtext">&nbsp;Thread&nbsp;</span></td>
            <td nowrap class="catrow" valign="middle"><span class="catrowtext">&nbsp;Author&nbsp;</span></td>
            <td nowrap class="catrow" valign="middle"><span class="catrowtext">&nbsp;{L_REPLIES}&nbsp;</span></td>
            <td nowrap class="catrow" valign="middle"><span class="catrowtext">&nbsp;{L_VIEWS}&nbsp;</span></td>
            <td nowrap class="catrow" valign="middle"><span class="catrowtext">&nbsp;{L_LASTPOST}&nbsp;</span></td>
          </tr>
          <!-- BEGIN topicrow -->
          <tr align="center"> 
            <td class="row1" valign="middle"><img src="{topicrow.TOPIC_FOLDER_IMG}" alt="{topicrow.TOPIC_FOLDER_ALT}"></td>
            <td align="left" class="row2" width="100%"><span class="smalltext">{topicrow.NEWEST_POST_IMG}{topicrow.TOPIC_TYPE}<a href="{topicrow.U_VIEW_TOPIC}" class="topiclink">{topicrow.TOPIC_TITLE}</a></span><span class="smalltext"><br>
              {topicrow.GOTO_PAGE}</span></td>
            <td nowrap class="row1"><span class="smalltext">{topicrow.TOPIC_AUTHOR}</span></td>
            <td class="row2" nowrap><span class="mediumtext">{topicrow.REPLIES}</span></td>
            <td class="row1" nowrap><span class="mediumtext">{topicrow.VIEWS}</span></td>
            <td class="row2" align="right" nowrap><span class="smalltext">{topicrow.LAST_POST_TIME}<br>{topicrow.LAST_POST_AUTHOR}{topicrow.LAST_POST_IMG}</span></td>
          </tr>
          <!-- END topicrow -->
          <!-- BEGIN switch_no_topics -->
          <tr align="center"> 
            <td colspan="6" class="row1"><span class="mediumtext">No topics have been 
              posted in this forum.</span></td>
          </tr>
          <!-- END switch_no_topics -->
		        </table>
      </td>
    </tr>
  </table>
      <table cellpadding="0" cellspacing="0" border="0" width="98%" align="center">
    <tr> 
      <td class="tableborder"> <br>
        <table cellpadding="7" cellspacing="1" border="0"  width="100%">
          <tr> 
            <td width="50%" align="left" class="row1"><a href="{U_POST_NEW_TOPIC}"><img src="{POST_IMG}" border="0" alt="{L_POST_NEW_TOPIC}"></a><br>
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
              {S_TIMEZONE}. </span> <span class="smalltext">{CURRENT_TIME}</span> 
              <br>
            </td>
          </tr>
          <tr> 
            <td width="100%" colspan="2" align="center" height="35" class="toprow"> 
              <table border="0" cellspacing="0" cellpadding="2">
                <tr align="center" valign="middle"> 
                  <td><form method="post" action="{S_POST_DAYS_ACTION}"><span class="toprowtext">{L_DISPLAY_TOPICS}:</span></td>
                  <td>&nbsp;{S_SELECT_TOPIC_DAYS}&nbsp;</td>
                  <td><span class="toprowtext"> 
                    <input type="image" src="templates/icicle/images/gobutton.gif" border="0" align="absmiddle" name="image">
                    </span></td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>

  </form>
<table cellpadding="2" cellspacing="0" border="0" width="98%"  align="center">
  <tr> 
    <td rowspan="2" align="left"> 
      <table border="0" cellspacing="2" cellpadding="2" align="left">
        <tr> 
          <td nowrap>(&nbsp;<img src="templates/icicle/images/posticon_normal_new.gif" alt="{L_NEW_POSTS}" align="absmiddle" >&nbsp;{L_NEW_POSTS}&nbsp;&nbsp;)</td>
          <td nowrap>( <img src="templates/icicle/images/posticon_hot_new.gif" alt="{L_NEW_POSTS_HOT}" align="absmiddle" >&nbsp;{L_NEW_POSTS_HOT} 
            )&nbsp;&nbsp;</td>
          <td nowrap>( <img src="templates/icicle/images/posticon_normal_locked.gif" alt="{L_NO_NEW_POSTS_TOPIC_LOCKED}" align="absmiddle" >&nbsp;Closed 
            thread )</td>
        </tr>
        <tr> 
          <td nowrap>(&nbsp;<img src="templates/icicle/images/posticon_normal.gif" alt="{L_NO_NEW_POSTS}" align="absmiddle" >&nbsp;{L_NO_NEW_POSTS}&nbsp;)&nbsp;</td>
          <td nowrap colspan="2">( <img src="templates/icicle/images/posticon_hot.gif" alt="{L_NO_NEW_POSTS_HOT}" align="absmiddle" >&nbsp;{L_NO_NEW_POSTS_HOT} 
            )&nbsp;&nbsp;</td>
        </tr>
      </table>
    </td>
    <td rowspan="2" align="right"><span class="smalltext">{S_AUTH_LIST}</span></td>
  </tr>
  <tr> </tr>
</table>
<br>
