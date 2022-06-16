<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>图书借阅系统</title>
    <link href="css\style.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="css/lunbotu.css">
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
    <div class="content">

        <!-- 轮播图样式 -->
        <div class="banner">
            <ul>
                <li class="item">
                    <h5>读书可以对自己的思想进行<br>自我改造</h5>
                    <p>
                        &nbsp;&nbsp;知识就像呼吸
                        一样，吐纳之间，方见人的气<br>&nbsp;质和涵养。对于相同经历和智力的人来说，看书<br>
                        &nbsp;的人和不看书的人最大的不同，是看书的人透过<br>&nbsp;&nbsp;书本所建立的三观要远比不看书的人要广的<br>&nbsp;&nbsp;&nbsp;多的多。对同样一件事情的看法，往往能<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;透过表象直达本质，并且善于总结。
                    </p>

                </li>
                <li class="item">
                    <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名人心中的书</h5>
                    <p>&nbsp;&nbsp;莎士比亚有句名言：“书籍是全世界的营<br>&nbsp;养品，生活里没有书籍就好像大地没有阳光；智<br>&nbsp;&nbsp;慧里没有书籍，就好像鸟儿没有了翅膀。”罗<br>&nbsp;&nbsp;&nbsp;曼·罗兰说：和书籍生活在一起，永远不会<br>&nbsp;&nbsp;&nbsp;叹气。谁都不会死读一本书，每个人都从书<br>&nbsp;&nbsp;&nbsp;&nbsp;中研究自己，要不是发现自己就是控制自<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;己。
                    </p>
                </li>
                <li class="item">
                    <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;书是启明之星</h5>
                    <p>&nbsp;&nbsp;书是人类思想的宝库，是人类最好的老师，是<br>&nbsp;&nbsp;人类精神生命的结晶，也是我们认识世界、改<br>&nbsp;造世界的重要工具。书是人类进步的阶梯，是智<br>&nbsp;&nbsp;慧的源泉。书是知识的博大载体，在书籍的海<br>&nbsp;&nbsp;&nbsp;洋里畅游，浮躁可以变得沉静。书是倾心之<br>&nbsp;&nbsp;&nbsp;&nbsp;良朋，是精神之食粮，是生命之结晶，是<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;催人之号角，是醒人之警钟……。
                    </p>
                </li>
            </ul>
            <div class="cursor pre">&lt;</div>
            <!-- 大于号与小于号 -->
            <div class="cursor next">&gt;</div>

            <ul class="dots">
                <!-- 几个小点点 -->
                <li class="btn active"></li>
                <li class="btn"></li>
                <li class="btn"></li>
            </ul>
        </div>

        <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
        <script>
            var index = 0;
            // 设置轮播的时间
            var timer = setInterval("next()", 2000);

            $(".i").mouseover(
                function () {
                    clearTimeout(timer);
                }
            )
            $(".i").mouseout(
                function () {
                    clearTimeout(timer);
                    timer = setInterval("next()", 3000);
                }
            )
            $(".dots .btn").mouseover(
                function () {
                    index = $(this).index(); //获取点击元素的下标
                    $(this).addClass("active").siblings().removeClass("active");
                    $(".item").eq(index).fadeIn().siblings().fadeOut();
                    clearTimeout(timer);
                }
            )
            $(".dots .btn").mouseout(
                function () {
                    index = $(this).index(); //获取点击元素的下标
                    $(this).addClass("active").siblings().removeClass("active");
                    $(".item").eq(index).fadeIn().siblings().fadeOut();
                    clearTimeout(timer);
                    timer = setInterval("next()", 3000);
                }
            )

            function play() {
                // var offset = index * (-520) + "px";
                // $(".imgs").animate({
                //     "margin-left": offset
                // }, 1000)
                $(".item").eq(index).fadeIn().siblings().fadeOut();
                $(".dots li").removeClass("active").eq(index).addClass("active");

            }

            function next() {
                index++;
                if (index == 3) index = 0;
                play();
            }

            function pre() {
                index--;
                if (index == -1) index = 2;
                play();
            }
            $(".next").click(next);
            $(".pre").click(pre);
        </script>



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