<?php
$versions = $_SERVER["SERVER_SOFTWARE"];
$sysversion = PHP_VERSION;
echo $versions.$sysversion.'</br>';

mysql_connect("localhost","root","123456");
$mysqlinfo = mysql_get_server_info();
echo $mysqlinfo;

$yun = "12334535";

function addCache($tabname,$sql,$data){

}

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>第一个php</title>
  </head>
  <body <?php echo 'bgcolor="#cccccc"' ?>>
  <p style="text-align:center;text-indent:0;">
	   <img src="https://n.sinaimg.cn/translate/20170514/77XH-fyfeutp9065936.jpg" border="0" />
  </p>
    <?php echo "服务器的时间".date("Y-m-d H:i:s")."<br>" ?>
    <?php $expression = 1;  if ($expression) { ?>
    <p align="<?php echo 'center'?>">This is true</p>
    <?php }else{ ?>
      <p>this is false.</p>
    <?php } echo $yun?>
    <script language='php'>
      echo "2.这个是脚本风格，是最长的标记"
    </script>


    <?php
      $hi = "hello";
      $$hi = "world";

      echo "$hi $hello</br>";
      echo "$hi ${$hi} </br>";

      $foo = 123;
      $abc = &$foo;

      $abc = 456;
      echo $foo."</br>";
      echo $abc."</br>";

      $foos = 25;
      $bars = &$foo;  //php中的  变量引用& 只是把两个变容相等相互关联   不是内存上同体
      unset($bars);
      echo $foos."</br>";

      $bool = TRUE;
      echo var_dump($bool)."</br>";

      $bear = 'heineken';
      echo "${bear}s taste is great"."</br>";
      $strings=<<<Eot
      这里的世界很精彩  这里的世界很无奈</br>

      这里的世界很无奈
      这里的世界很无奈
      这里的世界很无奈
Eot;

      echo "$strings"."</br>";

      echo "hahh"."<br>";

      
     ?>
  </body>
</html>