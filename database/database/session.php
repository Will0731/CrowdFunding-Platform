<?php
   	session_start();
   	include('connect.php');
 //   	if(!isset($_SESSION['u_uid'])){
	//  header("Location:overwall.php");
	// }
 //   	$user_check = $_SESSION['u_name'];
   
 //    $ses_sql = mysqli_query($connect,"SELECT user_name FROM users WHERE user_name = '$user_check' ") or die( mysqli_error($connect));
   
 //    $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
 //    $username = $row['user_name'];

	// $mid = $_SESSION['u_id'];

    // ---------------------------------------
	// $account = $_SESSION['u_uid'];
	// $sql = mysqli_query($connect,"SELECT * FROM member WHERE user_uid = '$account' ");
	// $row2 = mysqli_fetch_array($sql,MYSQLI_ASSOC);

	// $gender=$row2['my_gender'];
	// $phone=$row2['my_phone'];
	// $email=$row2['my_email'];
	// $introduction=$row2['my_introduction'];

	// //----------------------------------------
	 @$pid = $_SESSION['pid'];
	 // @$fNo = $_SESSION['fNo'];
?>