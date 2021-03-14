<?php
session_start();
if(isset($_POST['next1'])) {
	include('connect.php');
	$pid = $_SESSION['pid'];
	$project_summary=mysqli_real_escape_string($connect,$_POST['summary']);
	$project_money=mysqli_real_escape_string($connect,$_POST['moneygoal']);
	$project_startdate=mysqli_real_escape_string($connect,$_POST['start']);
	$project_enddate=mysqli_real_escape_string($connect,$_POST['end']);
	$sql = "SELECT * FROM project WHERE pid = '$pid'";
	$result = mysqli_query($connect,$sql);
	$row = mysqli_fetch_array($result);
	$p_name = $row['pname'];

	
	$file = $_FILES["pic"]["name"];

	if($file==""){
		echo "<script>alert('請選擇一張照片');</script>";
      	echo '<meta http-equiv=REFRESH CONTENT=0;url=project_summary.php>';
      	exit();
	}
	else {
		if (addslashes($_FILES["pic"]["size"])>1000000) {
	        echo "<script>alert('檔案太大，更改失敗');</script>";
	        echo '<meta http-equiv=REFRESH CONTENT=0;url=project_summary.php>';
	        exit();
	    }
	    $p_covername=addslashes($_FILES["pic"]["name"]);
    	$p_cover=addslashes(file_get_contents($_FILES["pic"]["tmp_name"]));
		$sql ="INSERT INTO p_summary(pid,pname,c_summary,money_goal,p_cover,p_startdate,p_enddate) VALUES ('$pid','$p_name','$project_summary','$project_money','$p_cover','$project_startdate','$project_enddate');";
		$result=mysqli_query($connect,$sql);
		$_FILES["pic"]["name"]=NULL;
		echo '<meta http-equiv=REFRESH CONTENT=0;url=project_content.php>';
		exit();
	}
	}
	 ?>
