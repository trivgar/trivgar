
 <table cellpadding="0" cellspacing="0" border="0" width="98%" align="center">
  <tr> 
    <td class="tableborder">
      <table width="100%" cellpadding="7" cellspacing="1" border="0">
        <tr align="center"> 
          <td width="35%"height="35" class="toprow"><spanheight="35" class="toprow">&nbsp;{L_USERNAME}&nbsp;</span></td>
	      <td width="25%"height="35" class="toprow"><spanheight="35" class="toprow">&nbsp;{L_LAST_UPDATE}&nbsp;</span></td>
	      <td width="40%"height="35" class="toprow"><spanheight="35" class="toprow">&nbsp;{L_FORUM_LOCATION}&nbsp;</span></td>
  </tr>
  <tr> 
	      <td height="34" class="catrow" colspan="3"><span class="catrowtext"><b>{TOTAL_REGISTERED_USERS_ONLINE}</b></span></td>
  </tr>
  <!-- BEGIN reg_user_row -->
  <tr> 
	<td width="35%" class="row1">&nbsp;<span class="mediumtext"><a href="{reg_user_row.U_USER_PROFILE}" class="mediumlink">{reg_user_row.USERNAME}</a></span>&nbsp;</td>
	<td width="25%" align="center" nowrap class="row2">&nbsp;<span class="mediumtext">{reg_user_row.LASTUPDATE}</span>&nbsp;</td>
	<td width="40%" class="row1">&nbsp;<span class="mediumtext"><a href="{reg_user_row.U_FORUM_LOCATION}" class="mediumlink">{reg_user_row.FORUM_LOCATION}</a></span>&nbsp;</td>
  </tr>
  <!-- END reg_user_row -->

  <tr> 
	      <td height="34" class="catrow" colspan="3"><spanheight="34" class="catrow"><b>{TOTAL_GUEST_USERS_ONLINE}</b></span></td>
  </tr>
  <!-- BEGIN guest_user_row -->
  <tr> 
	<td width="35%" class="row1">&nbsp;<span class="mediumtext">{guest_user_row.USERNAME}</span>&nbsp;</td>
	<td width="25%" align="center" nowrap class="row2">&nbsp;<span class="mediumtext">{guest_user_row.LASTUPDATE}</span>&nbsp;</td>
	<td width="40%" class="row1">&nbsp;<span class="mediumtext"><a href="{guest_user_row.U_FORUM_LOCATION}" class="mediumlink">{guest_user_row.FORUM_LOCATION}</a></span>&nbsp;</td>
  </tr>
  <!-- END guest_user_row -->
</table>
</td>
</tr>
</table>
<table width="98%" cellspacing="2" border="0" align="center" cellpadding="2">
  <tr> 
	<td align="left" valign="top"><span class="smalltext">{L_ONLINE_EXPLAIN}</span></td>
	<td align="right" valign="top"><span class="smalltext">{S_TIMEZONE}</span></td>
  </tr>
</table>

<table width="98%" cellspacing="2" border="0" align="center">
  <tr> 
	<td valign="top" align="right">{JUMPBOX}</td>
  </tr>
</table>

