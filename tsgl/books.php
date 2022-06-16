<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>图书借阅系统</title>
    <link href="css\style.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="css/books.css">
</head>

<body>

    <div class="head-top">
        <div class="head-main">
            <h1><a href="index.php">图书借阅系统</a></h1>
        </div>
        <div class="user">
            <p><a href="#"><img src="images/10.jpg" alt="头像"> </a><a href="login.php" class="ri">
                    <?php
                    session_start();
                    if (isset($_SESSION["user"])) {
                        echo $_SESSION["user"];
                    } else {
                        echo "登录";
                    }
                    ?>

                </a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="userif.php" class="ri">
                    <?php

                    if (isset($_SESSION["user"])) {
                        echo "注销";
                    } else {
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
        <div class="box_all">
            <?php
            include_once("database.php");
            include_once("fileSystem.php");
            //SELECT id, firstname, lastname FROM MyGuests
            $bkSQL = "select id,shuming,cbs,jianjie from tushu";
            getConnection();
            $res = mysqli_query($conn, $bkSQL);
            if (mysqli_num_rows($res) > 0) {
            }
            $i = 0;
            while ($arr = mysqli_fetch_array($res)) {
            ?>
                <div class="center_box">
                    <a href="#" class="title">
                        <?php
                        $i++;
                        echo $arr["shuming"];
                        ?>
                    </a><b><?php echo $arr["cbs"]; ?></b><br>
                    <a href="#"><img src="images/book<?php echo $i; ?>.jpg" alt="呐喊"></a>
                    <p class="up">
                        <?php
                        echo $arr["jianjie"];
                        ?>
                    </p>
                </div>
                <?php
                     }
                ?>
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