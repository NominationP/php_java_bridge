<?php
require_once("java/Java.inc");
 // java_require("test3.jar");
$myj = new Java("sign.SignToolUse");

$service = "pay";
$mer_id = "010211000001602";
$mer_date = "20170122";
$mer_trade_id = "20170122140340";
$total_fee = "1";
$attach = "putiantest";
$user_ip = "180.168.170.190";
$anti_phishing_key = java_values($myj->getTimestamp());
$return_url = "http://test.shanghai.com.cn/ptyt/returnUrl.php";
$notify_url = "http://test.shanghai.com.cn/ptyt/notifyUrl.php";
$sign_type = "RSA";
$re = $myj->getSign($service,$mer_id,$mer_date,$mer_trade_id,$total_fee,$attach,$user_ip,$anti_phishing_key,$return_url,$notify_url);
$sign = java_values($re);
$charset = "UTF-8";

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
   $('form').attr('action','http://58.247.127.220:7001/gateway/gateway.do').submit();
});

</script>
</head>
<body>


<form  method="get">
        <table>
            <tr>
                <td>接口名称</td>
                <td><input type="text" name="service" value="<?php echo $service ?>"></td>
            </tr>
            <tr>
                <td>商户号</td>
                <td><input type="text" name="mer_id" value="<?php echo $mer_id ?>"></td>
            </tr>
              <tr>
                <td>商户日期</td>
                <td><input type="text" name="mer_date" value="<?php echo $mer_date ?>"></td>
              </tr>
              <tr>
                <td>商户交易号(订单号)</td>
                <td><input type="text" name="mer_trade_id" value="<?php echo $mer_trade_id ?>"></td>
              </tr>
              <tr>
                <td>总金额</td>
                <td><input type="text" name="total_fee" value="<?php echo $total_fee ?>"></td>
              </tr>
               <tr>
                <td>附加信息</td>
                <td><input type="text" name="attach" value="<?php echo $attach ?>"></td>
              </tr>
              <tr>
                <td>用户ip</td>
                <td><input type="text" name="user_ip" value="<?php echo $user_ip ?>"></td>
              </tr>
              <tr>
                <td>防钓鱼key</td>
                <td><input type="text" name="anti_phishing_key" value="<?php echo $anti_phishing_key ?>"></td>
              </tr>
              <tr>
                <td>前台返回URL</td>
                <td><input type="text" name="return_url" value="<?php echo $return_url ?>"></td>
              </tr>
              <tr>

                <td>后台通知URL</td>
                <td><input type="text" name="notify_url" value="<?php echo $notify_url ?>"></td>
              </tr>

            <tr>
                <td>签名类型</td>
                <td><input type="sign_type" name="sign_type" value="<?php echo $sign_type ?>"></td>
              </tr>
              <tr>
                <td>签名</td>
                <td><input type="text" name="sign" value="<?php echo $sign ?>"></td>
              </tr>
              <tr>
                <td>编码方式</td>
                <td><input type="text" name="charset" value="<?php echo $charset ?>"></td>
              </tr>

            <tr>
                <td rowspan="2">
                    <input type="submit"  value="提 交" />
                </td>
            </tr>
        </table>
    </form>



</body>
</html>
