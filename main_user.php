<?php
 // สว่ นตงั้คา่ เรยี กใชง้าน UserService ของ Google
	use google\appengine\api\users\User;
	use google\appengine\api\users\UserService;
	global $user,$userdata,$appid;
	
	$user = UserService::getCurrentUser();
	if($user){
		$uid = $user->getUserId();
		$userfile = "gs://$appid/user_$uid.json";
		$userdata = array();
		if(file_exists($userfile)){
 // จะโหลดข ้อมูลในไฟล์ json
			$filedata = file_get_contents($userfile);
			$userdata = json_decode($filedata,true);
		}else{
		$userdata['nick']=$user->getNickname();
		}

	$url = UserService::createLogoutUrl('/main.php');
 // แสดงภาพผใู้ช ้โดยการเรยี กฟังกช์ นั userpic จากข ้อที่ 1 <img src='".userpic($uid)."'width='50'>
	echo "<li><a href='#'>".$userdata['nick']."</a></li>";
	echo "<li><a href='main.php?p=useredit'>Edit User</a></li>";
	echo "<li><a href='$url'>Logout</a></li>";
	}else{
		$url = UserService::createLoginUrl('/main.php');
		echo "<li><a href='$url'>LOGIN</a></li>";
	}
?>
