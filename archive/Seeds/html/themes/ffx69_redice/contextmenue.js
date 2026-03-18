/*
###########################################
#             Rechtsklick Menü            #
###########################################
# Ein Script von JanOSch (Jan O. Schmidt) #
#       webmaster@richtigkohle.com        #
#            www.jex-treme.de             #
###########################################
# Grundindee: Eddie Traversa,             #
# http://nirvana.media3.net               #
###########################################

EINBAU:
=======
Im Abschnitt "KONFIGURATION" alle nötigen Einstellungen vornehmen.
Dann die HTML-Tags "</head>" und "<body>" durch dies hier ERSETZEN:
<script language=JavaScript1.2 src="contextmenue.js"></script>
<noscript></head><body></noscript>

Beispiel:
--------------
<html>
<head>
<title>Meine Seite</title>
<script language=JavaScript><!--
// [...]
//--></script>
<style type="text/css"><!--
// [...]
//--></style>
<script language=JavaScript1.2 src="contextmenue.js"></script>
<noscript></head><body></noscript>
<p>Hallo</p>
</body>
</html>
---------------

KONFIGURATION:
==============*/
breite = 125; //Menü-Breite in Pixeln
groesse = 8; //Schriftgröße (ACHTUNG: Angabe in Punkten und nicht "HTML-üblich"!)
font = "verdana"; //Schriftart
fett = "bold"; // Schrift: "bold" = fett, "normal" = nicht fett
kursiv = "normal"; // Schriftstil: "italic" = kursiv, "normal" = normal
hintergrundfarbe = "#FFE7E7"; //Hintergrundfarbe des Menüs, entweder "#rrggbb" oder Farbname wie "Blue"
schriftfarbe = "#994A4A"; //Schriftfarbe im Menü (siehe Hintergrundfarbe!)
linkfarbe = "#994A4A"; //Linkfarbe im Menü (siehe Hintergrundfarbe!)
linkhover = "#FFFFFF"; //Linkfarbe im Menü bei MouseOver (siehe Hintergrundfarbe!)
linkhintergrund = "#E00042"; //Hintergrundfarbe von Links bei MouseOver (siehe Hintergrundfarbe!)
headHintergrund = "#EFA4A3"; //Hintergrundfarbe von Überschriften (siehe Hintergrundfarbe!)
headFarbe = "#FFFFFF"; //Schriftfarbe bei Überschriften (siehe Hintergrundfarbe!)
body = "<body>"; //Das <body>-Tag wird vom Script eingefügt. Evtl. anpassen, z.B. "<body bgcolor=#ffff00>"

//--- RUNTERSCROLLEN! ---//
//======================================//
document.writeln('<style type=text/css><!--');
document.writeln('#contextMenu {position: absolute; visibility: hidden; width: '+breite+'px; background-color: '+hintergrundfarbe+'; layer-background-color: '+hintergrundfarbe+'; border: 2px outset white; color: '+schriftfarbe+'; font-family: '+font+'; font-style: '+kursiv+'; font-size: '+groesse+'pt; padding: 0px;}');
document.writeln('a.menu:link, a.Menu:visited, a.Menu:active {color: '+linkfarbe+'; text-decoration: none; cursor: default;}');
document.writeln('a.menu:hover {color: '+linkhover+'; text-decoration: overline underline; background-color: '+linkhintergrund+'; cursor: default;}');
document.writeln('\/\/\-\-\>\<\/style\>');
var menu; 
function showMenu (evt) { 
	if (document.all) { 
		document.all.contextMenu.style.pixelLeft = event.clientX-5; 
		document.all.contextMenu.style.pixelTop = event.clientY-5; 
		document.all.contextMenu.style.visibility = 'visible'; 
		return false; 
	} else if (document.layers) { 
		if (evt.which == 3) { 
			document.contextMenu.left = evt.x-5;
			document.contextMenu.top = evt.y-5;
			document.contextMenu.onmouseout = function (evt) {this.visibility = 'hide';}
			document.contextMenu.visibility = 'show'; 
			return false; 
		} 
	} 
	return true; 
} 
if (document.all) document.oncontextmenu =showMenu; 
if (document.layers) { 
	document.captureEvents(Event.MOUSEDOWN); 
	document.onmousedown = showMenu; 
} 

document.writeln('</head>'+body);
document.writeln('<div id="contextMenu" onMouseOut="menu=this;this.tid=setTimeout('+"'menu.style.visibility = \\\'hidden\\\'', 20"+');" onMouseOver="clearTimeout(this.tid);"><p width=100% style="margin-bottom:0px;">');
//=========================================//
// Ab hier wird das Menü "gefüllt"
ueberschrift("Fast Navigation");
link("Home", "www.yourdomain.com/index.php");
link("Web-Links", "www.yourdomain.com/modules.php?name=Web_Links");
link("Downloads", "www.yourdomain.com/modules.php?name=Downloads");
link("Account", "www.yourdomain.com/modules.php?name=Your_Account");
link("Submit News", "www.yourdomain.com/modules.php?name=Submit_News");
link("Forum", "www.yourdomain.com/modules.php?name=Forum");
link("Memberlist", "www.yourdomain.com/modules.php?name=Members_List");
link("FAQ", "www.yourdomain.com/modules.php?name=FAQ");
link("Search", "www.yourdomain.com/modules.php?name=Search");
link("Contact", "www.yourdomain.com/modules.php?name=Feedback");//
ueberschrift("All");
link(" Zurück", "javascript:history.back()");
link(" Refresh", "javascript:location.reload()");
//--- So, das war jetzt auch alles :-) ---//
//========================================//

document.writeln('</div>');

function ueberschrift (txt) {
	document.write('<p width=100% style="text-align: center; color: '+headFarbe+'; background-color: '+headHintergrund+'; font-weight: bold; text-decoration: none; font-size: '+(groesse+1)+'pt; text-align: center; font-family: '+font+'; margin-bottom: 0px;">'+txt+'</p>');
}
function text (txt) {
	document.writeln('<br>'+txt);
}
function link (txt, href, target) {
	if (!target) target = "_self";
	if (href.indexOf("javascript:")!=0) href = "http:\/\/"+href;
	document.writeln('<br><a href="'+href+'" target="'+target+'" class=menu>'+txt+'</a>');
}


