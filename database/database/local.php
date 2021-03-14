<!DOCTYPE html>
<html>
<title>explore_在地</title>
<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
<!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

<!-- <link href="/static/fontawesome/fontawesome-all.css" rel="stylesheet"> -->

        <!-- Slick -->
        <link type="text/css" rel="stylesheet" href="css/slick.css"/>
        <link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

        <link type="text/css" rel="stylesheet" href="css/index.css"/>
    </head>
    <style>
    .navdrop{
    font-size: 14px;
    font-family: 微軟正黑體;
    width: 150px;
    }
    li a{
      text-decoration: none;
    }
    ul{
        list-style-type: none;
        color:  #FF7F50;
    }
    a:hover{
        
        text-decoration: none;
    }
/*    .highlight>li>a:hover, .highlight>li>a:focus {
        color: #D10024;
        background-color: transparent;
    }
    .highlight>li>a:after{
        content: "";
        display: block;
        width: 0%;
        height: 2px;
        background-color: #D10024;
        -webkit-transition: 0.2s all;
        transition: 0.2s all;
    }
    .highlight>li>a:hover:after{
        width: 100%;
    }*/
    </style>
    <body>
    <?php
        include('nav.php');
        include('categorybar.php');
    ?>

    <div class="section" style="margin-top: 40px;">
        <div class="container">
            <span style="font-size: 40px; font-family: 微軟正黑體; font-weight: bold;">|在地</span>
        </div>        
    </div>

    <!-- SECTION -->
        <div class="section" style="margin-bottom: 60px;">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">

                    <!-- section title -->
                    <div class="col-md-12">
                        <div class="section-title">
                            <h3 class="title">最新項目</h3>
                        </div>
                    </div>
                    <!-- /section title -->

                    <!-- Products tab & slick -->
                    <div class="col-md-12">
                        <div class="row">
                            <div class="products-tabs">
                                <!-- tab -->
                                <div id="tab1" class="tab-pane active">
                                    <div class="products-slick" data-nav="#slick-nav-1">

                                        <!-- product -->
                                        <?php 
                                        $sql="SELECT pid FROM project NATURAL JOIN p_summary NATURAL JOIN p_content NATURAL JOIN feedback_setting NATURAL JOIN proposer_info WHERE category='在地';";
                                        $result=mysqli_query($connect,$sql);

                                        while ($project = mysqli_fetch_array($result, MYSQL_BOTH)){
                                            
                                            
                                            $sql1="SELECT * FROM project NATURAL JOIN p_summary NATURAL JOIN p_content NATURAL JOIN feedback_setting NATURAL JOIN proposer_info where pid='" .$project['pid']. "';";
                                            $result1=mysqli_query($connect,$sql1);
                                            $row = mysqli_fetch_array($result1);
                                            date_default_timezone_set('Asia/Taipei');
                                            $datetime= date("Y/m/d");
                                            $today = strtotime($datetime);
                                            $enddate = strtotime($row['p_enddate']);
                                            $diff = ($enddate - $today) / 86400;

                                            $sql2="SELECT SUM(order_money) FROM project NATURAL JOIN sponsor_order WHERE pid='" .$project['pid']."'";
                                            $result2=mysqli_query($connect,$sql2);
                                            $sum = mysqli_fetch_array($result2);
                                            $sql3="SELECT money_goal FROM project NATURAL JOIN p_summary WHERE pid='" .$project['pid']."'";
                                            $result3=mysqli_query($connect,$sql3);
                                            $goal=mysqli_fetch_array($result3);
                                            if($sum['SUM(order_money)']=="NA"){
                                                $sum['SUM(order_money)']=0;
                                            }
                                            $rate=($sum['SUM(order_money)']/$goal['money_goal'])*100;
                                            $rate=floor($rate);
                                        echo ' <div class="product">
                                            <a href="projectpage.php?select_project='.$row["pid"].'" style="text-decoration: none;">
                                            <div class="product-img">
                                                <img alt="Image" src="data:image/jpeg;base64,'.base64_encode($row['p_cover']).'">
                                                    <div class="product-label">';
                                                        if($diff<0){
                                                        echo '<span class="new" style="font-size: 14px; font-family: 微軟正黑體;">結束</span>';
                                                        }else{
                                                        echo '<span class="new" style="font-size: 14px; font-family: 微軟正黑體;">還剩'.$diff.'天</span>';
                                                        }
                                                    echo '</div>
                                            </div>
                                            <div class="product-body">
                                                
                                                <h3 class="product-name">'.$row['pname'].'
                                                </h3>
                                                <p class="product-category">'.$row['group_name'].'</p>
                                                
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped active" role="progressbar"
                                                        aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:'.$rate.'%">'.$rate.'%
                                                    </div>
                                                </div>
                                                <div>
                                                    <span style="font-size: 12px; font-weight: bold; color: #ff1a1a;">$'.$row['money_goal'].'</span>
                                                    <span style="font-size: 18px; font-weight: bold;"> | </span>
                                                    <span style="font-size: 12px; font-weight: bold; color: #ff1a1a;">'.$rate.'%</span>
                                                </div>
                                            
                                            </div>
                                            </a>';
                                            if(isset($_SESSION["u_id"]) && $_SESSION["u_id"] != null){
                                            echo '<a href="select_sponsor_money.php?select_sponsor='.$row["pid"].'">';
                                            }else{
                                            echo '<a href="login_page.php">';
                                            }
                                            echo '<div class="add-to-cart">
                                                <button class="add-to-cart-btn" style="font-family: 微軟正黑體" type="button"><i class="fa fa-foursquare"></i>贊  助  專  案</button>
                                            </div>
                                            </a>
                                        </div> ';
                                    }
                                        ?>
                                        <!-- /product -->
                                    </div>
                                    <div id="slick-nav-1" class="products-slick-nav"></div>
                                </div>
                                <!-- /tab -->
                            </div>
                        </div>
                    </div>
                    <!-- Products tab & slick -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /SECTION -->




<?php
        include('footer.php')
    ?>
        <!-- jQuery Plugins -->
        <script src="js/slick.min.js"></script>
    <!--<script src="js/nouislider.min.js"></script>-->
    <!--<script src="js/jquery.zoom.min.js"></script>-->
        <script src="js/main.js"></script>

    </body>
</html>