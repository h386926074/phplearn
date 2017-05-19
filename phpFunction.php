<?php
header("Content-Type:text/html;charset=utf-8");
    $one = 200;
    $two = 100;

    function demo(){
      // $GLOBALS['one'] = $GLOBALS['two'] + $GLOBALS['one'];
      global $one ,$two;
      $one = $one + $two;
    }
    demo();
    echo $one.phpinfo();

    function  test(&$arg){
      $arg = 200;
    }
    $var = 100;
    test($var);
    echo "$var";

    function more_args(){
      for ($i=0; $i < func_num_args(); $i++) {
        echo "第".$i."个参数是".func_get_arg($i)."<br>";
      }
    }
    more_args("one","tow","three",1,2,3);


    function fun($msg1,$msg2){
      echo "$msg1 = ".$msg1;
      echo "<br>";
      echo "$msg2=".$msg2;
    }

    call_user_func_array("fun",array("LAMP","兄弟连"));

    $contact1[0] = 1;
 ?>
 <?php
  echo "编号：".$contact1[0]."<br>";
  ?>
