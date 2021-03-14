<?php
session_start();
include('connect.php');
	// 判斷是否有指定專案
  if(isset($_GET["delete"])){
    $_POST["delete"]=$_GET["delete"];
  }
   // 確認目前使用者選定要刪的收藏
      if(!empty($_POST["delete"])) {
        // 使用者選定資訊
        // echo $_POST["delete"];
        $delcollect = $_POST["delete"];
      }
    $sql="DELETE FROM collection WHERE user_id='".$_SESSION['u_id']."' AND pid='$delcollect';";
    $result=mysqli_query($connect,$sql);
    echo '<meta http-equiv=REFRESH CONTENT=0;url=index.php>';

?>