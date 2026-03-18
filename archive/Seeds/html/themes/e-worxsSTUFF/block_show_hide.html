<?php

function block_cookiedecode($block_show) {
	//decode cookie and return in array
  global $block_cookie;
  $block_show = base64_decode($block_show);
  $block_cookie = explode(":", $block_show);
	return $block_cookie;
}

//make blocks show and hide
if (isset($bshow) && is_numeric($bshow)) {
	if ($s != "hide" && $s != "show") $s = "show";
	//get already set cookies
	block_cookiedecode($block_show);
	//check if block is already in array
	if (!in_array($bshow, $block_cookie) && $s == "hide") {
		array_push ($block_cookie, $bshow);
	}
	if ($s == "show") {
		//remove from array
		$temp_cookie = array ();
		foreach ($block_cookie as $test) {
			if ($test != $bshow) {
				$temp_cookie[] = $test;
			}
		}
		//$temp = implode(":", $temp_cookie);
		$block_cookie = $temp_cookie;
	}
	
	//get string of array
	$temp = implode(":", $block_cookie);
	
	//set cookies
	$temp = base64_encode($temp);
	setcookie("block_show", $temp, time() + 14400);
}

?>