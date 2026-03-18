
 <table cellpadding="0" cellspacing="0" border="0" width="98%" align="center">
  <tr> 
    <td class="tableborder">
<table width="100%" cellpadding="7" cellspacing="1" border="0">
  <!-- BEGIN switch_groups_joined -->
  <tr> 
	<td colspan="2" align="center"height="34" class="catrow"><span class="catrowtext">{L_GROUP_MEMBERSHIP_DETAILS}</span></td>
  </tr>
  <!-- BEGIN switch_groups_member -->
  <tr> 
	<td class="row1"><span class="mediumtext">{L_YOU_BELONG_GROUPS}</span></td>
	<td class="row2" align="right"> 
	  <table width="90%" cellspacing="0" cellpadding="0" border="0">
		<tr><form method="get" action="{S_USERGROUP_ACTION}">
			<td width="40%"><span class="smalltext">{GROUP_MEMBER_SELECT}</span></td>
			<td align="center" width="30%"> 
			  <input type="submit" value="{L_VIEW_INFORMATION}">{S_HIDDEN_FIELDS}
			</td>
		</form></tr>
	  </table>
	</td>
  </tr>
  <!-- END switch_groups_member -->
  <!-- BEGIN switch_groups_pending -->
  <tr> 
	<td class="row1"><span class="mediumtext">{L_PENDING_GROUPS}</span></td>
	<td class="row2" align="right"> 
	  <table width="90%" cellspacing="0" cellpadding="0" border="0">
		<tr><form method="get" action="{S_USERGROUP_ACTION}">
			<td width="40%"><span class="smalltext">{GROUP_PENDING_SELECT}</span></td>
			<td align="center" width="30%"> 
			  <input type="submit" value="{L_VIEW_INFORMATION}">{S_HIDDEN_FIELDS}
			</td>
		</form></tr>
	  </table>
	</td>
  </tr>
  <!-- END switch_groups_pending -->
  <!-- END switch_groups_joined -->
  <!-- BEGIN switch_groups_remaining -->
  <tr> 
	<td colspan="2" align="center"height="34" class="catrow"><span class="catrowtext">{L_JOIN_A_GROUP}</span></td>
  </tr>
  <tr> 
	<td class="row1"><span class="mediumtext">{L_SELECT_A_GROUP}</span></td>
	<td class="row2" align="right"> 
	  <table width="90%" cellspacing="0" cellpadding="0" border="0">
		<tr><form method="get" action="{S_USERGROUP_ACTION}">
			<td width="40%"><span class="smalltext">{GROUP_LIST_SELECT}</span></td>
			<td align="center" width="30%"> 
			  <input type="submit" value="{L_VIEW_INFORMATION}">{S_HIDDEN_FIELDS}
			</td>
		</form></tr>
	  </table>
	</td>
  </tr>
  <!-- END switch_groups_remaining -->
</table>
</td>
</tr>
</table>

<table width="98%" cellspacing="2" border="0" align="center" cellpadding="2">
  <tr> 
	<td align="right" valign="top"><span class="smalltext">{S_TIMEZONE}</span></td>
  </tr>
</table>

<br clear="all">

<table width="98%" cellspacing="2" border="0" align="center">
  <tr> 
	<td valign="top" align="right">{JUMPBOX}</td>
  </tr>
</table>
