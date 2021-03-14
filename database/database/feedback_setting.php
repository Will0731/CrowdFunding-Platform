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
			input[type="text"],input[type="number"],input[type="button"]{
		    width: 100%;
		    padding: 12px 20px;
		    margin: 8px 0;
		    box-sizing: border-box;
		    border: 3px solid #ccc;
		    -webkit-transition: 0.5s;
		    transition: 0.5s;
		    outline: none;
			}

			input[type="text"]:focus,input[type="number"]:focus,input[type="button"]:focus{
			    border: 3px solid #555;
			}
			/*ul{
　　list-style-type:none;
　　width:100%;
　　}
　　ul li{
　　width:80px;
　　float:left;
　　}*/
		</style>
    </head>
	<body>
		<?php include ('nav.php')
		?>	
					<div class="container btn-group" style="text-align: center;margin-top: 20px;position: relative;left: 189.6px">	
						<div style="font-size:20px;" class="col-md-3 btn btn-default active">專案大綱</div>
						<div style="font-size:20px;" class="col-md-3 btn btn-default active">專案內容</div>
						<div style="font-size:20px;" class="col-md-3 btn btn-success active">回饋設定</div>
						<div style="font-size:20px;" class="col-md-3 btn btn-default active">提案資料</div>
					</div>
				<div class="container" style="font-size: 16px;font-weight: bolder;">
					<div>
							<div style="padding:60px 240px;">
							<p>在這個區塊您將制定本次募資專案提供的回饋項目，回饋內容可以十分多元，但是必須清楚寫明回饋金額、內容說明、運費及寄送時間等必要資訊。</p>
							<br>
								<p>開始制定回饋前你應該知道的事：</p>
									<br>
											<li>
												我們應該站在贊助者的角度設定回饋項目：<br>
												清楚列出贊助者會得到什麼，需花費的金額、運費，以及完成回饋所需花的時間。若專案性<br>質並非完成一件商品，可考慮另外設計回饋方式（實體或非實體）。請務必考量到回饋的可<br>行性以及所需時間。
											</li>
											<li>
												好的回饋項目可以讓贊助人感受到：<br>
												(1) 參與感 (2) 情感或精神上的回饋 (3) 價格上的優惠 (4) 自己是獨一無二。
											</li>
											<li>
												好的回饋會讓贊助者在收到回饋項目後很開心，並且分享給更多人。而設計回饋時，除了<br>實體的物品之外，也可以透過舉辦活動或善加利用數位製品，不僅可以降低成本，更可能帶來<br>意想不到的正面效果。
											</li>
							</div>
					</div>	
				</div>
				<div class="container" style="border: 2px solid grey;border-style: dashed; ">
					<form action="feed_back.php" method="POST" enctype="multipart/form-data">
						<div class="row" style="position: relative;left: 30px;padding: 60px;">
							<div class="col-md-6">
								<div>
									<label style="font-size: 16px;">&#8718;&#xa0;&#xa0;回饋金額<span style="font-size: 14px;margin-left: 10px;">最低金額為$100</span></label><br>
									<input type="number" name="feedback_money" min="100" step="100" required>
								</div>
								<div>
									<label style="font-size: 16px">&#8718;&#xa0;&#xa0;內容摘要</label>
									<br>
									<textarea style="width: 494px;margin-top: 5px;height: 335px;" name="feedback_content" required=""></textarea>
									<span>請在此描述這個回饋項目所包含的品項，您也可以為每一個回饋組合創造名稱以利推廣。</span>
								</div>
							</div>
							<div class="col-md-6">
								<div style="position: relative;left: 50px;margin-bottom: 30px">
									<label style="font-size: 16px">&#8718;&#xa0;&#xa0;產品圖片</label><br>
									<!-- <img src="img/90.jpg" width="400" height="400"><br> -->
										<img  width="400" height="400" style="border: 3px solid #ccc;margin-top: 5px" id="preview_progressbarTW_img" src="#"><br>
									<span style="position: relative;left: 50px;top: 5px">請提供 JPEG、PNG 或 BMP 檔，圖片尺寸至少<br> 1024 x 768 px； 並將檔案大小控制在 1MB 以內。</span>
									<br>
									<label class="btn btn-info " style="width: 400px;position: relative;top: 10px" >
													<input id="upload_img" style="display:none;" type="file" name="feedback_pic" onchange="readURL(this)" targetID="preview_progressbarTW_img" accept="image/gif, image/jpeg, image/png"/>
													<i class="fa fa-photo"></i> 上傳圖片
												</label>

								</div>
							</div>
						</div>
				</div>
				<div align="center">
					<input type="button" name="insfk" value="+新增一個回饋" style="width: 40%;border-radius: 10px;font-weight: bolder;">
				</div>
				<div class="container" style="margin-bottom: 10px;">
						<button type="submit" class="btn btn-danger btn-lg  text-center" style="margin-left: 532px;" name="next3">下一步
						</button>
					</div>
				</form>
		<?php include('footer.php')
		?>

	</body>
	<script>

function readURL(input){

  if(input.files && input.files[0]){

    var imageTagID = input.getAttribute("targetID");

    var reader = new FileReader();

    reader.onload = function (e) {

       var img = document.getElementById(imageTagID);

       img.setAttribute("src", e.target.result)

    }

    reader.readAsDataURL(input.files[0]);

  }

}

</script>
</html>					 
			