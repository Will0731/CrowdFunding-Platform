
<!DOCTYPE html>
<html>
	<head>
		<title>project_summary</title>
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
			input[type="text"],input[type="number"],input[type="date"],.projectcss{
		    width: 100%;
		    padding: 12px 20px;
		    margin: 8px 0;
		    box-sizing: border-box;
		    border: 3px solid #ccc;
		    -webkit-transition: 0.5s;
		    transition: 0.5s;
		    outline: none;
			}

			input[type="text"]:focus,input[type="number"]:focus,input[type="date"]:focus{
			    border: 3px solid #555;
			}
		</style>
    </head>
	<body>
	<?php
		include('nav.php');
	?>		
			<section style="font-family: '微軟正黑體'">
				<div class="container btn-group" style="text-align: center;margin-top: 20px;position: relative;left: 189.6px">	
					<div style="font-size:20px;" class="col-md-3 btn btn-danger active">專案大綱</div>
						<div style="font-size:20px;" class="col-md-3 btn btn-default active">專案內容</div>
						<div style="font-size:20px;" class="col-md-3 btn btn-default active">回饋設定</div>
						<div style="font-size:20px;" class="col-md-3 btn btn-default active">提案資料</div>
				</div>
				</section>
				<section style="font-family: '微軟正黑體'">
					<div>
						<div align="center" style="margin-top: 10px">
							<p>在這個區塊您將團寫專案內容中最吸引人募資影片、封面圖片和專案說明，以及最核心的資訊：募資目標及時程。</p>
						</div>
						<form action="summary.php" method="post" enctype="multipart/form-data">
							<div class="container" style="margin-bottom:20px;">
								<div class="col-md-6">
									<div>
										<label style="font-size: 24px">&#8718;&#xa0;&#xa0;專案名稱</label><br>
										<div class="projectcss">
											<?php
											$sql = "SELECT * FROM project WHERE pid = '$pid'";
											$result = mysqli_query($connect,$sql);
											$row = mysqli_fetch_array($result);
											echo '<span>'.$row['pname'].'
											</span>';
											?>
										</div>
									</div>
									<div>
										<label style="font-size: 24px">&#8718;&#xa0;&#xa0;內容描述</label><br>
										<textarea placeholder="簡短描述專案內容，來吸引瀏覽者在fundonate首頁上點擊你的專案" name="summary" required></textarea>
									</div>
									<div>
										<label style="font-size: 24px">&#8718;&#xa0;&#xa0;專案類別</label><br>
										<div class="projectcss">
											<?php
											$sql = "SELECT * FROM project WHERE pid = '$pid'";
											$result = mysqli_query($connect,$sql);
											$row = mysqli_fetch_array($result);
											echo '<span>'.$row['category'].'
											</span>';
											?>
										</div>
									</div>
									<div>
										<label style="font-size: 24px">&#8718;&#xa0;&#xa0;募資目標</label><br>
										<input type="number" name="moneygoal" min="5000" step="1000" required>
										<span style="font-size: 12px">&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;募資目標金額最低為 $5,000 元。設定完成本次專案所需的最低金額，才是合理的募資目標。</span>
									</div>
								</div>
								<div class="col-md-6">
									<div>
										<label style="font-size: 24px">&#8718;&#xa0;&#xa0;專案封面&#xa0;&#xa0;<!-- <div style="margin-left: auto;margin-right: auto"> -->
												<label class="btn btn-info">
													<input id="upload_img" style="display:none;" type="file" name="pic" onchange="readURL(this)" targetID="preview_progressbarTW_img" accept="image/gif, image/jpeg, image/png"/>
													<i class="fa fa-photo"></i> 上傳圖片
												</label>
										</label><br>
										<img  width="400" height="400" style="border: 3px solid #ccc;margin-top: 5px" id="preview_progressbarTW_img" src="#"><br>
											
									</div>
					
								</div>
								<div class="col-md-12">
									<div>
										<label style="font-size: 24px">&#8718;&#xa0;&#xa0;募資開始與結束時間</label><br>
										<div>
										<input type=date id=start required style="width: 540px" name="start"> 
										<input type=date id=end required style="width: 540px" name="end">
										</div>
									</div>
								</div>
							</div>
							<div class="container">
							            <button type="submit" class="btn btn-danger btn-lg  text-center" style="margin-left: 532px;" name="next1">下一步
							            </button>
							            <div style="height: 50px"></div>

							    </div>
						</form>
					</div>
				</section>
	<?php
		include('footer.php');
	?>	
	</body>
	<script type="text/javascript">
		var start = document.getElementById('start');
		var end = document.getElementById('end');

		start.addEventListener('change', function() {	
    	if (start.value)
        end.min = start.value;
			}, false);
		end.addEventLiseter('change', function() {
    	if (end.value)
        	start.max = end.value;}, false);

	</script>
	<script type="text/javascript">
		var date = new Date();

		var day = date.getDate();
		var month = date.getMonth() + 1;
		var year = date.getFullYear();

		if (month < 10) month = "0" + month;
		if (day < 10) day = "0" + day;

		var today = year + "-" + month + "-" + day;


		document.getElementById('start').value = today;
		document.getElementById('end').value = today;
	</script>
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
			