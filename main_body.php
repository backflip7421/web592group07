<?php
	use google\appengine\api\users\UserService;
	global $appid,$page,$title;
	/*if (UserService::isCurrentUserAdmin()){
		echo "<br><a href='main.php?p=edit&file=useredit.html' class='btn btn-default'>Edit</a> <br>";
	}*/
	$phpfile="main_body_$page.php";
	if(file_exists($phpfile)){
		include($phpfile);
	}else{
		$htmlfile = "gs://$appid/useredit.html";
	if(file_exists($htmlfile)){
		readfile($htmlfile);
	}
	echo "<br>";
	//include("main_feedback.php");
	
 }
?>