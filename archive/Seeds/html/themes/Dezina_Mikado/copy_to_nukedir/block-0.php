
<?php
function block_type_0($title,$content,$image,$level,$posted,$morelink) {
global $themename,$topheight,$tabheight,$tab2height,$botheight,$leftwidth,$rightwidth,$tablewidth,$block,$index;
global $boxtable,$boxtitle,$boxbg,$typeuse,$br;
OpenTable_type_0($title,$image,0);
ContentBlock($typeuse,$content,$posted,$morelink);
CloseTable_type_0();
if ($br==1){ echo "<br>\n"; }
}
//
function OpenTable_type_0($title,$image,$tab) {
global $themename,$topheight,$tabheight,$tab2height,$botheight,$leftwidth,$rightwidth,$tablewidth;
global $boxtable,$boxtitle,$boxbg,$block;
echo "
<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"$tablewidth\" align=\"center\">
<tr>
<td valign=\"top\">\n";
}
//
function CloseTable_type_0() {
echo "
</td>
</tr>
</table>\n";
}
?>