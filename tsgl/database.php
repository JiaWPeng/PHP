<?php
    
    function getConnection(){
        $hostname = "localhost";
        $database = "tushuguanli";
        $userName = "root";
        $password = "";
        global $conn;
        $conn = mysqli_connect($hostname,$userName,$password,$database);
        
       /* if(!$conn) echo "失败!";

         else echo "成功!";
        */
        mysqli_select_db($conn,$database);

    }
    function close(){
        global $conn;
        if($conn){
            mysqli_close($conn);
        }
    }
?>