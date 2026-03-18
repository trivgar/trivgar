<form method='POST'>
  <table border='0' cellpadding='0' cellspacing='0' width='100%' height='110' style='border: 1 outset #D8D0C8' bgcolor='#D8D0C8'>
    <tr> 
      <td width='25%' height='25' valign='middle' align='left'><font face='Verdana' size='1' color='#000000'>Post 
        a comment on:</font></td>
      <td width='75%' height='25' valign='middle' align='left'><b><font face='Verdana' size='1' color='#000000'>{subject}</font></b></td>
    </tr>
    <tr>
      <td width='25%' height='25' valign='middle' align='left'><font face='Verdana' size='1' color='#000000'>Name:</font></td>
      <td width='75%' height='25' valign='top' align='left'><font face='Verdana' size='1' color='#000000'>
        <input type='text' name='name' size='27' style='font-family: Verdana; font-size: 8pt; color: #000000'>
        </font></td>
    </tr>
    <tr> 
      <td width='25%' height='25' valign='middle' align='left'><font face="Verdana" size="1" color="#000000">Email:</font></td>
      <td width='75%' height='25' valign='top' align='left'><font face='Verdana' size='1' color='#000000'>
        <input type="text" name="email" size='27' style='font-family: Verdana; font-size: 8pt; color: #000000'>
        </font></td>
    </tr>
    <tr> 
      <td width='25%' height='64' valign='top' align='left'><font face='Verdana' size='1' color='#000000'>Comment:</font></td>
      <td width='75%' height='64' valign='top' align='left'><font face='Verdana' size='1' color='#000000'>
        <textarea rows='4' name='comment' cols='48' style='font-family: Verdana; font-size: 8pt; color: #000000'></textarea>
        </font></td>
    </tr>
    <tr> 
      <td width='100%' height='21' valign='top' align='left' colspan='2'> 
        <p align='center'><font face='Verdana' size='1' color='#000000'> 
          <input type='submit' value='Submit Comment' name='submit' style='font-size: 8pt; font-family: Verdana; color: #000000'>
          <input type="hidden" name="msgid" value="{id}">
          </font>
      </td>
    </tr>
  </table>
</form>