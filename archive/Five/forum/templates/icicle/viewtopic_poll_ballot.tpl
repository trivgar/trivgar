		
            <table cellspacing="1" cellpadding="7" border="0" align="center">
              <tr><form method="POST" action="{S_POLL_ACTION}">
						<td align="center"height="34" class="catrow"><span class="catrowtext"><b>{POLL_QUESTION}</b></span></td>
					</tr>
					<tr>
						<td align="center" class="row1"><table cellspacing="0" cellpadding="2" border="0">
							<!-- BEGIN poll_option -->
							<tr>
								<td><input type="radio" name="vote_id" value="{poll_option.POLL_OPTION_ID}">&nbsp;</td>
								<td><span class="smalltext">{poll_option.POLL_OPTION_CAPTION}</span></td>
							</tr>
							<!-- END poll_option -->
						</table></td>
					</tr>
					<tr>
						<td align="center" class="row2">
			<input type="submit" name="submit" value="{L_SUBMIT_VOTE}">
		  </td>
					</tr>
					<tr>
						
		  <td align="center" class="row1"><span class="smalltext"><b><a href="{U_VIEW_RESULTS}" class="smalllink">{L_VIEW_RESULTS}</a></b></span></td>
					</tr>
				</table>

      {S_HIDDEN_FIELDS} 
    </form><br>