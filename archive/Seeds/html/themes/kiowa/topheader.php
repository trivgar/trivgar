<?
echo "<table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\"><tr><td widht=\"15%\" align=\"left\">\n"
    ."<font size=\"2\">\n";
    if ($username == "Anonymous") {
	echo "&nbsp;&nbsp;<b><font color=\"#363636\">"._RCREATEACCOUNT."</font></b>\n";
    } else {
	echo "&nbsp;&nbsp;"._HELLO." $username!";
    }
     echo "</td><td width=\"70%\" align=\"center\"><font size=\"2\">\n";
     echo "&nbsp;<strong><big>&middot;</big></strong>&nbsp;<a href=\"http://www.phpnuke.org\">PHP Nuke</a>&nbsp;<strong><big>&middot;</big></strong>&nbsp;"
	."<a href=\"http://www.netz-id.de\">Netz-ID</a>&nbsp;<strong><big>&middot;</big></strong>&nbsp;"
	."<a href=\"http://www.schutzfehler.de\">Schutzfehler.de</a>&nbsp;<strong><big>&middot;</big></strong>&nbsp;"
	."<a href=\"http://www.smdesign.de\">SM WebDesign</a>&nbsp;<strong><big>&middot;</big></strong>&nbsp;";


     echo "</font></td><td widht=\"15%\" align=\"center\">\n"
  ."<script type=\"text/javascript\">\n\n"
        ."<!--   // Array ofmonth Names\n"
        ."var monthNames = new Array( \"".Januar."\",\"".Februar."\",\"".März."\",\"".April."\",\"".May."\",\"".Juni."\",\"".Juli."\",\"".August."\",\"".September."\",\"".October."\",\"".November."\",\"".Dezember."\");\n"
        ."var now = new Date();\n"
        ."thisYear = now.getYear();\n"
        ."if(thisYear < 1900) {thisYear += 1900}; // corrections if Y2K display problem\n"
        ."document.write(monthNames[now.getMonth()] + \" \" + now.getDate() + \", \" + thisYear);\n"
        ."// -->\n\n"
        ."</script></b></font>"

     ."</td></tr></table>\n";
echo "<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">"
  ."<tr>"
    ."<td width=\"2%\"><img src=\"themes/kiowa/images/left_title.jpg\" width=\"30\" height=\"7\"></td>"
    ."<td width=\"95%\" background=\"themes/kiowa/images/line_title.jpg\"><img src=\"pixel.gif\" width=\"1\" height=\"1\"></td>"
    ."<td width=\"3%\"><img src=\"themes/kiowa/images/right_title.jpg\" width=\"31\" height=\"7\"></td>"
  ."</tr>"
."</table>";

?>

