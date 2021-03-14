<!DOCTYPE html>
<html>
	<head>

        <title>贊助金額選擇</title>
        <link href="elegant-icon/style.css" rel="stylesheet">
        <link href="css/reward_page.css" rel="stylesheet">
        <style type="text/css">
            .test{
                margin-right: 40px;
            }
        </style>
    </head>
    <?php
      // 判斷是否有指定贊助
      if(isset($_GET["select_sponsor"])){
        $_POST["select_sponsor"]=$_GET["select_sponsor"];
      }
    ?>
	<body>
		<?php include 'nav.php';?>
        <?php
           // 確認目前使用者選定要看的贊助資訊
          if(!empty($_POST["select_sponsor"])) {
            // 使用者選定資訊
            // echo $_POST["select_sponsor"];
            $select_sponsor = $_POST["select_sponsor"];
          }
        ?>
        <?php
            $sql="SELECT * FROM project NATURAL JOIN p_summary NATURAL JOIN p_content NATURAL JOIN feedback_setting NATURAL JOIN proposer_info where pid='$select_sponsor';";
            $result=mysqli_query($connect,$sql);
            $row = mysqli_fetch_array($result);
		echo '<div class="container" style="margin-top:70px">
		<div>
			<h3 class="title" style="font-family:微軟正黑體; text-align: center;"><a href="projectpage.php?select_project='.$row["pid"].'" style="cursor: pointer;">'.$row['pname'].'</a></h3>
		</div>
            <p style="font-family:微軟正黑體; text-align: center;">
               <a href="#">'.$row['category'].'</a> | 由 <a href="#">'.$row['proposer_name'].'</a> 提案 
            </p>
        </div>';
        ?>

<section class="our_latest_product" style="">
            <div class="container">
                <div class="s_m_title" style="width: 50%;margin-left:32%;">
                    <h2>選擇您想要贊助的金額與回饋</h2>
                </div>
                <div class="l_product_slider" style="padding: 0; margin-left: 32%;">
                    <div class="item">
                        <?php
                        $sql="SELECT * FROM project NATURAL JOIN p_summary NATURAL JOIN p_content NATURAL JOIN feedback_setting NATURAL JOIN proposer_info where pid='$select_sponsor';";
                        $result=mysqli_query($connect,$sql);
                        $row = mysqli_fetch_array($result);
                        echo '<div class="l_product_item">
                            <div class="l_p_img">
                                <img alt="Image" src="data:image/jpeg;base64,'.base64_encode($row['f_pic']).'" style="width: 100%;">
                            </div>
                            <div class="l_p_text">
                                <ul>
                                    <div class="test">
                                        <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                        <li><a class="add_cart_btn" href="sponsor_feedback.php?select_send='.$row["fNo"].'" style="text-decoration: none;">贊助</a></li>
                                        <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                                    </div>
                                </ul>
                                <h4>'.$row['f_content'].'</h4>
                                <h5>$'.$row['f_amount'].'</h5>
                            </div>
                        </div>';
                        ?>
                        <!-- <div class="l_product_item">
                            <div class="l_p_img">
                                <img src="" alt="">
                            </div>
                            <div class="l_p_text">
                                <ul>
                                    <div class="test">
                                        <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                        <li><a class="add_cart_btn" href="sponsor_feedback" style="text-decoration: none;">贊助</a></li>
                                        <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                                    </div>
                                </ul>
                                <h4>純粹贊助</h4>
                                <h5>$100</h5>
                            </div>
                        </div>
                        <div class="l_product_item">
                            <div class="l_p_img">
                                <img src="" alt="">
                            </div>
                            <div class="l_p_text">
                                <ul>
                                    <div class="test">
                                        <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                        <li><a class="add_cart_btn" href="sponsor_feedback" style="text-decoration: none;">贊助</a></li>
                                        <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                                    </div>
                                </ul>
                                <h4>純粹贊助</h4>
                                <h5>$300</h5>
                            </div>
                        </div>
                        <div class="l_product_item">
                            <div class="l_p_img">
                                <img src="" alt="">
                            </div>
                            <div class="l_p_text">
                                <ul>
                                    <div class="test">
                                        <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                        <li><a class="add_cart_btn" href="sponsor_feedback" style="text-decoration: none;">贊助</a></li>
                                        <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                                    </div>
                                </ul>
                                <h4>純粹贊助</h4>
                                <h5>$500</h5>
                            </div>
                        </div>
                        <div class="l_product_item">
                            <div class="l_p_img">
                                <img src="" alt="">
                            </div>
                            <div class="l_p_text">
                                <ul>
                                    <div class="test">
                                        <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                        <li><a class="add_cart_btn" href="sponsor_feedback" style="text-decoration: none;">贊助</a></li>
                                        <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                                    </div>
                                </ul>
                                <h4>純粹贊助</h4>
                                <h5>$1000</h5>
                            </div>
                        </div>
                        <div class="l_product_item">
                            <div class="l_p_img">
                                <img src="" alt="">
                            </div>
                            <div class="l_p_text">
                                <ul>
                                    <div class="test">
                                        <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                        <li><a class="add_cart_btn" href="sponsor_feedback" style="text-decoration: none;">贊助</a></li>
                                        <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                                    </div>
                                </ul>
                                <h4>純粹贊助</h4>
                                <h5>$5000</h5>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>		


		<?php include 'footer.php';?>

	</body>
</html>