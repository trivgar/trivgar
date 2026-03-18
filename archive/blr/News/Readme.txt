n-12.net News Pro
      Readme

C O N T E N T S :
| Installation
| Running The Installer
| Administration Panel Guide
| How to make Templates?
| About Emoticons
| Troubleshooting

---------------------------------------------------------------------------------------------------------------
Installation
---------------------------------------------------------------------------------------------------------------
Step 1.
	First Unzip the downloaded Zip file.

	The main files you have are:

	admin.php - The Administration Script
	index.php - The Demo of You Front page with the news Included
	
Step 2.
	Upload to a Directory on your Site. For example: http://www.yoursite.com/News/
	
	Chmod path.inc and config.php 777 for the Installation.

	CHMOD THE News DIRECTORY 777 AS IT NEEDS TO HAVE WRITE ACCESS TO CREATE THE BACKUPS DIRECTORY

	And the rest of the files 755. Also Chmod the folders 755.
	
Step 3.
	Now type: For example. http://www.yourserver.com/News/install.php

Setp 4.
	Goto After Installation.
---------------------------------------------------------------------------------------------------------------
After the Installation
---------------------------------------------------------------------------------------------------------------

Now that N-12 News Pro is installed and Hopefully running fine, you need to know
how to access the news that you have posted!
If you type: For example. http://www.yourserver.com/News/index.php
You should see the News that you have posted, in the
template that you have choosen! 
To display your news on any page on your server (with a .php or .php3 extention)
you will need to add this code in the place you want it to be displayed!

<?

require('path.inc');
require($path."/config.php");

include($path."/template.php");

?>

Make sure you put a copy of path.inc in the directory you are putting your news displaying in.

---------------------------------------------------------------------------------------------------------------
Administration Panel Guide
---------------------------------------------------------------------------------------------------------------

Admin Main - This will take you back to the Admin Main

Return To Index - This will take you back to the index.php of your News Folder.

Logout - This will let you log out of N-12 News Pro Script.

Post - This will let you Post News.

Modify Posts - This will let you Edit news or Delete news that has already been Posted.

My details - This will let you edit your own details and change your email address and password!

---------------- START ONLY VIEWABLE IF ADMIN -------------------

Create a New Admin - This will let you Create New Admin users so other Trusted people can Post News.

View Current Admins - This will let you Delete Admins that have been Created.

Edit Comments - This will let you delete and view any comments that have been made.

Preferences - This will allow you to change the Options that you set when you installed the N-12 News Pro Script.

Backup DB - This will allow you to Backup your Database to a directory called backups.

---------------- END ONLY VIEWABLE IF ADMIN -------------------

Help/About - This is where you can find out how to Contact The script makers. 

Credits - This is where it lists the Makers of this Script!


---------------------------------------------------------------------------------------------------------------
How to make Templates?
---------------------------------------------------------------------------------------------------------------

Step 1:
	First of all make a new Folder in the Themes folder and call it what you want the name of your Template to be.

Step 2:
	Now copy the index.tpl from one of the other Theme Folders and paste it into the folder you have just created.
	Also copy the comments folder into the folder you have just created.

Step 3:

MAIN HTML: 

	Open the index.tpl that you have just copied from the other folder and Change the HTML to what ever you like!

	Variables: 
	
	   Remember that to display certain Things like the Postdate or the Posttime you have to use a small bit of code!

	   Subject - {subject}

	   Message - {news}

	   Post Time - {posttime}
	
	   Post Date - {postdate}

	   Poster Username - {poster}

	   Poster Email - {posteremail}
	
	   URL (for images) - {url}
	   For Example:
	
	   <td background="{url}/themes/SlotZone/box_loop.gif">
	
	   Or
	
	   <img border="0" src="{url}/themes/Orange/botright.gif">


COMMENTS HTML:

	Open up the folder called Comments, and you will see 4 files: 


	   comments.tpl - This stores the HTML that will be displayed in the Main Template if Comments are turned on.
		
		Variables for this page:

		   No Variables that are to be changed are on this page


	   comments_posting.tpl - This stores the HTML that will be displayed when a user wants to post a comment.		
		Variables for this page:

		   No Variables that are to be changed are on this page

 
	   comments_viewing.tpl - This stores the HTML that will be displayed when a user wants to view comments.
		
		Variables for this page:

		   No Variables that are to be changed are on this page


	   comments_thankyou.tpl - This is the thankyou page that will be displayed after the user has posted a comment.
		
		Variables for this page:

		   No Variables that are to be changed are on this page

	

Thats all you need to know! Now you can start Creating your Own Templates


---------------------------------------------------------------------------------------------------------------
About Emoticons
---------------------------------------------------------------------------------------------------------------

In Version 2.00 and above of n-12 News Pro, we have included support for Emoticons.
Emoticons are Pictures that can be accessed when you post.
For Example:

Emoticons are Great (h)

Would Be:

Emoticons are Great SHADES SMILE


Here is a List of all the Emoticons Supported in Version 2.00 and up of n-12 News.

(y) = Thumbs Up
(n) = Thumbs Down
(b) = Beer Yum
(d) = Martini Shaken
(x) = Girl Hands Across America
(z) = Guy Hands Across America
:[ = Bat
(}) = Girl Hug
({) = Dude Hug
:) = Regular Smile
:D = Teeth Smile
:o = Omg Smile
:p = Tounge Smile
;) = Wink Smile
:( = Sad Smile
:s = Confused Smile
:| = What You Talking About Smile
:'( = Cry Smile
:$ = Embaressed Smile
(h) = Shades Smile
:@ = Angry Smile
(a) = Angel Smile
(6) = Devil Smile
(l) = Heart
(u) = Broken Heart
(k) = Kiss
(g) = Present
(f) = Rose
(w) = Wilted Rose
(p) = Camera
(~) = Film
(t) = Phone
(@) = Kitty Kat
(&) = Bowwow
(c) = Coffee
(i) = Lightbulb
(s) = Moon
(*) = Star
(8) = Musical Note
(e) = Envelope
(^) = Cake
(o) = Clock

You Should try them out by typing them in when you Post!

---------------------------------------------------------------------------------------------------------------
TroubleShooting
---------------------------------------------------------------------------------------------------------------

If you don't know how to do anything that it asks you in Our installation guide please look here!

**************************************************************************
Help! I the installation script won't run!
**************************************************************************

There are a number of reasons this could happen, but one which we
cannot fix is if are are running an F2 server.

We apologise for this inconvenience but at the moment we have found no
way of overcoming this problem!

If you are not running F2's then please read on.

First of all make sure you have uploaded


**************************************************************************
Help! I don't know where my Path is?
**************************************************************************

Lets say that you are going to install n-12 News Pro too

	For Example: http://www.yourserver.com/News/

For your path you could write for your path (Exactly like that Copy & Paste it)

	$path = $DOCUMENT_ROOT."/news";

If you installed it to any other place just replace 

	/news 

with 

	/what ever folder it is

If it still doesn't work please go on to n-12's website (where you downloaded the script)
support forum and post your problem, or email Tom: tom@n-12.net or Chris: Chris@n-12.net
and tell them your Problem. We may also need more identification and you MUST include the url of your 
news script in your post.

**************************************************************************
Help! I've installed it but it still doesn't work!
**************************************************************************

First make sure that you have Followed the Install instructions to the T!
If you KNOW that you have then check all the PATHS. If these paths for some reason
where wrong then it would come up with all sorts of errors!

If it still doesn't work please go on to n-12's website (where you downloaded the script)
support forum and post your problem, or email Tom: tom@n-12.net or Chris: Chris@n-12.net
and tell them your Problem. We may also need more identification and you MUST include the url of your 
news script in your post.

**************************************************************************
Help! My Question isn't on here!
**************************************************************************

For any other questions please go on to n-12's website (where you downloaded the script)
support forum and post your problem, or email Tom: tom@n-12.net or Chris: Chris@n-12.net
and tell them your Problem. We may also need more identification and you MUST include the url of your 
news script in your post.

Thanxs

The N-12 Group