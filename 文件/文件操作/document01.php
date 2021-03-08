<?php
//fopen() 函数用于在 PHP 中打开文件。
//格式 fopen("文件名"."打开格式");

//打开格式有以下几种
//r	只读。在文件的开头开始。
//r+	读/写。在文件的开头开始。
//w	只写。打开并清空文件的内容；如果文件不存在，则创建新文件。
//w+	读/写。打开并清空文件的内容；如果文件不存在，则创建新文件。
//a	追加。打开并向文件末尾进行写操作，如果文件不存在，则创建新文件。
//a+	读/追加。通过向文件末尾写内容，来保持文件内容。
//x	只写。创建新文件。如果文件已存在，则返回 FALSE 和一个错误。
//x+	读/写。创建新文件。如果文件已存在，则返回 FALSE 和一个错误

//$file = fopen("document.txt","r"); 没有document.txt文件就会报错
//a+	读/追加。通过向文件末尾写内容，来保持文件内容。
$file = fopen("document.txt","a+");


//如果 fopen() 函数不能打开指定的文件，下面的实例会生成一段消息：

//$f = fopen("test.txt","r") or exit("打不开此文件");

//fclose() 函数用于关闭打开的文件：

//关闭test.txt文件指针$f

//fclose($f);

//将一段话写入document.txt，若文件不存在则创建之

$words = "这里是一段废话,";
//通过fwrite 写入
fwrite($file,$words);
$another_words = "我是另一段话，由file_put_contents()方法写入";
//file_put_contents()	把字符串写入文件。
//在变量后面加上"\r\n"换行
// 向文件追加写入内容
// 使用 FILE_APPEND 标记，可以在文件末尾追加内容
file_put_contents("document.txt",$another_words."\r\n",FILE_APPEND);
