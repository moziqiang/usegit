<?php
//自定义键数组
//如果不想创建默认下标为零的数组，可以用如下方法，创建键为字符串的数组
$userage = array('jack'=>15,'lucy'=>18,'mio'=>17);
print_r($userage);

echo "<br>";
//往自定义键数组里追加元素
//初始化数组
$price = array("apple"=>17);

$price["banana"]=2;
$price["orange"]=6;

foreach ($price as $key => $value){
    echo "水果名:$key,价格:$value <br>";
}

//不创建数组直接添加
$ages['Jack']=23;
$ages['Lucy']=25;
$ages['Mark']=28;
foreach($ages as $key => $value)
{
    echo $key.'----'.$value.'<br/>';
}


//array_unique() — 移除数组中重复的值
$nums = array(1,2,3,4,5,6,5,4,3,2,1,1,2,3,4,5,6);
//返回一个不包含重复值的数组
$result = array_unique($nums);
print_r($result);
