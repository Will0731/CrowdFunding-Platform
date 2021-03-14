<!DOCTYPE html>
<html>
    <head>
        <title>FOUNDONATE-search</title>
    </head>
    <style>
.information{
    font-size: 16px;
    font-family: 微軟正黑體;
    margin-left: 30px;
    font-weight: bold;
}
    </style>
    <body>
    <?php
        include('nav.php');
    ?>
    <div class="section" style="margin-bottom: 70px;">
        <div class="container">
            <span style="font-size: 40px; font-family: 微軟正黑體; font-weight: bold;">搜尋關鍵字:你好嗎</span>
            
        </div>        
    </div>
    <?php
         include('footer.php');
    ?>

    </body>
</html>

<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `feedback` WHERE CONCAT(`fNo`, `user_id`, `fname`, `fphone`, `femail`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `feedback`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "fundonate");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>