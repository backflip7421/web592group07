<?php
	use google\appengine\api\users\UserService;
	global $appid,$page,$title;
	if (UserService::isCurrentUserAdmin()){
		echo "<br><a href='canon.php?p=edit&file=maincsnon.html' class='btn btn-default'>Edit</a> <br>"; //แก้ตรงนี้--------------------------------------------------------
	}
	$phpfile="main_body_$page"."_canon.php";
	if(file_exists($phpfile)){
		include($phpfile);
	}else{
		$htmlfile = "gs://$appid/maincsnon.html"; //แก้ตรงนี้--------------------------------------------------------
	if(file_exists($htmlfile)){
		readfile($htmlfile);
	}
	echo "<br>";
	//include("main_feedback_canon.php");
	
 }
?>