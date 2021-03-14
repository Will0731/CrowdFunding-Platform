<!DOCTYPE html>
<html>
	<head>
		<title>project_content</title>
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
			input[type="text"],input[type="number"]{
		    width: 100%;
		    padding: 12px 20px;
		    margin: 8px 0;
		    box-sizing: border-box;
		    border: 3px solid #ccc;
		    -webkit-transition: 0.5s;
		    transition: 0.5s;
		    outline: none;
			}

			input[type="text"]:focus,input[type="number"]:focus{
			    border: 3px solid #555;
			}
		</style>
		<?php
		include('nav.php');
		?>
    </head>
	<body>
				<section style="font-family: '微軟正黑體'">
				<div class="container btn-group" style="text-align: center;margin-top: 20px;position: relative;left: 189.6px">	
					<div style="font-size:20px;" class="col-md-3 btn btn-default active">專案大綱</div>
						<div style="font-size:20px;" class="col-md-3 btn btn-warning active">專案內容</div>
						<div style="font-size:20px;" class="col-md-3 btn btn-default active">回饋設定</div>
						<div style="font-size:20px;" class="col-md-3 btn btn-default active">提案資料</div>
				</div>
				</section>
				<form action="content.php" method="POST">
				<section style="font-family: '微軟正黑體'">



					<div>
						<div align="center" style="margin-top: 10px">
							<p>在這個區塊您將填寫專案的故事和執行方式，文案在專案內容中扮演詳盡說明細節的角色。</p>
						</div>
						<div align="center">
							<div>
								<label style="font-size: 24px;margin-right: 789.54px;">&#8718;&#xa0;&#xa0;專案內容</label><br>
								<textarea placeholder="請輸入專案內容" style="width: 915px;margin-top: 5px;height: 300px;" name="content" required></textarea>
							<br>
								<p style="margin-right: 60px">
								利用文字，將您的計畫詳細清楚的述說給大家聽。
								</p>
							</div>
						</div>
						<div class= "container" align="center">
							<div>
								<label style="font-size: 24px;margin-right: 764.5px;">&#8718;&#xa0;&#xa0;風險與變數</label><br>
								<textarea placeholder="請輸入風險與變數" style="width: 915px;margin-top: 5px;" name="risk"></textarea>
								<p style="text-indent: 15em;margin-left: -210px">
								描述執行計畫時可能遇到的風險及變數，條列說明並提供預備方案，例如活動雨備方案、回饋生產或專案執行可能發生的不可<br>
								抗力因素及其因應措施等，透過完整的說明可以大大減少支持者的疑慮並同時增加信任感。 
								</p>
						</div>
					</div>
				</section>
				<div style="margin-left: 284px;padding: 20px">
					<button type="button" style=" border: 2px solid #ccc;
			  		border-radius: 5px;
			  		background-color: transparent;
			  		color: grey;
			  		padding: 14px 28px;
			  		font-size: 16px;
			  		cursor: pointer;">&#43;增加風險與變數</button>
				</div>
				<div class="container">
							            <button type="submit" class="btn btn-danger btn-lg  text-center" style="margin-left: 532px;" name="next2">下一步
							            </button>
							            <div style="height: 50px"></div>

							    </div>
					</form>	
		<?php
			include ('footer.php');
			?>
	</body>
</html>					 
			