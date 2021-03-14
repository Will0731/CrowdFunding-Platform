<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	    <!-- 分類 -->
    <section style="background: #ececec;">
        <div class="container">
            <div style="padding-top: 50px;">
                <div class="col-sm-4 col-xs-12" style="margin-bottom: 15px;">
                    <p class="bluequote" style="font-size: 16px; font-weight: bolder; color:#00CED1;">
                        <i class="fas fa-thumbs-up" style="color:#00CED1;"></i>本週動態
                    </p>
                    <br>
                    <?php
                    date_default_timezone_set('Asia/Taipei');
                    $datetime= date("Y/m/d");
                    $sql="SELECT COUNT(pid) FROM proposer_info NATURAL JOIN p_summary WHERE p_startdate='$datetime'";
                    $result=mysqli_query($connect,$sql);
                    $new = mysqli_fetch_array($result);
                    echo '<p class="black small hidden-xs" style="font-weight: bold; font-size: 15px;">'.$new[0].' 件新專案</p>';
                    $sql="SELECT COUNT(pid) FROM proposer_info NATURAL JOIN p_summary WHERE p_enddate>'$datetime'";
                    $result=mysqli_query($connect,$sql);
                    $now = mysqli_fetch_array($result);
                    echo '<p class="black small hidden-xs"  style="font-weight: bold; font-size: 15px;">'.$now[0].' 件案子正在募資</p>';
                    ?>
                </div>
                <div class="highlight">
                <ul class="col-sm-2 col-xs-3" >
                    <li>
                        <a href="design.php" style="color:#FF6347; font-weight: bolder; font-size: 18px;">設計 &nbsp;<span class="newupdate small"></span>
                        </a>
                    </li>
                    <li style="padding-top: 30px;">
                        <a href="music.php" style="color:#FF6347; font-weight: bolder; font-size: 18px;">音樂 &nbsp;
                        </a>
                    </li>
                </ul>

                <ul class="col-sm-2 col-xs-3">
                    <li>
                        <a href="technology.php" style="color:#FF6347; font-weight: bolder; font-size: 18px;">科技 &nbsp;
                        </a>
                    </li>
                    <li style="padding-top: 30px;">
                        <a href="art.php" style="color:#FF6347; font-weight: bolder; font-size: 18px;">藝術 &nbsp;<span class="newupdate small"></span>
                        </a>
                    </li>
                </ul>

                <ul class="col-sm-2 col-xs-3 ">
                    <li>
                        <a href="public.php" style="color:#FF6347; font-weight: bolder; font-size: 18px;">公共 &nbsp;<span class="newupdate small"></span>
                        </a>
                    </li>
                    <li style="padding-top: 30px;">
                        <a href="local.php" style="color:#FF6347; font-weight: bolder; font-size: 18px;">在地 &nbsp;<span class="newupdate small"></span>
                        </a>
                    </li>
                </ul>

                <ul class="col-sm-2 col-xs-3 ">
                    <li>
                        <a href="casual.php" style="color:#FF6347; font-weight: bolder; font-size: 18px;">休閒 &nbsp;
                        </a>
                    </li>
                    <li style="padding-top: 30px;">
                        <a href="sport.php" style="color:#FF6347; font-weight: bolder; font-size: 18px;">運動 &nbsp;
                        </a>
                    </li>
                </ul>
                </div>
            </div>
        </div>
    </section>
</body>
</html>