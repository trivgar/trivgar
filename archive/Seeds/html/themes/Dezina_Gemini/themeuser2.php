<?

/************************************************************************/
/* Planet-nuke by Roberto Beltrame (r.beltrame@libero.it                */
/* http://www.Refoscoplanet.too.it                                      */
/* Modified by dezina.com - 9th March 2002 for Theme Editor 1.3Beta     */
/* themeuser.php to themeuser2.php - installs Date and Create an Account */
/* Modifica di PHP-NUKE Web Portal System                               */
/* Thanks to Francisco Burzi for idea and work!                         */
/************************************************************************/

global $user,$banners,$cookie,$prefix,$table,$index,$button,$themename,$imgcoluser,$bguser;
    cookiedecode($user);
    $username = $cookie[1];
 if ($username == "") { $username = "Anonymous";  }

echo "<br>\n"

   ."<table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\" align=\"center\" bgcolor=\"#fefefe\">\n"
	."<tr>\n"
	."<td bgcolor=\"#000000\" colspan=\"4\"><IMG src=\"themes/pixel.gif\" width=\"1\" height=1 alt=\"\" border=\"0\" hspace=\"0\"></td>\n"
	."</tr>\n"
	."<tr valign=\"middle\" bgcolor=\"#808080\">\n"
	."<td width=\"15%\" nowrap><font class=\"date\" color=\"#363636\">\n";

   if ($username == "Anonymous") {
	echo "&nbsp;&nbsp;<font class =\"date\"><a href=\"modules.php?name=Your_Account\">Create an account</a></font>\n";
    } else {
	echo "&nbsp;&nbsp;Welcome $username! &nbsp;&nbsp;<a href=\"modules.php?name=Your_Account&op=logout\">logout</a>";
    }
    echo "</font></td>\n"
	."<td align=\"center\" height=\"20\" width=\"60%\"><font class=\"date\">\n"
        ."&nbsp;\n"
        ."</td>\n"
        ."<td align=\"right\" width=\"25%\"><font class=\"date\">\n"
        ."<script type=\"text/javascript\">\n\n"
        ."<!--   // Array ofmonth Names\n"
        ."var monthNames = new Array( \"January\",\"February\",\"March\",\"April\",\"May\",\"June\",\"July\",\"August\",\"September\",\"October\",\"November\",\"December\");\n"
        ."var now = new Date();\n"
        ."thisYear = now.getYear();\n"
        ."if(thisYear < 1900) {thisYear += 1900}; // corrections if Y2K display problem\n"
        ."document.write(monthNames[now.getMonth()] + \" \" + now.getDate() + \", \" + thisYear);\n"
        ."// -->\n\n"
        ."</script></font></td>\n"
        ."<td>&nbsp;</td>\n"
        ."</tr>\n"
        ."</table>\n"




?>

