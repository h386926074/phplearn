
<html>
<head>
    <meta http-equiv="content-type" content="text/html"; charset="utf-8">
    <title> 第一个PHP 程序（获取服务器信息）</title>
    <style>
        #demo {
            position: absolute;   /*绝对定位 */
            width: 300px;
            height: 300px;
            top: 100px;
            left: 200px;
            background: #BABABA;
            z-index: 1;  /*定义盒子位于上一层中*/
        }

        #login {
            width: 300px;
            height: 200px;
            position: absolute;
            left:50%;
            top:50%;
            margin-left: -150px;
            margin-top: -100px;
            background: #53CD6F;
            z-index: 2;
        }
    </style>
</head>
<body>
<div id="demo">
    我是一个盒子区块,我现在在网页中的哪个位置呢?
</div>
<div id="login">
    登录框的盒子模型
</div>
</body>
<?php
/**
 * Created by PhpStorm.
 * User: huangfeng
 * Date: 2016/11/8
 * Time: 下午5:51
 */
    $sysos = $_SERVER["SERVER_SOFTWARE"];
    $sysversion = PHP__VERSION;
echo("haha");
    mysqli_connect("localhost","root","123456");
    $mysqlinfo = mysqli_get_server_info();
    echo($mysqlinfo);

?>
</html>

