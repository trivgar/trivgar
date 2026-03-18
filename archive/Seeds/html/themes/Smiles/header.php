<? ?>
<table width="800" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td background="themes/Smiles/images/page_back.gif">
      <table width="800" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><img src="themes/Smiles/images/top_1_a.gif" width="800" height="42"></td>
        </tr>
      </table>
	  <table width="800" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><img src="themes/Smiles/images/top_2_a.gif" width="492" height="54"></td>
		  <td><img src="themes/Smiles/images/top_2_b.gif" width="308" height="54"></td>
        </tr>
      </table>
	  <table width="800" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><img src="themes/Smiles/images/top_3_a.gif"></td>
		  <td width="90"><a href="index.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('home','','themes/Smiles/images/top_3_b_2.gif',1)"><img name="home" border="0" src="themes/Smiles/images/top_3_b_1.gif" width="90" height="30"></a></td>
		  <td width="90"><a href="modules.php?name=Your_Account" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('user','','themes/Smiles/images/top_3_c_2.gif',1)"><img name="user" border="0" src="themes/Smiles/images/top_3_c_1.gif" width="90" height="30"></a></td>
		  <td width="91"><a href="modules.php?name=Forum" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('forum','','themes/Smiles/images/top_3_d_2.gif',1)"><img name="forum" border="0" src="themes/Smiles/images/top_3_d_1.gif" width="91" height="30"></a></td>
		  <td width="89"><a href="modules.php?name=Topics" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('topics','','themes/Smiles/images/top_3_e_2.gif',1)"><img name="topics" border="0" src="themes/Smiles/images/top_3_e_1.gif" width="89" height="30"></a></td>
		  <td width="90"><a href="modules.php?name=Search" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('search','','themes/Smiles/images/top_3_f_2.gif',1)"><img name="search" border="0" src="themes/Smiles/images/top_3_f_1.gif" width="90" height="30"></a></td>
		  <td width="93"><a href="modules.php?name=Web_Links" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('links','','themes/Smiles/images/top_3_g_2.gif',1)"><img name="links" border="0" src="themes/Smiles/images/top_3_g_1.gif" width="93" height="30"></a></td>
		  <td width="215"><img src="themes/Smiles/images/top_3_h_1.gif" width="215" height="30"></td>
        </tr>
      </table>
	  <div align="center" class="bold">
	  <? echo ("$theuser"); ?>
	  </div>
	  <table width="770" border="0" cellspacing="0" cellpadding="0" align="center">
	  	<tr>
			<td valign="top" width="150"><? blocks(left); ?></td>
			<td valign="top">
<?
if ($banners == 1) {
	echo ("<div align=\"center\">");
	include("banners.php");
	echo ("</div>");
}
?>