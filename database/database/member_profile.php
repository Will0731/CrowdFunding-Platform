<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!-- Title -->
        <title>會員資料</title>


        <!-- Core Stylesheet -->
        <link href="css/style_member.css" rel="stylesheet">

        <!-- Responsive CSS -->
        <link href="css/responsive.css" rel="stylesheet">
</head>

<body>

          <?php
            include('nav.php');
          ?>

       
    <!-- ***** Contact Area Start ***** -->
    <section class="contact-area section_padding_100">
        <div class="container">
            <div class="row">
                <!-- Contact Form Area -->
                <form action="member_info.php" method="POST" enctype="multipart/form-data">
                    <div class="col-md-6">
                        <div class="contact-form-area">
                            <h2>∎會員資料</h2>
                                <div class="row">
                                    <div class="col-md-6">
                                         <?php
                                            $user_id = $_SESSION['u_id'];
                                            $sql = "SELECT m_name FROM members WHERE m_id = $user_id";
                                            $result=mysqli_query($connect,$sql);
                                            $row=mysqli_fetch_assoc($result);
                                             if($row['m_name']==NULL){
                                                 $sql = "SELECT user_name FROM users WHERE user_id = $user_id";
                                                 $result=mysqli_query($connect,$sql);
                                                 $row=mysqli_fetch_assoc($result);
                                                 echo "<input type='text' class='form-control' name='name' value='".$row['user_name']."' required='' placeholder='請輸入名字'>";
                                         }
                                         else{
                                            echo "<input type='text' class='form-control' name='name' value='".$row['m_name']."' required='' placeholder='請輸入名字'>";
                                         }
                                            //讓php輸出完整的元件,並符合xhtml規範
                                         ?>    
                                        
                                    </div>
                                        <div class="col-md-6">
                                             <?php
                                             $user_id = $_SESSION['u_id'];
                                             $sql = "SELECT user_email FROM users WHERE user_id = $user_id";
                                             $result=mysqli_query($connect,$sql);
                                             $row=mysqli_fetch_assoc($result);
                                                 echo "<div class='form-control'><span style='position:relative;top:10px'>".$row['user_email']."</span></div>";
                                        ?>    
                                        </div>
                                    <div class="col-md-6">
                                        <?php
                                         $user_id = $_SESSION['u_id'];
                                             $sql = "SELECT m_sex FROM members WHERE m_id = $user_id";
                                             $result=mysqli_query($connect,$sql);
                                             $row=mysqli_fetch_assoc($result);
                                        if($row["m_sex"]!=null){  ?>
                                            <?php echo '<select name="sex" class="form-control">
                                            <datalist>
                                                
                                                <option value="'.$row['m_sex'].'" selected>'.$row['m_sex'].'</option>
                                                <option value="男性">男性</option>
                                                <option value="女性">女性</option>
                                                <option value="其他">其他</option>
                                            </datalist>      
                                        </select>';}
                                        else{
                                            echo '<select name="sex" class="form-control">
                                            <datalist>
                                                <option value="選擇" selected>請選擇</option>
                                                <option value="男性">男性</option>
                                                <option value="女性">女性</option>
                                                <option value="其他">其他</option>
                                            </datalist>      
                                        </select>';
                                        }
                                        ?>
                                    </div>
                                        <div class="col-md-6">
                                             <?php
                                             $user_id = $_SESSION['u_id'];
                                             $sql = "SELECT m_bth FROM members WHERE m_id = $user_id";
                                             $result=mysqli_query($connect,$sql);
                                             $row=mysqli_fetch_assoc($result);
                                             echo "<input type='date' class='form-control'  min='1950-01-01' max='2030-12-31' name='birthday' value='".$row['m_bth']."'>";
                                            ?>
                                        </div>
                                         <div class="col-md-12">
                                           <?php
                                                $sql = "SELECT user_phone FROM users WHERE user_id = $user_id";
                                                $result=mysqli_query($connect,$sql);
                                                $row=mysqli_fetch_assoc($result);
                                                echo "<input type='text' class='form-control' name='phone' value='".$row['user_phone']."'  placeholder='請輸入電話'>";
                                        ?>    
                                        </div>
                                        <div class="col-md-12">
                                            <?php
                                             $user_id = $_SESSION['u_id'];
                                             $sql = "SELECT m_aboutme FROM members WHERE m_id = $user_id";
                                             $result=mysqli_query($connect,$sql);
                                             $row=mysqli_fetch_assoc($result);
                                        echo '<textarea name="message" class="form-control"  style = "width:555px;height:200px;resize:none"  placeholder="介紹自己吧!">'.$row["m_aboutme"].'</textarea>';
                                        ?>
                                        </div>
                                </div>
                        </div>
                    </div>
                <!-- Contact Information -->
                <div class="col-md-12 col-md-6">
                    <div class="contact-information">
                        <div class="single-info" style="position: relative;top: 40px;">

                             <label style="font-size: 20px;">個人頭像
                                    <label  class="btn" style="background-color:#00AA00; color: white;">
                                         <input id="upload_img" style="display:none;" type="file" name="selfpic"  onchange="readURL(this)" targetID="preview_progressbarTW_img" accept="image/gif, image/jpeg, image/png"/>
                                         <i class="fa fa-photo" style="color:white;"></i> 上傳圖片
                                    </label>
                                    <br>
                                    <?php
                                             $user_id = $_SESSION['u_id'];
                                             $sql = "SELECT m_pic FROM members WHERE m_id = $user_id";
                                             $result=mysqli_query($connect,$sql);
                                             $row=mysqli_fetch_array($result);
                                             $_SESSION['m_pic'] = $row['m_pic'];
                                             $user_pic = $_SESSION['m_pic'];
                                    echo '<img height="300" width="300" style="border: 3px solid #ccc;margin-top: 35px" id="preview_progressbarTW_img" src="data:image/jpeg;base64,'.base64_encode($user_pic).'">';
                                     ?>
                        </div>
                      <!--   <div>
                            <div class="single-info">
                                <p>
                                    <i class="fa fa-map"></i>
                                    <span>高雄市鼓山區蓮海路70號</span>   
                                </p>
                            </div>
                            <div class="single-info">
                                <p>
                                    <i class="fa fa-phone"></i>
                                    <span>0978-866-321</span>                            
                                </p>
                            </div>
                            <div class="single-info">
                                <p>
                                    <i class="fa fa-envelope"></i>
                                    <span>Milothemes@gmail.com</span>  
                                </p>
                            </div>
                        </div>     -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div align="center" style="margin-bottom: 50px">
                        <button type="submit" class="btn  btn-lg  text-center" style="background-color: #FF8800;color: white" name="store">儲存檔案</button>
     </div>
                         </form>
    <!-- ***** Contact Area End ***** -->


         <?php
            include('footer.php')
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