//UDM v3.1.1
//**DO NOT EDIT THIS *****
if (!exclude) { //********
//************************


///////////////////////////////////////////////////////////////////////////
//
//  ULTIMATE DROPDOWN VERSION 3.1 by Brothercake
//  http://www.brothercake.com/dropdown/ 
// 
//  PostNuke integration by DuNs AKA Denis Villechalane
//  http://www.dunslab.net
//
//  PhpNuke integration by DuNs AKA Denis Villechalane
//  http://www.dunslab.net/nuke56
//
//
//  Link-wrapping routine by Brendan Armstrong
//  http://
//
//  KDE modifications by David Joham
//  http://
//
//  Opera 5 reload/resize routine by Michael Wallner
//  http://www.wallner-software.com/
//
///////////////////////////////////////////////////////////////////////////


// *** POSITIONING AND STYLES *********************************************


var menuALIGN = "left";		// alignment
var absLEFT = 	225;		// absolute left or right position (if not center)
var absTOP = 	77; 		// absolute top position

var staticMENU = false;		// static positioning mode (ie5/6 and ns4 only)

var stretchMENU = false;		// show empty cells
var showBORDERS = false;		// show empty cell borders

var baseHREF = "themes/DunsLab-R/navjs/";
var zORDER = 	1000;		// base z-order of nav structure (not ns4)

var mCOLOR = 	"#BABBDD";	// main nav cell color
var rCOLOR = 	"#EEEEFF";	// main nav cell rollover color
var keepLIT =	true;		// keep rollover color when browsing menu
var bSIZE = 	0;		// main nav border size
var bCOLOR = 	"#222233"	// main nav border color
var aLINK = 	"#222244";	// main nav link color
var aHOVER = 	"#000011";		// main nav link hover-color (dual purpose)
var aDEC = 	"none";		// main nav link decoration
var fFONT = 	"tahoma,verdana,arial";	// main nav font face		
var fSIZE = 	12.5;		// main nav font size (pixels)	
var fWEIGHT = 	"bold"		// main nav font weight
var tINDENT = 	8;		// main nav text indent (if text is left or right aligned)
var vPADDING = 	5;		// main nav vertical cell padding
var vtOFFSET = 	0;		// main nav vertical text offset (+/- pixels from middle)

var vOFFSET = 	0;		// shift the submenus vertically
var hOFFSET = 	1;		// shift the submenus horizontally

var smCOLOR = 	"#BEBFEC";	// submenu cell color
var srCOLOR = 	"#EEEEFF";	// submenu cell rollover color
var sbSIZE = 	2;		// submenu border size
var sbCOLOR = 	"#333344"	// submenu border color
var saLINK = 	"#222244";	// submenu link color
var saHOVER = 	"#000011";		// submenu link hover-color (dual purpose)
var saDEC = 	"none";		// submenu link decoration
var sfFONT = 	"tahoma,verdana,arial";// submenu font face		
var sfSIZE = 	10;		// submenu font size (pixels)	
var sfWEIGHT = 	"bold"	// submenu font weight
var stINDENT = 	3;		// submenu text indent (if text is left or right aligned)
var svPADDING = 1;		// submenu vertical cell padding
var svtOFFSET = 0;		// submenu vertical text offset (+/- pixels from middle)

var shSIZE =	2;		// menu drop shadow size 
var shCOLOR =	"#222266";	// menu drop shadow color
var shOPACITY = 35;		// menu drop shadow opacity (not ie4/ns4/op5)

var keepSubLIT=	false;		// keep submenu rollover color when browsing child menu	
var chvOFFSET = 0;		// shift the child menus vertically 			
var chhOFFSET = 0;		// shift the child menus horizontally 		

var closeTIMER = 330;		// menu closing delay time

var cellCLICK = true;		// links activate on TD click
var aCURSOR = "hand";		// cursor for active links (not ns4 or op5)

var altDISPLAY = "title";	// where to display alt text
var allowRESIZE=false;		// allow resize/reload


//** LINKS ***********************************************************






// add main link item ("url","Link name",width,"text-alignment","_target","alt text",top position,left position,"key trigger")
// add main link item ("url","Link name",width,"text-alignment","target")

addMainItem("index.php","Home",48,"center",""); 


	// define submenu properties (width,"align to edge","text-alignment")

	defineSubmenuProperties(126,"left","left");

	
	// add submenu link items ("url","Link name","target")
	addSubmenuItem("modules.php?op=modload&name=Search&file=index","Search","");
	addSubmenuItem("modules.php?name=Stories_Archive&sa=show_all","All Stories","");
	addSubmenuItem("modules.php?op=modload&name=Topics&file=index","Topics","");
	addSubmenuItem("modules.php?op=modload&name=Submit_News&file=index","Submit news","");
	addSubmenuItem("modules.php?op=modload&name=FAQ&file=index","FAQ","");
	addSubmenuItem("modules.php?op=modload&name=Top","Top 10","");
	addSubmenuItem("modules.php?op=modload&name=Statistics","Statistics","");




addMainItem("modules.php?op=modload&name=Downloads&file=index"," Downloads ",85,"center",""); 

	defineSubmenuProperties(112,"right","left");

	addSubmenuItem("modules.php?name=Downloads&d_op=MostPopular&ratenum=50&ratetype=num","Top 50","");
	addSubmenuItem("modules.php?name=Downloads&d_op=NewDownloads","Last downloads","");
	// addSubmenuItem("modules.php?op=modload&name=Web_Links&file=index","Last links","");
	


// addMainItem("modules.php?op=modload&name=XForum&file=index","Forums",65,"center",""); 

	// defineSubmenuProperties(112,"left","left");

	// addSubmenuItem("modules.php?op=modload&name=XForum&file=forumdisplay&fid=8","DunsLab","");
	// addSubmenuItem("modules.php?op=modload&name=XForum&file=forumdisplay&fid=7","Post-Nuke Block","");
	// addSubmenuItem("modules.php?op=modload&name=XForum&file=forumdisplay&fid=9","Post-Nuke Modules","");
	// addSubmenuItem("modules.php?op=modload&name=XForum&file=indexnav&gid=14","Load Process","");



addMainItem("","Members",70,"center",""); 

	defineSubmenuProperties(112,"right","right");

	addSubmenuItem("modules.php?op=modload&name=Private_Messages","Messaging","");
	addSubmenuItem("modules.php?name=Your_Account","Your account","");
	addSubmenuItem("modules.php?op=modload&name=Members_List&file=index","Members list","");
	addSubmenuItem("modules.php?op=modload&name=Recommend_Us&file=index","Recommend us","");
	




// addMainItem("","More...",58,"center",""); 

	// defineSubmenuProperties(180,"right","right");
	// addSubmenuItem("modules.php?op=modload&name=NqtAdm&file=index","Network Query Tools","");
	// addSubmenuItem("modules.php?op=modload&name=EU-Weather&file=index","European 48H Forecast","");
	// addSubmenuItem("modules.php?op=modload&name=PP-News&file=index&choix=inscription_user","Newsletter Suscribing","");
	// addSubmenuItem("modules.php?op=modload&name=AvantGo&file=index","AvantGo","");


addMainItem("","Partners",80,"center",""); 

	defineSubmenuProperties(110,"right","right");

	addSubmenuItem("http://www.phpnuke.org","PhpNuke","_blank");
	addSubmenuItem("http://cvs.sourceforge.net/cgi-bin/viewcvs.cgi/phpnuke/","C.V.S. PHPNuke","_blank");
	addSubmenuItem("http://sourceforge.net/projects/phpnuke/","SF PhpNuke","_blank");
	addSubmenuItem("http://www.boomtchak.net","BoomTchak","_blank","French reference Website for PHPNuke & PostNuke");
	addSubmenuItem("http://www.divertidos.org","Divertidos","_blank");
	addSubmenuItem("http://www.dunslab.net/nuke56/","Nuked DunsLab","_blank");
	addSubmenuItem("http://www.dunslab.net","DunsLab","_blank");












//**DO NOT EDIT THIS *****
}//***********************
//************************

