<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>图书借阅系统</title>
    <link href="css\style.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="css/jieyue.css">
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
                <li class="hm"><a href="index.php">主页</a></li>
                <li><a href="jieyue.php">图书借阅</a></li>
                <li><a href="guihuan.php">归还图书</a></li>
               
                <li><a href="books.php">热门图书</a></li>
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

        <form class="h" action="js.php" method="post" enctype="multipart/form-data">
            <center>
                <hr>
                <h2>借阅人信息</h2>
                用&nbsp;户&nbsp;名：<input type="text" name="user" placeholder="请使用账号来填写"><br>
                借阅数量：<input type="text" name="num"><br>
                借书时间：<input type="date" name="jtime"><br>
                还书时间：<input type="date" name="htime"><br>

                <hr>
                <h2>图书信息</h2>
                图书名称：<input type="text" name="bookuser"><br>
                图书作者：<input type="text" name="bookz"><br>
                图书ISBN：<input type="text" name="bookid"><br>
                <input type="submit" class="but" value="完成借阅">
                <hr>

                

            </center>
        </form>


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

