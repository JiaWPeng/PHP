<?php
    function upload($file,$filePath){
        $error = $file['error'];
        switch($error){
            case 0:
                $zp = $file["name"];
                echo "您上传的照片为：".$zp."<br>";
                $zpTemp = $file["tmp_name"];
                $lujing = $filePath."/".$zp;
                move_uploaded_file($zpTemp,$lujing);
                return "文件上传成功";
                
            case 1:
                return "上传文件超过PHP.ini中upload_max_filesize选项的限制的值<br>";
                    
            case 2:
                return "上传文件的大小超过了Form表单MAX_FILE_SIZE选项指定的值<br>";
                
            case 3:
                return "只用部分文件上传<br>";
                
            case 4:
                return "没有文件上传";
                
        }
    }
?>