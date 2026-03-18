<?php
// ----------------------------------------------------------------------
// Phpnuke Content Management System
// Copyright (C) 2002 by Nukelite.
// http://www.phpnuke.org
// ----------------------------------------------------------------------
// Based on:
// Thatware - http://thatware.org/
// ----------------------------------------------------------------------
// V-BlueBaby 1.0 free theme
// Original Author of file: Brumie - http://vipixel.com
// Purpose of file: Free PHPNuke 5.6 theme
// Developed at VIPixel.com - www.vipixel.com
// Copyright © 2002 by VIPixel All Rights Reserved
// License: GPL/GNU
// ----------------------------------------------------------------------
//
// DISPLAY OF COPYRIGHT NOTICES REQUIRED
// All copyright notices used within the scripts that the scripts generate,
// MUST remain intact. Furthermore, these notices must remain visible.
//
// VIPixel is not liable for any products or services offered by means of the theme.
// You must assume the entire risk of using the theme.
//
// VIPixel
// Art with a digital touch!
//
// www.vipixel.com
// webmaster@vipixel.com
//
// ----------------------------------------------------------------------

$thename = "V-BlueBaby";

$bgcolor1 = "#EEF2F7";
$bgcolor2 = "#C8D4E3";
$bgcolor3 = "#FFFFFF";
$bgcolor4 = "#FFFFFF";
$textcolor1 = "#333333";
$textcolor2 = "#333333";


function OpenTable() {
    global $bgcolor1, $bgcolor2;
?>
<table bgcolor="#f7f9fb" border="0" cellpadding="0" cellspacing="0" width="100%">
  <tr>
   <td><img name="box_r1_c1" src="themes/V-BlueBaby/images/box_r1_c1.gif" width="12" height="13" border="0" alt=""></td> <td width="100%" background="themes/V-BlueBaby/images/box_r1_c2.gif"><img name="box_r1_c2" src="themes/V-BlueBaby/images/spacer.gif" width="1" height="1" border="0" alt=""></td>
   <td><img name="box_r1_c3" src="themes/V-BlueBaby/images/box_r1_c3.gif" width="12" height="13" border="0" alt=""></td>
  </tr>
  <tr>
    <td background="themes/V-BlueBaby/images/box_r2_c1.gif"><img name="box_r2_c1" src="themes/V-BlueBaby/images/spacer.gif" width="1" height="1" border="0" alt=""></td>
    <td valign="top" bgcolor="#FFFFFF">
<?
}

function CloseTable() {
?>
    </td>
    <td background="themes/V-BlueBaby/images/box_r2_c3.gif"><img name="box_r2_c3" src="themes/V-BlueBaby/images/spacer.gif" width="1" height="1" border="0" alt=""></td>
  </tr>
  <tr>
   <td><img name="box_r3_c1" src="themes/V-BlueBaby/images/box_r3_c1.gif" width="12" height="13" border="0" alt=""></td>
    <td background="themes/V-BlueBaby/images/box_r3_c2.gif"><img name="box_r3_c2" src="themes/V-BlueBaby/images/spacer.gif" width="1" height="1" border="0" alt=""></td>
   <td><img name="box_r3_c3" src="themes/V-BlueBaby/images/box_r3_c3.gif" width="12" height="13" border="0" alt=""></td>
  </tr></table><br />
<?
}

function OpenTable2() {
    global $bgcolor1, $bgcolor2;
?>
<table bgcolor="#f7f9fb" border="0" cellpadding="0" cellspacing="0" width="100%">
  <tr>
   <td><img name="box_r1_c1" src="themes/V-BlueBaby/images/box_r1_c1.gif" width="12" height="13" border="0" alt=""></td> <td width="100%" background="themes/V-BlueBaby/images/box_r1_c2.gif"><img name="box_r1_c2" src="themes/V-BlueBaby/images/spacer.gif" width="1" height="1" border="0" alt=""></td>
   <td><img name="box_r1_c3" src="themes/V-BlueBaby/images/box_r1_c3.gif" width="12" height="13" border="0" alt=""></td>
  </tr>
  <tr>
    <td background="themes/V-BlueBaby/images/box_r2_c1.gif"><img name="box_r2_c1" src="themes/V-BlueBaby/images/spacer.gif" width="1" height="1" border="0" alt=""></td>
    <td valign="top" bgcolor="#FFFFFF">
<?
}

function CloseTable2() {
?>
    </td>
    <td background="themes/V-BlueBaby/images/box_r2_c3.gif"><img name="box_r2_c3" src="themes/V-BlueBaby/images/spacer.gif" width="1" height="1" border="0" alt=""></td>
  </tr>
  <tr>
   <td><img name="box_r3_c1" src="themes/V-BlueBaby/images/box_r3_c1.gif" width="12" height="13" border="0" alt=""></td>
    <td background="themes/V-BlueBaby/images/box_r3_c2.gif"><img name="box_r3_c2" src="themes/V-BlueBaby/images/spacer.gif" width="1" height="1" border="0" alt=""></td>
   <td><img name="box_r3_c3" src="themes/V-BlueBaby/images/box_r3_c3.gif" width="12" height="13" border="0" alt=""></td>
  </tr></table><br />
<?
}
function FormatStory($thetext, $notes, $aid, $informant) {
    global $anonymous;
    if ($notes != "") {
        $notes = "<b>"._NOTE."</b> <i>$notes</i>\n";
    } else {
        $notes = "";
    }
    if ("$aid" == "$informant") {
        echo "<font class=\"content\" color=\"#505050\">$thetext<br>$notes</font>\n";
    } else {
        if($informant != "") {
            $boxstuff = "<a href=\"modules.php?name=Your_Account&amp;op=userinfo&amp;uname=$informant\">$informant</a> ";
        } else {
            $boxstuff = "$anonymous ";
        }
        $boxstuff .= "".translate("writes")." <i>\"$thetext\"</i> $notes\n";
        echo "<font class=\"content\" color=\"#505050\">$boxstuff</font>\n";
    }
}
function themeheader() {
    global $slogan, $sitename, $thename, $banners, $user, $thename;

    $email = "webmaster@sitename.com";
        cookiedecode($user);
    $username = $cookie[1];
    if ($username == "") {
        $username = "Anonymous";
    }

// Begin Javascript rollover
?>
<script language="JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}
function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
 var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
   var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
   if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

//-->
</script>
<?
// End Javascript rollover

    echo "</head>\n";
    echo "<body bgcolor=\"#F7F9FB\" text=\"#333333\" leftmargin=\"0\" topmargin=\"0\" marginwidth=\"0\" marginheight=\"0\" onLoad=\"MM_preloadImages('themes/$thename/images/Header_r1_c1_f2.jpg','themes/$thename/images/Header_r1_c2_f2.jpg','themes/$thename/images/Header_r1_c3_f2.jpg','themes/$thename/images/Header_r1_c4_f2.jpg');\">\n\n\n";
    echo "<!----- Copyright © 2001-2002 VIPixel (http://www.vipixel.com - webmaster@vipixel.com) ----->\n";
    echo "<!----- $sitename is using V-BlueBaby, a free theme wth GPL/GNU license, for more information regarding $sitename please contact $email. ----->\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n";
//Begin Header
echo "<table bgcolor=\"#f7f9fb\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n"
  ."<tr>\n"
   ."<td><img src=\"themes/V-BlueBaby/images/spacer.gif\" width=\"8\" height=\"1\" border=\"0\" alt=\"\"></td>\n"
   ."<td><img src=\"themes/V-BlueBaby/images/spacer.gif\" width=\"48\" height=\"1\" border=\"0\" alt=\"\"></td>\n"
   ."<td><img src=\"themes/V-BlueBaby/images/spacer.gif\" width=\"49\" height=\"1\" border=\"0\" alt=\"\"></td>\n"
   ."<td><img src=\"themes/V-BlueBaby/images/spacer.gif\" width=\"62\" height=\"1\" border=\"0\" alt=\"\"></td>\n"
   ."<td><img src=\"themes/V-BlueBaby/images/spacer.gif\" width=\"35\" height=\"1\" border=\"0\" alt=\"\"></td>\n"
   ."<td><img src=\"themes/V-BlueBaby/images/spacer.gif\" width=\"50\" height=\"1\" border=\"0\" alt=\"\"></td>\n"
   ."<td><img src=\"themes/V-BlueBaby/images/spacer.gif\" width=\"66\" height=\"1\" border=\"0\" alt=\"\"></td>\n"
   ."<td><img src=\"themes/V-BlueBaby/images/spacer.gif\" width=\"142\" height=\"1\" border=\"0\" alt=\"\"></td>\n"
   ."<td width=\"100%\"><img src=\"themes/V-BlueBaby/images/spacer.gif\" width=\"4\" height=\"1\" border=\"0\" alt=\"\"></td>\n"
   ."<td><img src=\"themes/V-BlueBaby/images/spacer.gif\" width=\"291\" height=\"1\" border=\"0\" alt=\"\"></td>\n"
   ."<td><img src=\"themes/V-BlueBaby/images/spacer.gif\" width=\"1\" height=\"1\" border=\"0\" alt=\"\"></td>\n"
   ."</tr>\n"
   ."<tr>\n"
   ."<td><img name=\"header_r1_c1\" src=\"themes/V-BlueBaby/images/header_r1_c1.jpg\" width=\"8\" height=\"18\" border=\"0\" alt=\"\"></td>\n"
   ."<td colspan=\"7\" background=\"themes/V-BlueBaby/images/header_r1_c2.jpg\"><img name=\"header_r1_c2\" src=\"themes/V-BlueBaby/images/spacer.gif\" width=\"1\" height=\"1\" border=\"0\" alt=\"\">\n";
echo "<span class=\"tiny\">Welcome to $sitename \n";
echo "<a href=\"user.php\">\n";
echo "$username !";
echo "</a></span>\n"
    ."</td>\n"
    ."<td background=\"themes/V-BlueBaby/images/header_r1_c9.jpg\"><img name=\"header_r1_c9\" src=\"themes/V-BlueBaby/images/spacer.gif\" width=\"1\" height=\"1\" border=\"0\" alt=\"\"></td>\n"
    ."<td rowspan=\"2\"><img name=\"header_r1_c10\" src=\"themes/V-BlueBaby/images/header_r1_c10.jpg\" width=\"291\" height=\"88\" border=\"0\" alt=\"\"></td>\n"
    ."<td><img src=\"themes/V-BlueBaby/images/spacer.gif\" width=\"1\" height=\"18\" border=\"0\" alt=\"\"></td>\n"
    ."</tr>\n"
    ."<tr>\n"
    ."<td><img name=\"header_r2_c1\" src=\"themes/V-BlueBaby/images/header_r2_c1.jpg\" width=\"8\" height=\"70\" border=\"0\" alt=\"\"></td>\n" ."<td colspan=\"7\" background=\"themes/V-BlueBaby/images/header_r2_c2.jpg\"><div align=\"center\"><img name=\"header_r2_c2\" src=\"themes/V-BlueBaby/images/spacer.gif\" width=\"1\" height=\"1\" border=\"0\" alt=\"\">\n";
// Should we display banners?
        if ($banners == 1) {
                include("banners.php");
        }
echo "</div></td>\n"
    ."<td nowrap background=\"themes/V-BlueBaby/images/header_r2_c9.jpg\"><img name=\"header_r2_c9\" src=\"themes/V-BlueBaby/images/spacer.gif\" width=\"1\" height=\"1\" border=\"0\" alt=\"\"></td>\n"
    ."<td><img src=\"themes/V-BlueBaby/images/spacer.gif\" width=\"1\" height=\"70\" border=\"0\" alt=\"\"></td>\n"
    ."</tr>\n"
    ."<tr>\n"
    ."<td><img name=\"header_r3_c1\" src=\"themes/V-BlueBaby/images/header_r3_c1.jpg\" width=\"8\" height=\"32\" border=\"0\" alt=\"\"></td>\n"
    ."<td><a href=\"/\" onMouseOut=\"MM_swapImgRestore();\" onMouseOver=\"MM_swapImage('header_r3_c2','','themes/V-BlueBaby/images/header_r3_c2_f2.jpg',1);\"><img name=\"header_r3_c2\" src=\"themes/V-BlueBaby/images/header_r3_c2.jpg\" width=\"48\" height=\"32\" border=\"0\" alt=\"Back to Front\"></a></td>\n"
    ."<td><a href=\"modules.php?op=modload&name=XForum&file=index\" onMouseOut=\"MM_swapImgRestore();\" onMouseOver=\"MM_swapImage('header_r3_c3','','themes/V-BlueBaby/images/header_r3_c3_f2.jpg',1);\"><img name=\"header_r3_c3\" src=\"themes/V-BlueBaby/images/header_r3_c3.jpg\" width=\"49\" height=\"32\" border=\"0\" alt=\"Talk about?\"></a></td>\n"
    ."<td><a href=\"modules.php?op=modload&name=gallery&file=index\" onMouseOut=\"MM_swapImgRestore();\" onMouseOver=\"MM_swapImage('header_r3_c4','','themes/V-BlueBaby/images/header_r3_c4_f2.jpg',1);\"><img name=\"header_r3_c4\" src=\"themes/V-BlueBaby/images/header_r3_c4.jpg\" width=\"62\" height=\"32\" border=\"0\" alt=\"Online Gallery\"></a></td>\n"
    ."<td><a href=\"modules.php?op=modload&name=FAQ&file=index\" onMouseOut=\"MM_swapImgRestore();\" onMouseOver=\"MM_swapImage('header_r3_c5','','themes/V-BlueBaby/images/header_r3_c5_f2.jpg',1);\"><img name=\"header_r3_c5\" src=\"themes/V-BlueBaby/images/header_r3_c5.jpg\" width=\"35\" height=\"32\" border=\"0\" alt=\"Question?\"></a></td>\n"
    ."<td><a href=\"#\" onMouseOut=\"MM_swapImgRestore();\" onMouseOver=\"MM_swapImage('header_r3_c6','','themes/V-BlueBaby/images/header_r3_c6_f2.jpg',1);\"><img name=\"header_r3_c6\" src=\"themes/V-BlueBaby/images/header_r3_c6.jpg\" width=\"50\" height=\"32\" border=\"0\" alt=\"About Us\"></a></td>\n"
    ."<td><a href=\"#\" onMouseOut=\"MM_swapImgRestore();\" onMouseOver=\"MM_swapImage('header_r3_c7','','themes/V-BlueBaby/images/header_r3_c7_f2.jpg',1);\"><img name=\"header_r3_c7\" src=\"themes/V-BlueBaby/images/header_r3_c7.jpg\" width=\"66\" height=\"32\" border=\"0\" alt=\"Contact Us\"></a></td>\n"
    ."<td height=\"0\" colspan=\"3\" align=\"right\" valign=\"top\" nowrap background=\"themes/V-BlueBaby/images/header_r3_c8.jpg\">\n"
    ."<img src=\"themes/V-BlueBaby/images/spacer.gif\" width=\"1\" height=\"1\">\n"
    ."<div align=\"right\"><img name=\"header_r3_c8\" src=\"themes/V-BlueBaby/images/spacer.gif\" width=\"1\" height=\"1\" border=\"0\" alt=\"\">\n";
echo "<script type=\"text/javascript\">\n"
                ."<!--   // Array ofmonth Names\n"
                ."var monthNames = new Array( \"January\",\"February\",\"March\",\"April\",\"May\",\"June\",\"July\",\"August\",\"September\",\"October\",\"November\",\"December\");\n"
                ."var now = new Date();\n"
                ."thisYear = now.getYear();\n"
                ."if(thisYear < 1900) {thisYear += 1900}; // corrections if Y2K display problem\n"
                ."document.write(monthNames[now.getMonth()] + \" \" + now.getDate() + \", \" + thisYear);\n"
                ."// -->\n"
                ."</script>";

echo "&nbsp;&nbsp;</div></td>\n"
    ."<td><img src=\"themes/V-BlueBaby/images/spacer.gif\" width=\"1\" height=\"32\" border=\"0\" alt=\"\"></td>\n"
    ."</tr>\n"
    ."<tr>\n"
    ."<td colspan=\"10\" background=\"themes/V-BlueBaby/images/header_r4_c1.jpg\"><img name=\"header_r4_c1\" src=\"themes/V-BlueBaby/images/spacer.gif\" width=\"1\" height=\"1\" border=\"0\" alt=\"\"></td>\n"
    ."<td><img src=\"themes/V-BlueBaby/images/spacer.gif\" width=\"1\" height=\"20\" border=\"0\" alt=\"\"></td>\n"
    ."</tr></table>\n";
//end header

echo "<table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\">\n"
     ."<tr valign=\"top\">\n"
     ."<td bgcolor=\"#F7F9FB\"><img src=\"themes/$thename/images/pixel.gif\" width=\"5\" height=\"1\" border=\"0\" alt=\"\"></td>\n"
     ."<td bgcolor=\"#F7F9FB\" width=\"120\" valign=\"top\">\n";
     blocks('left');
echo "<td bgcolor=\"#F7F9FB\"><img src=\"themes/$thename/images/spacer.gif\" width=\"10\" height=\"1\" border=\"0\" alt=\"\"></td>\n"
     ."<td align=\"center\" valign=\"top\" width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" bgcolor=\"#F7F9FB\">\n";
     if ($index == 1) {
     blocks('centre');
        }
}

function themefooter() {
    global $index, $slogan, $thename;
            if ($index == 1) {
echo "</td>\n"
     ."<td bgcolor=\"#F7F9FB\"><img src=\"themes/$thename/images/spacer.gif\" width=\"10\" height=\"1\" border=\"0\" alt=\"\"></td>\n"
     ."<td bgcolor=\"#F7F9FB\" valign=\"top\" width=\"150\">\n";
     blocks('right');
}
echo "</td>\n"
     ."<td bgcolor=\"#F7F9FB\"><img src=\"themes/$thename/images/spacer.gif\" width=5 height=1 border=0 alt=\"\">\n"
     ."<td bgcolor=\"#F7F9FB\"><img src=\"themes/$thename/images/spacer.gif\" width=\"1\" height=\"1\" border=\"0\" alt=\"\"></td>\n"
     ."</td>\n"
     ."</tr>\n"
     ."</table>\n\n\n";
//Begin Footer
echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n"
     ."<tr>\n"
     ."<td><img src=\"themes/V-BlueBaby/images/spacer.gif\" width=\"311\" height=\"1\" border=\"0\" alt=\"\"></td>\n"
     ."<td width=\"100%\"><img src=\"themes/V-BlueBaby/images/spacer.gif\" width=\"132\" height=\"1\" border=\"0\" alt=\"\"></td>\n"
     ."<td><img src=\"themes/V-BlueBaby/images/spacer.gif\" width=\"312\" height=\"1\" border=\"0\" alt=\"\"></td>\n"
     ."<td><img src=\"themes/V-BlueBaby/images/spacer.gif\" width=\"1\" height=\"1\" border=\"0\" alt=\"\"></td>\n"
     ."</tr>\n"
     ."<tr>\n"
     ."<td bgcolor=\"#F7F9FB\"><img name=\"Footer_r1_c1\" src=\"themes/V-BlueBaby/images/spacer.gif\" width=\"1\" height=\"1\" border=\"0\" alt=\"\"></td>\n"
     ."<td align=\"center\"><a href=\"http://www.vipixel.com\" target=\"_blank\"><img name=\"Footer_r1_c2\" src=\"themes/V-BlueBaby/images/Footer_r1_c2.jpg\" width=\"132\" height=\"29\" border=\"0\" alt=\"V-BlueBaby_1.0\"></a></td>\n"
     ."<td bgcolor=\"#F7F9FB\"><img name=\"Footer_r1_c3\" src=\"themes/V-BlueBaby/images/spacer.gif\" width=\"1\" height=\"1\" border=\"0\" alt=\"\"></td>\n"
     ."<td><img src=\"themes/V-BlueBaby/images/spacer.gif\" width=\"1\" height=\"29\" border=\"0\" alt=\"\"></td>\n"
     ."</tr>\n"
     ."<tr>\n"
     ."<td background=\"themes/V-BlueBaby/images/Footer_r2_c1.jpg\"><img name=\"Footer_r2_c1\" src=\"themes/V-BlueBaby/images/spacer.gif\" width=\"1\" height=\"1\" border=\"0\" alt=\"\"></td>\n"
     ."<td align=\"center\" background=\"themes/V-BlueBaby/images/Footer_r2_c1.jpg\"><a href=\"http://www.vipixel.com\" target=\"_blank\"><img name=\"Footer_r2_c2\" src=\"themes/V-BlueBaby/images/Footer_r2_c2.jpg\" width=\"132\" height=\"38\" border=\"0\" alt=\"Designed by VIPIXEL.COM\"></a></td>\n"
     ."<td background=\"themes/V-BlueBaby/images/Footer_r2_c1.jpg\"><img name=\"Footer_r2_c3\" src=\"themes/V-BlueBaby/images/spacer.gif\" width=\"1\" height=\"1\" border=\"0\" alt=\"\"></td>\n"
     ."<td><img src=\"themes/V-BlueBaby/images/spacer.gif\" width=\"1\" height=\"38\" border=\"0\" alt=\"\"></td>\n"
     ."</tr>\n"
     ."<tr>\n"
     ."<td colspan=\"3\" valign=\"top\" background=\"themes/V-BlueBaby/images/Footer_r3_c1.jpg\">\n"
     ."<div align=\"center\">\n"
     ."<img name=\"Footer_r3_c1\" src=\"themes/V-BlueBaby/images/spacer.gif\" width=\"1\" height=\"1\" border=\"0\" alt=\"\">\n";
// Should we display banners?
        if ($banners == 1) {
                include("banners.php");
        }
echo "<br /><br />\n";
echo "<span class=\"slogan\">$slogan &nbsp;&nbsp;</span>\n";
echo "<br />";
        footmsg();
echo "</div></td>\n"
     ."<td><img src=\"themes/V-BlueBaby/images/spacer.gif\" width=\"1\" height=\"14\" border=\"0\" alt=\"\"></td>\n"
     ."</tr>\n"
     ."<tr>\n"
     ."<td background=\"themes/V-BlueBaby/images/Footer_r4_c1.jpg\"><img name=\"Footer_r4_c1\" src=\"themes/V-BlueBaby/images/spacer.gif\" width=\"1\" height=\"1\" border=\"0\" alt=\"\"></td>\n"
     ."<td align=\"center\" background=\"themes/V-BlueBaby/images/Footer_r4_c1.jpg\"><a href=\"http://www.vipixel.com\" target=\"_blank\"><img name=\"Footer_r4_c2\" src=\"themes/V-BlueBaby/images/Footer_r4_c2.jpg\" width=\"132\" height=\"14\" border=\"0\" alt=\"Get Free Themes!\"></a></td>\n"
     ."<td background=\"themes/V-BlueBaby/images/Footer_r4_c1.jpg\"><img name=\"Footer_r4_c3\" src=\"themes/V-BlueBaby/images/spacer.gif\" width=\"1\" height=\"1\" border=\"0\" alt=\"\"></td>\n"
     ."<td><img src=\"themes/V-BlueBaby/images/spacer.gif\" width=\"1\" height=\"14\" border=\"0\" alt=\"\"></td>\n"
     ."</tr></table>\n";
}

function themeindex ($aid, $informant, $time, $title, $counter, $topic, $thetext, $notes, $morelink, $topicname, $topicimage, $topictext) {
    global $anonymous, $tipath, $sid;
        // Build some vars we need
        if ($notes != "") {
                        $notes = "<br><br><b>"._NOTE."</b> <i>$notes</i>\n";
            } else {
                        $notes = "";
    }

    if ("$aid" == "$informant") {
                        $content = "$thetext$notes\n";
            } else {
                        if($informant != "") {
                            $content = "<a href=\"modules.php?name=Your_Account&amp;op=userinfo&amp;uname=$informant\">$informant</a> ";
                        } else {
                    $content = "$anonymous ";
                }
    $content .= ""._WRITES." <i>\"$thetext\"</i>$notes\n";
    }

    $posted = ""._POSTEDBY." ";
    $posted .= get_author($aid);
    $posted .= " "._ON." $time $timezone ($counter "._READS.")";

    //Begin Story Box
echo "<table bgcolor=\"#f7f9fb\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n"
     ."<tr>\n"
     ."<td><img name=\"box_r1_c1\" src=\"themes/V-BlueBaby/images/box_r1_c1.gif\" width=\"12\" height=\"13\" border=\"0\" alt=\"\"></td>\n" ."<td width=\"100%\" background=\"themes/V-BlueBaby/images/box_r1_c2.gif\"><img name=\"box_r1_c2\" src=\"themes/V-BlueBaby/images/spacer.gif\" width=\"1\" height=\"1\" border=\"0\" alt=\"\"></td>\n"
     ."<td><img name=\"box_r1_c3\" src=\"themes/V-BlueBaby/images/box_r1_c3.gif\" width=\"12\" height=\"13\" border=\"0\" alt=\"\"></td>\n"
     ."</tr>\n"
     ."<tr>\n"
     ."<td background=\"themes/V-BlueBaby/images/box_r2_c1.gif\"><img name=\"box_r2_c1\" src=\"themes/V-BlueBaby/images/spacer.gif\" width=\"1\" height=\"1\" border=\"0\" alt=\"\"></td>\n"
     ."<td valign=\"top\" bgcolor=\"#FFFFFF\">\n"
     ."<table width=\"100%\" border=\"0\" cellpadding=\"2\">\n"
     ."<tr>\n"
     ."<td>\n"
     ."<span class=\"storytitle\">$title</span><br>\n"
     ."<span class=\"tiny\">$posted\n"
     ."</td></tr><tr><td>\n";
echo "<div align=\"left\">\n"
     ."<a href=\"modules.php?name=News&amp;new_topic=$topic\"><img src=\"$tipath$topicimage\" border=\"0\" Alt=\"$topictext\" align=\"center\" hspace=\"0\" vspace=\"0\"></a>\n"
     ."<span class=\"storycontent\">$content</span><br /><br />\n"
     ."<span class=\"note\">$preformat[notes]</span></div>\n"
     ."<br /><div align=\"right\"><span class=\"comments\">$morelink</span></div>\n"
     ."</td></tr><tr><td>\n";
//code below from Jai Wilson of http://www.mentalbloc.net
$imgreadmore = "<div align=\"right\"><img align=\"right\" border=\"0\" src=\"themes/$thename/images/readmore.gif\" alt=\"Read the rest of the story...\"></div>";
$imgpreload = ereg_replace(_READMORE, $imgreadmore, $preformat[readmore]);
$imgload = ereg_replace('\(.* bytes more)', '', $imgpreload);
echo "$imgload";
//end of Jai's code

echo "</td>\n"
     ."</tr>\n"
     ."</table>\n"
     ."</td>\n"
     ."<td background=\"themes/V-BlueBaby/images/box_r2_c3.gif\"><img name=\"box_r2_c3\" src=\"themes/V-BlueBaby/images/spacer.gif\" width=\"1\" height=\"1\" border=\"0\" alt=\"\"></td>\n"
     ."</tr>\n"
     ."<tr>\n"
     ."<td><img name=\"box_r3_c1\" src=\"themes/V-BlueBaby/images/box_r3_c1.gif\" width=\"12\" height=\"13\" border=\"0\" alt=\"\"></td>\n"
     ."<td background=\"themes/V-BlueBaby/images/box_r3_c2.gif\"><img name=\"box_r3_c2\" src=\"themes/V-BlueBaby/images/spacer.gif\" width=\"1\" height=\"1\" border=\"0\" alt=\"\"></td>\n"
     ."<td><img name=\"box_r3_c3\" src=\"themes/V-BlueBaby/images/box_r3_c3.gif\" width=\"12\" height=\"13\" border=\"0\" alt=\"\"></td>\n"
     ."</tr></table><br />\n";
}

function themearticle ($aid, $informant, $datetime, $title, $thetext, $topic, $topicname, $topicimage, $topictext) {
        global $admin, $sid;
//Begin Article Box
echo "<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\n"
      ."<tr>\n"
      ."<td><table width=\"100%\" border=\"0\" cellpadding=\"2\" cellspacing=\"2\">\n"
      ."<tr>\n"
      ."<td><span color=\"#000000\"></span></td>\n"
      ."</tr>\n"
      ."</table>\n"
      ."<table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"10\">\n"
      ."<tr>\n"
      ."<td width=\"15%\" valign=\"top\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\n"
      ."<tr>\n"
      ."<td align=\"right\" valign=\"top\"><div align=\"right\">\n"
      ."<a href=modules.php?name=Search&amp;query=&topic=$topic&author=><img src=images/topics/$topicimage border=0 Alt=\"$topictext\" align=\"left\" hspace=\"0\" vspace=\"0\"></a>\n"
      ."</div>\n"
      ."<div align=\"right\"></div>\n"
      ."<div align=\"right\"></div></td>\n"
      ."</tr>\n"
      ."<tr>\n"
      ."<td align=\"right\" valign=\"top\"><div align=\"center\">\n";
echo "<span class=\"tiny\">"._POSTEDBY."\n";
        //Now format our Posted Info
        formatAidHeader($aid);
echo " "._ON." $datetime $timezone</span></div><br />\n"
      ."</div></td>\n"
      ."</tr>\n"
      ."</table>\n"
      ."<div align=\"center\"><span color=\"#000000\">\n";
        if ($admin) {
echo "<font class=content> [ <a href=admin.php?op=EditStory&sid=$sid>"._EDIT."</a> | <a href=admin.php?op=RemoveStory&sid=$sid>"._DELETE."</a> ]";
echo "<br /><br />\n";
        }
echo "</span></div></td>\n"
     ."<td width=\"85%\" valign=\"top\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\n"
     ."<tr>\n"
     ."<td>\n"
     ."<span class=\"storytitle\">$title</span>\n"
     ."</td>\n"
     ."</tr>\n"
     ."<tr>\n"
     ."<td align=\"left\" valign=\"top\">\n";
//Now format our Posted Info
        formatAidHeader($aid);
echo " "._ON." $datetime $timezone</span></div><br />\n";

// Check if the Admin wrote this story
        if ("$aid" != "$informant") {

                // If it is not the admin someone else but who ;-)
                if($informant != "") {
                        $boxstuff = "<font class=\"storycontent\"><a href=\"modules.php?name=Your_Account&amp;op=userinfo&uname=$informant\">$informant</a> ";
                         } else {
                        $boxstuff = "<font class=\"storycontent\">$anonymous ";
                }

echo "$boxstuff"._WRITES.": \"</font> ";
echo "<span class=\"storycontent\">$thetext \"</span><br /><br />\n";

                 } else {

                 // Remove this to show the topic image within the maintext
                 //echo "<a href=modules.php?name=Search&amp;query=&topic=$topic&author=><img src=images/topics/$topicimage border=0 Alt=\"$topictext\" align=\"left\" hspace=\"5\" vspace=\"2\"></a>\n";
echo "<span class=\"storycontent\">$thetext</span><br /><br />\n";
        }
echo "</td>\n"
     ."</tr>\n"
     ."<tr>\n"
     ."<td align=\"left\" valign=\"top\">&nbsp;</td>\n"
     ."</tr>\n"
     ."</table></td>\n"
     ."</tr>\n"
     ."</table>\n"
     ."</td>\n"
     ."</tr>\n"
     ."</table>\n";
}

function themesidebox($title, $content) {
        global $thename;

echo "<table bgcolor=\"#f7f9fb\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"155\">\n";
// Check if we have a blocktitle
        if (!empty($title)) {
echo "<tr>\n"
     ."<td><img name=\"box_r1_c1\" src=\"themes/V-BlueBaby/images/box_r1_c1.gif\" width=\"12\" height=\"13\" border=\"0\" alt=\"\"></td>\n" ."<td width=\"100%\" background=\"themes/V-BlueBaby/images/box_r1_c2.gif\"><img name=\"box_r1_c2\" src=\"themes/V-BlueBaby/images/spacer.gif\" width=\"1\" height=\"1\" border=\"0\" alt=\"\"></td>\n"
     ."<td><img name=\"box_r1_c3\" src=\"themes/V-BlueBaby/images/box_r1_c3.gif\" width=\"12\" height=\"13\" border=\"0\" alt=\"\"></td>\n"
     ."</tr>\n"
     ."<tr>\n"
     ."<td background=\"themes/V-BlueBaby/images/box_r2_c1.gif\"><img name=\"box_r2_c1\" src=\"themes/V-BlueBaby/images/spacer.gif\" width=\"1\" height=\"1\" border=\"0\" alt=\"\"></td>\n"
     ."<td valign=\"top\" bgcolor=\"#FFFFFF\">\n"
     ."<span class=\"leftcontent\">\n";
// ATTENTION THEMES DEVELOPER IF YOU WANT TO USE THE GRAPHICAL SIDEBLOCK TITLE CODE PLEASE GIVE THIS CREDIT
// Graphics sideblock title by Brumie, Dracos & E.Prodromou based on Rabbitt's code
                        $img_name=explode(" ",$title);
                        $img_nametwo=$img_name[0];
                        if(file_exists("themes/V-BlueBaby/images/blocks/$img_nametwo.gif")) {
                                echo "<IMG SRC=\"themes/V-BlueBaby/images/blocks/$img_nametwo.gif\"><br /><br />";
                        } else {
                                echo "$title<br />\n";
                        }
        }

echo "$content\n"
     ."</span>\n"
     ."</td>\n"
     ."<td background=\"themes/V-BlueBaby/images/box_r2_c3.gif\"><img name=\"box_r2_c3\" src=\"themes/V-BlueBaby/images/spacer.gif\" width=\"1\" height=\"1\" border=\"0\" alt=\"\"></td>\n"
     ."</tr>\n"
     ."<tr>\n"
     ."<td><img name=\"box_r3_c1\" src=\"themes/V-BlueBaby/images/box_r3_c1.gif\" width=\"12\" height=\"13\" border=\"0\" alt=\"\"></td>\n"
     ."<td background=\"themes/V-BlueBaby/images/box_r3_c2.gif\"><img name=\"box_r3_c2\" src=\"themes/V-BlueBaby/images/spacer.gif\" width=\"1\" height=\"1\" border=\"0\" alt=\"\"></td>\n"
     ."<td><img name=\"box_r3_c3\" src=\"themes/V-BlueBaby/images/box_r3_c3.gif\" width=\"12\" height=\"13\" border=\"0\" alt=\"\"></td>\n"
     ."</tr></table><br />\n";
}
?>
