<?php

session_start();

if(isset($_POST['login'])) {
   include('connect.php');
   $uid=mysqli_real_escape_string($connect,$_POST['account']);
   $pwd=mysqli_real_escape_string($connect,$_POST['psw']);

   $sql="SELECT * FROM users WHERE user_email='$uid'";
   $result=mysqli_query($connect,$sql);
   $resultCheck=mysqli_num_rows($result);
   if($resultCheck < 1) {
      echo "<script>alert('無此帳號');</script>";
      echo '<meta http-equiv=REFRESH CONTENT=0;url=login_page.php?login=error>';
      exit();
   } else {
      if($row=mysqli_fetch_assoc($result)) {
         $hashedPwdCheck=password_verify($pwd,$row['user_password']);
         if($hashedPwdCheck == false) {
            echo "<script>alert('密碼不對');</script>";
            echo '<meta http-equiv=REFRESH CONTENT=0;url=login_page.php?login=error>';
            exit();
         } elseif($hashedPwdCheck == true) {
            $_SESSION['u_name']=$row['user_name'];
            $_SESSION['u_id']=$row['user_id'];
            $_SESSION['u_account']=$row['user_email'];
            echo '<meta http-equiv=REFRESH CONTENT=0;url=index.php>';
            exit();
         }
         
      }
   }
}
?>