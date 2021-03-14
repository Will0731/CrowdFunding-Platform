<?php
session_start();
if(isset($_POST['next3'])) {
	include('connect.php');
	$pid = $_SESSION['pid'];
	$feedback_money=mysqli_real_escape_string($connect,$_POST['feedback_money']);
	$feedback_content=mysqli_real_escape_string($connect,$_POST['feedback_content']);

	$file = $_FILES["feedback_pic"]["name"];

	if($file==""){
		echo "<script>alert('請選擇一張照片');</script>";
      	echo '<meta http-equiv=REFRESH CONTENT=0;url=feedback_setting.php>';
      	exit();
	}
	else {
		if (addslashes($_FILES["feedback_pic"]["size"])>1000000) {
	        echo "<script>alert('檔案太大，更改失敗');</script>";
	        echo '<meta http-equiv=REFRESH CONTENT=0;url=feedback_setting.php>';
	        exit();
	    }
	    $f_picname=addslashes($_FILES["feedback_pic"]["name"]);
    	$f_pic=addslashes(file_get_contents($_FILES["feedback_pic"]["tmp_name"]));
		$sql ="INSERT INTO feedback_setting(pid,f_amount,f_content,f_pic) VALUES ('$pid','$feedback_money','$feedback_content','$f_pic');";
		$result=mysqli_query($connect,$sql);
		$_FILES["feedback_pic"]["name"]=NULL;
		echo '<meta http-equiv=REFRESH CONTENT=0;url=propose_info.php>';
		exit();
	}
}
	 ?>
