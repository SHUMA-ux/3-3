<?php
$my_name = $_POST['my_name'];
$number = $_POST['number'];
$randamn_number=mt_rand(1,6);

function omikuji($_number,$_randamn_number){
    $_omokuji_number=$_number*$_randamn_number;
    return $_omokuji_number;
};

$omokuji_number=omikuji($number,$randamn_number);

function omokuji($omokuji_number){
    if(10>=$omokuji_number  && $omokuji_number>=1){
        echo "凶";
    }elseif(15>=$omokuji_number && $omokuji_number>=11){
        echo "小吉";
    }elseif(20>=$omokuji_number && $omokuji_number>=16){
        echo "中吉";
    }elseif(25>=$omokuji_number && $omokuji_number>=21){
        echo "吉";
    }elseif(30>=$omokuji_number && $omokuji_number>=26){
        echo "大吉";
    }else{
        echo "大凶";
}
}


?>

<p><?php
date_default_timezone_set('Asia/Tokyo');
echo date("Y年m月d日 H時i分s秒", time());
?>
</p>
<p>名前は<?php echo $my_name; ?>です。</p>
<p>番号は<?php echo $omokuji_number; ?>です。</p>
<p>結果は<?php omokuji($omokuji_number)?>です。</p>