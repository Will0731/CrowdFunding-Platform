<!DOCTYPE html>
<html>
	<head>
		<title>FOUNDONATE-訂單</title>
    </head>
    <style>
table{
    width: 100%;
    word-wrap: break-word;
    table-layout: fixed;
}
th{
    height: 30px;
    font-size: 18px;
    border-bottom: groove;
    border-collapse: collapse;
}
td{
    height: 70px;
    width: 196px;
}
    </style>
	<body>

	<?php
		include('nav.php');
	?>

    <div class="section" style="background-color: #e6ffff;">
        <div class="container" style="margin-top: 40px;">
            <p style="text-align: center; font-family: 微軟正黑體; font-weight: bold; font-size: 36px;">我的訂單</p>
        </div>
    </div>
    <?php
    $sql="SELECT pid FROM proposer_info WHERE user_id='".$_SESSION['u_id']."' order by pid DESC";
    $result=mysqli_query($connect,$sql);
    while ($project_id = mysqli_fetch_array($result, MYSQL_BOTH)){

        $sql1="SELECT * FROM project WHERE pid='".$project_id['pid']."'";
        $result1=mysqli_query($connect,$sql1);
        $row1=mysqli_fetch_array($result1);
    echo '<div class="section" style="background-color: #e6ffff;">
        <div class="container">
            <p style="font-family: 微軟正黑體; font-weight: bold; font-size: 24px;">'.$row1['pname'].'</p>
        </div>
    </div>
    <div class="section" style="background-color: #e6ffff;">
        <div class="container" style="margin-bottom: 40px;>
            <div class="col-sm-12">
                <table>
                    <thead>
                        <th>訂單編號</th>
                        <th>會員 Id</th>
                        <th>訂購金額</th>
                        <th>訂購內容</th>
                        <th>訂購時間</th>
                        <th>付款方式</th>
                        
                    </thead>
                    <tbody>';
                    $sql2="SELECT * FROM feedback NATURAL JOIN feedback_setting NATURAL JOIN project NATURAL JOIN sponsor_order WHERE pid='".$project_id['pid']."'";
                    $result2=mysqli_query($connect,$sql2);
                    while ($detail = mysqli_fetch_array($result2, MYSQL_BOTH)){
                        echo '<tr>
                            <td>'.$detail['orderNo'].'</td> 
                            <td>'.$detail['user_id'].'</td>
                            <td>$'.$detail['order_money'].'</td>
                            <td>'.$detail['f_content'].'</td>
                            <td>'.$detail['order_time'].'</td>
                            <td>'.$detail['howtopay'].'</td>
                        </tr>';
                    }
                    echo '</tbody>
                </table>
            </div>
        </div>
    </div>';
    }
    ?>
    <div style="height: 70px;background-color: #e6ffff;"></div>
    <?php
        include('footer.php');
    ?>

	</body>
</html>