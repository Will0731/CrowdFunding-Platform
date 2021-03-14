<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
       
      
        <title>會員專區</title>

 
        <!-- <link href="css/bootstrap123.min.css" rel="stylesheet"> -->
        
  
        
        <link href="css/style123.css" rel="stylesheet">
    


    </head>
    <body>


        <?php
            include('nav.php');
        ?>

    
        
        <!--================Categories Banner Area =================-->
        <section class="solid_banner_area">
            <div class="container">
                <div class="solid_banner_inner">
                    <h3>會員登入</h3>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="login_page.php">Login</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Categories Banner Area =================-->
        
        <!--================login Area =================-->
        <section class="login_area p_100">
            <div class="container">
                <div class="login_inner">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="login_title">
                                <h2 style="font-size: 30px; font-weight: bolder;">會員帳號登入</h2>
                                <p>登入您的帳戶以發掘美好的新事物!</p>
                            </div>
                            <form class="login_form row" action="login.php" method="post">
                                <div class="col-lg-12 form-group">
                                    <input class="form-control" type="text" placeholder="Email" name="account" required>
                                </div>
                                <div class="col-lg-12 form-group">
                                    <input class="form-control" type="password" placeholder="password" name="psw" required>
                                </div>
                                <div class="col-lg-12 form-group">
                                    <div class="creat_account">
                                        <input type="checkbox" id="f-option" name="selector">
                                        <label for="f-option" style="font-size: 16px;">記得我</label>
                                    </div>
                                    <h4><a href="#" style="color: red;">忘記密碼 ?</a></h4>
                                </div>
                                <div class="col-lg-12 form-group" style="padding-top: 30px;">
                                    <button type="submit" value="submit" class="btn subs_btn" style="width: 350px; height: 60px; padding-bottom: 5px;" name="login">登入</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-8">
                            <div class="login_title">
                                <h2 style="font-size: 30px; font-weight: bolder;">註冊新帳戶</h2>
                                <p>我們衷心期盼，熱愛生活的你們，加入我們</p>
                            </div>
                            <form class="login_form row" action="signup.php" method="post">
                                <div class="col-lg-6 form-group">
                                    <input class="form-control" type="email" placeholder="Email (必填)" required="" name="account">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <input class="form-control" type="text" placeholder="User Name (必填)" required="" name="name">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <input class="form-control" type="password" placeholder="Password (必填)" required="" name="psw">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <input class="form-control" type="text" placeholder="Cellphone" name="phone">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <input class="form-control" type="password" placeholder="Re-Password (必填)" required="" name="repsw">
                                </div>
                                <div class="col-lg-6 form-group" style="padding-top: 20px; margin-right: 100px;">
                                    <button type="submit" value="submit" class="btn subs_btn" style="width: 365px; height: 60px; padding-bottom: 5px;" name="signup">註冊帳戶</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>  
       
   
             <?php
            include('footer.php')
        ?>

        
        
        
        

    </body>
</html>