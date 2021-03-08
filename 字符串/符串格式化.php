<?php
//chop()函数移除字符串后面多余的空白，包括新行。
//
//ltrim()函数移除字符串起始处多余空白。
//
//rtrim()函数移除字符串后面多余的空白，包括新行，此函数是chop()的别名。
//
//trim()函数移除字符串两边多余的空白。

echo trim('            php               ')."<br>";


//nl2br()函数将字符串作为输入参数，用XHTML 中的<br />标记代替字符串中的换行符。

echo nl2br("This is a Teacher!\nThis is a Student!")."<br>";

// 如果想要去掉字符串中的HTML 去掉，可以使用strip_tags()函数



echo htmlentities('<strong>我是吴祁！</strong>')."<br>"; //转换所有字符
echo htmlspecialchars('<strong>我是吴祁！</strong>')."<br>"; //转换特殊字符
echo strip_tags('<strong>我是吴祁！</strong>')."<br>"; //去掉了<strong>

//
//strtoupper()函数将字符串转换为大写
//
//strtolower()函数将字符串转换成小写
//
//ucfirst()函数将第一个字母转换为大写
//
//ucwords()函数将每个单词第一个字母转换为大写

echo strtoupper("i love you")."<br>";

echo strtolower("I LOVE YOU")."<br>";

echo ucfirst("i love you")."<br>";

echo ucwords("i love you, my sweet heart!")."<br>";

