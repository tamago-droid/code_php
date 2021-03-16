<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>おみくじアプリ</title>
    <link href="style.css" rel="stylesheet" />
</head>
<body>
    
<h1><?php echo "おみくじを引いてみよう" ?></h1>

    
<?php
    $kuji=mt_rand(1,4);
    
    if($kuji==1) {
        echo '<img src="./img/ああだい.png">';    
        
    }elseif($kuji==2) {
        echo "中吉";
    
    }elseif($kuji==3) {
        echo "小吉";
    
    }elseif($kuji==4) {
        echo "凶";
    
    }

?>  
</body>
</html>
