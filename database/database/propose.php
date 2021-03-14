<?php
session_start();
if(isset($_POST['begin'])) {
	include('connect.php');
	$project_name=mysqli_real_escape_string($connect,$_POST['pname']);
	$project_category=mysqli_real_escape_string($connect,$_POST['category']);
	$sql ="INSERT INTO project (pname, category) VALUES ('$project_name','$project_category');";
	$result=mysqli_query($connect,$sql);
	$sql = "SELECT * FROM project WHERE pname = '$project_name'";
	$result=mysqli_query($connect,$sql);
	$row = mysqli_fetch_assoc($result);
	$_SESSION['pid'] = $row['pid'];
	$_SESSION['pname'] = $row['pname'];
	// $sql = "SELECT * FROM project WHERE category = '$project_category'";
	// $result=mysqli_query($connect,$sql);
	// $row = mysqli_fetch_assoc($result);
	$_SESSION['category'] = $row['category'];
	// echo $_SESSION['pid'];
	echo '<meta http-equiv=REFRESH CONTENT=0;url=project_summary.php>';
	exit();
	}
	 ?>

		<!-- // $sql = "SELECT * FROM users WHERE user_email ='$user_uid'";
		// $result = mysqli_query($connect,$sql);
		// $resultCheck = mysqli_num_rows($result);
		// if($resultCheck > 0) {
		// 	echo "<script>alert('帳號已被使用');</script>";
		// 	echo '<meta http-equiv=REFRESH CONTENT=0;url=login_page.php?signup=usertaken>';
		// 	exit();
		// } else {
		// 	if ($user_pwd==$user_repwd) {
		// 		$hashedPwd = password_hash($user_pwd,PASSWORD_DEFAULT);
				
	// 		}
	// 		else {
	// 			echo "<script>alert('密碼輸入不符');</script>";
	// 			echo '<meta http-equiv=REFRESH CONTENT=0;url=login_page.php?signup=usertaken>';
	// 			exit();
	// 		}
			
	// 	}
	// }
// // }
// else {
// 	header("index.php");
// 	exit();
// }
 -->