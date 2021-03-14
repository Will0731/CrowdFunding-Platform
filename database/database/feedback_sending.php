<?php
session_start();
if(isset($_POST['sending_info'])) {
	include('connect.php');

	$howtopay=mysqli_real_escape_string($connect,$_POST['howtopay']);
	$receptname=mysqli_real_escape_string($connect,$_POST['receptname']);
	$receptaddress=mysqli_real_escape_string($connect,$_POST['receptaddress']);
	$receptphone=mysqli_real_escape_string($connect,$_POST['receptphone']);
	$receptnemail=mysqli_real_escape_string($connect,$_POST['receptnemail']);
	$receptps=mysqli_real_escape_string($connect,$_POST['receptps']);

	if(!preg_match('/^[0][9][0-9]+$/', $receptphone)) {
		echo "<script>alert('請輸入正確手機格式');</script>";
		echo '<meta http-equiv=REFRESH CONTENT=0;url=sponsor_feedback.php?select_send='.$_SESSION['fNo'].'.php>';
		exit();
	}
	$sql = "INSERT INTO feedback (fNo, user_id, fname, faddress, fphone, femail, howtopay, fps) VALUES ('".$_SESSION['fNo']."','".$_SESSION['u_id']."','$receptname','$receptaddress','$receptphone','$receptnemail','$howtopay','$receptps');";
	$result=mysqli_query($connect,$sql);

	$sql1 = "SELECT * FROM feedback_setting NATURAL JOIN project WHERE fNo='".$_SESSION['fNo']."'";
	$result1=mysqli_query($connect,$sql1);
	$row = mysqli_fetch_array($result1);

	$sql = "INSERT INTO sponsor_order (user_id, pname, order_money, howtopay) VALUES ('".$_SESSION['u_id']."','".$row['pname']."','".$_SESSION['total']."','$howtopay');";
	$result=mysqli_query($connect,$sql);


	echo "<script>alert('送出成功');</script>";
	echo '<meta http-equiv=REFRESH CONTENT=0;url=index.php>';
	exit();
}
else {
	header("index.php");
	exit();
}
?>