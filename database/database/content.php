<?php
session_start();
if(isset($_POST['next2'])) {
	include('connect.php');
	$pid = $_SESSION['pid'];
	$project_content=mysqli_real_escape_string($connect,$_POST['content']);
	$project_risk=mysqli_real_escape_string($connect,$_POST['risk']);
	$sql = "SELECT * FROM project WHERE pid = '$pid'";
	$result = mysqli_query($connect,$sql);
	$row = mysqli_fetch_array($result);
	$sql ="INSERT INTO p_content(pid,content,risk) VALUES ('$pid','$project_content','$project_risk');";
	$result=mysqli_query($connect,$sql);
	// $sql = "SELECT * FROM project WHERE pname = '$project_name'";
	// $result=mysqli_query($connect,$sql);
	// $row = mysqli_fetch_assoc($result);
	// $_SESSION['pid'] = $row['pid'];
	// $sql = "SELECT * FROM project WHERE category = '$project_category'";
	// $result=mysqli_query($connect,$sql);
	// $row = mysqli_fetch_assoc($result);
	// $_SESSION['category'] = $row['category'];
	// echo $_SESSION['pid'];
	// echo "<script>alert('成功')</script>";
	echo '<meta http-equiv=REFRESH CONTENT=0;url=feedback_setting.php>';
	exit();
	}
	 ?>
