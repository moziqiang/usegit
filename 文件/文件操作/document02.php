<?php

//检查文件是否存在
//file_exists()	检查文件或目录是否存在。
$file_path = "document.txt";
if(file_exists($file_path)){
//    echo "文件存在";
    //使用fread()
//    $f = fopen("document.txt","r");
//    $file_str = fread($f,filesize("document.txt"));//指定读取大小，这里把整个文件内容读取出来
//    echo $file_str = str_replace("\r\n","<br />",$file_str); //str_replace字符串替换
//    fclose($f);

    //第二种方法,使用file_get_contents()   将整个文件内容读入到一个字符串中

//    $f = fopen($file_path,"r");
//    $file_str = file_get_contents($file_path);
//    echo $file_str = str_replace("\r\n","<br />",$file_str); //str_replace字符串替换,此处将换行符换位<br>


    //第三种方法
    //file()    把文件读入一个数组中。
    $file_list = file($file_path);
    for($i = 0;$i< count($file_list);$i++){
        echo $file_list[$i]."<br>";
    }
}else{
    echo "文件不存在！";
}


