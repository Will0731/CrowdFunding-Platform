<?php
session_start();
if(isset($_POST['store'])) {
	include('connect.php');
	$mid = $_SESSION['u_id'];
	$member_name=mysqli_real_escape_string($connect,$_POST['name']);
	// $member_email= mysqli_real_escape_string($connect,$_POST['email']);
	$member_sex=mysqli_real_escape_string($connect,$_POST['sex']);
	$member_btday=mysqli_real_escape_string($connect,$_POST['birthday']);
	$member_phone=mysqli_real_escape_string($connect,$_POST['phone']);
	$member_intro=mysqli_real_escape_string($connect,$_POST['message']);
	$file = $_FILES["selfpic"]["name"];
	$sql = "SELECT * FROM members WHERE m_id = '$mid'";
	$result=mysqli_query($connect,$sql);
	$row=mysqli_fetch_assoc($result);
	
	$sql ="INSERT INTO members(m_id,m_name) VALUES('$mid','$member_name');";
	$result=mysqli_query($connect,$sql);

		$sql = "UPDATE members SET m_name = '$member_name' WHERE m_id = '$mid'";
		$result=mysqli_query($connect,$sql) or die("無法更新".mysqli_error());
		$sql = "UPDATE users SET user_name = '$member_name' WHERE user_id = '$mid'";
		$result=mysqli_query($connect,$sql) or die("無法更新".mysqli_error());

	$file = $_FILES["selfpic"]["name"];
	if($file!="") {
		if($row['m_pic']=="NA") {
			if (addslashes($_FILES["selfpic"]["size"])>1000000) {
		        echo "<script>alert('檔案太大，更改失敗');</script>";
		        echo '<meta http-equiv=REFRESH CONTENT=0;url=member_profile.php>';
		        exit();
		    }
		    $m_picname=addslashes($_FILES["selfpic"]["name"]);
	    	$m_pic=addslashes(file_get_contents($_FILES["selfpic"]["tmp_name"]));
			$sql ="INSERT INTO members(m_pic) VALUES ('$m_pic');";
			$result=mysqli_query($connect,$sql);
			$_FILES["selfpic"]["name"]=NULL;
			echo '<meta http-equiv=REFRESH CONTENT=0;url=member_profile.php>';
		}
	    else {
	    	if (addslashes($_FILES["selfpic"]["size"])>1000000) {
		        echo "<script>alert('檔案太大，更改失敗');</script>";
		        echo '<meta http-equiv=REFRESH CONTENT=5;url=member_profile.php>';
		        exit();
	    	}
	    	$m_picname=addslashes($_FILES["selfpic"]["name"]);
			$m_pic=addslashes(file_get_contents($_FILES["selfpic"]["tmp_name"]));
	    	$sql = "UPDATE members SET m_pic = '$m_pic' WHERE m_id = '$mid'";
			$result=mysqli_query($connect,$sql) or die("無法更新".mysqli_error());
	    }
	}
	    if($row['m_sex']=="NA") {
	    	$sql ="INSERT INTO members(m_sex) VALUES ('$member_sex');";
			$result=mysqli_query($connect,$sql);
		}
		else {
			$sql = "UPDATE members SET m_sex = '$member_sex' WHERE m_id = '$mid'";
			$result=mysqli_query($connect,$sql) or die("無法更新".mysqli_error());
		}
		if($row['m_phone']=="NA"){
			$sql ="INSERT INTO members(m_phone) VALUES ('$member_phone');";
			$result=mysqli_query($connect,$sql);
		}
		else {
			$sql = "UPDATE members SET m_phone = '$member_phone' WHERE m_id = '$mid'";
			$result=mysqli_query($connect,$sql) or die("無法更新".mysqli_error());
			$sql = "UPDATE users SET user_phone = '$member_phone' WHERE user_id = '$mid'";
			$result=mysqli_query($connect,$sql);
		}
		if($row['m_bth']=="NA") {
	    	$sql ="INSERT INTO members(m_bth) VALUES ('$member_btday');";
			$result=mysqli_query($connect,$sql);
		}
		else {
			$sql = "UPDATE members SET m_bth = '$member_btday' WHERE m_id = '$mid'";
			$result=mysqli_query($connect,$sql);
		}
		if($row['m_aboutme']=="NA") {
	    	$sql ="INSERT INTO members(m_aboutme) VALUES ('$member_intro');";
			$result=mysqli_query($connect,$sql);
		}
		else {
			$sql = "UPDATE members SET m_aboutme = '$member_intro' WHERE m_id = '$mid'";
			$result=mysqli_query($connect,$sql);
		}

	echo "<script>alert('更新成功');</script>";
	echo '<meta http-equiv=REFRESH CONTENT=0;url=member_profile.php>';
}
?>
	