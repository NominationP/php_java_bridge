<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>支付状态</title>

<link href="css/public.css" type="text/css" rel="stylesheet"/>
<link href="css/order_1.css" type="text/css" rel="stylesheet"/>

<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        function getUrlPara(paraName){
            var sUrl  =  location.href;
            var sReg  =  "(?:\\?|&){1}"+paraName+"=([^&]*)"
            var re=new RegExp(sReg,"gi");
            re.exec(sUrl);
            return RegExp.$1;  }

            //alert("支付成功："+ getUrlPara("returncode"));
            //console.log(getUrlPara("returncode"));

            //获取returnURL的参数
            var billnumber = getUrlPara("billnumber");          //订单号
            var sctbillnumber = getUrlPara("sctbillnumber");    //申城通订单号
            var merchantnumber = getUrlPara("merchantnumber");  //商户号
            var terminalnumber = getUrlPara("terminalnumber");  //终端号
            var billtype = getUrlPara("billtype");              //订单类型
            var curtype = getUrlPara("curtype");                //币种
            var billamount = getUrlPara("billamount");          //订单金额
            var returncode = getUrlPara("returncode");          //返回交易码
            var sign = getUrlPara("sign");                      //签名

            //console.log(getUrlPara("billnumber"));
            //alert(billnumber);
            $('#billnumber').val(billnumber);
            $('#sctbillnumber').val(sctbillnumber);
            $('#billtype').val(billtype);
            $('#curtype').val(curtype);
            $('#billamount').val(parseFloat(billamount)/100);
            $('#returncode').val(returncode);

            switch(parseInt(returncode))
            {
                case 0:
                    alert("支付成功");break;
                case 1:
                    alert("交易所需参数错误，不能继续");break;
                case 2:
                    alert("系统结账，暂停服务");break;
                case 3:
                    alert("检测系统状态错误");break;
                case 5:
                    alert("无此商户号");break;
                case 6:
                    alert("商户尚未开通此功能");break;
                case 7:
                    alert("为找到指定终端");break;
                case 11:
                    alert("订单号重复");break;
                case 25:
                    alert("卡超出有限期");break;
                case 26:
                    alert("养福卡不可用于多卡支付");break;
                case 8:
                    alert("读取卡信息失败或卡号无效，请重试");break;
                case 9:
                    alert("卡户状态或密码校验失败，请重试");break;
                case 10:
                    alert("卡账户非网上账户");break;
                case 19:
                    alert("未找到此商户终端的费率设置");break;
                case 17:
                    alert("变动超限额");break;
                case 18:
                    alert("余额不足");break;
                default:
                    alert("支付异常");
            }
    });


</script>
</head>
<body>

    <div class="wt1080">
    <!--------------标题----------->
    <div class="my_order1">
        <h1>订单确认</h1>
    </div>
    <!-----------订单提交-------------->
    <div class="finish">
        <div class="rr">
            <span class="one">订单号:</span>
            <span class="two"><font><input  type="text" id="billnumber" value="11111" readonly="true" ></font></span>
        </div>

        <div class="rr">
            <span class="one">申城通订单号:</span>
            <span class="two"><font><input  type="text" id="sctbillnumber" value="1111111" readonly="true" ></font></span>
        </div>
        <!--
        <div class="rr">
            <span class="one">订单类型：</span>
            <span class="two"><font><input  type="text" id="billtype" value="121212121" readonly="true" ></font></span>
        </div>
        <div class="rr">
            <span class="one">币种：</span>
            <span class="two"><font><input  type="text" id="curtype" value="001" readonly="true" ></font></span>
        </div>
        -->
         <div class="rr">
            <span class="one">订单金额：</span>
            <span class="two"><font><input  type="text" id="billamount" value="￥411.00" readonly="true" ></font></span>
        </div>
          <div class="rr">
            <span class="one">交易码：</span>
            <span class="two"><font><input  type="text" id="returncode" value="1234" readonly="true" ></font></span>
        </div>

  </div>
    <!----------------支付信息------------------->
    <div class="pay">



             <div style="margin:0 auto; width:200px; padding-top:20px;"><a href="http://120.27.144.115:8080/shenchengtong/index.jsp" class="jiesuan">返回</a></div>
    </div>
</div>


</body>
</html>