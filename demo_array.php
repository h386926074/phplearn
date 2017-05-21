<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>使用回调函数处理数组的函数</title>
  </head>
  <body>

  </body>
</html>
<?php
header("Content-Type:text/html;charset=utf-8");
    $contact = array(
      "ID" => 1,
      "姓名"=> "高某",
      "公司"=>"A公司",
      "地址"=>"北京市",
    );

    print_r(array_values($contact));
    if (in_array("1",$contact,ture)) { //ture  全等参数  默认false
      echo "Got 1"."<br>";
    }

    echo "<br>回调函数";
    function myFun($var){
      if ($var  == 1 ) {
        return ture;
        # code...
      }
    }
    print_r(array_filter($contact,"myFun"));
    echo "<br>";

// ARRYY MAP();
    $lamp = array("linux","Apache","MySQL","PHP" );

    function myfun1($v){

      if ($v === "MySQL") {
        return "HUANGFENG";
        # code...
      }
      return $v;
    }

    print_r(array_map("myfun1",$lamp));

    $aa = array("a","B","c");
    $bb = array("a","b","c");
    function func2($a,$b){
      if ($a===$b) {
        return "same";
        # code...
      }else{
        return "different";
      }
    }
    print_r(array_map("func2",$aa,$bb));
    //看到219  --- 2.使用数组实现队列
 ?>
