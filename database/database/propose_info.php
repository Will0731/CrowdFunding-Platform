<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Fundonate放斗內</title>
		<style type="text/css">
			textarea {
    		width: 100%;
		    height: 150px;
		    padding: 12px 20px;
		    box-sizing: border-box;
		    border: 2px solid #ccc;
		    border-radius: 4px;
		    background-color: #f8f8f8;
		    font-size: 16px;
		    resize: none;
			}
			input[type="text"],input[type="number"],input[type="email"],.proposecss{
		    width: 50%;
		    padding: 12px 20px;
		    margin: 8px 0;
		    box-sizing: border-box;
		    border: 3px solid #ccc;
		    -webkit-transition: 0.5s;
		    transition: 0.5s;
		    outline: none;
			}

			input[type="text"]:focus,input[type="number"]:focus,input[type="email"]:focus{
			    border: 3px solid #555;
			}
		</style>
    </head>
	<body>
		<?php include ('nav.php')
		?>	
		<!--section-->
				<section style="font-family: '微軟正黑體'">
					<div class="container btn-group" style="text-align: center;margin-top: 20px;position: relative;left: 189.6px">	
						<div style="font-size:20px;" class="col-md-3 btn btn-default active">專案大綱</div>
						<div style="font-size:20px;" class="col-md-3 btn btn-default active">專案內容</div>
						<div style="font-size:20px;" class="col-md-3 btn btn-default active">回饋設定</div>
						<div style="font-size:20px;" class="col-md-3 btn btn-primary active">提案資料</div>
					</div>
				</section>
				<section style="font-family: '微軟正黑體'">
						<div align="center" style="margin-top: 10px">
							<p>在這個區塊您將撰寫提案者需要提供的個人資料及身份驗證，在填寫提案團隊資訊的同時，您可以增加更多和本次專案相關的資訊連結及粉絲專頁，讓瀏覽者對您有更多的了解。</p>
						</div>
						<div>
						<form style="margin-bottom:20px;" action="pro_info.php" method="POST">
							<div class="container">
								<div class="row">
									<div class="col" style="margin-left: 360px">
										<label style="font-size: 20px">&#8718;&#xa0;&#xa0;提案負責人姓名</label><br>
										<div class="proposecss">
											<?php
											$mid = $_SESSION['u_id'];
											$sql = "SELECT * FROM users WHERE user_id='$mid'";
											$result = mysqli_query($connect,$sql);
											$row = mysqli_fetch_assoc($result);
											echo '<span>'.$row['user_name'].'
											</span>';
											?>
										</div>
										<!-- <span style="font-size: 12px">此名稱為核實及平台提案資料留存用，請填寫真實姓名。目前 flyingV只限定台<br>灣用戶提案，國外單位提案必須有台灣分公司或代理人，並且由台灣代理人提<br>交專案。</span> -->
									</div>
								</div>
								<div class="row">
									<div class="col" style="margin-left: 360px">
										<label style="font-size: 20px">&#8718;&#xa0;&#xa0;電子郵件</label><br>
											<div class="proposecss">
											<?php
											$sql = "SELECT * FROM users WHERE user_id='$mid'";
											$result = mysqli_query($connect,$sql);
											$row = mysqli_fetch_assoc($result);
											echo '<span>'.$row['user_email'].'
											</span>';
											?>
										</div>
										<span style="font-size: 12px">
										為了確保負責輔導本專案的專案經理可以聯絡到您，請填寫聯絡信箱。
										</span>
									</div>
								</div>
								<div class="row">
									<div class="col" style="margin-left: 360px">
										<label style="font-size: 20px">&#8718;&#xa0;&#xa0;行動電話</label><br>
										<div>
											<input type="text" name="phone" required>
										</div>
										<span style="font-size: 12px">
										為了確保負責輔導本專案的專案經理可以聯絡到您，請填寫行動電話。
										</span>
									</div>
								</div>
								<div class="row">
									<div class="col" style="margin-left: 360px">
										<label style="font-size: 20px">&#8718;&#xa0;&#xa0;團隊名稱</label><br>
										<input type="text" name="groupname" required>
										<br>
										<span style="font-size: 12px">
										顯示名稱將會被瀏覽者視為此計畫的執行團隊。此名稱為您目前的會員名稱<br>，建議更新為適合此專案的個人或團隊名稱。
										</span>
									</div>
								</div>
							</div>

							<div align="center" style="margin-top: 20px;">
								<button class="btn btn-warning" type="reset"><i class="fa fa-trash-o"></i>刪除專案</button>
							 	<button type="submit" class="btn btn-danger" name="final">
							 		提交專案
							 	</button>
							 </div>  
						</form>
					</div>
				</section>
				
		<?php include('footer.php')
		?>

	</body>
</html>					 
			