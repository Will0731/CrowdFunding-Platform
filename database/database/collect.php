<?php
session_start();
include('connect.php');
if(isset($_GET["addto_collect"])){
    $_POST["addto_collect"]=$_GET["addto_collect"];
  }
 // 確認目前使用者選定要收藏的專案資訊
    if(!empty($_POST["addto_collect"])) {
        // 使用者選定資訊
        // echo $_POST["select_project"];
        $collect = $_POST["addto_collect"];
    }
$sql =	"SELECT pid FROM collection WHERE user_id='".$_SESSION['u_id']."' AND pid='$collect'";
$result = mysqli_query($connect,$sql);
$row = mysqli_fetch_array($result);
if($row['pid']==$collect) {
	$sql =	"DELETE FROM collection WHERE pid='$collect' AND user_id='".$_SESSION['u_id']."'";
	$result=mysqli_query($connect,$sql);
	echo "<script>alert('取消收藏成功');</script>";
	echo '<meta http-equiv=REFRESH CONTENT=0;url=projectpage.php?select_project='.$collect.'>';
	exit();
}
else {
	$sql =	"INSERT INTO collection (user_id, pid) VALUES ('".$_SESSION['u_id']."','$collect');";
	$result=mysqli_query($connect,$sql);
	echo "<script>alert('收藏成功');</script>";
	echo '<meta http-equiv=REFRESH CONTENT=0;url=projectpage.php?select_project='.$collect.'>';
	exit();
}
	

?>