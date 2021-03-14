<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>回饋寄送資訊</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>
		<link rel="stylesheet" type="text/css" href="css/main2.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    </head>
    <style>
    	.dollardiv{
        	text-align: center;
        	margin-top: 50px;
    	}
    	.dollarfont{
			font-size: 20px;
			font-family:微軟正黑體;
    	}
    	.receptdata{
			text-align: center;
			margin-left: 80px;
			margin-top: 16px;
			font-size: 20px;
			font-family:微軟正黑體;
    	}
    	.card-body {
			margin-top: 20px;
			margin-right: 20px;
			margin-left: 20px;
			margin-bottom: 20px;
		}
    </style>
    <?php
      // 判斷是否有指定贊助
      if(isset($_GET["select_send"])){
        $_POST["select_send"]=$_GET["select_send"];
      }
    ?>
	<body>
		<!-- HEADER -->
	<?php
		include('nav.php')
	?>
  <?php
      // 確認目前使用者選定要看的贊助資訊
    if(!empty($_POST["select_send"])) {
      // 使用者選定資訊
      // echo $_POST["select_send"];
      $select_send = $_POST["select_send"];
    }
  ?>       
  <?php
    $sql="SELECT * FROM project NATURAL JOIN p_summary NATURAL JOIN p_content NATURAL JOIN feedback_setting NATURAL JOIN proposer_info where fNo='$select_send';";
    $result=mysqli_query($connect,$sql);
    $row = mysqli_fetch_array($result);
    $_SESSION['fNo']=$row['fNo'];
    $total=$row['f_amount']+0;
    $_SESSION['total']=$total;
    echo '<div class="section" style="background-color: #f5f5f0;">
			<!-- container -->
			<div class="container" style="margin-top:40px; margin-bottom: 40px;">
				<div>
					<h3 class="title" style="font-family:微軟正黑體; text-align: center;"><a href="projectpage.php?select_project='.$row["pid"].'" style="cursor: pointer;">'.$row['pname'].'</a></h3>
				</div>
                <p style="font-family:微軟正黑體; text-align: center;">
                	<a href="#">'.$row['category'].'</a> | 由 <a href="#">'.$row['proposer_name'].'</a> 提案 
                </p>
                <br>
                <br>
                <div class="col-sm-8">
                	<p style="color: blue; font-weight: bold;">| 贊助總金額</p>
                	<div style="background-color: white; height: 160px; margin-top: 10px;">
                    <div class="col-sm-3 dollardiv">
                			<p>贊助金額</p>
                			<span class="dollarfont"><i class="fa fa-dollar" style="font-size:20px"></i>'.$row['f_amount'].'</span>
                		</div>
                		<div class="col-sm-1 dollardiv">
                			<span style="font-size: 40px; font-family:微軟正黑體;">+</span>
                		</div>
                		<div class="col-sm-3 dollardiv">
                			<p>運費</p>
                			<span class="dollarfont"><i class="fa fa-dollar" style="font-size:20px"></i>0</span>
                		</div>
                		<div class="col-sm-1 dollardiv">
                			<span style="font-size: 40px; font-family:微軟正黑體;">=</span>
                		</div>
                		<div class="col-sm-4 dollardiv">
                			<p>總金額</p>
                			<span class="dollarfont""><i class="fa fa-dollar" style="font-size:20px"></i>'.$total.'</span>
                		</div>';
                  ?>
                	</div>
                	<br>
                	<br>
                	<span style="color: blue; font-weight: bold;">| 付款方式</span>
                	<br>
                	<br>
            <div>
              <form action="feedback_sending.php" method="POST">
                <div style="font-weight: bold; font-size: 16px;">
                	<div class="col-sm-4">
                		<input type="radio" name="howtopay" value="信用卡" checked> 信用卡
                	</div>
         					<div class="col-sm-4">
         						<input type="radio" name="howtopay" value="ATM"> ATM
         					</div>
            			<div class="col-sm-4">
            				<input type="radio" name="howtopay" value="超商付款"> 超商付款
            			</div>
    					  </div>
            </div>
					        <br>
                	<br>
                	<span style="color: blue; font-weight: bold;">| 寄送資訊</span>
                  <br>
                  <br>
                  <div style="background-color: white;">
          <table style="width: 100%; border-style: groove; border-width: 1px;">
                  <tr>
                  <td style="text-align: center; border-style: groove; border-width: 1px;">收 件 人 姓 名</td>
                  <td><input type="text" class="form-control" aria-label="Default" name="receptname" placeholder="收件人姓名" autofocus></td>
                  </tr>
                  <tr>
                  <td style="text-align: center; border-style: groove; border-width: 1px;">收 件 地 址</td>
                  <td><input type="text" class="form-control" aria-label="Default" name="receptaddress" placeholder="收件地址"></td>
                  </tr>
                  <tr>
                  <td style="text-align: center; border-style: groove; border-width: 1px;">連 絡 電 話</td>
                  <td><input type="text" class="form-control" aria-label="Default" name="receptphone" placeholder="連絡電話"></td>
                  </tr>
                  <tr>
                  <td style="text-align: center; border-style: groove; border-width: 1px;">聯 絡 信 箱</td>
                  <td><input type="email" class="form-control" aria-label="Default" name="receptnemail" placeholder="聯絡信箱"></td> 
                  </tr>
                  <tr>
                  <td style="text-align: center; border-style: groove; border-width: 1px;">備 註 欄 位</td>
                  <td><input type="text" class="form-control" aria-label="Default" name="receptps" placeholder="備註欄位"></td>
                  </tr>
					</table>
                	</div>
					<br>
						<div class="input-group mb-3">
 							<div class="input-group-prepend">
    							<div class="input-group-text">
      								<input type="checkbox" aria-label="Checkbox for following text input" name="check">
      								<label style="font-weight: bold;">匿名贊助<span style="margin-left: 20px; font-weight: lighter;margin-top:  color: gray;">勾選後您的姓名將不會出現在支持者區塊及公開的會員資料中</span></label>
    							</div>
  							</div>
						</div>
						<br>
						<div>
							<button type="submit" class="btn btn-danger btn-block" name="sending_info">進 行 付 款</button>
						</div>
            </form> 
            </div>
            <!-- sponsor info card -->
            	<div class="col-sm-4">
                <p style="color: blue; font-weight: bold;">| 贊助項目</p>
                <div class="card" style="background-color: white; border-style: groove; border-width: 1px;">
                  <?php echo'
    						  <img class="card-img-top" alt="Image" src="data:image/jpeg;base64,'.base64_encode($row['f_pic']).'" height = "350" width = "350">
    						  <div class="card-body">
      						  <p class="card-text">'.$row['f_content'].'</p>
    						  </div>';
                  ?>
					      </div>
              </div> 

            </div>
        </div>
    <?php
        include('footer.php')
    ?>

	</body>
</html>