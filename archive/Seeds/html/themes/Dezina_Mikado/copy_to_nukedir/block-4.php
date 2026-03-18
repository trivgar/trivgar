
<?php
function block_type_4($title,$content,$image,$level,$posted,$morelink) {
global $themename,$topheight,$tabheight,$tab2height,$botheight,$leftwidth,$rightwidth,$tablewidth,$block,$index;
global $boxtable,$boxtitle,$boxbg,$typeuse,$br;
OpenTable_type_4($title,$image,0);
ContentBlock($typeuse,$content,$posted,$morelink);
CloseTable_type_4();
if ($br==1){ echo "<br>\n"; }
}
//
function OpenTable_type_4($title,$image,$tab) {
global $themename,$topheight,$tabheight,$tab2height,$botheight,$leftwidth,$rightwidth,$tablewidth;
global $boxtable,$boxtitle,$boxbg,$block;
echo "
<table width=\"$tablewidth\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\">
<tr><td>
<table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\">
<tr>
<td>
<table width=\"100%\" bgcolor=\"$boxtitle\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\">
<tr>\n";
if ($tab==0){
  if (isset($image)) { echo" <td align=\"left\" ><img src=themes/$themename/blocks/title-$image align=absmiddle></td>\n";  }
  if (isset($title)) { echo" <td align=\"right\"><font class=$block-blocktitle>$title</font></td>\n"; }
}
echo "
</tr>
</table>
</td>
</tr>
<tr>
<td>
<table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\">
<tr>
<td>\n";
}
//
function CloseTable_type_4() {
echo "
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>\n";
}
?>