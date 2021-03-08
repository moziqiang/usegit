<?php

//数组
//一．什么是数组
//
//数组是一组有某种共同特性的元素，包括相似性和类型。
//
//每个元素由一个特殊的标识符来区分，称之为key，而每个key都有一个value
//


//1.创建数组的两种方式：
//用array函数

$username = array("mike","amy","john","mia","hiiro");


// print_r函数，打印关于变量的易于理解的信息
print_r($username);
echo "<br>";


// 输出数组里的值

foreach ($username as $name){
    echo "名字:".$name."<br>";
}

// 可以用range()函数
// range(0,5)该函数创建一个包含从 "0" 到 "5" 之间的元素范围的数组

$numbers = range(0,5);
foreach ($numbers as $num){
    echo "数字:".$num."<br>";
}
echo "<br>";
//输出26个字母
echo "输出26个字母<br>";
$letters= range ( 'a', 'z' );
foreach ( $letters as $letter )
{
    echo "$letter | ";
}
echo "<br>";

// 循环访问数组元素的两种方式:
// for循环访问数组

$fruit = array("苹果","香蕉","榴莲","西瓜");

for ($i = 0;$i<count($fruit);$i++){
    echo "$fruit[$i] | ";
}

echo "<br>";
// Foreach循环输出数组的下标和对应的值
echo "Foreach循环输出数组的下标和对应的值 <br>";
foreach ($fruit as $key => $value){
    echo "$key ------> $value <br>";
}



//is_array()函数，用于变量判断是否为一个数组 若为数组返回1 不为数组返回0

if (is_array($fruit)){
//    echo is_array($fruit);
    echo "该变量是一个数组 <br>";
}else{

    echo "变量不是数组 <br>";
}



