<?php
require_once("java/Java.inc");

 // java_require("test3.jar");
$myj = new Java("main.Start");

// $s = "1484722489^101^001^2^http://localhost/java/return.php";

$h = new java("java.util.HashMap");

$h->put("version", "1.0.1");
$h->put("merchantId", "000001110100000501");
$h->put("merchantOrderId", "1484820089783");
$h->put("merchantOrderTime", "20170105160834");
$h->put("merchantOrderAmt", "1");
$h->put("merchantDisctAmt", "");
$h->put("merchantOrderCurrency", "156");
$h->put("frontUrl", "http://localhost/java/yufu_fronturl.php");
$h->put("backUrl", "http://localhost/java/yufu_backurl.php");
$h->put("bankId", "");
$h->put("userType", "01");
$h->put("merchantUserId", "178");
$h->put("userName", "");
$h->put("mobileNum", "");
$h->put("userIp", "180.168.170.190");
$h->put("merchantOrderDesc", "");
$h->put("transTimeout", "");
$h->put("merchantSettleInfo",
        "[{'sumGoodsName':'三星手机，小米平板，小熊猫洗衣机','merchantId':'000001110100000501','merchantName':'裕福商贸','orderAmt':'1'}]");
$h->put("gwType", "02");
$h->put("rcExt", "");
$h->put("msgExt", "");
$h->put("misc", "");


// $re = sha1(md5("4444"));
$re = $myj->PaySet($h);
$re = java_values($re);

// print_r($re);

// $s = '"'.'merchantId='.$re['merchantId'].'&data='.$re['data'].'&enc='.$re['enc'].'&sign='.$re['sign'].'")';
// // print_r($s);

// $post = [
//     'merchantId' => $re['merchantId'],
//     'data' => $re['data'],
//     'enc' => $re['enc'],
//     'sign' => $re['sign'],
// ];

// $ch = curl_init("http://malltest.yufuccc.com/payment/payshow.do");

// curl_setopt($ch, CURLOPT_POST, 1);
// curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
// curl_setopt(CURLOPT_RETURNTRANSFER, true);
// // in real life you should use something like:
// // curl_setopt($ch, CURLOPT_POSTFIELDS,
// //          http_build_query(array('postvar1' => 'value1')));

// // receive server response ...
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// $server_output = curl_exec ($ch);

// curl_close ($ch);

// print_r($server_output);

?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>申城通</title>

<link href="css/public.css" type="text/css" rel="stylesheet"/>
<link href="css/order_1.css" type="text/css" rel="stylesheet"/>

<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
   $('form').attr('action','http://malltest.yufuccc.com/payment/payshow.do').submit();
});

</script>
</head>
<body>


<form id="form1" name="form1" method="post"
        >
        <input type="hidden" name="merchantId" value="<?php  echo $re['merchantId']?>">
        <input type="hidden" name="data" value="<?php  echo $re['data']?>">
        <input type="hidden" name="enc" value="<?php  echo $re['enc']?>">
        <input type="hidden" name="sign" value="<?php  echo $re['sign']?>">

    </form>



</body>
</html>


