	<!DOCTYPE html>
	<head>
		<title>Fondonate</title>
		<!-- Bootstrap -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/navbar.css">
		<link rel="stylesheet" type="text/css" href="css/body.css">
		<?php 
		  include('session.php');
		?>
    </head>
<style>
*{
  font-family: "微軟正黑體";
}
.navdrop{
	font-size: 14px;
	width: 150px;
}
.dropdown-menu a{
	overflow: hidden; 
    text-overflow: ellipsis;
    white-space:nowrap;
}
</style>
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">

				<div class="container ">
					<div class=" gradient1 trans-0-4">
						<div class="h-full">
							<div class="wrap_header trans-0-3">
								<div>
						
								</div>

							<!-- Menu -->
								<div class="wrap_menu p-l-45 p-l-0-xl">
									<nav class="menu">
										<ul class="main_menu">
											<li>
												<a href="index.php">首頁</a>
											</li>

											<li>
												<?php if(isset($_SESSION["u_id"]) && $_SESSION["u_id"] != null){?>
												<a href="beginpropose.php">提案</a>
												<?php }else{ ?>
												<a href="login_page.php">提案</a>
												<?php }?>
											</li>
											<li>
												<a href="explore.php">探索</a>
											</li>
											<li>
												<a href="order_notice.php">訂單通知</a>
											</li>
											<li>
												<a href="about_us.php">關於我們</a>
											</li>
											<li>
												<a href="contact_us.php">聯絡我們</a>
											</li>
											<!-- <img src="./img/123.jpg" width="40" height="40" style="margin-top: -8px;margin-right: -20px;border-radius: 50%;"> -->
											<?php if(isset($_SESSION["u_id"]) && $_SESSION["u_id"] != null){?>
											
											<?php
								            $query="SELECT * FROM  members WHERE m_id='".$_SESSION['u_id']."'";
								            $result=mysqli_query($connect,$query);
								            $row=mysqli_fetch_array($result);
								              echo '<img width="40" height="40" style="margin-top: -8px;margin-right: -20px;border-radius: 50%;" src="data:image/jpeg;base64,'.base64_encode($row['m_pic']).'">';
								            ?>    <!-- 頭貼 -->
											<li class="dropdown">
        										<a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $_SESSION['u_name']; ?>
        										<span class="caret"></span></a>
        										<ul class="dropdown-menu">
          											<li><a style="color : #0077b3;" class="navdrop" href="#">贊助案件</a></li>
          											<?php
                										$sql="SELECT DISTINCT pname FROM sponsor_order WHERE user_id='".$_SESSION['u_id']."' order by orderNo desc limit 3";
 	                									$result=mysqli_query($connect,$sql) or die('MySQL query error');

                									  		while ($row = mysqli_fetch_array($result, MYSQL_BOTH)){
                									  		$sql1="SELECT * FROM project WHERE pname='$row[0]'";
                									  		$result1=mysqli_query($connect,$sql1);
                									  		$row1 = mysqli_fetch_array($result1);
                									  		echo '<li><a style="color :#333644;font-size: 12px" class="navdrop" href="projectpage.php?select_project='.$row1["pid"].'">'. $row[0].'</a></li>';
                									  		} 	
                									?>
          											<li><a style="color : #0077b3;" class="navdrop" href="#">你的專案</a></li>
          											<?php
          											  	$user_id = $_SESSION['u_id'];
                										$sql="SELECT pname FROM project WHERE pid IN(SELECT pid FROM proposer_info WHERE user_id='$user_id') order by pid desc limit 3";
 	                									$result=mysqli_query($connect,$sql) or die('MySQL query error');

                									  		while ($row = mysqli_fetch_array($result, MYSQL_BOTH)){
                									  		$sql1="SELECT * FROM project WHERE pname='$row[0]'";
                									  		$result1=mysqli_query($connect,$sql1);
                									  		$row1 = mysqli_fetch_array($result1);
                									  		echo '<li><a style="color :#333644;font-size: 12px" class="navdrop" href="projectpage.php?select_project='.$row1["pid"].'">'. $row[0].'</a></li>';
                									  		} 	
                									?>
          											<hr class="navbar-divider">
          											<li><a style="color : black;" class="navdrop" href="member_profile.php">會員資料</a></li>
          											<li><a style="color : black;" class="navdrop" href="sponsor_record.php">贊助記錄</a></li>
          											<li><a style="color : black;" class="navdrop" href="logout.php">登出</a></li>
        										</ul>
   										</li>
      										<?php }else{ ?>
      										<li>
      											<a href="login_page.php"><span class="glyphicon glyphicon-log-in"></span> LOGIN</a>
      										</li>
      										<?php }?>
										</ul>
									</nav>
								</div>
								<!-- Social -->
								<div class="social flex-w flex-l-m p-r-20">
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="index.php" class="logo">
									<img src="./img/navlogo.png" alt="">
								</a>
							</div>
						
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form action="search.php" method="POST">
									<select class="input-select" name="select">
										<option value="0">全部類別</option>
										<option value="設計">設計</option>
										<option value="音樂">音樂</option>
										<option value="科技">科技</option>
										<option value="休閒">休閒</option>
										<option value="運動">運動</option>
										<option value="在地">在地</option>
										<option value="公共">公共</option>
										<option value="藝術">藝術</option>
									</select>
									<input class="input" placeholder="Search here" name="text">
									<button class="search-btn" type="submit" name="search">Search</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Wishlist -->
								<!--
								<div>
									<a href="#">
										<i class="fa fa-heart-o"></i>
										<span>Your Wishlist</span>
										<div class="qty">2</div>
									</a>
								</div>
								 /Wishlist -->

								<!-- Cart -->
								<div class="dropdown" style="margin-right: 180px; margin-top: 5px;">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true" style="cursor: pointer;">
										<i class="fa fa-heart-o"></i>
										<span>我的收藏</span>
										<?php 
										$sql="SELECT COUNT(pid) FROM collection WHERE user_id='".$_SESSION['u_id']."'";
      									$result=mysqli_query($connect,$sql);
      									$row2 = mysqli_fetch_array($result);
										echo '<div class="qty">'.$row2[0].'</div>';
										?>
									</a>
									<div class="cart-dropdown">
										<div class="cart-list">
											<?php 
											$sql="SELECT pid FROM collection WHERE user_id='".$_SESSION['u_id']."' order by pid desc";
	      									$result=mysqli_query($connect,$sql);
	      									while($row = mysqli_fetch_array($result)){
	      										$sql1="SELECT * FROM p_summary NATURAL JOIN proposer_info WHERE pid='".$row['pid']."'";
	      										$result1=mysqli_query($connect,$sql1);
	      										$row1 = mysqli_fetch_array($result1);
	      										echo '<div class="product-widget">
												<div class="product-img">
													<img src="data:image/jpeg;base64,'.base64_encode($row1['p_cover']).'" alt="Image">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="projectpage.php?select_project='.$row1["pid"].'">'.$row1['pname'].'</a></h3>
												</div>
												<a href="delcollect.php?delete='.$row1['pid'].'"><button class="delete" type="button"><i class="fa fa-close"></i></button></a>
											</div>';
	      									}
											
											?>
										</div>
										<div class="cart-summary">
											<!-- <small>3 Item(s) selected</small> -->
											<h5><span><?php echo $row2[0];?></span> Project(s) selected</h5>
										</div>
										<!-- <div class="cart-btns">
											<a href="#">View Cart</a>
											<a href="#">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
										</div> -->
									</div>
								</div>
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
