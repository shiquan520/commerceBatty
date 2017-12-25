<?php
    header ('content-type:text/html;charset=utf-8');


    $twoarray=array(
        array(
            'name'=>'皮卡丘',
            'skill'=>'十万福特'
        ),

        array(
            'name'=>'草精灵',
            'skill'=>'打火机'
        ),
        array(
            'name'=>'葫芦小金刚',
            'skill'=>'什么都会'
        ),

        array(
            'name'=>'漩涡名人',
            'skill'=>'嘴遁'
        )

    );



    $li=count($twoarray);

    echo $li;
    echo '<style>
    h4{
         font-size:18px;
        color:red;
        font-family:"宋体";
    }
       




    
    
    </style>';


for($i=0;$i<$li;$i++){
    // echo '<h4 style="color:yellowgreen;font-size:13px;">';
    echo '<h4 >';
    echo $twoarray[$i]['name'],$twoarray[$i]['skill'],'<br>';
    echo '</h4>';


}








?>