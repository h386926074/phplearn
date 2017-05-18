<?php
/**
 * Created by PhpStorm.
 * User: huangfeng
 * Date: 2017/2/25
 * Time: 下午4:16
 */


$a = 20;
$b = 30;
$c = $a & $b;
echo $c;

var_dump(false||false);

$bool = false;
$num = 10;

if ($bool &&($num++ >0)){

    echo "条件不成立 ";
}else{

    echo "<br>haha";
}

$link = mysqli_connect("localhost","root","123456") or die("数据库连接失败");

echo "645465";