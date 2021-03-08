<?php
//上传限制

//在这个脚本中，增加了对文件上传的限制。用户只能上传 .gif、.jpeg、.jpg、.png 文件，文件大小必须小于 200 kB：

//定义允许文件，用数组allowlist保存
$allowlist = array("gif","jpeg","jpg","png");

//PHP explode() 函数   把字符串打散为数组：
//将文件名分割
$temp = explode(".",$_FILES["file"]["name"]);
// 获取文件后缀名
$extension = end($temp);

if ((($_FILES["file"]["type"]=="image/gif")||($_FILES["file"]["type"]=="image/jpeg")
    ||($_FILES["file"]["type"]=="image/jpg")||($_FILES["file"]["type"]=="image/pjpeg")
    ||$_FILES["file"]["type"]=="image/x-png")||($_FILES["file"]["type"]=="image/png")
    &&($_FILES["file"]["size"] < 204800)
    && in_array($extension, $allowlist)){
    if ($_FILES["file"]["error"] > 0){
        echo "错误：: " . $_FILES["file"]["error"] . "<br>";
    }
    else
    {
        echo "上传文件名: " . $_FILES["file"]["name"] . "<br>";
        echo "文件类型: " . $_FILES["file"]["type"] . "<br>";
        echo "文件大小: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
        echo "文件临时存储的位置: " . $_FILES["file"]["tmp_name"];


        // 判断当前目录下的 upload 目录是否存在该文件
        // 如果没有 upload 目录，你需要创建它，upload 目录权限为 777

        if(file_exists("uplaod/".$_FILES["file"]["name"])){
            echo $_FILES["file"]["name"]."文件已存在";

        }else{
            // 如果 upload 目录不存在该文件则将文件上传到 upload 目录下
            //move_uploaded_file() 函数将上传的文件移动到新位置。
            move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$_FILES["file"]["name"]);
            echo "文件存储在："."upload/".$_FILES["file"]["name"];
        }
    }
}else{
    echo "非法的文件格式";
}



