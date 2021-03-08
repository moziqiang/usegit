<?php
$fruits = array("lemo","banana","apple","pear");
//sort()函数对英文排序
echo "原数组:<br>";
print_r($fruits);
echo"<br>";
sort($fruits);
echo "sort()函数排序后的数组.<br>";

print_r($fruits);
echo '<br/>';
echo '<br/>';
echo '<br/>';

//sort()函数对中文排序

$fruit = array('柠檬','香蕉','苹果','梨子','草梅');


echo "sort()函数对中文排序<br>";
echo '原始的数组：<br>';
print_r($fruit);
echo '<br/>';
sort($fruit);
echo '排序后的数组：<br>';
print_r($fruit);

echo '<br/>';
echo '<br/>';
echo '<br/>';
// asort() — 对数组进行排序并保持索引关系

$food = array('a'=>"鸡肉",'b'=>"牛奶",'c'=>"蔬菜",'d'=>"水果");
echo "原始数组<br>";
print_r($food);
echo "<br>";
asort($food);
echo 'asort()排序后的数组：<br>';
print_r($food);
echo '<br/>';
echo '<br/>';
echo '<br/>';


//ksort — 对数组按照键名排序
$pets = array('c'=>"cat",'f'=>"frog",'d'=>"dog",'b'=>"bee",'s'=>"snake",'m'=>"mouse");
echo "原始数组<br>";
print_r($pets);
echo "<br>";
ksort($pets);
//arsort — 对数组进行逆向排序并保持索引关系
asort($pets);
echo 'ksort排序后的数组：<br>';
print_r($pets);
echo '<br/>';
echo '<br/>';
echo 'asort排序后的数组：<br>';
print_r($pets);
echo "<br>";
echo '<br/>';


//rsort — 对数组逆向排序
$school = array("student","teacher","director","handmaster");
echo "原始数组<br>";
print_r($school);
echo "<br>";
rsort($school);
echo 'rsort 排序后的数组：<br>';
print_r($school);
echo '<br/>';
echo '<br/>';
echo '<br/>';


