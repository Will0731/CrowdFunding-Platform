<?php
session_start();
if(isset($_POST['final'])) {
	include('connect.php');
	$pid = $_SESSION['pid'];
	// $proposer_name = $_SESSION['u_name'];
	// $proposer_email= $_SESSION['u_account'];
	$proposer_phone =mysqli_real_escape_string($connect,$_POST['phone']); 
	$group_name=mysqli_real_escape_string($connect,$_POST['groupname']);
	$user_id = $_SESSION['u_id'];
	if(!preg_match('/^[0][9][0-9]+$/', $proposer_phone)) {
		echo "<script>alert('請輸入正確手機格式');</script>";
		echo '<meta http-equiv=REFRESH CONTENT=0;url=propose_info.php>';
		exit();
	}
	else{
		$sql = "SELECT * FROM users WHERE user_id='$user_id'";
		$result = mysqli_query($connect,$sql);
		$row = mysqli_fetch_assoc($result);
		$proposer_name = $row['user_name'];
		$sql = "SELECT * FROM users WHERE user_id='$user_id'";
		$result = mysqli_query($connect,$sql);
		$row = mysqli_fetch_assoc($result);
		$proposer_email = $row['user_email'];
		$sql ="INSERT INTO proposer_info(pid,proposer_name,proposer_email,proposer_phone,group_name,user_id) VALUES ('$pid','$proposer_name','$proposer_email','$proposer_phone','$group_name','$user_id');";
		$result=mysqli_query($connect,$sql);
		echo '<meta http-equiv=REFRESH CONTENT=0;url=index.php>';
		exit();
	}
		}
?>