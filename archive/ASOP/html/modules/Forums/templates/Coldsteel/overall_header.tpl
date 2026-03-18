<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html dir="{S_CONTENT_DIRECTION}">
<head>
<meta http-equiv="Content-Type" content="text/html; charset={S_CONTENT_ENCODING}">
<meta http-equiv="Content-Style-Type" content="text/css">
{META}
{NAV_LINKS}
<title>{SITENAME} :: {PAGE_TITLE}</title>
<body topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0"bgcolor="{T_BODY_BGCOLOR}" text="{T_BODY_TEXT}" link="{T_BODY_LINK}" vlink="{T_BODY_VLINK}">
<!-- link rel="stylesheet" href="templates/Coldsteel/{T_HEAD_STYLESHEET}" type="text/css" -->
<style type="text/css">
<!--
/*
  The original Coldsteel Theme for phpBB version 2+
  Created by: Bonedance
  http://www.cosmicdistortion.com

  NOTE: These CSS definitions are stored within the main page body so that you can use the phpBB2
  theme administration centre. When you have finalised your style you could cut the final CSS code
  and place it in an external file, deleting this section to save bandwidth.
*/

/* General page style. The scroll bar colours only visible in IE5.5+ */
body { 
	background-color: {T_BODY_BGCOLOR};
	scrollbar-face-color: {T_TR_COLOR2};
	scrollbar-highlight-color: {T_TD_COLOR2};
	scrollbar-shadow-color: {T_TR_COLOR2};
	scrollbar-3dlight-color: {T_TR_COLOR3};
	scrollbar-arrow-color:  {T_BODY_LINK};
	scrollbar-track-color: {T_TR_COLOR1};
	scrollbar-darkshadow-color: {T_TH_COLOR1};
}

/* General font families for common tags */
font,th,td,p { font-family: {T_FONTFACE1} }
a:link,a:active,a:visited { color : {T_BODY_LINK}; }
a:hover		{ text-decoration: none; color : #C0C0C0; }
hr	{ height: 0px; border: solid #C0C0C0 0px; border-top-width: 1px;}

/* This is the border line & background colour round the entire page */
.bodyline	{ background-color: {T_BODY_BGCOLOR}; border: 1px #000000 solid; }

/* This is the outline round the main forum tables */
.forumline	{ background-color: #999999; border: 1px {T_TH_COLOR2} solid; }

/* Main table cell colours and backgrounds */
td.row1	{ background-color: {T_TR_COLOR1}; }
td.row2	{ background-color: {T_TR_COLOR2}; }
td.row3	{ background-color: {T_TR_COLOR3}; }

/*
  This is for the table cell above the Topics, Post & Last posts on the index.php page
  By default this is the fading out gradiated silver background.
  However, you could replace this with a bitmap specific for each forum
*/
td.rowpic {
		background-color: {T_TD_COLOR2};
		background-image: url(templates/Coldsteel/images/{T_TH_CLASS3});
		background-repeat: repeat-y;
}

/* Header cells - the blue and silver gradient backgrounds */
th	{
	color: {T_BODY_LINK}; font-size: {T_FONTSIZE2}px; font-weight : bold; 
	background-color: {T_BODY_BGCOLOR}; height: 25px;
	background-image: url(templates/Coldsteel/images/{T_TH_CLASS2});
}

td.cat,td.catHead,td.catSides,td.catLeft,td.catRight,td.catBottom {
			background-image: url(templates/Coldsteel/images/{T_TH_CLASS1});
			background-color:{T_TR_COLOR3}; border: {T_TH_COLOR3}; border-style: solid; height: 28px;
}

/*
  Setting additional nice inner borders for the main table cells.
  The names indicate which sides the border will be on.
  Don't worry if you don't understand this, just ignore it :-)
*/
td.cat,td.catHead,td.catBottom {
	height: 28px;
	border-width: 0px 0px 0px 0px;
}
th.thHead,th.thSides,th.thTop,th.thLeft,th.thRight,th.thBottom,th.thCornerL,th.thCornerR {
	font-weight: bold; border: {T_TD_COLOR2}; border-style: solid; height: 25px;
}
td.row3Right,td.spaceRow {
	background-color: {T_TR_COLOR1}; border: #000000; border-style: solid;
}

th.thHead,td.catHead { font-size: {T_FONTSIZE3}px; border-width: 0px 0px 0px 0px; }
th.thSides,td.catSides,td.spaceRow	 { border-width: 0px 0px 0px 0px; }
th.thRight,td.catRight,td.row3Right	 { border-width: 0px 0px 0px 0px; }
th.thLeft,td.catLeft	  { border-width: 0px 0px 0px 0px; }
th.thBottom,td.catBottom  { border-width: 0px 0px 0px 0px; }
th.thTop	 { border-width: 0px 0px 0px 0px; }
th.thCornerL { border-width: 0px 0px 0px 0px; }
th.thCornerR { border-width: 0px 0px 0px 0px; }

/* The largest text used in the index page title and toptic title etc. */
.maintitle	{
	font-weight: bold; font-size: 17px; font-family: "{T_FONTFACE2}",{T_FONTFACE1};
	text-decoration: none; line-height : 120%; color : {T_BODY_TEXT};
}

/* General text */
.gen { font-size : {T_FONTSIZE3}px; }
.genmed { font-size : {T_FONTSIZE2}px; }
.gensmall { font-size : {T_FONTSIZE1}px; }
.gen,.genmed,.gensmall { color : {T_BODY_TEXT}; }
a.gen,a.genmed,a.gensmall { color: {T_BODY_LINK}; text-decoration: none; }
a.gen:hover,a.genmed:hover,a.gensmall:hover	{ color: {T_BODY_HLINK}; text-decoration: none; }

/* The register, login, search etc links at the top of the page */
.mainmenu		{ font-size : {T_FONTSIZE2}px; color : {T_BODY_TEXT} }
a.mainmenu		{ text-decoration: none; color : {T_BODY_LINK};  }
a.mainmenu:hover{ text-decoration: none; color : {T_BODY_HLINK}; }

/* Forum category titles */
.cattitle		{ font-weight: bold; font-size: {T_FONTSIZE3}px ; letter-spacing: 1px; color : {T_BODY_LINK}}
a.cattitle		{ text-decoration: none; color : {T_BODY_LINK}; }
a.cattitle:hover{ text-decoration: none; }

/* Forum title: Text and link to the forums used in: index.php */
.forumlink		{ font-weight: bold; font-size: {T_FONTSIZE3}px; color : {T_BODY_LINK}; }
a.forumlink 	{ text-decoration: none; color : {T_BODY_LINK}; }
a.forumlink:hover{ text-decoration: none; color : {T_BODY_HLINK}; }

/* Used for the navigation text, (Page 1,2,3 etc) and the navigation bar when in a forum */
.nav			{ font-weight: bold; font-size: {T_FONTSIZE2}px; color : {T_BODY_TEXT};}
a.nav			{ text-decoration: none; color : {T_BODY_LINK}; }
a.nav:hover		{ text-decoration: none; }

/* titles for the topics: could specify viewed link colour too */
.topictitle,h1,h2	{ font-weight: bold; font-size: {T_FONTSIZE2}px; color : {T_BODY_TEXT}; }
a.topictitle:link   { text-decoration: none; color : {T_BODY_LINK}; }
a.topictitle:visited { text-decoration: none; color : {T_BODY_VLINK}; }
a.topictitle:hover	{ text-decoration: none; color : {T_BODY_HLINK}; }

/* Name of poster in viewmsg.php and viewtopic.php and other places */
.name			{ font-size : {T_FONTSIZE2}px; color : {T_BODY_TEXT};}

/* Location, number of posts, post date etc */
.postdetails		{ font-size : {T_FONTSIZE1}px; color : {T_BODY_TEXT}; }

/* The content of the posts (body of text) */
.postbody { font-size : {T_FONTSIZE3}px; line-height: 18px}
a.postlink:link	{ text-decoration: none; color : {T_BODY_LINK} }
a.postlink:visited { text-decoration: none; color : {T_BODY_VLINK}; }
a.postlink:hover { text-decoration: none; color : {T_BODY_HLINK}}

/* Quote & Code blocks */
.code { 
	font-family: {T_FONTFACE3}; font-size: {T_FONTSIZE2}px; color: #000000;
	background-color: {T_BODY_BGCOLOR}; border: #000000; border-style: solid;
	border-left-width: 1px; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px
}

.quote {
	font-family: {T_FONTFACE1}; font-size: {T_FONTSIZE2}px; color: #000000; line-height: 125%;
	background-color: {T_BODY_BGCOLOR}; border: #000000; border-style: solid;
	border-left-width: 1px; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px
}

/* Copyright and bottom info */
.copyright		{ font-size: {T_FONTSIZE1}px; font-family: {T_FONTFACE1}; color: {T_FONTCOLOR1}; letter-spacing: -1px;}
a.copyright		{ color: {T_FONTCOLOR1}; text-decoration: none;}
a.copyright:hover { color: {T_BODY_TEXT}; text-decoration: none;}

/* Form elements */
input,textarea, select {
	color : {T_BODY_TEXT};
	font: normal {T_FONTSIZE2}px {T_FONTFACE1};
	border-color : #000000;
}

/* The text input fields background colour */
input.post, textarea.post, select {
	background-color : {T_BODY_BGCOLOR};
        
}

input { text-indent : 2px; }

/* The buttons used for bbCode styling in message post */
input.button {
	background-color : {T_TR_COLOR1};
        background-image: url(templates/Coldsteel/images/{T_TH_CLASS2});
	color : {T_BODY_TEXT};
	font-size: {T_FONTSIZE2}px; font-family: {T_FONTFACE1};
}

/* The main submit button option */
input.mainoption {
	background-color : {T_TR_COLOR1};
        background-image: url(templates/Coldsteel/images/{T_TH_CLASS2});
	font-weight : bold;
}

/* None-bold submit button */
input.liteoption {
	background-color : {T_TR_COLOR1};
        background-image: url(templates/Coldsteel/images/{T_TH_CLASS2});
	font-weight : normal;
}

/* This is the line in the posting page which shows the rollover
  help line. This is actually a text box, but if set to be the same
  colour as the background no one will know ;)
*/
.helpline { background-color: {T_TR_COLOR2}; border-style: none; }

/* Import the fancy styles for IE only (NS4.x doesn't use the @import function) */
@import url("templates/Coldsteel/formIE.css"); 
-->
</style>
<!-- BEGIN switch_enable_pm_popup -->
<script language="Javascript" type="text/javascript">
<!--
	if ( {PRIVATE_MESSAGE_NEW_FLAG} )
	{
		window.open('{U_PRIVATEMSGS_POPUP}', '_phpbbprivmsg', 'HEIGHT=225,resizable=yes,WIDTH=400');;
	}
//-->
</script>
<!-- END switch_enable_pm_popup -->
</head>
<body bgcolor="{T_BODY_BGCOLOR}" text="{T_BODY_TEXT}" link="{T_BODY_LINK}" vlink="{T_BODY_VLINK}">



<table class="bodyline" width="760" cellspacing="0" cellpadding="0" border="0" align="center"> 
	<tr> 
		<td background="templates/Coldsteel/images/topbg.gif" height="85">
                <a href="{U_INDEX}"><img src="templates/Coldsteel/images/logo.gif" border="0"></a>
		 </td>
		     </tr>
		        </table>







<table width="760" border="0" cellspacing="0" cellpadding="0" align="center" class="forumline">

        <tr>
        <td background="templates/Coldsteel/images/catbg2.gif" height="28" align="center" valign="middle" nowrap="nowrap">
        <span class="mainmenu">:: <a href="{U_INDEX}" class="mainmenu">Home </a>
        <span class="mainmenu">:: <a href="{U_FAQ}" class="mainmenu">{L_FAQ} </a></span><span class="mainmenu">:: <a href="{U_SEARCH}" class="mainmenu">{L_SEARCH} </a>:: <a href="{U_MEMBERLIST}" class="mainmenu">{L_MEMBERLIST} </a>:: <a href="{U_GROUP_CP}" class="mainmenu">{L_USERGROUPS} </a>
						<!-- BEGIN switch_user_logged_out -->
						:: <a href="{U_REGISTER}" class="mainmenu">{L_REGISTER} </a></span>
						<!-- END switch_user_logged_out -->
        <span class="mainmenu">:: <a href="{U_PROFILE}" class="mainmenu">{L_PROFILE} </a>:: <a href="{U_PRIVATEMSGS}" class="mainmenu">{PRIVATE_MESSAGE_INFO} </a>:: <a href="{U_LOGIN_LOGOUT}" class="mainmenu">{L_LOGIN_LOGOUT}</a> ::</span>
        </td>
        </tr>
      </table>



<table width="760" cellspacing="0" cellpadding="5" border="0" align="center"> 
	<tr> 
		<td class="bodyline">

		
