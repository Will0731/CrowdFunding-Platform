<!DOCTYPE html>
<html>
  <head>

    <title>專案資訊</title>

    </head>
  <style>
.navdrop{
  font-size: 14px;
  font-family: 微軟正黑體;
  width: 150px;
}
.card-title {
  font-size: 20px;
}
.card-body {
  margin-top: 10px;
  margin-right: 10px;
  margin-left: 10px;
}
.midnav {
  width: 175px;
  text-align: center;
  font-size: 17px;
  font-family: 微軟正黑體;
  font-weight: bold;
}
.midnavbtn {
  margin-bottom: 10px;
    
}
.sticky {
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 999;
}
td{
  height: 110px;
}
  </style>
  <?php
  // 判斷是否有指定專案
  if(isset($_GET["select_project"])){
    $_POST["select_project"]=$_GET["select_project"];
  }
  ?>
  <body>
    <!-- HEADER -->
  <?php
    include('nav.php')
  ?>
       <?php
       // 確認目前使用者選定要看的專案資訊
      if(!empty($_POST["select_project"])) {
        // 使用者選定資訊
        // echo $_POST["select_project"];
        $select_project = $_POST["select_project"];
      }
      ?>
      <?php
      $sql="SELECT * FROM project NATURAL JOIN p_summary NATURAL JOIN p_content NATURAL JOIN feedback_setting NATURAL JOIN proposer_info where pid='$select_project';";
      $result=mysqli_query($connect,$sql);
      $row = mysqli_fetch_array($result);

      date_default_timezone_set('Asia/Taipei');
      $datetime= date("Y/m/d");
      $today = strtotime($datetime);
      $enddate = strtotime($row['p_enddate']);
      $diff = ($enddate - $today) / 86400;

      $sql2="SELECT SUM(order_money),money_goal FROM project NATURAL JOIN sponsor_order NATURAL JOIN p_summary WHERE pid='$select_project'";
      $result2=mysqli_query($connect,$sql2);
      $sum = mysqli_fetch_array($result2);
      $rate=($sum['SUM(order_money)']/$sum['money_goal'])*100;
      $rate=floor($rate);

      $sql1="SELECT COUNT(DISTINCT user_id) FROM sponsor_order WHERE pname='".$row['pname']."'";
      $result1=mysqli_query($connect,$sql1);
      $people = mysqli_fetch_array($result1);
    echo '<div class="section" style="background-color: #f5f5f0;">
      <!-- container -->
      <div class="container" style="margin-top:40px">
        <div>
          <h3 class="title" style="font-family:微軟正黑體; text-align: center;font-size:30px;">'.$row['pname'].'</h3>
        </div>
                <p style="font-family:微軟正黑體; text-align: center;font-size:15px;">
                  <span style="color: #0066FF">'.$row['category'].'</span> | 由<span style="color: #0066FF"> '.$row['proposer_name'].'</span> 提案 
                </p>
                <br>
                <br>
                <div class="col-sm-8">
                  <img alt="Image" src="data:image/jpeg;base64,'.base64_encode($row['p_cover']).'" width="600" height="400">
                  <br>
                  <br>
                  <br>';
                  if($sum['SUM(order_money)']==0){
                  echo '<span style="font-size: 20px;"><i class="fa fa-dollar" style="font-size:20px"></i>0</span>';
                  }else {
                  echo '<span style="font-size: 20px;"><i class="fa fa-dollar" style="font-size:20px"></i>'.$sum['SUM(order_money)'].'</span>';
                  }
                  echo '<div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="height: 15px; width: '.$rate.'%"><p style="font-size: 10px;">'.$rate.'%</p>
                </div>
            </div>
                    <!--<span style="font-size: 20px;"><i class="fa fa-dollar" style="font-size:20px"></i>0</span>-->
                  </div>
                <div class="col-sm-4">
                  <div>';
                  if($sum['SUM(order_money)']==0){
                    echo '<h1><i class="fa fa-dollar" style="font-size:30px"></i>0</h1>';
                  }else {
                    echo '<h1><i class="fa fa-dollar" style="font-size:30px"></i>'.$sum['SUM(order_money)'].'</h1>';
                  }
                  echo '<p class="metatext moneyFormat">目標 $'.$row['money_goal'].'</p>
                  </div>
                  <div>
                    <h1>'.$people[0].'</h1>
                    <p>人贊助</p>
                  </div>
                  <div>';
                  if($diff<0){
                    echo '<h1>已結束</h1>';
                  }else{
                    echo '<h1>'.$diff.'</h1>
                    <p>天結束</p>';
                  }
                  echo '</div>
                  <blockquote>
                    專案正在募資中！<br>在 '.$row['p_enddate'].' 23:59 募資結束前，至少募得 $'.$row['money_goal'].' 便募資成功。
                  </blockquote>';
                  if(isset($_SESSION["u_id"]) && $_SESSION["u_id"] != null){
                  echo '<a href="select_sponsor_money.php?select_sponsor='.$row["pid"].'" class="btn btn-danger btn-block btn-lg">贊助專案</a>';
                  }else{
                    echo '<a href="login_page.php" class="btn btn-danger btn-block btn-lg">贊助專案</a>';
                  }
                  $sql =  "SELECT pid FROM collection WHERE pid='".$row['pid']."' AND user_id='".$_SESSION['u_id']."'";
                  $result = mysqli_query($connect,$sql);
                  $collect = mysqli_fetch_array($result);
                  if($collect[0]==$row['pid']){
                    echo '<a href="collect.php?addto_collect='.$row["pid"].'" class="btn btn-default btn-block ">取消收藏</a>';
                  }
                  else{
                    echo '<a href="collect.php?addto_collect='.$row["pid"].'" class="btn btn-default btn-block ">加入收藏</a>';
                  }
                echo '</div>
      </div>
    </div>

    <nav style="background-color: #f5f5f0; border-top-style: groove; border-bottom-style: groove; border-width: 1px;" id="midnav">
      <div class="container">
          <div class="col-sm-8" style="border-right-style: groove; border-width: 1px;">
            <ul class="nav navbar-nav nav-fill">
                <li class="active nav-item midnav"><a href="projectpage.php?select_project='.$row["pid"].'#p_content" style="font-weight: bold; color: #ff3333;">專案內容</a></li>
                <li class="active nav-item midnav"><a href="#" style="font-weight: bold; color: #ff3333;">進度</a></li>
                <li class="active nav-item midnav"><a href="#" style="font-weight: bold; color: #ff3333;">互動</a></li>
                <li class="active nav-item midnav" style="background-color: #e6e6e6;"><a href="project_support?select_project='.$row["pid"].'#support" style="font-weight: bold; color: #ff3333;">支持者</a></li>
            </ul>
          </div>
          <div class="col-sm-4" id="support">
            <h4 style="text-align: center; line-height: 30px; color: blue;">團隊名稱: '.$row['group_name'].'</h4>
          </div>
      </div>
    </nav>

    <div class="section" >
      <div class="container">         
        <div class="col-sm-8">
            <div class="section" style="margin-bottom: 100px;">
              <div>
                <h1 class="title" style="font-family:微軟正黑體; text-align: center; font-weight: bold; ">支持者</h1>
              </div>
              <div class="section">
                <div class="container">
                    <table width="30%" style="margin-left: 200px;">';
                    $sql =  "SELECT DISTINCT m_name,m_pic FROM sponsor_order NATURAL JOIN project NATURAL JOIN members WHERE pid='".$row['pid']."' AND members.m_id=sponsor_order.user_id";
                    $result = mysqli_query($connect,$sql);
                    while ($support = mysqli_fetch_array($result)){
                      echo '<tr>
                    <td><img width="80" height="80" src="data:image/jpeg;base64,'.base64_encode($support['m_pic']).'"></td>
                    <td><p style="font-family:微軟正黑體; font-size: 24px; font-weight: bold;">'.$support['m_name'].'</p></td>
                    </tr>';
                    }
                    

                    echo '</table>
                </div>
              </div>
            </div>
          </div>
        <div class="col-sm-4">
          <div class="card" style="background-color: #f5f5f0;">
              <img class="card-img-top" alt="Image" src="data:image/jpeg;base64,'.base64_encode($row['f_pic']).'" height = "350" width = "350" alt="Card image cap">
              <div class="card-body">
                <p class="card-title"><i class="fa fa-dollar" style="font-size:20px"></i>'.$row['f_amount'].'元</p>
                <p class="card-text">'.$row['f_content'].'</p>';
                if(isset($_SESSION["u_id"]) && $_SESSION["u_id"] != null){
                echo '<a href="select_sponsor_money.php?select_sponsor='.$row["pid"].'" class="btn btn-danger midnavbtn btn-block">贊 助 此 回 饋</a>';
                }else{
                echo '<a href="login_page.php" class="btn btn-danger midnavbtn btn-block">贊 助 此 回 饋</a>';
                } 
              echo '</div>
          </div>
          <br>
          
        </div>
      </div>
    </div>';
    ?>

        <?php
          include('footer.php')
        ?>

        <script>
        window.onscroll = function() {myFunction()};

        var navbar = document.getElementById("midnav");
        var sticky = navbar.offsetTop;

        function myFunction() {
          if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
          } else {
            navbar.classList.remove("sticky");
          }
        }
        </script>

  </body>
</html>