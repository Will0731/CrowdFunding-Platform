<!DOCTYPE html>
<html>
	<head>
		<title>propose_project</title>
    </head>
	<body>
		<?php
			include('nav.php');
		?>
			
		<!--section-->
				<section>
				<div align="center" style="font-size: 30px;font-family: '微軟正黑體';margin-top: 20px;margin-bottom: -30px">	
					開始提案
					<hr width="200">
				</div>
					<div class="container">
							<div style="padding: 40px;margin-left: 260px;margin-bottom: 30px;">
								<form action="propose.php" method="post">
									<div class="col-md-6">
										<div class="from-group">
							    			<input class="input" type="text" name="pname" placeholder="輸入專案名稱" style="font-family: '微軟正黑體'" required="">
							    		</div>
							    	</div>
							    	<div class="col-md-6">
							    		<div class="form-group">
							       			<div class="default-select" id="default-select" style="font-family: '微軟正黑體'">
												<select class="input-select" name="category" required="">
													<option value="" disabled selected hidden>選擇領域</option>
													<option value="設計">設計</option>
													<option value="音樂">音樂</option>
													<option value="藝術">藝術</option>
													<option value="科技">科技</option>
													<option value="休閒">休閒</option>
													<option value="運動">運動</option>
													<option value="在地">在地</option>
													<option value="公共">公共</option>
												</select>
											</div>
							    		</div>
							 		</div>
							 	</div>
							 <div>
								<h4 align="center" style="font-family: '微軟正黑體'">請確認以下事項，確保您符合 fundonate 提案人的身份</h4>
								<br>
										<div style="margin-left: 250px;font-family: '微軟正黑體'">
										<ul>
											<li style="font-size: 20px">
												&#xa0;&#xa0;已滿18歲是具備完全行為能力的自然人，或是合法登記的法人或團體
												<br>
												<span style="font-size: 16px;padding: 60px" >若提案者為未成年人，應由其法定代理人閱讀、暸解，才可進行提案流程。</span>
											</li>
											<br>
											<li style="font-size: 20px">
												&#xa0;&#xa0;您是具有台灣居住地址、銀行帳戶及國籍的自然人或法人
												<br>
												<span style="font-size: 16px;padding: 60px">目前 fundonate 只限定台灣用戶，國外單位提案必須有台灣分公司或代理人，<br>並且由
												<span>台灣代理人提交專案。</span>
												</span>
											</li>
										</ul>
										<input type="checkbox" value="1" name="agree" style="margin-top: 30px;margin-left: 100px;" required="">
										<span>您已符合以上敘述並同意 fundonate <a href="#" style="font-weight: bolder;">網站使用條款</a> 及 <a href="#" style="font-weight: bolder">提案者合約</a></span>
									</div>
							
						</div>
								<div class="form-group row">
							        <div class="col-md-4" style="padding: 50px;font-family: '微軟正黑體';margin-left: 395px">
								            <button type="submit" class="btn btn-danger btn-lg btn-block text-center" name="begin">開始撰寫專案
								            </button>
							        	</form>
							        </div>
							    </div>
							</form>
						</div>											
					</div>
				</section>					
	<?php
         include('footer.php');
    ?>
	</body>
</html>