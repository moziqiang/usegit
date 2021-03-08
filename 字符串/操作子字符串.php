<?php
//通常，我们想查看字符串的各个部分。例如，查看句子中的单词，或者将一个域名或电
//
//子邮件地址分割成一个个的组件部分。PHP 提供了几个字符串函数来实现此功能。
//
//使用函数explode()、implode()和join()
//
//为了实现这个功能，我们将使用的第一个函数是explode()。
//
//使用implode()或join()函数来实现与函数explode()相反的效果，这两个函数的效果是一样的

$email = 'yc60.com@gmail.com';
$email_array = explode('@',$email);
print_r($email_array);
echo "<br>";


//strtok()函数一次只从字符串取出一些片段（称为令牌）。对于一次从字符串中取出一个
$str = "I Will Be#Back";
$tok = strtok($str,",.#");
while ($tok){
    echo "$tok<br>";
    $tok = strtok(",.#");
}

//函数substr()允许我们访问一个字符串给定起点和终点的子字符串。这个函数并不适用
//
//于我们的例子中，但是，当需要得到某个固定格式字符串中的一部分时，它会非常有用。

echo substr("abcdef", 1, 3)."<br>";


// 分解字符串：str_split()返回一个数组，其中各数组元素分别是字符串参数中的一个字符串。

print_r(str_split('This is a Teacher!'));
echo "<br>";


// 逆置字符串：strrev()可以将一个字符串逆反过来。
echo strrev('This is a Teacher!')."<br>";