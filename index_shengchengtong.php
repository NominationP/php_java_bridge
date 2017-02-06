
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>申城通</title>

<link href="css/public.css" type="text/css" rel="stylesheet"/>
<link href="css/order_1.css" type="text/css" rel="stylesheet"/>

<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>

</head>
<body>


<form id="form" method="get"
    >

        <input type="hidden" id="merchantnumber" name="merchantnumber" value="888831201610002">
        <input type="hidden" id="terminalnumber" name="terminalnumber" value="16100201">
        <input type="hidden" id="billnumber" name="billnumber" value="1484722489">
        <input type="hidden" id="returnurl" name="returnurl" value="http://localhost/java/return.php" >
        <input type="hidden" id="sign" name="sign" value="" >

        <div class="wt1080">

            <div class="my_order1">
                <h1>订单确认</h1>
            </div>

            <div class="pay">
                <div class="roo">支付信息<span></span></div>
                    <div class="kk">
                        <div class="tt">
                             订单类型：<span><input  type="text" id="billtype" name="billtype" value="101" readonly="true" ></span>

                        </div>
                        <div class="tt">
                             币种：<span><input  type="text" id="curtype" name="curtype" value="001" readonly="true" ></span>

                        </div>

                        <div class="pp">
                            订单金额<span><input  type="text" id="billamount" name="billamount" value=""></span>
                        </div>

                    </div>

                <div style="margin:0 auto; width:200px; padding-top:20px;">
                    <input class="button orange" id="submitBtn" type="button" value="确认支付">
               </div>
            </div>
        </div>
</form>

<script>



$('#submitBtn').click(function(e) {

        var billnumber = $("#billnumber").val()
        var billtype = $("#billtype").val()
        var curtype = $("#curtype").val()
        var billamount = $("#billamount").val()*100
        var returnurl = $("#returnurl").val()
        console.log(billamount)

        $.ajax({


                    type: "get", //用POST方式传输

                    dataType: "text", //返回的数据格式

                    url: "Java.php", //目标地址(根据实际地址)

                    data: "par="+ billnumber + "^" + billtype + "^" + curtype + "^" + billamount + "^" + returnurl,

                    error: function (XMLHttpRequest, textStatus, errorThrown) { },

                    success: function (msg)
                    {

                        $('#sign').val(msg);
                        $('#billamount').val(billamount);
                        $("#form").attr("action","https://Card.shenchengtongcard.com/paymentAction!payApply.action").submit();

                    }

                });
        return true; // return false to cancel form action
        });

</script>



</body>
</html>