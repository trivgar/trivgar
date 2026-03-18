<style type="text/css">
<!--
body,td,th {
	color: ffffff;
}
body {
	background-color: #600000;
}
a:link {
	color: ffffff;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: ffffff;
}
a:hover {
	text-decoration: underline;
	color: ffffff;
}
a:active {
	text-decoration: none;
	color: ffffff;
}
.style2 {color: #FFFFFF}
-->
</style>
<form method='POST'>
  <table border='0' cellpadding='0' cellspacing='0' width='100%' height='110' style='border: 1 outset #D8D0C8' bgcolor='600000'>
    <tr> 
      <td width='25%' height='25' valign='middle' align='left'><span class="style2"><font face='Verdana' size='1'>Post 
        a comment on:</font></span></td>
      <td width='75%' height='25' valign='middle' align='left'><span class="style2"><b><font face='Verdana' size='1'>{subject}</font></b></span></td>
    </tr>
    <tr>
      <td width='25%' height='25' valign='middle' align='left'><span class="style2"><font face='Verdana' size='1'>Name:</font></span></td>
      <td width='75%' height='25' valign='top' align='left'><font face='Verdana' size='1' color='#000000'>
        <input type='text' name='name' size='27' style='font-family: Verdana; font-size: 8pt; color: #000000'>
        </font></td>
    </tr>
    <tr> 
      <td width='25%' height='25' valign='middle' align='left'><span class="style2"><font face="Verdana" size="1">Email:</font></span></td>
      <td width='75%' height='25' valign='top' align='left'><font face='Verdana' size='1' color='#000000'>
        <input type="text" name="email" size='27' style='font-family: Verdana; font-size: 8pt; color: #000000'>
        </font></td>
    </tr>
    <tr> 
      <td width='25%' height='64' valign='top' align='left'><span class="style2"><font face='Verdana' size='1'>Comment:</font></span></td>
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