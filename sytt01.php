<?php

//header('Content-type:text/json');     //这句是重点，它告诉接收数据的对象此页面输出的是json数据；

//$json='{"name":"yovae","password":"12345"}';    //虽然这行数据形式上是json格式，如果没有上面那句的话，它是不会被当做json格式的数据被处理的；

//echo ($json);

$arr=array('code'=>'200','retinfo'=>'请求成功','count'=>'1395','page'=>'1','perpage'=>'10','total'=>'1','list'=>array(array('contentid'=>'80', 'title'=>'十堰对9个县市区40个重点项目实地拉练 比学赶超促发展',
'creatime'=>'1491697810','thumb'=>'http://app.site.10yan.com.cn/Uploads/Picture/image/20170409/1491697901RL1QUV1Y.jpg','suburl'=>'3','outurl'=>'','modelid'=>'0','read'=>null,'isReply'=>'1','titletype'=>'local'
,'typename'=>'local','labelscolor'=>'#0033FF','labelsname'=>'专题','comments'=>'0','extract_thumb'=>array())));
$result=json_encode($arr);
echo ($result);

?>
