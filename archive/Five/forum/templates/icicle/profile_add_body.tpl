
<form action="{S_PROFILE_ACTION}" enctype="multipart/form-data" method="post">
  {ERROR_BOX} 
  <table cellpadding="0" cellspacing="0" border="0" width="98%" align="center">
  <tr> 
    <td class="tableborder">
        <table border="0" cellpadding="3" cellspacing="1" width="100%">
          <tr align="center"> 
            <td height="34" class="catrow" colspan="2"  valign="middle"><span class="catrowtext">{L_REGISTRATION_INFO}</span></td>
          </tr>
          <tr> 
            <td class="row2" colspan="2"><span class="largetext">{L_ITEMS_REQUIRED}</span></td>
          </tr>
          <tr> 
            <td class="row1" width="38%"><b><span class="largetext">{L_USERNAME}: 
              *</span></b></td>
            <td class="row2"> 
              <input type="text" class="post" style="width: 200px" name="username" size="25" maxlength="40" value="{USERNAME}">
            </td>
          </tr>
          <tr> 
            <td class="row1"><b><span class="largetext">{L_EMAIL_ADDRESS}: *</span></b></td>
            <td class="row2"> 
              <input type="text" class="post" style="width: 200px" name="email" size="25" maxlength="255" value="{EMAIL}">
            </td>
          </tr>
          <!-- BEGIN switch_edit_profile -->
          <tr> 
            <td class="row1"><span class="largetext"><b>{L_CURRENT_PASSWORD}: 
              *</b></span><br>
              <span class="largetext">{L_PASSWORD_IF_CHANGED}</span></td>
            <td class="row2"> 
              <input type="password" class="post" style="width: 200px" name="cur_password" size="25" maxlength="100" value="{PASSWORD}">
            </td>
          </tr>
          <!-- END switch_edit_profile -->
          <tr> 
            <td class="row1"><span class="largetext"><b>{L_NEW_PASSWORD}: *</b></span><br>
              <span class="largetext">{L_PASSWORD_IF_CHANGED}</span></td>
            <td class="row2"> 
              <input type="password" class="post" style="width: 200px" name="new_password" size="25" maxlength="100" value="{PASSWORD}">
            </td>
          </tr>
          <tr> 
            <td class="row1"><span class="largetext"><b>{L_CONFIRM_PASSWORD}: 
              * </b></span><br>
              <span class="largetext">{L_PASSWORD_CONFIRM_IF_CHANGED}</span></td>
            <td class="row2"> 
              <input type="password" class="post" style="width: 200px" name="password_confirm" size="25" maxlength="100" value="{PASSWORD_CONFIRM}">
            </td>
          </tr>
          <tr align="center"> 
            <td height="34" class="catrow" colspan="2" valign="middle"><span class="catrowtext">{L_PROFILE_INFO}</span></td>
          </tr>
          <tr> 
            <td class="row2" colspan="2"><span class="largetext">{L_PROFILE_INFO_NOTICE}</span></td>
          </tr>
          <tr> 
            <td class="row1"><b><span class="largetext">{L_ICQ_NUMBER}:</span></b></td>
            <td class="row2"> 
              <input type="text" name="icq" class="post"style="width: 100px"  size="10" maxlength="15" value="{ICQ}">
            </td>
          </tr>
          <tr> 
            <td class="row1"><b><span class="largetext">{L_AIM}:</span></b></td>
            <td class="row2"> 
              <input type="text" class="post"style="width: 150px"  name="aim" size="20" maxlength="255" value="{AIM}">
            </td>
          </tr>
          <tr> 
            <td class="row1"><b><span class="largetext">{L_MESSENGER}:</span></b></td>
            <td class="row2"> 
              <input type="text" class="post"style="width: 150px"  name="msn" size="20" maxlength="255" value="{MSN}">
            </td>
          </tr>
          <tr> 
            <td class="row1"><b><span class="largetext">{L_YAHOO}:</span></b></td>
            <td class="row2"> 
              <input type="text" class="post"style="width: 150px"  name="yim" size="20" maxlength="255" value="{YIM}">
            </td>
          </tr>
          <tr> 
            <td class="row1"><b><span class="largetext">{L_WEBSITE}:</span></b></td>
            <td class="row2"> 
              <input type="text" class="post"style="width: 200px"  name="website" size="25" maxlength="255" value="{WEBSITE}">
            </td>
          </tr>
          <tr> 
            <td class="row1"><b><span class="largetext">{L_LOCATION}:</span></b></td>
            <td class="row2"> 
              <input type="text" class="post"style="width: 200px"  name="location" size="25" maxlength="100" value="{LOCATION}">
            </td>
          </tr>
          <tr> 
            <td class="row1"><b><span class="largetext">{L_OCCUPATION}:</span></b></td>
            <td class="row2"> 
              <input type="text" class="post"style="width: 200px"  name="occupation" size="25" maxlength="100" value="{OCCUPATION}">
            </td>
          </tr>
          <tr> 
            <td class="row1"><b><span class="largetext">{L_INTERESTS}:</span></b></td>
            <td class="row2"> 
              <input type="text" class="post"style="width: 200px"  name="interests" size="35" maxlength="150" value="{INTERESTS}">
            </td>
          </tr>
          <tr> 
            <td class="row1"><span class="largetext"><b>{L_SIGNATURE}:</b></span><br>
              <span class="largetext">{L_SIGNATURE_EXPLAIN}<br>
              <br>
              {HTML_STATUS}<br>
              {BBCODE_STATUS}<br>
              {SMILIES_STATUS}</span></td>
            <td class="row2"> 
              <textarea name="signature"style="width: 300px"  rows="6" cols="30" class="post">{SIGNATURE}</textarea>
            </td>
          </tr>
          <tr align="center"> 
            <td height="34" class="catrow" colspan="2"  valign="middle"><span class="catrowtext">{L_PREFERENCES}</span></td>
          </tr>
          <tr> 
            <td class="row1"><b><span class="largetext">{L_PUBLIC_VIEW_EMAIL}:</span></b></td>
            <td class="row2"> 
              <input type="radio" name="viewemail" value="1" {VIEW_EMAIL_YES}>
              <span class="largetext">{L_YES}</span>&nbsp;&nbsp; 
              <input type="radio" name="viewemail" value="0" {VIEW_EMAIL_NO}>
              <span class="largetext">{L_NO}</span></td>
          </tr>
          <tr> 
            <td class="row1"><b><span class="largetext">{L_HIDE_USER}:</span></b></td>
            <td class="row2"> 
              <input type="radio" name="hideonline" value="1" {HIDE_USER_YES}>
              <span class="largetext">{L_YES}</span>&nbsp;&nbsp; 
              <input type="radio" name="hideonline" value="0" {HIDE_USER_NO}>
              <span class="largetext">{L_NO}</span></td>
          </tr>
          <tr> 
            <td class="row1"><span class="largetext"><b>{L_NOTIFY_ON_REPLY}:</b></span><br>
              <span class="largetext">{L_NOTIFY_ON_REPLY_EXPLAIN}</span></td>
            <td class="row2"> 
              <input type="radio" name="notifyreply" value="1" {NOTIFY_REPLY_YES}>
              <span class="largetext">{L_YES}</span>&nbsp;&nbsp; 
              <input type="radio" name="notifyreply" value="0" {NOTIFY_REPLY_NO}>
              <span class="largetext">{L_NO}</span></td>
          </tr>
          <tr> 
            <td class="row1"><span class="largetext"><b>{L_NOTIFY_ON_PRIVMSG}:</b></span></td>
            <td class="row2"> 
              <input type="radio" name="notifypm" value="1" {NOTIFY_PM_YES}>
              <span class="largetext">{L_YES}</span>&nbsp;&nbsp; 
              <input type="radio" name="notifypm" value="0" {NOTIFY_PM_NO}>
              <span class="largetext">{L_NO}</span></td>
          </tr>
          <tr> 
            <td class="row1"><span class="largetext"><b>{L_POPUP_ON_PRIVMSG}:</b></span><br>
              <span class="largetext">{L_POPUP_ON_PRIVMSG_EXPLAIN}</span></td>
            <td class="row2"> 
              <input type="radio" name="popup_pm" value="1" {POPUP_PM_YES}>
              <span class="largetext">{L_YES}</span>&nbsp;&nbsp; 
              <input type="radio" name="popup_pm" value="0" {POPUP_PM_NO}>
              <span class="largetext">{L_NO}</span></td>
          </tr>
          <tr> 
            <td class="row1"><b><span class="largetext">{L_ALWAYS_ADD_SIGNATURE}:</span></b></td>
            <td class="row2"> 
              <input type="radio" name="attachsig" value="1" {ALWAYS_ADD_SIGNATURE_YES}>
              <span class="largetext">{L_YES}</span>&nbsp;&nbsp; 
              <input type="radio" name="attachsig" value="0" {ALWAYS_ADD_SIGNATURE_NO}>
              <span class="largetext">{L_NO}</span></td>
          </tr>
          <tr> 
            <td class="row1"><b><span class="largetext">{L_ALWAYS_ALLOW_BBCODE}:</span></b></td>
            <td class="row2"> 
              <input type="radio" name="allowbbcode" value="1" {ALWAYS_ALLOW_BBCODE_YES}>
              <span class="largetext">{L_YES}</span>&nbsp;&nbsp; 
              <input type="radio" name="allowbbcode" value="0" {ALWAYS_ALLOW_BBCODE_NO}>
              <span class="largetext">{L_NO}</span></td>
          </tr>
          <tr> 
            <td class="row1"><b><span class="largetext">{L_ALWAYS_ALLOW_HTML}:</span></b></td>
            <td class="row2"> 
              <input type="radio" name="allowhtml" value="1" {ALWAYS_ALLOW_HTML_YES}>
              <span class="largetext">{L_YES}</span>&nbsp;&nbsp; 
              <input type="radio" name="allowhtml" value="0" {ALWAYS_ALLOW_HTML_NO}>
              <span class="largetext">{L_NO}</span></td>
          </tr>
          <tr> 
            <td class="row1"><b><span class="largetext">{L_ALWAYS_ALLOW_SMILIES}:</span></b></td>
            <td class="row2"> 
              <input type="radio" name="allowsmilies" value="1" {ALWAYS_ALLOW_SMILIES_YES}>
              <span class="largetext">{L_YES}</span>&nbsp;&nbsp; 
              <input type="radio" name="allowsmilies" value="0" {ALWAYS_ALLOW_SMILIES_NO}>
              <span class="largetext">{L_NO}</span></td>
          </tr>
          <tr> 
            <td class="row1"><b><span class="largetext">{L_BOARD_LANGUAGE}:</span></b></td>
            <td class="row2"><span class="largetext">{LANGUAGE_SELECT}</span></td>
          </tr>
          <tr> 
            <td class="row1"><span class="largetext">{L_BOARD_STYLE}:</span></td>
            <td class="row2"><span class="largetext">{STYLE_SELECT}</span></td>
          </tr>
          <tr> 
            <td class="row1"><span class="largetext"><b>{L_TIMEZONE}:</b></span></td>
            <td class="row2"><span class="largetext">{TIMEZONE_SELECT}</span></td>
          </tr>
          <tr> 
            <td class="row1"><span class="largetext"><b>{L_DATE_FORMAT}:</b></span><br>
              <span class="largetext">{L_DATE_FORMAT_EXPLAIN}</span></td>
            <td class="row2"> 
              <input type="text" name="dateformat" value="{DATE_FORMAT}" maxlength="16" class="post">
            </td>
          </tr>
          <!-- BEGIN switch_avatar_block -->
          <tr> 
            <td height="34" class="catrow" colspan="2" valign="middle" align="center">{L_AVATAR_PANEL}</td>
          </tr>
          <tr> 
            <td class="row1" colspan="2">
              <table width="70%" cellspacing="2" cellpadding="0" border="0" align="center">
                <tr> 
                  <td width="65%"><span class="smalltext">{L_AVATAR_EXPLAIN}</span></td>
                  <td align="center"><span class="smalltext">{L_CURRENT_IMAGE}</span><br>
                    {AVATAR}<br>
                    <input type="checkbox" name="avatardel">
                    &nbsp;<span class="smalltext">{L_DELETE_AVATAR}</span></td>
                </tr>
              </table>
            </td>
          </tr>
          <!-- BEGIN switch_avatar_local_upload -->
          <tr> 
            <td class="row1"><span class="mediumtext">{L_UPLOAD_AVATAR_FILE}:</span></td>
            <td class="row2">
              <input type="hidden" name="MAX_FILE_SIZE" value="{AVATAR_SIZE}">
              <input type="file" name="avatar" class="post" style="width:200px">
            </td>
          </tr>
          <!-- END switch_avatar_local_upload -->
          <!-- BEGIN switch_avatar_remote_upload -->
          <tr> 
            <td class="row1"><span class="mediumtext">{L_UPLOAD_AVATAR_URL}:</span><br>
              <span class="smalltext">{L_UPLOAD_AVATAR_URL_EXPLAIN}</span></td>
            <td class="row2">
              <input type="text" name="avatarurl" size="40" class="post" style="width:200px">
            </td>
          </tr>
          <!-- END switch_avatar_remote_upload -->
          <!-- BEGIN switch_avatar_remote_link -->
          <tr> 
            <td class="row1"><span class="mediumtext">{L_LINK_REMOTE_AVATAR}:</span><br>
              <span class="smalltext">{L_LINK_REMOTE_AVATAR_EXPLAIN}</span></td>
            <td class="row2">
              <input type="text" name="avatarremoteurl" size="40" class="post" style="width:200px">
            </td>
          </tr>
          <!-- END switch_avatar_remote_link -->
          <!-- BEGIN switch_avatar_local_gallery -->
          <tr> 
            <td class="row1"><span class="mediumtext">{L_AVATAR_GALLERY}:</span></td>
            <td class="row2">
              <input type="submit" name="avatargallery" value="{L_SHOW_GALLERY}">
            </td>
          </tr>
          <!-- END switch_avatar_local_gallery -->
          <!-- END switch_avatar_block -->
          <tr> 
            <td height="34" class="catrow" colspan="2" align="center">{S_HIDDEN_FIELDS} 
              <input type="submit" name="submit" value="{L_SUBMIT}">
              &nbsp;&nbsp; 
              <input type="reset" value="{L_RESET}" name="reset">
            </td>
          </tr>
        </table>
  </td>
  </tr>
  </table>
</form>
