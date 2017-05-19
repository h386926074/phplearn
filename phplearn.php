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

      echo "git 添加成功了";

      echo "$bear"."</br>";

      $arr = array('foo' =>"bar" ,12=> ture );
      print_r($arr);
      echo $arr["foo"];
      echo $arr[12];

      /**
       *
       */
      class Person
      {
        var $name;
        function say()
        {
          echo "Doing foo.";
        }
      }

      $p = new Person;
      $p->name = "Tom";
      $p->say();

      $file_handle = fopen("info.text","w");
      var_dump($file_handle);

      echo "<br>";
      $dir_handle = opendir("js");
      var_dump($dir_handle);

      echo "<br>";
      $link_mysql = mysql_connect("localhost","root","123456");
      var_dump($link_mysql);

      echo "<br>";
      $im_handle = imagecreate(100,50);
      var_dump($im_handle);

      echo "<br>";
      $xml_parser = xml_parser_create();
      var_dump($xml_parser);
//NULL 类型

      $b= "value";
      unset($b);
      var_dump($b);


      $foo = 10;
      $bar = (boolean)$foo;
      var_dump($bar);

      $str = "1234.456abc";
      $int = intval($str);
      echo "$int";


     ?>
     <?php
      $foo = "5bar";
      $bar = true;
      settype($foo,"integer");
      settype($bar,"string");
      echo "<br>$foo   $bar"."<br>";

      echo gettype($foo);
      var_dump($bar);

      if (is_int($foo)) {
        $foo +=4;
        echo "Integer $foo";
      }

      define("CON_INT",100);
      echo CON_INT;

      echo PHP_OS;

      echo __FILE__;
      echo __LINE__;

      ?>

      <?php
      echo "<br>";
        echo "当前系统操作系统是：".PHP_OS."<br>";
        $a = 10%3;
        var_dump($a)."\n";


        $num = rand()%100;
        echo $num;

        // $site = "http://app.10yan.com.cn/";
        // fopen($site,"r") or die("Unable to connect to $site\n");

        // $output = shell_exec('ls -all');
        $output = `ls -all`;
        echo "<pre> $output </pre>";
        $week = date("D");
        echo "$week";
       ?>




  </body>
</html>
