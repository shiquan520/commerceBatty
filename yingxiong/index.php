<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   <style>
       li{
            float: left;
            width: 200px;
            height: 200px;
            border: 1px solid #000000;
            margin: 10px;


       }
       img{
           width: 150px;
           height: 150px;
       }
      

   
   
   </style>
</head>
<body>
<?php
include './date/data_king_list.php';

for($i=0;$i<count($kingStar);$i++){

?>

<li>
<img src="<?php echo $kingStar[$i]['path'] ?>" alt="">
<?php echo $kingStar[$i]['name']?>


</li>

<?php } ?>

<!-- $kingStar  -->
    
</body>
</html>