-----------------------------------------------
::Trashbin:: theme (PHP-Nuke 5.5)
Author: trash
Email: trash@trashbin.tk
HomePage: http://www.trashbin.tk
-----------------------------------------------

Installation:
This theme requires some additional installation steps other then extracting the files in a theme folder.
In order to fully utilize this theme, please follow the steps:

1. Extract these files to your /themes folder
2. Add this code to the end of your mainfile.php:

			//Code Added for showing and hiding blocks!!
			if ($userinfo[theme] == "Trashbin") {
				require_once("themes/Trashbin/block_show_hide.php");
			}
			//End Code added

3. In mainfile.php, change all occurences (it should be 5) of:

		themesidebox($title, $content);
		
	 into:
	 
	  //Code Change - added $bid
		themesidebox($title, $content, $bid);
		//End Code Change
		
4. In the themes.php file of all the other themes, change the following line:

		function themesidebox($title, $content) {		
		
	 into:
	 
		function themesidebox($title, $content, $bid = -1) {	 
	
	 If this step is not done, the other themes will give errors!!!!

5. Change the logo.gif and logo_text.gif to your own site logos, by using the logo.png and logo_text.png files!

----------------------------------------------------------------------
::TrashBin:: artificial intelligence is no match for natural stupidity
----------------------------------------------------------------------