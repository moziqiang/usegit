<?php
//通过使用 PHP 的全局数组 $_FILES，你可以从客户计算机向远程服务器上传文件。
//第一个参数是表单的 input name，第二个下标可以是 "name"、"type"、"size"、"tmp_name" 或 "error"
if($_FILES["file"]["error"]>0){
    echo "错误".$_FILES["file"]["error"]."<br>";

}else{
    //$_FILES["file"]["error"] - 由文件上传导致的错误代码
    echo $_FILES["file"]["error"];
    echo "上传文件名: " . $_FILES["file"]["name"] . "<br>";
    echo "文件类型: " . $_FILES["file"]["type"] . "<br>";
    echo "文件大小: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "文件临时存储的位置: " . $_FILES["file"]["tmp_name"];
}