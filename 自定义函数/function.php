<?php
//按值传参

$a = 5;

function funChange($a){
    $a = 2 * $a;
}
funChange($a);
echo $a."<br>"; // 5

// 按引用传参

function funying(&$a){
    $a = 2 * $a;
}

funying($a);
echo $a."<br>"; //10


//返回多个值的函数调用

function getuser($name,$password){
    $userInfo = array($name,$password);
    return $userInfo;

}

$list = getuser("法外狂徒张三","12345678");

print_r($list);
echo "<br>";
echo "<br>";

//另一种返回多个值的函数调用
function funcUserInfo($username, $password)
{
    $userInfo [] = $username;
    $userInfo [] = $password;
    return $userInfo;
}
$arr[] = funcUserInfo ( 'Bob', '512655' );
$arr[] = funcUserInfo ( 'John', '458736' );
$arr[] = funcUserInfo ( 'Mark', '925472' );
print_r ( $arr );