<!DOCTYPE html>
<html>
<heda>
    <style>
        /*body{background: url(https://ss0.bdstatic.com/5aV1bjqh_Q23odCf/static/superman/img/logo/bd_logo1_31bdc765.png) firebrick;}*/
        h1 {background: #7FFFD4}
        p {
           border-style: solid;
            border-left-width: 15px;
        }
        #p1 {border:5px solid gray;
            cursor: help;
        }
        ul{
            list-style-type: decimal;
            margin: 10px;
            padding: 10px;
        }
    </style>
</heda>
<body>

<h1>firest</h1>
<p>
    秦楚网
</p>
<p id="p1">
    大数据中心
</p>
<div>
    <ul>列表one;</ul>
    <ul>列表one;</ul>
    <ul>列表one;</ul>
</div>
<? echo "alal </br>" ?>
<?php
//phpinfo();
echo "php100<br>"; /* */   // #
echo "我的第一段 PHP 脚本！";
?>
<?=$expression='1000000' ?>
</br>

<?php
    $a = 100;
    $b = "string";
    $c = true ;
    $haha = "123";
?>

<?php
  $var = "";
    if (!empty($haha)){

        echo "$var is either 0 or not set at all";
    }

   static $b = 0;
    echo $b;
    $b++;
    if (!isset($var)){
        echo "$var is not set at all";
    }

    unset($var);
    if (isset($var)){
        echo "this var is set so i will pritn";

    }


?>


</body>
</html>