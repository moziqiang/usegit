<?php
// 二维数组

$products = array(
    array("apple"=>6,"pear"=>5,"tomato"=>2),
    array("miku"=>3,"water"=>2,"cola"=>4),
    array("Noodles"=>7,"snacks"=>1)
);
//print_r($products);
//echo $products[0][1];

// 用for循环+foreach循环 打印数组中的数组

for ($i=0;$i<count($products);$i++){
//    print_r( $products[$i]);
    foreach ($products[$i] as $key=>$value){
        echo "$key -------> $value <br>";
    }
}

// 用for循环 打印数组中的数组
$produces = array (
    array ('apple', 6, 28.8 ),
    array ('pear', 3, 15.6 ),
    array ('banana', 10, 4.6 )
);
for($i = 0; $i < count ( $produces ); $i ++)
{
    for($j = 0; $j < count ( $produces [$i] ); $j ++)
    {
        echo '|' . $produces[$i][$j];
    }
    echo '<br>';
}

//用foreach来打印则更容易（推荐）

foreach ($products as $key1=>$value1){
    foreach ($value1 as $key2=>$value2){
        echo "$key2 ---------> $value2 <br>";
    }
}