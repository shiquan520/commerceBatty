<?php
header ('content-type:text/html;charset=utf-8');
//逻辑语句
$age=18;

if($age>18){
    echo '光明正大去上网';
    if($age>25){
    echo '到了结婚的年龄';
}
}

else{
    echo '不能上网也不能结婚';
}

echo '<br>';
//用switch
$day='礼拜日';

    switch ($day) {
        case '礼拜一':
        case '礼拜四';
            echo '写代码';
            break;
        
            case '礼拜二':
            case '礼拜五';
            echo '写代码';
            break;
            case '礼拜三':
            echo '斜桥代码';
            break;
            case '礼拜日':
            echo '休息';
            break;
            
        default:
           echo 'hahha';
            break;
    }



    for($i=0;$i<10;$i++){
        echo '感觉自己';
        echo '<br>';
    }

    //while
    $a=2;
    while ($a <= 10) {
        $a++;
       echo '我在这';
       echo '<br>';
    }



?>