<!DOCTYPE html>
<html lang="en">

  <title>贊助紀錄</title>
  <head>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <link rel="Shortcut Icon" type="image/x-icon" href="DesignEvo_1.jpg" />
 

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
    <!-- <link rel="stylesheet" type="text/css" href="css/util.css"> -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

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

    <!-- HEADER -->
    <header>
      <!-- TOP HEADER -->
      <div id="top-header">

        <div class="container header-links">
          <div class=" gradient1 trans-0-4">
            <div class="h-full">
              <div class="wrap_header trans-0-3">
                <div>
            
                </div>

              <!-- Menu -->
                <div class="wrap_menu p-l-45 p-l-0-xl">
                  <nav class="menu">
                    <ul class="main_menu">
                      <li>
                        <a href="index.html">Home</a>
                      </li>

                      <li>
                        <a href="menu.html">Menu</a>
                      </li>

                      <li>
                        <a href="reservation.html">Reservation</a>
                      </li>

                      <li>
                        <a href="gallery.html">Gallery</a>
                      </li>

                      <li>
                        <a href="about.html">About</a>
                      </li>

                      <li>
                        <a href="blog.html">Blog</a>
                      </li>

                      <li>
                        <a href="contact.html">Contact</a>
                      </li>
                    </ul>
                  </nav>
                </div>

                <!-- Social -->
                <div class="social flex-w flex-l-m p-r-20">
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
      <!-- /TOP HEADER -->

      <!-- MAIN HEADER -->
      <div id="header">
        <!-- container -->
        <div class="container">
          <!-- row -->
          <div class="row">
            <!-- LOGO -->
            <div class="col-md-3">
              <div class="header-logo">
                <a href="#" class="logo">
                  <img src="./img/logo.png" alt="">

                </a>
              </div>
            
            </div>
            <!-- /LOGO -->

            <!-- SEARCH BAR -->
            <div class="col-md-6">
              <div class="header-search">
                <form>
                  <select class="input-select">
                    <option value="0">All Categories</option>
                    <option value="1">Category 01</option>
                    <option value="1">Category 02</option>
                    <option value="1">Category 03</option>
                    <option value="1">Category 04</option>
                  </select>
                  <input class="input" placeholder="Search here">
                  <button class="search-btn">Search</button>
                </form>
              </div>
            </div>
            <!-- /SEARCH BAR -->

            <!-- ACCOUNT -->
            <div class="col-md-3 clearfix">
              <div class="header-ctn">
                <!-- Wishlist -->
                <div>
                  <a href="#">
                    <i class="fa fa-heart-o"></i>
                    <span>Your Wishlist</span>
                    <div class="qty">2</div>
                  </a>
                </div>
                <!-- /Wishlist -->

                <!-- Cart -->
                <div class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                    <i class="fa fa-shopping-cart" style="cursor: pointer;"></i>
                    <span>Your Cart</span>
                    <div class="qty">3</div>
                  </a>
                  <div class="cart-dropdown">
                    <div class="cart-list">
                      <div class="product-widget">
                        <div class="product-img">
                          <img src="./img/product01.png" alt="">
                        </div>
                        <div class="product-body">
                          <h3 class="product-name"><a href="#">product name goes here</a></h3>
                          <h4 class="product-price"><span class="qty">1x</span>$980.00</h4>
                        </div>
                        <button class="delete"><i class="fa fa-close"></i></button>
                      </div>

                      <div class="product-widget">
                        <div class="product-img">
                          <img src="./img/product02.png" alt="">
                        </div>
                        <div class="product-body">
                          <h3 class="product-name"><a href="#">product name goes here</a></h3>
                          <h4 class="product-price"><span class="qty">3x</span>$980.00</h4>
                        </div>
                        <button class="delete"><i class="fa fa-close"></i></button>
                      </div>
                    </div>
                    <div class="cart-summary">
                      <small>3 Item(s) selected</small>
                      <h5>SUBTOTAL: $2940.00</h5>
                    </div>
                    <div class="cart-btns">
                      <a href="#">View Cart</a>
                      <a href="#">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                </div>
                <!-- /Cart -->

                <!-- Menu Toogle -->
                <div class="menu-toggle">
                  <a href="#">
                    <i class="fa fa-bars"></i>
                    <span>Menu</span>
                  </a>
                </div>
                <!-- /Menu Toogle -->
              </div>
            </div>
            <!-- /ACCOUNT -->
          </div>
          <!-- row -->
        </div>
        <!-- container -->
      </div>
      <!-- /MAIN HEADER -->
    </header>
    <!-- /HEADER -->

    <div class="container">


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
            <th class="gcolor">金流單號</th>
            <th class="gcolor">收到了?</th>
          </tr>
        </thead>

        <!---贊助紀錄tuple-->

        <tbody>
          <tr>
            
            <td>  
                資管之夜
            </td>

            <td>
                <p>1000元</p>
            </td> 

            <td>  
               <p>1桶酒</p>
            </td>

            <td> 
               <p>S321123589631</p>
            </td>

            <td>
               <p>有</p>
            </td>

          
          </tr>  

          <tr>
            
            <td>  
                資管之夜
            </td>

            <td>
                <p>1000元</p>
            </td> 

            <td>  
               <p>1桶酒</p>
            </td>

            <td> 
               <p>S321123589631</p>
            </td>

            <td>
               <p>有</p>
            </td>

          
          </tr> 

                  <tr>
            
            <td>  
                資管之夜
            </td>

            <td>
                <p>1000元</p>
            </td> 

            <td>  
               <p>1桶酒</p>
            </td>

            <td> 
               <p>S321123589631</p>
            </td>

            <td>
               <p>有</p>
            </td>

          
          </tr> 
        </tbody>
        
        <tfoot>
  
        </tfoot>
      </table>

      <br><br><br>

      <br><br><br>


      <br><br><br>
      
      <br><br><br>


      <br><br><br>
      
      <br><br><br>




    </div>

        <!-- FOOTER -->
    <footer id="footer">
      <!-- top footer -->
      <div class="section">
        <!-- container -->
        <div class="container">
          <!-- row -->
          <div class="row">
            <div class="col-md-3 col-xs-6">
              <div class="footer">
                <h3 class="footer-title">關於我們</h3>
                <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>-->
                <ul class="footer-links">
                  <li><a href="#"><i class="fa fa-map-marker"></i>國立中山大學</a></li>
                  <li><a href="#"><i class="fa fa-phone"></i>+886-56-21-77</a></li>
                  <li><a href="#"><i class="fa fa-envelope-o"></i>sychien@mis.nsysu.edu.tw</a></li>
                </ul>
              </div>
            </div>

            <div class="col-md-3 col-xs-6">
              <div class="footer">
                <h3 class="footer-title">協助</h3>
                <ul class="footer-links">
                  <li><a href="#">常見問題</a></li>
                  <li><a href="#">使用手冊</a></li>
                  <li><a href="#">colorlib</a></li>
                </ul>
              </div>
            </div>

            <div class="clearfix visible-xs"></div>

            <div class="col-md-3 col-xs-6">
              <div class="footer">
                <h3 class="footer-title">資訊</h3>
                <ul class="footer-links">
                  <li><a href="#">認識 FUNDONATE</a></li>
                  <li><a href="#">聯絡我們</a></li>
                  <li><a href="#">隱私權政策</a></li>
                  <li><a href="#">網站使用條款</a></li>
                </ul>
              </div>
            </div>

            <div class="col-md-3 col-xs-6">
              <div class="footer">
                <h3 class="footer-title">服務項目</h3>
                <ul class="footer-links">
                  <li><a href="#">我的帳戶</a></li>
                  <li><a href="#">我的收藏清單</a></li>
                  <li><a href="#">登入/註冊</a></li>
                  <li><a href="#">幫助</a></li>
                </ul>
              </div>
            </div>
            <div>
              <p style="text-align: center; font-size: 12px; font-family: 微軟正黑體;">
                FUNDONATE 已採行隱私權聲明，您應參閱該隱私權聲明以充份瞭解本公司如何使用及蒐集資料。
              </p>
            </div>
          </div>
          <!-- /row -->
        </div>
        <!-- /container -->
      </div>
      <!-- /top footer -->
    </footer>
    <!-- /FOOTER -->

    <!-- jQuery Plugins -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/nouislider.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/main.js"></script>





   

</body>
</html>