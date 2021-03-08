<?php
//basename — 返回路径中的文件名部分
//
//dirname — 返回路径中的目录部分
//
//pathinfo — 返回文件路径的信息 返回数组

//
//realpath — 返回规范化的绝对路径名

$path = 'test.txt';

$path = realpath($path);
echo "realpath 返回规范化的绝对路径名: $path";
echo "<br>";

echo "dirname — 返回路径中的目录部分:".dirname($path);
echo "<br>";


echo "basename — 返回路径中的文件名部分:".basename($path);
echo "<br>";
echo "<br>";
echo "<br>";


$array_path = pathinfo($path);
echo 'basename : '.$array_path['basename'].'<br>';
echo 'dirname : '.$array_path['dirname'].'<br>';
echo 'extension : '.$array_path['extension'].'<br>';
echo 'filename : '.$array_path['filename'].'<br>';

