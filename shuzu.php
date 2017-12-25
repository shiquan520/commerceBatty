<?php
//数组定义
header ('content-type:text/html;charset=utf-8');
$foodarr=array('考级','烤鸡','烤鸭','西兰花','西红柿炒鸡蛋');

echo $foodarr[3];


//添加元素

$foodarr[]='绝代双骄';
echo $foodarr[4];

//关系型数组   键值对用=>来表示
$star=array(
    'name'=>'薛之谦',
    'skill'=>'段子手',
    'friend'=>'大张伟'
);
echo $star['friend'];
echo $star['skill'];
echo $star['name'];


//二维数组

$twoarray=array(
    array('鱼香肉丝','西兰花','白切鸡'),
    array('西红柿炒蛋','手撕包材','娃娃彩'),
);

echo $twoarray[0][0];


?>