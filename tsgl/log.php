<?php
    include_once("database.php");
    $userName = $_POST["zhanghao"];
    $userPwd = $_POST["mima"];
    session_start();
    
    getConnection();
    $sql = "select * from user where id='$userName' and pwd='$userPwd'";
    $res = mysqli_query($conn,$sql);
    if(mysqli_num_rows($res)>0){
        $_SESSION["user"] = $userName;
        echo "<script>alert('登录成功！')</script>";
        Header("Refresh:1;url=index.php"); 
    }else{
        echo "<script>alert('登录失败！')</script>";
        Header("Refresh:1;url=login.php"); 
    }
    close();
?>