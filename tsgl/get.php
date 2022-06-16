<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>图书借阅系统</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>

    <div class="head-top">
        <div class="head-main">
            <h1><a href="index.php">图书借阅系统</a></h1>
        </div>
        <div class="user">
        <p><a href="#"><img src="images/10.jpg" alt="头像"> </a><a href="login.php"
                    class="ri">
                <?php 
                    session_start();
                    if(isset($_SESSION["user"])){
                        echo $_SESSION["user"];
                    }else{
                        echo "登录";
                    }
                ?>

                </a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="userif.php" class="ri">
                    <?php
                    
                    if(isset($_SESSION["user"])){
                        echo "注销";
                        
                    }else{
                        echo "注册";
                    }
                    ?>
                </a></p>
        </div>
        <div class="navigation">
            <ul class="nav">
                <li class="hm"><a href="index.html">主页</a></li>
                <li><a href="jieyue.html">图书借阅</a></li>
                <li><a href="guihuan.html">归还图书</a></li>
                
                <li><a href="books.html">热门图书</a></li>
                <li><a href="paihang.php">借阅排行榜</a></li>
            </ul>
        </div>

    </div>
    <div class="header">
        <div class="soc">
            <img class="one" src="images/p1.png" alt=""> </img>
            <img class="two" src="images/p2.png" alt=""> </img>
            <img class="three" src="images/p3.png" alt=""> </img>
            <img class="four" src="images/p4.png" alt=""> </img>
            <img class="five" src="images/p5.png" alt=""> </img>

        </div>
        <div class="search-bar">
            <form>
                <input type="text" placeholder="查找图书" class="tex">
                <input type="submit" value="" class="btnt">
            </form>
        </div>
    </div>
    <div class="top">
    </div>
    <div class="kong"></div>
    <div class="content">

       


    </div>
    <div class="footer">
        <div class="footer_box">
            <div class="left">
                <h4>图书馆地址</h4>
                <div class="line">
                </div>

                <address>
                    河北省张家口市<br>
                    河北北方学院西校区<br>
                </address>
            </div>
            <div class="center">
                <h4>联系方式</h4>
                <div class="line">
                </div>

                <p>电话 : +1234567890 </p>
                <p>邮箱 : 123456789@163.com </p>
            </div>
            <div class="right">
                <h4>加入我们</h4>
                <div class="line">
                </div>
                <form>
                    <input type="text" placeholder="输入你的邮箱">
                    <input type="submit" value="提交">
                </form>
            </div>

            <div class="footer_under">
                <p>版权所有 &copy; 计科三班张明昊,贾伟鹏,杜立志,刘丹洋</p>
            </div>
        </div>
    </div>
</body>

</html>

<?php
include_once("database.php");
include_once("fileSystem.php");
    if(empty($_POST)){
        exit("提交的表单数据超过POST_MAX_SIZE的配置！<br>");
    }
    $xm = $_POST['xm'];
    $password = $_POST['mima'];
    $password2 = $_POST['mima2'];
    if($password!=$password2){
        echo "<script>alert('输入的密码和确认密码不一样！')</script>";
        Header("Refresh:1;url=useradd.php");
        exit();
    }
    $userName = $_POST["zhanghao"];
    $userNameSQL = "select * from user where id = '$userName'";
    getConnection();
    $resultSet = mysqli_query($conn,$userNameSQL);
    if(mysqli_num_rows($resultSet)>0){
        close();
        echo "<script>alert('用户名已经被占用，请更换其他用户名！')</script>";
        Header("Refresh:1;url=useradd.php");
        exit();
    }
    //$shangchaun = $_FILES['wenjian']['name'];
    $registerSQL = "insert into user values('$userName','$password','$xm','0')";
    $message = "没有文件上传";
    if($message == "文件上传成功"||$message == "没有文件上传"){
        mysqli_query($conn,$registerSQL);
        $userID = $userName;
        
        
    }else{
        exit($message);
    }
    $userSQL = "select * from user where id=$userID";
    $userResult = mysqli_query($conn,$userSQL);
    if($user = mysqli_fetch_array($userResult)){
        //echo "您注册的用户名为：".$user["id"]."<br>";
        echo "<script>alert('注册成功！您注册的用户名为：".$user["id"]."')</script>";
        Header("Refresh:1;url=login.php");
    }else{
        echo "<script>alert('注册失败！')</script>";
        Header("Refresh:1;url=useradd.php");
    }
    close();
   /* $leixing = $shangchaun["type"];
    $error = $shangchaun["error"];
    // echo $leixing;
    if($leixing != "image/jpeg"){
        exit("提交的类型不是jpg格式的，请重新上传！<br>");
    }

    switch ($error){
        case 0:
            $zp = $shangchaun["name"];
            echo "您上传的照片为：".$zp."<br>";
            $zpTemp = $shangchaun["tmp_name"];
            $lujing = "tmp/".$zp;
            move_uploaded_file($zpTemp,$lujing);
            echo "照片上传成功！<br>";
            break;
        case 1:
            echo "上传文件超过PHP.ini中upload_max_filesize选项的限制的值<br>";
            break;    
        case 2:
            echo "上传文件的大小超过了Form表单MAX_FILE_SIZE选项指定的值<br>";
            break;
        case 3:
            echo "只用部分文件上传<br>";
            break;
        case 4:
            echo "没有上传文件<br>";
            break;
    }
    $serverLink = mysqli_connect("localhost","root","") or die("连接服务器失败！中断执行！");
    mysqli_query($serverLink,"set name 'gbk'");
    if($serverLink){
        echo "与服务器连接成功！<br>";
    }
    $dbLink = mysqli_select_db($serverLink,"tushuguanli")or die("选择当前数据库失败！中断执行！");
    $insertSQL = "insert into tushuguanli " */
?>