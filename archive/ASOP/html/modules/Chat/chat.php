<?php

##########################################################
#                                                        #
# Conference Room Chat addon para PHPnuke 6.0            #
# Por: José Luis Chafardet G. (Jungl3M4n)                #
# E-Mail: joseluis@dgtalstudios.com                      #
# Website: www.dgtalstudios.com                          #
# Ciudad: Caracas                                        #
# País: Venezuela                                        #
##########################################################
#                                                        #
# PHP-NUKE: Web Portal System: CRoom Addon v1.2          #
# (c) [xIRC] Network                                     #
# webchatx.xirc.org                                      #
#                                                        #
##########################################################
#                                                        #
# I do honestly reccomend you if you will use a chatroom #
# Host it in webchatx.xirc.org-/server webchatx.xirc.org #
# they are a small great network                         #
# but a really nice one, I'm the Server Administrator    #
# Any questions, feel free to send me a memo             #
# /MemoServ SEND Jungl3M4n YOURMESSAGE                   #
# 
#                                                        #
#========================================================#
#                                                        #
# The Addon to get nicknames for general purposes        #
# Created to be used with a Conference Room Chat addon   #
# By José Luis Chafardet - Jungl3M4n in www.phpnuke.org  #
# Forums.                                                #
# Copyright (c) 2003 by José Luis Chafardet G.           #
##########################################################


$module_name = basename(dirname(__FILE__));
require_once("/home/.racer/trivgar/seedsofpeace.com/modules/Chat/GetNickName.php");
$ChatRoom = "#seedsofpeace";
$formname = "Welcome to the chatroom of <b>$sitename</b>";
echo "<center><P>$formname</p>";
online3();
online2();
echo "<table border=0 width=500 align=center><tr><td>\n"
."<applet \n"
."	archive=\"http://webchatx.xirc.org:8000/java/cr.zip\"  \n"
."	codebase=\"http://webchatx.xirc.org:8000/java/\"  \n"
."	code=\"conferenceroom.ConferenceRoom.class\"  \n"
."	name=\"cr\" \n"
."	width=\"500\" \n"
."	height=\"300\"> \n"
."	<param name=\"useslibrary\" value=\"ConferenceRoom Java Client\"> \n"
."	<param name=\"useslibrarycodebase\" value=\"cr.cab\"> \n"
."	<param name=\"useslibraryversion\" value=\"1,9,128,0\"> \n"
."	<param name=\"ssp\" value=\"http://webchatx.xirc.org:8000/params/community.prm\"> \n"
."	<param name=\"channel\" value=\"$ChatRoom\"> \n"
."	<param name=\"nick\" value=\"_$username\"> \n"
."	width=\"545\" \n"
. "	height=\"360>\" \n"
. "<param name=channel value=$ChatRoom> \n"
. "<param name=showbuttonpanel value=true> \n"
. "<param name=bg value=FFFFFF> \n"
. "<param name=fg value=000000> \n"
. "<param name=roomswidth value=0> \n"
. "<param name=lurk value=false> \n"
. "<param name=simple value=false> \n"
. "<param name=linespacing value=2> \n"
. "<param name=restricted value=false> \n"
. "<param name=showjoins value=false> \n"
. "<param name=showserverwindow value=true> \n"
. "<param name=nicklock value=false> \n"
. "<param name=playsounds value=true> \n"
. "<param name=onlyshowchat value=false> \n"
. "<param name=showcolorpanel value=false> \n"
. "<param name=floatnewwindows value=false> \n"
. "<param name=timestamp value=false> \n"
. "<param name=listtime value=0> \n"
. "<param name=guicolors1 value=\"youColor=000000;operColor=FF0000;voicecolor=006600;userscolor=000099\"> \n"
. "<param name=guicolors2 value=\"inputcolor=FFFFFF;inputtextColor=000099;sessioncolor=FFFFFF;systemcolor=0000FF\"> \n"
. "<param name=guicolors3 value=\"titleColor=FFFFFF;titletextColor=000099;sessiontextColor=000000\"> \n"
. "<param name=guicolors4 value=\"joinColor=009900;partColor=009900;talkcolor=000099\"> \n"
. "<!--End code for ConferenceRoom Applet--></applet> \n"
. "<hr noshade><div align=\"right\">\n";
?>

