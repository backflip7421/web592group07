<?php
	if(!$user) return;
	global $userdata;
	if($_POST["feedbacksony"]){ //แก้ตรงนี้--------------------------------------------------------
//1. สร ้าง record ที่จะเก็บข ้อมูล feedback
		$rec=array();
		$rec['user']=$user->getUserId(); // รหัสผู้โพส
		$rec['name']=$userdata['nick']; // ชอื่ เลน่ ทจี่ ะแสดง
		$rec['feedbacksony']=$_POST['feedbacksony']; // ข ้อความ //แก้ตรงนี้--------------------------------------------------------
		$rec['time']=mktime(); // เวลาที่โพส
//2. น า $rec ไปต่อท ้ายอาเรย์$fbdata
		$fbdata[ ] = $rec;
//3. แปลงเป็น json
		$fbjson = json_encode($fbdata, JSON_PRETTY_PRINT);
 // 4. บันทึกลงไฟล์
		file_put_contents($fbfile,$fbjson);
		
		
		?><br>SAVED !<a href='sony.php?p=$page' id='pagelink'>OK</a>
		<script>
		window.setTimeout(function(){pagelink.click()},1000);
		</script>
		<?php
		return;
	}
	$pic = userpic($user->getUserId());
?>
<br><br>
<form method="post" action="">
	<div class="row">
		<div class="col-xs-1"><?= "<img src='$pic' width='48'>" ?></div>
		<div class="col-xs-10">
			<label for="feedbacksony"><?= $userdata['nick'] ?></label>
			<div class="input-group">
				<input type="text" class="form-control" placeholder="COMMENT" name="feedbacksony">
				<span class="input-group-btn">
					<button class="btn btn-default">SEND</button>
				</span>
			</div>
		</div> <!-- /.col-10 -->
	</div> <!-- /.row -->
</form>
