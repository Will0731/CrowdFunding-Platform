<!DOCTYPE html>
<html lang="en">

  <title>贊助紀錄</title>
  <head>
         <style>
          
          table {
            border-collapse: collapse;
            width: 80%;
            margin-left: 110px;
          }

          th, td {
              padding: 8px;
              text-align: left;
              border-bottom: 1px solid #ddd;
          }

          tr:hover {background-color:#f5f5f5;}

          .gcolor{
            color: gray;
          }

      </style>


</head>

<meta charset="utf-8">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style type="text/css"> 



input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 100%;
}

</style>
<body>


         <?php
            include('nav.php')
        ?>

    <div class="container" style="margin-bottom: 100px;">


        <br><br>

      <h2 style="font-family: system-ui; font-size: 30px; margin-left: 450px; margin-bottom: 35px;"><b>贊助紀錄</b></h2>

      <p style="text-align: center; font-size: 15px; color: gray; margin-left: 120x; margin-bottom: 35px;"><b>在專案結束之前，您都可修改你的回饋寄送資訊，ATM 轉帳與超商付款請於繳費期限內繳款。逾期後訂單會自動消失。</b> </p>
      
      <table width="100%;">

        <!--贊助紀錄attribute-->
        <thead>
          <tr class="title">
            <th class="gcolor">贊助案件</th>
            <th class="gcolor">金額</th>
            <th class="gcolor">回饋</th>
            <th class="gcolor">金流編號</th>
            <th class="gcolor">訂單時間</th>
          </tr>
        </thead>

        <!---贊助紀錄tuple-->

        <tbody>
          <?php 
          $sql="SELECT * FROM feedback NATURAL JOIN feedback_setting NATURAL JOIN project NATURAL JOIN sponsor_order WHERE user_id='".$_SESSION['u_id']."'";
          $result=mysqli_query($connect,$sql);
          while ($row = mysqli_fetch_array($result, MYSQL_BOTH)){
          echo '<tr>
            <td>  
                '.$row['pname'].'
            </td>
            <td>
                <p>'.$row['order_money'].'元</p>
            </td> 
            <td>  
               <p>'.$row['f_content'].'</p>
            </td>
            <td> 
               <p>'.$row['orderNo'].'</p>
            </td>
            <td>
               <p>'.$row['order_time'].'</p>
            </td>
          </tr>';
          }
          ?>  

        </tbody>
        
        <tfoot>
  
        </tfoot>
      </table>

      
      




    </div>

 
         <?php
            include('footer.php')
        ?>




   

</body>
</html>