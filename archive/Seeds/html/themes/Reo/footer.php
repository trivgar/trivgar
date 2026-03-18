<?php



echo "</td>";
 if ($index == 1) {
  echo "<td bgcolor=EEEEEE>&nbsp;&nbsp;</td><td valign=\"top\" bgcolor=EEEEEE>";
  category();
  pollNewest();
  bigstory();
  if($cookie[8]) {
$getblock = mysql_query("select ublock from users where uid='$cookie[0]'");
$title = "".translate("Menu for")." $cookie[1]";
list($ublock) = mysql_fetch_row($getblock);
   themesidebox($title, $ublock);
   }
   oldNews($storynum);
   rightblocks();
}
echo "</tr></table></td></tr></table>";
?>
<?php
echo "<br><table width=760 cellpadding=0 cellspacing=0 align=center border=0 bgcolor=#B8D4EF>";
echo "<tr><td colspan=3 bgcolor=#000000 height=1><img src=themes/reo/images/pix.gif height=1 width=1></td></tr>";
echo "<tr><td bgcolor=#000000 width=1><img src=themes/reo/images/pix.gif height=1 width=1></td><td align=center>";
footmsg();
echo "</td><td bgcolor=#000000 width=1><img src=themes/reo/images/pix.gif height=1 width=1></td></tr>";
echo "<tr><td colspan=3 bgcolor=#000000 height=1><img src=themes/reo/images/pix.gif height=1 width=1></td></tr></table>";
?>
               
