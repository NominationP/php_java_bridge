<?php
require_once("java/Java.inc");
 // java_require("test3.jar");
$myj = new Java("sign.ClientTestM");

// $s = "1484722489^101^001^2^http://localhost/java/return.php";
$dd = $_GET['par'];

$dd = explode("^", $dd);
$billnumber = $dd[0];
$billtype = $dd[1];
$curtype = $dd[2];
$billamount = $dd[3];
$returnurl = $dd[4];
echo $myj->getSign($billnumber,$billtype,$curtype,$billamount,$returnurl);

// echo "Test Results are <b>" . $myj->test() . "</b>";


// $myj->foo = "A String Value";
// echo "You have set foo to <b>" . $myj->foo . "</b><br>\n";
// echo "My java method reports: <b>" . $myj->whatisfoo() . "</b><br>\n";
?>


