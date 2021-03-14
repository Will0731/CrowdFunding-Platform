<?php
if(isset($_POST['signup'])) {
	include('connect.php');
	$user_name=mysqli_real_escape_string($connect,$_POST['name']);
	$user_uid=mysqli_real_escape_string($connect,$_POST['account']);
	$user_pwd=mysqli_real_escape_string($connect,$_POST['psw']);
	$user_repwd=mysqli_real_escape_string($connect,$_POST['repsw']);
	$user_phone=mysqli_real_escape_string($connect,$_POST['phone']);
if($user_phone=="") {
	$sql = "SELECT * FROM users WHERE user_email ='$user_uid'";
		$result = mysqli_query($connect,$sql);
		$resultCheck = mysqli_num_rows($result);
		if($resultCheck > 0) {
			echo "<script>alert('帳號已被使用');</script>";
			echo '<meta http-equiv=REFRESH CONTENT=0;url=login_page.php?signup=usertaken>';
			exit();
		} else {
			if ($user_pwd==$user_repwd) {
				$hashedPwd = password_hash($user_pwd,PASSWORD_DEFAULT);
				$sql =	"INSERT INTO users (user_name, user_email, user_password) VALUES ('$user_name','$user_uid','$hashedPwd');";
				$result=mysqli_query($connect,$sql);
				echo "<script>alert('註冊成功');</script>";
				echo '<meta http-equiv=REFRESH CONTENT=0;url=login_page.php>';
				exit();
			}
			else {
				echo "<script>alert('密碼輸入不符');</script>";
				echo '<meta http-equiv=REFRESH CONTENT=0;url=login_page.php?signup=usertaken>';
				exit();
			}
		}

} else {
	if(!preg_match('/^[0][9][0-9]+$/', $user_phone)) {
		echo "<script>alert('請輸入正確手機格式');</script>";
		echo '<meta http-equiv=REFRESH CONTENT=0;url=login_page.php>';
		exit();
	}
	else {
		$sql = "SELECT * FROM users WHERE user_email ='$user_uid'";
		$result = mysqli_query($connect,$sql);
		$resultCheck = mysqli_num_rows($result);
		if($resultCheck > 0) {
			echo "<script>alert('帳號已被使用');</script>";
			echo '<meta http-equiv=REFRESH CONTENT=0;url=login_page.php?signup=usertaken>';
			exit();
		} else {
			if ($user_pwd==$user_repwd) {
				$hashedPwd = password_hash($user_pwd,PASSWORD_DEFAULT);
				$sql =	"INSERT INTO users (user_name, user_email, user_password, user_phone) VALUES ('$user_name','$user_uid','$hashedPwd','$user_phone');";
				$result=mysqli_query($connect,$sql);
				echo "<script>alert('註冊成功');</script>";
				echo '<meta http-equiv=REFRESH CONTENT=0;url=login_page.php>';
				exit();
			}
			else {
				echo "<script>alert('密碼輸入不符');</script>";
				echo '<meta http-equiv=REFRESH CONTENT=0;url=login_page.php?signup=usertaken>';
				exit();
			}
		}
	}
	}
}
else {
	header("login_page.php");
	exit();
}
?>



    