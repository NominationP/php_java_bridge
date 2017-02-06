 <?php
 require_once("java/Java.inc");

  // java_require("test3.jar");
 $myj = new Java("main.Start");

 // $s = "1484722489^101^001^2^http://localhost/java/return.php";

 $h = new java("java.util.HashMap");

    $h->put("version", "1.0.1");                        //接口版本号
    $h->put("merchantId", "000001110100000501");        //商户代码
    $h->put("settleMerchantId", "000001110100000501");                  //结算商户代码
    $h->put("merchantOrderId", "1484890054176");           //商户订单号
    $h->put("merchantOrderTime", "20170105160834");     //商户订单时间
    $h->put("merchantOrderAmt", "1");                   //商户订单金额
    $h->put("merchantOrderDesc", "");           //非必填         商户订单描述
    $h->put("gwType", "02");                            //网关类型
    $h->put("orgBpSerialNum", "1000000000000031627");                       //原业务流水号
    $h->put("orgTransTime", "20161223115416");                      //原订单交易时间
    $h->put("backUrl", "http://120.27.144.115:8080/yufu/log.jsp");                              //后台通知URL
    $h->put("msgExt", "");                      //非必填         商户保留域
    $h->put("rcExt", "");                       //非必填            风控信息域
    $h->put("misc", "");                        //非必填         自定义保留域

$re = $myj->Refund("000001110100000501",$h);
$re = java_values($re);
print_r($re);


?>