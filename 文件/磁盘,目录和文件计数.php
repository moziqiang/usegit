<?php
//filesize — 取得文件大小
//
//disk_free_space — 返回目录中的可用空间
//
//disk_total_space — 返回一个目录的磁盘总大小

$path = 'test.txt';
//echo "filesize — 取得文件大小".filesize($path)."<br>";
$path = realpath($path);
$drive = 'c:';

// round() 函数对浮点数进行四舍五入。
echo round(filesize($path)/1024,2).'Kb'.'<br/>';

echo round(disk_free_space($drive)/1024/1024/1024,2).'Gb'.'<br>';

echo round(disk_total_space($drive)/1024/1024/1024,2).'Gb'.'<br>';



//fileatime — 取得文件的上次访问时间
//
//filectime — 取得文件的 inode 修改时间
//
//filemtime — 取得文件修改时间
echo "<br>";
echo "<br>";

$file = realpath('test.txt');
$date_format = 'Y-M-D h:i:s';
echo 'last accessing time is '.date($date_format,fileatime($file))."<br>";

echo 'last change time is '.date($date_format,filectime($file))."<br>";

echo 'last modify time is '.date($date_format,filemtime($file))."<br>";